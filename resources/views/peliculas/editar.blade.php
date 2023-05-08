@extends('layouts.uno')
@section('titulo')
    Peliculas
@endsection
@section('cabecera')
    Crear pelicula
@endsection
@section('contenido')
    <div class="p-8 rounded-xl shadow-xl w-1/2 mx-auto bg-gray-800">
        <form name="as" method="POST" action="{{ route('peliculas.update', $pelicula) }}">
            @csrf
            @method('put')
            <div class="mb-4">
                <label class="block dark:text-white text-sm font-bold mb-2" for="titulo">
                    TITULO
                </label>
                <input value="{{ @old('titulo', $pelicula->titulo) }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="titulo" type="text" placeholder="Titulo de la pelicula" name="titulo" />
                @error('titulo')
                    <p class="text-red-700 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block dark:text-white text-sm font-bold mb-2" for="sinopsis">
                    SINOPSIS
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="sinopsis" type="text" placeholder="Sinopsis de la pelicula" name="sinopsis">{{ @old('sinopsis', $pelicula->sinopsis) }}</textarea>
                @error('sinopsis')
                    <p class="text-red-700 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block dark:text-white text-sm font-bold mb-2" for="categoria">
                    CATEGORIA
                </label>
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="categoria" name="category_id">
                    <option value='-1'>SELECCIONA UNA CATEGORIA PARA LA PELICULA</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" @selected($categoria->id == @old('category_id', $pelicula->category_id))>{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
            @error('category_id')
                <p class="text-red-700 text-xs italic mt-2">{{ $message }}</p>
            @enderror
            <div class="mb-4">
                <label class="block dark:text-white text-sm font-bold mb-2" for="duracion">
                    DURACION
                </label>
                <input value="{{ @old('duracion', $pelicula->duracion) }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="duracion" type="number" placeholder="Duracion de la pelicula (minutos)" name="duracion" />
                @error('duracion')
                    <p class="text-red-700 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
            <label class="block dark:text-white text-sm font-bold mb-2" for="doblada">
                ESTEDO DE LA PELICULA
            </label>
            <div class="flex mb-4">
                <div class="flex items-center mr-4">
                    <input id="si" type="radio" value="SI" name="doblada" @checked(@old('doblada', $pelicula->doblada) == 'SI')
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="si" class="ml-2 text-sm font-bold text-green-800 dark:text-black-300">SI</label>
                </div>
                <div class="flex items-center mr-4">
                    <input id="no" type="radio" value="NO" name="doblada" @checked(@old('doblada', $pelicula->doblada) == 'NO')
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="no" class="ml-2 text-sm font-bold text-red-800 dark:text-black-300">NO</label>
                </div>
            </div>
            @error('doblada')
                <p class="text-red-700 text-xs italic mt-2">{{ $message }}</p>
            @enderror
            <div class="flex flex-row-reverse mb-3">
                <a href="{{ route('peliculas.index') }}"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-xmark">
                        Cancelar</i></a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mr-3 rounded"><i
                        class="fas fa-save"> Editar</i></button>
            </div>
        </form>
    </div>
@endsection
