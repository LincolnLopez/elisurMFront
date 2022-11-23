<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PresupuestosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $presupuestos = Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps
        ')->get('http://localhost:3000/solicitudes');
        return view('presupuestos.index')->with('presupuestos',json_decode($presupuestos));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        //=== LLAMAR EL FORMULARIO CREATE ===
        return view('presupuesto.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //llama api de insert
    public function store(Request $request)                                                                                                                                                          //NOMBRE_SOLICITANTE, TELEFONO, CORREO_ELECTRONICO, TIPO_SOLICITANTE, TELEFONO_OPCIONAL, DIRECCION_SOLICITANTE, CIUDAD, COD_SERVICIO, DESCRIPCION_SOLICITUD                                                                                     
    {
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->post('http://localhost:3000/solicitudes',['NOMBRE_SOLICITANTE'=>$request->NOMBRE_SOLICITANTE,'CORREO_USUARIO'=>$request->CORREO_USUARIO,'PASSWORD_USUARIO'=>$request->PASSWORD_USUARIO,'COD_ROL'=>$request->ROL]);
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

     //Llamar select uno
    public function edit($cod_usuario)
    {
        $persona = DB ::table('tbl_usuarios')->select('cod_usuario','nombre_usuario','correo_usuario','password_usuario','cod_rol')->where('cod_usuario', '=', $cod_usuario)->first();
        return view('personas.edit')->with('persona',$persona);
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Actualizar personas
    public function update(Request $request)
    {
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->put('http://localhost:3000/actualizar_usuarios',['COD_USUARIO'=>$request->COD_USUARIO,'NOMBRE_USUARIO'=>$request->NOMBRE_USUARIO,'CORREO_USUARIO'=>$request->CORREO_USUARIO,'PASSWORD_USUARIO'=>$request->PASSWORD_USUARIO,'COD_ROL'=>$request->ROL]);
        return redirect('/personas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Eliminar Usuario
    public function destroy($cod_usuario)
    {
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->delete('http://localhost:3000/eliminar_usuario',['COD_USUARIO'=>$cod_usuario]);
        return redirect('/personas');
    }
}
