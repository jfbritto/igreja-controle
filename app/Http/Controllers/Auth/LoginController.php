<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Church;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }

    public function get_autenticar()
    {
        return view('site.index');
    }

    public function post_autenticar(Request $request)
    {

        $user = User::where(['email'=>$request->email],['senha'=>bcrypt($request->password)],['isMember', false])->get();


        if(!$user->first())
           return redirect(route('login').'#login')->with('error', 'E-mail ou senha incorretos!');

        if (!$user->first()->isAdmin) {

            $church = Church::find($user->first()->idChurch_fk);
            // dd($church->isActive);
        }

        if (!$user->isEmpty()) {

            if (!$user->first()->isAdmin) {

                if ($church->isActive == false)
                    return redirect(route('login').'#login')->with('error', 'Igreja inativa! verifique sua situação cadastral com a administração do sistema');

                if ($church->isDeleted == true)
                    return redirect(route('login').'#login')->with('error', 'Igreja deletada! verifique sua situação cadastral com a administração do sistema');
            }

            if ($user->first()->isDeleted == true)
                return redirect(route('login').'#login')->with('error', 'Usuário deletado! verifique sua situação cadastral com a administração do sistema');

            if ($user->first()->isActive == false)
                return redirect(route('login').'#login')->with('error', 'Usuário inativo! verifique sua situação cadastral com a administração do sistema');

            // if ($user->first()->isMember == true)
            //     return redirect()->with('error', 'Para acessar as inforações da sua igreja acesse esse link');



            $credentials = $request->only(['email', 'password']);
            if(auth()->attempt($credentials))
            {
                auth()->user()->accesses()->create([
                    'date_log' => now()
                ]);

                if(auth()->user()->isAdmin)
                    return redirect()->route('admindash');

                if(!is_null(auth()->user()->idChurch_fk) && (auth()->user()->isMember == false))
                    return redirect()->route('dashboard');

                // if(!is_null(auth()->user()->idChurch_fk) && (auth()->user()->isMember == true) )
                //     return redirect()->route('home');


            }

        }

        return redirect(route('login').'#login')->with('error', 'E-mail ou senha incorretos!');


    }


    public function post_autenticar_member(Request $request, Church $church)
    {

        $user = User::where(['email'=>$request->email],['senha'=>bcrypt($request->password)],['idChurch_fk'=>$church->id])->get();


        if (!$user->isEmpty()) {

            if(!$user->first()->isMember)
               return redirect(route('login').'/'.$church->site_url.'#login')->with('error', 'Usuário não é membro!');

            if(!$user->first())
               return redirect(route('login').'/'.$church->site_url.'#login')->with('error', 'E-mail ou senha incorretos!');


            if ($user->first()->isDeleted == true)
                return redirect(route('login').'/'.$church->site_url.'#login')->with('error', 'Membro deletado! verifique sua situação cadastral com a administração da igreja.');

            if ($user->first()->isActive == false)
                return redirect(route('login').'/'.$church->site_url.'#login')->with('error', 'Membro inativo! verifique sua situação cadastral com a administração da igreja.');


            $credentials = $request->only(['email', 'password']);
            if(auth()->attempt($credentials))
            {

                if(!is_null(auth()->user()->idChurch_fk) && (auth()->user()->isMember == true) )
                    return redirect()->route('home');

            }

        }

        return redirect(route('login').'/'.$church->site_url.'#login')->with('error', 'E-mail ou senha incorretos!');


    }

    public function logout()
    {
        auth()->logout();
        session()->flush();
        return redirect('/');
    }
}
