<?php

namespace Singular\Entities;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = [
        'user_id', 'interes',
        'edad_min','edad_max', 'pais',
        'ciudad', 'geolocalizacion', 'descripcion',
        'estado_civil', 'fecha_nacimiento'
    ];

    public function user()
    {
        return $this->belongsTo('Singular\Entities\User');
    }
}
