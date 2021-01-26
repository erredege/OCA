@extends("layouts.master")

{{--@section("title", "Administración de usuarios")

@section("header", "Administración de usuarios")--}}

@section("content")
<a href="{{ route('user.create') }}">Nuevo</a>
<table border='1'>
    @foreach ($userList as $user)

        @if ($user->type == 0)
            @php 
                $valor = "Jugador" 
            @endphp
        @elseif($user->type == 1) 
            @php 
                $valor = "Admin" 
            @endphp
        @endif

        <tr>
            <td>E-mail</td>
            <td>Puntuacion</td>
            <td>Tipo</td>
            <td colspan="2">Opciones</td>
        </tr>
        <tr>
            <td>{{$user->email}}</td>
            <td>{{$user->score}}</td>
            <td>{{$valor}}</td>
            <td><a href="{{route('user.edit', $user->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('user.destroy', $user->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>

                {{--<button type="button" onclick="destroy('{{route('user.destroy',$user->id)}}')">Eliminar</button>--}}
            </td>
        <br>
    @endforeach
</table>
@endsection