<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    //
    public function departamento()
    {
        return $this->belongsTo('App\Departamento');
    }
}
