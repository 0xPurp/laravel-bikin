<?php

namespace App\Http\Controllers;

use App\Models\Footerz;
use Illuminate\Http\Request;

class FooterzController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footerz = Footerz::all();
        return view('admin.pages.footerz.all', compact('footerz'));
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
     * @param  \App\Models\Footerz  $footerz
     * @return \Illuminate\Http\Response
     */
    public function show(Footerz $footerz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footerz  $footerz
     * @return \Illuminate\Http\Response
     */
    public function edit(Footerz $footerz)
    {
        return view('admin.pages.footerz.edit', compact('footerz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footerz  $footerz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footerz $footerz)
    {
        $request->validate([
            "titre" => "required",
            "adress" => "required",
            "ville" => "required",
            "pays" => "required",
            "phonebold" => "required",
            "phone" => "required",
            "mailbold" => "required",
            "mail" => "required",
            "linksbold" => "required",
            "link1" => "required",
            "link2" => "required",
            "link3" => "required",
            "link4" => "required",
            "link5" => "required",
            "servicebold" => "required",
            "service1" => "required",
            "service2" => "required",
            "service3" => "required",
            "service4" => "required",
            "service5" => "required",
            "newsletterbold" => "required",
            "newsletter" => "required",
            "btnnews" => "required",
            "copyright1" => "required",
            "copyright2" => "required",
            "copyright3" => "required",
            "designed1" => "required",
            "designed2" => "required",
            "designedlink" => "required"
        ]);

        $footerz->titre = $request->titre;
        $footerz->adress = $request->adress;
        $footerz->ville = $request->ville;
        $footerz->pays = $request->pays;
        $footerz->phonebold = $request->phonebold;
        $footerz->phone = $request->phone;
        $footerz->mailbold = $request->mailbold;
        $footerz->mail = $request->mail;
        $footerz->linksbold = $request->linksbold;
        $footerz->link1 = $request->link1;
        $footerz->link2 = $request->link2;
        $footerz->link3 = $request->link3;
        $footerz->link4 = $request->link4;
        $footerz->link5 = $request->link5;
        $footerz->servicebold = $request->servicebold;
        $footerz->service1 = $request->service1;
        $footerz->service2 = $request->service2;
        $footerz->service3 = $request->service3;
        $footerz->service4 = $request->service4;
        $footerz->service5 = $request->service5;
        $footerz->newsletterbold = $request->newsletterbold;
        $footerz->newsletter = $request->newsletter;
        $footerz->btnnews = $request->btnnews;
        $footerz->copyright1 = $request->copyright1;
        $footerz->copyright2 = $request->copyright2;
        $footerz->copyright3 = $request->copyright3;
        $footerz->designed1 = $request->designed1;
        $footerz->designed2 = $request->designed2;
        $footerz->designedlink = $request->designedlink;
        $footerz->save();

        return redirect()->route('footerz.all')->with('message', 'Information modifiées avec succès');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footerz  $footerz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footerz $footerz)
    {
        //
    }
}
