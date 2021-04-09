<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isWebmaster']);;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::first();
        $teams = Team::first();
        $team = Str::of($teams->title)->replace('(', '<span>');
        $titleTeam = Str::of($team)->replace(')', '</span>');
        $users = User::where('approuved', true)->get();
        return view('pages.bo.home.team',compact('teams', 'titleTeam', 'users', 'logo'));
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
        //
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
            'title' => 'required'
        ]);

        $updateEntry = $team;
        $updateEntry->title = $request->title;
        $updateEntry->save();
        return redirect()->back();
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
