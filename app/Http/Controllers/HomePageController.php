<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homePage = HomePage::all();
        return view('admin.pages.homepage.all', compact('homePage'));
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
     * @param  \App\Models\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function show(HomePage $homePage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function edit(HomePage $homePage)
    {
        return view('admin.pages.homepage.edit', compact('homePage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomePage $homePage)
    {
        $request->validate([
            "titrehomepage" => "required",
            "sous_titrehomepage" => "required",
            "btnstart" => "required",
            "imghomepage" => "required",
            "titreabout" => "required",
            "sous_titreabout" => "required",
            "btnabout" => "required",
            "titrecard1" => "required",
            "descriptioncard1" => "required",
            "titrecard2" => "required",
            "descriptioncard2" => "required",
            "titrecard3" => "required",
            "descriptioncard3" => "required",
            "titrecard4" => "required",
            "descriptioncard4" => "required"
        ]);

        $homePage->titrehomepage = $request->titrehomepage;
        $homePage->sous_titrehomepage = $request->sous_titrehomepage;
        $homePage->btnstart = $request->btnstart;
        $homePage->imghomepage = $request->imghomepage;
        $homePage->titreabout = $request->titreabout;
        $homePage->sous_titreabout = $request->sous_titreabout;
        $homePage->btnabout = $request->btnabout;
        $homePage->titrecard1 = $request->titrecard1;
        $homePage->descriptioncard1 = $request->descriptioncard1;
        $homePage->titrecard2 = $request->titrecard2;
        $homePage->descriptioncard2 = $request->descriptioncard2;
        $homePage->titrecard3 = $request->titrecard3;
        $homePage->descriptioncard3 = $request->descriptioncard3;
        $homePage->titrecard4 = $request->titrecard4;
        $homePage->descriptioncard4 = $request->descriptioncard4;

        $homePage->save();
        return redirect()->route('homepage.all')->with('message', 'Informations modifié avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomePage $homePage)
    {
        //
    }
}
