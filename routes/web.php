<?php





use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
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
use App\Http\Controllers\RespaldoController;





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


//y creamos un grupo de rutas protegidas para los controladores
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolesController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('bitacora_admin', BitacoraController::class);
    Route::resource('bitacora_cliente', BitacoraClienteController::class);
    Route::resource('encuesta', EncuestaController::class);
    Route::resource('empleados', EmpleadosController::class);
    Route::resource('falla', FallaController::class);
    Route::resource('inventarios', InventariosController::class);
    Route::resource('inventarioH', InventarioHController::class);
    Route::resource('presupuesto', PresupuestoController::class);
    Route::resource('presupuesto_usuario', PresupuestoUsuarioController::class);
    Route::resource('reporte', ReporteController::class);
    Route::resource('ticket', TicketController::class);
    Route::resource('ticket_empleado', TicketEmpleadoController::class);
    Route::resource('clientes', ClientesController::class);
    Route::resource('articulos', ArticuloController::class);
    Route::resource('respaldos', RespaldoController::class);
});



Route::resource('cotizacion', CotizacionController::class);





