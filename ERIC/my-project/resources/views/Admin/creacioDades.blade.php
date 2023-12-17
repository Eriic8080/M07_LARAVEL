<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacio de alumne</title>
</head>
<body>
    <h1>Creacio de alumne</h1>
    

    <form method="POST" action="{{ route('crearAlumne') }}">
            @csrf 
        
            <h3>name: <input type="text" name="name"></h3>
            <h3>surname: <input type="text" name="surname"></h3>
            <h3>rol: <input type="text" name="rol"></h3>
            <h3>email: <input type="text" name="email"></h3>
            
            <input type="submit" name="enviar"><br><br>            
            

    </form>
</body>
</html>