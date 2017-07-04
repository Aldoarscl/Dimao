<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    //
    public function departamento()
    {
        return $this->hasMany('App\Departamento');
    }
}
