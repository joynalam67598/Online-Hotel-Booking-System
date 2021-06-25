<?php

namespace App\Http\Controllers\Auth;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

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

    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback() {
        $user = Socialite::driver('google')->user();

        $this->registerOrLoginUser($user);

        return redirect()->route('home');

    }

    public function redirectToFacebook() {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback() {
        $user = Socialite::driver('facebook')->user();

        $this->registerOrLoginUser($user);

        return redirect()->route('home');

    }

    public function redirectToGithub() {
        return Socialite::driver('github')->redirect();
    }

    public function handleGithubCallback() {
        $user = Socialite::driver('github')->user();

        $this->registerOrLoginUser($user);

        return redirect()->route('home');

    }

    protected function registerOrLoginUser($request){
        $customer = Customer::where('email','=',$request->email)->first();
        if(!$customer){
            $customer = new Customer();
            $customer->first_name   = $request->name;
            $customer->last_name    = $request->name;
            $customer->email        = $request->email;
            $customer->provider_id  = $request->id;
            $customer->password     = bcrypt(123456);
            $customer->phone_number = 'None';
            $customer->address      = 'None';
            $customer->save();

            Session::put('customerId',$customer->id);
            Session::put('customerName',$customer->last_name);
        }
    }


}
