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
<body>
<div class="header bg-light">
    <div class="row">
        <div class="col-12  ">
            <div class="d-flex ">
                <div class="col-sm-9 col-md-9">
                    <a href ="{{ URL::to('/home')}}"><img src="{{ asset('image/logo.jpg') }}" height="100" width="120"></a>
                </div>
                <!-- <div class="col-6">

                </div> -->
                <div class="col-sm-3 col-md-3 mt-5 d-block">
                <a href =""><i class="fas fa-user" style="font-size:22px;color:blue;"></i></a>
                    @if(Auth::check())
                        {{"Xin chào"}} {{Auth::user()->name}}
                        <a href ="{{URL::to('/admin')}}">Đăng Xuất</a>
                    @else
                        <a href ="{{URL::to('/login')}}">Đăng nhập</a>
                        <a href ="{{URL::to('/sign-up')}}">Đăng ký</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>