<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

//agregamos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PresupuestoController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:ver-presupuesto|crear-presupuesto|editar-presupuesto|borrar-presupuesto', ['only' => ['index']]);
         $this->middleware('permission:crear-presupuesto', ['only' => ['create','store']]);
         $this->middleware('permission:editar-presupuesto', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-presupuesto', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // ------------------------select
    public function index()
    {
        $presupuesto = Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps
        ')->get('http://localhost:3000/solicitudes');
        return view('presupuesto.index')->with('presupuestos',json_decode($presupuesto));

      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('presupuesto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //-----------------insert para cotizacion-solicitud 
     public function store(Request $request)
    {
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->
        post('http://localhost:3000/solicitudes/insert',['NOMBRE'=>$request->NOMBRE,'APELLIDO'=>$request->APELLIDO,'TELEFONO'=>$request->TELEFONO,'CORREO_ELECTRONICO'=>$request->CORREO_ELECTRONICO,'TIPO_SOLICITANTE'=>$request->TIPO_SOLICITANTE,'TELEFONO_OPCIONAL'=>$request->TELEFONO_OPCIONAL,'DIRECCION_SOLICITANTE'=>$request->DIRECCION_SOLICITANTE,'NOMBRE_E_C'=>$request->NOMBRE_E_C,'RTN_DNI'=>$request->RTN_DNI,'CIUDAD'=>$request->CIUDAD,'COD_SERVICIO'=>$request->COD_SERVICIO,'DESCRIPCION_SOLICITUD'=>$request->DESCRIPCION_SOLICITUD]);
        return redirect('/presupuesto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_solicitud)
    {
        $presupuesto = DB ::table('tbl_solicitudes')->select('cod_solicitud','nombre','apellido','telefono','correo_electronico','tipo_solicitante','telefono_opcional','direccion_solicitante','nombre_e_c','rtn_dni','ciudad','cod_servicio','descripcion_solicitud','cod_estado')->where('cod_solicitud', '=', $cod_solicitud)->first();
        return view('presupuesto.edit')->with('presupuesto',$presupuesto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->put('http://localhost:3000/solicitudes/update',['COD_SOLICITUD'=>$request->COD_SOLICITUD,'NOMBRE'=>$request->NOMBRE,'APELLIDO'=>$request->APELLIDO,'TELEFONO'=>$request->TELEFONO,'CORREO_ELECTRONICO'=>$request->CORREO_ELECTRONICO,'TIPO_SOLICITANTE'=>$request->TIPO_SOLICITANTE,'TELEFONO_OPCIONAL'=>$request->TELEFONO_OPCIONAL,'DIRECCION_SOLICITANTE'=>$request->DIRECCION_SOLICITANTE,'NOMBRE_E_C'=>$request->NOMBRE_E_C,'RTN_DNI'=>$request->RTN_DNI,'CIUDAD'=>$request->CIUDAD,'COD_SERVICIO'=>$request->COD_SERVICIO,'DESCRIPCION_SOLICITUD'=>$request->DESCRIPCION_SOLICITUD,'COD_ESTADO'=>$request->COD_ESTADO]);
        return redirect('/presupuesto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod_solicitud)
    {
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->delete('http://localhost:3000/solicitudes/delete',['COD_SOLICITUD'=>$cod_solicitud]);
        return redirect('/presupuesto');
    }
}
