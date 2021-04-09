<?php

namespace App\Http\Controllers;

use App\Models\Carrousel;
use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarrouselController extends Controller
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
        $carrousels = Carrousel::orderBy('main', 'DESC')->get();
        $logo = Logo::first();
        return view('pages.bo.home.carousel', compact('carrousels', 'logo'));
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
        $validation = $request->validate([
            'paragraph' => 'required',
            'src' => 'required'
        ]);

        $newEntry = new Carrousel;
        $newEntry->paragraph = $request->paragraph;
        $newEntry->src = $request->file('src')->hashName();
        $request->file('src')->storePublicly('img/', 'public');
        $newEntry->main = 0;
        $newEntry->save();
        return redirect()->back();
    }

    public function main($id)
    {
        $all = Carrousel::all();
        foreach ($all as $item) {
            $item->main = 0;
            $item->save();
        }
        $updateEntry = Carrousel::find($id);
        $updateEntry->main = 1;
        $updateEntry->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrousel  $carrousel
     * @return \Illuminate\Http\Response
     */
    public function show(Carrousel $carrousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carrousel  $carrousel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carrousel = Carrousel::find($id);
        $logo = Logo::first();
        return view('pages.bo.home.carouselEdit',compact('logo', 'carrousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carrousel  $carrousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'paragraph' => 'required',
        ]);

        $updateEntry = Carrousel::find($id);
        $updateEntry->paragraph = $request->paragraph;
        if ($request->file('src') != NULL) {
            Storage::disk('public')->delete('img/'.$updateEntry->src);
            $updateEntry->src = $request->file('src')->hashName();
            $request->file('src')->storePublicly('img/', 'public');
        }        
        $updateEntry->save();
        return redirect('carousel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrousel  $carrousel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Carrousel::find($id);
        Storage::disk('public')->delete('img/'.$destroy->src);
        $destroy->delete();
        return redirect()->back();
    }
}
