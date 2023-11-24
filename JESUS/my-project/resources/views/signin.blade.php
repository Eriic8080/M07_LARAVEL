
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN EN ESPAÑOL</title>
</head>
<body>
  
    
  <form method="POST">
        <div>
            <label>Correo Electronico</label><br>
            <input type="text" name="email"><br>
        </div>

        <div>
            <label>Contraseña</label><br>
            <input type="text" name="password"><br>
        </div>
        <div>
            <input type="checkbox" name="remember">
            <label>Recuerda-me</label><br>
          </div>
        <input type="submit" value="Enviar" name="signin">
        <div>
          <a href=" {{ route('signup') }}">SIGN UP</a>
        </div>

  </form>
</body>
</html>