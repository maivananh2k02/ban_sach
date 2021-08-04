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
        @php
            $i=1;
        @endphp
        @foreach($books as $item)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$item->name}}</td>
                <td><img src="uploads/{{$item->image}}" style="width: 100px;height: 100px"></td>
                <td>{{$item->category_name}}</td>
                <td>{{$item->author_name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->desc}}</td>
                <td><a class="btn btn-success" href="{{'show_update/'.$item->id}}">update</a></td>
                <td><a class="btn btn-danger" href="{{'delete/'.$item->id}}">delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
