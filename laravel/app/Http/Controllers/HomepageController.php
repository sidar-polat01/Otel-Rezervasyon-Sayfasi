<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Rezerve;
use Illuminate\Http\Request;
use App\Models\Room;

class HomepageController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('front.welcome',compact('categories'));
    }
    public function category($id){
        $category=Category::findOrFail($id);
        $categories=Category::all();
        return view('front.category',compact('category','categories'));
    }
    public function rezerve(Request $request){
        $rezerve=new Rezerve;
        $rezerve->name=$request->name;
        $rezerve->email=$request->email;
        $rezerve->number=$request->number;
        $rezerve->parent=$request->parent;
        $rezerve->child=$request->child;
        $rezerve->started_at=$request->started_at;
        $rezerve->finished_at=$request->finished_at;
        $rezerve->type=$request->type;
        $rezerve->save();
        return redirect()->route('home.index');
    }
}
