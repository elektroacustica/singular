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
        $like->user_id = 1;
        $like->candidato = 2;

        return $like;
    }

}