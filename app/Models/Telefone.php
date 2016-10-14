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

    public function getNumeroAttribute()
    {
        return "$this->cod_pais ($this->ddd) $this->prefixo-$this->sufixo";
    }

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }

}