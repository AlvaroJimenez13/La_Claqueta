<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    // Obtener todas las películas
    public function index()
    {
        $movies = Movie::all();
        return response()->json($movies);
    }

    // Obtener una película específica
    public function show($id)
    {
        $movie = Movie::find($id);
        if (!$movie) {
            return response()->json(['message' => 'Movie not found'], 404);
        }
        return response()->json($movie);
    }
    public function create()
    {
        return view('movies.create');
    }
    // Crear una nueva película
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'year' => 'required|integer|min:1900',
            'duration' => 'nullable|integer|min:1', // Validación opcional para la duración
        ]);

        $movie = new Movie();
        $movie->title = $validatedData['title'];
        $movie->description = $validatedData['description'];
        $movie->year = $validatedData['year'];
        $movie->duration = $validatedData['duration'];
        $movie->save();

        return redirect()->route('movies.index')->with('success', 'Película creada correctamente.');
    }

    // Actualizar una película existente
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'year' => 'sometimes|required|integer',
            'duration' => 'sometimes|required|integer',
            'director' => 'sometimes|required|string|max:255',
        ]);

        $movie = Movie::find($id);
        if (!$movie) {
            return response()->json(['message' => 'Movie not found'], 404);
        }

        $movie->update($validatedData);

        return response()->json($movie);
    }

    // Eliminar una película
    public function destroy($id)
    {
        $movie = Movie::find($id);
        if (!$movie) {
            return response()->json(['message' => 'Movie not found'], 404);
        }

        $movie->delete();

        return response()->json(['message' => 'Movie deleted successfully']);
    }
}
