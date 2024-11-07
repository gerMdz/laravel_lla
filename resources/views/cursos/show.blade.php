@extends('layouts.plantilla')
@section('title', 'Curso' . $curso->nombre)
@section('content')
    <h1>Vista de {{$curso->nombre}}</h1>
    <h4>
        Detalle: {{$curso->description}}
    </h4>
    <a href="{{route('cursos.index')}}"> Volver a los cursos</a>
@endsection
