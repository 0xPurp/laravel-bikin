<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('admin.pages.team.all', compact('team'));
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
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.pages.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            "titre" => "required",
            "sous_titre" => "required",
            "photocrew1" => "required",
            "nomcrew1" => "required",
            "postecrew1" => "required",
            "photocrew2" => "required",
            "nomcrew2" => "required",
            "postecrew2" => "required",
            "photocrew3" => "required",
            "nomcrew3" => "required",
            "postecrew3" => "required",
            "photocrew4" => "required",
            "nomcrew4" => "required",
            "postecrew4" => "required",
        ]);

        $team->titre = $request->titre;
        $team->sous_titre = $request->sous_titre;
        $team->photocrew1 = $request->photocrew1;
        $team->nomcrew1 = $request->nomcrew1;
        $team->postecrew1 = $request->postecrew1;
        $team->photocrew2 = $request->photocrew2;
        $team->nomcrew2 = $request->nomcrew2;
        $team->postecrew2 = $request->postecrew2;
        $team->photocrew3 = $request->photocrew3;
        $team->nomcrew3 = $request->nomcrew3;
        $team->postecrew3 = $request->postecrew3;
        $team->photocrew4 = $request->photocrew4;
        $team->nomcrew4 = $request->nomcrew4;
        $team->postecrew4 = $request->postecrew4;

        $team->save();
        return redirect()->route('team.all')->with('message', 'Informations modifié avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
