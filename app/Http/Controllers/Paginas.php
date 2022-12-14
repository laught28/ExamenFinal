<?php

namespace App\Http\Controllers;

use App\Http\Requests\frutas;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class Paginas extends Controller
{
    function fhome()
    {
        return view('frutitas');
    }

    function fingresar()
    {
        return view('form');
    }


    public function procesarFruta(frutas $req)
    {
        return redirect('/crear')->with('confirmacion', 'Tu recuerdo llegó al controlador');
    }
}
