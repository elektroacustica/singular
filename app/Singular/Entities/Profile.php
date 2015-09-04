<?php

namespace Singular\Entities;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = [
        'user_id', 'interes',
        'edad_min','edad_max',
        'estidios', 'descripcion',
        'fecha_nacimiento', 'educacion'
    ];
}
