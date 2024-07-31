<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Type;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        return view("movie.addMovie", ['types' => $types]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Movie::create([
            "name" => $request->name,
            "type_id" => $request->type_id,
            "director" => $request->director,
            "rating" => $request->rating,
        ]);

        return redirect()->route("index");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        
        return view("movie.showMovie", ["data" => $movie ]);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $movies = Movie::find($id);
        $types = Type::all();
        return view("movie.editMovie", compact("movies" , "types"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $movie = Movie::find($request->id);
        $data = [
            "name"=> $request->name,
            "type_id"=> $request->type_id,
            "director"=> $request->director,
            "rating"=> $request->rating,
        ];
        $movie->update($data);

        return redirect()->route("index") ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(movie $movie)
    {
        //
    }
}
