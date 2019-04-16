<?php
// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home',[
        'uses'=>'TodoController@index','as'=>'todos'
    ]);
    Route::post('/todos',[
    'uses'=>'TodoController@save','as'=>'todo.save'
    ]);
    Route::get('/todos/edit/{id}',[
        'uses'=>'TodoController@edit','as'=>'todo.edit'
    ]);
    Route::get('/todos/delete/{id}',[
        'uses'=>'TodoController@delete','as'=>'todo.delete'
    ]);
    Route::post('/todos/update/{id}',['uses'=>'TodoController@update','as'=>'todo.update']);

});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
