<?php

namespace Singular\Repositories;
use Singular\Entities\Like;

class LikeRepo
{
    public function getModel()
    {
        return new Like;
    }

    public function find($value)
    {
        $user = Like::find($value);
    }

    public function newLike()
    {
        $like = new Like();
        return $like;
    }

    public function getNotCoincidence()
    {
        $data = Like::join('user', 'likes.candidato', '=', 'users.id')->get();
    }

}