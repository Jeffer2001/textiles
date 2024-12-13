<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inicio;

class PaginaController extends Controller
{
    public function inicio(){
        $getInicio = Inicio::All();
        //dd($getInicio);
        return view('sitioWeb/index', compact('getInicio'));
    }
}
