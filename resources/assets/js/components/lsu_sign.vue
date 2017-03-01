<template lang="html">
<el-form :model="ruleForm2" :rules="rules2" ref="ruleForm2" label-width="100px" class="demo-ruleForm">
	<!-- <el-form-item label="年龄" prop="age">
    <el-input v-model.number="ruleForm2.age"></el-input>
  </el-form-item> -->
  <el-form-item label="姓名" prop="name">
    <el-input v-model.number="ruleForm2.name"></el-input>
  </el-form-item>
  <el-form-item label="长学号" prop="studentid">
    <el-input v-model.number="ruleForm2.studentid"></el-input>
  </el-form-item>
  <el-form-item label="学院" prop="college">
    <el-input v-model.number="ruleForm2.college"></el-input>
  </el-form-item>
  <el-form-item label="班级" prop="grades">
    <el-input v-model.number="ruleForm2.grades"></el-input>
  </el-form-item>
  <el-form-item label="联系方式(长号)" prop="phone">
    <el-input v-model.number="ruleForm2.phone"></el-input>
  </el-form-item>
  <el-form-item>
    <el-button type="primary" @click="submitForm('ruleForm2')">提交</el-button>
    <el-button @click="resetForm('ruleForm2')">重置</el-button>
  </el-form-item>
</el-form>
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
	  var checkName = (rule, value, callback) => {
        if (!value) {
          return callback(new Error('姓名不能为空'));
        }
		else {
			callback();
		}
      };
	  var checkStudentid = (rule, value, callback) => {
        if (!value) {
          return callback(new Error('学号不能为空'));
        }
		else {
			callback();
		}
      };
	  var checkCollege = (rule, value, callback) => {
        if (!value) {
          return callback(new Error('二级学院不能为空'));
        }
		else {
			callback();
		}
      };
	  var checkGrades = (rule, value, callback) => {
        if (!value) {
          return callback(new Error('班级不能为空'));
        }
		else {
			callback();
		}
      };
	  var checkPhone = (rule, value, callback) => {
        if (!value) {
          return callback(new Error('联系方式不能为空'));
        }
		else {
			callback();
		}
      };
      return {
        ruleForm2: {
          age: '',
		  name: '',
		  studentid: '',
		  grades: '',
		  college: '',
		  phone: ''
        },
        rules2: {
			age: [
              { validator: checkAge, trigger: 'blur' }
  		  ],
          name: [
            { validator: checkName, trigger: 'blur' }
		  ],
		  studentid: [
            { validator: checkStudentid, trigger: 'blur' }
          ],
          college: [
            { validator: checkCollege, trigger: 'blur' }
          ],
		  grades: [
            { validator: checkGrades, trigger: 'blur' }
          ],
          phone: [
            { validator: checkPhone, trigger: 'blur' }
          ]
        }
      };
    },
    methods: {
		open3() {
        this.$notify({
          title: '成功',
          message: '这是一条成功的提示消息',
          type: 'success'
        });
      },
      submitForm(formName) {
        this.$refs[formName].validate((valid) => {
          if (valid) {
			  axios.post('/acm/store', {
                   name : this.ruleForm2.name,
                   studentid: this.ruleForm2.studentid,
				   college : this.ruleForm2.college,
                   grades: this.ruleForm2.grades,
				   phone : this.ruleForm2.phone
               })
                   .then(function (response) {
                       console.log(response);
                   })
                   .catch(function (error) {
                       console.log(error);
                   });
				   this.open3();
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
