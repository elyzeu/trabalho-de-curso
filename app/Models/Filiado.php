<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiado extends Model
{
    use HasFactory;
    protected $regras = [
        'cpf' => 'required|cpf',
        'data'

    ];     

    protected $dateFormat = 'Y-m-d';
    
}
