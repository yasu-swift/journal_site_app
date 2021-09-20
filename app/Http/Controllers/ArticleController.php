<?php

namespace App\Http\Controllers;

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
}
