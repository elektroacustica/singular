<?php

namespace App\Http\Controllers\Like;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Singular\Entities\Compatibility;
use Singular\Managers\LikeManager;
use Singular\Repositories\LikeRepo;


class LikeController extends Controller
{
    protected $likeRepo;

    public function __construct(LikeRepo $likeRepo)
    {
        $this->likeRepo = $likeRepo;
    }

    public function save()
    {
        $like = $this->likeRepo->newLike();

        $manager = new LikeManager($like, Input::all());

        if($manager->save())
        {
            return Redirect::back();
        }

        return $manager->getError();
    }

    public function lista()
    {
        $lista = $this->likeRepo->lista();
        return view('compatibility.lista', compact('lista'));
    }

}
