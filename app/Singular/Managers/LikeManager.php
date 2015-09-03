<?php

namespace Singular\Managers;

class LikeManager extends BaseManager{

    public function getRules()
    {
        $rules = [
            'user_id'   => 'required|unique_with:compatibilities,candidato',
            'candidato' => 'required',
        ];

        return $rules;

        // select users.id, name from users left join likes on users.id = likes.candidato where likes.user_id is null;
    }

}