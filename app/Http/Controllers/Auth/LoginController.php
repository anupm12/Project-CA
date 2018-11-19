<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Carbon\Carbon;
use Auth;
use Socialite;
use App\User;

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
        $this->middleware('guest')->except(['logout','userLogout']);

    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }


    /**
     * Obtain the user information from google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $socialize_user = Socialite::driver($provider)->stateless()->user();
        $social_id = $socialize_user->getId();
        $social_email = $socialize_user->getEmail();
        $user = User::where('social_id', $social_id)->first();
        $user_email = User::where('email',$social_email)->first();

        if (!$user_email && !$user) {
            $user = new User;
            $user->social_id = $social_id;
            $user->name = $socialize_user->getName();
            $user->email = $socialize_user->getEmail();
            $user->email_verified_at = Carbon::now();
            $user->provider = $provider;
            $user->save();
        }



        if($user_email && !$user)
            return redirect('/register')->with('error','Email is already used');

        Auth::loginUsingId($user->id);

        return redirect('/');
    }

    public function userLogout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }

}
