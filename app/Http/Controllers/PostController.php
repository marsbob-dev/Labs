<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Nav;
use App\Models\Newsletter;
use App\Models\Placeholder;
use App\Models\Post;
use App\Models\Post_tag;
use App\Models\Search;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAuthor')->only(['update', 'editPost']);
        $this->middleware('isWebmaster')->only(['destroy']);
        $this->middleware('isRedactor')->only(['index', 'store', 'edit']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view('pages.bo.blog.article',compact('posts', 'categories', 'tags'));
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
            'category_id' => 'required'
        ]);

        $newEntry = new Post;
        $newEntry->title = $request->title;
        $newEntry->content = $request->content;
        $newEntry->author_id = Auth::id();
        $newEntry->category_id = $request->category_id;
        $request->file('src')->storePublicly('img/blog/', 'public');
        $newEntry->src = $request->file('src')->hashName();
        $newEntry->save();
        foreach ($request->tag as $item) {
            $newEntry->tags()->attach($item, ['post_id' => $newEntry->id]);
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $paragraphs = explode('/', $post->content);
        $footers = Footer::first();
        $logo = Logo::first();
        $navs = Nav::all();
        $newsletters = Newsletter::first();
        $categories = Category::all();
        $searches = Search::first();
        $tags = Tag::all();
        $placeholders = Placeholder::first();
        $commentGood = Comment::where('approuved', true)->get();
        $comments = $commentGood->where('post_id', $post->id);
        $nbrComment = count($comments);
        return view('pages.blog-post',compact('post', 'footers', 'logo', 'navs', 'newsletters', 'categories', 'searches', 'tags', 'placeholders', 'paragraphs', 'comments', 'nbrComment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $paragraphs = explode('/', $post->content);
        $categories = Category::all();
        $tags = Tag::all();
        $commentGood = Comment::where('approuved', true)->get();
        $comments = $commentGood->where('post_id', $post->id);
        $nbrComment = count($comments);
        return view('pages.bo.blog.articleShow',compact('post', 'categories','tags', 'paragraphs', 'comments', 'nbrComment'));
    }

    public function editPost($id)
    {
        $edit = Post::find($id);
        $paragraphs = explode('/', $edit->content);
        $categories = Category::all();
        $tags = Tag::all();
        return view('pages.bo.blog.articleEdit',compact('edit', 'paragraphs', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required'
        ]);
        
        $updateEntry = $post;
        $updateEntry->title = $request->title;
        $updateEntry->content = $request->content;
        $updateEntry->category_id = $request->category_id;
        if ($request->file('src') != NULL) {
            Storage::disk('public')->delete('img/blog/'.$updateEntry->src);
            $request->file('src')->storePublicly('img/blog/', 'public');
            $updateEntry->src = $request->file('src')->hashName();
        }
        $updateEntry->save();
        $updateEntry->tags()->detach();
        foreach ($request->tag as $item) {
            $updateEntry->tags()->attach($item, ['post_id' => $updateEntry->id]);
        }
        return redirect('post/'.$updateEntry->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        Storage::disk('public')->delete('img/blog'.$post->src);
        return redirect()->back();
    }
}
