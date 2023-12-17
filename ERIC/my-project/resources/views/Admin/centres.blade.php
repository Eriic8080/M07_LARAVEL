<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centres</title>
</head>
<body>
<?php
        $usuarios = [
            ['id' => 1, 'name' => 'Tic', 'adress' => 'c/sancho de ávila', 'cp' => '08123', 'city' => 'Barcelona'],
            ['id' => 2, 'name' => 'Austria', 'adress' => 'c/gloria', 'cp' => '08321', 'city' => 'Barcelona'],
        ];
    ?>
<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Adress</th>
                <th>Cp</th>
                <th>City</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($centros as $centro)
                <tr>
                    <td><?= $centro['id'] ?></td>
                    <td><?= $centro['name'] ?></td>
                    <td><?= $centro['address'] ?></td>
                    <td><?= $centro['cp'] ?></td>
                    <td><?= $centro['city'] ?></td>
                    <td>
                        <form action="{{ route('eliminarCentro', ['id' => $centro->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">DELETE</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('formModificarCentro', ['id' => $centro->id]) }}">EDIT</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <a href="{{ route('inicio')}}">ADMIN VISTA</a>
    <a href="{{ route('crearCentros')}}">Add Centre</>

    
</body>
</html>