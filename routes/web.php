<?php

// use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return 'Hello contact';
});

Route::get('/about', function () {
    return 'Hello about';
});

Route::get('/post/{id}/{name}', function ($id,$name) {
    return 'Hello number:' . $id . $name;
});

Route::get('admin/post/example', array('as'=>'admin.home' ,function () {
    $url = route('admin.home');
    return 'The url is' . $url;
})); */

Route::get('/post', 'PostController@index');





Route::group(['middleware' => ['wed']], function () {

});