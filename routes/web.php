<?php

// use App\Http\Middleware\CekMembership;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

// Route::get('/', function () {
//     return view('welcome');
// });


 $movies = [];

 

Route::group(
    
    [
       
        'prefix' => 'movie',
        
        'as' => 'movie.'

    ], function() {

    Route::get('/',[MovieController::class, 'index']);

    Route::get('/{id}', [MovieController::class, 'show']);

    Route::post('/', [MovieController::class, 'store']);

    Route::put('/{id}', [MovieController::class, 'update']);

    Route::delete('/{id}', [MovieController::class, 'destroy']);

    
  });

Route::get('/pricing', function() 
{
    return 'Please subscribe to our membership to access this page';
});

 Route::get('/login', function() 
 {
return 'Login Page';
 })->name('login');

