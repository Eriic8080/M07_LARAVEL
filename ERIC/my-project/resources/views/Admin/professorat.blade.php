<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professorat</title>
</head>
<body>
    <h1>LLista Professorat</h1>
    <?php
        $profes = [
            ['id' => 1, 'name' => 'eric', 'surname' => 'sanchez', 'rol' => 'Professor', 'email' => 'eric@gmail'],
            ['id' => 2, 'name' => 'eric', 'surname' => 'sanchez', 'rol' => 'Professor', 'email' => 'eric@gmail'],
            ['id' => 3, 'name' => 'eric', 'surname' => 'sanchez', 'rol' => 'Professor', 'email' => 'eric@gmail'],
            ['id' => 4, 'name' => 'eric', 'surname' => 'sanchez', 'rol' => 'Professor', 'email' => 'eric@gmail'],
            ['id' => 5, 'name' => 'eric', 'surname' => 'sanchez', 'rol' => 'Professor', 'email' => 'eric@gmail'],

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
            <?php foreach ($profes as $profe): ?>
                <tr>
                    <td><?= $profe['id'] ?></td>
                    <td><?= $profe['name'] ?></td>
                    <td><?= $profe['surname'] ?></td>
                    <td><?= $profe['rol'] ?></td>
                    <td><?= $profe['email'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="{{ route('inicio') }}">ADMIN VISTA</a>
</body>
</html>