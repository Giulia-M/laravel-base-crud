<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    //
    public function index() {

        $comics= Comic::all();

        return view('comics.index', [
            'comics' => $comics
        ]);
    }
    
    //Store a newly created resource in storage.
    public function store(Request $request) {
        $data = $request->all();
        
        $newComic= new Comic();
        $newComic->fill($data);
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    //show the form for creating a new resource.
    public function create() {
        return view('comics.create');
    }

    //display the specified resource 
    public function show(Comic $comic) {
        return view('comics.show', [
            'comic' => $comic
        ]);
    }

    public function edit($id) {
        $comic= Comic::find($id);
        return view("comics.edit", [
            "comic"=> $comic
        ]);
    }
}
