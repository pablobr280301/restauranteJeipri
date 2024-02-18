<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TusReservas extends Model
{

    protected $table = 'misreservas';
    use HasFactory;
    protected $fillable = ['nombre', 'asunto', 'email', 'mensaje', 'num_comensales', 'menu'];
}
