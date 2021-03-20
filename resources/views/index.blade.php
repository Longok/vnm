<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{asset('./favicon.ico')}}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vinamilk</title>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="{{asset('/bootstrap.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
  <link rel="stylesheet" href="{{asset('/style.css')}}">
  <script src="{{asset('/asset/js/jquery-3.3.1.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
@include('layout.header')
<body>
    <div class="container-fluid">
        <div class="menu col-12 ">
            <ul class="parent col-lg-12 col-md-12 col-sm-6 col-xs-8">    
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
        <div class="carousel-inner col-12">
        @php
            $i = 0;
        @endphp
            @foreach ($slides as $slide)
            @php
                $i++;
            @endphp
                <div class="carousel-item {{ $i == 1 ? 'active' :''}}">
                    <img class="d-block " src="{{ asset('/storage/image/'.$slide->image) }}"  width="100%" height="500">
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
                <div class="box col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="d-flex justify-content-around mt-2">
                            <img src="{{ asset('/storage/image/'.$pro->image) }}" height="160" width="220px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title ">{{$pro->name}}</h5>
                            <h6 class="card-title">Giá: {{number_format($pro->price)}} vnđ</h6>
                            <h6 class="card-title">Giảm giá: {{number_format($pro->discount)}} vnđ</h6>
                        </div>
                        <div class="di">
                            <h6>Số lượng</h6>
                            <input class="input" name="qty" type="number" min="1" value="1">
                            <input name="productid_hidden" type="hidden" value="{{$pro->id}}">
                            <button type="submit" class="btn btn-primary mt-2 "> Mua hàng </button>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <span class="pagination justify-content-center">{{ $products->render() }}</span>
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
</div> 
</body>
</html>


