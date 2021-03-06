@extends('layouts.master')

@section('title','Anasayfa')

@section('head')

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Kategoriler</div>
                <div class="list-group categories">
                    @foreach($data as $data)
                    <a href="{{route('kategori', $data->slug)}}" class="list-group-item"><i class="fa fa-television"></i> {{$data->kategori_adi}}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                @for($i=0; $i<count($urunler_slider); $i++)
                    <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" class="{{$i == 0 ? 'active' : ''}}"></li>
                @endfor
                </ol>
                <div class="carousel-inner" role="listbox">
                    @foreach($urunler_slider as $index => $urun_detay)
                    <div class="item {{$index == 0 ? 'active' : ''}}">
                        <img src="http://via.placeholder.com/600x400?text=UrunResmi" alt="...">
                        <div class="carousel-caption">
                            {{$urun_detay->urun->urun_adi}}
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default" id="sidebar-product">
                <div class="panel-heading">G??n??n F??rsat??</div>
                <div class="panel-body">
                    <a href="{{route('urun',$urun_gunun_firsati->slug)}}">
                        <img src="http://via.placeholder.com/400x485?text=UrunResmi" class="img-responsive">
                        {{$urun_gunun_firsati->urun_adi}}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="products">
        <div class="panel panel-theme">
            <div class="panel-heading">??ne ????kan ??r??nler</div>
            <div class="panel-body">
                <div class="row">
                @foreach($goster_one_cikan as $urun_detay)
                    <div class="col-md-3 product">
                        <a href="#"><img src="http://via.placeholder.com/400x400?text=UrunResmi"></a>
                        <p><a href="#">{{$urun_detay->urun->urun_adi}}</a></p>
                        <p class="price">{{$urun_detay->urun->fiyati}} ???</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="products">
        <div class="panel panel-theme">
            <div class="panel-heading">??ok Satan ??r??nler</div>
            <div class="panel-body">
                <div class="row">
                @foreach($goster_cok_satan as $urun_detay)
                    <div class="col-md-3 product">
                        <a href="#"><img src="http://via.placeholder.com/400x400?text=UrunResmi"></a>
                        <p><a href="#">{{$urun_detay->urun->urun_adi}}</a></p>
                        <p class="price">{{$urun_detay->urun->fiyati}} ???</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="products">
        <div class="panel panel-theme">
            <div class="panel-heading">??ndirimli ??r??nler</div>
            <div class="panel-body">
                <div class="row">
                @foreach($goster_indirimli as $urun_detay)
                    <div class="col-md-3 product">
                        <a href="#"><img src="http://via.placeholder.com/400x400?text=UrunResmi"></a>
                        <p><a href="#">{{$urun_detay->urun->urun_adi}}</a></p>
                        <p class="price">{{$urun_detay->urun->fiyati}} ???</p>
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