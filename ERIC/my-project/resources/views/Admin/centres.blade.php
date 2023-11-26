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
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= $usuario['id'] ?></td>
                    <td><?= $usuario['name'] ?></td>
                    <td><?= $usuario['adress'] ?></td>
                    <td><?= $usuario['cp'] ?></td>
                    <td><?= $usuario['city'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="{{ route('inicio')}}">ADMIN VISTA</a>
    
</body>
</html>