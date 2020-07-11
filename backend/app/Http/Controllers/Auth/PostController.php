<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostController extends Controller
{
    // 記事投稿画面
    public function index()
    {
        if (!Auth::check()) {
            redirect('/');
        }
        return view('auth.drafts.new');
    }

    // 記事投稿送信
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
        // 記事を投稿したらそのまま投稿された記事にリダイレクト
        // 変数展開するからダブルクォーテーションで囲んでる
        return redirect("/drafts/{$article->id}");
    }

    public function showArticle($id)
    {
        $article = Post::where('id', $id)->first();
        return view('auth.item', compact('article'));
    }

}
