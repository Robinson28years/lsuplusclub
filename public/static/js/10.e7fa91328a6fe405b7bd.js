webpackJsonp([10],{117:function(e,t,a){function o(e){a(355)}var r=a(39)(a(330),a(423),o,null,null);e.exports=r.exports},330:function(e,t,a){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default={created:function(){var e=this;NProgress.start(),axios.get("api/books").then(function(t){for(var a=t.data.data.data,o=0;null!=a[o];)e.tableData.push(a[o]),o++;e.total=t.data.data.total,e.page_size=t.data.data.per_page,NProgress.done()}),null!=localStorage.getItem("user")&&(this.userLogin=!0)},methods:{open2:function(){this.$notify({title:"成功",message:"谢谢你的分享，好人一生平安",type:"success"})},submit:function(){var e=this;axios.post("api/books",this.form).then(function(t){e.tableData.unshift(t.data.data),e.dialogFormVisible=!1,e.open2()})},borrow:function(e,t){1!=this.userLogin?swal("抱歉,无法借阅","请先登录","warning"):axios.patch("api/books/"+t.id).then(function(e){t.state=e.data.data.state,t.borrower=e.data.data.borrower,t.return_time=e.data.data.return_time,swal("借阅成功！","享受你的阅读吧","success")}),console.log(e,t)},handleCurrentChange:function(e){var t=this;NProgress.start(),axios.get("api/books?page="+e).then(function(e){t.tableData=null,t.tableData=[];for(var a=e.data.data.data,o=0;null!=a[o];)t.tableData.push(a[o]),o++;NProgress.done()})}},data:function(){return{userLogin:!1,tableData:[],currentPage3:1,total:200,page_size:10,dialogFormVisible:!1,form:{name:"",description:"",isbn:"",address:""},formLabelWidth:"120px"}}}},341:function(e,t,a){t=e.exports=a(108)(!0),t.push([e.i,"body,body.stop-scrolling{overflow-y:scroll}.demo-table-expand{font-size:0}.demo-table-expand label{width:90px;color:#99a9bf}.demo-table-expand .el-form-item{margin-right:0;margin-bottom:0;width:50%}","",{version:3,sources:["D:/project/6.0/lsuplusclub/resources/lsuplusclub-homepage/src/views/library/index.vue"],names:[],mappings:"AAIA,yBACE,iBAAmB,CACpB,AACD,mBACE,WAAa,CACd,AACD,yBACE,WAAY,AACZ,aAAe,CAChB,AACD,iCACE,eAAgB,AAChB,gBAAiB,AACjB,SAAW,CACZ",file:"index.vue",sourcesContent:["\nbody {\n  overflow-y: scroll;\n}\nbody.stop-scrolling {\n  overflow-y: scroll;\n}\n.demo-table-expand {\n  font-size: 0;\n}\n.demo-table-expand label {\n  width: 90px;\n  color: #99a9bf;\n}\n.demo-table-expand .el-form-item {\n  margin-right: 0;\n  margin-bottom: 0;\n  width: 50%;\n}\n"],sourceRoot:""}])},355:function(e,t,a){var o=a(341);"string"==typeof o&&(o=[[e.i,o,""]]),o.locals&&(e.exports=o.locals);a(109)("58362b2f",o,!0)},423:function(e,t){e.exports={render:function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",{staticClass:"container col-md-8 col-md-offset-2",staticStyle:{"margin-top":"5%"}},[e.userLogin?a("el-button",{staticStyle:{"margin-bottom":"2%"},attrs:{type:"info"},on:{click:function(t){e.dialogFormVisible=!0}}},[e._v("\n    贡献图书 ^_^\n  ")]):e._e(),e._v(" "),a("el-table",{staticStyle:{width:"100%"},attrs:{data:e.tableData}},[a("el-table-column",{attrs:{type:"expand"},scopedSlots:e._u([{key:"default",fn:function(t){return[a("el-form",{staticClass:"demo-table-expand",attrs:{"label-position":"left",inline:""}},[a("el-form-item",{attrs:{label:"书名"}},[a("span",[e._v(e._s(t.row.name))])]),e._v(" "),a("el-form-item",{attrs:{label:"ISBN"}},[a("span",[e._v(e._s(t.row.isbn))])]),e._v(" "),a("el-form-item",{attrs:{label:"关键词"}},[a("span",[e._v(e._s(t.row.description))])]),e._v(" "),a("el-form-item",{attrs:{label:"贡献者"}},[a("span",[e._v(e._s(t.row.owner.name))])]),e._v(" "),a("el-form-item",{attrs:{label:"书籍位置"}},[a("span",[e._v(e._s(t.row.address))])]),e._v(" "),a("el-form-item",{attrs:{label:"借阅状态"}},[a("span",[e._v(e._s(t.row.state))])]),e._v(" "),"已经借出"==t.row.state?[a("el-form-item",{attrs:{label:"借阅者"}},[a("span",[e._v(e._s(t.row.borrower.name))])]),e._v(" "),a("el-form-item",{attrs:{label:"预计归还"}},[a("span",[e._v(e._s(t.row.return_time))])])]:e._e()],2)]}}])}),e._v(" "),a("el-table-column",{attrs:{label:"书名",prop:"name"}}),e._v(" "),a("el-table-column",{attrs:{label:"贡献者",prop:"owner.name"}}),e._v(" "),a("el-table-column",{attrs:{label:"关键词",prop:"description"}}),e._v(" "),a("el-table-column",{attrs:{label:"借阅情况",prop:"state"}}),e._v(" "),a("el-table-column",{attrs:{label:"操作"},scopedSlots:e._u([{key:"default",fn:function(t){return[a("el-button",{attrs:{disabled:"已经借出"==t.row.state,size:"small",type:"success"},on:{click:function(a){e.borrow(t.$index,t.row)}}},[e._v("借阅\n        ")])]}}])})],1),e._v(" "),a("div",{staticClass:"block",staticStyle:{"margin-bottom":"10%","margin-top":"5%"}},[a("el-pagination",{attrs:{"current-page":e.currentPage3,"page-size":e.page_size,layout:"prev, pager, next, jumper",total:e.total},on:{"current-change":e.handleCurrentChange,"update:currentPage":function(t){e.currentPage3=t}}})],1),e._v(" "),a("el-dialog",{attrs:{title:"图书信息",visible:e.dialogFormVisible},on:{"update:visible":function(t){e.dialogFormVisible=t}}},[a("el-form",{attrs:{"label-position":"left","label-width":"90px",model:e.form}},[a("el-form-item",{attrs:{required:"",label:"书名"}},[a("el-input",{model:{value:e.form.name,callback:function(t){e.form.name=t},expression:"form.name"}})],1),e._v(" "),a("el-form-item",{attrs:{required:"",label:"关键词"}},[a("el-input",{model:{value:e.form.description,callback:function(t){e.form.description=t},expression:"form.description"}})],1),e._v(" "),a("el-form-item",{attrs:{required:"",label:"ISBN"}},[a("el-input",{model:{value:e.form.isbn,callback:function(t){e.form.isbn=t},expression:"form.isbn"}})],1),e._v(" "),a("el-form-item",{attrs:{required:"",label:"放置地址"}},[a("el-input",{model:{value:e.form.address,callback:function(t){e.form.address=t},expression:"form.address"}})],1)],1),e._v(" "),a("div",{staticClass:"dialog-footer",slot:"footer"},[a("el-button",{on:{click:function(t){e.dialogFormVisible=!1}}},[e._v("取 消")]),e._v(" "),a("el-button",{attrs:{type:"primary"},on:{click:e.submit}},[e._v("确 定")])],1)],1)],1)},staticRenderFns:[]}}});
//# sourceMappingURL=10.e7fa91328a6fe405b7bd.js.map