<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Unas extends Model
{
    //use HasFactory;
    protected $table = 'unas';
    


//función scope
public function scopeNombres($query, $name) {
    if ($name) {
        return $query->where('nombres','like',"%$name%");
    }
}
public function scopeNombress($query, $names) {
    if ($names) {
        return $query->where('nombres','like',"%$names%");
    }
}
}