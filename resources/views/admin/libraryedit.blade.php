@extends('app2')
@section('content')
    @include('admin.nav')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12 column">
                @if(count($errors)>0)
                    <div class="mark">
                        @if(is_object($errors))
                            @foreach($errors->all() as $error)
                                <p>{{$error}}</p>
                            @endforeach
                        @else
                            <p>{{$errors}}</p>
                        @endif
                    </div>
                @endif
                <form role="form" method="post" action="{{url('library/'.$data->book_id)}}" style="align-content: center">
                    <input type="hidden" name="_method" value="put">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputPassword1">贡献者姓名</label>
                        <input type="text" class="form-control" id="ordername" name="order_email" value="{{$data->order_email}}"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">书名</label>
                        <input type="text" class="form-control" id="bookname" name="book_name" value="{{$data->book_name}}"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">书的ISBN</label>
                        <input type="text" class="form-control" id="bookisbn" name="book_isbn" value="{{$data->book_isbn}}"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">书的关键字</label>
                        <input type="text" class="form-control" id="bookisbn" name="book_discription" value="{{$data->book_discription}}"/>
                    </div>
                    <input type="submit" class="btn btn-success" value="提交">
                    <input type="button" class="btn btn-info" onclick="window.location.href='/library'" value="返回">
                </form>
            </div>
        </div>
    </div>
@endsection