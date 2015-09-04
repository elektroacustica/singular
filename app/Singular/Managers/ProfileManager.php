<?php

namespace Singular\Managers;


class ProfileManager extends BaseManager
{

    public function getRules()
    {
        $rules = [
            'user_id'   => 'required',
            'interes'   => 'required',
            'edad_min'  => 'required',
            'edad_max'  => 'required',
            'educacion' => 'required',
            'descripcion'   => 'required',

        ];
    }
}