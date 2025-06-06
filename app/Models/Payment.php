<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = "Payment"; // nome da tabela
    protected $fillable = [
        "booking_id", // reserva cliente -- puxando de outro por isso o id
        "method", // metodo de pagamento
        "price",// valor
        "status", //status da compra na hora do pagamento
    ];
}
