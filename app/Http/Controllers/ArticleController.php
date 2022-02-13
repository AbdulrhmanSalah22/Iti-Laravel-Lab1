<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function create()
    {
        $cat = Category::select('name')->get();
//        return $cat  ;
        return view('Article.create',['cats' => $cat] ) ;
    }

    public function store(ArticleRequest $request)
    {
        $cat_id = Category::where('name', $request -> cat_name)->get();
        $article = new Article;
        $article->name = $request->name;
        $article->details = $request->details;
        $article->cat_id = $cat_id[0] -> id;

        $article->save();

        return redirect()->route("ShowArticle");
    }
    public function show()
    {

        $article = Article::paginate(5);

        //   $article =  DB::table('articles')->get();
        //       return $article;

        return view('Article.show', ['article' => $article]);
    }
    public function delete($id){

        DB::table('articles')->where("id",$id)->delete();

        return redirect()->route('ShowArticle');
    }

    public function edit($id){
//        $article =  Article::where('id','=',$id)->get();
        $cats = Category::all();
        $article =  Article::find($id);
//        $article -> category ;
//        return $article ;
        return view('Article.edit',['article'=> $article , 'cats' => $cats]);
    }

    public function update(Request $request , $id){
        $cat = Category::where('name',$request -> cat_name)->get();
        DB::table('articles')->where('id',$id)->update(['name' => $request-> name , 'details' => $request-> details,'cat_id' => $cat[0] -> id]);
//        $article =  Article::find($id);
//        $article -> category;
//        return $article ;

        return redirect()->route("ShowArticle");
    }
}
