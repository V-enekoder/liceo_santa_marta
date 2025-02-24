<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\Grado;


class MateriaController extends Controller
{
    public function crear_materia(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'grado_id' => 'required|exists:grados,id',
            'nombre' => 'required|string|max:255',
        ]);

        try {
            // Crear una nueva materia
            $materia = new Materia();
            $materia->grado_id = $request->grado_id;
            $materia->nombre = $request->nombre;
            $materia->save();

            // Retornar una respuesta exitosa
            return response()->json([
                'message' => 'Materia creada exitosamente',
                'materia' => $materia, // Cambiado de 'materias' a 'materia'
            ], 201);
        } catch (\Exception $e) {
            // Capturar y manejar cualquier error de base de datos
            return response()->json([
                'message' => 'Error al guardar la materia: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function mostrarMaterias()
    {
        $grados = Grado::all();
        $materias = Materia::all();
        return view('Paginas.Coordinadores.Materias', ['materias' => $materias, 'grados' => $grados]);
    }

    public function eliminar_materia(Request $request)
    {
        try {
            $materia = Materia::findOrFail($request->id);
            $materia->delete();

            return response()->json([
                'message' => 'Materia eliminada exitosamente',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error al eliminar la materia: ' . $e->getMessage(),
            ], 500);
        }
    }
    public function editar_materia(Request $request, $id)
    {
        $request->validate([
            'grado_id' => 'required|exists:grados,id',
            'nombre' => 'required|string|max:255',
        ]);

        try {
            $materia = Materia::findOrFail($id);
            $materia->grado_id = $request->grado_id;
            $materia->nombre = $request->nombre;
            $materia->save();

            return response()->json([
                'message' => 'Materia actualizada exitosamente',
                'materia' => $materia,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error al actualizar la materia: ' . $e->getMessage(),
            ], 500);
        }
    }
}