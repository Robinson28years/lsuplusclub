@extends('app')
@section('content')
	{{-- @if (true)
        我有一条记录！
    @endif --}}
{{-- dd($request->user()); --}}
<div class="container-fluid">
	@include('admin.punav')
	<div class="row clearfix" style="

">
		<div class="col-md-12 column" style="

    padding-left: 0px;
    padding-right: 0px;
">
			<div class="carousel slide" id="carousel-311266">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-311266">
					</li>
					<li data-slide-to="1" data-target="#carousel-311266">
					</li>
					<li data-slide-to="2" data-target="#carousel-311266">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="" src="{{asset('assets/img/datu1.jpg') }}" width="100%"/>
						<div class="carousel-caption">
							<h1>
								大众创业、万众创新
							</h1>
							<p>
								伴随知识社会的来临，驱动当今社会变革的不仅仅是无所不在的网络，还有无所不在的计算、无所不在的数据、无所不在的知识。“互联网+”不仅仅是互联网移动了、泛在了、应用于某个传统行业了，更加入了无所不在的计算、数据、知识，造就了无所不在的创新，推动了知识社会以用户创新、开放创新、大众创新、协同创新为特点的创新2.0。
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="" src="{{asset('assets/img/datu2.jpg') }}" width="100%"/>
						<div class="carousel-caption">
							<h1>
								互联网+
							</h1>
							<p>
								“互联网+”是两化融合的升级版，将互联网作为当前信息化发展的核心特征，提取出来，并与工业、商业、金融业等服务业的全面融合。这其中关键就是创新，只有创新才能让这个+真正有价值、有意义。正因为此，“互联网+”被认为是创新2.0下的互联网发展新形态、新业态，是知识社会创新2.0推动下的经济社会发展新形态演进。
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="" src="{{asset('assets/img/datu3.jpg') }}" width="100%"/>
						<div class="carousel-caption">
							<h1>
								信息技术和传统产业的生态融合
							</h1>
							<p>
								我们需要持续以“互联网+”为驱动，鼓励产业创新、促进跨界融合、惠及社会民生，推动我国经济和社会的创新发展。“互联网+”是指利用互联网的平台、信息通信技术把互联网和包括传统行业在内的各行各业结合起来，从而在新领域创造一种新生态。
							</p>
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-311266" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-311266" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid-" style="
    margin-top: 35px;

">
	<div class="col-md-6 col-md-offset-1">
		<h3>互联网+</h3>
		<p>
			通俗的说，“互联网+”就是“互联网+各个传统行业”，但这并不是简单的两者相加，而是利用信息通信技术以及互联网平台，让互联网与传统行业进行深度融合，创造新的发展生态。它代表一种新的社会形态，即充分发挥互联网在社会资源配置中的优化和集成作用，将互联网的创新成果深度融合于经济、社会各域之中。
		</p>
	</div>
	<div class="col-md-3 col-md-offset-1">
		<h3>创新实践基地</h3>
		<p>
			位于18B401的互联网+实践基地,用于开展项目实践，创新开发，并定期开展项目活动，能力竞赛。对全体同学开放，希望同学们积极参与，相互提高。
		</p>
	</div>
	<div class="col-md-3 col-md-offset-1">
		<h3>Plus俱乐部</h3>
		<p>
			俱乐部在计算机系专业教师李庆华博士，李怀忠博士推动下，于2016年7月13日正式成立。本俱乐部旨在形成一个良好的计算机学习氛围，并依托于互联网+基地，开展项目实践。
		</p>
	</div>
	<div class="col-md-3 ">
		<h3>俱乐部宗旨</h3>
		<p>
			俱乐部以计算机爱好者为主要服务对象，以加强同学们对专业的认识、提升专业的兴趣及培养技术与学术交流能力为宗旨。通过这个平台，搭建起学生与老师之间沟通的桥梁。
		</p>
	</div>
	<div class="col-md-3 col-md-offset-1">
		<h3>基地建设目标</h3>
		<p>
			基地以“信息技术和传统产业的生态融合”为原则，把提升学生创新精神和实践能力作为目标，将计算机专业同学+其他专业同学有机结合起来，实现传统产业的换代升级，旨在新的领域创造一种新的生态。
		</p>
	</div>
