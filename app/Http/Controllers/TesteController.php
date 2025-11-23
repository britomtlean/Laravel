<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    //

    public function index() {


        $events = Event::all();

    return view(
        'welcome',
        ['events'=> $events]
    );
    }



    public function teste() {

        $nome = "leaN";
        $idade = 24;

        $array = array(1,2,3,4,5,6);
        return view(
            'teste',
            [
            'nome' => $nome,
            'idade' => $idade,
            'array' => $array,
            ]
        );
    }


    public function routerId ($id = null) {

    return view(
        'produtos',
        [
        'id' => $id
        ]
    );
    }

    public function store(Request $request){
        $event = new Event;

        $event->title = $request->title;
        $event->description = $request->description;
        $event->city = $request->city;
        $event->private = $request->private;

        $event->save();

        return redirect('/');
    }





}
