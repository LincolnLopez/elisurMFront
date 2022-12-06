<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
//agregamos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class ArticuloController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:ver-articulo|crear-articulo|editar-articulo|borrar-articulo', ['only' => ['index']]);
         $this->middleware('permission:crear-articulo', ['only' => ['create','store']]);
         $this->middleware('permission:editar-articulo', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-articulo', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps
        ')->get('http://localhost:3000/articulos');
        return view('articulos.index')->with('articulos',json_decode($articulos));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view(('articulos.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->post('http://localhost:3000/articulo/insert',['NOMBRE_ARTICULO'=>$request->NOMBRE_ARTICULO,'DESCRIPCION_ARTICULO'=>$request->DESCRIPCION_ARTICULO,'PRECIO_ARTICULO'=>$request->PRECIO_ARTICULO,'COD_CATEGORIA'=>$request->COD_CATEGORIA]);
        return redirect('/articulos');
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
    public function edit($cod_articulo)
    {
        $articulo = DB ::table('tbl_articulos')->select('cod_articulo','nombre_articulo','descripcion_articulo','precio_articulo','cod_categoria')->where('cod_articulo', '=', $cod_articulo)->first();
        return view('articulos.edit')->with('articulo',$articulo);
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
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->put('http://localhost:3000/articulo/actualizar',['COD_ARTICULO'=>$request->COD_ARTICULO,'NOMBRE_ARTICULO'=>$request->NOMBRE_ARTICULO,'DESCRIPCION_ARTICULO'=>$request->DESCRIPCION_ARTICULO,'PRECIO_ARTICULO'=>$request->PRECIO_ARTICULO,'COD_CATEGORIA'=>$request->COD_CATEGORIA]);
        return redirect('/articulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($COD_ARTICULO)
    {
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->delete('http://localhost:3000/delete_articulo',['COD_ARTICULO'=>$COD_ARTICULO]);
        return redirect('/articulos');
    }
}
