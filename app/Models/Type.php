<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $table = 'type_products';
    public function products(){
        return $this->hasMany(Products::class,'id_type ','id');
    }
}
