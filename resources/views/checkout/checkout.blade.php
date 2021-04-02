@extends('layout.master')
@section('content')
@include('layout.header')
<div class="container">         
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ URL::to('/home') }}">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thông tin đơn hàng</li>
        </ol>
        
        <div class="text-center">
            <p>Vui lòng điền thông tin gửi hàng</p>          
        </div> 
    </nav>
    <div class="row mt-4 text-primary">    
        <div class="col-8 mx-auto">  
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="alert-danger">
                <?php
                    $message = Session::get('Thongbao');
                    if($message){
                        echo '<span class="text-alert">'.$message.'</span>';
                        session::put('Thongbao',null);
                    }
                ?>
            </div>           
            <form action="{{URL::to('/save-info-customer')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                <div class="col-md-12">              
                    <div class="mt-3">            
                        <label for="">Tên khách hàng</label> 
                        <input type="text"class="form-control" placeholder="Họ và tên" name="name">        
                    </div>
                    <div class="mt-3">            
                        <label for="">Số điện thoại</label>       
                        <input type="text"class="form-control" placeholder="Số điện thoại" name="phone">        
                    </div>
                    <div class="mt-3">            
                        <label for="">Ghi chú</label>
                                
                        <textarea type="text" class="form-control ckeditor" placeholder="Ghi chú" name="note" ></textarea> 
                    </div>
                </div>    
                <div class="col-md-12">
                    <div class="mt-3">            
                        <!-- <label for="">Địa chỉ</label>      
                        <select class="form-control choose thanhpho" name="matp" id="thanhpho" >
                                <option value="0">--Chọn thành phố--</option>
                                   
                        </select>
                        <select class="form-control mt-3 choose quanhuyen" name="maqh" id="quanhuyen" >
                                <option value="0">--Chọn quận huyện--</option>
                                    
                        </select> 
                        <select class="form-control mt-3 choose xaphuong " name="xaid" id="xaphuong" >
                                <option value="0">--Chọn xã phường--</option>
                                   
                        </select> -->
                        <input type="text"class="form-control mt-3" placeholder="Địa chỉ nhận hàng" name="adress">   
                        <button type="submit" name="thanhtoan" class="btn btn-success btn-md mt-3 thanhtoan">Gửi</button>             
                    </div>                        
                </div>                    
            </form>         
        </div>
    </div>
</div> 
@include('layout.footer')
@endsection
@section('script')
  <script>
    $(document).ready(function(){
        $('.choose').change(function(){
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
            if(action =='thanhpho'){
                result = 'quanhuyen';
            }else{
                result = 'xaphuong';    
            }
            $.ajax({
                url:'{{url('/diachi')}}',
                method: 'post',
                data:{action:action,ma_id:ma_id,_token:_token},
                success:function(data){
                    $('#'+result).html(data);    
                }
            });
        });  
    })
  </script>                  
@endsection