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
				{src:"http://p1.bqimg.com/567571/1745746bb766f62d.jpg"},
				{src:"http://i1.piimg.com/567571/7cc7a0971fb6b1ee.jpg"},
				{src:"http://p1.bqimg.com/567571/adc4c1017f414ffd.jpg"},
				{src:"http://i1.piimg.com/567571/fef3fbabc0f883de.jpg"},
				{src:"http://p1.bqimg.com/567571/072f6917900448e5.jpg"}
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
