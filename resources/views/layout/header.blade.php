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
                        <a href ="{{URL::to('/logout')}}">Đăng Xuất</a>
                    @else
                        <a href ="{{URL::to('/login')}}">Đăng nhập</a>
                        <a href ="{{URL::to('/sign-up')}}">Đăng ký</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


