<?php

namespace App\Http\Controllers;
use DB;

use App\Medicaments;
use Illuminate\Http\Request;

class MedicamentsController extends Controller
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
        $medicaments = DB::table('medicaments')->paginate(20);
        return view('medicaments.index', ['medicaments' => $medicaments]);
//        $medicaments = Medicaments::all();

//        return view('medicaments.index', compact('medicaments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('medicaments.create');
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
            'nomMedicament'=>'required',
            'conditionnement'=> 'required',
            'PPV' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'qty' => 'required|integer'
        ]);
        $medicament = new Medicaments([
            'nomMedicament' => $request->get('nomMedicament'),
            'conditionnement'=> $request->get('conditionnement'),
            'PPV'=> $request->get('PPV'),
            'qty'=> $request->get('qty')
        ]);
        $medicament->save();
        return redirect('/medicaments')->with('success', 'Médicament ajouté');
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
        $medicament = Medicaments::find($id);

        return view('medicaments.edit', compact('medicament'));
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
            'nomMedicament'=>'required',
            'conditionnement'=> 'required',
            'PPV' => 'required',
            'qty' => 'required'
        ]);

        $medicament = Medicaments::find($id);
            $medicament->nomMedicament = $request->get('nomMedicament');
            $medicament->conditionnement= $request->get('conditionnement');
            $medicament->PPV= $request->get('PPV');
            $medicament->qty= $request->get('qty');

        $medicament->save();
        return redirect('/medicaments')->with('success', 'Medicament mis à jour');
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
		$medicament = Medicaments::find($id);
		$medicament->delete();
		
		return redirect('/medicaments')->with('success', 'Médicament supprimé');
    }
}
