<!-- resources/views/movies/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Películas</title>
</head>
<body>
<h1>Listado de Películas</h1>
<table border="1">
    <thead>
    <tr>
        <th>Título</th>
        <th>Descripción</th>
        <th>Año</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($movies as $movie)
        <tr>
            <td>{{ $movie->title }}</td>
            <td>{{ $movie->description }}</td>
            <td>{{ $movie->year }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
