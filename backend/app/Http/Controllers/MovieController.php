<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $query = Movie::query();

        if ($request->has('genre')) {
            $query->where('genre', $request->input('genre'));
        }

        if ($request->has('sort_by')) {
            $query->orderBy($request->input('sort_by'), $request->input('order', 'asc'));
        }

        return response()->json($query->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'director' => 'required|max:255',
            'release_year' => 'nullable|integer',
            'genre' => 'nullable|max:100',
        ]);

        $movie = Movie::create($validated);
        return response()->json($movie, 201);
    }

    public function show($id)
{
    $movie = Movie::findOrFail($id);
    return response()->json($movie);
}
    

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'director' => 'required|max:255',
            'release_year' => 'nullable|integer',
            'genre' => 'nullable|max:100',
        ]);

        $movie = Movie::findOrFail($id);
        $movie->update($validated);
        return response()->json($movie);
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return response()->json(['message' => 'Movie deleted successfully']);
    }
}
