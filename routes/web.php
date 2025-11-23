<?php

use Illuminate\Support\Facades\Route;

//importação usando namespace
use App\Http\Controllers\TesteController;


//Rota principal
Route::get('/',[TesteController::class, 'index'] ); //utilizando controller




//Rota para testes
Route::get('/teste', [TesteController::class, 'teste']);




//Rota dinamica
Route::get('/produtos/{id?}', [TesteController::class, 'routerId']);

Route::post('/events', [TesteController::class, 'store']);
