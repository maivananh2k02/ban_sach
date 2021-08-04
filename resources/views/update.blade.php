@extends('layout.master')
@section('content')
    <form action="{{route('update',$book->id)}}" method="post" enctype="multipart/form-data">
        @csrf
{{--        {{dd($book->category_id)}}--}}
{{--        {{dd($category[0]->category_id)}}--}}
        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   name="name" placeholder="Tên sách" value="{{$book->name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   name="image" placeholder="Ảnh">
            <img src="uploads/{{$book->image}}" style="width: 200px">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Thể loại sách</label>
            <select name="category" class="form-control input-sm m-bot15">
                @foreach($category as $item)
                    @if($item->category_id==$book->category_id)
                        <option selected value="{{$item->category_id}}">{{$item->category_name}}</option>
                    @else
                        <option value="{{$item->category_id}}">{{$item->category_name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tac gia</label>
            <select name="author" class="form-control input-sm m-bot15">
                @foreach($author as $item)
                    @if($item->author_id==$book->author_id)
                        <option selected
                                value="{{$item->author_id}}">{{$item->author_name}}</option>
                    @else
                        <option value="{{$item->author_id}}">{{$item->author_name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   name="price" placeholder="Giá tiền" value="{{$book->price}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   name="desc" placeholder="Mô tả chung" value="{{$book->desc}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

