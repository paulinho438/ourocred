<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampanhaClientes extends Model
{
    use HasFactory;
    protected $table = 'campanha_clientes';
    public $timestamps = false;
    protected $fillable = [
        'id_campanha',
        'id_cliente',
        'observacao',
        'atendido',
        'duracao'
    ];
}
