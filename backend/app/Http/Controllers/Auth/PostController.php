<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('auth.drafts.new');
    }

    public function postArticle(Request $request)
    {
        // バリデーション
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'tags' => 'required|string',
            'article' => 'required|string',
        ]);

        $tags = explode(' ', $request->tags);

        $article = Post::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            // TODO: この辺foreachでできそう
            'tag1' => head($tags),
            'tag2' => $tags[1] ?? null,
            'tag3' => $tags[2] ?? null,
            'body' => $request->article,
        ]);
        return redirect('/');
    }
}
