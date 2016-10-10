@extends('app')
@section('content')
    @include('admin.punav')
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-md-12 column">
                <h3 style="text-align: center">
                    欢迎来到LsuPlus互联网+俱乐部图书区<small>仅俱乐部会员才可借书</small>
                </h3>
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#">书籍借阅情况</a>
                    </li>
                    <li>
                        <a href="{{url('borrow')}}">借书区</a>
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
                    </tr>
                    </thead>
                    @foreach($data as $v)
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
                        </tr>
                        </tbody>
                    @endforeach
                </table>
                {!! $data->render() !!}
            </div>
        </div>
    </div>
@endsection