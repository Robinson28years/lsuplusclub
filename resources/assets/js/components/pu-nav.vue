<template>
  <el-carousel :interval="4000" type="card" height="400px">
    <el-carousel-item  v-for="item in items">
      <img :src="item.src" style="height:120%;" alt="">
	  <!-- <h1>{{item}}</h1> -->
    </el-carousel-item>
  </el-carousel>
</template>

<script>
export default {
	data(){
		return {
			items:[
				{src:"http://imgsrc.baidu.com/forum/pic/item/e4dde71190ef76c6ec3d8e8c9d16fdfaae5167ad.jpg"},
				{src:"http://image60.360doc.com/DownloadImg/2013/04/1821/31734455_16.jpg"},
				{src:"http://img.article.pchome.net/00/22/53/47/pic_lib/wm/006.jpg"},
				{src:"http://image89.360doc.com/DownloadImg/2015/10/2315/60579626_15.jpg"},
				{src:"http://imglf0.ph.126.net/bGlzuUP0AVvhpBKqDtJ3_g==/6630351983629968105.jpg"}
				]
			}
	}

}
</script>


<style>
  .el-carousel__item h3 {
    color: #475669;
    font-size: 14px;
    opacity: 0.75;
    line-height: 200px;
    margin: 0;
  }

  .el-carousel__item:nth-child(2n) {
    background-color: #99a9bf;
  }

  .el-carousel__item:nth-child(2n+1) {
    background-color: #d3dce6;
  }
</style>
