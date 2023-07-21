<?php

namespace App\Http\Controllers;

use App\Models\Homeadmin;
use Illuminate\Http\Request;

/**
 * Class HomeadminController
 * @package App\Http\Controllers
 */
class HomeadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeadmins = Homeadmin::paginate();

        return view('homeadmin.index', compact('homeadmins'))
            ->with('i', (request()->input('page', 1) - 1) * $homeadmins->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $homeadmin = new Homeadmin();
        return view('homeadmin.create', compact('homeadmin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Homeadmin::$rules);

        $homeadmin = Homeadmin::create($request->all());

        return redirect()->route('homeadmins.index')
            ->with('success', 'Homeadmin created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $homeadmin = Homeadmin::find($id);

        return view('homeadmin.show', compact('homeadmin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $homeadmin = Homeadmin::find($id);

        return view('homeadmin.edit', compact('homeadmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Homeadmin $homeadmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homeadmin $homeadmin)
    {
        request()->validate(Homeadmin::$rules);

        $homeadmin->update($request->all());

        return redirect()->route('homeadmins.index')
            ->with('success', 'Homeadmin updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $homeadmin = Homeadmin::find($id)->delete();

        return redirect()->route('homeadmins.index')
            ->with('success', 'Homeadmin deleted successfully');
    }



    
}
