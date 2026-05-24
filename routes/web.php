<?php

// use App\Http\Middleware\CekMembership;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Iluminate\support\Facades\Response;
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



Route::get('/response', function() {
    return response('Ok')->header('Content-Type', 'text/plain');
   
    });

Route::get('/cache-control', function() {
    
    return Response::make('Cache Control', 200)

        ->header('Cache-Control', 'public, max-age=86400');

    });
        
