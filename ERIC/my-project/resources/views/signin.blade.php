<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    

    <form method="POST" action="{{ route('bienvenidaAdmin') }}">
            @csrf 
        
            <h3>Email: <input type="email" name="email"></h3>
            <h3>Contrasenya: <input type="text" name="passwd"></h3>
            <h3><input type="checkbox" name="recordarme"> Remember me:</h3>
            <input type="submit" name="enviar"><br><br>

            <a href="{{ route('signup') }}">Crear usuari</a>
            

    </form>
</body>
</html>