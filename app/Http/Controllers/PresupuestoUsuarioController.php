<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
//agregamos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PresupuestoUsuarioController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:ver-presupuestoUsuario|crear-presupuestoUsuario|editar-presupuestoUsuario|borrar-presupuestoUsuario', ['only' => ['index']]);
         $this->middleware('permission:crear-presupuestoUsuario', ['only' => ['create','store']]);
         $this->middleware('permission:editar-presupuestoUsuario', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-presupuestoUsuario', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $presupuesto = Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps
        ')->get('http://localhost:3000/solicitudes');
        return view('presupuesto_usuario.create')->with('presupuesto',json_decode($presupuesto)); 
       
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/presupuesto_usuario.delete');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     //----------------INSERT SOLICITUD
    public function store(Request $request)
    {
 Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->
post('http://localhost:3000/solicitudes/insert',['NOMBRE'=>$request->NOMBRE,'APELLIDO'=>$request->APELLIDO,'TELEFONO'=>$request->TELEFONO,
 'CORREO_ELECTRONICO'=>$request->CORREO_ELECTRONICO,'TIPO_SOLICITANTE'=>$request->TIPO_SOLICITANTE,'TELEFONO_OPCIONAL'=>$request->TELEFONO_OPCIONAL,
'DIRECCION_SOLICITANTE'=>$request->DIRECCION_SOLICITANTE,'NOMBRE_E_C'=>$request->NOMBRE_E_C,'RTN_DNI'=>$request->RTN_DNI,'CIUDAD'=>$request->CIUDAD,
'COD_SERVICIO'=>$request->COD_SERVICIO,'DESCRIPCION_SOLICITUD'=>$request->DESCRIPCION_SOLICITUD]);
 return redirect('/presupuesto_usuario');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($COD_SOLICITUD )
    {
        $solicitud = DB ::table('tbl_solicitudes')->select('COD_SOLICITUD','FECHA_SOLICITUD','NOMBRE','APELLIDO','TELEFONO','CORREO_ELECTRONICO','TIPO_SOLICITANTE','TELEFONO_OPCIONAL','DIRECCION_SOLICITANTE','NOMBRE_E_C','RTN_DNI','CIUDAD','COD_SERVICIO','DESCRIPCION_SOLICITUD','COD_ESTADO')->where('COD_SOLICITUD', '=', $COD_SOLICITUD)->first();
        return view('presupuesto_usuario.update')->with('presupuesto_usuario',$solicitud );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
