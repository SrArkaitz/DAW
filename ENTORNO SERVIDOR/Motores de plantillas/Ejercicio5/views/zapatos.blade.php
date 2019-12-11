@extends("layouts.layout")

@section("zapas")

    @include('tienda', ['empresa' => $empresa] )
    <table>
        <tr>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Tipo</td>
            <td>Precio</td>
        </tr>
            @foreach ($zapatos as $zapa)
                <tr>
                    <td>{{$zapa->getMarca()}}</td>
                    <td>{{$zapa->getModelo()}}</td>
                    <td>{{$zapa->getTipo()}}</td>
                    <td>{{$zapa->getPrecio()}}</td>
                </tr>
            @endforeach
    </table>
@endsection