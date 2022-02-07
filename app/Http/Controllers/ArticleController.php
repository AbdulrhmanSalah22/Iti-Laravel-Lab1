<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function create()
    {
        return view('Article.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:articles',
            'details' => 'required|max:50',
            'cat_id' => 'required'
        ]);
        $article = new Article;
        $article->name = $request->name;
        $article->details = $request->details;
        $article->cat_id = $request->cat_id;

        $article->save();

        return redirect()->route("ShowArticle");
    }
    public function show()
    {

        $article = Article::all();

        //   $article =  DB::table('articles')->get();
        //       return $article;

        return view('Article.show', ['article' => $article]);
    }
    public function delete($id){

        DB::table('articles')->where("id",$id)->delete();

        return redirect()->route('ShowArticle');
    }

    public function edit($id){
        $article =  Article::where('id','=',$id)->get();
              return view('Article.edit',['article'=> $article]);
    }

    public function update(Request $request , $id){
    
        DB::table('articles')->where('id',$id)->update(['name' => $request-> name , 'details' => $request-> details,'cat_id' => $request->cat_id]);
        return redirect()->route("ShowArticle");
    }
}
