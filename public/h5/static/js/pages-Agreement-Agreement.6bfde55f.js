(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-Agreement-Agreement"],{1421:function(e,t,r){var n=r("24fb");t=n(!1),t.push([e.i,'@charset "UTF-8";\r\n/**\r\n * 这里是uni-app内置的常用样式变量\r\n *\r\n * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量\r\n * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App\r\n *\r\n */\r\n/**\r\n * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能\r\n *\r\n * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件\r\n */\r\n/* 颜色变量 */\r\n/* 行为相关颜色 */\r\n/* 文字基本颜色 */\r\n/* 背景颜色 */\r\n/* 边框颜色 */\r\n/* 尺寸变量 */\r\n/* 文字尺寸 */\r\n/* 图片尺寸 */\r\n/* Border Radius */\r\n/* 水平间距 */\r\n/* 垂直间距 */\r\n/* 透明度 */\r\n/* 文章场景相关 */.xieyi[data-v-7e16cc04]{padding:%?32?%;font-size:%?28?%;color:#757575;line-height:%?48?%}',""]),e.exports=t},"148f":function(e,t,r){"use strict";var n=r("b57d"),o=r.n(n);o.a},4127:function(e,t,r){"use strict";var n=r("d233"),o=r("b313"),a={brackets:function(e){return e+"[]"},indices:function(e,t){return e+"["+t+"]"},repeat:function(e){return e}},i=Date.prototype.toISOString,c={delimiter:"&",encode:!0,encoder:n.encode,encodeValuesOnly:!1,serializeDate:function(e){return i.call(e)},skipNulls:!1,strictNullHandling:!1},l=function e(t,r,o,a,i,l,u,s,f,d,p,y){var g=t;if("function"===typeof u)g=u(r,g);else if(g instanceof Date)g=d(g);else if(null===g){if(a)return l&&!y?l(r,c.encoder):r;g=""}if("string"===typeof g||"number"===typeof g||"boolean"===typeof g||n.isBuffer(g)){if(l){var v=y?r:l(r,c.encoder);return[p(v)+"="+p(l(g,c.encoder))]}return[p(r)+"="+p(String(g))]}var m,b=[];if("undefined"===typeof g)return b;if(Array.isArray(u))m=u;else{var h=Object.keys(g);m=s?h.sort(s):h}for(var j=0;j<m.length;++j){var O=m[j];i&&null===g[O]||(b=Array.isArray(g)?b.concat(e(g[O],o(r,O),o,a,i,l,u,s,f,d,p,y)):b.concat(e(g[O],r+(f?"."+O:"["+O+"]"),o,a,i,l,u,s,f,d,p,y)))}return b};e.exports=function(e,t){var r=e,i=t?n.assign({},t):{};if(null!==i.encoder&&void 0!==i.encoder&&"function"!==typeof i.encoder)throw new TypeError("Encoder has to be a function.");var u="undefined"===typeof i.delimiter?c.delimiter:i.delimiter,s="boolean"===typeof i.strictNullHandling?i.strictNullHandling:c.strictNullHandling,f="boolean"===typeof i.skipNulls?i.skipNulls:c.skipNulls,d="boolean"===typeof i.encode?i.encode:c.encode,p="function"===typeof i.encoder?i.encoder:c.encoder,y="function"===typeof i.sort?i.sort:null,g="undefined"!==typeof i.allowDots&&i.allowDots,v="function"===typeof i.serializeDate?i.serializeDate:c.serializeDate,m="boolean"===typeof i.encodeValuesOnly?i.encodeValuesOnly:c.encodeValuesOnly;if("undefined"===typeof i.format)i.format=o["default"];else if(!Object.prototype.hasOwnProperty.call(o.formatters,i.format))throw new TypeError("Unknown format option provided.");var b,h,j=o.formatters[i.format];"function"===typeof i.filter?(h=i.filter,r=h("",r)):Array.isArray(i.filter)&&(h=i.filter,b=h);var O,w=[];if("object"!==typeof r||null===r)return"";O=i.arrayFormat in a?i.arrayFormat:"indices"in i?i.indices?"indices":"repeat":"indices";var S=a[O];b||(b=Object.keys(r)),y&&b.sort(y);for(var A=0;A<b.length;++A){var x=b[A];f&&null===r[x]||(w=w.concat(l(r[x],x,S,s,f,d?p:null,h,y,g,v,j,m)))}var k=w.join(u),N=!0===i.addQueryPrefix?"?":"";return k.length>0?N+k:""}},4328:function(e,t,r){"use strict";var n=r("4127"),o=r("9e6a"),a=r("b313");e.exports={formats:a,parse:o,stringify:n}},"56d1":function(e,t,r){"use strict";var n=r("4ea4");Object.defineProperty(t,"__esModule",{value:!0}),t.post=c,t.get=l,t.postAuth=s,t.postFile=f,t.default=void 0;var o=n(r("4328")),a=n(r("8100")),i="http://app.yijiapuzi.vip/";function c(e,t,r){uni.request({url:i+e,method:"POST",data:t,dataType:"json",header:{"content-type":"application/x-www-form-urlencoded",token:uni.getStorageSync("token")||""},success:function(e){r&&r(e.data),1012==e.data.code&&(uni.showToast({icon:"none",title:"账户已禁用,请联系管理员"}),setTimeout((function(){uni.reLaunch({url:"/pages/login/login"})}),2e3)),e.data.code},fail:function(e){console.log(e)}})}function l(e,t,r){uni.request({url:i+e,method:"GET",data:t,dataType:"json",header:{"content-type":"application/x-www-form-urlencoded",token:uni.getStorageSync("token")||""},success:function(e){0!=e.data.code&&1!=e.data.code||(r&&r(e.data),console.log(e.data))},fail:function(e){console.log(e)}})}function u(){uni.removeStorageSync("AuserId"),uni.removeStorageSync("user_password"),uni.removeStorageSync("token"),uni.removeStorageSync("userType"),uni.removeStorageSync("tokenoutTime"),uni.removeStorageSync("id")}function s(e,t,r){uni.request({method:"POST",url:i+e,data:o.default.stringify(t),header:{token:uni.getStorageSync("token")||"1","content-type":"application/x-www-form-urlencoded"},success:function(e){0==e.data.code||1==e.data.code?r(e.data):401==e.data.code?(uni.removeStorageSync("doc_userinfo"),uni.removeStorageSync("token"),u(),setTimeout((function(){uni.reLaunch({url:"/pages/login/login/index"})}),2e3)):e.data.code},fail:function(e){}})}function f(e,t,r){uni.uploadFile({url:i+t,filePath:e,fileType:"image",name:"pic_file",success:function(e){e=JSON.parse(e.data),r(e)},fail:function(e){r(e)}})}var d={post:c,get:l,postAuth:s,postFile:f,local:a.default};t.default=d},"6bcf":function(e,t,r){"use strict";var n;r.d(t,"b",(function(){return o})),r.d(t,"c",(function(){return a})),r.d(t,"a",(function(){return n}));var o=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("v-uni-view",{staticClass:"xieyi"},[e._v(e._s(e.data))])},a=[]},8100:function(e,t,r){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var n={get:function(e){return JSON.parse(localStorage.getItem(e))},set:function(e,t){localStorage.setItem(e,JSON.stringify(t))},remove:function(e){localStorage.removeItem(e)},clear:function(){localStorage.clear()}};t.default=n},"9e6a":function(e,t,r){"use strict";var n=r("d233"),o=Object.prototype.hasOwnProperty,a={allowDots:!1,allowPrototypes:!1,arrayLimit:20,decoder:n.decode,delimiter:"&",depth:5,parameterLimit:1e3,plainObjects:!1,strictNullHandling:!1},i=function(e,t){for(var r={},n=t.ignoreQueryPrefix?e.replace(/^\?/,""):e,i=t.parameterLimit===1/0?void 0:t.parameterLimit,c=n.split(t.delimiter,i),l=0;l<c.length;++l){var u,s,f=c[l],d=f.indexOf("]="),p=-1===d?f.indexOf("="):d+1;-1===p?(u=t.decoder(f,a.decoder),s=t.strictNullHandling?null:""):(u=t.decoder(f.slice(0,p),a.decoder),s=t.decoder(f.slice(p+1),a.decoder)),o.call(r,u)?r[u]=[].concat(r[u]).concat(s):r[u]=s}return r},c=function(e,t,r){for(var n=t,o=e.length-1;o>=0;--o){var a,i=e[o];if("[]"===i)a=[],a=a.concat(n);else{a=r.plainObjects?Object.create(null):{};var c="["===i.charAt(0)&&"]"===i.charAt(i.length-1)?i.slice(1,-1):i,l=parseInt(c,10);!isNaN(l)&&i!==c&&String(l)===c&&l>=0&&r.parseArrays&&l<=r.arrayLimit?(a=[],a[l]=n):a[c]=n}n=a}return n},l=function(e,t,r){if(e){var n=r.allowDots?e.replace(/\.([^.[]+)/g,"[$1]"):e,a=/(\[[^[\]]*])/,i=/(\[[^[\]]*])/g,l=a.exec(n),u=l?n.slice(0,l.index):n,s=[];if(u){if(!r.plainObjects&&o.call(Object.prototype,u)&&!r.allowPrototypes)return;s.push(u)}var f=0;while(null!==(l=i.exec(n))&&f<r.depth){if(f+=1,!r.plainObjects&&o.call(Object.prototype,l[1].slice(1,-1))&&!r.allowPrototypes)return;s.push(l[1])}return l&&s.push("["+n.slice(l.index)+"]"),c(s,t,r)}};e.exports=function(e,t){var r=t?n.assign({},t):{};if(null!==r.decoder&&void 0!==r.decoder&&"function"!==typeof r.decoder)throw new TypeError("Decoder has to be a function.");if(r.ignoreQueryPrefix=!0===r.ignoreQueryPrefix,r.delimiter="string"===typeof r.delimiter||n.isRegExp(r.delimiter)?r.delimiter:a.delimiter,r.depth="number"===typeof r.depth?r.depth:a.depth,r.arrayLimit="number"===typeof r.arrayLimit?r.arrayLimit:a.arrayLimit,r.parseArrays=!1!==r.parseArrays,r.decoder="function"===typeof r.decoder?r.decoder:a.decoder,r.allowDots="boolean"===typeof r.allowDots?r.allowDots:a.allowDots,r.plainObjects="boolean"===typeof r.plainObjects?r.plainObjects:a.plainObjects,r.allowPrototypes="boolean"===typeof r.allowPrototypes?r.allowPrototypes:a.allowPrototypes,r.parameterLimit="number"===typeof r.parameterLimit?r.parameterLimit:a.parameterLimit,r.strictNullHandling="boolean"===typeof r.strictNullHandling?r.strictNullHandling:a.strictNullHandling,""===e||null===e||"undefined"===typeof e)return r.plainObjects?Object.create(null):{};for(var o="string"===typeof e?i(e,r):e,c=r.plainObjects?Object.create(null):{},u=Object.keys(o),s=0;s<u.length;++s){var f=u[s],d=l(f,o[f],r);c=n.merge(c,d,r)}return n.compact(c)}},a457:function(e,t,r){"use strict";var n=r("4ea4");Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var o=n(r("56d1")),a={data:function(){return{data:""}},onLoad:function(e){e.type&&(this.getLegal(e.type),14==e.type&&uni.setNavigationBarTitle({title:"懿家铺子协议"}),15==e.type&&uni.setNavigationBarTitle({title:"隐私协议"}))},methods:{getLegal:function(e){var t=this;o.default.post("api/protocol",{id:e},(function(e){console.log("协议",e),1==e.code&&(t.data=e.data)}))}}};t.default=a},aceb:function(e,t,r){"use strict";r.r(t);var n=r("a457"),o=r.n(n);for(var a in n)"default"!==a&&function(e){r.d(t,e,(function(){return n[e]}))}(a);t["default"]=o.a},b313:function(e,t,r){"use strict";var n=String.prototype.replace,o=/%20/g;e.exports={default:"RFC3986",formatters:{RFC1738:function(e){return n.call(e,o,"+")},RFC3986:function(e){return e}},RFC1738:"RFC1738",RFC3986:"RFC3986"}},b57d:function(e,t,r){var n=r("1421");"string"===typeof n&&(n=[[e.i,n,""]]),n.locals&&(e.exports=n.locals);var o=r("4f06").default;o("599f1192",n,!0,{sourceMap:!1,shadowMode:!1})},d233:function(e,t,r){"use strict";var n=Object.prototype.hasOwnProperty,o=function(){for(var e=[],t=0;t<256;++t)e.push("%"+((t<16?"0":"")+t.toString(16)).toUpperCase());return e}(),a=function(e){var t;while(e.length){var r=e.pop();if(t=r.obj[r.prop],Array.isArray(t)){for(var n=[],o=0;o<t.length;++o)"undefined"!==typeof t[o]&&n.push(t[o]);r.obj[r.prop]=n}}return t},i=function(e,t){for(var r=t&&t.plainObjects?Object.create(null):{},n=0;n<e.length;++n)"undefined"!==typeof e[n]&&(r[n]=e[n]);return r},c=function e(t,r,o){if(!r)return t;if("object"!==typeof r){if(Array.isArray(t))t.push(r);else{if("object"!==typeof t)return[t,r];(o.plainObjects||o.allowPrototypes||!n.call(Object.prototype,r))&&(t[r]=!0)}return t}if("object"!==typeof t)return[t].concat(r);var a=t;return Array.isArray(t)&&!Array.isArray(r)&&(a=i(t,o)),Array.isArray(t)&&Array.isArray(r)?(r.forEach((function(r,a){n.call(t,a)?t[a]&&"object"===typeof t[a]?t[a]=e(t[a],r,o):t.push(r):t[a]=r})),t):Object.keys(r).reduce((function(t,a){var i=r[a];return n.call(t,a)?t[a]=e(t[a],i,o):t[a]=i,t}),a)},l=function(e,t){return Object.keys(t).reduce((function(e,r){return e[r]=t[r],e}),e)},u=function(e){try{return decodeURIComponent(e.replace(/\+/g," "))}catch(t){return e}},s=function(e){if(0===e.length)return e;for(var t="string"===typeof e?e:String(e),r="",n=0;n<t.length;++n){var a=t.charCodeAt(n);45===a||46===a||95===a||126===a||a>=48&&a<=57||a>=65&&a<=90||a>=97&&a<=122?r+=t.charAt(n):a<128?r+=o[a]:a<2048?r+=o[192|a>>6]+o[128|63&a]:a<55296||a>=57344?r+=o[224|a>>12]+o[128|a>>6&63]+o[128|63&a]:(n+=1,a=65536+((1023&a)<<10|1023&t.charCodeAt(n)),r+=o[240|a>>18]+o[128|a>>12&63]+o[128|a>>6&63]+o[128|63&a])}return r},f=function(e){for(var t=[{obj:{o:e},prop:"o"}],r=[],n=0;n<t.length;++n)for(var o=t[n],i=o.obj[o.prop],c=Object.keys(i),l=0;l<c.length;++l){var u=c[l],s=i[u];"object"===typeof s&&null!==s&&-1===r.indexOf(s)&&(t.push({obj:i,prop:u}),r.push(s))}return a(t)},d=function(e){return"[object RegExp]"===Object.prototype.toString.call(e)},p=function(e){return null!==e&&"undefined"!==typeof e&&!!(e.constructor&&e.constructor.isBuffer&&e.constructor.isBuffer(e))};e.exports={arrayToObject:i,assign:l,compact:f,decode:u,encode:s,isBuffer:p,isRegExp:d,merge:c}},e6d2:function(e,t,r){"use strict";r.r(t);var n=r("6bcf"),o=r("aceb");for(var a in o)"default"!==a&&function(e){r.d(t,e,(function(){return o[e]}))}(a);r("148f");var i,c=r("f0c5"),l=Object(c["a"])(o["default"],n["b"],n["c"],!1,null,"7e16cc04",null,!1,n["a"],i);t["default"]=l.exports}}]);