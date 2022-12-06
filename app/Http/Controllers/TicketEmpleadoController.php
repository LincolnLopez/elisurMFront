<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
//agregamos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class TicketEmpleadoController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:ver-bolsatrabajoEmpleado|crear-bolsatrabajoEmpleado|editar-bolsatrabajoEmpleado|borrar-bolsatrabajoEmpleado', ['only' => ['index']]);
         $this->middleware('permission:crear-bolsatrabajoEmpleado', ['only' => ['create','store']]);
         $this->middleware('permission:editar-bolsatrabajoEmpleado', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-bolsatrabajoEmpleado', ['only' => ['destroy']]);
    }

   

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $ticke = Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps
            ')->get('http://localhost:3000/fallas');
            return view('ticket_empleado.index')->with('ticket',json_decode($ticke ));

        
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
        Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps')->delete('http://localhost:3000/fallas/delete',['COD_REPORTE_FALLA'=>$COD_REPORTE_FALLA]);
        return redirect('/ticket_empleado');

      
    }


}
