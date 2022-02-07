<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function create(){
        return view('Category.create');
    }
    public function store(Request $request ){
        $request->validate([
            'name' => 'required|unique:categories'
        ]);
        DB::table('categories')->insert([
           'name' => $request -> name
        ]);
       return redirect()->route("ShowCategories");
    }

    public function show(){
       $catagories = DB::table('categories')->get();
        return view('Category.show',['Cats' => $catagories]);
    }
    public function delete($id){
        DB::table('categories')->where("id",$id)->delete();

        return redirect()->route('ShowCategories');
    }
    public function edit($id){
        $category =  Category::where('id','=',$id)->get();
//      $category = DB::table('categories')->where('id',$id)->get();
//    return $category ;
              return view('Category.edit',['cat'=> $category]);
    }
    public function update(Request $request , $id){
        // $request->validate([
        //     'name' => 'required|unique:categories'
        // ]);
        DB::table('categories')->where('id',$id)->update(['name' => $request->name]);
        return redirect()->route("ShowCategories");
    }

}
