webpackJsonp([1],{"1uuo":function(e,t){},NHnr:function(e,t,r){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=r("7+uW"),l={render:function(){var e=this.$createElement,t=this._self._c||e;return t("div",{attrs:{id:"app"}},[t("router-view")],1)},staticRenderFns:[]};var o=r("VU/8")({name:"App"},l,!1,function(e){r("ZDsj")},null,null).exports,i=r("/ocq"),s={render:function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",{staticClass:"hello"},[r("h1",[e._v(e._s(e.msg))]),e._v(" "),r("h2",[e._v("Essential Links")]),e._v(" "),e._m(0),e._v(" "),r("h2",[e._v("Ecosystem")]),e._v(" "),e._m(1)])},staticRenderFns:[function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("ul",[r("li",[r("a",{attrs:{href:"https://vuejs.org",target:"_blank"}},[e._v("\n        Core Docs\n      ")])]),e._v(" "),r("li",[r("a",{attrs:{href:"https://forum.vuejs.org",target:"_blank"}},[e._v("\n        Forum\n      ")])]),e._v(" "),r("li",[r("a",{attrs:{href:"https://chat.vuejs.org",target:"_blank"}},[e._v("\n        Community Chat\n      ")])]),e._v(" "),r("li",[r("a",{attrs:{href:"https://twitter.com/vuejs",target:"_blank"}},[e._v("\n        Twitter\n      ")])]),e._v(" "),r("br"),e._v(" "),r("li",[r("a",{attrs:{href:"http://vuejs-templates.github.io/webpack/",target:"_blank"}},[e._v("\n        Docs for This Template\n      ")])])])},function(){var e=this.$createElement,t=this._self._c||e;return t("ul",[t("li",[t("a",{attrs:{href:"http://router.vuejs.org/",target:"_blank"}},[this._v("\n        vue-router\n      ")])]),this._v(" "),t("li",[t("a",{attrs:{href:"http://vuex.vuejs.org/",target:"_blank"}},[this._v("\n        vuex\n      ")])]),this._v(" "),t("li",[t("a",{attrs:{href:"http://vue-loader.vuejs.org/",target:"_blank"}},[this._v("\n        vue-loader\n      ")])]),this._v(" "),t("li",[t("a",{attrs:{href:"https://github.com/vuejs/awesome-vue",target:"_blank"}},[this._v("\n        awesome-vue\n      ")])])])}]};r("VU/8")({name:"HelloWorld",data:function(){return{msg:"Welcome to Your Vue.js App"}}},s,!1,function(e){r("1uuo")},"data-v-d8ec41bc",null).exports;var a=r("RRo+"),u=r.n(a),c={created:function(){particlesJS.load("particles-js","static/js/particlesjs-config.json",function(){console.log("callback - particles.js config loaded")})},data:function(){return{error:"",show:!0,ruleForm2:{age:"",name:"",studentid:"",grades:"",college:"",phone:""},rules2:{age:[{validator:function(e,t,r){if(!t)return r(new Error("年龄不能为空"));setTimeout(function(){u()(t)?t<18?r(new Error("必须年满18岁")):r():r(new Error("请输入数字值"))},1e3)},trigger:"blur"}],name:[{validator:function(e,t,r){if(!t)return r(new Error("姓名不能为空"));r()},trigger:"blur"}],studentid:[{validator:function(e,t,r){if(!t)return r(new Error("学号不能为空"));r()},trigger:"blur"}],college:[{validator:function(e,t,r){if(!t)return r(new Error("二级学院不能为空"));r()},trigger:"blur"}],grades:[{validator:function(e,t,r){if(!t)return r(new Error("班级不能为空"));r()},trigger:"blur"}],phone:[{validator:function(e,t,r){if(!t)return r(new Error("联系方式不能为空"));r()},trigger:"blur"}]}}},methods:{open3:function(){this.$notify({title:"成功",message:"恭喜报名成功",type:"success"})},open4:function(){this.$notify({title:"抱歉",message:this.error,type:"warning"})},submitForm:function(e){var t=this;this.$refs[e].validate(function(e){var r=void 0;if(!e)return console.log("error submit!!"),!1;axios.post("/api/sign",{name:t.ruleForm2.name,studentid:t.ruleForm2.studentid,college:t.ruleForm2.college,grades:t.ruleForm2.grades,phone:t.ruleForm2.phone}).then(function(e){r=e.data,console.log(r),"ok"==r?(t.show=!1,t.open3()):(console.log(r),null!=r.phone?t.error="该手机号已存在":null!=r.studentid?t.error="该学号已存在":t.error=r,t.open4())})})},resetForm:function(e){this.$refs[e].resetFields()}}},v={render:function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",[r("div",{attrs:{id:"particles-js"}}),e._v(" "),r("div",{staticClass:"bg-bubbles"},[e._m(0),e._v(" "),r("transition",{attrs:{name:"el-fade-in-linear"}},[r("el-form",{directives:[{name:"show",rawName:"v-show",value:e.show,expression:"show"}],ref:"ruleForm2",staticClass:"demo-ruleForm login-container",attrs:{model:e.ruleForm2,rules:e.rules2,"label-position":"left","label-width":"80px"}},[r("h3",{staticClass:"title"},[e._v("丽水学院第十四届ACM程序设计大赛（个人赛）报名")]),e._v(" "),r("el-form-item",{attrs:{label:"姓名",prop:"name"}},[r("el-input",{attrs:{placeholder:"姓名"},model:{value:e.ruleForm2.name,callback:function(t){e.$set(e.ruleForm2,"name",e._n(t))},expression:"ruleForm2.name"}})],1),e._v(" "),r("el-form-item",{attrs:{label:"长学号",prop:"studentid"}},[r("el-input",{attrs:{placeholder:"长学号"},model:{value:e.ruleForm2.studentid,callback:function(t){e.$set(e.ruleForm2,"studentid",e._n(t))},expression:"ruleForm2.studentid"}})],1),e._v(" "),r("el-form-item",{attrs:{label:"学院",prop:"college"}},[r("el-input",{attrs:{placeholder:"学院"},model:{value:e.ruleForm2.college,callback:function(t){e.$set(e.ruleForm2,"college",e._n(t))},expression:"ruleForm2.college"}})],1),e._v(" "),r("el-form-item",{attrs:{label:"班级",prop:"grades"}},[r("el-input",{attrs:{placeholder:"班级"},model:{value:e.ruleForm2.grades,callback:function(t){e.$set(e.ruleForm2,"grades",e._n(t))},expression:"ruleForm2.grades"}})],1),e._v(" "),r("el-form-item",{attrs:{label:"手机长号",prop:"phone"}},[r("el-input",{attrs:{placeholder:"联系方式(长号)"},model:{value:e.ruleForm2.phone,callback:function(t){e.$set(e.ruleForm2,"phone",e._n(t))},expression:"ruleForm2.phone"}})],1),e._v(" "),r("el-form-item",[r("el-button",{attrs:{type:"primary"},on:{click:function(t){e.submitForm("ruleForm2")}}},[e._v("提交")]),e._v(" "),r("el-button",{on:{click:function(t){e.resetForm("ruleForm2")}}},[e._v("重置")]),e._v(" "),r("el-button",{on:{click:function(t){e.show=!e.show}}},[e._v("Click Me")])],1)],1)],1),e._v(" "),r("transition",{attrs:{name:"el-zoom-in-top"}},[r("el-form",{directives:[{name:"show",rawName:"v-show",value:!e.show,expression:"!show"}],staticClass:"demo-ruleForm login-container"},[r("h2",{staticClass:"title"},[r("i",{staticClass:"el-icon-success"}),e._v(" 恭喜！ 报名成功")]),e._v(" "),r("h4",{staticClass:"title"},[e._v("比赛将于3月24日中午12:30开始，17:30结束。地点位于18B408。请大家提前15分钟来到教室。可以带任何纸质材料，但禁止使用电子设备。")])])],1)],1)])},staticRenderFns:[function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("ul",[r("li"),e._v(" "),r("li"),e._v(" "),r("li"),e._v(" "),r("li"),e._v(" "),r("li"),e._v(" "),r("li"),e._v(" "),r("li"),e._v(" "),r("li"),e._v(" "),r("li"),e._v(" "),r("li"),e._v(" "),r("li"),e._v(" "),r("li"),e._v(" "),r("li"),e._v(" "),r("li"),e._v(" "),r("li"),e._v(" "),r("li"),e._v(" "),r("li"),e._v(" "),r("li"),e._v(" "),r("li"),e._v(" "),r("li")])}]};var m=r("VU/8")(c,v,!1,function(e){r("pqNb")},null,null).exports;n.default.use(i.a);var _=new i.a({routes:[{path:"/",name:"Sign",component:m}]}),p=r("zL8q"),d=r.n(p);r("tvR6");window.axios=r("mtWM"),n.default.use(d.a),n.default.config.productionTip=!1,new n.default({el:"#app",router:_,components:{App:o},template:"<App/>"})},ZDsj:function(e,t){},pqNb:function(e,t){},tvR6:function(e,t){}},["NHnr"]);
//# sourceMappingURL=app.ad1d7894258890e835ea.js.map