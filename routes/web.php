<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','FrontController@index')->name('anasayfa');
Route::get('/kategori/{slug_kategoriadi}', 'KategoriController@index')->name('kategori');
Route::get('/urun/{slug_urunadi}', 'UrunController@index')->name('urun');
Route::get('/sepet', 'SepetController@index')->name('sepet');
Route::get('/odeme', 'OdemeController@index')->name('odeme');
Route::get('/siparisler', 'SiparisController@index')->name('siparisler');
Route::get('/siparisler/{id}', 'SiparisController@detay')->name('siparis');
Route::post('/ara','UrunController@ara')->name('urun_ara');
Route::get('/ara','UrunController@ara')->name('urun_ara');

Route::group(['prefix' => 'kullanici', 'as' => 'kullanici.'], function () {

    Route::get('/oturumac','KullaniciController@giris_form')->name('oturumac');
    Route::get('/kaydol','KullaniciController@kaydol_form')->name('kaydol');
    Route::post('/kaydol','KullaniciController@kaydol')->name('kaydol');
    Route::get('/sifre','KullaniciController@sifre_form')->name('sifre_form');

});

