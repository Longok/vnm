@extends('layout.master')
@include('layout.headerAdmin')
@section('content')
<div class="mx-4 mt-3 text-primary">
    <h6><a href="{{URL::to('/admin')}}">Trang Admin</a></h6>
</div>
<div class="col-md-12 mx-auto">
    <table class="table table-hover table-bordered mt-5 text-primary">
        <thead>
                    <tr class="text-center">
                        <th scope="col-4" class="">#</th>
                        <th scope="col-4" class="">Tên</th>
                        <th scope="col-4" class="">Email</th>
                        <th scope="col-4" class="">Password</th>
                        <th scope="col-4" class="">Roles</th>
                        <th scope="col-4" class="">Sửa | Xóa</th>
                    </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr class="text-center">
                    <td scope="row">{{$user->id}}</td>
                    <td scope="row">{{$user->name}}</td>
                    <td scope="row">{{$user->email}}</td>
                    <td scope="row">{{$user->password}}</td>
                    <td scope="row">{{$user->roles}}</td>
                    <td>
                        <a href="">Sửa |</a>
                        <a href="">Xóa</a>
                    </td>
                </tr>
             @endforeach
        </tbody>
    </table>
</div>

@endsection
