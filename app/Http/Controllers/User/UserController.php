<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests;
use Singular\Repositories\UserProfileRepo;
use App\Http\Controllers\Controller;
use Singular\Managers\ProfileManager;

class UserController extends Controller
{
    public function __construct(UserProfileRepo $userProfile)
    {
        $this->middleware('auth');
        $this->userProfile = $userProfile;
    }

    public function index($id)
    {
        $person = $this->userProfile->getNotCoincidence();

        return view('user_profile.index', compact('person'));
    }

    public function cuestionario()
    {
        return view('user.cuestionario');
    }

    public function config()
    {
        $user = $this->userProfile->findProfile();
        $pais = \DB::select('select * from paises');
        $ciudad = \DB::select('select * from ciudades where pais_id = ? limit 500', ['mx']);
        return view('user.configuracion', compact('user', 'ciudad', 'pais'));
    }

    public function update()
    {
        $profile = $this->userProfile->putProfile();

        $manager = new ProfileManager($profile, \Input::all());


        if($manager->save())
        {
            return \Redirect::route('profile', \Auth::user()->name);
        }

        return $manager->getError();
    }

}
