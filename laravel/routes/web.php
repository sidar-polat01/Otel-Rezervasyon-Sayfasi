<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Iletisim; //controller yönlendirme
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\HomepageController;

//BACKEND

Route::prefix('/admin')->middleware('isLogin')->group(function (){
    Route::get('/giris',[AuthController::class,'login'])->name('login');
    Route::post('/giris',[AuthController::class,'loginPost'])->name('login.post');
});

Route::prefix('/admin')->middleware('isAdmin')->group(function (){
    Route::get('/',[AdminController::class,'index'])->name('index');
    Route::get('/cikis',[AuthController::class,'logout'])->name('logout');

    //CATEGORY
    Route::get('/kategory',[CategoryController::class,'index'])->name('category.index');
    Route::get('/kategory/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/kategory/create',[CategoryController::class,'createPost'])->name('category.create.post');
    Route::get('/kategory/edit/{id}',[CategoryController::class,'update'])->name('category.edit');
    Route::post('/kategory/edit/{id}',[CategoryController::class,'updatePost'])->name('category.edit.post');
    Route::get('/kategory/sil/{id}',[CategoryController::class,'delete'])->name('category.delete');

    //ROOM
    Route::get('/oda',[RoomController::class,'index'])->name('room.index');
    Route::get('/oda/create',[RoomController::class,'create'])->name('room.create');
    Route::post('/oda/create',[RoomController::class,'createPost'])->name('room.create.post');
    Route::get('/oda/edit/{id}',[RoomController::class,'update'])->name('room.edit');
    Route::post('/oda/edit/{id}',[RoomController::class,'updatePost'])->name('room.edit.post');
    Route::get('/oda/delete/{id}',[RoomController::class,'delete'])->name('room.delete');
});

//FRONTEND

Route::get("/",[HomepageController::class,'index'])->name('home.index');
Route::get("/kategori/{id}",[HomepageController::class,'category'])->name('home.category');
Route::post("/kategori/rezerve",[HomepageController::class,'rezerve'])->name('home.rezerve');
Route::get("/iletisim",[Iletisim::class,'index']); //Iletisim = controller
Route::post("/iletisim-sonuc",[Iletisim::class,'ekleme'])->name("iletisim-sonuc");

