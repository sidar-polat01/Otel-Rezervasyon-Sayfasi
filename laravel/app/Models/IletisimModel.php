<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IletisimModel extends Model
{
    use HasFactory;
    protected $table="iletisim"; //veritabanından hangi tablo bağlanılacak.
    protected $fillable=["adsoyad","mail","telefon","metin","created_at","updated_at"]; //tablodaki hangi alanlar kullanılacak.
}
