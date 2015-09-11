<?php

namespace Singular\Managers;


class ProfileManager extends BaseManager
{

    public function getRules()
    {
        $rules = [
            'user_id'   => 'required',
            'edad_min'  => 'required',
            'edad_max'  => 'required',
            'pais'      => 'required',
            'ciudad'    => 'required',
            'geolocalizacion'   => 'required',
            'descripcion'       => 'required',
            'estado_civil'      => 'required',
        ];

        return $rules;
    }
}