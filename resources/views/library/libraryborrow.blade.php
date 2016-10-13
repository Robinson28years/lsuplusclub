@extends('app')
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
                    <tbody>
                    @foreach($data as $v)
                        @if($v->book_state != '已经借出')
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
                                    <input type="submit" class="btn btn-info" onclick="window.location.href='{{url('borrowinfo/'.$v->book_id)}}'" value="借书">
                                </td>
                            </tr>
                        @else
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
                                    <button class="btn btn-info" disabled>
                                        无法借书
                                    </button>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                {!! $data->render() !!}
            </div>
        </div>
    </div>
@endsection