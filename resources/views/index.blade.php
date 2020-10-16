<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<a href="{{route('create')}}" class="btn btn-success">+Thêm mới</a>
<form action="{{route('search')}}" method="get">

    <input type="text" name="keyword" id="" placeholder="Nhập nội dung ô tìm kiếm">
    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
</form>
<hr>
@if(session('message'))

    <div class="alert bg-success" role="alert">

        {{session('message')}}

    </div>
@endif
<table class="table">
    <thead>
    <tr>
        <th scope="col">Mã số đại lý</th>
        <th scope="col">Tên đại lý</th>
        <th scope="col">Điện thoại</th>
        <th scope="col">Email</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Người quản lý</th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Chức năng</th>
    </tr>
    </thead>
    <tbody>
    @foreach($agencies as $key=>$agency)
    <tr>
        <th scope="row">{{$agency->id}}</th>
        <td>{{$agency->name}}</td>
        <td>{{$agency->phone}}</td>
        <td>{{$agency->email}}</td>
        <td>{{$agency->address}}</td>
        <td>{{$agency->manager_name}}</td>
        <td>
            @if($agency->status)
                Hoạt động
            @else
            Ngừng hoạt động
                @endif
            </td>
        <td>
            <a href="{{route('edit',$agency->id)}}">Edit</a>
            <a onclick="return confirm('Are you sure delete ?')" href="{{route('destroy',$agency->id)}}">Delete</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>

