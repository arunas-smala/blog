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

Route::view('/', 'welcome');

Route::get('about', function () {
    return view('mailerlite');
});

Route::get('contacts', function() {
    $name = 'Arunas';
    $email = 'arunas@smala.lt';
    $phone = '+37060797432';
    $interests = [
        'labuka', 'ka', 'tu',
    ];


    $data = compact('name', 'email', 'phone', 'interests');

    return view('contacts', $data);
});

Route::get('skills', function() {
    $skills = ['php', 'laravel'];
    return view('skills', compact('skills'));
});

