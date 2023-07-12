/*! For license information please see 4476.js.LICENSE.txt */
"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[4476],{6052:(t,e,r)=>{r.d(e,{Z:()=>i});var n=r(3645),o=r.n(n)()((function(t){return t[1]}));o.push([t.id,"div#post p{color:#000;font-weight:700}div#post a{font-weight:700}div#post a,div#post h7{color:#0059b2}div#post{word-wrap:break-word;background:#eee;color:#000;height:300px;margin:5px;padding:20px}div.left{float:left;height:100%;text-align:left}div.right{float:right;height:100%}",""]);const i=o},4476:(t,e,r)=>{r.r(e),r.d(e,{default:()=>N});var n=r(821),o=(0,n._)("link",{rel:"canonical",href:"https://www.jmibrokers.com/en/dailyfundamental "},null,-1),i={class:"row"},a={class:"container"},c=(0,n._)("h1",null,"Fundamental Analysis",-1),l={id:"post",class:"col-sm-12"},u={class:"left col-sm-3"},s=["src"],f={class:"right col-sm-9"},h={id:"title",style:{"text-align":"left","margin-bottom":"20px",height:"80px"},class:"col-sm-12"},d=["href"],p={id:"details",style:{"font-size":"16px","margin-bottom":"20px",color:"#fff",height:"135px",overflow:"hidden"},class:"col-sm-12"},v=["innerHTML"],y={id:"time",style:{color:"#fff","text-align":"center","padding-right":"20px"},class:"col-sm-12"},g=["href"];var m=r(7215),w=r(9669),x=r.n(w),b=r(2201),_=r(9755),L=r.n(_);function k(t){return k="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},k(t)}function E(){E=function(){return t};var t={},e=Object.prototype,r=e.hasOwnProperty,n=Object.defineProperty||function(t,e,r){t[e]=r.value},o="function"==typeof Symbol?Symbol:{},i=o.iterator||"@@iterator",a=o.asyncIterator||"@@asyncIterator",c=o.toStringTag||"@@toStringTag";function l(t,e,r){return Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}),t[e]}try{l({},"")}catch(t){l=function(t,e,r){return t[e]=r}}function u(t,e,r,o){var i=e&&e.prototype instanceof h?e:h,a=Object.create(i.prototype),c=new O(o||[]);return n(a,"_invoke",{value:b(t,r,c)}),a}function s(t,e,r){try{return{type:"normal",arg:t.call(e,r)}}catch(t){return{type:"throw",arg:t}}}t.wrap=u;var f={};function h(){}function d(){}function p(){}var v={};l(v,i,(function(){return this}));var y=Object.getPrototypeOf,g=y&&y(y(S([])));g&&g!==e&&r.call(g,i)&&(v=g);var m=p.prototype=h.prototype=Object.create(v);function w(t){["next","throw","return"].forEach((function(e){l(t,e,(function(t){return this._invoke(e,t)}))}))}function x(t,e){function o(n,i,a,c){var l=s(t[n],t,i);if("throw"!==l.type){var u=l.arg,f=u.value;return f&&"object"==k(f)&&r.call(f,"__await")?e.resolve(f.__await).then((function(t){o("next",t,a,c)}),(function(t){o("throw",t,a,c)})):e.resolve(f).then((function(t){u.value=t,a(u)}),(function(t){return o("throw",t,a,c)}))}c(l.arg)}var i;n(this,"_invoke",{value:function(t,r){function n(){return new e((function(e,n){o(t,r,e,n)}))}return i=i?i.then(n,n):n()}})}function b(t,e,r){var n="suspendedStart";return function(o,i){if("executing"===n)throw new Error("Generator is already running");if("completed"===n){if("throw"===o)throw i;return F()}for(r.method=o,r.arg=i;;){var a=r.delegate;if(a){var c=_(a,r);if(c){if(c===f)continue;return c}}if("next"===r.method)r.sent=r._sent=r.arg;else if("throw"===r.method){if("suspendedStart"===n)throw n="completed",r.arg;r.dispatchException(r.arg)}else"return"===r.method&&r.abrupt("return",r.arg);n="executing";var l=s(t,e,r);if("normal"===l.type){if(n=r.done?"completed":"suspendedYield",l.arg===f)continue;return{value:l.arg,done:r.done}}"throw"===l.type&&(n="completed",r.method="throw",r.arg=l.arg)}}}function _(t,e){var r=e.method,n=t.iterator[r];if(void 0===n)return e.delegate=null,"throw"===r&&t.iterator.return&&(e.method="return",e.arg=void 0,_(t,e),"throw"===e.method)||"return"!==r&&(e.method="throw",e.arg=new TypeError("The iterator does not provide a '"+r+"' method")),f;var o=s(n,t.iterator,e.arg);if("throw"===o.type)return e.method="throw",e.arg=o.arg,e.delegate=null,f;var i=o.arg;return i?i.done?(e[t.resultName]=i.value,e.next=t.nextLoc,"return"!==e.method&&(e.method="next",e.arg=void 0),e.delegate=null,f):i:(e.method="throw",e.arg=new TypeError("iterator result is not an object"),e.delegate=null,f)}function L(t){var e={tryLoc:t[0]};1 in t&&(e.catchLoc=t[1]),2 in t&&(e.finallyLoc=t[2],e.afterLoc=t[3]),this.tryEntries.push(e)}function j(t){var e=t.completion||{};e.type="normal",delete e.arg,t.completion=e}function O(t){this.tryEntries=[{tryLoc:"root"}],t.forEach(L,this),this.reset(!0)}function S(t){if(t){var e=t[i];if(e)return e.call(t);if("function"==typeof t.next)return t;if(!isNaN(t.length)){var n=-1,o=function e(){for(;++n<t.length;)if(r.call(t,n))return e.value=t[n],e.done=!1,e;return e.value=void 0,e.done=!0,e};return o.next=o}}return{next:F}}function F(){return{value:void 0,done:!0}}return d.prototype=p,n(m,"constructor",{value:p,configurable:!0}),n(p,"constructor",{value:d,configurable:!0}),d.displayName=l(p,c,"GeneratorFunction"),t.isGeneratorFunction=function(t){var e="function"==typeof t&&t.constructor;return!!e&&(e===d||"GeneratorFunction"===(e.displayName||e.name))},t.mark=function(t){return Object.setPrototypeOf?Object.setPrototypeOf(t,p):(t.__proto__=p,l(t,c,"GeneratorFunction")),t.prototype=Object.create(m),t},t.awrap=function(t){return{__await:t}},w(x.prototype),l(x.prototype,a,(function(){return this})),t.AsyncIterator=x,t.async=function(e,r,n,o,i){void 0===i&&(i=Promise);var a=new x(u(e,r,n,o),i);return t.isGeneratorFunction(r)?a:a.next().then((function(t){return t.done?t.value:a.next()}))},w(m),l(m,c,"Generator"),l(m,i,(function(){return this})),l(m,"toString",(function(){return"[object Generator]"})),t.keys=function(t){var e=Object(t),r=[];for(var n in e)r.push(n);return r.reverse(),function t(){for(;r.length;){var n=r.pop();if(n in e)return t.value=n,t.done=!1,t}return t.done=!0,t}},t.values=S,O.prototype={constructor:O,reset:function(t){if(this.prev=0,this.next=0,this.sent=this._sent=void 0,this.done=!1,this.delegate=null,this.method="next",this.arg=void 0,this.tryEntries.forEach(j),!t)for(var e in this)"t"===e.charAt(0)&&r.call(this,e)&&!isNaN(+e.slice(1))&&(this[e]=void 0)},stop:function(){this.done=!0;var t=this.tryEntries[0].completion;if("throw"===t.type)throw t.arg;return this.rval},dispatchException:function(t){if(this.done)throw t;var e=this;function n(r,n){return a.type="throw",a.arg=t,e.next=r,n&&(e.method="next",e.arg=void 0),!!n}for(var o=this.tryEntries.length-1;o>=0;--o){var i=this.tryEntries[o],a=i.completion;if("root"===i.tryLoc)return n("end");if(i.tryLoc<=this.prev){var c=r.call(i,"catchLoc"),l=r.call(i,"finallyLoc");if(c&&l){if(this.prev<i.catchLoc)return n(i.catchLoc,!0);if(this.prev<i.finallyLoc)return n(i.finallyLoc)}else if(c){if(this.prev<i.catchLoc)return n(i.catchLoc,!0)}else{if(!l)throw new Error("try statement without catch or finally");if(this.prev<i.finallyLoc)return n(i.finallyLoc)}}}},abrupt:function(t,e){for(var n=this.tryEntries.length-1;n>=0;--n){var o=this.tryEntries[n];if(o.tryLoc<=this.prev&&r.call(o,"finallyLoc")&&this.prev<o.finallyLoc){var i=o;break}}i&&("break"===t||"continue"===t)&&i.tryLoc<=e&&e<=i.finallyLoc&&(i=null);var a=i?i.completion:{};return a.type=t,a.arg=e,i?(this.method="next",this.next=i.finallyLoc,f):this.complete(a)},complete:function(t,e){if("throw"===t.type)throw t.arg;return"break"===t.type||"continue"===t.type?this.next=t.arg:"return"===t.type?(this.rval=this.arg=t.arg,this.method="return",this.next="end"):"normal"===t.type&&e&&(this.next=e),f},finish:function(t){for(var e=this.tryEntries.length-1;e>=0;--e){var r=this.tryEntries[e];if(r.finallyLoc===t)return this.complete(r.completion,r.afterLoc),j(r),f}},catch:function(t){for(var e=this.tryEntries.length-1;e>=0;--e){var r=this.tryEntries[e];if(r.tryLoc===t){var n=r.completion;if("throw"===n.type){var o=n.arg;j(r)}return o}}throw new Error("illegal catch attempt")},delegateYield:function(t,e,r){return this.delegate={iterator:S(t),resultName:e,nextLoc:r},"next"===this.method&&(this.arg=void 0),f}},t}function j(t,e,r,n,o,i,a){try{var c=t[i](a),l=c.value}catch(t){return void r(t)}c.done?e(l):Promise.resolve(l).then(n,o)}(0,n.iH)(),(0,b.tv)();window.jQuery=L();const O={data:function(){return{site_title:"",site_description:"",site_keywords:"",fundamentalanalysis:""}},mounted:function(){var t=this;(0,m.u)({title:(0,n.Fl)((function(){return t.site_title})),meta:[{name:"description",content:(0,n.Fl)((function(){return t.site_description}))},{name:"keywords",content:(0,n.Fl)((function(){return t.site_keywords}))}]}),this.getData()},methods:{getData:function(){var t,e=this;return(t=E().mark((function t(){var r;return E().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return(0,b.tv)(),t.prev=1,t.next=4,x().get("/api/dailyfundamental");case 4:200===(r=t.sent).status&&(e.fundamentalanalysis=r.data.fundamentalanalysis,e.site_title=r.data.title.en,e.site_keywords=r.data.keywords.en,e.site_description=r.data.description.en),t.next=10;break;case 8:t.prev=8,t.t0=t.catch(1);case 10:case"end":return t.stop()}}),t,null,[[1,8]])})),function(){var e=this,r=arguments;return new Promise((function(n,o){var i=t.apply(e,r);function a(t){j(i,n,o,a,c,"next",t)}function c(t){j(i,n,o,a,c,"throw",t)}a(void 0)}))})()}}};var S=r(3379),F=r.n(S),P=r(6052),G={insert:"head",singleton:!1};F()(P.Z,G);P.Z.locals;const N=(0,r(3744).Z)(O,[["render",function(t,e,r,m,w,x){var b=(0,n.up)("h7");return(0,n.wg)(),(0,n.iD)(n.HY,null,[o,(0,n._)("div",i,[(0,n._)("div",a,[c,((0,n.wg)(!0),(0,n.iD)(n.HY,null,(0,n.Ko)(w.fundamentalanalysis,(function(t){return(0,n.wg)(),(0,n.iD)("div",l,[(0,n._)("div",u,[(0,n._)("img",{src:t.image,alt:"",style:{width:"100%",height:"100%"}},null,8,s)]),(0,n._)("div",f,[(0,n._)("div",h,[(0,n._)("a",{style:{"font-size":"20px"},href:"/en/dailyfundamental/fundamental/".concat(t.id)},(0,n.zw)(t.title),9,d)]),(0,n._)("div",p,[(0,n._)("div",{innerHTML:"".concat(t.details.replace("style=display: block; margin-left: auto; margin-right: auto;","style=display: none; margin-left: auto; margin-right: auto;"))},null,8,v)]),(0,n._)("div",y,[(0,n._)("a",{href:"/en/dailyfundamental/fundamental/".concat(t.id)},"...Read More...",8,g),(0,n.Wm)(b,{style:{float:"right"}},{default:(0,n.w5)((function(){return[(0,n.Uk)((0,n.zw)(t.created_at),1)]})),_:2},1024)])])])})),256))])])],64)}]])}}]);