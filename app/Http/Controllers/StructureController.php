<?php

namespace App\Http\Controllers;

use App\Models\Structure;
use Illuminate\Http\Request;

/**
 * Class StructureController
 * @package App\Http\Controllers
 */
class StructureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $structures = Structure::paginate();

        return view('structure.index', compact('structures'))
            ->with('i', (request()->input('page', 1) - 1) * $structures->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $structure = new Structure();
        return view('structure.create', compact('structure'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Structure::$rules);

        $structure = Structure::create($request->all());

        return redirect()->route('structures.index')
            ->with('success', 'Datos Agregados correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $structure = Structure::find($id);

        return view('structure.show', compact('structure'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $structure = Structure::find($id);

        return view('structure.edit', compact('structure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Structure $structure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Structure $structure)
    {
        request()->validate(Structure::$rules);

        $structure->update($request->all());

        return redirect()->route('structures.index')
            ->with('success', 'Datos actualizados correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $structure = Structure::find($id)->delete();

        return redirect()->route('structures.index')
            ->with('success', 'Datos borradas correctamente, si se trato de un error, contacte con un administrador');
    }
}
