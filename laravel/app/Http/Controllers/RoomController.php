<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RoomController extends Controller
{
    public function index(){
        $rooms=Room::all();
        return view('back.room.index',compact('rooms'));
    }

    public function create(){
        $categories=Category::all();
        return view('back.room.create',compact('categories'));
    }

    public function createPost(Request $request){
        $isExist=Room::whereSlug($request->title)->whereCategory_id($request->category)->first();
        if($isExist){
            return redirect()->back()->withErrors('Aynı ada sahip bir oda tipi bulunmakta.');
        }
        $room=new Room();
        $room->title=$request->title;
        $room->slug=Str::slug($request->title);
        $room->category_id=$request->category;

        $room->save();
        return redirect()->route('room.index');
    }

    public function update($id){
        $room = Room::findOrFail($id);
        $categories=Category::all();
        return view('back.room.update',compact('room','categories'));
    }

    public function updatePost(Request $request,$id){
        $room=Room::findOrFail($id);
        $room->title=$request->title;
        $room->category_id=$request->category;
        $room->status=$request->status;
        $room->finished_at=$request->finished_at;
        $room->slug = Str::slug($request->title);
        $room->save();
        return redirect()->route('room.index');
    }

    public function delete($id){
        Room::find($id)->delete();
        return redirect()->route('room.index');
    }
}
