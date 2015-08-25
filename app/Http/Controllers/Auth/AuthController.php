<?php

namespace App\Http\Controllers\Auth;

use Socialite;
use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'password'  => bcrypt($data['password']),
            'role'      => 'user',
        ]);
    }

    public function loginPath()
    {
        return route('login');
    }

    public function redirectToProvider($provider)
    {
        if ($provider == 'facebook') {
            return Socialite::driver('facebook')->redirect();
        }
        elseif ($provider == 'twitter') {
            return Socialite::driver('twitter')->redirect();
        }
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        if ($provider == 'facebook') {

            $user = Socialite::driver('facebook')->user();

            $q = User::where('email', $user->email)->first();

            if ($q) {
                \Auth::login($q);
            }

            else{
                $r = new User();
                $r->name = $user->getName();
                $r->email = $user->getEmail();
                $r->password = $user->token;
                $r->avatar = $user->getAvatar();
                $r->role = 'editor';

                $r->save();

                \Auth::login($r);
            }

            return redirect('/');
            
        }
        elseif ($provider == 'twitter') {

            $user = Socialite::driver('twitter')->user();

            $q = User::where('password', $user->token)->first();

            // dd($user);

            if ($q) {
                \Auth::login($q);
            }

            else{
                $r = new User();
                $r->name = $user->getName();
                $r->email = str_random(60);;
                $r->password = $user->token;
                $r->avatar = $user->getAvatar();
                $r->role = 'editor';

                $r->save();

                \Auth::login($r);

            }
            return redirect('/');
        }
    }

}
