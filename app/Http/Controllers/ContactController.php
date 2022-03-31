<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'DESC')->get() ;


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

        $request->validate([
            'categorie' => 'required|max:255',
            'email' => 'required|max:255|min:4|email',
            'website_link' => 'required|max:255|url',
            'more_information' => 'required|max:255',
            'name' => 'required|max:255',
            'file' => 'required|max:2048|mimes:pdf,xls,jpg,png',
            'description' => 'required'
        ], [
            'required' => 'ce champs est requis',
            'file.max' => 'le fichier doit être au plus de 2Mb',
        ]);

        $file = $request->file;
        $path = 'fichier/contact';
        $file_name = $file->getClientOriginalName();
        $file->move($path,$file_name);

        $contact = new Contact();

        $contact->categorie = $request->input('categorie');
        $contact->email = $request->input('email');
        $contact->website_link = $request->input('website_link');
        $contact->more_information = $request->input('more_information');
        $contact->name = $request->input('name');
        $contact->file = $file_name;
        $contact->description = $request->input('description');
        $contact->created_at = Carbon::now();
        $contact->save();

        return redirect()->back()->with('success', 'Nous vous contacterons d\'ici peu.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
