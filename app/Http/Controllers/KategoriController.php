<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index($slug_kategoriadi)
    {
        $data = Kategori::where('slug', $slug_kategoriadi)->get();
        $data2 = Kategori::where('ust_id',$data[0]->id)->get();

        $order = request('order');
        if($order == 'coksatanlar'){
            $urun = $data[0]->urunler()
            ->join('urun_detay','urun_detay.urun_id','urun.id')
            ->orderBy('urun_detay.goster_cok_satan','desc')
            ->get();
        }else if($order=='yeni'){
            $urun = $data[0]->urunler()
            ->orderByDesc('urun.updated_at')
            ->get();
        }else{
            $urun = $data[0]->urunler;
        }

        return view('kategori', compact('data','data2','urun'));
    }
}
