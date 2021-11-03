<?php

namespace App\Http\Controllers;
use App\Models\Adventures;
use Illuminate\Http\Request;

class Adventure extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adventure = Adventures::all();
        return view('ALevel',compact('adventure'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CreateLevel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Adventures::create([
            'level' => $request->lecel,
            'description' => $request->descrip,
            'gimmick' => $request->gim,
            'background' => $request->back,
            'flag' => $request->fleg,
            'wave' => $request->wave
        ]);
        return redirect(route('adventure.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $adventure = Adventures::where('level',$id)->first();
        return view('Level',compact('adventure'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adventure = Adventures::findOrFail($id);
        return view('EditLevel',compact('adventure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $adventure = Adventures::findOrFail($id);

        $adventure->update([
            'level' => $request->lecel,
            'description' => $request->descrip,
            'gimmick' => $request->gim,
            'background' => $request->back,
            'flag' => $request->fleg,
            'wave' => $request->wave
        ]);
        return redirect(route('adventure.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adventure = Adventures::findOrFail($id);
        $adventure->delete();
        return redirect(route('adventure.index'));
    }
}
