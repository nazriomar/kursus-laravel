<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{name}', function ($name) {
    return view('home', ['name' => $name]);
});

Route::get('/auth/signin', function () {
    return view('auth.signin');
});

Route::get('/user/{name}', function ($name) {
    return 'User: ' . $name;
   
});

Route::get('/user/profile', function () {
    return 'User Profile';
})->name('user.profile');

Route::get('/redirect-to-profile', function () {
    return redirect()->route('user.profile');
});

Route::prefix('food')->group(function (){

    Route::get('/details', function () {
        return 'Food details';
    });
    
    Route::get('/home', function () {
        return 'Food home';
    });
});

Route::name('job')->prefix('job')->group(function (){

    Route::get('home', function () {
        return 'job home ';
    })->name('.home');
    
    Route::get('details', function () {
        return 'job details';
    })->name('.description');
});






