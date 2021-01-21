@extends("layouts.master")

@section("title", "Administración de usuarios")

@section("header", "Administración de usuarios")

@section("content")
    <a href="{{ route('user.create') }}">Nuevo</a>
    <table border='1'>
    @foreach ($userList as $user)
        <tr>
            <td>{{$user->email}}</td>
            <td>{{$user->score}}</td>
            <td>{{$user->type}}</td>
            <td><a href="{{route('user.edit', $user->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('user.destroy', $user->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        <br>
    @endforeach
@endsection