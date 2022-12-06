<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

//agregamos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class TicketController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:ver-ticket|crear-ticket|editar-ticket|borrar-ticket', ['only' => ['index']]);
         $this->middleware('permission:crear-ticket', ['only' => ['create','store']]);
         $this->middleware('permission:editar-ticket', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-ticket', ['only' => ['destroy']]);
    }
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
        $ticket = DB ::table('tbl_reporte_fallas')->select('cod_reporte_falla','cod_servicio','nombre','telefono','correo_electronico','tema','descripcion','ubicacion','cod_estado')->where('cod_reporte_falla', '=', $COD_REPORTE_FALLA)->first();
        return view('ticket.edit')->with('ticket',$ticket);
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
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->put('http://localhost:3000/falla_Update',['COD_REPORTE_FALLA'=>$request->COD_REPORTE_FALLA,'COD_SERVICIO'=>$request->COD_SERVICIO,'NOMBRE'=>$request->NOMBRE,'TELEFONO'=>$request->TELEFONO,'CORREO_ELECTRONICO'=>$request->CORREO_ELECTRONICO,'TEMA'=>$request->TEMA,'DESCRIPCION'=>$request->DESCRIPCION,'UBICACION'=>$request->UBICACION,'COD_ESTADO'=>$request->COD_ESTADO]);
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
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->delete('http://localhost:3000/fallas/delete',['COD_REPORTE_FALLA'=>$COD_REPORTE_FALLA]);
        return redirect('/ticket');

      
    }
}
