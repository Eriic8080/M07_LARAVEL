<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREAR USUARIO V.ESPAÑOL</title>
</head>
<body>
<form method="POST" action="index.php">
<h1></h1>
  <div>
    <label>ID</label><br>
    <input type="text" name="id"><br>
  </div>

  <div>
    <label>Rol</label><br>
    <input type="text" name="rol"><br>
  </div>
  <div>
    <label>Nombre</label><br>
    <input type="text" name="name"><br>
  </div>
  <div>
    <label>Apellido</label><br>
    <input type="text" name="surname"><br>
  </div>
  <div>
    <label>Contraseña</label><br>
    <input type="text" name="password"><br>
  </div>
  <div>
    <label>Correo Electronico</label><br>
    <input type="text" name="email"><br>
  </div>
  <div>
    <label>Activo</label><br>
    <input type="checkbox" name="active"><br>
  </div>

  <button type="submit" value="Enviar" name="send">

  <div>
    <a href=" {{ route('signin') }}">SIGN IN</a>
  </div>
</form> 

</body>
</html>