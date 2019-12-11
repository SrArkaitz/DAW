@extends("layouts.layout")

@section("zapas")

    @include('tienda', ['empresa' => $empresa] )
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
            <td>{{$zapa->getMarca()}}</td>
            <td>{{$zapa->getModelo()}}</td>
            <td>{{$zapa->getTipo()}}</td>
            <td>{{$zapa->getPrecio()}}</td>
            <td>{{$zapa->getId()}}</td>
            <td><a href="index.php">Volver</a></td>
        </tr>
    </table>
@endsection