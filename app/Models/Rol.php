<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model{

    protected $table = 'roles';
    protected $fillable = ['nombre'];

    use HasFactory;
}
