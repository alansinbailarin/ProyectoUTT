<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//spatie
use Spatie\Permission\Models\Permission;

class SeederTablePermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos=[
            //tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            //tabla edificios
            'ver-edificio',
            'crear-edificio',
            'editar-edificio',
            'borrar-edificio',
             //tabla planta
             'ver-planta',
             'crear-planta',
             'editar-planta',
             'borrar-planta',
            //tabla area
            'ver-area',
            'crear-area',
            'editar-area',
            'borrar-area',
            //tabla categoria
            'ver-categoria',
            'crear-categoria',
            'editar-categoria',
            'borrar-categoria',
            //tabla subcategoria
            'ver-subcategoria',
            'crear-subcategoria',
            'editar-subcategoria',
            'borrar-subcategoria',
            //tabla estado
            'ver-estado',
            'crear-estado',
            'editar-estado',
            'borrar-estado',
            //tabla marca
            'ver-marca',
            'crear-marca',
            'editar-marca',
            'borrar-marca',
            //tabla modelo
            'ver-modelo',
            'crear-modelo',
            'editar-modelo',
            'borrar-modelo',
            //tabla prestamo
            'ver-prestamo',
            'crear-prestamo',
            'editar-prestamo',
            'borrar-prestamo',
            //tabla producto
            'ver-producto',
            'crear-producto',
            'editar-producto',
            'borrar-producto',
            //tabla resguardo
            'ver-resguardo',
            'crear-resguardo',
            'editar-resguardo',
            'borrar-resguardo',
            
            //tabla tipoalta
            'ver-tipoalta',
            'crear-tipoalta',
            'editar-tipoalta',
            'borrar-tipoalta',


        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
