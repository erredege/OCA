@extends("layouts.master")

@section("content")
<a href="{{ route('multimedia.create') }}">Nuevo</a>
<table border='1'>
    @foreach ($multimediaList as $multimedia)

    @if ($multimedia->type == 0)
        @php 
            $valor = "Video" 
        @endphp
    @elseif($multimedia->type == 1) 
        @php 
            $valor = "Audio" 
        @endphp
    @elseif($multimedia->type == 2)
        @php
            $valor = "Imagen"
        @endphp
    @endif

    <tr>
        <td>Nombre</td>
        <td>Descripcion</td>
        <td>Tipo</td>
        <td>URL</td>
        <td colspan="2">Opciones</td>
    </tr>
    <tr>
        <td>{{$multimedia->name}}</td>
        <td>{{$multimedia->description}}</td>
        <td>{{$multimedia->url}}</td>
        <td>{{$valor}}</td>
        <td><a href="{{route('multimedia.edit', $multimedia->id)}}">Modificar</a></td>
        <td>
            <form action = "{{route('multimedia.destroy', $multimedia->id)}}" method="POST">
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