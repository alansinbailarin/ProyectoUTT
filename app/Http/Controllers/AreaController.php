<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Edificio;
use App\Models\Planta;
use Illuminate\Http\Request;

/**
 * Class AreaController
 * @package App\Http\Controllers
 */
class AreaController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-area|crear-area|editar-area|borrar-area',['only'=>['index']]);
        $this->middleware('permission:crear-area',['only'=>['create','store']]);
        $this->middleware('permission:area-edificio',['only'=>['edit','update']]);
        $this->middleware('permission:borrar-area',['only'=>['destroy']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::paginate();
   
        return view('area.index', compact('areas'))
            ->with('i', (request()->input('page', 1) - 1) * $areas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $area = new Area();
        $edificios = Edificio::pluck('name','id');
        $plantas = Planta::pluck('name','id');
        return view('area.create', compact('area','plantas','edificios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Area::$rules);

        $area = Area::create($request->all());

        return redirect()->route('areas.index')
            ->with('success', 'Area created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $area = Area::find($id);

        return view('area.show', compact('area'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $area = Area::find($id);
        $edificios = Edificio::pluck('name','id');
        $plantas = Planta::pluck('name','id');
        return view('area.edit', compact('area','plantas','edificios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Area $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {
        request()->validate(Area::$rules);

        $area->update($request->all());

        return redirect()->route('areas.index')
            ->with('success', 'Area updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $area = Area::find($id)->delete();

        return redirect()->route('areas.index')
            ->with('success', 'Area deleted successfully');
    }
}
