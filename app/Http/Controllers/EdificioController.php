<?php

namespace App\Http\Controllers;

use App\Models\Edificio;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class EdificioController
 * @package App\Http\Controllers
 */
class EdificioController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-edificio|crear-edificio|editar-edificio|borrar-edificio',['only'=>['index']]);
        $this->middleware('permission:crear-edificio',['only'=>['create','store']]);
        $this->middleware('permission:editar-edificio',['only'=>['edit','update']]);
        $this->middleware('permission:borrar-edificio',['only'=>['destroy']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edificios = Edificio::paginate();

        return view('edificio.index', compact('edificios'))
            ->with('i', (request()->input('page', 1) - 1) * $edificios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $edificio = new Edificio();
        $users = User::pluck('name','id');
        return view('edificio.create', compact('edificio','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Edificio::$rules);

        $edificio = Edificio::create($request->all());

        return redirect()->route('edificios.index')
            ->with('success', 'Edificio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $edificio = Edificio::find($id);

        return view('edificio.show', compact('edificio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edificio = Edificio::find($id);
        $users = User::pluck('name','id');
        return view('edificio.edit', compact('edificio','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Edificio $edificio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Edificio $edificio)
    {
        request()->validate(Edificio::$rules);

        $edificio->update($request->all());

        return redirect()->route('edificios.index')
            ->with('success', 'Edificio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $edificio = Edificio::find($id)->delete();

        return redirect()->route('edificios.index')
            ->with('success', 'Edificio deleted successfully');
    }
}
