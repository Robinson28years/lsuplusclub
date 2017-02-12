<template lang="html">
<el-row type="flex" align="bottom">
	<el-col :span="10" :offset="7">
		<el-form :model="ruleForm2" :rules="rules2" ref="ruleForm2" label-width="100px" class="demo-ruleForm">
			<el-form-item
			    prop="email"
			    label="邮箱"
			    :rules="[
			      { required: true, message: '请输入邮箱地址', trigger: 'blur' },
			      { type: 'email', message: '请输入正确的邮箱地址', trigger: 'blur,change' }
			    ]"
			  >
			    <el-input v-model="ruleForm2.email"></el-input>
			  </el-form-item>
			 <el-form-item label="密码" prop="pass">
			    <el-input type="password" v-model="ruleForm2.pass" auto-complete="off"></el-input>
			 </el-form-item>
			 <el-form-item>
			    <el-button type="primary" @click="submitForm('ruleForm2')">提交</el-button>
			    <el-button @click="resetForm('ruleForm2')">重置</el-button>
			 </el-form-item>
		</el-form>
	</el-col>
</el-row>
</template>

<script>
export default {
	data() {
	 var checkAge = (rule, value, callback) => {
	   if (!value) {
		 return callback(new Error('年龄不能为空'));
	   }
	   setTimeout(() => {
		 if (!Number.isInteger(value)) {
		   callback(new Error('请输入数字值'));
		 } else {
		   if (value < 18) {
			 callback(new Error('必须年满18岁'));
		   } else {
			 callback();
		   }
		 }
	   }, 1000);
	 };
	 var validatePass = (rule, value, callback) => {
	   if (value === '') {
		 callback(new Error('请输入密码'));
	   } else {
		 if (this.ruleForm2.checkPass !== '') {
		   this.$refs.ruleForm2.validateField('checkPass');
		 }
		 callback();
	   }
	 };
	 var validatePass2 = (rule, value, callback) => {
	   if (value === '') {
		 callback(new Error('请再次输入密码'));
	   } else if (value !== this.ruleForm2.pass) {
		 callback(new Error('两次输入密码不一致!'));
	   } else {
		 callback();
	   }
	 };
	 return {
	   ruleForm2: {
		 email: '',
		 pass: '',
		 checkPass: '',
		 age: ''
	   },
	   rules2: {
		 pass: [
		   { validator: validatePass, trigger: 'blur' }
		 ],
		//  checkPass: [
		//    { validator: validatePass2, trigger: 'blur' }
		//  ],
		//  age: [
		//    { validator: checkAge, trigger: 'blur' }
		//  ]
	   }
	 };
   },
   methods: {
	 submitForm(formName) {
	   this.$refs[formName].validate((valid) => {
		 if (valid) {
		   axios.get('/skills')
		   		.then(response => console.log(response.data))
		 } else {
		   console.log('error submit!!');
		   return false;
		 }
	   });
	 },
	 resetForm(formName) {
	   this.$refs[formName].resetFields();
	 }
   }
 }
</script>

<style lang="css">
</style>
