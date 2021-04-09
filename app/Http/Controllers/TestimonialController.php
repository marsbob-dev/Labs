<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Testimonial;
use App\Models\Witness;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestimonialController extends Controller
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
        $testimonials = Testimonial::first();
        $testi = Str::of($testimonials->title)->replace('(', '<span>');
        $titleTesti = Str::of($testi)->replace(')', '</span>'); 
        $witnesses = Witness::orderBy('id', 'DESC')->get()->take(6);
        return view('pages.bo.home.testimonials',compact('logo', 'witnesses', 'testimonials', 'titleTesti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.bo.home.testimonialNew');
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
            'name' => 'required',
            'surname' => 'required',
            'content' => 'required',
            'job' => 'required'
        ]);

        $newEntry = new Witness;
        $newEntry->name = $request->name;
        $newEntry->surname = $request->surname;
        $newEntry->content = $request->content;
        $newEntry->job = $request->job;
        $newEntry->src = $request->file('src')->hashName();
        $request->file('src')->storePublicly('img/avatar/', 'public');
        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'title' => 'required',
            'span' => 'required'
        ]);

        $updateEntry = $testimonial;
        $updateEntry->title = $request->title;
        $updateEntry->span = $request->span;
        $updateEntry->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
