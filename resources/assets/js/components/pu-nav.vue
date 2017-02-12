<template >
	<el-menu router theme="dark" default-active="1" class="el-menu-demo" mode="horizontal"  @select="handleSelect">
		<el-row>
			<el-col :span="20">
				<el-menu-item index="">
					<img src="http://ww2.sinaimg.cn/mw690/b8eae9cfgw1fax5upr2i4j21jk1jkn5s.jpg"  height="60" alt="">
				</el-menu-item>
			  <el-menu-item  index="1">处理中心</el-menu-item>
			  <el-submenu  index="2">
				<template slot="title">我的工作台</template>
				<el-menu-item  index="/">选项1</el-menu-item>
				<el-menu-item index="2">选项2</el-menu-item>
				<el-menu-item index="2-3">选项3</el-menu-item>
			  </el-submenu>
			  <el-menu-item index="3"><a href="https://www.ele.me" target="_blank">订单管理</a></el-menu-item>
			</el-col>
			<el-col :span="4" >
				<el-row>
					<el-menu-item  index="3"><el-col :span="12">登录</el-col></el-menu-item>
					<el-menu-item  index="4"><el-col :span="12">注册</el-col></el-menu-item>
				</el-row>
			</el-col>
		</el-row>
	</el-menu>

</template>

<script>
export default {
	mounted() {
		console.log('Component mounted.')
	},
	methods: {
	 handleSelect(key, keyPath) {
	   console.log(key, keyPath);
	 }
	  },
}
</script>

<style lang="css">
</style>
