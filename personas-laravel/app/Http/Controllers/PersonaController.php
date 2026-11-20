<?php

namespace App\Http\Controllers;
use App\Models\Persona;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::orderBy('id')->get();

        return view('personas.index', ['personas' => $personas]);
    }    
}
