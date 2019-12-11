@extends("layouts.layout")

@section("zapas")
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
                    <td>{{$zapa->marca}}</td>
                    <td>{{$zapa->modelo}}</td>
                    <td>{{$zapa->tipo}}</td>
                    <td>{{$zapa->precio}}</td>
                    <td>{{$zapa->id}}</td>
                    <td><a href="index.php?id={{$zapa->id}}">Ver zapatilla</a></td>
                </tr>
            @endforeach
    </table>
@endsection