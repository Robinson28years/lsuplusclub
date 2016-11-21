@extends('app')
@section('content')
    @include('admin.punav')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="text-center">

                <img src="{{Auth::user()->avatar}}"  width="400"  id="target">

                </div>
                <div class="col-md-6">
                    <form action="/avatar" method="post"
                          enctype="multipart/form-data">
                        <label for="file">Filename:</label>
                        <input type="file" name="avatar" id="avatar" />
                        <br/>
                        <input type="submit" name="submit" value="Submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script language="JavaScript">
        $(function(){
            $('#target').Jcrop({
                onChange: showCoords,
                onSelect: showCoords
            });
        });
        function showCoords(c)
        {
            $('#x').val(c.x);
            $('#y').val(c.y);
            $('#x2').val(c.x2);
            $('#y2').val(c.y2);
            $('#w').val(c.w);
            $('#h').val(c.h);
        };
    </script>
    @stop
