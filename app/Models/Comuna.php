<?php

namespace App\Models;

use Illuminate\Cache\HasCacheLock;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    use HasCacheLock;
    protected $table = 'tb_comuna';
    
    protected $primaryKey = 'comu_codi';
    public $timestamps = false;
}