</div>

	<div class="col-md-12 " style="border: 2px solid #E4E3E5;
	    margin-top: 35px;
		margin-bottom: 40px;
	">
		<div class="col-md-5 col-md-offset-4" style="
    margin-top: 35px;
">
			<h1 >不忘初心 · 方得始终</h1>

		</div>
<div class="col-md-7 col-md-offset-3" style="
    margin-bottom: 35px;
">
	<p>
		希望大家不要忘记来大学的目的，不要忘记来俱乐部的初衷。我们因爱好相聚，以技术发展为己任。
	</p>
</div>

</div>
<div class="container-fluid">
	<div class="col-md-12" style="
    margin-top: 30px;
    margin-bottom: 30px;
">


	<div class="col-md-1 col-md-offset-1">
		<h3>活动列表</h3>
	</div>
	<div class="col-md-2">
		<h5>
			Plus俱乐部是一个友爱，团结，追求技术的俱乐部。我们期待你的加入。
		</h5>

		<input class="btn btn-success"  type="submit" onclick="window.location.href='vip/apply'"
		@if($status->isvip=="no")
			value="申请成为正式会员"
		@else
		@if($status->isvip=="同意")
			value="已成为正式会员"
			disabled
		@elseif($status->isvip=="审核中")
			value="正在审核中"
			disabled
		@endif
	@endif
	>
		{{-- <p>
			{{$status->isvip}}
		</p> --}}
	</div>



@foreach($items as $item )
	@if($item->hide=="隐藏")
	@else
		<div class="col-md-2">
		<h5>
			{{$item->title}}
		</h5>
		<p style="color:rgb(149, 150, 129);">
			报名截止至：{{$item->timeover}}
		</p>
		<p style="color:rgb(149, 150, 129);">
			活动开始：{{$item->timestar}}
		</p>
		<div class="col-md-4">
		<input class="btn btn-info"  onclick="window.location.href='item/{{$item->id}}'" type="submit" value="详情">
		</div>

<div class="col-md-1">
@if(Auth::user())



	<form class="" action="signitem/{{Auth::user()->email}}" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="{{$item->id}}" value="1">

		@if($item->end=="截止")
			<input class="btn btn-danger"  type="submit" value="已截止" disabled>
		@else
			<input class="btn btn-success"  type="submit" value="报名">
		@endif

	</form>

@elseif(!Auth::user())
	<form class="" action="signitem" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="{{$item->id}}" value="1">
		@if($item->end=="截止")
			<input class="btn btn-danger"  type="submit" value="已截止" disabled>
		@else
			<input class="btn btn-success"  type="submit" value="报名">
		@endif
	</form>
@endif
</div>

	</div>
	@endif
@endforeach



	{{-- <div class="col-md-2">
		<h5>
			Plus俱乐部第一届程序设计大赛
		</h5>
		<p style="color:rgb(149, 150, 129);">
			报名截止至：2016年11月20日
		</p>
		<input class="btn btn-info"  data-toggle="modal" data-target="#myModal02" type="submit" value="详情">
		<input class="btn btn-success"  type="submit" onclick="window.location.href='signitem.php?item=item02'" value="报名">

	</div> --}}




</div>
</div>
<div class="container-fluid" style="
	border: 2px solid #E4E3E5;
	margin-top: 35px;
	margin-bottom: 15px;
	padding-top: 40px;
	padding-bottom: 40px;
">
	<div class="col-md-1 col-md-offset-1">
		<h3>推广平台</h3>
	</div>
	<div class="col-md-3">
		<h4>
			微信公众号
		</h4>
		<img src="{{asset('assets/img/gzh.jpg') }}" width=180px;height=180px; alt="" />
	</div>
	<div class="col-md-3">
		<h4>
			QQ群
		</h4>
		<img src="{{asset('assets/img/qq.jpg') }}" width=180px;height=180px; alt="" />
	</div>
	<div class="col-md-3">
		<h4>
			微博
		</h4>
		<img src="{{asset('assets/img/code2.png') }}" width=180px;height=180px; alt="" />
	</div>

</div>
<div class="col-md-12">
	<div class="col-md-7 col-md-offset-4">
		<p>Copyright © 2016 LSU PlusClub . All Rights Reserved. Designer:Chen Binbin</p>

	</div>
</div>
<script>
$(document).ready(function() {
	$('#carousel-311266').carousel({
		interval: 3000
	})
});
</script>
@endsection
