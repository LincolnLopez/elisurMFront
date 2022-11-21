<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\BitacoraClienteController;
use App\Http\Controllers\CotizacionController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\FallaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\InventarioHController;
use App\Http\Controllers\PresupuestoController;
use App\Http\Controllers\PresupuestoUsuarioController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketEmpleadoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!fffffffffxxxxxx
*/ 

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/personas', PersonasController::class); 
Route::resource('/roles', RolesController::class); 
Route::resource('/bitacora_admin', BitacoraController::class);
Route::resource('/bitacora_cliente', BitacoraClienteController::class);
Route::resource('/cotizacion', CotizacionController::class);
Route::resource('/encuesta', EncuestaController::class);
Route::resource('/falla', FallaController::class);
Route::resource('/home', HomeController::class);
Route::resource('/inicio', InicioController::class);
Route::resource('/inventario', InventarioController::class);
Route::resource('/inventarioH', InventarioHController::class);
Route::resource('/presupuesto', PresupuestoController::class);
Route::resource('/presupuesto_usuario', PresupuestoUsuarioController::class);
Route::resource('/reporte', ReporteController::class);
Route::resource('/ticket', TicketController::class);
Route::resource('/ticket_empleado', TicketEmpleadoController::class);

Route::resource('/articulo', ArticuloController::class);



Route::get('/pcrear', function () {
    return view(view:'pcrear');
});

