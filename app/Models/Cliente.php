<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // necessário inserir este método para fazer o update
    protected $guarded = [];

    protected $table = "clientes";

    protected $fillable = [
        'nome',
        'telefone',
        'celular',
        'dt_Nascimento',
        'cpf',
        'rg',
        'tp_atendimento',
        'email',
        'user_id',
  
    ];

    // relação com a tabela usuário
    public function user(){

        return $this->hasOne(User::class);

    }

    // relação 1xn tabela de orçamentos
    public function orcamentos(){

        return $this->hasMany(Orcamento::class);
    }

    // relação 1x1 endereço->cliente
    public function endereco(){

        return $this->hasOne(Endereco::class);
    }

}
