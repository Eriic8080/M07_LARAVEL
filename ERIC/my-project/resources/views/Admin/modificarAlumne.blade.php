<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnes</title>
</head>
<body>  
<table>
    <h1>Modificar Alumne</h1>
        <form method="POST" action="{{ route('modificarAlumne', $alumne->Id) }}">
        @csrf
        @method('PUT')
        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{ $alumne->name }}"></br></br>

        <label for="surname">surname:</label>
        <input type="text" name="surname" value="{{ $alumne->surname }}"></br></br>
        
        <label for="rol">rol:</label>
        <input type="text" name="rol" value="{{ $alumne->rol }}"></br></br>

        <label for="email">email:</label>
        <input type="text" name="email" value="{{ $alumne->email }}"></br></br>

        <input type="submit" value="submit" name = "send"/><br></br>
    </form> 
    <a href="{{ route('inicio')}}">ADMIN VISTA</a>
    
</body>
</html> 