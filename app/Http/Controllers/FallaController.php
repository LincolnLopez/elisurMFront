<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
//agregamos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class FallaController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:ver-Solicitudes_cliente|crear-Solicitudes_cliente|editar-Solicitudes_cliente|borrar-Solicitudes_cliente', ['only' => ['index']]);
         $this->middleware('permission:crear-Solicitudes_cliente', ['only' => ['create','store']]);
         
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('falla.index');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('falla.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->
post('http://localhost:3000/falla/insert',['COD_SERVICIO'=>$request->COD_SERVICIO,'NOMBRE'=>$request->NOMBRE,'TELEFONO'=>$request->TELEFONO,
 'CORREO_ELECTRONICO'=>$request->CORREO_ELECTRONICO,'TEMA'=>$request->TEMA,'DESCRIPCION'=>$request->DESCRIPCION,'UBICACION'=>$request->UBICACION,]);
 return redirect('/falla');
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
    public function destroy($COD_REPORTE_FALLA)
    {
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->delete('http://localhost:3000/fallas/proceso',['COD_REPORTE_FALLA'=>$COD_REPORTE_FALLA]);
        return redirect('/ticket_empleado');

      
    }
}
