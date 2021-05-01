<?php

namespace App\Http\Controllers\Auth;
use App\User;
use Socialite;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
     public function redirectToProvider($social)
    {
        return Socialite::driver($social)->redirect();
    }
    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($social)
    {
       // $user = Socialite::driver('facebook')->user();
        $user = Socialite::driver($social)->user();
        $check = User::where('email', $user->email)->first();
        if($check)
        {
            Auth::login($check);
            Session::put('id_user',Auth::user()->id);
            Session::put('name_user',Auth::user()->name);
            Session::put('level',Auth::user()->level);
            return redirect()->route('index');


        }else{
            $data = new User;
            $data->name = $user->name;
            $data->email = $user->email;
            $data->level=2;
            $data->verify='1';
            $data->save();
            
            Auth::login($data);
            Session::put('id_user',Auth::user()->id);
            Session::put('name_user',Auth::user()->name);
            Session::put('level',Auth::user()->level);
            return redirect()->route('index');
        }

        // $user->token;
    }
}
