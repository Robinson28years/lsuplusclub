webpackJsonp([1],{"2lnh":function(t,e){},"3k2l":function(t,e){},"78BN":function(t,e){},Ijq9:function(t,e){},Luh7:function(t,e){},M154:function(t,e){},MzVL:function(t,e){},NHnr:function(t,e,i){"use strict";function n(t){i("RjyN")}function s(t){i("btQy")}function a(t){i("3k2l")}function r(t){i("ZMTL")}function l(t){i("Ijq9")}function o(t){i("kllH")}function u(t){i("2lnh")}function c(t){i("kJmd")}function h(t){i("RMDY")}function d(t){i("Luh7")}function p(t,e){return $e()(t)===$e()(e)}function v(t,e){return $e()(t)===$e()(e)}function m(t){i("uGHa")}function f(t){i("dpWl")}function g(t){return JSON.parse($e()(t))}function _(t){return JSON.parse($e()(t))}function b(t){i("MzVL")}function y(t){i("a2v7")}function w(t){i("M154")}function x(t){i("78BN")}Object.defineProperty(e,"__esModule",{value:!0});var V=i("7+uW"),S=i("v5o6"),k=i.n(S),$=i("/ocq"),C={name:"app"},E=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{attrs:{id:"app"}},[i("router-view")],1)},q=[],B={render:E,staticRenderFns:q},N=B,T=i("VU/8"),O=n,R=T(C,N,!1,O,null,null),W=R.exports,j=i("wmxo"),M=(j.a,String,String,String,String,String,String,Number,{name:"group",methods:{cleanStyle:j.a},props:{title:String,titleColor:String,labelWidth:String,labelAlign:String,labelMarginRight:String,gutter:[String,Number]}}),A=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",[t.title?i("div",{staticClass:"weui-cells__title",style:t.cleanStyle({color:t.titleColor}),domProps:{innerHTML:t._s(t.title)}}):t._e(),t._v(" "),t._t("title"),t._v(" "),i("div",{staticClass:"weui-cells",class:{"vux-no-group-title":!t.title},style:t.cleanStyle({marginTop:"number"==typeof t.gutter?t.gutter+"px":t.gutter})},[t._t("after-title"),t._v(" "),t._t("default")],2)],2)},I=[],F={render:A,staticRenderFns:I},L=F,U=i("VU/8"),D=s,H=U(M,L,!1,D,null,null),z=H.exports,P={name:"inline-desc"},K=function(){var t=this,e=t.$createElement;return(t._self._c||e)("span",{staticClass:"vux-label-desc"},[t._t("default")],2)},G=[],J={render:K,staticRenderFns:G},X=J,Y=i("VU/8"),Q=a,Z=Y(P,X,!1,Q,null,null),tt=Z.exports,et=i("0FxO"),it=i("2IIR"),nt=i("vLYD"),st=(Object(it.a)(),{name:"cell",components:{InlineDesc:tt},props:Object(it.a)(),created:function(){},beforeMount:function(){this.hasTitleSlot=!!this.$slots.title,this.$slots.value},computed:{labelStyles:function(){return Object(j.a)({width:Object(nt.a)(this,"labelWidth"),textAlign:Object(nt.a)(this,"labelAlign"),marginRight:Object(nt.a)(this,"labelMarginRight")})},valueClass:function(){return{"vux-cell-primary":"content"===this.primary||"left"===this.valueAlign,"vux-cell-align-left":"left"===this.valueAlign,"vux-cell-arrow-transition":!!this.arrowDirection,"vux-cell-arrow-up":"up"===this.arrowDirection,"vux-cell-arrow-down":"down"===this.arrowDirection}},labelClass:function(){return{"vux-cell-justify":"justify"===Object(nt.a)(this,"justify")}},style:function(){if(this.alignItems)return{alignItems:this.alignItems}}},methods:{onClick:function(){!this.disabled&&Object(et.a)(this.link,this.$router)}},data:function(){return{hasTitleSlot:!0,hasMounted:!1}}}),at=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"weui-cell",class:{"vux-tap-active":t.isLink||!!t.link,"weui-cell_access":t.isLink||!!t.link,"vux-cell-no-border-intent":!t.borderIntent,"vux-cell-disabled":t.disabled},style:t.style,on:{click:t.onClick}},[i("div",{staticClass:"weui-cell__hd"},[t._t("icon")],2),t._v(" "),i("div",{staticClass:"vux-cell-bd",class:{"vux-cell-primary":"title"===t.primary&&"left"!==t.valueAlign}},[i("p",[t.title||t.hasTitleSlot?i("label",{staticClass:"vux-label",class:t.labelClass,style:t.labelStyles},[t._t("title",[t._v(t._s(t.title))])],2):t._e(),t._v(" "),t._t("after-title")],2),t._v(" "),i("inline-desc",[t._t("inline-desc",[t._v(t._s(t.inlineDesc))])],2)],1),t._v(" "),i("div",{staticClass:"weui-cell__ft",class:t.valueClass},[t._t("value"),t._v(" "),t._t("default",[t._v(t._s(t.value))]),t._v(" "),t.isLoading?i("i",{staticClass:"weui-loading"}):t._e()],2),t._v(" "),t._t("child")],2)},rt=[],lt={render:at,staticRenderFns:rt},ot=lt,ut=i("VU/8"),ct=r,ht=ut(st,ot,!1,ct,null,null),dt=ht.exports,pt={components:{Group:z,Cell:dt},data:function(){return{msg:"Hello World!"}}},vt=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",[t._m(0),t._v(" "),i("group",{attrs:{title:"cell demo"}},[i("cell",{attrs:{title:"VUX",value:"cool","is-link":""}})],1)],1)},mt=[function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"vux-demo"},[i("h1")])}],ft={render:vt,staticRenderFns:mt},gt=ft,_t=i("VU/8"),bt=l,yt=_t(pt,gt,!1,bt,null,null),wt=(yt.exports,i("xNvf")),xt=(wt.a,Boolean,Number,String,String,String,Boolean,String,String,{name:"toast",mixins:[wt.a],props:{value:Boolean,time:{type:Number,default:2e3},type:{type:String,default:"success"},transition:String,width:{type:String,default:"7.6em"},isShowMask:{type:Boolean,default:!1},text:String,position:String},data:function(){return{show:!1}},created:function(){this.value&&(this.show=!0)},computed:{currentTransition:function(){return this.transition?this.transition:"top"===this.position?"vux-slide-from-top":"bottom"===this.position?"vux-slide-from-bottom":"vux-fade"},toastClass:function(){return{"weui-toast_forbidden":"warn"===this.type,"weui-toast_cancel":"cancel"===this.type,"weui-toast_success":"success"===this.type,"weui-toast_text":"text"===this.type,"vux-toast-top":"top"===this.position,"vux-toast-bottom":"bottom"===this.position,"vux-toast-middle":"middle"===this.position}},style:function(){if("text"===this.type&&"auto"===this.width)return{padding:"10px"}}},watch:{show:function(t){var e=this;t&&(this.$emit("input",!0),this.$emit("on-show"),this.fixSafariOverflowScrolling("auto"),clearTimeout(this.timeout),this.timeout=setTimeout(function(){e.show=!1,e.$emit("input",!1),e.$emit("on-hide"),e.fixSafariOverflowScrolling("touch")},this.time))},value:function(t){this.show=t}}}),Vt=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"vux-toast"},[i("div",{directives:[{name:"show",rawName:"v-show",value:t.isShowMask&&t.show,expression:"isShowMask && show"}],staticClass:"weui-mask_transparent"}),t._v(" "),i("transition",{attrs:{name:t.currentTransition}},[i("div",{directives:[{name:"show",rawName:"v-show",value:t.show,expression:"show"}],staticClass:"weui-toast",class:t.toastClass,style:{width:t.width}},[i("i",{directives:[{name:"show",rawName:"v-show",value:"text"!==t.type,expression:"type !== 'text'"}],staticClass:"weui-icon-success-no-circle weui-icon_toast"}),t._v(" "),t.text?i("p",{staticClass:"weui-toast__content",style:t.style,domProps:{innerHTML:t._s(t.text)}}):i("p",{staticClass:"weui-toast__content",style:t.style},[t._t("default")],2)])])],1)},St=[],kt={render:Vt,staticRenderFns:St},$t=kt,Ct=i("VU/8"),Et=o,qt=Ct(xt,$t,!1,Et,null,null),Bt=qt.exports,Nt=i("fZjL"),Tt=i.n(Nt),Ot=i("f6Hi"),Rt=(String,Boolean,{name:"icon",props:{type:String,isMsg:Boolean},computed:{className:function(){return"weui-icon weui_icon_"+this.type+" weui-icon-"+this.type.replace(/_/g,"-")}}}),Wt=function(){var t=this,e=t.$createElement;return(t._self._c||e)("i",{class:[t.className,t.isMsg?"weui-icon_msg":""]})},jt=[],Mt={render:Wt,staticRenderFns:jt},At=Mt,It=i("VU/8"),Ft=u,Lt=It(Rt,At,!1,Ft,null,null),Ut=Lt.exports,Dt=i("2LX0"),Ht=i.n(Dt),zt=i("Ewe+"),Pt=i.n(zt),Kt=i("nror"),Gt=i("lFEC"),Jt=i.n(Gt),Xt={email:{fn:Ht.a,msg:"邮箱格式"},"china-mobile":{fn:function(t){return Pt()(t,"zh-CN")},msg:"手机号码"},"china-name":{fn:function(t){return t.length>=2&&t.length<=6},msg:"中文姓名"}},Yt=(Ot.a,String,String,String,String,Number,String,Boolean,Boolean,String,String,String,Function,Number,Number,Boolean,String,String,String,String,String,String,Boolean,String,Number,String,String,String,Boolean,{email:{fn:Ht.a,msg:"邮箱格式"},"china-mobile":{fn:function(t){return Pt()(t,"zh-CN")},msg:"手机号码"},"china-name":{fn:function(t){return t.length>=2&&t.length<=6},msg:"中文姓名"}}),Qt={name:"x-input",created:function(){var t=this;this.currentValue=void 0===this.value||null===this.value?"":this.mask?this.maskValue(this.value):this.value,this.required&&void 0===this.currentValue&&(this.valid=!1),this.handleChangeEvent=!0,this.debounce&&(this._debounce=Object(Kt.a)(function(){t.$emit("on-change",t.currentValue)},this.debounce))},beforeMount:function(){this.$slots&&this.$slots["restricted-label"]&&(this.hasRestrictedLabel=!0)},beforeDestroy:function(){this._debounce&&this._debounce.cancel()},mixins:[Ot.a],components:{Icon:Ut,InlineDesc:tt,Toast:Bt},props:{title:{type:String,default:""},type:{type:String,default:"text"},placeholder:String,value:[String,Number],name:String,readonly:Boolean,disabled:Boolean,keyboard:String,inlineDesc:String,isType:[String,Function],min:Number,max:Number,showClear:{type:Boolean,default:!0},equalWith:String,textAlign:String,autocomplete:{type:String,default:"off"},autocapitalize:{type:String,default:"off"},autocorrect:{type:String,default:"off"},spellcheck:{type:String,default:"false"},novalidate:{type:Boolean,default:!1},iconType:String,debounce:Number,placeholderAlign:String,labelWidth:String,mask:String,shouldToastError:{type:Boolean,default:!0}},computed:{labelStyles:function(){return{width:this.labelWidthComputed||this.$parent.labelWidth||this.labelWidthComputed,textAlign:this.$parent.labelAlign,marginRight:this.$parent.labelMarginRight}},labelClass:function(){return{"vux-cell-justify":"justify"===this.$parent.labelAlign||"justify"===this.$parent.$parent.labelAlign}},pattern:function(){if("number"===this.keyboard||"china-mobile"===this.isType)return"[0-9]*"},labelWidthComputed:function(){var t=this.title.replace(/[^x00-xff]/g,"00").length/2+1;if(t<10)return t+"em"},hasErrors:function(){return Tt()(this.errors).length>0},inputStyle:function(){if(this.textAlign)return{textAlign:this.textAlign}},showWarn:function(){return!this.novalidate&&!this.equalWith&&!this.valid&&this.firstError&&(this.touched||this.forceShowError)}},methods:{onClickErrorIcon:function(){this.shouldToastError&&this.firstError&&(this.showErrorToast=!0),this.$emit("on-click-error-icon",this.firstError)},maskValue:function(t){return this.mask?Jt.a.toPattern(t,this.mask):t},reset:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";this.dirty=!1,this.currentValue=t,this.firstError="",this.valid=!0},clear:function(){this.currentValue="",this.focus()},focus:function(){this.$refs.input.focus()},blur:function(){this.$refs.input.blur()},focusHandler:function(t){this.$emit("on-focus",this.currentValue,t)},onBlur:function(t){this.setTouched(),this.validate(),this.$emit("on-blur",this.currentValue,t)},onKeyUp:function(t){"Enter"===t.key&&(t.target.blur(),this.$emit("on-enter",this.currentValue,t))},getError:function(){var t=Tt()(this.errors)[0];this.firstError=this.errors[t]},validate:function(){if(void 0!==this.equalWith)return void this.validateEqual();if(this.errors={},!this.currentValue&&!this.required)return void(this.valid=!0);if(!this.currentValue&&this.required)return this.valid=!1,this.errors.required="必填哦",void this.getError();if("string"==typeof this.isType){var t=Yt[this.isType];if(t){var e=this.currentValue;if("china-mobile"===this.isType&&"999 9999 9999"===this.mask&&(e=this.currentValue.replace(/\s+/g,"")),this.valid=t.fn(e),!this.valid)return this.forceShowError=!0,this.errors.format=t.msg+"格式不对哦~",void this.getError();delete this.errors.format}}if("function"==typeof this.isType){var i=this.isType(this.currentValue);if(this.valid=i.valid,!this.valid)return this.errors.format=i.msg,this.forceShowError=!0,void this.getError();delete this.errors.format}if(this.min){if(this.currentValue.length<this.min)return this.errors.min="最少应该输入"+this.min+"个字符哦",this.valid=!1,void this.getError();delete this.errors.min}if(this.max){if(this.currentValue.length>this.max)return this.errors.max="最多可以输入"+this.max+"个字符哦",this.valid=!1,void(this.forceShowError=!0);this.forceShowError=!1,delete this.errors.max}this.valid=!0},validateEqual:function(){return!this.equalWith&&this.currentValue?(this.valid=!1,void(this.errors.equal="输入不一致")):(this.dirty||this.currentValue.length>=this.equalWith.length)&&this.currentValue!==this.equalWith?(this.valid=!1,void(this.errors.equal="输入不一致")):void(!this.currentValue&&this.required?this.valid=!1:(this.valid=!0,delete this.errors.equal))}},data:function(){return{hasRestrictedLabel:!1,firstError:"",forceShowError:!1,hasLengthEqual:!1,valid:!0,currentValue:"",showErrorToast:!1}},watch:{mask:function(t){t&&this.currentValue&&(this.currentValue=this.maskValue(this.currentValue))},valid:function(){this.getError()},value:function(t){this.currentValue=t},equalWith:function(t){t&&this.equalWith?(t.length===this.equalWith.length&&(this.hasLengthEqual=!0),this.validateEqual()):this.validate()},currentValue:function(t){!this.equalWith&&t&&this.validateEqual(),t&&this.equalWith?(t.length===this.equalWith.length&&(this.hasLengthEqual=!0),this.validateEqual()):this.validate(),this.$emit("input",this.maskValue(t)),this._debounce?this._debounce():this.$emit("on-change",t)}}},Zt=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"vux-x-input weui-cell",class:{"weui-cell_warn":t.showWarn,disabled:t.disabled}},[i("div",{staticClass:"weui-cell__hd"},[t.hasRestrictedLabel?i("div",{style:t.labelStyles},[t._t("restricted-label")],2):t._e(),t._v(" "),t._t("label",[t.title?i("label",{staticClass:"weui-label",class:t.labelClass,style:{width:t.labelWidth||t.$parent.labelWidth||t.labelWidthComputed,textAlign:t.$parent.labelAlign,marginRight:t.$parent.labelMarginRight},attrs:{for:"vux-x-input-"+t.uuid},domProps:{innerHTML:t._s(t.title)}}):t._e(),t._v(" "),t.inlineDesc?i("inline-desc",[t._v(t._s(t.inlineDesc))]):t._e()])],2),t._v(" "),i("div",{staticClass:"weui-cell__bd weui-cell__primary",class:t.placeholderAlign?"vux-x-input-placeholder-"+t.placeholderAlign:""},[t.type&&"text"!==t.type?t._e():i("input",{directives:[{name:"model",rawName:"v-model",value:t.currentValue,expression:"currentValue"}],ref:"input",staticClass:"weui-input",style:t.inputStyle,attrs:{id:"vux-x-input-"+t.uuid,maxlength:t.max,autocomplete:t.autocomplete,autocapitalize:t.autocapitalize,autocorrect:t.autocorrect,spellcheck:t.spellcheck,type:"text",name:t.name,pattern:t.pattern,placeholder:t.placeholder,readonly:t.readonly,disabled:t.disabled},domProps:{value:t.currentValue},on:{focus:t.focusHandler,blur:t.onBlur,keyup:t.onKeyUp,input:function(e){e.target.composing||(t.currentValue=e.target.value)}}}),t._v(" "),"number"===t.type?i("input",{directives:[{name:"model",rawName:"v-model",value:t.currentValue,expression:"currentValue"}],ref:"input",staticClass:"weui-input",style:t.inputStyle,attrs:{id:"vux-x-input-"+t.uuid,maxlength:t.max,autocomplete:t.autocomplete,autocapitalize:t.autocapitalize,autocorrect:t.autocorrect,spellcheck:t.spellcheck,type:"number",name:t.name,pattern:t.pattern,placeholder:t.placeholder,readonly:t.readonly,disabled:t.disabled},domProps:{value:t.currentValue},on:{focus:t.focusHandler,blur:t.onBlur,keyup:t.onKeyUp,input:function(e){e.target.composing||(t.currentValue=e.target.value)}}}):t._e(),t._v(" "),"email"===t.type?i("input",{directives:[{name:"model",rawName:"v-model",value:t.currentValue,expression:"currentValue"}],ref:"input",staticClass:"weui-input",style:t.inputStyle,attrs:{id:"vux-x-input-"+t.uuid,maxlength:t.max,autocomplete:t.autocomplete,autocapitalize:t.autocapitalize,autocorrect:t.autocorrect,spellcheck:t.spellcheck,type:"email",name:t.name,pattern:t.pattern,placeholder:t.placeholder,readonly:t.readonly,disabled:t.disabled},domProps:{value:t.currentValue},on:{focus:t.focusHandler,blur:t.onBlur,keyup:t.onKeyUp,input:function(e){e.target.composing||(t.currentValue=e.target.value)}}}):t._e(),t._v(" "),"password"===t.type?i("input",{directives:[{name:"model",rawName:"v-model",value:t.currentValue,expression:"currentValue"}],ref:"input",staticClass:"weui-input",style:t.inputStyle,attrs:{id:"vux-x-input-"+t.uuid,maxlength:t.max,autocomplete:t.autocomplete,autocapitalize:t.autocapitalize,autocorrect:t.autocorrect,spellcheck:t.spellcheck,type:"password",name:t.name,pattern:t.pattern,placeholder:t.placeholder,readonly:t.readonly,disabled:t.disabled},domProps:{value:t.currentValue},on:{focus:t.focusHandler,blur:t.onBlur,keyup:t.onKeyUp,input:function(e){e.target.composing||(t.currentValue=e.target.value)}}}):t._e(),t._v(" "),"tel"===t.type?i("input",{directives:[{name:"model",rawName:"v-model",value:t.currentValue,expression:"currentValue"}],ref:"input",staticClass:"weui-input",style:t.inputStyle,attrs:{id:"vux-x-input-"+t.uuid,maxlength:t.max,autocomplete:t.autocomplete,autocapitalize:t.autocapitalize,autocorrect:t.autocorrect,spellcheck:t.spellcheck,type:"tel",name:t.name,pattern:t.pattern,placeholder:t.placeholder,readonly:t.readonly,disabled:t.disabled},domProps:{value:t.currentValue},on:{focus:t.focusHandler,blur:t.onBlur,keyup:t.onKeyUp,input:function(e){e.target.composing||(t.currentValue=e.target.value)}}}):t._e()]),t._v(" "),i("div",{staticClass:"weui-cell__ft"},[i("icon",{directives:[{name:"show",rawName:"v-show",value:!t.equalWith&&t.showClear&&""!==t.currentValue&&!t.readonly&&!t.disabled,expression:"!equalWith && showClear && currentValue !== '' && !readonly && !disabled"}],attrs:{type:"clear"},nativeOn:{click:function(e){return t.clear(e)}}}),t._v(" "),i("icon",{directives:[{name:"show",rawName:"v-show",value:t.showWarn,expression:"showWarn"}],staticClass:"vux-input-icon",attrs:{type:"warn",title:t.valid?"":t.firstError},nativeOn:{click:function(e){return t.onClickErrorIcon(e)}}}),t._v(" "),!t.novalidate&&t.hasLengthEqual&&t.dirty&&t.equalWith&&!t.valid?i("icon",{staticClass:"vux-input-icon",attrs:{type:"warn"},nativeOn:{click:function(e){return t.onClickErrorIcon(e)}}}):t._e(),t._v(" "),i("icon",{directives:[{name:"show",rawName:"v-show",value:!t.novalidate&&t.equalWith&&t.equalWith===t.currentValue&&t.valid,expression:"!novalidate && equalWith && equalWith === currentValue && valid"}],attrs:{type:"success"}}),t._v(" "),i("icon",{directives:[{name:"show",rawName:"v-show",value:t.novalidate&&"success"===t.iconType,expression:"novalidate && iconType === 'success'"}],staticClass:"vux-input-icon",attrs:{type:"success"}}),t._v(" "),i("icon",{directives:[{name:"show",rawName:"v-show",value:t.novalidate&&"error"===t.iconType,expression:"novalidate && iconType === 'error'"}],staticClass:"vux-input-icon",attrs:{type:"warn"}}),t._v(" "),t._t("right")],2),t._v(" "),i("toast",{attrs:{type:"text",width:"auto",time:600},model:{value:t.showErrorToast,callback:function(e){t.showErrorToast=e},expression:"showErrorToast"}},[t._v(t._s(t.firstError))])],1)},te=[],ee={render:Zt,staticRenderFns:te},ie=ee,ne=i("VU/8"),se=c,ae=ne(Qt,ie,!1,se,null,null),re=ae.exports,le=(Boolean,Boolean,Boolean,String,String,Boolean,String,Object,Array,{name:"x-button",props:{type:{default:"default"},disabled:Boolean,mini:Boolean,plain:Boolean,text:String,actionType:String,showLoading:Boolean,link:[String,Object],gradients:{type:Array,validator:function(t){return 2===t.length}}},methods:{onClick:function(){!this.disabled&&Object(et.a)(this.link,this.$router)}},computed:{noBorder:function(){return Array.isArray(this.gradients)},buttonStyle:function(){if(this.gradients)return{background:"linear-gradient(90deg, "+this.gradients[0]+", "+this.gradients[1]+")",color:"#FFFFFF"}},classes:function(){return[{"weui-btn_disabled":!this.plain&&this.disabled,"weui-btn_plain-disabled":this.plain&&this.disabled,"weui-btn_mini":this.mini,"vux-x-button-no-border":this.noBorder},this.plain?"":"weui-btn_"+this.type,this.plain?"weui-btn_plain-"+this.type:"",this.showLoading?"weui-btn_loading":""]}}}),oe=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("button",{staticClass:"weui-btn",class:t.classes,style:t.buttonStyle,attrs:{disabled:t.disabled,type:t.actionType},on:{click:t.onClick}},[t.showLoading?i("i",{staticClass:"weui-loading"}):t._e(),t._v(" "),t._t("default",[t._v(t._s(t.text))])],2)},ue=[],ce={render:oe,staticRenderFns:ue},he=ce,de=i("VU/8"),pe=h,ve=de(le,he,!1,pe,null,null),me=ve.exports,fe=(String,String,String,String,String,Number,Array,Object,Number,Boolean,{name:"checker",props:{defaultItemClass:String,selectedItemClass:String,disabledItemClass:String,type:{type:String,default:"radio"},value:[String,Number,Array,Object],max:Number,radioRequired:Boolean},watch:{value:function(t){this.currentValue=t},currentValue:function(t){this.$emit("input",t),this.$emit("on-change",t)}},data:function(){return{currentValue:this.value}}}),ge=function(){var t=this,e=t.$createElement;return(t._self._c||e)("div",{staticClass:"vux-checker-box"},[t._t("default")],2)},_e=[],be={render:ge,staticRenderFns:_e},ye=be,we=i("VU/8"),xe=d,Ve=we(fe,ye,!1,xe,null,null),Se=Ve.exports,ke=i("mvHQ"),$e=i.n(ke),Ce=i("pFYg"),Ee=i.n(Ce),qe=(String,Number,Object,Boolean,{name:"checker-item",props:{value:{type:[String,Number,Object],required:!0},disabled:Boolean},watch:{disabled:function(t){t&&"radio"===this.$parent.type&&this.value===this.$parent.currentValue&&(this.$parent.currentValue="")}},computed:{classNames:function(){var t=this,e="string"==typeof this.value||"number"==typeof this.value,i={"vux-tap-active":!this.disabled};if(this.$parent.defaultItemClass&&(i[this.$parent.defaultItemClass]=!0),this.$parent.selectedItemClass){var n=!1;if("radio"===this.$parent.type)e&&this.$parent.currentValue===this.value?n=!0:"object"===Ee()(this.value)&&v(this.$parent.currentValue,this.value)&&(n=!0);else if("string"==typeof this.value)this.$parent.currentValue.indexOf(this.value)>-1&&(n=!0);else if(this.$parent.currentValue&&this.$parent.currentValue.length){var s=this.$parent.currentValue.filter(function(e){return v(e,t.value)});n=s.length>0}i[this.$parent.selectedItemClass]=n}return this.$parent.disabledItemClass&&(i[this.$parent.disabledItemClass]=this.disabled),i}},methods:{select:function(){"radio"===this.$parent.type?this.selectRadio():this.selectCheckbox()},selectRadio:function(){this.disabled||(this.$parent.currentValue===this.value?this.$parent.radioRequired||(this.$parent.currentValue=""):this.$parent.currentValue=this.value),this.$emit("on-item-click",this.value,this.disabled)},selectCheckbox:function(){this.$parent.currentValue&&null!==this.$parent.currentValue||(this.$parent.currentValue=[]);var t="string"==typeof this.value||"number"==typeof this.value;if(!this.disabled){var e=-1;e=t?this.$parent.currentValue.indexOf(this.value):this.$parent.currentValue.map(function(t){return $e()(t)}).indexOf($e()(this.value)),e>-1?this.$parent.currentValue.splice(e,1):(!this.$parent.max||this.$parent.max&&null!==this.$parent.currentValue&&this.$parent.currentValue.length<this.$parent.max)&&(this.$parent.currentValue&&this.$parent.currentValue.length||(this.$parent.currentValue=[]),this.$parent.currentValue.push(this.value))}this.$emit("on-item-click",this.value,this.disabled)}}}),Be=function(){var t=this,e=t.$createElement;return(t._self._c||e)("div",{staticClass:"vux-checker-item",class:t.classNames,on:{click:t.select}},[t._t("default")],2)},Ne=[],Te={render:Be,staticRenderFns:Ne},Oe=Te,Re=i("VU/8"),We=m,je=Re(qe,Oe,!1,We,null,null),Me=je.exports,Ae=(String,{name:"tip",props:{align:{type:String,default:"left"}}}),Ie=function(){var t=this,e=t.$createElement;return(t._self._c||e)("div",{staticClass:"vux-group-tip",style:{"text-align":t.align}},[t._t("default")],2)},Fe=[],Le={render:Ie,staticRenderFns:Fe},Ue=Le,De=i("VU/8"),He=f,ze=De(Ae,Ue,!1,He,null,null),Pe=ze.exports,Ke=i("q5lo"),Ge=i("HHx2"),Je=i.n(Ge),Xe=(Ke.d,Ke.b,Ot.a,String,Boolean,String,Boolean,Array,Array,Number,Number,Boolean,Boolean,Boolean,String,Boolean,Ke.d,Ke.b,Ke.a,{name:"checklist",components:{Tip:Pe,Icon:Ut,InlineDesc:tt},filters:{getValue:Ke.d,getKey:Ke.b},mixins:[Ot.a],props:{name:String,showError:Boolean,title:String,required:{type:Boolean,default:!1},options:{type:Array,required:!0},value:{type:Array,default:function(){return[]}},max:Number,min:Number,fillMode:Boolean,randomOrder:Boolean,checkDisabled:{type:Boolean,default:!0},labelPosition:{type:String,default:"right"},disabled:Boolean},data:function(){return{currentValue:[],currentOptions:this.options,tempValue:""}},beforeUpdate:function(){if(this.isRadio){var t=this.currentValue.length;t>1&&(this.currentValue=[this.currentValue[t-1]]);var e=_(this.currentValue);this.tempValue=e.length?e[0]:""}},created:function(){this.handleChangeEvent=!0,this.value&&(this.currentValue=this.value,this.isRadio&&(this.tempValue=this.isRadio?this.value[0]:this.value)),this.randomOrder?this.currentOptions=Je()(this.options):this.currentOptions=this.options},methods:{getValue:Ke.d,getKey:Ke.b,getInlineDesc:Ke.a,getFullValue:function(){var t=Object(Ke.c)(this.options,this.value);return this.currentValue.map(function(e,i){return{value:e,label:t[i]}})},isDisabled:function(t){return!!this.checkDisabled&&(this._max>1&&(-1===this.currentValue.indexOf(t)&&this.currentValue.length===this._max))}},computed:{isRadio:function(){return void 0!==this.max&&1===this.max},_total:function(){return this.fillMode?this.options.length+1:this.options.length},_min:function(){if(!this.required&&!this.min)return 0;if(!this.required&&this.min)return Math.min(this._total,this.min);if(this.required){if(this.min){var t=Math.max(1,this.min);return Math.min(this._total,t)}return 1}},_max:function(){return(this.required||this.max)&&this.max?this.max>this._total?this._total:this.max:this._total},valid:function(){return this.currentValue.length>=this._min&&this.currentValue.length<=this._max}},watch:{tempValue:function(t){var e=t?[t]:[];this.$emit("input",e),this.$emit("on-change",e,Object(Ke.c)(this.options,e))},value:function(t){$e()(t)!==$e()(this.currentValue)&&(this.currentValue=t)},options:function(t){this.currentOptions=t},currentValue:function(t){var e=_(t);if(!this.isRadio){this.$emit("input",e),this.$emit("on-change",e,Object(Ke.c)(this.options,e));var i={};this._min&&(this.required?this.currentValue.length<this._min&&(i={min:this._min}):this.currentValue.length&&this.currentValue.length<this._min&&(i={min:this._min})),!this.valid&&this.dirty&&Tt()(i).length?this.$emit("on-error",i):this.$emit("on-clear-error")}}}}),Ye=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{class:t.disabled?"vux-checklist-disabled":""},[i("div",{directives:[{name:"show",rawName:"v-show",value:t.title,expression:"title"}],staticClass:"weui-cells__title"},[t._v(t._s(t.title))]),t._v(" "),t._t("after-title"),t._v(" "),i("div",{staticClass:"weui-cells weui-cells_checkbox"},t._l(t.currentOptions,function(e,n){return i("label",{staticClass:"weui-cell weui-check_label",class:{"vux-checklist-label-left":"left"===t.labelPosition},attrs:{for:"checkbox_"+t.uuid+"_"+n}},[i("div",{staticClass:"weui-cell__hd"},[i("input",{directives:[{name:"model",rawName:"v-model",value:t.currentValue,expression:"currentValue"}],staticClass:"weui-check",attrs:{type:"checkbox",name:"vux-checkbox-"+t.uuid,id:t.disabled?"":"checkbox_"+t.uuid+"_"+n,disabled:t.isDisabled(t.getKey(e))},domProps:{value:t.getKey(e),checked:Array.isArray(t.currentValue)?t._i(t.currentValue,t.getKey(e))>-1:t.currentValue},on:{change:function(i){var n=t.currentValue,s=i.target,a=!!s.checked;if(Array.isArray(n)){var r=t.getKey(e),l=t._i(n,r);s.checked?l<0&&(t.currentValue=n.concat([r])):l>-1&&(t.currentValue=n.slice(0,l).concat(n.slice(l+1)))}else t.currentValue=a}}}),t._v(" "),i("i",{staticClass:"weui-icon-checked vux-checklist-icon-checked"})]),t._v(" "),i("div",{staticClass:"weui-cell__bd"},[i("p",{domProps:{innerHTML:t._s(t.getValue(e))}}),t._v(" "),t.getInlineDesc(e)?i("inline-desc",[t._v(t._s(t.getInlineDesc(e)))]):t._e()],1)])})),t._v(" "),t._t("footer")],2)},Qe=[],Ze={render:Ye,staticRenderFns:Qe},ti=Ze,ei=i("VU/8"),ii=b,ni=ei(Xe,ti,!1,ii,null,null),si=ni.exports,ai=(window.localStorage,window.localStorage,{components:{Toast:Bt,XInput:re,XButton:me,Group:z,Cell:dt,Checker:Se,CheckerItem:Me,Checklist:si},data:function(){return{show1:!1,show2:!1,show3:!1,show4:!1,show5:!1,error:"",vaild1:!1,vaild2:!1,vaild3:!1,vaild4:!1,vaild5:!1,phone:"",name:"",college:"",grades:"",studentid:"",password:"",demo2:["stud"],commonList:[{key:"stud",value:"我是学生"},{key:"parent",value:"我是家长"}]}},methods:{click:function(){var t=this,e=new FormData;e.append("name",this.name),e.append("phone",this.phone),e.append("studentid",this.studentid),e.append("college",this.college),e.append("grades",this.grades),null!=this.$route.query.from&&e.append("from",this.$route.query.from),this.valid1=this.$refs.input01.valid,this.valid2=this.$refs.input02.valid,this.valid3=this.$refs.input03.valid,this.valid4=this.$refs.input04.valid,this.valid5=this.$refs.input05.valid,this.valid1&&this.valid2&&this.valid3&&this.valid4&&this.valid5?""==this.name||""==this.phone||""==this.studentid||""==this.college||""==this.grades?this.show3=!0:axios.post("api/sign",e).then(function(e){if("ok"==e.data)t.$router.push("/success?name="+t.name+"&phone="+t.phone+"&studentid="+t.studentid+"&college="+t.college+"&grades="+t.grades);else{var i=e.data;null!=i.phone?t.error="该手机号已存在":null!=i.studentid?t.error="该学号已存在":t.error=i,console.log(i.phone),t.show5=!0}}):this.show4=!0}}}),ri=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",[t._m(0),t._v(" "),i("p"),i("h5",{staticStyle:{color:"#a0a0a0","text-align":"center"}},[t._v("tips:苹果用户若出现无法输入，可长按输入框解决")]),t._v(" "),i("p"),t._v(" "),i("group",{staticStyle:{"margin-top":"0%"}},[i("x-input",{ref:"input01",attrs:{title:"姓名",name:"name",placeholder:"请输入姓名","is-type":"china-name"},model:{value:t.name,callback:function(e){t.name=e},expression:"name"}},[t._v(t._s(t.name))])],1),t._v(" "),i("group",[i("x-input",{ref:"input02",attrs:{title:"长学号",name:"studentid",placeholder:"请输入学号",min:11,max:11},model:{value:t.studentid,callback:function(e){t.studentid=e},expression:"studentid"}},[t._v(t._s(t.studentid))])],1),t._v(" "),i("group",[i("x-input",{ref:"input03",attrs:{title:"学院",name:"college",placeholder:"请输入二级学院",min:3},model:{value:t.college,callback:function(e){t.college=e},expression:"college"}},[t._v(t._s(t.college))])],1),t._v(" "),i("group",[i("x-input",{ref:"input04",attrs:{title:"班级",name:"grades",placeholder:"请输入班级",min:2},model:{value:t.grades,callback:function(e){t.grades=e},expression:"grades"}},[t._v(t._s(t.grades))])],1),t._v(" "),i("group",[i("x-input",{ref:"input05",attrs:{title:"手机长号",name:"phone",placeholder:"请输入手机号(长号)","is-type":"china-mobile"},model:{value:t.phone,callback:function(e){t.phone=e},expression:"phone"}},[t._v(t._s(t.phone))])],1),t._v(" "),i("toast",{attrs:{time:1e3},model:{value:t.show1,callback:function(e){t.show1=e},expression:"show1"}},[t._v("验证成功")]),t._v(" "),i("toast",{attrs:{time:1e3},model:{value:t.show2,callback:function(e){t.show2=e},expression:"show2"}},[t._v("验证失败")]),t._v(" "),i("toast",{attrs:{type:"warn",time:1e3},model:{value:t.show3,callback:function(e){t.show3=e},expression:"show3"}},[t._v("请填写完整")]),t._v(" "),i("toast",{attrs:{type:"warn",time:1e3},model:{value:t.show4,callback:function(e){t.show4=e},expression:"show4"}},[t._v("请填写正确")]),t._v(" "),i("toast",{attrs:{type:"warn",time:1e3,text:t.error},model:{value:t.show5,callback:function(e){t.show5=e},expression:"show5"}}),t._v(" "),i("group",[i("x-button",{attrs:{type:"primary","action-type":"button"},nativeOn:{click:function(e){return t.click(e)}}},[t._v("报名")])],1)],1)},li=[function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"vux-demo"},[i("img",{staticClass:"logo",attrs:{src:"https://wx4.sinaimg.cn/mw690/b8eae9cfgy1fpedj4z0b0j21k50zak92.jpg"}}),t._v(" "),i("h2",[t._v(" 丽水学院第十四届ACM程序设计大赛（个人赛）报名")])])}],oi={render:ri,staticRenderFns:li},ui=oi,ci=i("VU/8"),hi=y,di=ci(ai,ui,!1,hi,null,null),pi=di.exports,vi={name:"msg",props:["icon","title","description","buttons"],methods:{onClick:function(t,e){"function"==typeof t&&t(),e&&Object(et.a)(e,this.$router)}}},mi=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"weui-msg"},[i("div",{staticClass:"weui-msg__icon-area"},[i("i",{staticClass:"weui-icon_msg",class:"weui-icon-"+(t.icon||"success")})]),t._v(" "),i("div",{staticClass:"weui-msg__text-area"},[i("h2",{staticClass:"weui-msg__title",domProps:{innerHTML:t._s(t.title)}}),t._v(" "),i("p",{staticClass:"weui-msg__desc"},[t._t("description")],2),t._v(" "),t.description?i("p",{staticClass:"weui-msg__desc",domProps:{innerHTML:t._s(t.description)}}):t._e()]),t._v(" "),i("div",{staticClass:"weui-msg__opr-area"},[i("p",{staticClass:"weui-btn-area"},[t._t("buttons"),t._v(" "),t._l(t.buttons,function(e){return i("a",{staticClass:"weui-btn",class:"weui-btn_"+e.type,attrs:{href:"javascript:;"},on:{click:function(i){t.onClick(e.onClick,e.link)}}},[t._v(t._s(e.text))])})],2)])])},fi=[],gi={render:mi,staticRenderFns:fi},_i=gi,bi=i("VU/8"),yi=w,wi=bi(vi,_i,!1,yi,null,null),xi=wi.exports,Vi={name:"divider"},Si=function(){var t=this,e=t.$createElement;return(t._self._c||e)("p",{staticClass:"vux-divider"},[t._t("default")],2)},ki=[],$i={render:Si,staticRenderFns:ki},Ci=$i,Ei=i("VU/8"),qi=x,Bi=Ei(Vi,Ci,!1,qi,null,null),Ni=Bi.exports,Ti={components:{Msg:xi,Divider:Ni,XButton:me,Cell:dt,Group:z},created:function(){this.name=this.$route.query.name,this.studentid=this.$route.query.studentid,this.college=this.$route.query.college,this.grades=this.$route.query.grades,this.phone=this.$route.query.phone},methods:{changeIcon:function(){return this.icon&&"success"!==this.icon?"warn"===this.icon?void(this.icon="info"):"info"===this.icon?void(this.icon="waiting"):void("waiting"===this.icon&&(this.icon="success")):void(this.icon="warn")}},data:function(){return{phone:"",name:"",college:"",grades:"",studentid:"",description:"msg description",icon:"",buttons:[{type:"primary",text:"Primary button",onClick:this.changeIcon.bind(this)},{type:"default",text:"Secondary button",link:"/demo"}]}}},Oi=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticStyle:{"margin-top":"15%"}},[i("msg",{attrs:{title:"恭喜！报名成功",description:"比赛将于3月24日中午12:30开始，16:30结束。地点位于18B402。请大家提前15分钟来到教室。可以带任何纸质材料，但禁止使用电子设备。若报名信息有误，请发送邮件至 bb.chen@outlook.com 进行修改",icon:t.icon}}),t._v(" "),i("div",[i("group",[i("cell",{attrs:{title:"姓名"}},[i("div",[i("span",{staticStyle:{color:"green"}},[t._v(t._s(t.name))])])]),t._v(" "),i("cell",{attrs:{title:"学号"}},[i("div",[i("span",{staticStyle:{color:"green"}},[t._v(t._s(t.studentid))])])]),t._v(" "),i("cell",{attrs:{title:"二级学院"}},[i("div",[i("span",{staticStyle:{color:"green"}},[t._v(t._s(t.college))])])]),t._v(" "),i("cell",{attrs:{title:"班级"}},[i("div",[i("span",{staticStyle:{color:"green"}},[t._v(t._s(t.grades))])])]),t._v(" "),i("cell",{attrs:{title:"手机号"}},[i("div",[i("span",{staticStyle:{color:"green"}},[t._v(t._s(t.phone))])])])],1)],1)],1)},Ri=[],Wi={render:Oi,staticRenderFns:Ri},ji=Wi,Mi=i("VU/8"),Ai=Mi(Ti,ji,!1,null,null,null),Ii=Ai.exports;V.a.use($.a);var Fi=new $.a({routes:[{path:"/",name:"Sign",component:pi},{path:"/success",name:"Success",component:Ii}]});V.a.use($.a),window.axios=i("mtWM");k.a.attach(document.body),V.a.config.productionTip=!1,new V.a({router:Fi,render:function(t){return t(W)}}).$mount("#app-box")},RMDY:function(t,e){},RjyN:function(t,e){},ZMTL:function(t,e){},a2v7:function(t,e){},btQy:function(t,e){},dpWl:function(t,e){},kJmd:function(t,e){},kllH:function(t,e){},uGHa:function(t,e){}},["NHnr"]);
//# sourceMappingURL=app.8d79dc1d53cd2820a554.js.map