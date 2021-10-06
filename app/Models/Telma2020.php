<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telma2020 extends Model
{
    use HasFactory;
    protected $table = 'telma2020';
    public $timestamps = false;
    protected $fillable = [
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
