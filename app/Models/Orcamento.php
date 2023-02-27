<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;

    protected $table = "orcamentos";

    protected $fillable = [
        'tp_orcamento', 
        'tp_pagamento', 
        'qtde_parcela', 
        'valor', 
        'validade', 
        'obs_pagamento',
        'historico', 
        'orcamento', 
        'cliente_id'
    ];

    // relação com a tabela de cliente
    public function cliente(){

        return $this->belongsTo(Cliente::class);

    }
}
