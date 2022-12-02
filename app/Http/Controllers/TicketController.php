<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $ticket = Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps
            ')->get('http://localhost:3000/fallas');
            return view('ticket.index')->with('tickets',json_decode($ticket ));

        
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticket.create');
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
        post('http://localhost:3000/falla/insert',['COD_SERVICIO'=>$request->COD_SERVICIO,'NOMBRE'=>$request->NOMBRE,'TELEFONO'=>$request->TELEFONO,'CORREO_ELECTRONICO'=>$request->CORREO_ELECTRONICO,'TEMA'=>$request->TEMA,'DESCRIPCION'=>$request->DESCRIPCION,'UBICACION'=>$request->UBICACION]);
        return redirect('/ticket');
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
    public function edit($COD_REPORTE_FALLA)
    {
        $presupuesto = DB ::table('tbl_solicitudes')->select('cod_solicitud','nombre','apellido','telefono','correo_electronico','tipo_solicitante','telefono_opcional','direccion_solicitante','nombre_e_c','rtn_dni','ciudad','cod_servicio','descripcion_solicitud','cod_estado')->where('cod_solicitud', '=', $cod_solicitud)->first();
        return view('presupuesto.edit')->with('presupuesto',$COD_REPORTE_FALLA);
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
        return redirect('/ticket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($COD_REPORTE_FALLA)
    {
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->delete('http://localhost:3000/fallas/proceso',['COD_REPORTE_FALLA'=>$COD_REPORTE_FALLA]);
        return redirect('/ticket');

      
    }
}
