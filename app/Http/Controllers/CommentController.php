<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isWebmaster'])->only(['index', 'commentsValidate', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();
        return view('pages.bo.blog.comment',compact('comments'));
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
        if (Auth::check()) {
            $request->validate([
                'content' => 'required',
            ]);
        } else {
            $request->validate([
                'content' => 'required',
                'name' => 'required',
                'email' => 'required|email'
            ]);
        }

        $postId = explode('/', url()->previous());
        $newEntry = new Comment;
        if (Auth::check()) {
            $newEntry->name = Auth::user()->name.' '.Auth::user()->surname;
            $newEntry->email = Auth::user()->email;
            $newEntry->picture_id = Auth::user()->photo_id;
        } else {
            $newEntry->name = $request->name;
            $newEntry->email = $request->email;
            $newEntry->picture_id = 1;
        }
        $newEntry->content = $request->content;
        $newEntry->post_id = end($postId);
        $newEntry->approuved = false;
        $newEntry->save();
        return redirect()->back();
    }

    public function commentsValidate($id)
    {
        $updateEntry = Comment::find($id);
        $updateEntry->approuved = 1;
        $updateEntry->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->back();
    }
}
