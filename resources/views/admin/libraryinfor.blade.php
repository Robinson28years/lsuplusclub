@extends('app2')
@section('content')
    @include('admin.nav')
    <div class="jumbotron">
        <div class="container">
            <h2>图书管理区
                <input type="submit" class="btn btn-info btn-lg pull-right" onclick="window.location.href='/library/create'" value="添加书籍">
            </h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12 column">

                <table class="table" style="margin-top: 15px">
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
                            操作
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
                                            <input type="submit" class="btn btn-info" onclick="window.location.href='{{url('library/'.$v->book_id.'/edit')}}'" value="还书确认">
                                        @endif
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <a id="delete-btn" href="javascript:;" onclick="delCate({{$v->book_id}})" class="btn btn-danger">删除</a>
                                <a id="delete-btn" href="{{url('library/editer/'.$v->book_id)}}" class="btn btn-info">修改</a>
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal{{$v->book_id}}">
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
                                                        @foreach($data2 as $ddd)
                                                            @if($ddd->email == $ccc->borrower_email)
                                                                <h4>借书人姓名:{{$ddd->name}}</h4>
                                                            @endif
                                                        @endforeach
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
                {!! $data->render() !!}
            </div>
        </div>
    </div>
    <script>
        function delCate(book_id) {
            swal({
                title: "是否删除?",
                text: "你这个操作将会删除这本书且不能恢复!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "是的，删除这本书",
                closeOnConfirm: false
            }, function(){
                $.post("{{url('library/')}}/"+book_id,{'_method':'delete','_token':"{{csrf_token()}}"}).done(function(data) {
                    location.href=location.href;
                }).error(function(data) {
                    swal("OMG", "删除操作失败了!", "error");
                });
            });
        }
    </script>
    {{--<script>--}}
        {{--//删除分类--}}
        {{--function delbook(book_id) {--}}
            {{--var serverAddress=serverAddress+"{{url('library/')}}/"+book_id;--}}
            {{--swal({--}}
                {{--title: "是否删除?",--}}
                {{--text: "你这个操作将会删除这本书且不能恢复!",--}}
                {{--type: "warning",--}}
                {{--showCancelButton:"true",--}}
                {{--showConfirmButton:"true",--}}
                {{--confirmButtonText:"确定",--}}
                {{--cancelButtonText:"取消",--}}
                {{--animation:"slide-from-top"--}}
            {{--}, function(){--}}
                {{--$.ajax({--}}
                    {{--type: "post",--}}
                    {{--url: serverAddress,--}}
                    {{--traditional: true,--}}
                    {{--dataType:"json",--}}
                    {{--_method: 'delete',--}}
                    {{--_token: "{{csrf_token()}}"--}}
                {{--});--}}
                {{--if(data==1){--}}
                    {{--swal("Deleted!", "Your imaginary file has been deleted.", "success");--}}
                {{--}--}}
            {{--})--}}
        {{--}--}}
    {{--</script>--}}
@endsection