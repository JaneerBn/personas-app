<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{

    protected $table = 'tb_pais';
    protected $primaryKey = 'pais_codi'; 
    public $incrementing = false; 
    protected $keyType = 'string';
}
