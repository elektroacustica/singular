<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use Singular\Entities\User;
use Singular\Repositories\HomeRepo;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct(HomeRepo $homeRepo)
    {
        $this->middleware('auth');
        $this->homeRepo = $homeRepo;
    }

    public function index($id)
    {
        $user = $this->homeRepo->find($id);

        return view('user_profile.index', compact($user));
    }

    public function cuestionario()
    {
        return view('user.cuestionario');
    }

}
