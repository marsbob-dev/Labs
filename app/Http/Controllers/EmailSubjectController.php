<?php

namespace App\Http\Controllers;

use App\Models\EmailSubject;
use App\Models\Logo;
use Illuminate\Http\Request;

class EmailSubjectController extends Controller
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
        //
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
            'subject' => 'required'
        ]);

        $newEntry = new EmailSubject;
        $newEntry->subject = $request->subject;
        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmailSubject  $emailSubject
     * @return \Illuminate\Http\Response
     */
    public function show(EmailSubject $emailSubject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmailSubject  $emailSubject
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subjects = EmailSubject::find($id);
        $logo = Logo::first();
        return view('pages.bo.contact.subjectEdit',compact('subjects', 'logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmailSubject  $emailSubject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'subject' => 'required'
        ]);
        
        $updateEntry = EmailSubject::find($id);
        $updateEntry->subject = $request->subject;
        $updateEntry->save();
        return redirect('contactBo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmailSubject  $emailSubject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = EmailSubject::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
