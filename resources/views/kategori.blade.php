@extends('layouts.master')

@section('title' , $data[0  ]->kategori_adi)

@section('head')

@endsection

@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Anasayfa</a></li>
        <li><a href="#">Kategori</a></li>
        <li class="active">{{$data[0]->kategori_adi}}</li>
    </ol>
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">{{$data[0]->kategori_adi}}</div>
                <div class="panel-body">
                    <h3>Alt Kategoriler</h3>
                    <div class="list-group categories">
                        @foreach($data2 as $data2)
                        <a href="{{route('kategori',$data2->slug)}}" class="list-group-item"><i class="fa fa-television"></i> {{$data2->kategori_adi}}</a>
                        @endforeach
                    </div>
                    <!-- <h3>Fiyat Aralığı</h3>
                    <form>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> 100-200
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> 200-300
                                </label>
                            </div>
                        </div>
                    </form> -->
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="products bg-content">
                Sırala
                <a href="?order=coksatanlar" class="btn btn-default">Çok Satanlar</a>
                <a href="?order=yeni" class="btn btn-default">Yeni Ürünler</a>
                <hr>
                <div class="row">
                @if(count($urun) == 0)
                  <div class="col-md-12"> Bu kategoride henüz ürün bulunmamaktadır.</div> 
                @endif
                @foreach($urun as $urun)
                    <div class="col-md-3 product">
                        <a href="{{route('urun',$urun->slug)}}"><img src="http://via.placeholder.com/400x400?text=UrunResmi"></a>
                        <p><a href="{{route('urun',$urun->slug)}}">{{$urun->urun_adi}}</a></p>
                        <p class="price">{{$urun->fiyati}} ₺</p>
                        <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')

@endsection