var storage={config:{json:false,raw:false,driver:'local'},supportLocal:function(){return('localStorage'in window&&window['localStorage']!==null);},get:function(key){var ret=null;switch(storage.config.driver){case'local':ret=storage._local.get(key);break;case'cookies':ret=storage._cookie.get(key);break;case'both':default:if(storage.supportLocal()){ret=storage._local.get(key);}else{ret=storage._cookie.get(key);}
break;}
return storage.config.json?JSON.parse(ret):ret;},set:function(key,value,options){var ret=false;value=storage.config.json?JSON.stringify(value):String(value);switch(storage.config.driver){case'local':ret=storage._local.set(key,value);break;case'cookies':ret=storage._cookie.set(key,value,options);break;case'both':default:if(storage.supportLocal()){ret=storage._local.set(key,value);}else{ret=storage._cookie.set(key,value,options);}
break;}
return ret;},remove:function(key){var ret=false;switch(storage.config.driver){case'local':ret=storage._local.remove(key);break;case'cookies':ret=storage._cookie.remove(key);break;case'both':default:if(storage.supportLocal()){ret=storage._local.remove(key);}else{ret=storage._cookie.remove(key);}
break;}
return ret;},_local:{get:function(key){var ret=null;if(storage.supportLocal()){if(typeof key!=='undefined'&&typeof(localStorage[key])!=='undefined'){try{ret=localStorage[key];}catch(e){}}}
return ret;},set:function(key,value){var ret=false;if(storage.supportLocal()){if(typeof key!=='undefined'&&typeof(value)!=='undefined'){try{localStorage[key]=value;ret=true;}catch(e){ret=false;}}}
return ret;},remove:function(key){var ret=null;if(storage.supportLocal()){if(typeof key!=='undefined'&&typeof(localStorage[key])!=='undefined'){try{ret=delete localStorage[key];}catch(e){}}}
return ret;}},_cookie:{_raw:function(s){return s;},_decoded:function(s){return decodeURIComponent(s.replace(/\+/g,' '));},_extend:function(destination,source){for(var property in source){if(typeof source[property]==="object"&&source[property]!==null){destination[property]=destination[property]||{};arguments.callee(destination[property],source[property]);}else{destination[property]=source[property];}}
return destination;},set:function(key,value,options){if(value!==undefined){var opt=this._extend({},options);if(value===null){opt.expires=-1;}
if(typeof opt.expires==='number'){var days=opt.expires,t=opt.expires=new Date();t.setDate(t.getDate()+days);}
return(document.cookie=[encodeURIComponent(key),'=',storage.config.raw?value:encodeURIComponent(value),opt.expires?'; expires='+opt.expires.toUTCString():'',opt.path?'; path='+opt.path:'',opt.domain?'; domain='+opt.domain:'',opt.secure?'; secure':''].join(''));}
return false;},get:function(key){var decode=storage.config.raw?this._raw:this._decoded;var cookies=document.cookie.split('; ');for(var i=0,l=cookies.length;i<l;i++){var parts=cookies[i].split('=');if(decode(parts.shift())===key){var cookie=decode(parts.join('='));return cookie;}}
return null;},remove:function(key,options){if(this.get(key)!==null){this.set(key,null,options);return true;}
return false;}}};