webpackJsonp([9],{118:function(t,a,s){function e(t){s(357)}var r=s(39)(s(331),s(426),e,"data-v-32cdf04c",null);t.exports=r.exports},331:function(t,a,s){"use strict";Object.defineProperty(a,"__esModule",{value:!0}),a.default={name:"hello",mounted:function(){NProgress.start(),null!=localStorage.getItem("token")&&(this.noUser=!1,this.user=localStorage.getItem("user"),this.user=JSON.parse(this.user),"admin"==this.user.role&&(this.admin=!0),console.log(this.user)),NProgress.done()},methods:{logout:function(){localStorage.clear(),this.noUser=!0,this.$router.push("/home")}},data:function(){return{msg:"Welcome to Your Vue.js App",noUser:!0,user:null,admin:!1}}}},343:function(t,a,s){a=t.exports=s(108)(!0),a.push([t.i,".avatar[data-v-32cdf04c]{width:30px;border-radius:50%}.dropdown-menu[data-v-32cdf04c]{left:0}","",{version:3,sources:["D:/project/6.0/lsuplusclub/resources/lsuplusclub-homepage/src/views/nav/homepage.vue"],names:[],mappings:"AACA,yBACE,WAAY,AACZ,iBAAmB,CACpB,AA4BD,gCACE,MAAQ,CACT",file:"homepage.vue",sourcesContent:["\n.avatar[data-v-32cdf04c] {\n  width: 30px;\n  border-radius: 50%;\n}\n\n\n/*.dropdown-menu>li>a {*/\n\n\n/*display: block;*/\n\n\n/*padding: 3px 20px;*/\n\n\n/*clear: both;*/\n\n\n/*font-weight: 400;*/\n\n\n/*line-height: 1.72222;*/\n\n\n/*color: #fff;*/\n\n\n/*white-space: nowrap;*/\n\n\n/*}*/\n.dropdown-menu[data-v-32cdf04c] {\n  left: 0;\n}\n"],sourceRoot:""}])},357:function(t,a,s){var e=s(343);"string"==typeof e&&(e=[[t.i,e,""]]),e.locals&&(t.exports=e.locals);s(109)("58cc1890",e,!0)},426:function(t,a){t.exports={render:function(){var t=this,a=t.$createElement,s=t._self._c||a;return s("div",[s("header",[s("div",{staticClass:"container"},[s("div",{staticClass:"row"},[s("div",{staticClass:"col-md-12"},[s("nav",{staticClass:"navbar navbar-default"},[s("div",{staticClass:"container-fluid"},[t._m(0),t._v(" "),s("div",{staticClass:"collapse navbar-collapse",attrs:{id:"bs-example-navbar-collapse-1"}},[s("ul",{staticClass:"nav navbar-nav navbar-right"},[s("li",[s("router-link",{attrs:{to:"/home"}},[t._v("首页")])],1),t._v(" "),s("li",[s("router-link",{attrs:{to:"/forum"}},[t._v("论坛")])],1),t._v(" "),s("li",[s("router-link",{attrs:{to:"/library"}},[t._v("图书馆")])],1),t._v(" "),s("li",[s("router-link",{attrs:{to:"/group"}},[t._v("兴趣小组")])],1),t._v(" "),s("li",[s("router-link",{attrs:{to:"/activities"}},[t._v("活动")])],1),t._v(" "),t._m(1),t._v(" "),t.noUser?[s("li",[s("router-link",{attrs:{to:"/login"}},[t._v("登录")])],1),t._v(" "),s("li",[s("router-link",{attrs:{to:"/register"}},[t._v("注册")])],1)]:[s("li",[s("img",{staticClass:"media-object img-circle",staticStyle:{height:"50px",width:"50px"},attrs:{src:t.user.avatar}})]),t._v(" "),s("li",{staticClass:"dropdown"},[s("a",{staticClass:"dropdown-toggle",attrs:{href:"#","data-toggle":"dropdown"}},[t._v("\n                        "+t._s(t.user.name)+"\n                        "),s("strong",{staticClass:"caret"})]),t._v(" "),s("ul",{staticClass:"dropdown-menu"},[s("li",[s("router-link",{attrs:{to:{path:"/user/"+t.user.id}}},[t._v("个人中心")])],1),t._v(" "),s("li",[s("router-link",{attrs:{to:"/user/reset"}},[t._v("修改密码")])],1),t._v(" "),s("li",[s("router-link",{attrs:{to:"/user/avatar"}},[t._v("修改头像")])],1),t._v(" "),t.admin?s("li",[s("a",{attrs:{href:"/dashboard"}},[t._v("后台管理")])]):t._e(),t._v(" "),s("li",{staticClass:"divider"}),t._v(" "),s("li",[s("a",{on:{"~click":function(a){t.logout(a)}}},[t._v("注销")])])])])]],2)])])])])])])]),t._v(" "),s("router-view")],1)},staticRenderFns:[function(){var t=this,a=t.$createElement,s=t._self._c||a;return s("div",{staticClass:"navbar-header"},[s("button",{staticClass:"navbar-toggle collapsed",attrs:{type:"button","data-toggle":"collapse","data-target":"#bs-example-navbar-collapse-1"}},[s("span",{staticClass:"sr-only"},[t._v("Toggle navigation")]),t._v(" "),s("span",{staticClass:"icon-bar"}),t._v(" "),s("span",{staticClass:"icon-bar"}),t._v(" "),s("span",{staticClass:"icon-bar"})]),t._v(" "),s("a",{staticClass:"navbar-brand",attrs:{href:"index.html"}},[s("img",{attrs:{src:"https://i.loli.net/2017/09/27/59cb506de17bf.png",height:"60",width:"60",alt:"Logo"}})])])},function(){var t=this,a=t.$createElement,s=t._self._c||a;return s("li",[s("a",{attrs:{href:"#"}},[t._v("||")])])}]}}});
//# sourceMappingURL=9.69258799f228d310312a.js.map