<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps
        ')->get('http://localhost:3000/usuarios');
        return view('personas.index')->with('personas',json_decode($personas));

        // === PARA LLENAR LA TABLA Personas ===
        /* $response = HTTP::get('http://localhost:3000/personas');
        $usuarios = $response->json();

        return view('personas.index', compact('usuarios'));

        $response = Http::get('http://localhost:3000/personas');
        return $response->json();
        return $response->ok();
        return view('personas.index')->with('usuarios', json_decode($response,true));*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        //=== LLAMAR EL FORMULARIO CREATE ===
        return view('personas.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->post('http://localhost:3000/insert_usuarios',['NOMBRE_USUARIO'=>$request->NOMBRE_USUARIO,'CORREO_USUARIO'=>$request->CORREO_USUARIO,'PASSWORD_USUARIO'=>$request->PASSWORD_USUARIO,'COD_ROL'=>$request->ROL]);
        return redirect('/personas');
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
    public function destroy($cod_usuario)
    {
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->delete('http://localhost:3000/eliminar_usuario',['COD_USUARIO'=>$cod_usuario]);
        return redirect('/personas');
    }
}
