<?php


/*****************
* LOGIN E LOGOUT *
******************/
Route::get('/login', 'Auth\LoginController@get_autenticar')->name('login');
Route::post('/login', 'Auth\LoginController@post_autenticar')->name('login.post');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');


/*******
* SITE *
********/
$this->get('/', 'Site\SiteController@index');





//Auth::routes();


$this->group(['middleware' => 'auth'], function(){

    //ADMINISTRADOR
    $this->group(['middleware' => 'admin', 'prefix' => 'admin', 'namespace' => 'Admin'], function(){
    
        $this->get('/', 'AdminController@index')->name('admin.home');

    });

    //IGREJA    
    $this->group(['middleware' => 'church', 'prefix' => 'church'], function(){
    
        $this->get('/', 'Church\ChurchController@index')->name('home');

        //MENU LATERAL
        $this->get('/dashboard', 'Church\ChurchController@index')->name('dashboard');
        $this->get('/member', 'Member\MemberController@index')->name('member');
        $this->get('/birth', 'Member\MemberController@birth')->name('birth');
        $this->get('/card', 'Card\CardController@index')->name('card');
        $this->get('/event', 'Event\EventController@index')->name('event');
        $this->get('/inscription', 'Inscription\InscriptionController@index')->name('inscription');
        $this->get('/finance', 'Finance\FinanceController@index')->name('finance');
        $this->get('/support', 'Support\SupportController@index')->name('support');
        $this->get('/config', 'Church\ChurchController@config')->name('config');

        //EVENTO
        $this->post('/event/add', 'Event\EventController@store')->name('event.store');
        $this->get('/event/edit/{id_event}', 'Event\EventController@edit')->name('event.edit');
        $this->post('/event/update/{id_event}', 'Event\EventController@update')->name('event.update');
        $this->get('/event/show/{id_event}', 'Event\EventController@show')->name('event.show');
        $this->get('/event/destroy/{id_event}', 'Event\EventController@destroy')->name('event.destroy');

        //MEMBROS
        $this->get('/member/show/{id_member}', 'Member\MemberController@show')->name('member.show');
        $this->get('/member/add', 'Member\MemberController@create')->name('member.create');
        $this->post('/member/add', 'Member\MemberController@store')->name('member.store');
        $this->get('/member/edit/{id_member}', 'Member\MemberController@edit')->name('member.edit');
        $this->post('/member/edit/{id_member}', 'Member\MemberController@update')->name('member.update');
        $this->get('/member/pdf', 'Member\MemberController@member_pdf')->name('member.pdf');
        $this->get('/member/destroy/{id_member}', 'Member\MemberController@destroy')->name('member.destroy');

        //BITH
        $this->post('/birth', 'Member\MemberController@birth_month')->name('birth.month');
        $this->get('/birth/pdf/{month}', 'Member\MemberController@birth_pdf')->name('birth.pdf');

        //CARD
        $this->get('/card/pdf', 'Card\CardController@card_pdf')->name('card.pdf');
    });


});



/*********
* SEARCH *
**********/
$this->get('/search/city/{id_estado}', 'Search\SearchController@autocomplete');