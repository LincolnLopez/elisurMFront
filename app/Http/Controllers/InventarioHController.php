<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

//agregamos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class InventarioHController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:ver-inventarioH|crear-inventarioH|editar-inventarioH|borrar-inventarioH', ['only' => ['index']]);
         $this->middleware('permission:crear-inventarioH', ['only' => ['create','store']]);
         $this->middleware('permission:editar-inventarioH', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-inventarioH', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps
        ')->get('http://localhost:3000/herramientas');
        return view('inventarioH.index')->with('personas',json_decode($personas));

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
        return view('inventarioH.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->post('http://localhost:3000/insert_herramienta',['NOMBRE_HERRAMIENTA'=>$request->NOMBRE_HERRAMIENTA,'DESCRIPCION_HERRAMIENTA'=>$request->DESCRIPCION_HERRAMIENTA,'NUM_EXISTENCIA'=>$request->NUM_EXISTENCIA,'COD_EMPLEADO'=>$request->COD_EMPLEADO]);
        return redirect('/inventarioH');
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
    public function edit($cod_herramienta)
    {
        $persona = DB ::table('tbl_inventario_herramientas')->select('cod_herramienta','nombre_herramienta','descripcion_herramienta','num_existencia','cod_empleado')->where('cod_herramienta', '=', $cod_herramienta)->first();
        return view('inventarioH.edit')->with('persona',$persona);
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
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->put('http://localhost:3000/actualizar_herramienta',['COD_HERRAMIENTA'=>$request->COD_HERRAMIENTA,'NOMBRE_HERRAMIENTA'=>$request->NOMBRE_HERRAMIENTA,'DESCRIPCION_HERRAMIENTA'=>$request->DESCRIPCION_HERRAMIENTA,'NUM_EXISTENCIA'=>$request->NUM_EXISTENCIA,'COD_EMPLEADO'=>$request->COD_EMPLEADO]);
        return redirect('/inventarioH');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($COD_HERRAMIENTA)
    {
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->delete('http://localhost:3000/delete_herramienta',['COD_HERRAMIENTA'=>$COD_HERRAMIENTA]);
        return redirect('/inventarioH');
    }
}

