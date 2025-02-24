<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model{

    protected $table = 'roles';
    public $timestamps = false;
    protected $fillable = ['nombre'];

    use HasFactory;

    //Relaciones Uno-Muchos
    public function usuarios(){
        return $this->hasMany(User::class);
    }
}
