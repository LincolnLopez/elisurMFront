<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//agregamos el modelo de permisos de spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //Operaciones sobre tabla roles
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',
            
            //Operaciones sobre tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

               //Operaciones sobre tabla empleados
             'ver-empleados',
             'crear-empleados',
             'editar-empleados',
             'borrar-empleados',

            //Operaciones sobre tabla Clientes
            'ver-clientes',
            'crear-clientes',
            'editar-clientes',
            'borrar-clientes',

             //Operaciones sobre tabla Inventario articulos
            'ver-articulo',
            'crear-articulo',
            'editar-articulo',
            'borrar-articulo',

            //Operaciones sobre tabla inventarios materia prima
            'ver-inventarios',
            'crear-inventarios',
            'editar-inventarios',
            'borrar-inventarios',

             //Operaciones sobre tabla inventarios Herramientas
             'ver-inventarioH',
             'crear-inventarioH',
             'editar-inventarioH',
             'borrar-inventarioH',

             //Operaciones sobre tabla Tickets
             'ver-ticket',
             'crear-ticket',
             'editar-ticket',
             'borrar-ticket',

              //Operaciones sobre tabla SOlicitudes
              'ver-presupuesto',
              'crear-presupuesto',
              'editar-presupuesto',
              'borrar-presupuesto',

               //Operaciones sobre tabla Reportes
               'ver-reportes',
               'crear-reportes',

             //Operaciones sobre tabla Bitacora activdades
             'ver-bitacora',

             //por aqui voy

             //Operaciones sobre tabla SOlicitudes
             'ver-presupuestoUsuario',
             'crear-presupuestoUsuario',
             'editar-presupuestoUsuario',
             'borrar-presupuestoUsuario',

             //Operaciones sobre tabla encuesta
             'ver-encuesta',
             'crear-encuesta',
             'editar-encuesta',

              //Operaciones sobre tabla Bitacora de solicitudes
              'ver-Solicitudes_cliente',
              'crear-Solicitudes_cliente',

           

                //Operaciones sobre tabla reporte falla
                'ver-bolsatrabajoEmpleado',
                'crear-bolsatrabajoEmpleado',
                'editar-bolsatrabajoEmpleado',
                'borrar-bolsatrabajoEmpleado',

              
            
             

            
        ];

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}
