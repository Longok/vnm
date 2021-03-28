<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{asset('./favicon.ico')}}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vinamilk</title>
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
<body>
@include('layout.headerAdmin')
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-2 p-0 ">
            <div class="sidebar">
                <h5 class=" mx-2 text-primary">Trang Admin</h5>
                <ul class="sub">
                    <li> <a href="#"class="DM"> Danh mục </a>
                        <ul class="droplow">
                            <li><a href="{{URL::to('/category')}}">Thêm danh mục</a></li>
                            <li><a href="{{URL::to('/all-category')}}">Danh sách danh mục</a></li>
                        </ul>
                    </li>
                    <li><a href="#"class="DM1">Sản phẩm</a>
                        <ul class="droplow1">
                            <li><a href="{{URL::to('/product')}}">Thêm sản phẩm</a></li>
                            <li><a href="{{URL::to('/all-product')}}">Danh sách sản phẩm</a></li>
                        </ul>
                    </li>
                    <li><a href="#"class="DM2">Side</a>
                        <ul class="droplow2">
                            <li><a href="{{URL::to('/slide')}}">Thêm Silde</a></li>
                            <li><a href="{{URL::to('/all-slide')}}">Danh sách Slide</a></li>
                        </ul>
                    </li>
                     <li><a href="#"class="DM3">User</a>
                        <ul class="droplow3">
                            <li><a href="{{URL::to('/list-user')}}">Danh sách User</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
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
</body>
</html>


