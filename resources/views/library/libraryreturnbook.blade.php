@extends('app')
@section('content')
    <div class="container-fluid">
        @include('admin.punav')
        <div class="row clearfix">
            <div class="col-md-12 column">
                <h3 style="text-align: center">
                    欢迎来到LsuPlus互联网+俱乐部还书区
                </h3>
                <ul class="nav nav-tabs">
                    <li>
                        <a href="{{url('library/index')}}">书籍借阅情况</a>
                    </li>
                    <li>
                        <a href="{{url('borrow')}}">借书区</a>
                    </li>
                    <li class="active">
                        <a href="#">还书区</a>
                    </li>
                </ul>
                <table class="table">
                    <thead>
                    <tr>
                        <th>
                            书名
                        </th>
                        <th>
                            书籍提供者
                        </th>
                        <th>
                            ISBN
                        </th>
                        <th>
                            书籍关键字
                        </th>
                        <th>
                            状态
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                    </thead>
                    @foreach($department as $v)
                        @if($v->return_time == '未归还')
                            <tbody>
                            <tr class="success">
                                <td>
                                    {{$v->book_name}}
                                </td>
                                <td>
                                    {{$v->order_email}}
                                </td>
                                <td>
                                    {{$v->book_isbn}}
                                </td>
                                <td>
                                    {{$v->book_discription}}
                                </td>
                                <td>
                                    {{$v->book_state}}
                                </td>
                                <td>
                                    @if($v->book_inter == null)
                                        <button class="btn btn-success">
                                            <a href="{{url('returnbook1/'.$v->book_id)}}">还书</a>
                                        </button>
                                    @else
                                        <button class="btn btn-success" disabled>
                                            {{$v->book_inter}}
                                        </button>
                                    @endif
                                </td>
                            </tr>
                            </tbody>
                        @endif
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection