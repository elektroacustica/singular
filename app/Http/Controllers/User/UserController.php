<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use Singular\Entities\User;
use Singular\Repositories\UserProfileRepo;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct(UserProfileRepo $userProfile)
    {
        $this->middleware('auth');
        $this->userProfile = $userProfile;
    }

    public function index($id)
    {
        $person = $this->userProfile->person(6);

        return view('user_profile.index', compact('person'));
    }

    public function cuestionario()
    {
        return view('user.cuestionario');
    }

}
