<?php

namespace App\Http\Controllers\api;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class articleControll extends Controller
{
    public function show()
    {
        $result  = Article::all();
        return response()->json($result); 
    }

    public function store(ArticleRequest $request)
    {
        $cat_id = Category::where('name', $request -> cat_name)->get();
        $article = new Article;
        $article->name = $request->name;
        $article->details = $request->details;
        $article->cat_id = $cat_id[0] -> id;

        $article->save();
        
        return response()->json(['message'=>'Saved Success', 200]);

        // return redirect()->route("ShowArticle");
    }
    public function delete($id){

        Article::find($id)->delete();

        return response()->json(['message'=>'Deleted Success', 200]);
    }
    public function update(Request $request , $id){
        $cat = Category::where('name',$request -> cat_name)->get();
        DB::table('articles')->where('id',$id)->update(['name' => $request-> name , 'details' => $request-> details,'cat_id' => $cat[0] -> id]);

    }  
  }
