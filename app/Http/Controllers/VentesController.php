<?php

namespace App\Http\Controllers;
use DB;

use App\Ventes;
use App\Clients;
use Illuminate\Http\Request;

class VentesController extends Controller
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
        $ventes = DB::table('ventes')->paginate(5);
        return view('ventes.index', ['ventes' => $ventes]);

//        $ventes = Ventes::all();
//
//        return view('ventes.index', compact('ventes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
//        $clients = Clients::pluck('id', 'nomClient')->toArray();
        $clients=Clients::all();
        return view('ventes.create', ['clients' => $clients]);
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
            'clientID'=>'required',
            'total'=> 'required'
        ]);
        $vente = new Ventes([
            'clientID' => $request->get('clientID'),
            'total'=> $request->get('total')
        ]);
        $vente->save();
        return redirect('/ventes')->with('success', 'Vente enregistrée');
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
        $clients = Clients::find($id);
        return view('clients.show', compact('clients'));
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
        $vente = Ventes::find($id);

        return view('ventes.edit', compact('vente'));
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
            'clientID'=>'required',
            'total'=> 'required'
        ]);

        $vente = Ventes::find($id);
        $vente->clientID = $request->get('clientID');
        $vente->total= $request->get('total');

        $vente->save();
        return redirect('/ventes')->with('success', 'Vente mise à jour');
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
        $vente = Ventes::find($id);
        $vente->delete();

        return redirect('/ventes')->with('success', 'Vente supprimée');
    }
}
