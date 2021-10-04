<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonials::all();
        return view('admin.pages.testimonials.all', compact('testimonials'));
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
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonials $testimonials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonials $testimonials)
    {
        return view('admin.pages.testimonials.edit', compact('testimonials'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonials $testimonials)
    {
        $request->validate([
            "titre" => "required",
            "sous_titre" => "required",
            "avis1" => "required",
            "photoavis1" => "required",
            "nomavis1" => "required",
            "workavis1" => "required",
            "avis2" => "required",
            "photoavis2" => "required",
            "nomavis2" => "required",
            "workavis2" => "required",
            "avis3" => "required",
            "photoavis3" => "required",
            "nomavis3" => "required",
            "workavis3" => "required",
            "avis4" => "required",
            "photoavis4" => "required",
            "nomavis4" => "required",
            "workavis4" => "required",
            "avis5" => "required",
            "photoavis5" => "required",
            "nomavis5" => "required",
            "workavis5" => "required",
        ]);

        $testimonials->titre = $request->titre;
        $testimonials->sous_titre = $request->sous_titre;

        $testimonials->avis1 = $request->avis1;
        $testimonials->photoavis1 = $request->photoavis1;
        $testimonials->nomavis1 = $request->nomavis1;
        $testimonials->workavis1 = $request->workavis1;

        $testimonials->avis2 = $request->avis2;
        $testimonials->photoavis2 = $request->photoavis2;
        $testimonials->nomavis2 = $request->nomavis2;
        $testimonials->workavis2 = $request->workavis2;

        $testimonials->avis3 = $request->avis3;
        $testimonials->photoavis3 = $request->photoavis3;
        $testimonials->nomavis3 = $request->nomavis3;
        $testimonials->workavis3 = $request->workavis3;

        $testimonials->avis4 = $request->avis4;
        $testimonials->photoavis4 = $request->photoavis4;
        $testimonials->nomavis4 = $request->nomavis4;
        $testimonials->workavis4 = $request->workavis4;

        $testimonials->avis5 = $request->avis5;
        $testimonials->photoavis5 = $request->photoavis5;
        $testimonials->nomavis5 = $request->nomavis5;
        $testimonials->workavis5 = $request->workavis5;

        $testimonials->save();
        return redirect()->route('testimonials.all')->with('message', 'Informations modifié avec succès.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonials $testimonials)
    {
        //
    }
}
