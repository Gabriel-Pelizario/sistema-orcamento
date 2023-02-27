<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = "enderecos";

    protected $fillable = [
        'cep',
        'rua',
        'bairro',
        'ibge',
        'cidade',
        'uf',
        'nr',
        'cliente_id'
    ];

    // relação 1x1 cliente->endereço
    public function cliente(){

        return $this->belongsTo(Cliente::class);

    }
}
