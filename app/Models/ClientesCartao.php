<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientesCartao extends Model
{
    use HasFactory;
    protected $table = 'clientes_cartao';
    public $timestamps = false;
    protected $fillable = [
        'id_cliente',
        'cartao',
        'banco',
        'saqueDisponivel',
        'margemConsignavel',
        'margemConsignado',
        
    ];
}
