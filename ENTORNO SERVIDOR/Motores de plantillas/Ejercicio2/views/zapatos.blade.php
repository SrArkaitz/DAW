<html>
<head>
    <title>Hola Mundo PHP</title>
    <style>
        table, tr, td, th{
            border: solid;
        }
    </style>
</head>
<body>
    <table>
            @foreach ($zapatos as $key => $zpto)
                <tr><td>{{$key}}</td>
                <td>{{$zpto}}</td></tr>
            @endforeach
    </table>
</body>
</html>