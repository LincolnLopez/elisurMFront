<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CotizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // ------------------------select
    public function index()
    {
       $cotizacion = Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps
        ')->get('http://localhost:3000/solicitudes');
        return view('cotizacion.index')->with('cotizacion',json_decode($cotizacion));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('cotizacion.create');
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
        return redirect('/cotizacion');
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
    public function edit($id)
    {
        //
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
