<?php
namespace App\Models;
namespace App\Http\Controllers;
use App\models\zambie;
use Illuminate\Http\Request;

class zombie extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zombies = Zambie::all();
        return view('Zombie',compact('zombielist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CreateZombie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Zambie::create([
            'name' => $request->name,
            'descrip' => $request->descript,
            'special' => $request->special,
            'armortype' => $request->armor,
            'speed' => $request->sped
        ]);
        return redirect(route('zombie.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $zombies = Zombie::findOrFail($id);
        return view('EditZombie',compact('zombielist'));
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
        $zombies = Adventures::findOrFail($id);

        $zombies->update([
            'level' => $request->lecel,
            'description' => $request->descrip,
            'gimmick' => $request->gim,
            'background' => $request->back,
            'flag' => $request->fleg,
            'wave' => $request->wave
        ]);
        return redirect(route('zombie.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $zombies = Adventures::findOrFail($id);
        $zombies->delete();
        return redirect(route('zombie.index'));
    }
}
