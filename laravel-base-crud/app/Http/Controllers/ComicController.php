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
    
    

    //show the form for creating a new resource.
    public function create() {
        return view('comics.create');
    }

    //Store a newly created resource in storage.
    public function store(Request $request) {
        $data = $request->all();
        
        $newComic= new Comic();
        $newComic->fill($data);
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    //display the specified resource 
    public function show(Comic $comic) {
        return view('comics.show', [
            'comic' => $comic
        ]);
    }

    // Show the form for editing the specified resource.
    public function edit($id) {
        $comic= Comic::find($id);
        return view("comics.edit", [
            "comic"=> $comic
        ]);
    }

    //  Update the specified resource in storage.
    public function update(Request $request, Comic $comic) {
        //prendo i dati dal form 
        $formData= $request->all();
        $comic->update($formData);
        return redirect()->route("comics.show", $comic->id);
    }
}
