<?php

namespace App\Http\Controllers;

use App\Models\Features;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = Features::all();
        return view('admin.pages.features.all', compact('features'));
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
     * @param  \App\Models\Features  $features
     * @return \Illuminate\Http\Response
     */
    public function show(Features $features)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Features  $features
     * @return \Illuminate\Http\Response
     */
    public function edit(Features $features)
    {
        return view('admin.pages.features.edit', compact('features'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Features  $features
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Features $features)
    {
        $request->validate([
            "titrefeatures" => "required",
            "soustitrefeatures" => "required",
            "imgfeature1" => "required",
            "titrefeature1" => "required",
            "descriptionfeature1" => "required",
            "item1feature1" => "required",
            "item2feature1" => "required",
            "item3feature1" => "required",
            "imgfeature2" => "required",
            "titrefeature2" => "required",
            "descriptionfeature2" => "required",
            "textfeature2" => "required",
            "imgfeature3" => "required",
            "titrefeature3" => "required",
            "descriptionfeature3" => "required",
            "item1feature3" => "required",
            "item2feature3" => "required",
            "item3feature3" => "required",
            "imgfeature4" => "required",
            "titrefeature4" => "required",
            "descriptionfeature4" => "required",
            "textfeature4" => "required"
        ]);

        $features->titrefeatures = $request->titrefeatures;
        $features->soustitrefeatures = $request->soustitrefeatures;
        $features->imgfeature1 = $request->imgfeature1;
        $features->titrefeature1 = $request->titrefeature1;
        $features->descriptionfeature1 = $request->descriptionfeature1;
        $features->item1feature1 = $request->item1feature1;
        $features->item2feature1 = $request->item2feature1;
        $features->item3feature1 = $request->item3feature1;
        $features->imgfeature2 = $request->imgfeature2;
        $features->titrefeature2 = $request->titrefeature2;
        $features->descriptionfeature2 = $request->descriptionfeature2;
        $features->textfeature2 = $request->textfeature2;
        $features->imgfeature3 = $request->imgfeature3;
        $features->titrefeature3 = $request->titrefeature3;
        $features->descriptionfeature3 = $request->descriptionfeature3;
        $features->item1feature3 = $request->item1feature3;
        $features->item2feature3 = $request->item2feature3;
        $features->item3feature3 = $request->item3feature3;
        $features->imgfeature4 = $request->imgfeature4;
        $features->titrefeature4 = $request->titrefeature4;
        $features->descriptionfeature4 = $request->descriptionfeature4;
        $features->textfeature4 = $request->textfeature4;

        $features->save();
        return redirect()->route('features.all')->with('message', 'Informations modifié avec succès.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Features  $features
     * @return \Illuminate\Http\Response
     */
    public function destroy(Features $features)
    {
        //
    }
}
