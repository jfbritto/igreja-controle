<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function get_autenticar()
    {
        return view('site.auth.login',
        array(
            "inicio"              => "#top-section",
            "informacoes"         => "#Section-1",
            "perguntas"           => "#Section-2",
            "cadastre"            => "/cidadao/registrar",
            "entrar"              => "/login",
            "active_session"      => "active",
            "active_cadastre"     => "",
            "active_entrar"       => ""
        )
        );
    }

    public function post_autenticar(Request $request)
    {

        $user = User::where(['email'=>$request->email],['senha'=>bcrypt($request->password)])->get();

        // dd($request->all());

        if (!$user->isEmpty()) {


            if ($user->first()->isDeleted == true)
                return redirect()->back()->with('error', 'Usuário deletado! verifique sua situação cadastral com a administração');

            if ($user->first()->isActive == false)
                return redirect()->back()->with('error', 'Usuário inativo! verifique sua situação cadastral com a administração');
            
            if ($user->first()->isMember == true)
                return redirect()->back()->with('error', 'Para acessar as inforações da sua igreja acesse esse link');    



            $credentials = $request->only(['email', 'password']);
            if(auth()->attempt($credentials))
            {
                if(auth()->user()->isAdmin)
                    return redirect()->route('dashboard');

                if(!is_null(auth()->user()->idChurch_fk))
                    return redirect()->route('dashboard');
                
                
            }

        }

        return redirect()->back()->with('error', 'E-mail ou senha incorretos!');

        
    }

    public function logout()
    {
        auth()->logout();
        session()->flush();
        return redirect('/');
    }
}
