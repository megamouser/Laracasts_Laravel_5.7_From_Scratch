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

    $script = '<script>console.log("test")</script>';

    return view('home')
            ->withTasks($tasks)
            ->withDate(date('d.m.y'))
            ->withName(request('name'))
            ->withScript($script);
});

Route::get('about', function() {
    return view('about');
});

Route::get('contact', function() { // example.com/contact
    return view('contact');
});