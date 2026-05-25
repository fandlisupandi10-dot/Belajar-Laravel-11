<?php

// use App\Http\Middleware\CekMembership;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


 $movies = [];

 Route::get('/home', function (){

   $movieCategory = 'Drama';

    return view ('home', compact('movieCategory'));
 });

 

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

Route::middleware('cache.headers:public;max_age=2628000;etag')->group(function () {

    // Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/dashboard', function() {

        $user = "admin";

        return response('login successful', 200)->cookie('user', $user);
    
    });

    Route::get('/logout', function() {

        return redirect()->action([HomeController::class, 'index'], ['auth'=>false]);
    
    });

    Route::get('/privacy', function() {

        return 'Privacy Policy';    
    
    });

    Route::get('/terms', function() {

        return 'Terms and Conditions';    
    
    });
});



