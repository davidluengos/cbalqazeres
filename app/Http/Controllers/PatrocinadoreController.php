<?php

namespace App\Http\Controllers;

use App\Models\Patrocinadore;
use Illuminate\Http\Request;

/**
 * Class PatrocinadoreController
 * @package App\Http\Controllers
 */
class PatrocinadoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patrocinadores = Patrocinadore::paginate();

        return view('patrocinadore.index', compact('patrocinadores'))
            ->with('i', (request()->input('page', 1) - 1) * $patrocinadores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patrocinadore = new Patrocinadore();
        return view('patrocinadore.create', compact('patrocinadore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Patrocinadore::$rules);

        $patrocinadore = Patrocinadore::create($request->all());

        return redirect()->route('patrocinadores.index')
            ->with('success', 'Patrocinadore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patrocinadore = Patrocinadore::find($id);

        return view('patrocinadore.show', compact('patrocinadore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patrocinadore = Patrocinadore::find($id);

        return view('patrocinadore.edit', compact('patrocinadore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Patrocinadore $patrocinadore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patrocinadore $patrocinadore)
    {
        request()->validate(Patrocinadore::$rules);

        $patrocinadore->update($request->all());

        return redirect()->route('patrocinadores.index')
            ->with('success', 'Patrocinadore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $patrocinadore = Patrocinadore::find($id)->delete();

        return redirect()->route('patrocinadores.index')
            ->with('success', 'Patrocinadore deleted successfully');
    }
}
