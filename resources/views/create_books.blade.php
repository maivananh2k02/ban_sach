@extends('layout.master')
@section('content')
    <form action="{{route('create_book')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   name="name" placeholder="Tên sách">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   name="image" placeholder="Ảnh">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Thể loại sách</label>
            <select class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="category">
                @foreach($category as $item)
                    <option value="{{$item['category_id']}}">{{$item['category_name']}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Thể loại sách</label>
            <select class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="author">
                @foreach($author as $i)
                    <option value="{{$i->author_id}}">{{$i->author_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   name="price" placeholder="Giá tiền">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   name="desc" placeholder="Mô tả chung">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
