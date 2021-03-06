<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = "pessoas";

    protected $fillable = [
        'nome',
        'genero',
    ];

    public function usuario(){
        return $this->hasMany(User::class, 'id_pessoa', 'id');
    }
}