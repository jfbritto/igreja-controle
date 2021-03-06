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

        //INSCRIÇÕES
        $this->get('/inscription/show/{id_event}', 'Inscription\InscriptionController@show')->name('inscription.show');
        $this->get('/inscription/add/{id_event}', 'Inscription\InscriptionController@create')->name('inscription.create');
        $this->post('/inscription/add/{id_event}', 'Inscription\InscriptionController@store')->name('inscription.store');
        $this->get('/inscription/report-payment/{id_inscript}', 'Inscription\InscriptionController@report_payment')->name('inscription.report_payment');
        $this->get('/inscription/pdf/{id_event}', 'Inscription\InscriptionController@inscription_pdf')->name('inscription.pdf');

        //MEMBROS
        $this->get('/member/show/{id_member}', 'Member\MemberController@show')->name('member.show');
        $this->get('/member/add', 'Member\MemberController@create')->name('member.create');
        $this->post('/member/add', 'Member\MemberController@store')->name('member.store');
        $this->get('/member/edit/{id_member}', 'Member\MemberController@edit')->name('member.edit');
        $this->post('/member/edit/{id_member}', 'Member\MemberController@update')->name('member.update');
        $this->get('/member/pdf', 'Member\MemberController@member_pdf')->name('member.pdf');
        $this->get('/member/destroy/{id_member}', 'Member\MemberController@destroy')->name('member.destroy');
        $this->get('/member/inactivate/{id_member}', 'Member\MemberController@inactivate')->name('member.inactivate');
        $this->get('/member/activate/{id_member}', 'Member\MemberController@activate')->name('member.activate');
        $this->get('/member/validate/{id_member}', 'Member\MemberController@validate_member')->name('member.validate');

        //BITH
        $this->post('/birth', 'Member\MemberController@birth_month')->name('birth.month');
        $this->get('/birth/pdf/{month}', 'Member\MemberController@birth_pdf')->name('birth.pdf');

        //CARD
        $this->get('/card/pdf', 'Card\CardController@card_pdf')->name('card.pdf');

        //SUPPORT
        $this->post('/support/add', 'Support\SupportController@store')->name('support.store');
        $this->get('/support/show/{id_message}', 'Support\SupportController@show')->name('support.show');

        //FINANÇAS
        $this->get('/finance/add', 'Finance\FinanceController@create')->name('finance.create');
        $this->post('/finance/add', 'Finance\FinanceController@store')->name('finance.store');
        $this->post('/finance', 'Finance\FinanceController@index_month')->name('finance.month');
        $this->get('/finance/pdf/{year}/{month}', 'Finance\FinanceController@balance_pdf')->name('finance.pdf');

    });


});



/*********
* SEARCH *
**********/
$this->get('/search/city/{id_estado}', 'Search\SearchController@autocomplete');



//CADASTRO EXTERNO

$this->get('/invite/{hash}', 'Member\MemberController@invite_create')->name('member.invite.create');
$this->post('/invite/{hash}', 'Member\MemberController@invite_store')->name('member.invite.store');