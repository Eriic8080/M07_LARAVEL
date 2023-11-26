<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin bienvenida</title>
</head>
<body>
    <h1>Benvingut/da ADMIN</h1>
    <br>
    <a href="{{ route('centres')}}">Centres</a>
    <br>
    <a href="{{ route('professorat')}}">Professorat</a>
    <br>
    <a href="{{ route('alumnat') }}">Alumnat</a>
    <br>
    <br>
    <a href="{{ route('signin') }}">Log Out</a>

</body>
</html>