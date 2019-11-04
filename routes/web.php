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
    // if first-time setup, redirect to the setup page
    // cache this later
    $kit_level = DB::table('config')->where('name', 'kit_level')->first();
    if ($kit_level->value === '0') {
        return view('setup');
    }
    //otherwise
    return view('welcome');
});

Route::post('/setup', 'SetupController@register')->name('setup');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function() {
  return view('layouts/admin');
})->middleware('admin')
  ->name('admin.home');

Route::resource('admin/posts', 'PostController')->middleware('admin');

Route::get('/posts', 'DisplayPostController@index')->name('posts');
Route::get('/posts/{id}', 'DisplayPostController@showOne')->name('showPost');
