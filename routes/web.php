<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/movie', function() {
    $movies = [];

    for($i = 1; $i <= 10; $i++) {
        $movies[] = [
            'title' => 'Movie'. $i,
            'year' => 2020,
            'genre' => 'Action',
        ];
    }

    echo'<h1>Movies</h1>';

    echo'<ul>';
    foreach($movies as $movie) {
        echo'<li>' . $movie['title'] . '</li>';
    }
    echo'</ul>';
    

});

Route::post('/movie', function() {
   request();
   return request()->all();
   
    
});
