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
    return view('index');
});

Route::get('/resources/views/index.blade.php',function(){
	return view('index');
});

Route::get('/resources/views/login.blade.php',function(){
	return view('login');
});

Route::get('index',function(){
	return view('index');
});

Route::get('login',function(){
	return view('login');
});
Route::get('admin',function(){
	return view('admin.index');
});
Route::get('admin/them_user',function(){
	return view('admin.user.user_add');
});
Route::get('route1',['as'=>'myRoute',function(){
	echo "đây là route 1 !";
}]);
Route::get('goir1',function(){
	return redirect()->route('myRoute');
});
Route::get('route2',function(){
	echo "đây là route 2 !";
})->name('MyRoute2');
Route::get('goir2',function(){
	return redirect()->route('MyRoute2');
});
Route::get('goictl','myController@xinChao');
Route::get('khoahoc/{ten}','myController@khoahoc');




