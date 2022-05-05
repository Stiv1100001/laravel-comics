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

Route::get('/', function () {
    $data = [
        "comics" => config('comics')
    ];

    return view('home', $data);
})->name('Home');

Route::get('/comic/{id}', function ($id) {
    $allComics = config('comics');

    if (!is_numeric($id) || $id < 0 || $id > count($allComics)) {
        abort(404, "Comic not found");
    }

    $data = [ "comic" => $allComics[$id] ];

    return view('comic', $data);
})->name('Comic');
