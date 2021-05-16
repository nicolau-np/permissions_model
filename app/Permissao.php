<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    protected $table = "permissaos";

    protected $fillable=[
        'permisao',
         'estado',
    ];

    public function privilegio_users(){
        return $this->hasMany(PrivilegioUsers::class, 'id_permissao', 'id');
    }
}