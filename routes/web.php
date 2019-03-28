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

Route::get('contact-us', 'ContactsController@index')->name('page_contacts');

Route::get('skills', function() {
    $skills = ['php', 'laravel'];
    return view('skills', compact('skills'));
});

Route::resource('posts', 'PostController');
Route::resource('files', 'FileController');
