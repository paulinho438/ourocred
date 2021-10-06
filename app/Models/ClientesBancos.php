<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientesBancos extends Model
{
    use HasFactory;
    protected $table = 'clientes_bancos';
    public $timestamps = false;
    protected $fillable = [
        'id_cliente',
        'nome_banco',
        'agencia',
        'conta',
        'tipo_conta',
    ];
}
