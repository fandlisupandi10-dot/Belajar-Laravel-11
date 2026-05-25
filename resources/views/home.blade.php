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
    <h2> Movie Category</h2>
    @switch($movieCategory)

        @case('Action')

            <p>Action movies are full of excitement and adventure.</p>

            @break

        @case('Comedy')

            <p>Comedy movies are designed to make you laugh and have fun.</p>

            @break

        @case('Drama')

            <p>Drama movies often explore complex characters and emotional themes.</p>

            @break

        @default

            <p>Unknown movie category.</p>
    @endswitch
    </ul>
</body>
</html>