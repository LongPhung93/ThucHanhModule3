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
<div class="div" style="margin-left: 15px">
    <form action="" method="post">
        @csrf
        Mã số đại lý <br>
        <input type="number" name="id" id="" value="{{$agency->id}}"><br>
        {{--    {!! showError($errors,'id') !!}--}}
        Tên đại lý<br>
        <input type="text" name="name" id="" value="{{$agency->name}}"><br>
        {{--    {!! showError($errors,'name') !!}--}}
        Điện thoại<br>
        <input type="text" name="phone" id="" value="{{$agency->phone}}"><br>
        {{--    {!! showError($errors,'phone') !!}--}}

        Email<br>
        <input type="text" name="email" id="" value="{{$agency->email}}"><br>
        {{--    {!! showError($errors,'email') !!}--}}
        Địa chỉ<br>
        <input type="text" name="address" id="" value="{{$agency->address}}"><br>
        {{--    {!! showError($errors,'address') !!}--}}
        Tên người quản lý<br>
        <input type="text" name="manager_name" id="" value="{{$agency->manager_name}}"><br>
        {{--    {!! showError($errors,'manager_name') !!}--}}
        Trạng thái hoạt<br>
        {{--    <input type="text" name="status" id=""><br>--}}
        <select name="status" class="form-control" style="width: 210px;">
            <option selected value="1">Hoạt động</option>
            <option  value="0">Không hoạt động</option>
        </select>
        <button type="submit" class="btn btn-success">Sửa</button>
    </form>
</div>
</body>
</html>

