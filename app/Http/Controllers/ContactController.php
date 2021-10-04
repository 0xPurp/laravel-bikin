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
        $contact = Contact::all();
        return view('admin.pages.contact.all', compact('contact'));
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
        return view('admin.pages.contact.all', compact('contact'))
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
        $request->validate([
            "titre" => "required",
            "sous_titre" => "required",
            "titreadresse" => "required",
            "adresse" => "required",
            "titremail" => "required",
            "mail1" => "required",
            "mail2" => "required",
            "titrephone" => "required",
            "phone1" => "required",
            "phone2" => "required"
        ]);

        $contact->titre = $request->titre;
        $contact->sous_titre = $request->sous_titre;
        $contact->titreadresse = $request->titreadresse;
        $contact->adresse = $request->adresse;
        $contact->titremail = $request->titremail;
        $contact->mail1 = $request->mail1;
        $contact->mail2 = $request->mail2;
        $contact->titrephone = $request->titrephone;
        $contact->phone1 = $request->phone1;
        $contact->phone2 = $request->phone2;

        $contact->save();
        return redirect()->route(contact.all)->with('message', 'Information modifiées avec succès');

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
