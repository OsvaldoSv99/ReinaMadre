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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('v', function(){
    return view("layout");
});

//////Empleado//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/empleado/crear','EmpleadoController@create')->name('empleado.crear');
Route::post('empleado/crear/guardar','EmpleadoController@store')->name('empleado.crear.guardar');
Route::get('empleado','EmpleadoController@index')->name('empleado');
Route::get('empleado/eliminar/{id_empleado}','EmpleadoController@destroy')->name("empleado.eliminar");
Route::get('empleado/editar/{id_empleado}','EmpleadoController@edit')->name("empleado.editar");
Route::post('empleado/editar/guardar','EmpleadoController@update')->name("empleado.editar.guardar");
//////Empresa//////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/empresa/crear','EmpresaController@create')->name('empresa.crear');
Route::post('/empresa/crear/guardar','EmpresaController@store')->name('empresa.crear.guardar');
Route::get("empresa","EmpresaController@index")->name("empresa.consulta");
Route::get("empresa/eliminar/{id_empresa}","EmpresaController@destroy")->name("empresa.eliminar");
Route::get("empresa/editar/{id_empresa}","EmpresaController@edit")->name("empresa.editar");
Route::post("empresa/editar/guardar","EmpresaController@update")->name("empresa.editar.guardar");
Route::get("empresa/departamentos/{id_empresa}","EmpresaController@departamentos")->name("empresa.departamentos");

/////////Departamentos///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get("departamentos/crear","DepartamentosController@create")->name("departamentos.crear");
Route::post("departamentos/crear/guardar","DepartamentosController@store")->name("departamentos.crear.guardar");
Route::get("departamentos","DepartamentosController@index")->name("departamentos");
Route::get("departamentos/editar/{id_departamento}","DepartamentosController@edit")->name("departamentos.editar");
Route::post("departamentos/editar/guardar","DepartamentosController@update")->name("departamentos.editar.guardar");
Route::get("departamentos/eliminar/{id_departamento}","DepartamentosController@destroy")->name("departamentos.eliminar");

///////Usuarios/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get("usuarios","UsuariosController@index")->name("usuarios");
Route::get("usuarios/eliminar/{id}","UsuariosController@destroy")->name("usuarios.eliminar");
Route::get("usuarios/crear","UsuariosController@create")->name("usuarios.crear");
Route::post("usuarios/crear/guardar","UsuariosController@store")->name("usuarios.crear.guardar");
Route::get("usuarios/editar/{id}","UsuariosController@edit")->name("usuarios.editar");
Route::post("usuarios/editar/guardar","UsuariosController@update")->name("usuarios.editar.guardar");