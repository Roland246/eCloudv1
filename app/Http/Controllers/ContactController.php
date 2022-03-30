<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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
            //'file' => 'sometimes|max:2048',
            'description' => 'required'
        ], [
            'required' => 'ce champs est requis',
        ]);

        Contact::create([
            'categorie' => $request->categorie,
            'email' =>  $request->email,
            'website_link' =>  $request->website_link,
            'more_information' =>  $request->more_information,
            'name' =>  $request->name,
            //'file' => 'sometimes|max:2048',
            'description' => $request->description
        ]) ;

        session()->flash('success', 'Merci votre nous vous contacterons d\'ici peu ');
        return redirect()->back() ;
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
