@extends('layouts.plantilla')
@section('title', 'Cursos')
@section('content')
    <div class="row col-sm-12">
        <h1>Listado de cursos </h1>
        <h4>
            <a href="{{route('cursos.create')}}">
                Crear curso
            </a>
        </h4>
    </div>
    <div class="col-12 mb-2">
        <ul class="list">
            @foreach($cursos as $curso)
                <li>
                    <a href="{{route('cursos.show', [$curso->id])}}">
                        {{$curso->nombre}}: <i>{{$curso->description}}</i>
                    </a>
                </li>
            @endforeach
        </ul>

    </div>
    <div class="links">
        <h4>Paginación</h4>
        {{$cursos->links()}}
    </div>
@endsection
