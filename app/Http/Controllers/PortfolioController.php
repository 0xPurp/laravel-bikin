<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all();
        return view('admin.pages.portfolio.all', compact('portfolio'));
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
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.pages.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            "titre" => "required",
            "sous_titre" => "required",
            // Catégorie
            "categorie1" => "required",
            "categorie2" => "required",
            "categorie3" => "required",
            "categorie4" => "required",
            // Item 1
            "photoitem1" => "required",
            "titreitem1" => "required",
            "descriptionitem1" => "required",
            // Item 2
            "photoitem2" => "required",
            "titreitem2" => "required",
            "descriptionitem2" => "required",
            // Item 3
            "photoitem3" => "required",
            "titreitem3" => "required",
            "descriptionitem3" => "required",
            // Item 4
            "photoitem4" => "required",
            "titreitem4" => "required",
            "descriptionitem4" => "required",
            // Item 5
            "photoitem5" => "required",
            "titreitem5" => "required",
            "descriptionitem5" => "required",
            // Item 6
            "photoitem6" => "required",
            "titreitem6" => "required",
            "descriptionitem6" => "required",
            // Item 7
            "photoitem7" => "required",
            "titreitem7" => "required",
            "descriptionitem7" => "required",
            // Item 8
            "photoitem8" => "required",
            "titreitem8" => "required",
            "descriptionitem8" => "required",
            // Item 9
            "photoitem9" => "required",
            "titreitem9" => "required",
            "descriptionitem9" => "required"
            
        ]);

        $portfolio->titre = $request->titre;
        $portfolio->sous_titre = $request->sous_titre;
        
        $portfolio->categorie1 = $request->categorie1;
        $portfolio->categorie2 = $request->categorie2;
        $portfolio->categorie3 = $request->categorie3;
        $portfolio->categorie4 = $request->categorie4;

        $portfolio->photoitem1 = $request->photoitem1;
        $portfolio->titreitem1 = $request->titreitem1;
        $portfolio->descriptionitem1 = $request->descriptionitem1;

        $portfolio->photoitem2 = $request->photoitem2;
        $portfolio->titreitem2 = $request->titreitem2;
        $portfolio->descriptionitem2 = $request->descriptionitem2;

        $portfolio->photoitem3 = $request->photoitem3;
        $portfolio->titreitem3 = $request->titreitem3;
        $portfolio->descriptionitem3 = $request->descriptionitem3;

        $portfolio->photoitem4 = $request->photoitem4;
        $portfolio->titreitem4 = $request->titreitem4;
        $portfolio->descriptionitem4 = $request->descriptionitem4;

        $portfolio->photoitem5 = $request->photoitem5;
        $portfolio->titreitem5 = $request->titreitem5;
        $portfolio->descriptionitem5 = $request->descriptionitem5;

        $portfolio->photoitem6 = $request->photoitem6;
        $portfolio->titreitem6 = $request->titreitem6;
        $portfolio->descriptionitem6 = $request->descriptionitem6;

        $portfolio->photoitem7 = $request->photoitem7;
        $portfolio->titreitem7 = $request->titreitem7;
        $portfolio->descriptionitem7 = $request->descriptionitem7;

        $portfolio->photoitem8 = $request->photoitem8;
        $portfolio->titreitem8 = $request->titreitem8;
        $portfolio->descriptionitem8 = $request->descriptionitem8;

        $portfolio->photoitem9 = $request->photoitem9;
        $portfolio->titreitem9 = $request->titreitem9;
        $portfolio->descriptionitem9 = $request->descriptionitem9;
        
        $portfolio->save();
        return redirect()->route('portfolio.all')->with('message', 'Informations modifié avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
