@extends('layout.master')
@section('content')
    <a href="{{route('create_book')}}" class="btn btn-success">Create Book</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Mã sách:</th>
            <th scope="col">Tên sách</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Thể loại sách</th>
            <th scope="col">Tác giả</th>
            <th scope="col">Giá tiền</th>
            <th scope="col">Mô tả chung</th>
            <th scope="col" colspan="2"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $item)
            <tr>
                <th scope="row">{{$item++}}</th>
                <td>Mark</td>
                <td>Mark</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
