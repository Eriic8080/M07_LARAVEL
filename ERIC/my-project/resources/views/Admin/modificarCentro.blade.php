<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centres</title>
</head>
<body>
<table>
    <h1>Modificar Centro</h1>
        <form method="POST" action="{{ route('modificarCentro', $centre->id) }}">
        @csrf
        @method('PUT')
        <h3>Name:<input name="name"></input><h3>
        <h3>Address:<input name="address"></input><h3>
        <h3>CP:<input name="cp"></input><h3>
        <h3>CITY:<input name="city"></input><h3>
        <input type="submit" value="submit" name = "send"/><br>
    </form> 
    <a href="{{ route('inicio')}}">ADMIN VISTA</a>
    
</body>
</html> 