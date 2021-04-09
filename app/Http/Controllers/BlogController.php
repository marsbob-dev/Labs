<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Nav;
use App\Models\Newsletter;
use App\Models\Placeholder;
use App\Models\Post;
use App\Models\Search;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
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
        $logo = Logo::first();
        $footers = Footer::first();
        $newsletters = Newsletter::first();
        $categories = Category::all();
        $searches = Search::first();
        $tags = Tag::all();
        $posts = Post::orderBy('id', 'DESC')->paginate(3);
        $comments = Comment::where('approuved', true)->get();
        return view('pages.blog', compact('navs', 'contacts', 'placeholders', 'logo', 'footers', 'newsletters', 'categories', 'searches', 'tags', 'posts', 'comments'));
    }

    public function filter($id)
    {
        $navs = Nav::all();
        $contacts = Contact::first();
        $placeholders = Placeholder::first();
        $logo = Logo::first();
        $footers = Footer::first();
        $newsletters = Newsletter::first();
        $categories = Category::all();
        $searches = Search::first();
        $tags = Tag::all();
        $posts = Post::where('category_id', $id)->paginate(3);
        $comments = Comment::where('approuved', true)->get();
        return view('pages.blog', compact('navs', 'contacts', 'placeholders', 'logo', 'footers', 'newsletters', 'categories', 'searches', 'tags', 'posts', 'comments'));
    }

    public function filterTag($id)
    {
        $navs = Nav::all();
        $contacts = Contact::first();
        $placeholders = Placeholder::first();
        $logo = Logo::first();
        $footers = Footer::first();
        $newsletters = Newsletter::first();
        $categories = Category::all();
        $searches = Search::first();
        $tags = Tag::all();
        $postAll = Post::all();

        $posts = [];
        $tagsArray = [];
        foreach ($postAll as $item) {
            $tagsArray = $item->tags->pluck('id')->toArray();
            if (in_array($id, $tagsArray)) {
                array_push($posts, $item);
            }
            unset($tagsArray);
        }

        $comments = Comment::where('approuved', true)->get();
        return view('pages.blog', compact('navs', 'contacts', 'placeholders', 'logo', 'footers', 'newsletters', 'categories', 'searches', 'tags', 'posts', 'comments'));
    }

    public function search(Request $request)
    {
        // Search function
        $search = $request->search;
        $posts = Post::query()->where('title', 'LIKE', "%{$search}%")->paginate(3);

        // DB for template
        $navs = Nav::all();
        $contacts = Contact::first();
        $placeholders = Placeholder::first();
        $logo = Logo::first();
        $footers = Footer::first();
        $newsletters = Newsletter::first();
        $categories = Category::all();
        $searches = Search::first();
        $tags = Tag::all();
        $comments = Comment::where('approuved', true)->get();
        return view('pages.blog', compact('navs', 'contacts', 'placeholders', 'logo', 'footers', 'newsletters', 'categories', 'searches', 'tags', 'posts', 'comments'));
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
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
