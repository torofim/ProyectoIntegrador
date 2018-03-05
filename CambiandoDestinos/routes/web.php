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
Route::get('/index', function(){
    return view('index');
});
Route::get('/dash', function(){
    return view('dashboard');
});
Route::get('/beneficiados',function(){
  return view('dashboardbeneficiarios')
});
Route::get('/graficos',function(){
  return view('dashboardgraficos');
});
Route::get('/inicio',function(){
  return view('dashboardinicio')
});
Route::get('/usuarios',function{
  return view('dashboardusuarios')
});
Route::group(['prefix'=>'admin','as'=>'admin.'],function(){
  Route::get('/','AdminController@index');
  Route::get('/usuarios','UsuariosController@index');
  Route::resource('usuarios','UsuariosController');
  Route::resource('admin','AdminController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
