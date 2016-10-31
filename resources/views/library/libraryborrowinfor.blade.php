@extends('app2')
@section('content')
    <div class="container-fluid">
        @include('admin.punav')
        <div class="row clearfix">
            <div class="col-md-12 column">
                <h3 style="text-align: center">
                    欢迎来到LsuPlus互联网+俱乐部借书区
                </h3>
                <ul class="nav nav-tabs">
                    <li>
                        <a href="{{url('library/index')}}">书籍借阅情况</a>
                    </li>
                    <li class="active">
                        <a href="#">借书区</a>
                    </li>
                    <li>
                        <a href="{{url('returnbook')}}">还书区</a>
                    </li>
                </ul>

                <h3 style="text-align: center">
                    借书清单<strong>请如实填写！</strong>
                </h3>
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
                @foreach($ccc as $c)
                    @foreach($bbb as $b)
                    <form class="form" action="{{url('borrowcreate/'.$c->book_id)}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label >书名：</label>
                            <input type="text" class="form-control" name="book_name" value="{{$c->book_name}}" readonly>
                        </div>
                        <div class="form-group">
                            <label >借书人：</label>
                            <input type="email" class="form-control" name="borrower_email" value="{{Auth::user()->email}}" readonly>
                        </div>
                        <div class="form-group">
                            <label >借书时间</label>
                            <input type="text" class="form-control"  value="{{date('Y年m月d日')}}" name="lending_time" readonly>
                        </div>
                        <div class="form-group">
                            <label >手机号（长号）：</label>
                            <input type="text" class="form-control" name="borrower_phone" value="{{$b->phone}}">
                        </div>
                        <div class="form-group">
                            <label >预计还书时间</label>
                            <input type="date" class="form-control" name="return_about_time">
                        </div>
                        <button type="submit" class="btn btn-info">借书提交</button>
                        <input class="btn btn-info"  type="button" onclick="window.location.href='/borrow'" value="返回">
                    </form>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection
