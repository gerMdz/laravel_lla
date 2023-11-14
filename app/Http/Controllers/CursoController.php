<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return "Bienvenidos al index";
    }

    public function create()
    {
        return "Bienvenidos al create";
    }

    public function show($curso)
    {
        return "Bienvenidos al show de: " . $curso;
    }
}
