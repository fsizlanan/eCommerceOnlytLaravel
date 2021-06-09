<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Urun;
use App\Models\UrunDetay;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {

        $data = Kategori::where('ust_id', null)->get();
        $urunler_slider = UrunDetay::with('urun')->where('goster_slider', 1)->take(5)->get();
        $urun_gunun_firsati = Urun::join('urun_detay', 'urun_detay.urun_id', 'urun.id')
            ->where('urun_detay.goster_gunun_firsati', 1)
            ->orderBy('urun.updated_at', 'desc')
            ->first();
        $goster_one_cikan = UrunDetay::with('urun')->where('goster_one_cikan', 1)->take(4)->get();
        $goster_cok_satan = UrunDetay::with('urun')->where('goster_cok_satan', 1)->take(4)->get();
        $goster_indirimli = UrunDetay::with('urun')->where('goster_indirimli', 1)->take(4)->get();

        
        return view('anasayfa', compact('data', 'urunler_slider', 'urun_gunun_firsati', 'goster_one_cikan', 'goster_cok_satan', 'goster_indirimli'));
    }
}
