@extends("layouts.layout")

@section("zapas")
    @include('tienda', ['empresa' => $empresa] )
    <table>
        <tr>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Tipo</td>
            <td>Precio</td>
            <td>Producto</td>
        </tr>
            @foreach ($zapatos as $zapa)
                <tr>
                    <td>{{$zapa->getMarca()}}</td>
                    <td>{{$zapa->getModelo()}}</td>
                    <td>{{$zapa->getTipo()}}</td>
                    <td>{{$zapa->getPrecio()}}</td>
                    <td>{{$zapa->getId()}}</td>
                    <td><a href="index.php?id={{$zapa->getId()}}">Ver zapatilla</a></td>
                </tr>
            @endforeach
    </table>
@endsection