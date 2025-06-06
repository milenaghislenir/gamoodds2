<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = "booking"; // nome da tabela
    protected $fillable = [
        "client_id", // id do cliente (chave estrangeira)
        "game_id", // id do game (chave estrangeira)
        "date",
        "duration"
        "status"
    ];
}
