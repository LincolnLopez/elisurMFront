<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

//agregamos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

namespace App\Http\Controllers;


//agregamos lo siguiente
use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;


class EmpleadosController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-empleados|crear-empleados|editar-empleados|borrar-empleados', ['only' => ['index']]);
         $this->middleware('permission:crear-empleados', ['only' => ['create','store']]);
         $this->middleware('permission:editar-empleados', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-empleados', ['only' => ['destroy']]);
    }


    
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
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->post('http://localhost:3000/insert_empleados',[ 'DNI_EMPLEADO'=>$request->DNI_EMPLEADO,'NOMBRE_EMPLEADO'=>$request->NOMBRE_EMPLEADO,'APELLIDOS_EMPLEADO'=>$request->APELLIDOS_EMPLEADO,'SEXO_EMPLEADO'=>$request->SEXO_EMPLEADO, 'ESTADO_CIVIL_EMPLEADO'=>$request->ESTADO_CIVIL_EMPLEADO,'EDAD_EMPLEADO'=>$request->EDAD_EMPLEADO,'TELEFONO'=>$request->TELEFONO,'CORREO'=>$request->CORREO,'ESTADO_EMPLEADO'=>$request->ESTADO_EMPLEADO]);
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
    public function edit($cod_empleado)
    {
        $empleado = DB ::table('tbl_empleados')->select('cod_empleado','DNI_EMPLEADO','nombre_empleado','apellidos_empleado','sexo_empleado','estado_civil_empleado','edad_empleado','telefono','correo','estado_empleado')->where('cod_empleado', '=', $cod_empleado)->first(); 
        return view('empleados.edit')->with('empleado',$empleado);

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
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->put('http://localhost:3000/actualizar_empleado',['COD_EMPLEADO'=>$request->COD_EMPLEADO,'DNI_EMPLEADO'=>$request->DNI_EMPLEADO, 'NOMBRE_EMPLEADO'=>$request->NOMBRE_EMPLEADO,'APELLIDOS_EMPLEADO'=>$request->APELLIDOS_EMPLEADO,'SEXO_EMPLEADO'=>$request->SEXO_EMPLEADO, 'ESTADO_CIVIL_EMPLEADO'=>$request->ESTADO_CIVIL_EMPLEADO,'EDAD_EMPLEADO'=>$request->EDAD_EMPLEADO,'TELEFONO'=>$request->TELEFONO,'CORREO'=>$request->CORREO,'ESTADO_EMPLEADO'=>$request->ESTADO_EMPLEADO ]);
        return redirect('/empleados');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($COD_EMPLEADO)
    {
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->delete('http://localhost:3000/eliminar_empleados',['COD_EMPLEADO'=>$COD_EMPLEADO]);
        return redirect('/empleados');
    }
}
