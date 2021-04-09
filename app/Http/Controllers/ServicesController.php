<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\EmailSubject;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Nav;
use App\Models\Newsletter;
use App\Models\Phone;
use App\Models\Placeholder;
use App\Models\Post;
use App\Models\Resource;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isWebmaster'])->only(['backoffice','update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navs = Nav::all();
        $contacts = Contact::first();
        $placeholders = Placeholder::first();
        $emailSubjects = EmailSubject::all();
        $logo = Logo::first();
        $footers = Footer::first();
        $services = Services::first();
        $title1 = Str::of($services->title)->replace('(', '<span>');
        $title = Str::of($title1)->replace(')', '</span>');
        $resources = Resource::orderBy('id', 'DESC')->paginate(9);
        $phones = Phone::first();
        $title0 = Str::of($phones->title)->replace('(', '<span>');
        $title2 = Str::of($title0)->replace(')', '</span>');
        $newsletters = Newsletter::first();
        $lastServices = Resource::orderBy('id', 'DESC')->get()->take(6);
        $lastPost = Post::orderBy('id', 'DESC')->get()->take(3);

        return view('pages.services', compact('navs','title2', 'title', 'emailSubjects', 'contacts', 'placeholders', 'logo', 'footers', 'services', 'resources', 'lastPost', 'newsletters', 'phones', 'lastServices'));
    }

    public function backoffice()
    {
        $logo = Logo::first();
        $services = Services::first();
        $title1 = Str::of($services->title)->replace('(', '<span>');
        $title = Str::of($title1)->replace(')', '</span>');
        $phones = Phone::first();
        $title0 = Str::of($phones->title)->replace('(', '<span>');
        $title2 = Str::of($title0)->replace(')', '</span>');
        return view('pages.bo.home.services',compact('logo', 'services', 'title', 'title2', 'phones'));
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
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validateWithBag('services',[
            'title' => 'required',
            'btn' => 'required'
        ]);

        $updateEntry = Services::find($id);
        $updateEntry->title = $request->title;
        $updateEntry->btn = $request->btn;
        $updateEntry->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $services)
    {
        //
    }
}
