<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::all();
        return view('admin.pages.services.all', compact('services'));
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
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $services)
    {
        return view('admin.pages.services.edit', compact('services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $services)
    {
        $request->validate([
            "titre" => "required",
            "soustitre" => "required",
            "titrecard1" => "required",
            "descriptioncard1" => "required",
            "titrecard2" => "required",
            "descriptioncard2" => "required",
            "titrecard3" => "required",
            "descriptioncard3" => "required",
            "titrecard4" => "required",
            "descriptioncard4" => "required"
        ]);

        $services->titre = $request->titre;
        $services->soustitre = $request->soustitre;
        $services->titrecard1 = $request->titrecard1;
        $services->descriptioncard1 = $request->descriptioncard1;
        $services->titrecard2 = $request->titrecard2;
        $services->descriptioncard2 = $request->descriptioncard2;
        $services->titrecard3 = $request->titrecard3;
        $services->descriptioncard3 = $request->descriptioncard3;
        $services->titrecard4 = $request->titrecard4;
        $services->descriptioncard4 = $request->descriptioncard4;

        $services->save();
        return redirect()->route('services.index')->with('message', 'Informations modifié avec succès.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $services)
    {
        $services->delete();
        return redirect()->route('services.index');
    }
}
