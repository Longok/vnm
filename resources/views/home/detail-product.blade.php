@extends('layout.master')
@section('content')
<body>
    <div class="mt-3 mx-4 text-primary">
        <a href="{{ URL::to('/home') }}">Trang chủ</a>
    </div>
    <div class="container">
            <div class="row mt-3">
                @foreach($products as $pro)
                    <div class="col-md-3 box">
                        <div class="card">
                            <div class="d-flex justify-content-around mt-2">
                                <img src="{{ asset('/storage/image/'.$pro->image) }}" height="200" width="250">
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
</body>
@endsection


