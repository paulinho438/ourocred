<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanilhaVendas extends Model
{
    use HasFactory;
    protected $table = 'planilha_vendas';
    public $timestamps = false;
    protected $fillable = [
        'usuario',
        'contrato',
        'dataContrato',
        'cpf',
        'nome',
        'dtNascimento',
        'telefones',
        'valorParcela',
        'prazo',
        'valorLiberado',
        'produto',
        'observacao',
        'banco',
        'excluido'
    ];
}
