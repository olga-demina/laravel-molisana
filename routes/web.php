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
    $pasta_array = config('pasta');
    // dd($pasta_array);
    $pasta_lunga = [];
    $pasta_corta = [];
    $pasta_cortissima = [];

    foreach($pasta_array as $pasta) {
        if ($pasta['tipo'] === 'lunga') {
            $pasta_lunga[] = $pasta;
        } elseif ($pasta['tipo'] === 'corta') {
            $pasta_corta[] = $pasta;
        } else {
            $pasta_cortissima[] = $pasta;
        }
    }

    // dd($pasta_cortissima);

    $data = [
        'pasta_lunga' => $pasta_lunga,
        'pasta_corta' => $pasta_corta,
        'pasta_cortissima' => $pasta_cortissima
    ];

    return view('home', $data);
})->name('homepage');
