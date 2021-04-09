<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Newsletter;
use App\Models\Stand;
use Illuminate\Http\Request;

class StandController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isWebmaster']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::first();
        $stands = Stand::first();
        $newsletters = Newsletter::first();
        return view('pages.bo.home.standOut',compact('logo', 'stands', 'newsletters'));
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
     * @param  \App\Models\Stand  $stand
     * @return \Illuminate\Http\Response
     */
    public function show(Stand $stand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stand  $stand
     * @return \Illuminate\Http\Response
     */
    public function edit(Stand $stand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stand  $stand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'paragraph' => 'required'
        ]);

        $updateEntry = Stand::find($id);
        $updateEntry->title = $request->title;
        $updateEntry->paragraph = $request->paragraph;
        $updateEntry->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stand  $stand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stand $stand)
    {
        //
    }
}
