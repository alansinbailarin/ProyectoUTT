<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use Illuminate\Http\Request;
use App\Models\Marca;

/**
 * Class ModeloController
 * @package App\Http\Controllers
 */
class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelos = Modelo::paginate();

        return view('modelo.index', compact('modelos'))
            ->with('i', (request()->input('page', 1) - 1) * $modelos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modelo = new Modelo();
        $marcas = Marca::pluck('name','id');
        return view('modelo.create', compact('modelo','marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Modelo::$rules);

        $modelo = Modelo::create($request->all());

        return redirect()->route('modelos.index')
            ->with('success', 'Modelo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelo = Modelo::find($id);

        return view('modelo.show', compact('modelo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelo = Modelo::find($id);
        $marcas = Marca::pluck('name','id');
        return view('modelo.edit', compact('modelo','marcas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Modelo $modelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modelo $modelo)
    {
        request()->validate(Modelo::$rules);

        $modelo->update($request->all());

        return redirect()->route('modelos.index')
            ->with('success', 'Modelo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $modelo = Modelo::find($id)->delete();

        return redirect()->route('modelos.index')
            ->with('success', 'Modelo deleted successfully');
    }
}
