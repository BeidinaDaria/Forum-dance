<?php

namespace App\Http\Controllers;
use App\article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articlesList(){
        $articles=Article::all();
        return view('articles.articles-list',[
            'articles'=>$articles,
        ]);
    }

    public function createArticle(){
        return view('articles.create-article');
    }
    public function storeArticle(Request $request){
        Article::create($request->all());
        return redirect()->route("articles.list");
    }
}
