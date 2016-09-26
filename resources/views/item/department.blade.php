<div class="col-md-12 " style=" border-bottom:  2px solid #E4E3E5;
	    {{-- margin-top: 35px; --}}
		margin-bottom: 40px;
	">
		<div class="col-md-12" style="
    margin-top: 35px;
">
			<div class="col-md-4 col-md-offset-2">
				<img src="{{asset('assets/img/ban.jpg') }}" alt="" width="40%" style="border-radius: 50%;"  />
				<div class="col-md-12">
					<h3 class="col-md-offset-1">办公室</h3>
					1、负责俱乐部内部建设<br>
					2、负责办公用品的购买<br>
					3、做好会议及各项活动的短信通知，会议记录及纪律监督<br>
					4、负责俱乐部财务资金的管理<br>
					5、负责俱乐部图书的管理<br>
					6、负责俱乐部各项活动前期宣传以及通知工作<br>
					7、负责活动照片记录收集与及时的汇总上传<br>
					8、活动通讯的撰写<br>
					<div class="col-md-3 col-md-offset-1" style="
			    	margin-top: 35px;
					">


					@if(Auth::user())
					<form class="" action="/department" method="post">
						<input type="hidden" name="userid" value="{{Auth::user()->id}}">
					@else
					<form class="" action="" method="post">
					@endif
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="department" value="办公室">
						<input   type="submit"
						@if($department->department=="no")
							class="btn btn-success"
							value="我要加入办公室" style="

							"
						@elseif($department->department=="办公室")
								class="btn btn-success"
								value="你已是办公室一员^_^" style="

								" disabled
							@elseif($department->department=="技术部")
								class="btn btn-warning"
								value="无法加入" style="

								" disabled
							@endif
						>

					</form>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-1">
				<img src="{{asset('assets/img/jishu.jpg') }}" alt="" width="40%" style="border-radius: 50%;"  />
				<h3 class="col-md-offset-1">技术部</h3>
				1、负责计算机专业相关竞赛的举办。<br>
				2、负责俱乐部专业建设，学科技术兴趣小组的开展<br>
				3、为会员提供专业知识技能的交流平台<br>
				3、负责计算机专业科创基地的管理<br>
				5、负责专业老师，优秀毕业生讲座及互动的组织安排<br>
				6、负责俱乐部官方微信平台的建设维护和功能完善<br>
				7、负责几大宣传平台的动态更新和管理。<br><br>

			</div>
			<div class="col-md-3 col-md-offset-1" style="
			margin-top: 35px;
			">


			@if(Auth::user())
			<form class="" action="/department" method="post">
			<input type="hidden" name="userid" value="{{Auth::user()->id}}">
			@else
			<form class="" action="" method="post">
			@endif
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="department" value="技术部">
				<input  type="submit"
				@if($department->department=="no")
					class="btn btn-success"
					value="我要加入技术部" style="
	    			margin-left: 35px;
					"
				@elseif($department->department=="技术部")
					class="btn btn-success"
					value="你已是技术部一员^_^" style="
					margin-left: 35px;
					" disabled
				@elseif($department->department=="办公室")
					class="btn btn-warning"
					value="无法加入" style="
					margin-left: 35px;
					" disabled
				@endif

				>

			</form>
			</div>

		</div>
<div class="col-md-7 col-md-offset-3" style="
    margin-bottom: 35px;
">
</div>

</div>
