<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;//nesne tabanlı kullanım sağlar.
use App\Models\IletisimModel;
class Iletisim extends Controller
{
    public function index(){
        return view("front.iletisim");
    }

    public function ekleme(Request $request){
        $adsoyad=$request->adsoyad;
        $telefon=$request->telefon;
        $mail=$request->mail;
        $metin=$request->metin;
        IletisimModel::create([
            "adsoyad"=>$adsoyad,
            "telefon"=>$telefon,
            "mail"=>$mail,
            "metin"=>$metin,
        ]);
        echo "bilgiler aktarıldı";
    }
}
//request kütüphanesi POST GET  gibi metodlar hazır halde bulunur.
