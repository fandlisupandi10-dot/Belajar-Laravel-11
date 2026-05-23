<?php

// use App\Http\Middleware\CekMembership;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
  $movies = [];

    for($i = 1; $i <= 10; $i++) {
        $movies[] = [
            'title' => 'Movie'. $i,
            'year' => '2020',
            'genre' => 'Action',
        ];
    }

Route::get('/movie', function() use ($movies) {
  
    return $movies;
    

});

// middleware untuk mengecek apakah user memiliki membership atau tidak, jika tidak maka tidak bisa mengakses route ini
Route::get('/movie/{id}', function($id) use ($movies) {
  
    return $movies[$id];
    

})->middleware(['isAuth','isMember']);

Route::post('/movie', function() use ($movies) {
  $movies[] = [
    'title' => request('title'),

    'year' => request('year'),
    
    'genre' => request('genre'),
  ];

      return $movies;

});



Route::put('/movie/{id}', function($id) use ($movies) {

  $movies[$id]['title'] = request('title');
  $movies[$id]['year'] = request('year');
  $movies[$id]['genre'] = request('genre');

      return $movies;

});

Route::patch('/movie/{id}', function($id) use ($movies) {

  $movies[$id]['title'] = request('title');
  $movies[$id]['year'] = request('year');
  $movies[$id]['genre'] = request('genre');

      return $movies;

});

Route::delete('/movie/{id}', function($id) use ($movies) {

  unset($movies[$id]);

      return $movies;

});

Route::get('/pricing', function() {
    return 'Please subscribe to our membership to access this page';
});

Route::get('/login', function() {
    return 'Login Page';
})->name('login');