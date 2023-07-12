/*! For license information please see 1795.js.LICENSE.txt */
"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[1795],{1795:(t,r,e)=>{e.r(r),e.d(r,{default:()=>k});var n=e(821);function o(t){return o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},o(t)}var i={class:"container"},a={class:"col-sm-4"},s=(0,n.uE)('<h2>Reset Password</h2><div class="alert alert-danger col-sm-12" id="Error" style="display:none;"><span></span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="alert alert-success col-sm-12" id="Success" style="display:none;"><span></span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>',3),c={key:0,class:"alert alert-danger"},u=(0,n._)("input",{type:"hidden",name:"base_url",id:"base_url",value:"/"},null,-1),l=(0,n._)("br",null,null,-1),f=(0,n._)("br",null,null,-1),p=(0,n._)("br",null,null,-1),d=(0,n._)("input",{type:"submit",name:"resetpassword",value:"Reset Password",id:"resetpassword",class:"btn btn-success submit"},null,-1);var h=e(7215),y=e(9669),v=e.n(y),m=e(2201),w=e(9755),g=e.n(w);function b(t){return b="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},b(t)}function _(){_=function(){return t};var t={},r=Object.prototype,e=r.hasOwnProperty,n=Object.defineProperty||function(t,r,e){t[r]=e.value},o="function"==typeof Symbol?Symbol:{},i=o.iterator||"@@iterator",a=o.asyncIterator||"@@asyncIterator",s=o.toStringTag||"@@toStringTag";function c(t,r,e){return Object.defineProperty(t,r,{value:e,enumerable:!0,configurable:!0,writable:!0}),t[r]}try{c({},"")}catch(t){c=function(t,r,e){return t[r]=e}}function u(t,r,e,o){var i=r&&r.prototype instanceof p?r:p,a=Object.create(i.prototype),s=new P(o||[]);return n(a,"_invoke",{value:L(t,e,s)}),a}function l(t,r,e){try{return{type:"normal",arg:t.call(r,e)}}catch(t){return{type:"throw",arg:t}}}t.wrap=u;var f={};function p(){}function d(){}function h(){}var y={};c(y,i,(function(){return this}));var v=Object.getPrototypeOf,m=v&&v(v(j([])));m&&m!==r&&e.call(m,i)&&(y=m);var w=h.prototype=p.prototype=Object.create(y);function g(t){["next","throw","return"].forEach((function(r){c(t,r,(function(t){return this._invoke(r,t)}))}))}function x(t,r){function o(n,i,a,s){var c=l(t[n],t,i);if("throw"!==c.type){var u=c.arg,f=u.value;return f&&"object"==b(f)&&e.call(f,"__await")?r.resolve(f.__await).then((function(t){o("next",t,a,s)}),(function(t){o("throw",t,a,s)})):r.resolve(f).then((function(t){u.value=t,a(u)}),(function(t){return o("throw",t,a,s)}))}s(c.arg)}var i;n(this,"_invoke",{value:function(t,e){function n(){return new r((function(r,n){o(t,e,r,n)}))}return i=i?i.then(n,n):n()}})}function L(t,r,e){var n="suspendedStart";return function(o,i){if("executing"===n)throw new Error("Generator is already running");if("completed"===n){if("throw"===o)throw i;return F()}for(e.method=o,e.arg=i;;){var a=e.delegate;if(a){var s=k(a,e);if(s){if(s===f)continue;return s}}if("next"===e.method)e.sent=e._sent=e.arg;else if("throw"===e.method){if("suspendedStart"===n)throw n="completed",e.arg;e.dispatchException(e.arg)}else"return"===e.method&&e.abrupt("return",e.arg);n="executing";var c=l(t,r,e);if("normal"===c.type){if(n=e.done?"completed":"suspendedYield",c.arg===f)continue;return{value:c.arg,done:e.done}}"throw"===c.type&&(n="completed",e.method="throw",e.arg=c.arg)}}}function k(t,r){var e=r.method,n=t.iterator[e];if(void 0===n)return r.delegate=null,"throw"===e&&t.iterator.return&&(r.method="return",r.arg=void 0,k(t,r),"throw"===r.method)||"return"!==e&&(r.method="throw",r.arg=new TypeError("The iterator does not provide a '"+e+"' method")),f;var o=l(n,t.iterator,r.arg);if("throw"===o.type)return r.method="throw",r.arg=o.arg,r.delegate=null,f;var i=o.arg;return i?i.done?(r[t.resultName]=i.value,r.next=t.nextLoc,"return"!==r.method&&(r.method="next",r.arg=void 0),r.delegate=null,f):i:(r.method="throw",r.arg=new TypeError("iterator result is not an object"),r.delegate=null,f)}function E(t){var r={tryLoc:t[0]};1 in t&&(r.catchLoc=t[1]),2 in t&&(r.finallyLoc=t[2],r.afterLoc=t[3]),this.tryEntries.push(r)}function S(t){var r=t.completion||{};r.type="normal",delete r.arg,t.completion=r}function P(t){this.tryEntries=[{tryLoc:"root"}],t.forEach(E,this),this.reset(!0)}function j(t){if(t){var r=t[i];if(r)return r.call(t);if("function"==typeof t.next)return t;if(!isNaN(t.length)){var n=-1,o=function r(){for(;++n<t.length;)if(e.call(t,n))return r.value=t[n],r.done=!1,r;return r.value=void 0,r.done=!0,r};return o.next=o}}return{next:F}}function F(){return{value:void 0,done:!0}}return d.prototype=h,n(w,"constructor",{value:h,configurable:!0}),n(h,"constructor",{value:d,configurable:!0}),d.displayName=c(h,s,"GeneratorFunction"),t.isGeneratorFunction=function(t){var r="function"==typeof t&&t.constructor;return!!r&&(r===d||"GeneratorFunction"===(r.displayName||r.name))},t.mark=function(t){return Object.setPrototypeOf?Object.setPrototypeOf(t,h):(t.__proto__=h,c(t,s,"GeneratorFunction")),t.prototype=Object.create(w),t},t.awrap=function(t){return{__await:t}},g(x.prototype),c(x.prototype,a,(function(){return this})),t.AsyncIterator=x,t.async=function(r,e,n,o,i){void 0===i&&(i=Promise);var a=new x(u(r,e,n,o),i);return t.isGeneratorFunction(e)?a:a.next().then((function(t){return t.done?t.value:a.next()}))},g(w),c(w,s,"Generator"),c(w,i,(function(){return this})),c(w,"toString",(function(){return"[object Generator]"})),t.keys=function(t){var r=Object(t),e=[];for(var n in r)e.push(n);return e.reverse(),function t(){for(;e.length;){var n=e.pop();if(n in r)return t.value=n,t.done=!1,t}return t.done=!0,t}},t.values=j,P.prototype={constructor:P,reset:function(t){if(this.prev=0,this.next=0,this.sent=this._sent=void 0,this.done=!1,this.delegate=null,this.method="next",this.arg=void 0,this.tryEntries.forEach(S),!t)for(var r in this)"t"===r.charAt(0)&&e.call(this,r)&&!isNaN(+r.slice(1))&&(this[r]=void 0)},stop:function(){this.done=!0;var t=this.tryEntries[0].completion;if("throw"===t.type)throw t.arg;return this.rval},dispatchException:function(t){if(this.done)throw t;var r=this;function n(e,n){return a.type="throw",a.arg=t,r.next=e,n&&(r.method="next",r.arg=void 0),!!n}for(var o=this.tryEntries.length-1;o>=0;--o){var i=this.tryEntries[o],a=i.completion;if("root"===i.tryLoc)return n("end");if(i.tryLoc<=this.prev){var s=e.call(i,"catchLoc"),c=e.call(i,"finallyLoc");if(s&&c){if(this.prev<i.catchLoc)return n(i.catchLoc,!0);if(this.prev<i.finallyLoc)return n(i.finallyLoc)}else if(s){if(this.prev<i.catchLoc)return n(i.catchLoc,!0)}else{if(!c)throw new Error("try statement without catch or finally");if(this.prev<i.finallyLoc)return n(i.finallyLoc)}}}},abrupt:function(t,r){for(var n=this.tryEntries.length-1;n>=0;--n){var o=this.tryEntries[n];if(o.tryLoc<=this.prev&&e.call(o,"finallyLoc")&&this.prev<o.finallyLoc){var i=o;break}}i&&("break"===t||"continue"===t)&&i.tryLoc<=r&&r<=i.finallyLoc&&(i=null);var a=i?i.completion:{};return a.type=t,a.arg=r,i?(this.method="next",this.next=i.finallyLoc,f):this.complete(a)},complete:function(t,r){if("throw"===t.type)throw t.arg;return"break"===t.type||"continue"===t.type?this.next=t.arg:"return"===t.type?(this.rval=this.arg=t.arg,this.method="return",this.next="end"):"normal"===t.type&&r&&(this.next=r),f},finish:function(t){for(var r=this.tryEntries.length-1;r>=0;--r){var e=this.tryEntries[r];if(e.finallyLoc===t)return this.complete(e.completion,e.afterLoc),S(e),f}},catch:function(t){for(var r=this.tryEntries.length-1;r>=0;--r){var e=this.tryEntries[r];if(e.tryLoc===t){var n=e.completion;if("throw"===n.type){var o=n.arg;S(e)}return o}}throw new Error("illegal catch attempt")},delegateYield:function(t,r,e){return this.delegate={iterator:j(t),resultName:r,nextLoc:e},"next"===this.method&&(this.arg=void 0),f}},t}function x(t,r,e,n,o,i,a){try{var s=t[i](a),c=s.value}catch(t){return void e(t)}s.done?r(c):Promise.resolve(c).then(n,o)}(0,n.iH)(),(0,m.tv)();const L={data:function(){return{site_title:"JMI Brokers | Forgot Password",site_description:"JMI Brokers | Forgot Password",site_keywords:"JMI Brokers | Forgot Password"}},mounted:function(){var t=this;(0,h.u)({title:(0,n.Fl)((function(){return t.site_title})),meta:[{name:"description",content:(0,n.Fl)((function(){return t.site_description}))},{name:"keywords",content:(0,n.Fl)((function(){return t.site_keywords}))}]})},methods:{},created:function(){},setup:function(){var t=(0,n.iH)(),r=((0,m.tv)(),(0,n.qj)({newpassword:"",confirmnewpassword:"",_token:"{{ csrf_token() }}"})),e=function(){var t,e=(t=_().mark((function t(){var e;return _().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,t.next=3,v().post("/api/reset-password",r);case 3:e=t.sent,console.log(e.status),200===e.status&&e.data?(g()("#Success span:first-child").text(e.data.message.ru),g()("#Success").show(),g()("#Error").hide()):201===e.status&&(g()("#Error span:first-child").text(e.data.errors.ru),g()("#Error").show(),g()("#Success").hide()),t.next=10;break;case 8:t.prev=8,t.t0=t.catch(0);case 10:case"end":return t.stop()}}),t,null,[[0,8]])})),function(){var r=this,e=arguments;return new Promise((function(n,o){var i=t.apply(r,e);function a(t){x(i,n,o,a,s,"next",t)}function s(t){x(i,n,o,a,s,"throw",t)}a(void 0)}))});return function(){return e.apply(this,arguments)}}();return{form:r,errors:t,handleForgotPassword:e}}};const k=(0,e(3744).Z)(L,[["render",function(t,r,e,h,y,v){return(0,n.wg)(),(0,n.iD)("div",i,[(0,n._)("div",a,[s,"string"==typeof h.errors?((0,n.wg)(),(0,n.iD)("div",c,(0,n.zw)(h.errors),1)):(0,n.kq)("",!0),"object"===o(h.errors)?((0,n.wg)(!0),(0,n.iD)(n.HY,{key:1},(0,n.Ko)(h.errors,(function(t,r){return(0,n.wg)(),(0,n.iD)("div",{class:"alert alert-danger",key:r},(0,n.zw)(h.errors[0]),1)})),128)):(0,n.kq)("",!0),(0,n._)("form",{id:"resetpassword",autocomplete:"off",method:"post",onSubmit:r[2]||(r[2]=(0,n.iM)((function(){return h.handleForgotPassword&&h.handleForgotPassword.apply(h,arguments)}),["prevent"])),class:"form-horizontal"},[u,(0,n.wy)((0,n._)("input",{name:"newpassword",type:"password","onUpdate:modelValue":r[0]||(r[0]=function(t){return h.form.newpassword=t}),id:"newpassword",placeholder:"New Password :",class:"form-control"},null,512),[[n.nr,h.form.newpassword]]),l,(0,n.wy)((0,n._)("input",{name:"confirmnewpassword",type:"password","onUpdate:modelValue":r[1]||(r[1]=function(t){return h.form.confirmnewpassword=t}),id:"confirmnewpassword",placeholder:"Confirm Password :",class:"form-control"},null,512),[[n.nr,h.form.confirmnewpassword]]),f,p,d],32)])])}]])}}]);