<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class BitacoraClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes = Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps
        ')->get('http://localhost:3000/solicitudes');
        return view('bitacora_cliente.index')->with('solicitudes',json_decode($solicitudes));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($COD_SOLICITUD )
    {
        $solicitud = DB ::table('tbl_solicitudes')->select('COD_SOLICITUD','FECHA_SOLICITUD','NOMBRE','APELLIDO','TELEFONO','CORREO_ELECTRONICO','TIPO_SOLICITANTE','TELEFONO_OPCIONAL','DIRECCION_SOLICITANTE','NOMBRE_E_C','RTN_DNI','CIUDAD','COD_SERVICIO','DESCRIPCION_SOLICITUD','COD_ESTADO')->where('COD_SOLICITUD', '=', $COD_SOLICITUD)->first();
        return view('presupuesto_usuario.update')->with('presupuesto_usuario',$solicitud );
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
