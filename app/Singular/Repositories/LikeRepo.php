<?php

namespace Singular\Repositories;
use Singular\Entities\Compatibility;
use Singular\Entities\User;

class LikeRepo
{
    public function getModel()
    {
        return new Compatibility;
    }

    public function find($value)
    {
        $user = Compatibilty::find($value);
    }

    public function newLike()
    {
        $like = new Compatibility();
        return $like;
    }

    public function getNotCoincidence()
    {
        $data = Like::join('user', 'compatibilies.candidato', '=', 'users.id')->get();
    }

    public function lista()
    {
        $list = Compatibility::join('users', 'users.id', '=', 'compatibilities.candidato')
            ->select('users.id as id', 'name','local', 'avatar')
            ->where('user_id', \Auth::user()->id)
            ->where('compatibility', true)
            ->get();

        return $list;

    }

    public function findChat($value)
    {
        return User::find($value);
    }

}