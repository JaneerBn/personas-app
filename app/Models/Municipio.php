<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Factories\HasFactory;

class Municipio extends Model
{
    use HasFactory;
    protected $table = "tb_municipio";
    protected $primarykey = 'muni_codi';
    public $timestmaps =flase; 
}
