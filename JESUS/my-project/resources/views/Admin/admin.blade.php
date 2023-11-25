<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ route('users') }}">
    @csrf
<h1>BENVINGUT/DA ADMIN</h1>
    <a href="{{ route('centres') }}">CENTRES</a>
    <a href="{{ route('professorat') }}">PROFESSORAT</a>
    <a href="{{ route('alumnat') }}">ALUMNAT</a>
    <div>
    
    <a href="{{route('users')}}">Log Out</a>
    </div>
</body>
</html>