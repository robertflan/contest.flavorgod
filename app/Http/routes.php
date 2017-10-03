<?php
Route::get('/', function () {
   return view('welcome');
});
Route::get('ID/{id}',function($id){
   echo 'ID: '.$id;
});
Route::get('/user/{name?}',function($name = 'Virat'){
   echo "Name: ".$name;
});
Route::get('profile', [
   'middleware' => 'auth',
   'uses' => 'UserController@showProfile'
]);
Route::resource('my','MyController');
Route::controller('test','ImplicitController');