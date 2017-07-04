<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    //
    public function direccion()
    {
        return $this->belongsTo('App\Direccion');
    }
    public function unidad()
    {
        return $this->hasMany('App\Unidad');
    }
}
