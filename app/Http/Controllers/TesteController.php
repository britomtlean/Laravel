<?php

namespace App\Http\Controllers;

use App\Models\Event; //namespace models
use Illuminate\Http\Request;

class TesteController extends Controller
{
    //

    public function index() //Retorna a view principal
    {
        $events = Event::all();

        return view(
            'home',
            ['events' => $events]
        );
    }
    //__________________________________________________________________

    public function cadastrar() //Função para abrir formulario
    {

        return view(
            'formulario',
            []
        );
    }
    //________________________________________________________________


    public function store(Request $request) //Função para inserir dados na tabela
    {
        $event = new Event;

        //captura os dados através do name de cada elemento do formulário
        $event->title = $request->title;
        $event->description = $request->description;
        $event->city = $request->city;
        $event->private = $request->private;


        //Upload Image
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() .strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;

        }


        //salva os dados no banco
        $event->save();

        //redireciona para Home e exibe uma menssagem
        return redirect('/')->with('msg', 'Evento Criado com Sucesso!');
    }
    //________________________________________________________________________


    public function eventDetail($id = null)
    {

        $event = Event::findOrFail($id); //retornar dado unico da tabela

        return view(
            'event',
            [
                'id' => $id,
                'event' => $event
            ]
        );
    }

    public function teste() //Rota para aplicação de testes
    {

        $nome = "leaN";
        $idade = 24;

        $array = array(1, 2, 3, 4, 5, 6);
        return view(
            'teste',
            [
                'nome' => $nome,
                'idade' => $idade,
                'array' => $array,
            ]
        );
    }


    public function routerId($id = null)
    {

        return view(
            'produtos',
            [
                'id' => $id
            ]
        );
    }
}
