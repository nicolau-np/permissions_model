<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = "grupos";

    protected $fillable = [
        'grupo',
        'estado',
    ];

    public function privilegio_users(){
        return $this->hasMany(PrivilegioUsers::class, 'id_grupo', 'id');
    }
}