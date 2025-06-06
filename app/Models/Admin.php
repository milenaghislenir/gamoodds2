<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = "Admin"; // nome da tabela
    protected $fillable = [
        "name",
        "email",
        "password",
    ];
}
