<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

//agregamos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class BitacoraController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:ver-bitacora|crear-bitacora|editar-bitacora|borrar-bitacora', ['only' => ['index']]);
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bitacoras = Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7ImlkIjowfSwiaWF0IjoxNjY4OTIyMjY2fQ.ZknZ8Fk77oKHICyGfN5t3IDMYt9RMz12SX_CAcWy0Ps
        ')->get('http://localhost:3000/bitacora');
        return view('bitacora_admin.index')->with('bitacoras',json_decode($bitacoras));

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
    
}