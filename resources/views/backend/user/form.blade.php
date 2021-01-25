@extends("layouts.master")

{{--@section("title", "Inserción de usuario")

@section("header", "Inserción de usuario")--}}

@section("content")
    @isset($user)
        <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('user.store') }}" method="POST">
    @endisset
        @csrf
        Email:<input type="text" name="email" value="{{$user->email ?? '' }}"><br>
        Password:<input type="password" name="password" value="{{$user->password ?? '' }}"><br>
        Puntuacion:<input type="int" name="score" value="{{$user->score ?? '' }}"><br>
        Tipo:
        <select name="type">
            <option value="1" selected>Admin</option>
            <option value="0">Jugador</option>
        </select>
        <input type="submit">
        </form>

@endsection