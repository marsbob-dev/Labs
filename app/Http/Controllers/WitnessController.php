<?php

namespace App\Http\Controllers;

use App\Mail\FormSend;
use App\Models\EmailSubject;
use App\Models\Witness;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class WitnessController extends Controller
{
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
        $request->validateWithBag('witness',[
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $subjects = EmailSubject::all();

        if ($subjects->find($request->subject_id)) {
            // Finding subject then compact it
            $subject = EmailSubject::find($request->subject_id);
            Mail::to('marsbob@live.fr')->send(new FormSend([$request, $subject]));
    
            // Return + msg
            $route = URL::previous();
            return redirect($route.'#formQueries')->with('success', 'Email send!');
        } else {
            // Return + msg
            $route = URL::previous();
            return redirect($route.'#formQueries')->with('error', 'Please do not modify the form!');
        }

        $route = URL::previous();
        return redirect($route.'#formQueries');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Witness  $witness
     * @return \Illuminate\Http\Response
     */
    public function show(Witness $witness)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Witness  $witness
     * @return \Illuminate\Http\Response
     */
    public function edit(Witness $witness)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Witness  $witness
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Witness $witness)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Witness  $witness
     * @return \Illuminate\Http\Response
     */
    public function destroy(Witness $witness)
    {
        //
    }
}
