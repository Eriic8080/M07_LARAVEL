<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>

<body>
    <h1>{{$resultado}}</h1>
    <form method="POST" action="../crear_usuari/index.php">
        <h3>ID:<input name="identifier"></input><h3>
        <h3>ROL:<select name="rol">
            <option value="P">Professor</option>
            <option value="A">Alumno</option>
        </select><h3>
        <h3>NAME:<input name="namee"></input><h3>
        <h3>SURNAME:<input name="surname"></input><h3>
        <h3>EMAIL:<input type="email" name="email"></input><h3>
        <h3>PASSWORD:<input name="passwd"></input><h3>
        <h3>ACTIVE:<input type="checkbox" name="activo"></input><h3>
        <input type="submit" value="submit" name = "send"/><br>
        <a href="signin">Iniciar Session</a>
    </form> 
</body>
</html>