<?php





use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\BitacoraClienteController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CotizacionController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\FallaController;

use App\Http\Controllers\InventariosController;
use App\Http\Controllers\InventarioHController;
use App\Http\Controllers\PresupuestoController;
use App\Http\Controllers\PresupuestoUsuarioController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketEmpleadoController;
use App\Http\Controllers\ElisurloginController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!fffffffffxxxxxx
*/ 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('welcome');
});



Route::resource('/personas', PersonasController::class)-> middleware ('auth'); 
Route::resource('/roles', RolesController::class)-> middleware ('auth'); 
Route::resource('/bitacora_admin', BitacoraController::class)-> middleware ('auth');
Route::resource('/bitacora_cliente', BitacoraClienteController::class)-> middleware ('auth');
Route::resource('/cotizacion', CotizacionController::class);
Route::resource('/encuesta', EncuestaController::class)-> middleware ('auth');
Route::resource('/empleados', EmpleadosController::class)-> middleware ('auth');
Route::resource('/falla', FallaController::class)-> middleware ('auth');

Route::resource('/inventarios', InventariosController::class)-> middleware ('auth');
Route::resource('/inventarioH', InventarioHController::class)-> middleware ('auth');
Route::resource('/presupuesto', PresupuestoController::class)-> middleware ('auth');
Route::resource('/presupuesto_usuario', PresupuestoUsuarioController::class)-> middleware ('auth');
Route::resource('/reporte', ReporteController::class)-> middleware ('auth');
Route::resource('/ticket', TicketController::class)-> middleware ('auth');
Route::resource('/ticket_empleado', TicketEmpleadoController::class)-> middleware ('auth');
Route::resource('/clientes', ClientesController::class)-> middleware ('auth');

Route::resource('/articulos', ArticuloController::class)-> middleware ('auth');


/*
Route::view('/cotizacion','cotizacion')->name('cotizacion')->middleware('auth');
Route::view('/personas','personas')->name('personas')->middleware('auth');
Route::view('/bitacora_admin','bitacora_admin')->name('bitacora_admin')->middleware('auth');
Route::view('/bitacora_cliente','bitacora_cliente')->name('bitacora_cliente')->middleware('auth');

Route::view('/encuesta','encuesta')->name('encuesta')->middleware('auth');
Route::view('/empleados','empleados')->name('empleados')->middleware('auth');
Route::view('/falla','falla')->name('falla')->middleware('auth');


Route::view('/inventarios','inventarios')->name('inventarios')->middleware('auth');
Route::view('/inventarioH','inventarioH')->name('inventarioH')->middleware('auth');
Route::view('/presupuesto','presupuesto')->name('presupuesto')->middleware('auth');

Route::view('/presupuesto_usuario','presupuesto_usuario')->name('presupuesto_usuario')->middleware('auth');
Route::view('/reporte','reporte')->name('reporte')->middleware('auth');
Route::view('/ticket','ticket')->name('ticket')->middleware('auth');
Route::view('/ticket_empleado','ticket_empleado')->name('ticket_empleado')->middleware('auth');
Route::view('/clientes','clientes')->name('clientes')->middleware('auth');
Route::view('/articulos','articulos')->name('articulos')->middleware('auth');*/


