@extends("layouts.master")

@section("title", "Administración de Temas")

@section("header", "Administración de Temas")

@section("content")
<br>
<a href="{{ route('theme.create') }}">Nuevo</a>
<table border='1'>
    @foreach ($themeList as $theme)

        @if ($theme->type == 0)
            @php 
                $valor = "Tema no disponible" 
            @endphp
        @elseif($theme->type == 1) 
            @php 
                $valor = "Tema disponible" 
            @endphp
        @endif

        <tr>
            <td>Nombre de la tematica</td>
            <td>Imagen de la tematica</td>
            <td>Posicion X del punto</td>
            <td>Posicion Y del punto</td>
            <td colspan="2">Opciones</td>
        </tr>
        <tr>
            <td>{{$theme->name}}</td>
            <td>{{$theme->theme_img}}</td>
            <td>{{$theme->position_X}}</td>
            <td>{{$theme->position_Y}}</td>
            <td>{{$valor}}</td>
            <td><a href="{{route('theme.edit', $theme->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('theme.destroy', $theme->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>

                {{--<button type="button" onclick="destroy('{{route('theme.destroy',$theme->id)}}')">Eliminar</button>--}}
            </td>
        <br>
    @endforeach
</table>
@endsection