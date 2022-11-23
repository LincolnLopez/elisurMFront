<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps
        ')->get('http://localhost:3000/inventarios');
        return view('inventario.index')->with('personas',json_decode($personas));

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
        return view('inventario.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->post('http://localhost:3000/insert_inventario',['COD_ARTICULO'=>$request->COD_ARTICULO,'CANTIDAD_ARTICULO'=>$request->CANTIDAD_ARTICULO]);
        return redirect('/inventario');
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
    public function edit($cod_inventario)
    {
        $persona = DB ::table('tbl_inventarios')->select('cod_inventario','cod_articulo','cantidad_articulo')->where('cod_inventario', '=', $cod_inventario)->first();
        return view('inventario.edit')->with('persona',$persona);
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
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->put('http://localhost:3000/update_inventario',['COD_INVENTARIO'=>$request->COD_INVENTARIO,'COD_ARTICULO'=>$request->COD_ARTICULO,'CANTIDAD_ARTICULO'=>$request->CANTIDAD_ARTICULO]);
        return redirect('/inventario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($COD_INVENTARIO)
    {
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->delete('http://localhost:3000/eliminar_inventario',['COD_INVENTARIO'=>$COD_INVENTARIO]);
        return redirect('/inventario');
    }
}
