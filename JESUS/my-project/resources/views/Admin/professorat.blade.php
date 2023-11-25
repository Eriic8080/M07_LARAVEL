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
    <h1>LLISTA PROFESSORAT</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>SURNAME</th>
                <th>ROL</th>
                <th>EMAIL</th>
            </tr>
        </thead>
        <tbody>
            @foreach($professoratData as $profe)
                <tr>
                    <td>{{ $profe['id'] }}</td>
                    <td>{{ $profe['name'] }}</td>
                    <td>{{ $profe['surname'] }}</td>
                    <td>{{ $profe['rol'] }}</td>
                    <td>{{ $profe['email'] }}</td> 
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('adminView') }}">ADMIN VISTA</a>

</body>
</html>
