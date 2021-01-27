@extends("layouts.master")

{{--@section("title", "Inserción de tema")

@section("header", "Inserción de tema")--}}

@section("content")
    @isset($theme)
        <form action="{{ route('theme.update', ['id' => $theme->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('theme.store') }}" method="POST">
    @endisset
        @csrf
        Nombre:<input type="text" name="name" value="{{$theme->name ?? '' }}"><br>
        Imagen de la tematica:<input type="text" name="img" value="{{$theme->theme_img ?? '' }}"><br>
        Posicion "X" de la tematica:<<input type="number" name="position_X" value="{{$theme->position_X ?? '' }}"></br>
        Posicion "Y" de la tematica:<<input type="number" name="position_Y" value="{{$theme->position_Y ?? '' }}"></br>
        <input type="submit">
        </form>

@endsection