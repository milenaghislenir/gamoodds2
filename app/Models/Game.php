<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $table = "game"; // nome da tabela
    protected $fillable = [
        "name",
        "category_id", //id pra relacionar com a tabela de categories (chave estrangeira)
        "disponibility",
    ];
}
