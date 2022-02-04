<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('back.category.index',compact('categories'));
    }
    public function create(){
        return view('back.category.create');
    }
    public function createPost(Request $request){
        $isExist=Category::whereSlug($request->title)->first();
        if($isExist){
            return redirect()->back()->withErrors('Aynı ada sahip bir oda tipi bulunmakta.');
        }
        $category=new Category;
        $category->title=$request->title;
        $category->slug=Str::slug($request->title);
        $category->description=$request->description;
        if($request->hasFile('image')){
            $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $category->image='uploads/'.$imageName;
        }
        $category->save();
        return redirect()->route('category.index');
    }
    public function update($id){
        $category=Category::findOrFail($id);
        return view('back.category.update',compact('category'));
    }
    public function updatePost(Request $request, $id){
        $category=Category::findOrFail($id);
        $category->title = $request->title;
        if($request->hasFile('image')){
            $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $category->image='uploads/'.$imageName;
        }
        $category->description = $request->description;
        $category->slug = Str::slug($request->title);
        $category->save();
        return redirect()->route('category.index');
    }
    public function delete($id)
    {
        Category::find($id)->delete();
        return redirect()->route('category.index');
    }
}
