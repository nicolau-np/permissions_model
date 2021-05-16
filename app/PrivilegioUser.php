<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivilegioUser extends Model
{
    protected $table = "privilegio_users";

    protected $fillable = [
        'id_usuario',
        'id_permissao',
        'id_grupo',
        'estado',
    ];

    public function grupo(){
        return $this->belongsTo(Grupo::class, 'id_grupo', 'id');
    }

    public function permissao(){
        return $this->belongsTo(Permissao::class, 'id_permissao', 'id');
    }

    public function usuario(){
        return $this->belongsTo(User::class, 'id_usuario', 'id');
    }
}