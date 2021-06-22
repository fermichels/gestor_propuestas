<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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





Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ROOT ROUTES


    Route::get('/user', [App\Http\Controllers\Auth\RegisterController::class, '__construct'])->name('user.register');
    
	Route::get('/editUser/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'editar'])->name('editUser');
	
	Route::get('/editLineas/{id}', [App\Http\Controllers\LineasController::class, 'editar'])->name('editLineas');
	Route::get('/deletLineas/{id}', [App\Http\Controllers\LineasController::class, 'borra_lineas'])->name('deletLineas');
	Route::get('/lineas', [App\Http\Controllers\LineasController::class, 'lineas_index'])->name('lineas.index');

	//Route::post('/lineas', [App\Http\Controllers\LineasController::class, 'postGuardaLinea'])->name('lineas');
	Route::post('/lineas', [App\Http\Controllers\LineasController::class, 'postUpdateOrCreateLinea'])->name('lineas');
	
	Route::get('/deletPropuesta/{id}', [App\Http\Controllers\PropuestasController::class, 'borra_propuestas'])->name('deletPropuesta');
	Route::get('/propuestas', [App\Http\Controllers\PropuestasController::class, 'propuestas_index'])->name('propuestas');
	Route::get('/verpropuestas', [App\Http\Controllers\PropuestasController::class, 'ver_propuestas'])->name('ver_propuestas');
	Route::post('/propuestas', [App\Http\Controllers\PropuestasController::class, 'postUpdateOrCreatePropuesta'])->name('propuesta');
	Route::get('/editPropuesta/{id}', [App\Http\Controllers\PropuestasController::class, 'editar'])->name('editPropuesta');
	Route::get('/alum/lineasalum', [App\Http\Controllers\PropuestasController::class, 'lineas_index'])->name('alum/lineasalum');
	Route::get('/alum/lineasalum/{id}', [App\Http\Controllers\PropuestasController::class, 'ver_por_lineas'])->name('alum/lineasalum');
	Route::get('/solicitartema/{id}', [App\Http\Controllers\SolicitudController::class, 'solicitar_index'])->name('solicitarTema');
	Route::post('/solicitartema', [App\Http\Controllers\SolicitudController::class, 'postUpdateOrCreateSolicitud'])->name('solicitartema');
	Route::get('/versolicitudes', [App\Http\Controllers\SolicitudController::class, 'solicitudes'])->name('versolicitudes');
	Route::get('/asignartema/{id}', [App\Http\Controllers\TemaController::class, 'asignar_index'])->name('asignarTema');
	Route::post('/asignartema', [App\Http\Controllers\TemaController::class, 'postUpdateOrCreateAsignacion'])->name('asignartema');
	Route::get('/alum/tema/{id}', [App\Http\Controllers\TemaController::class, 'tema_index'])->name('tema');
    //Route::get('editUser/{id}','Auth\RegisterController@editar')->name('editUser');
    //Route::get('/edita/{id}', [
	//	'uses' => 'TrabajoController@trabajos_index',
	//	'as' => 'edita_trabajo'
	//]);

	//Route::get('/borra/{id}', [
	//	'uses' => 'TrabajoController@borra_trabajo',
	//	'as' => 'borra_trabajo'
	//]);

	//Route::post('/save', [
	//	'uses' => 'TrabajoController@postGuardaTrabajo',
	//	'as' => 'postGuardaTrabajo'
	//]);

	//Route::post('/edit', [
	//	'uses' => 'TrabajoController@postEditaTrabajo',
	//	'as' => 'postEditaTrabajo'
	//]);