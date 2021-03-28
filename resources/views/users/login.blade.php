<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{asset('/bootstrap.css')}}">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="sign-in mx-5 ">
    <div class="row">
        <a href="{{ URL::to('home')}}">Trang chủ</a>
        <div class="col-6 col-md-3 mx-auto">
            <form action="{{route('login')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="text-danger mt-5 ">
                    @if($errors->any())
                        <div class="div">
                            @foreach($errors->all() as $err)
                                <li>{{$err}}</li>
                            @endforeach
                        </div>
                    @endif
                    @if(Session::has('thongbao'))
                        <div class="row">
                        {{Session::get('thongbao')}}
                        </div>
                    @endif
                </div>
                <div class="loginbox">
                    <h2>Đăng nhập</h2>
                    <div class="form-group">
                        <!-- <label for="email">Email</label><br> -->
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <!-- <label for="password">Password</label><br> -->
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                        <span>
                            <input type="checkbox" class="checkbox">
                            Ghi nhớ đăng nhập
                        </span><br>                       
                    <button type="submit"class="btn form-control btn-primary ">Login</button>
                    <span>
                            <a href="{{ URL::to('/sign-up')}}">Đăng ký</a>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<style>
    body{
        background:black;
    }
    a {
        color:white;
    }

    a:hover{
        color:white;
        text-decoration:none;
    }
    .loginbox{
        position:absolute;
        border: 1px solid #66ff66;
        padding:15px;
        margin-top:25px;
        border-radius:5px;
        box-shadow: 3px 3px none;
        color:white;
        background:none;
        outline:none;
    }    
    .loginbox h1{
        font-size:40px;
        border-bottom:1px solid #66ff66;
        padding:10px 0;
        margin-bottom:50px;
        color:none;
        margin-left:8px;
    }
    .form-group{
        color:white;
        border-bottom:1px solid #66ff66;
        margin:10px 0;
        padding:10px 0;
        font-size:20px;
    }
    .form-group input{
        background:none;
        border:none;
        outline:none;
        color:white;
        font-size:20px;
    }
    .btn{
        background:none;
        margin-top: 5px;
    }
    
</style>
