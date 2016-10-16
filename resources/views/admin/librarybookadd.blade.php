@extends('app')
@section('content')
    @if(Auth::user()->admin==1)
        @include('admin.nav')
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    @if(count($errors)>0)
                        <table class="table">
                            <tbody>
                            @if(is_object($errors))
                                @foreach($errors->all() as $error)
                                    <tr class="danger">
                                        <td>
                                            {{$error}}
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="danger">
                                    <td>
                                        {{$errors}}
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    @endif
                    <form role="form" method="post" action="{{url('library')}}" style="align-content: center">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">贡献者姓名</label>
                            <input type="text" class="form-control" id="ordername" name="order_email"/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">书名</label>
                            <input type="text" class="form-control" id="bookname" name="book_name"/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">书的ISBN</label>
                            <input type="text" class="form-control" id="bookisbn" name="book_isbn" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">书的关键字</label>
                            <input type="text" class="form-control" id="bookisbn" name="book_discription"/>
                        </div>
                        <input type="submit" class="btn btn-success" value="提交">
                        <input type="button" class="btn btn-info" onclick="window.location.href='/library'" value="返回">
                    </form>
                </div>
            </div>
        </div>
    @else
        @include('admin.punav')
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    @if(count($errors)>0)
                        <table class="table">
                            <tbody>
                            @if(is_object($errors))
                                @foreach($errors->all() as $error)
                                    <tr class="danger">
                                        <td>
                                            {{$error}}
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="danger">
                                    <td>
                                        {{$errors}}
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    @endif
                    <form role="form" method="post" action="{{url('store')}}" style="align-content: center">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">贡献者姓名</label>
                            <input type="text" class="form-control" id="ordername" name="order_email"/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">书名</label>
                            <input type="text" class="form-control" id="bookname" name="book_name"/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">书的ISBN</label>
                            <input type="text" class="form-control" id="bookisbn" name="book_isbn" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">书的关键字</label>
                            <input type="text" class="form-control" id="bookisbn" name="book_discription"/>
                        </div>
                        <input type="submit" class="btn btn-success" value="提交">
                        <input type="button" class="btn btn-info" onclick="window.location.href='/library/index'" value="返回">
                    </form>
                </div>
            </div>
        </div>
    @endif
@endsection