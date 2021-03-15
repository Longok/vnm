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
        <div class="col-xs-4 col-md-4 mx-auto">
            <form action="{{route('login')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="text-danger mt-3 ">
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
                    <h1>Login</h1>
                    <div class="form-group">
                        <!-- <label for="email">Email</label><br> -->
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">

                    </div>
                    <div class="form-group">
                        <!-- <label for="password">Password</label><br> -->
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>

                    <button type="submit"class="btn form-control btn-primary ">Login</button>
                </div>


            </form>
        </div>

    </div>
</div>
</body>
</html>
<style>
    .loginbox{
        position:absolute:
    }
    .loginbox h1{
        font-size:40px;
        border-bottom:3px solid #66ff66;
        padding:10px 0;
        margin-bottom:50px;
        color:black;
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
    /* .btn{
        background:none;
        font-size:20px;
        color:white;
        margin:15px 0;
        padding:12px 0;
        text-align:center;
        border:1px solid #66ff66;
        cursor: pointer;
    }
    .btn:hover{
         background:none;
    } */
</style>
