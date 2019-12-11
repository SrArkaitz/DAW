@extends("layouts.layout")

@section("zapas")
    <table>
        <tr>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Tipo</td>
            <td>Precio</td>
            <td>id</td>
            <td>volver</td>
        </tr>
        <tr>
            <td>{{$zapa->marca}}</td>
            <td>{{$zapa->modelo}}</td>
            <td>{{$zapa->tipo}}</td>
            <td>{{$zapa->precio}}</td>
            <td>{{$zapa->id}}</td>
            <td><a href="index.php">Volver</a></td>
        </tr>
    </table>
@endsection