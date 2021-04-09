<?php

namespace App\Http\Controllers;

use App\Models\Introduction;
use App\Models\Logo;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IntroductionController extends Controller
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
        $introductions = Introduction::first();
        $title1 = Str::of($introductions->title)->replace('(', '<span>');
        $title = Str::of($title1)->replace(')', '</span>');
        $resources = Resource::all();
        return view('pages.bo.home.introduction',compact('logo', 'introductions', 'resources', 'title'));
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
     * @param  \App\Models\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function show(Introduction $introduction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function edit(Introduction $introduction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Introduction $introduction)
    {
        $request->validate([
            'title' => 'required',
            'p1' => 'required',
            'p2' => 'required',
            'url' => 'required'
        ]);

        $updateEntry = $introduction;
        $updateEntry->title = $request->title;
        $updateEntry->p1 = $request->p1;
        $updateEntry->p2 = $request->p2;
        $updateEntry->url = $request->url;
        $updateEntry->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Introduction $introduction)
    {
        //
    }
}
