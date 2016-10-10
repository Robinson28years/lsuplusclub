@extends('app')
@section('content')
    @include('admin.nav')
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-md-12 column">
                <button class="btn btn-info" style="margin-top: 30px">
                    <a href="library/create">添加书籍信息</a>
                </button>
                <table class="table" style="margin-top: 30px">
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
                            还书确认
                        </th>
                        <th>
                            借书情况
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $v)
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
                                @foreach($data1 as $ccc)
                                    @if($ccc->book_id == $v->book_id)
                                        @if($ccc->book_inter == '审核中'&& $ccc->return_time=='未归还')
                                            <button class="btn btn-success">
                                                <a href="{{url('library/'.$v->book_id.'/edit')}}">还书审核确认</a>
                                            </button>
                                        @endif
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal{{$v->book_id}}">
                                    借书详情查看
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal{{$v->book_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel{{$v->book_id}}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel{{$v->book_id}}">借书详情</h4>
                                            </div>
                                                <div class="modal-body">
                                                    <h4>书名：{{$v->book_name}}</h4>
                                                    @foreach($data1 as $ccc)
                                                    @if($ccc->book_id == $v->book_id && $ccc->return_time=='未归还' && $v->book_state =='已经借出')
                                                        <h4>借书人email:{{$ccc->borrower_email}}</h4>
                                                        <h4>借书时间:{{$ccc->lending_time}}</h4>
                                                        <h4>预计归还时间:{{$ccc->return_about_time}}</h4>
                                                    @endif
                                                    @endforeach
                                                </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection