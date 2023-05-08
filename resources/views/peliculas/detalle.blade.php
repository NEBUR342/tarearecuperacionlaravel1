@extends('layouts.uno')
@section('titulo')
    Peliculas
@endsection
@section('cabecera')
    Detalle peliculas
@endsection
@section('contenido')
    <div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto bg-gray-800">
        <div class="px-6 py-4">
            <label class="block text-gray-400 text-sm font-medium mb-2 text-center" for="doblada">
                TITULO DE LA PELICULA
            </label>
            <div class="block dark:text-white text-sm font-bold py-3 mb-2 text-center">{{ $pelicula->titulo }}</div>
            <label class="block text-gray-400 text-sm font-medium mb-2 text-center" for="doblada">
                SINOPSIS DE LA PELICULA
            </label>
            <p class="dark:text-white text-center py-3">{{ $pelicula->sinopsis }} </p>
        </div>
        <label class="block text-gray-400 text-sm font-medium mb-2 text-center" for="doblada">
            DATOS DE LA PELICULA
        </label>
        <div class="py-3 pb-2 text-center">
            <p class="dark:text-white">Ha sido catalogado como '<span
                    class="text-sm font-semibold">{{ $pelicula->category->nombre }}</span>'
                , tiene una duracion de <span class="text-sm font-semibold">{{ $pelicula->duracion }} mins</span>
                y <span class="text-sm font-semibold ">{{ $pelicula->doblada }}</span> esta doblada</p>
        </div>
        <div class="flex flex-row-reverse mr-3 mb-3">
            <a href="{{ route('peliculas.index') }}"
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-xmark">
                    Volver</i></a>
        </div>
    </div>
@endsection
