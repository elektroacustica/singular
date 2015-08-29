<?php

namespace Singular\Managers;

class LikeManager extends BaseManager{

    public function getRules()
    {
        $rules = [
            'user_id'   => 'required|unique_with:likes,candidato',
            'candidato' => 'required',
        ];

        return $rules;
    }

}