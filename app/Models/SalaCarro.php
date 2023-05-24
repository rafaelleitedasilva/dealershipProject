<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaCarro extends Model
{
    use HasFactory;
    protected $table = 'salas_carros';
    
    public $timestamps = false;
    protected $primaryKey = 'id';

    public function Sala(){
        return $this->belongsTo(Sala::class, 'sala_id');
    }

    public function Carro(){
        return $this->belongsTo(Carro::class, 'carro_id');
    }
}
