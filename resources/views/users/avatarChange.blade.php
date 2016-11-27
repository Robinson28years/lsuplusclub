@extends('app')
@section('content')
    @include('admin.punav')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="text-center">


                </div>
                <div class="col-md-6">
                    <form action="/crop/api" method="post"
                          enctype="multipart/form-data">
                        <img src="{{Auth::user()->avatar}}"  width="400"  id="target">
                        <input type="hidden" id="x" name="x" />
                        <input type="hidden" id="y" name="y" />
                        <input type="hidden" id="w" name="w" />
                        <input type="hidden" id="h" name="h" />
                        <br>
                        <input type="submit" class="form-control btn-success" name="submit" value="提交裁剪" />
                        <br>
                        <button type="button" class="form-control btn-danger" onclick="window.location.href='/user/{{Auth::user()->id}}'" >不裁剪</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script language="JavaScript">
        $(function(){
            $('#target').Jcrop({
                onChange: showCoords,
                onSelect: showCoords,
                allowResize: true,
                allowMove: true,
                aspectRatio: 1,
                dragEdges: true,
                baseClass: 'jcrop',
                createHandles: ['n','s','e','w','nw','ne','se','sw'],
                createDragbars: ['n','s','e','w'],
                createBorders: ['n','s','e','w'],
                drawBorders: true,
                shade: true,



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
        function showPreview(coords)
        {
            var rx = 100 / coords.w;
            var ry = 100 / coords.h;

            $('#preview').css({
                width: Math.round(rx * 500) + 'px',
                height: Math.round(ry * 370) + 'px',
                marginLeft: '-' + Math.round(rx * coords.x) + 'px',
                marginTop: '-' + Math.round(ry * coords.y) + 'px'
            });
        }
    </script>
    @stop
