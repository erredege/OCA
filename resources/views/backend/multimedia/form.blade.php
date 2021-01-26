@extends("layouts.master")

{{--@section("title", "")

@section("header", "")--}}

@section("content")
    @isset($multimedia)
        <form action="{{ route('multimedia.update', ['id' => $multimedia->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('multimedia.store') }}" method="POST">
    @endisset
        @csrf
        Nombre:<input type="text" name="name" value="{{$multimedia->name ?? '' }}"><br>
        Descripcion:<input type="text" name="description" value="{{$multimedia->description ?? '' }}"><br>
        URL:<input type="text" name="url" value="{{$multimedia->url ?? '' }}"><br>
        Tipo:
        <select name="type">
            <option value="0">Video</option>
            <option value="1">Audio</option>
            <option value="2">Imagen</option>
        </select>
        <input type="submit">
        </form>

@endsection