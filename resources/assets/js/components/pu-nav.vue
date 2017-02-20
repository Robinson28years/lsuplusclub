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
				{src:"http://az619519.vo.msecnd.net/files/ElephantsWalking_EN-US8959341729_1366x768.jpg"},
				{src:"http://az608707.vo.msecnd.net/files/WilsonStump_EN-US9517346067_1366x768.jpg"},
				{src:"http://az619519.vo.msecnd.net/files/FoxRiverWisc_EN-US8778128592_1366x768.jpg"},
				{src:"http://az619519.vo.msecnd.net/files/CapeSebastian_EN-US9778833789_1366x768.jpg"},
				{src:"http://az608707.vo.msecnd.net/files/HallwylfjelletSunset_EN-US9423796363_1366x768.jpg"}
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
