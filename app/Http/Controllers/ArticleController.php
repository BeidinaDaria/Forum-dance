<?php

namespace App\Http\Controllers;
use App\article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles=Article::all();
        return view('articles.articles-list',[
            'articles'=>$articles,
        ]);
    }

    public function createArticle(){
        return view('articles.create-article');
    }
    public function storeArticle(Request $request){
        $request->validate([
            'title'=>['required','min:3','max:255'],
        ]);
        Article::add($request->all());
        return redirect()->route("articles.list");
    }
    public function editArticle($articleId){
        return view('articles.edit-article',[
            'article'=>Article::find($articleId)
        ]);
    }
    public function updateArticle(Request $request,$articleId){
        $request->validate([
            'title'=>'required|min:3|max:255',
        ]);
        $article=Article::find($articleId);
        $article->update([
            'title'=>$request->input("title"),
            'text'=>$request->input("text"),
            'image'=>$request->input("image"),
            'dateof publishing'=>$request->input("is_published"),
        ]);
        return redirect()->route("articles.list");
    }
    public function deleteArticle($articleId){
        $article=Article::find($articleId);
        $article->delete();
        return back();
    }
    public function show($articleSlug){
        return view("articles.show-article",[
            'article'=>Article::where("slug",$articleSlug)->first(),
        ]);
    }
}
