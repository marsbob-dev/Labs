<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Picture;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isWebmaster')->only(['create', 'approuved', 'edit']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('approuved', true)->get();
        return view('pages.bo.user.users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('approuved', false)->get();
        return view('pages.bo.user.usersPending',compact('users'));
    }

    public function approuved($id)
    {
        $updateEntry = User::find($id);
        $updateEntry->approuved = 1;
        $updateEntry->save();
        return redirect()->back();
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = User::find($id);
        return view('pages.bo.user.userShow', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $jobs = Job::all();
        $roles = Role::all();
        return view('pages.bo.user.userEdit',compact('user', 'jobs', 'roles'));
    }

    public function editBasic($id)
    {
        $user = User::find($id);
        $jobs = Job::all();
        $roles = Role::all();
        return view('pages.bo.user.userEditBasic',compact('user', 'jobs', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'job_id' => 'required',
            'description' => 'required'
        ]);

        $updateEntry = User::find($id);
        $updateEntry->name = $request->name;
        $updateEntry->surname = $request->surname;
        $updateEntry->email = $request->email;
        $updateEntry->job_id = $request->job_id;
        $updateEntry->description = $request->description;
        if ($request->file('src') != NULL) {
            Storage::disk('public')->delete('img/team/'.$updateEntry->photos->src);
            $photo = new Picture;
            $photo->src = $request->file('src')->hashName();
            $photo->save();
            $request->file('src')->storePublicly('img/team/', 'public');
            $updateEntry->photo_id = $photo->id;
        }
        if (Auth::user()->role_id == 1) {
            $updateEntry->role_id = $request->role_id;
            $updateEntry->password = Hash::make($request->password);
        }
        $updateEntry->save();
        return redirect('users/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = User::find($id);
        $picture = Picture::find($destroy->photo_id);
        Storage::disk('public')->delete('img/team/'.$picture->src);
        $picture->delete();
        $destroy->delete();
        return redirect()->back();
    }
}
