@extends('layout')

@section('contenido')
    <a href="{{route("alumnos.create")}}">Añadir alumno</a>
    <table class="bg-white">
        <caption>Listado de alumnos</caption>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th colspan="2"></th>
        </tr>
        @foreach($alumnos as $alumno)
            <tr>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->apellido}}</td>
                <td>{{$alumno->descripcion}}</td>
                <td>{{$alumno->telefono}}</td>
                <td><a href="{{route("alumnos.edit", $alumno->id)}}">Editar</a></td>
                <td>
                    <form action="{{route("alumnos.destroy", $alumno->id)}}" method="post">
                        @csrf
                        @method("delete")
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach


    </table>
@endsection
