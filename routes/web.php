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


// ROOT ROUTES
Route::middleware(['root'])->group(function () {

	Route::get('/user', [App\Http\Controllers\Auth\RegisterController::class, '__construct'])->name('user.register');

	Route::get('/editUser/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'editar'])->name('editUser');
	Route::get('/deletuser/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'delete'])->name('deletuser');

	Route::get('/editLineas/{id}', [App\Http\Controllers\LineasController::class, 'editar'])->name('editLineas');
	Route::get('/deletLineas/{id}', [App\Http\Controllers\LineasController::class, 'borra_lineas'])->name('deletLineas');
	Route::get('/lineas', [App\Http\Controllers\LineasController::class, 'lineas_index'])->name('lineas.index');
	Route::post('/lineas', [App\Http\Controllers\LineasController::class, 'postCreateLinea'])->name('lineas');
	Route::get('/propuestaspublicadas', [App\Http\Controllers\PropuestasController::class, 'ver_propuestas'])->name('ver_propuestas');

	
});


// ALUM ROUTES
Route::middleware(['alum'])->group(function () {

	Route::get('/alum/lineasalum', [App\Http\Controllers\PropuestasController::class, 'lineas_index'])->name('alum/lineasalum');
	Route::get('/alum/lineasalum/{id}', [App\Http\Controllers\PropuestasController::class, 'ver_por_lineas'])->name('alum/lineasalum');

	Route::get('/alum/temasasignados', [App\Http\Controllers\PropuestasController::class, 'ver_asig'])->name('alum/temasasignados');

	Route::get('/solicitartema/{id}', [App\Http\Controllers\SolicitudController::class, 'solicitar_index'])->name('solicitarTema');
	Route::post('/solicitartema', [App\Http\Controllers\SolicitudController::class, 'postUpdateOrCreateSolicitud'])->name('solicitartema');
	Route::get('/alum/tema/{id}', [App\Http\Controllers\TemaController::class, 'tema_index'])->name('tema');
	Route::get('/alum/config', [App\Http\Controllers\Auth\ChangePasswordController::class, 'showChangeAlumPasswordForm'])->name('changePassword');
	Route::post('/alum/config', [App\Http\Controllers\Auth\ChangePasswordController::class, 'changeAlumPassword'])->name('changePassword');


	Route::get('/alum/cambiardatos/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'editar_datos'])->name('editar_datos');
	Route::post('/alum/cambiardatos/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'posteditar'])->name('editar_datos');
	
});



// TUTO ROUTES
Route::middleware(['tuto'])->group(function () {

	Route::get('/deletPropuesta/{id}', [App\Http\Controllers\PropuestasController::class, 'borra_propuestas'])->name('deletPropuesta');
	Route::get('/propuestas', [App\Http\Controllers\PropuestasController::class, 'propuestas_index'])->name('propuestas');
	Route::get('/verpropuestas', [App\Http\Controllers\PropuestasController::class, 'ver_propuestas'])->name('ver_propuestas');
	Route::get('/mispropuestasasig', [App\Http\Controllers\TemaController::class, 'ver_mis_propuestas_asig'])->name('ver_mis_propuestas_asig');
	Route::post('/propuestas', [App\Http\Controllers\PropuestasController::class, 'postUpdateOrCreatePropuesta'])->name('propuesta');
	Route::get('/editPropuesta/{id}', [App\Http\Controllers\PropuestasController::class, 'editar'])->name('editPropuesta');
	Route::get('/asignartema/{id}', [App\Http\Controllers\TemaController::class, 'asignar_index'])->name('asignarTema');
	Route::post('/asignartema', [App\Http\Controllers\TemaController::class, 'postUpdateOrCreateAsignacion'])->name('asignartema');
	Route::get('/versolicitudes', [App\Http\Controllers\SolicitudController::class, 'solicitudes'])->name('versolicitudes');
	Route::get('/deletSolicitud/{id}', [App\Http\Controllers\SolicitudController::class, 'borraSolicitud'])->name('deletSolicitud');
	Route::get('/config', [App\Http\Controllers\Auth\ChangePasswordController::class, 'showChangePasswordForm'])->name('changePassword');
	Route::post('/config', [App\Http\Controllers\Auth\ChangePasswordController::class, 'changePassword'])->name('changePassword');
	
});

Route::get('/error404', [App\Http\Controllers\HomeController::class, 'error404'])->name('error404');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

