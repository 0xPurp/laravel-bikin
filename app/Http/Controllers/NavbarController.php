<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navbar = Navbar::all();
        return view('admin.pages.navbar.all', compact('navbar'));
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
     * 
     * Display the specified resource
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function show(Navbar $navbar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function edit(Navbar $navbar)
    {
        return view('admin.pages.navbar.edit', compact('navbar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navbar $navbar)
    {
        $request->validate([
            "nomsite" => "required",
            "btnhome" => "required",
            "btnabout" => "required",
            "btnservices" => "required",
            "btnportfolio" => "required",
            "btnteam" => "required",
            "btncontact" => "required",
            "btngetstarted" => "required"
        ]);

        $navbar->nomsite = $request->nomsite;
        $navbar->btnhome = $request->btnhome;
        $navbar->btnabout = $request->btnabout;
        $navbar->btnservices = $request->btnservices;
        $navbar->btnportfolio = $request->btnportfolio;
        $navbar->btnteam = $request->btnteam;
        $navbar->btncontact = $request->btncontact;
        $navbar->btngetstarted = $request->btngetstarted;

        $navbar->save();
        return redirect()->route('navbar.all')->with('message', 'l\'item as été modifié correctement.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navbar $navbar)
    {
        //
    }
}
