<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps
        ')->get('http://localhost:3000/empleados'); 
        return view('empleados.index')->with('empleados',json_decode($empleados));
          
      return view('empleados.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->post('http://localhost:3000/insert_empleados',[ 'DNI_CLIENTE'=>$request->DNI_CLIENTE,'NOMBRE_CLIENTE'=>$request->NOMBRE_CLIENTE,'APELLIDOS_CLIENTE'=>$request->APELLIDOS_CLIENTE,'DIRECCION_CLIENTE'=>$request->DIRECCION_CLIENTE, 'RTN_CLIENTE'=>$request->RTN_CLIENTE,'TELEFONO'=>$request->TELEFONO,'CORREO'=>$request->CORREO,'COD_TIPO_CLIENTE'=>$request->COD_TIPO_CLIENTE]);
        return redirect('/empleados');
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
        $cliente = DB ::table('tbl_clientes')->select('cod_cliente','dni_cliente','nombre_cliente','apellidos_cliente','direccion_cliente','rtn_cliente','telefono_cliente','correo_cliente','fecha_registro','estado_cliente','cod_tipo_cliente')->where('cod_cliente', '=', $cod_cliente)->first();
        return view('clientes.edit')->with('cliente',$cliente);

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
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->put('http://localhost:3000/update_cliente',['COD_CLIENTE'=>$request->COD_CLIENTE,'DNI_CLIENTE'=>$request->DNI_CLIENTE, 'NOMBRE_CLIENTE'=>$request->NOMBRE_CLIENTE,'APELLIDOS_CLIENTE'=>$request->APELLIDOS_CLIENTE,'DIRECCION_CLIENTE'=>$request->DIRECCION_CLIENTE, 'RTN_CLIENTE'=>$request->RTN_CLIENTE,'TELEFONO_CLIENTE'=>$request->TELEFONO_CLIENTE,'CORREO_CLIENTE'=>$request->CORREO_CLIENTE, 'COD_TIPO_CLIENTE'=>$request->COD_TIPO_CLIENTE ]);
        return redirect('/clientes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->delete('http://localhost:3000/cliente/eliminar',['COD_CLIENTE'=>$COD_CLIENTE]);
        return redirect('/clientes');
    }
}
