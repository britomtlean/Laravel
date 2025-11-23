<?php

use Illuminate\Support\Facades\Route;

//importação usando namespace
use App\Http\Controllers\TesteController;


//Rota principal
Route::get('/',[TesteController::class, 'index'] ); //utilizando controller

//Rota de formulario
Route::get('/events/create', [TesteController::class, 'cadastrar']);

Route::get('/events/{id}', [TesteController::class, 'eventDetail']);

Route::post('/events', [TesteController::class, 'store']);


//Rota para testes
Route::get('/teste', [TesteController::class, 'teste']);


//Rota dinamica
Route::get('/produtos/{id?}', [TesteController::class, 'routerId']);


