<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'carros';
    protected $id;
    protected $Nome; 
    protected $Modelo;
    protected $Valor; 
}
