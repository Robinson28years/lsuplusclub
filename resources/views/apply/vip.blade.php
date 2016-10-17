@extends('app')
@section('content')
	<body>
	  <div class="col-md-6 col-md-offset-3" style="border-bottom: 2px solid #E4E3E5;

  	">
	  	<h3 style="
    margin-bottom: 30px;
">俱乐部会员申请</h3>
	  </div>
<div class="col-md-6 col-md-offset-3" style="
margin-top: 20px;
"
>
<form class="form" action="/vip/apply" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label>姓名</label>
		<input type="text" name="name"  class="form-control" value="{{Auth::user()->name}}" readonly>
	</div>
	<div class="form-group">
		<label>学号</label>
		<input type="text" name="schoolid"  class="form-control" value="" required="required">
	</div>
	<div class="form-group">
		<label>学院</label>
		<input type="text" name="college"  class="form-control" value="" required="required">
	</div>
	<div class="form-group">
		<label>班级</label>
		<input type="text" name="class"  class="form-control" value="" required="required">
	</div>
	<div class="form-group">
		<label>手机</label>
		<input type="text" name="phone"  class="form-control" value="" required="required">
	</div>
	<div class="form-group">
		<label>短号</label>
		<input type="text" name="sphone"  class="form-control" value="">
	</div>
	<div class="form-group">
		<label>邮箱</label>
		<input type="email" name="email"  class="form-control" value="{{Auth::user()->email}}" readonly>
	</div>
	<div class="form-group">
		<label>是否了解计算机专业</label>
		<div class="radio">
		  <label>
		    <input type="radio" name="cs2" id="optionsRadios1" value="是" checked>
		    是
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input type="radio" name="cs2" id="optionsRadios2" value="否">
		    否
		  </label>
		</div>

	</div>
	<div class="form-group">
		<label>为什么加入俱乐部</label>
		<div class="checkbox">
  		<label class="checkbox-inline">
    		<input type="checkbox" name="cs21" value="对计算机方面感兴趣">
    		对计算机方面感兴趣
  		</label>
		<label class="checkbox-inline">
    		<input type="checkbox" name="cs22" value="学习计算机专业技能（编程）">
    		学习计算机专业技能（编程）
  		</label>
		<br>
		<label>
    		<input type="checkbox" name="cs23" value="学习计算机的基础知识">
    		学习计算机的基础知识
  		</label>
		<label class="checkbox-inline">
			<input type="checkbox" name="cs24" value="找个解决电脑问题的地方">
			找个解决电脑问题的地方
		</label>
		<br>
		<label class="checkbox-inline">
			<input type="checkbox" name="cs25" value="不清楚，先加入看看">
			不清楚，先加入看看
		</label>
		<label class="checkbox-inline">
			<input type="checkbox" name="cs26" value="其他">
			其他
		</label>
		</div>
	</div>

	<div class="form-group">
		<label>感兴趣的方向/想学习的知识（不了解的同学请不要选择）</label>
		<div class="checkbox">
  		<label class="checkbox-inline">
    		<input type="checkbox" name="cs31" value="C/C++">
    		C/C++
  		</label>
		<label class="checkbox-inline">
    		<input type="checkbox" name="cs32" value="网页设计(html+css)">
    		网页设计(html+css)
  		</label>
		<br>
		<label>
    		<input type="checkbox" name="cs33" value="网站后端开发(Javaweb,PHP)">
    		网站后端开发(Javaweb,PHP)
  		</label>
		<label class="checkbox-inline">
			<input type="checkbox" name="cs34" value="Java">
			Java
		</label>
		<br>
		<label class="checkbox-inline">
			<input type="checkbox" name="cs35" value="linux">
			linux
		</label>
		<label class="checkbox-inline">
			<input type="checkbox" name="cs36" value="程序设计(ACM)">
			程序设计(ACM)
		</label>

		<br>
		<label>
			<input type="checkbox" name="cs37" value="安卓应用开发">
			安卓应用开发
		</label>
		<label class="checkbox-inline">
			<input type="checkbox" name="cs38" value="多媒体技术">
			多媒体技术
		</label>
		<br>
		<label>
			<input type="checkbox" name="cs39" value="游戏开发(Unity3D,Cocos2d)">
			游戏开发(Unity3D,Cocos2d)
		</label>
		<label class="checkbox-inline">
			<input type="checkbox" name="cs310" value="c#,.NET">
			c#,.NET
		</label>
	</div>
	</div>
	<label>想说的话</label>
	<textarea class='form-control' rows="5" name="cs4" ></textarea>
	<input type="hidden" name="isvip" value="审核中">
	 <input type="submit" class="form-control" value="提交申请" />
</form>


</body>

@endsection
