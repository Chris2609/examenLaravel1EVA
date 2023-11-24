<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border=1>
        @foreach ($manzanas as $manzana)
        <tr>
            <td>{{ $manzana->id }}</td>
            <td>{{ $manzana->tipoManzana }}</td>
            <td>{{ $manzana->precioKilo }}€</td>
        </tr>
        @endforeach
    </table>
</body>

</html>