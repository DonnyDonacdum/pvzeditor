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
        return view('Zombie',compact('zombies'));
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
        return redirect(route('Zombie.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $zombies = Zambie::where('name',$id)->first();
        return view('Artibut',compact('zombies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $zombies = Zambie::findOrFail($id);
        return view('EditZombie',compact('zombies'));
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
        $zombies = Zambie::findOrFail($id);

        $zombies->update([
            'name' => $request->name,
            'descrip' => $request->descript,
            'special' => $request->special,
            'armortype' => $request->armor,
            'speed' => $request->sped
        ]);
        return redirect(route('Zombie.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $zombies = Zambie::findOrFail($id);
        $zombies->delete();
        return redirect(route('Zombie.index'));
    }
}
