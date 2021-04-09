<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Logo;
use App\Models\Resource;
use App\Models\Services;
use Illuminate\Http\Request;

class ResourceController extends Controller
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
        $services = Services::first();
        $resources = Resource::orderBy('id', 'DESC')->paginate(9);
        $resourcesAll = Resource::all();
        $icons = Icon::all();
        return view('pages.bo.services.service',compact('logo', 'resources', 'services', 'icons', 'resourcesAll'));
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
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'icon_id' => 'required'
        ]);

        $newEntry = new Resource;
        $newEntry->title = $request->title;
        $newEntry->content = $request->content;
        $newEntry->icon_id = $request->icon_id;
        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show(Resource $resource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Resource $resource)
    {
        $icons = Icon::all();
        $logo = Logo::first();
        return view('pages.bo.services.serviceEdit',compact('resource', 'icons', 'logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resource $resource)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'icon_id' => 'required'
        ]);
        
        $updateEntry = $resource;
        $updateEntry->title = $request->title;
        $updateEntry->content = $request->content;
        $updateEntry->icon_id = $request->icon_id;
        $updateEntry->save();
        return redirect('resources');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resource)
    {
        $resource->delete();
        return redirect()->back();
    }
}
