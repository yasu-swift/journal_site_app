<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
// Articleクラスを読み込む
use App\Models\Article;

class ArticleController extends Controller
{
        // showページへ移動
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }

    public function index()
    {
        // モデル名::テーブル全件取得
        $articles = Article::all();
        // articlesティレクトリーの中のindexページを指定し、articlesの連想配列を代入
        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request)
    {
        //インスタンス化
        $article = new Article;
        //値を用意
        $article->title = $request->title;
        $article->body = $request->body;
        //保存
        $article->save();
        // 登録したらindexに戻る
        return redirect('/articles');
    }

    
}
