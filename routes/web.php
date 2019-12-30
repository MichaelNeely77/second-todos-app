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
    return view('welcome');
});

Route::get('/new', [
    'uses' => 'PagesController@new'
]);

Route::get('/tasks', [
    'uses' => 'TasksController@index',
    'as' => 'tasks'
]);

Route::get('/task/delete/{id}', [
    'uses' => 'TasksController@delete',
    'as' => 'task.delete'
]);

Route::get('/task/update/{id}', [
    'uses' => 'TasksController@update',
    'as' => 'task.update'
]);

Route::post('/task/save/{id}', [
    'uses' => 'TasksController@save',
    'as' => 'tasks.save'
]);

Route::post('/create/task', [
    'uses' => 'TasksController@store'
]);

Route::get('/tasks/completed/{id}', [
    'uses' => 'TasksController@completed',
    'as' => 'tasks.completed'
]);
