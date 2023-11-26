<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnat</title>
</head>
<body>
<h1>LLista Alumnat</h1>
    <?php
        $alumes = [
            ['id' => 1, 'name' => 'eric', 'surname' => 'sanchez', 'rol' => 'Alumne', 'email' => 'eric@gmail'],
            ['id' => 2, 'name' => 'eric', 'surname' => 'sanchez', 'rol' => 'Alumne', 'email' => 'eric@gmail'],
            ['id' => 3, 'name' => 'eric', 'surname' => 'sanchez', 'rol' => 'Alumne', 'email' => 'eric@gmail'],
            ['id' => 4, 'name' => 'eric', 'surname' => 'sanchez', 'rol' => 'Alumne', 'email' => 'eric@gmail'],
            ['id' => 5, 'name' => 'eric', 'surname' => 'sanchez', 'rol' => 'Alumne', 'email' => 'eric@gmail'],

        ];
    ?>
<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Rol</th>
                <th>email</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumes as $alumne): ?>
                <tr>
                    <td><?= $alumne['id'] ?></td>
                    <td><?= $alumne['name'] ?></td>
                    <td><?= $alumne['surname'] ?></td>
                    <td><?= $alumne['rol'] ?></td>
                    <td><?= $alumne['email'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="{{ route('inicio') }}">ADMIN VISTA</a>
    
</body>
</html>