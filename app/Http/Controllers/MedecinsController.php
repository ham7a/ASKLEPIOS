<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Medecins;

class MedecinsController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medecins = DB::table('medecins')->paginate(5);
        return view('medecins.index', ['medecins' => $medecins]);

//        $medecins = Medecins::all();
//
//        return view('medecins.index', compact('medecins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('medecins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nomMedecin'=>'required',
            'adresseMedecin'=> 'required',
            'specialiteMedecin'=> 'required',
            'telephoneMedecin' => 'required',
            'emailMedecin' => 'required'
        ]);
        $medecin = new Medecins([
            'nomMedecin' => $request->get('nomMedecin'),
            'adresseMedecin'=> $request->get('adresseMedecin'),
            'telephoneMedecin'=> $request->get('telephoneMedecin'),
            'specialiteMedecin'=> $request->get('specialiteMedecin'),
            'emailMedecin'=> $request->get('emailMedecin')
        ]);
        $medecin->save();
        return redirect('/medecins')->with('success', 'Médecin ajouté');
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
        //
        $medecin = Medecins::find($id);

        return view('medecins.edit', compact('medecin'));
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
        //
        $request->validate([
            'nomMedecin'=>'required',
            'specialiteMedecin'=>'required',
            'adresseMedecin'=> 'required',
            'telephoneMedecin' => 'required',
            'emailMedecin' => 'required'
        ]);

        $medecin = Medecins::find($id);
        $medecin->nomMedecin = $request->get('nomMedecin');
        $medecin->specialiteMedecin = $request->get('specialiteMedecin');
        $medecin->adresseMedecin= $request->get('adresseMedecin');
        $medecin->telephoneMedecin= $request->get('telephoneMedecin');
        $medecin->emailMedecin= $request->get('emailMedecin');

        $medecin->save();
        return redirect('/medecins')->with('success', 'Médecin mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $medecin = Medecins::find($id);
        $medecin->delete();

        return redirect('/medecins')->with('success', 'Médecin supprimé');
    }
}
