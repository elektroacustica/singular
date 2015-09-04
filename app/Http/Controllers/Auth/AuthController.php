<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Redirect;
use Singular\Entities\Profile;
use Socialite;
use Validator;
use Singular\Entities\User;
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
            'avatar'    => 'http://fakeimg.pl/300/',
            'role'      => 'user',
        ]);
    }

    public function redirectPath()
    {
        return route('user.compras');
    }
    public function loginPath()
    {
        return Redirect::route('home');
    }

    public function redirectToProvider($provider)
    {
        if ($provider == 'facebook') {
            return Socialite::driver('facebook')
                ->redirect();
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
                $r->genero = $user->user['gender'];
                $r->password = $user->token;
                $r->avatar = $user->getAvatar();
                $r->role = 'editor';
                $r->save();

                $p = new Profile();

                $p->user_id     = $r->id;

                if($r->genero == 'mujer'){
                    $p->interes = 'hombre';
                }
                else{
                    $p->interes = 'mujer';
                }
                $p->edad_min    = 18;
                $p->edad_max    = 25;
                $p->save();

                \Auth::login($r);
            }

            return Redirect::route('user.compras');
            
        }
        elseif ($provider == 'twitter') {

            $user = Socialite::driver('twitter')->user();

            $q = User::where('password', $user->token)->first();

            //dd($user);

            if ($q) {
                \Auth::login($q);
            }


            else{
                $r = new User();
                $r->name = $user->getName();
                $r->email = str_random(60);;
                $r->password = $user->token;
                $r->avatar = $user->avatar_original;
                $r->role = 'editor';
                $r->genero = 'hombre';
                $r->save();

                $p = new Profile();
                $p->user_id     = $r->id;
                if($r->genero == 'hombre'){
                    $p->interes     = 'mujer';
                }
                else{
                    $p->interes     = 'hombre';
                }
                $p->edad_min    = 18;
                $p->edad_max    = 25;
                $p->descripcion = 'Escribe tus gustos :)';
                $p->save();

                \Auth::login($r);

            }
            return Redirect::route('user.compras');
        }
    }

}
