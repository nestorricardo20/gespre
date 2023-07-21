<?php

namespace App\Http\Controllers;

use App\Models\Cadenafuncionale;
use Illuminate\Http\Request;

/**
 * Class CadenafuncionaleController
 * @package App\Http\Controllers
 */
class CadenafuncionaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadenafuncionales = Cadenafuncionale::paginate();

        return view('cadenafuncionale.index', compact('cadenafuncionales'))
            ->with('i', (request()->input('page', 1) - 1) * $cadenafuncionales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cadenafuncionale = new Cadenafuncionale();
        return view('cadenafuncionale.create', compact('cadenafuncionale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cadenafuncionale::$rules);

        $cadenafuncionale = Cadenafuncionale::create($request->all());

        return redirect()->route('cadenafuncionales.index')
            ->with('success', 'Cadenafuncionale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cadenafuncionale = Cadenafuncionale::find($id);

        return view('cadenafuncionale.show', compact('cadenafuncionale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cadenafuncionale = Cadenafuncionale::find($id);

        return view('cadenafuncionale.edit', compact('cadenafuncionale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cadenafuncionale $cadenafuncionale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cadenafuncionale $cadenafuncionale)
    {
        request()->validate(Cadenafuncionale::$rules);

        $cadenafuncionale->update($request->all());

        return redirect()->route('cadenafuncionales.index')
            ->with('success', 'Cadenafuncionale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cadenafuncionale = Cadenafuncionale::find($id)->delete();

        return redirect()->route('cadenafuncionales.index')
            ->with('success', 'Cadenafuncionale deleted successfully');
    }
}
