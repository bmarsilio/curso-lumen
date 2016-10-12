<?php

namespace CodeAgenda\Models;


use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{

    protected $table = 'telefone';

    protected $fillable = [
        'descricao',
        'cod_pais',
        'ddd',
        'prefixo',
        'sufixo',
        'pessoa_id'
    ];

    public function pessoa()
    {
        return $this->belongsTo('CodeAgenda\Models\Pessoa');
    }

}