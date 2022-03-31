<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Carbon\Carbon;

use Illuminate\Http\Request;

class StockageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stockage.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'champ1' => 'max:255',
            'champ2' => 'required|max:255',
            'name' => 'required|max:255',
            'email' => 'required|unique:requests|max:255',
            'weblink' => 'max:255',
            'file' => 'mimes:pdf,xls',
            'desc' => 'required|max:255',
        ],
        [
            'name.required' => 'Ce champ est requis',
            'email.required' => 'Ce champ est requis',
            'weblink' => 'Ce champ est requis',
            'champ2.required' => 'Ce champ est requis',
            'desc.required' => 'Ce champ est requis',
        ]
    );

        //récupérer l'image
        $file = $request->file('file');
        $name_gen = hexdec(uniqid());
        $file_ext = strtolower($file->getClientOriginalExtension());
        $file_name = $name_gen.'.'.$file_ext;
        $up_location = 'image/formulaire';
        $last_file = $up_location.$file_name;
        $file->move($up_location,$file_name);

            //insertion des données
    if ($last_file)
    {
        $formulaire = new Contact;
        $formulaire->champ1 = $request->input('champ1');
        $formulaire->champ2 = $request->input('champ2');
        $formulaire->name = $request->input('name');
        $formulaire->email = $request->input('email');
        $formulaire->weblink = $request->input('weblink');
        $formulaire->file = $request->$last_file;
        $formulaire->desc = $request->input('desc');
        $formulaire->created_at = Carbon::now();
        $formulaire->save();

        return redirect()->back()->with('success','MERCI ! Votre avis a bien été pris en compte.');
    } else {
        $formulaire = new Contact;
        $formulaire->champ1 = $request->input('champ1');
        $formulaire->champ2 = $request->input('champ2');
        $formulaire->name = $request->input('name');
        $formulaire->email = $request->input('email');
        $formulaire->weblink = $request->input('weblink');
        $formulaire->desc = $request->input('desc');
        $formulaire->created_at = Carbon::now();
        $formulaire->save();

        return redirect()->back()->with('success','MERCI ! Votre avis a bien été pris en compte.');
    }
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
    }


}
