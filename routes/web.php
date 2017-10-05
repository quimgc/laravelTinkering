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
use App\Task;

Route::get('/', function () {
    return view('welcome');
});


Route::get('home', function () {
    echo "Hola sóc la HOME";
});

Route::get('tasks', 'TaskController@index');
//
//Route::get('createFakeTask', function(){
//    factory('App\Task')->create();
//});

Route::get('createFakeTask', function(){
    factory(Task::class, 10)->create();
});


//Cruddy by design CRUD.
//route:post
//route:put
//route:delete


