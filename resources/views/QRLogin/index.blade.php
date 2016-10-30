<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>qrlogin</title>
	</head>
	<body>
		 <img src="http://qr.topscan.com/api.php?text={{$randnum}}" width="300px"/>

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
							window.location.href = 'http://lsuplus.top/';
					}
				}
				xmlHttp.open("GET","QRLogin/{{$randnum}}",true);
				xmlHttp.send();
			}
			setInterval("polling()",1000);
		 </script>

	</body>
</html>
