<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientesContrato extends Model
{
    use HasFactory;
    protected $table = 'clientes_contrato';
    public $timestamps = false;
    protected $fillable = [
        'id_cliente',
        'banco',
        'averbacao',
        'inicio',
        'fim',
        'valorFinanciado',
        'valorParcela',
        'taxa',
        'prazo',
        'contrato',
        'refinDisponivel',
        'portDisponivel'
        
    ];
}
