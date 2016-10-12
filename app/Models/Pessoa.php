<?php

namespace CodeAgenda\Models;


use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{

    protected $table = 'pessoa';

    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];

    public function telefones()
    {
        return $this->hasMany('CodeAgenda\Models\Telefone');
    }

}