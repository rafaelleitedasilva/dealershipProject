<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;
    
    protected $table = 'salas';
    public $timestamps = false;
    protected $id;
    protected $Nome; 
}
