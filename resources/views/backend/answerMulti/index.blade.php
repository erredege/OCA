@extends("layouts.master")

@section("title", "Administración de Multi Respuestas")

@section("header", "Administración de Multi Respuestas")

@section("content")
<br>
<a href="{{ route('answerMulti.create') }}">Nuevo</a>
<table border='1'>
    @foreach ($answerMultiList as $answerMulti)

    <tr>
        <td>Texto</td>
        <td>Correcta</td>
        <td colspan="2">Opciones</td>
    </tr>
    <tr>
        <td>{{$answerMulti->text}}</td>
        <td>{{$answerMulti->true}}</td>
        <td><a href="{{route('answerMulti.edit', $answerMulti->id)}}">Modificar</a></td>
        <td>
            <form action = "{{route('answerMulti.destroy', $answerMulti->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" value="Borrar">
            </form>

            {{--<button type="button" onclick="destroy('{{route('multimedia.destroy',$multimedia->id)}}')">Eliminar</button>--}}
        </td>
        <br>
    @endforeach
</table>
@endsection