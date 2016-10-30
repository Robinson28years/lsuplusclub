@extends('app')
@section('content')
	<div class="row clearfix" style="
margin-top: 11%;
">
</div>
	<div class="col-md-4 col-md-offset-4">

		<img src="http://qr.topscan.com/api.php?text={{$randnum}}" width="300px"/>
		<h1>App扫一扫即可登录</h1>
	</div>
		 <script>
		 	function polling(){
				var xmlHttp;
				if(window.XMLHttpRequest){
					xmlHttp = new XMLHttpRequest();

				}else{
					xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
				}

				xmlHttp.onreadystatechange = function(){
					if(xmlHttp.status == 200 && xmlHttp.readyState == 4){
						result = xmlHttp.responseText;
						if(result == 'true')
							window.location.href='/';
							// window.location.href = 'http://lsuplus.top/';
					}
				}
				xmlHttp.open("GET","QRLogin/{{$randnum}}",true);
				xmlHttp.send();
			}
			setInterval("polling()",1000);
		 </script>
@stop
