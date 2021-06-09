<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    //protected $fillable = ['kategori_adi','slug'];
    protected $guarded = [];


    public function urunler(){

        return $this->belongsToMany('\App\Models\Urun','kategori_urun');
    }
}
