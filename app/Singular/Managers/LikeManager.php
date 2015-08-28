<?php

namespace Singular\Managers;

class LikeManager extends BaseManager{

    public function getRules()
    {
        $rules = [
            'user_id'   => 'required',
            'candidato' => 'required',
        ];

        return $rules;
    }

}