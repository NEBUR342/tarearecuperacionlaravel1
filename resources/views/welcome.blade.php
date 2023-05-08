@extends('layouts.uno')
@section('titulo')
    Inicio
@endsection
@section('cabecera')
    Peliculas
@endsection
@section('contenido')
    <a href="{{ route('peliculas.index') }}"
        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Ver listado de peliculas</a>
@endsection
