<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function venta()
    {
        return view('proyecto_venta'); // Asegúrate de que esta vista exista
    }

    public function invertir()
    {
        return view('proyecto_invertir'); // Asegúrate de que esta vista exista
    }
}