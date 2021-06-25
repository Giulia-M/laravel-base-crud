<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "ComicController@index")->name("comics.index");



Route::get('/comics', "ComicController@index")->name("comics.index");

//salva i dati ricevuti 

Route::post("/comics", "ComicController@store")->name("comics.store");

//rotta che mostra il form per creare un nuovo comic 
Route::get("/comics/create", "ComicController@create")->name("comics.create");


//mostra i dettagli di un singolo comic
Route::get("/comics/{comic}", "ComicController@show")->name("comics.show");

//salva i dati dopo aver fatto le modifiche di un comics
Route::put("/comics/{comic}", "ComicController@update")->name("comics.update");


// Mostra il form per modificare un utente
Route::get("/comics/{comic}/edit", "ComicController@edit")->name("comics.edit");



