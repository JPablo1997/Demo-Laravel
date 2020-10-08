<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    //Función que retorna un string, incluye el parametro que se recibe en la URL
    public function detalle($id){
        return "El detalle del cliente con ID: " . $id;
    }
}
