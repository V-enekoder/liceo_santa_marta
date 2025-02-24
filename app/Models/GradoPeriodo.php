<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradoPeriodo extends Model{
    use HasFactory;

    protected $table = 'grado_periodo';
    public $timestamps = false;
    protected $fillable = [
        'grado_id',
        'periodo_id',
    ];

    public function grado(){
        return $this->belongsTo(Grado::class);
    }

    public function periodo(){
        return $this->belongsTo(Periodo_Academico::class);
    }

    public function secciones(){
        return $this->hasMany(Seccion::class);
    }

}
