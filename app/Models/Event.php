<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Criação de Model para recebecer e inserir dados na tabela
//Deve conter o nome iniciando com letra maiuscula e no singular
class Event extends Model
{
    //manipular o nome da tabela a ser usada
    //protected $table = 'meu_nome_personalizado';


    protected $casts = [ //Indica que essa coluna receba um objeto json
        'items' => 'array'
    ];

    protected $dates = ['date'];
}
