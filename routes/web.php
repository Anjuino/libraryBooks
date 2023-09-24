<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/2.blade.php', function () {
    return view('2');
});

Route::get('/3.blade.php', function () {
    return view('3');
});

Route::get('/4.blade.php', function () {
    return view('4');
});

Route::get('/1.blade.php', function () {
    return view('1');
});

Route::get('/5.blade.php', function () {
    return view('5');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

