<div class="header bg-light">
    <div class="row">
        <div class="col-12  ">
            <div class="d-flex ">
                <div class="col-sm-3 col-md-8">
                    <a href ="{{ URL::to('/home')}}"><img src="{{ asset('image/logo.jpg') }}" height="100" width="120"></a>
                </div>  
                <div class="col-sm-3 col-md-2 mt-5">
                    <a href="{{ URL::to('/show-cart')}}"><i class="fas fa-shopping-cart"></i> Giỏ hàng</a>
                </div>                    
                <div class="col-sm-6 col-md-2 mt-5">
                    <ul>
                    <!-- <li><a href =""><i class="fas fa-user" style="font-size:22px;color:blue;"></i></a></li> -->
                    @if(Auth::check())
                        <i class="fas fa-smile" style="color:blue"></i> {{"Xin chào:"}} {{Auth::user()->name}}
                        <li><a href ="{{URL::to('/logout')}}">Đăng Xuất</a></li>
                    @else
                        <li><a href ="{{URL::to('/login')}}"><i class="fas fa-user" style="font-size:18px;color:blue;"></i>  Đăng nhập</a></li>
                        <li><a href ="{{URL::to('/sign-up')}}" class="mx-4">Đăng ký</a></li>
                    @endif                
                    </ul>                   
                </div>                          
            </div>
        </div>       
    </div>
</div>


