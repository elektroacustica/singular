<?php

namespace Singular\Entities;

use Illuminate\Database\Eloquent\Model;

class Compatibility extends Model
{
    protected $fillable = ['user_id', 'candidato', 'compatibility'];


}
