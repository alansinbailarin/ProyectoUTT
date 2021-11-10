<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Tipoalta;
use App\Models\Marca;
use App\Models\User;
use App\Models\Estado;
use App\Models\Modelo;
use App\Models\Categoria;
use App\Models\Subcategoria;
use DB;

/**
 * Class ProductoController
 * @package App\Http\Controllers 
 */
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate();

        return view('producto.index', compact('productos'))
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto();
        $areas = Area::pluck('name','id');
        $tipoaltas=Tipoalta::pluck('name','id');
        $marcas = Marca::pluck('name','id');
        $users= User::pluck('name','id');
        $estados=Estado::pluck('estado','id');
        $modelos=Modelo::pluck('modelo','id');
        $categorias=Categoria::pluck('name','id');
        $subcategorias=Subcategoria::pluck('name','id');


        return view('producto.create', compact('producto','areas','tipoaltas','marcas','users','estados','modelos','categorias','subcategorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Producto::$rules);

        $producto = Producto::create($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);

        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        $areas = Area::pluck('name','id');
        $tipoaltas=Tipoalta::pluck('name','id');
        $marcas = Marca::pluck('name','id');
        $users= User::pluck('name','id');
        $estados=Estado::pluck('estado','id');
        $modelos=Modelo::pluck('modelo','id');
        $categorias=Categoria::pluck('name','id');
        $subcategorias=Subcategoria::pluck('name','id');
    

        return view('producto.edit', compact('producto','areas','tipoaltas','marcas','users','estados','modelos','categorias','subcategorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        request()->validate(Producto::$rules);

        $producto->update($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto deleted successfully');
    }
      //REALIZACION DE API
   public function innerjoin(){
    $result = DB::table('productos')
    ->select('productos.id','productos.num_inventario','areas.name as Area',
    'tipoaltas.name as Tipo_Alta','productos.fecha_alta as Fecha_Alta','marcas.name as Marca',
    'users.name as Encargado','estados.estado as Status','modelos.modelo as Modelo','productos.num_serie as Num_Serie',
    'categorias.name as Categoria', 'subcategorias.name as Subcategoria')
    ->join('areas', 'areas.id', '=', 'productos.area_id')
    ->join('tipoaltas', 'tipoaltas.id', '=', 'productos.tipo_id')
    ->join('estados', 'estados.id', '=', 'productos.status_id')
    ->join('categorias', 'categorias.id', '=', 'productos.categoria_id')
    ->join('modelos', 'modelos.id', '=', 'productos.modelo_id')
    ->join('marcas', 'marcas.id', '=', 'productos.marca_id')
    ->join('users', 'users.id', '=', 'productos.user_id')
    ->join('subcategorias', 'subcategorias.id', '=', 'productos.subcategoria_id')

    ->get();
    return $result;

}

function list(){
    
    return Producto::all();
}

function search($n_inventario){

    $resultAPI = DB::table('productos')
    ->select('productos.id','productos.num_inventario','areas.name as Area',
    'tipoaltas.name as Tipo_Alta','productos.fecha_alta as Fecha_Alta','marcas.name as Marca',
    'users.name as Encargado','estados.estado as Status','modelos.modelo as Modelo','productos.num_serie as Num_Serie',
    'categorias.name as Categoria', 'subcategorias.name as Subcategoria')
    ->join('areas', 'areas.id', '=', 'productos.area_id')
    ->join('tipoaltas', 'tipoaltas.id', '=', 'productos.tipo_id')
    ->join('estados', 'estados.id', '=', 'productos.status_id')
    ->join('categorias', 'categorias.id', '=', 'productos.categoria_id')
    ->join('modelos', 'modelos.id', '=', 'productos.modelo_id')
    ->join('marcas', 'marcas.id', '=', 'productos.marca_id')
    ->join('users', 'users.id', '=', 'productos.user_id')
    ->join('subcategorias', 'subcategorias.id', '=', 'productos.subcategoria_id')
    ->where("num_inventario",$n_inventario)->get();
    if(count($resultAPI)){
        return $resultAPI;
    } else {
        return response()->json([
            'Mensaje' => 'No se encontraron registros'
        ]);
    }
}

}