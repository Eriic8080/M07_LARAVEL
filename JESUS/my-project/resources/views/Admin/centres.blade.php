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
    <h1>LLISTA DE CENTRES</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>CP</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            @foreach($centresData as $centre)
                <tr>
                    <td>{{ $centre['id'] }}</td>
                    <td>{{ $centre['name'] }}</td>
                    <td>{{ $centre['address'] }}</td>
                    <td>{{ $centre['cp'] }}</td>
                    <td>{{ $centre['city'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('adminView') }}">ADMIN VISTA</a>

</body>
</html>
