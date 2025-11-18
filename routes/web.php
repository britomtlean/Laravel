<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "leaN";
    $idade = 24;

    $array = array(1,2,3,4,5,6);
    return view(
        'welcome',
        [
        'nome' => $nome,
        'idade' => $idade,
        'array' => $array 
        ]
    );
});
