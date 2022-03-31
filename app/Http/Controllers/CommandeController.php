<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->is_admin)
        {
            $commandes = Commande::orderBy('created_at', 'DESC')->get();
        }
        else
        {
            $commandes = Commande::where('user_id', Auth::user()->id)
                        ->orderBy('created_at', 'DESC')->get();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('commande');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
        $request->validate([
            'core' => 'required|integer|min:1',
            'memory' => 'required|integer|min:1',
            'storage' => 'required|integer|min:1',
            'bandwidth' => 'required|integer|min:1',
            'price' => 'required|integer|min:1',

        ], [
            'required' => 'ce champs est requis',
            'integer' => 'ce champs doit être un entier'
        ]);

        Commande::create([
            'core' => $request->core,
            'memory' => $request->memory,
            'storage' => $request->core,
            'bandwidth' => $request->bandwidth,
            'price' => $request->price,
            'user_id'=> Auth::user()->id
        ]) ;

        session()->flash('success', 'Merci votre commande à belle et bien été enregistrée ');
        return redirect()->back() ;

    }


    public function show(Commande $commande)
    {
        //
    }


    public function edit(Commande $commande)
    {
        //
    }


    public function updateStatus(int $id)
    {
        $commande = Commande::findOrFail($id);

        $commande->statut = ! $commande->statut ;

        $commande->save() ;

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commande = Commande::findOrFail($id);

        $commande->delete();

        return redirect()->back() ;
    }
}
