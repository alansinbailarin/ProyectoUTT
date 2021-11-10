<?php

namespace App\Http\Controllers;

use App\Models\Tipoalta;
use Illuminate\Http\Request;

/**
 * Class TipoaltaController
 * @package App\Http\Controllers
 */
class TipoaltaController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-tipoalta|crear-tipoalta|editar-tipoalta|borrar-tipoalta',['only'=>['index']]);
        $this->middleware('permission:crear-tipoalta',['only'=>['create','store']]);
        $this->middleware('permission:editar-tipoalta',['only'=>['edit','update']]);
        $this->middleware('permission:borrar-tipoalta',['only'=>['destroy']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoaltas = Tipoalta::paginate();

        return view('tipoalta.index', compact('tipoaltas'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoaltas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoalta = new Tipoalta();
        return view('tipoalta.create', compact('tipoalta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipoalta::$rules);

        $tipoalta = Tipoalta::create($request->all());

        return redirect()->route('tipoaltas.index')
            ->with('success', 'Tipoalta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoalta = Tipoalta::find($id);

        return view('tipoaltas.show', compact('tipoalta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoalta = Tipoalta::find($id);

        return view('tipoaltas.edit', compact('tipoalta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipoalta $tipoalta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipoalta $tipoalta)
    {
        request()->validate(Tipoalta::$rules);

        $tipoalta->update($request->all());

        return redirect()->route('tipoaltas.index')
            ->with('success', 'Tipoalta updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoalta = Tipoalta::find($id)->delete();

        return redirect()->route('tipoaltas.index')
            ->with('success', 'Tipoalta deleted successfully');
    }
}
