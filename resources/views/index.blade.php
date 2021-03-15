@extends('layout.master')
@section('content')

    <div class="menu">
        <ul class="parent ">
            <li class="active"> <a href="{{ URL::to('/home') }}"> Trang chủ </a></li>
            <li> <a href=""> Sản phẩm </a>
                <ul class="submenu">
                    @foreach($categorys as $category)
                        <li><a href="{{URL::to('/home/detail/'.$category->id)}}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li> <a href=""> Tin tức </a></li>
            <li> <a href=""> Liên hệ </a></li>
        </ul>
    </div>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
        @php
            $i = 0;
        @endphp
            @foreach ($slides as $slide)
            @php
                $i++;
            @endphp
                <div class="carousel-item {{ $i == 1 ? 'active' :''}}">
                    <img src="{{ asset('/storage/image/'.$slide->image) }}"  width="100%" height="500">
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <div class="container">
        <div class="row mt-4">
            @foreach($products as $pro)
                <div class="col-md-3 box">
                    <div class="card">
                        <div class="d-flex justify-content-around mt-2">
                            <img src="{{ asset('/storage/image/'.$pro->image) }}" height="160" width="220">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title ">{{$pro->name}}</h5>
                            <h6 class="card-title">Giá: {{number_format($pro->price)}} vnđ</h6>
                            <h6 class="card-title">Giảm giá: {{number_format($pro->discount)}} vnđ</h6>
                        </div>
                        <div class="di">
                            <h6>Số lượng</h6>
                                <input name="qty" type="number" min="1" value="1">
                                <input name="productid_hidden" type="hidden" value="{{$pro->id}}">
                                <button type="submit" class="btn btn-primary mt-2">Mua ngay</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


<script>
$('.DM').click(function(){
    $(' ul.droplow').toggleClass("show");
});
$('.DM1').click(function(){
    $(' ul.droplow1').toggleClass("show1");
});
$('.DM2').click(function(){
    $(' ul.droplow2').toggleClass("show2");
});
$('.DM3').click(function(){
    $(' ul.droplow3').toggleClass("show3");
});
$('.DM4').click(function(){
    $(' ul.droplow4').toggleClass("show4");
});
</script>
@include('layout.footer')
@endsection


