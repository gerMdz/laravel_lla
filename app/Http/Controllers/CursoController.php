<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Cursos::paginate(10);

        return view('cursos.index', ['cursos' => $cursos]);
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function show(Cursos $curso)
    {
        return view('cursos.show', compact('curso'));
    }
}
