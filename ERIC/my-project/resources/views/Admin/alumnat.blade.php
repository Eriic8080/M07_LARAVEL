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
        $test= [
            ['id' => 1, 'name' => 'test', 'surname' => 'test', 'rol' => 'Alumne', 'email' => 'test@gmail'],
            ['id' => 2, 'name' => 'test1', 'surname' => 'test1', 'rol' => 'Alumne', 'email' => 'test1@gmail'],
            

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
            
            @foreach ($alumne as $alumnes)
            <tr>
                    <td><?= $alumnes['Id'] ?></td>
                    <td><?= $alumnes['name'] ?></td>
                    <td><?= $alumnes['surname'] ?></td>
                    <td><?= $alumnes['rol'] ?></td>
                    <td><?= $alumnes['email'] ?></td>
                    <td>
                        <form action="{{ route('eliminarAlumne', ['id' => $alumnes['Id']]) }}" method="post">
                            @csrf 
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>

                        <td>
                            <a href="{{ route('modificarAlumneForm', ['id' => $alumnes['Id']]) }}">EDIT</a>
                        </td>
                    </td>
                </tr>
            @endforeach

            
        </tbody>
    </table>
    <a href="{{ route('inicio') }}">ADMIN VISTA</a>
    <a href="{{ route('crearAlumne') }}">Crear Alumne</a>
</body>
</html>