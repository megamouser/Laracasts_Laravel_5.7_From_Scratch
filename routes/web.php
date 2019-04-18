<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $tasks = [
        'task one',
        'task two',
        'task three'
    ];

    return view('home', [
        'tasks' => $tasks,
        'date' => date('d.m.y'),
        'name' => request('name'),
        'script' => "<script>console.log('worked')</script>"
    ]);
});

Route::get('about', function() {
    return view('about');
});

Route::get('contact', function() { // example.com/contact
    return view('contact');
});