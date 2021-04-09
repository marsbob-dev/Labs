<?php

namespace App\Http\Middleware;

use App\Models\Post;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class isAuthor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Str::contains($request->route()->uri(), 'postEdit')) {
                $articleId = $request->route()->parameters();
                $article = Post::find($articleId);
                $articleAuthorId = $article[0]->author_id; 
            } else {
                $articleAuthorId = $request->route()->parameters()['post']->author_id;
            }
            if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2 || Auth::id() == $articleAuthorId) {
                return $next($request);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }
}
