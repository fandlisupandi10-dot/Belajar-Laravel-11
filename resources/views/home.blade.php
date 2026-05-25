<?php 
$home = 'Ini adalah halaman home';
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title> 
</head> 
<body>
    <ul>
         @foreach($menu as $key => $value)
            <li><a href="{{ $value }}">{{ $key }}</a></li>
        @endforeach
    </ul>
    <h1>Home Page</h1>
    <p>{{ $home }}</p>
</body>
</html>