<?php

namespace Database\Seeders;

use App\Models\Rol;
use App\Models\User;
use app\Models\Calificacion;
use app\Models\Coordinador;
use app\Models\DocenteMateria;
use app\Models\Docente;
use app\Models\EstudianteRepresentante;
use app\Models\Estudiante;
use app\Models\GradoPeriodo;
use App\Models\Grado;
use app\Models\Materia;
use app\Models\Periodo_Academico;
use app\Models\Representante;
use app\Models\Seccion;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        //Se ejecuta con php artisan db:seed
        $this->call(RolesSeeder::class);
        $this->call(UserSeeder::class);
        //$this->call(DocenteSeeder::class);
        $this->call(EstudianteSeeder::class);
        $this->call(EstudianteRepresentanteSeeder::class);
        $this->call(RepresentanteSeeder::class);
        $this->call(CoordinadorSeeder::class);
        $this->call(Periodo_AcademicoSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(GradosSeeder::class);
        $this->call(GradoPeriodoSeeder::class);
        $this->call(SeccionSeeder::class);
        $this->call(DocenteMateriaSeeder::class);
        $this->call(CalificacionSeeder::class);
    }
}
