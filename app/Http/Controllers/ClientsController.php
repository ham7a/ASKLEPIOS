<?php

namespace App\Http\Controllers;
use DB;

use App\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
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
        $clients = DB::table('clients')->paginate(5);
        return view('clients.index', ['clients' => $clients]);

//        $clients = Clients::all();
//
//        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clients.create');
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
            'nomClient'=>'required',
            'adresseClient'=> 'required',
            'telephoneClient' => 'required',
            'emailClient' => 'required'
        ]);
        $client = new Clients([
            'nomClient' => $request->get('nomClient'),
            'adresseClient'=> $request->get('adresseClient'),
            'telephoneClient'=> $request->get('telephoneClient'),
            'emailClient'=> $request->get('emailClient')
        ]);
        $client->save();
        return redirect('/clients')->with('success', 'Client ajouté');
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
        $client = Clients::find($id);

        return view('clients.edit', compact('client'));
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
            'nomClient'=>'required',
            'adresseClient'=> 'required',
            'telephoneClient' => 'required',
            'emailClient' => 'required'
        ]);

        $client = Clients::find($id);
            $client->nomClient = $request->get('nomClient');
            $client->adresseClient= $request->get('adresseClient');
            $client->telephoneClient= $request->get('telephoneClient');
            $client->emailClient= $request->get('emailClient');

        $client->save();
        return redirect('/clients')->with('success', 'Client mis à jour');
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
		$client = Clients::find($id);
		$client->delete();
		
		return redirect('/clients')->with('success', 'Client supprimé');
    }
}
