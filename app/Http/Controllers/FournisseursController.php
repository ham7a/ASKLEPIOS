<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Fournisseurs;

class FournisseursController extends Controller
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
        $fournisseurs = DB::table('fournisseurs')->paginate(5);
        return view('fournisseurs.index', ['fournisseurs' => $fournisseurs]);

//        $fournisseurs = Fournisseurs::all();
//
//        return view('fournisseurs.index', compact('fournisseurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('fournisseurs.create');
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
            'nomFournisseur'=>'required',
            'adresseFournisseur'=> 'required',
            'telephoneFournisseur' => 'required',
            'emailFournisseur' => 'required'
        ]);
        $fournisseur = new Fournisseurs([
            'nomFournisseur' => $request->get('nomFournisseur'),
            'adresseFournisseur'=> $request->get('adresseFournisseur'),
            'telephoneFournisseur'=> $request->get('telephoneFournisseur'),
            'emailFournisseur'=> $request->get('emailFournisseur')
        ]);
        $fournisseur->save();
        return redirect('/fournisseurs')->with('success', 'Fournisseur ajouté');
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
        $fournisseur = Fournisseurs::find($id);

        return view('fournisseurs.edit', compact('fournisseur'));
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
            'nomFournisseur'=>'required',
            'adresseFournisseur'=> 'required',
            'telephoneFournisseur' => 'required',
            'emailFournisseur' => 'required'
        ]);

        $fournisseur = Fournisseurs::find($id);
            $fournisseur->nomFournisseur = $request->get('nomFournisseur');
            $fournisseur->adresseFournisseur= $request->get('adresseFournisseur');
            $fournisseur->telephoneFournisseur= $request->get('telephoneFournisseur');
            $fournisseur->emailFournisseur= $request->get('emailFournisseur');

        $fournisseur->save();
        return redirect('/fournisseurs')->with('success', 'Fournisseur mis à jour');
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
		$fournisseur = Fournisseurs::find($id);
		$fournisseur->delete();
		
		return redirect('/fournisseurs')->with('success', 'Fournisseur supprimé');
    }
}
