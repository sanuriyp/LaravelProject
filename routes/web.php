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


/*
Route::get('/hello', function () {
     return 'Hello world';
});

//dynamic values to the url id and name
Route::get('/users/{id}/{name}', function ($id,$name) {
    return 'This is user '.$name.' With an id of '.$id;
});

*/
//url and funtion called in index which inside the PagesController
Route::get('/','PagesController@index');

/*
//normal view the about.blade.php file
Route::get('/about', function () {
    return view('pages.about');
});
*/
//using controllers to view the about.blade.php file and other blade.php files
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
//to access the all the routes we create in post controller
Route::resource('posts','PostsController');

