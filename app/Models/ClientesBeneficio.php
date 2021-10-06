<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientesBeneficio extends Model
{
    use HasFactory;
    protected $table = 'clientes_beneficio';
    public $timestamps = false;
    protected $fillable = [
        'id_cliente',
        'valorBeneficio',
        'desconto',
        'valorLiquido',
        'desconto',
        'margemConsignavel',
        'valorConsignado',
        'valorDisponivel'
    ];
}
