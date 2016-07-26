/**
 * Copyright 2016 Google Inc. All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

// This generated service worker JavaScript will precache your site's resources.
// The code needs to be saved in a .js file at the top-level of your site, and registered
// from your pages in order to be used. See
// https://github.com/googlechrome/sw-precache/blob/master/demo/app/js/service-worker-registration.js
// for an example of how you can register this script and handle various service worker events.

/* eslint-env worker, serviceworker */
/* eslint-disable indent, no-unused-vars, no-multiple-empty-lines, max-nested-callbacks, space-before-function-paren */
'use strict';


// *** Start of auto-included sw-toolbox code. ***
/*
  Copyright 2014 Google Inc. All Rights Reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      http://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
*/

(function(f){if(typeof exports==="object"&&typeof module!=="undefined"){module.exports=f()}else if(typeof define==="function"&&define.amd){define([],f)}else{var g;if(typeof window!=="undefined"){g=window}else if(typeof global!=="undefined"){g=global}else if(typeof self!=="undefined"){g=self}else{g=this}g.toolbox = f()}})(function(){var define,module,exports;return (function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";function debug(e,n){n=n||{};var t=n.debug||globalOptions.debug;t&&console.log("[sw-toolbox] "+e)}function openCache(e){var n;return e&&e.cache&&(n=e.cache.name),n=n||globalOptions.cache.name,caches.open(n)}function fetchAndCache(e,n){n=n||{};var t=n.successResponses||globalOptions.successResponses;return fetch(e.clone()).then(function(c){return"GET"===e.method&&t.test(c.status)&&openCache(n).then(function(t){t.put(e,c).then(function(){var c=n.cache||globalOptions.cache;(c.maxEntries||c.maxAgeSeconds)&&c.name&&queueCacheExpiration(e,t,c)})}),c.clone()})}function queueCacheExpiration(e,n,t){var c=cleanupCache.bind(null,e,n,t);cleanupQueue=cleanupQueue?cleanupQueue.then(c):c()}function cleanupCache(e,n,t){var c=e.url,a=t.maxAgeSeconds,u=t.maxEntries,o=t.name,r=Date.now();return debug("Updating LRU order for "+c+". Max entries is "+u+", max age is "+a),idbCacheExpiration.getDb(o).then(function(e){return idbCacheExpiration.setTimestampForUrl(e,c,r)}).then(function(e){return idbCacheExpiration.expireEntries(e,u,a,r)}).then(function(e){debug("Successfully updated IDB.");var t=e.map(function(e){return n["delete"](e)});return Promise.all(t).then(function(){debug("Done with cache cleanup.")})})["catch"](function(e){debug(e)})}function renameCache(e,n,t){return debug("Renaming cache: ["+e+"] to ["+n+"]",t),caches["delete"](n).then(function(){return Promise.all([caches.open(e),caches.open(n)]).then(function(n){var t=n[0],c=n[1];return t.keys().then(function(e){return Promise.all(e.map(function(e){return t.match(e).then(function(n){return c.put(e,n)})}))}).then(function(){return caches["delete"](e)})})})}var globalOptions=require("./options"),idbCacheExpiration=require("./idb-cache-expiration"),cleanupQueue;module.exports={debug:debug,fetchAndCache:fetchAndCache,openCache:openCache,renameCache:renameCache};
},{"./idb-cache-expiration":2,"./options":3}],2:[function(require,module,exports){
"use strict";function openDb(e){return new Promise(function(r,n){var t=indexedDB.open(DB_PREFIX+e,DB_VERSION);t.onupgradeneeded=function(){var e=t.result.createObjectStore(STORE_NAME,{keyPath:URL_PROPERTY});e.createIndex(TIMESTAMP_PROPERTY,TIMESTAMP_PROPERTY,{unique:!1})},t.onsuccess=function(){r(t.result)},t.onerror=function(){n(t.error)}})}function getDb(e){return e in cacheNameToDbPromise||(cacheNameToDbPromise[e]=openDb(e)),cacheNameToDbPromise[e]}function setTimestampForUrl(e,r,n){return new Promise(function(t,o){var i=e.transaction(STORE_NAME,"readwrite"),u=i.objectStore(STORE_NAME);u.put({url:r,timestamp:n}),i.oncomplete=function(){t(e)},i.onabort=function(){o(i.error)}})}function expireOldEntries(e,r,n){return r?new Promise(function(t,o){var i=1e3*r,u=[],c=e.transaction(STORE_NAME,"readwrite"),s=c.objectStore(STORE_NAME),a=s.index(TIMESTAMP_PROPERTY);a.openCursor().onsuccess=function(e){var r=e.target.result;if(r&&n-i>r.value[TIMESTAMP_PROPERTY]){var t=r.value[URL_PROPERTY];u.push(t),s["delete"](t),r["continue"]()}},c.oncomplete=function(){t(u)},c.onabort=o}):Promise.resolve([])}function expireExtraEntries(e,r){return r?new Promise(function(n,t){var o=[],i=e.transaction(STORE_NAME,"readwrite"),u=i.objectStore(STORE_NAME),c=u.index(TIMESTAMP_PROPERTY),s=c.count();c.count().onsuccess=function(){var e=s.result;e>r&&(c.openCursor().onsuccess=function(n){var t=n.target.result;if(t){var i=t.value[URL_PROPERTY];o.push(i),u["delete"](i),e-o.length>r&&t["continue"]()}})},i.oncomplete=function(){n(o)},i.onabort=t}):Promise.resolve([])}function expireEntries(e,r,n,t){return expireOldEntries(e,n,t).then(function(n){return expireExtraEntries(e,r).then(function(e){return n.concat(e)})})}var DB_PREFIX="sw-toolbox-",DB_VERSION=1,STORE_NAME="store",URL_PROPERTY="url",TIMESTAMP_PROPERTY="timestamp",cacheNameToDbPromise={};module.exports={getDb:getDb,setTimestampForUrl:setTimestampForUrl,expireEntries:expireEntries};
},{}],3:[function(require,module,exports){
"use strict";var scope;scope=self.registration?self.registration.scope:self.scope||new URL("./",self.location).href,module.exports={cache:{name:"$$$toolbox-cache$$$"+scope+"$$$",maxAgeSeconds:null,maxEntries:null},debug:!1,networkTimeoutSeconds:null,preCacheItems:[],successResponses:/^0|([123]\d\d)|(40[14567])|410$/};
},{}],4:[function(require,module,exports){
"use strict";var url=new URL("./",self.location),basePath=url.pathname,pathRegexp=require("path-to-regexp"),Route=function(e,t,i,s){t instanceof RegExp?this.fullUrlRegExp=t:(0!==t.indexOf("/")&&(t=basePath+t),this.keys=[],this.regexp=pathRegexp(t,this.keys)),this.method=e,this.options=s,this.handler=i};Route.prototype.makeHandler=function(e){var t;if(this.regexp){var i=this.regexp.exec(e);t={},this.keys.forEach(function(e,s){t[e.name]=i[s+1]})}return function(e){return this.handler(e,t,this.options)}.bind(this)},module.exports=Route;
},{"path-to-regexp":14}],5:[function(require,module,exports){
"use strict";function regexEscape(e){return e.replace(/[-\/\\^$*+?.()|[\]{}]/g,"\\$&")}var Route=require("./route"),keyMatch=function(e,t){for(var r=e.entries(),o=r.next(),n=[];!o.done;){var u=new RegExp(o.value[0]);u.test(t)&&n.push(o.value[1]),o=r.next()}return n},Router=function(){this.routes=new Map,this.routes.set(RegExp,new Map),this["default"]=null};["get","post","put","delete","head","any"].forEach(function(e){Router.prototype[e]=function(t,r,o){return this.add(e,t,r,o)}}),Router.prototype.add=function(e,t,r,o){o=o||{};var n;t instanceof RegExp?n=RegExp:(n=o.origin||self.location.origin,n=n instanceof RegExp?n.source:regexEscape(n)),e=e.toLowerCase();var u=new Route(e,t,r,o);this.routes.has(n)||this.routes.set(n,new Map);var a=this.routes.get(n);a.has(e)||a.set(e,new Map);var s=a.get(e),i=u.regexp||u.fullUrlRegExp;s.set(i.source,u)},Router.prototype.matchMethod=function(e,t){var r=new URL(t),o=r.origin,n=r.pathname;return this._match(e,keyMatch(this.routes,o),n)||this._match(e,[this.routes.get(RegExp)],t)},Router.prototype._match=function(e,t,r){if(0===t.length)return null;for(var o=0;o<t.length;o++){var n=t[o],u=n&&n.get(e.toLowerCase());if(u){var a=keyMatch(u,r);if(a.length>0)return a[0].makeHandler(r)}}return null},Router.prototype.match=function(e){return this.matchMethod(e.method,e.url)||this.matchMethod("any",e.url)},module.exports=new Router;
},{"./route":4}],6:[function(require,module,exports){
"use strict";function cacheFirst(e,r,t){return helpers.debug("Strategy: cache first ["+e.url+"]",t),helpers.openCache(t).then(function(r){return r.match(e).then(function(r){return r?r:helpers.fetchAndCache(e,t)})})}var helpers=require("../helpers");module.exports=cacheFirst;
},{"../helpers":1}],7:[function(require,module,exports){
"use strict";function cacheOnly(e,r,c){return helpers.debug("Strategy: cache only ["+e.url+"]",c),helpers.openCache(c).then(function(r){return r.match(e)})}var helpers=require("../helpers");module.exports=cacheOnly;
},{"../helpers":1}],8:[function(require,module,exports){
"use strict";function fastest(e,n,t){return helpers.debug("Strategy: fastest ["+e.url+"]",t),new Promise(function(r,s){var c=!1,o=[],a=function(e){o.push(e.toString()),c?s(new Error('Both cache and network failed: "'+o.join('", "')+'"')):c=!0},h=function(e){e instanceof Response?r(e):a("No result returned")};helpers.fetchAndCache(e.clone(),t).then(h,a),cacheOnly(e,n,t).then(h,a)})}var helpers=require("../helpers"),cacheOnly=require("./cacheOnly");module.exports=fastest;
},{"../helpers":1,"./cacheOnly":7}],9:[function(require,module,exports){
module.exports={networkOnly:require("./networkOnly"),networkFirst:require("./networkFirst"),cacheOnly:require("./cacheOnly"),cacheFirst:require("./cacheFirst"),fastest:require("./fastest")};
},{"./cacheFirst":6,"./cacheOnly":7,"./fastest":8,"./networkFirst":10,"./networkOnly":11}],10:[function(require,module,exports){
"use strict";function networkFirst(e,r,t){t=t||{};var s=t.successResponses||globalOptions.successResponses,n=t.networkTimeoutSeconds||globalOptions.networkTimeoutSeconds;return helpers.debug("Strategy: network first ["+e.url+"]",t),helpers.openCache(t).then(function(r){var o,u,i=[];if(n){var c=new Promise(function(t){o=setTimeout(function(){r.match(e).then(function(e){e&&t(e)})},1e3*n)});i.push(c)}var a=helpers.fetchAndCache(e,t).then(function(e){if(o&&clearTimeout(o),s.test(e.status))return e;throw helpers.debug("Response was an HTTP error: "+e.statusText,t),u=e,new Error("Bad response")})["catch"](function(s){return helpers.debug("Network or response error, fallback to cache ["+e.url+"]",t),r.match(e).then(function(e){if(e)return e;if(u)return u;throw s})});return i.push(a),Promise.race(i)})}var globalOptions=require("../options"),helpers=require("../helpers");module.exports=networkFirst;
},{"../helpers":1,"../options":3}],11:[function(require,module,exports){
"use strict";function networkOnly(e,r,t){return helpers.debug("Strategy: network only ["+e.url+"]",t),fetch(e)}var helpers=require("../helpers");module.exports=networkOnly;
},{"../helpers":1}],12:[function(require,module,exports){
"use strict";function cache(e,t){return helpers.openCache(t).then(function(t){return t.add(e)})}function uncache(e,t){return helpers.openCache(t).then(function(t){return t["delete"](e)})}function precache(e){e instanceof Promise||validatePrecacheInput(e),options.preCacheItems=options.preCacheItems.concat(e)}require("serviceworker-cache-polyfill");var options=require("./options"),router=require("./router"),helpers=require("./helpers"),strategies=require("./strategies");helpers.debug("Service Worker Toolbox is loading");var flatten=function(e){return e.reduce(function(e,t){return e.concat(t)},[])},validatePrecacheInput=function(e){var t=Array.isArray(e);if(t&&e.forEach(function(e){"string"==typeof e||e instanceof Request||(t=!1)}),!t)throw new TypeError("The precache method expects either an array of strings and/or Requests or a Promise that resolves to an array of strings and/or Requests.");return e};self.addEventListener("install",function(e){var t=options.cache.name+"$$$inactive$$$";helpers.debug("install event fired"),helpers.debug("creating cache ["+t+"]"),e.waitUntil(helpers.openCache({cache:{name:t}}).then(function(e){return Promise.all(options.preCacheItems).then(flatten).then(validatePrecacheInput).then(function(t){return helpers.debug("preCache list: "+(t.join(", ")||"(none)")),e.addAll(t)})}))}),self.addEventListener("activate",function(e){helpers.debug("activate event fired");var t=options.cache.name+"$$$inactive$$$";e.waitUntil(helpers.renameCache(t,options.cache.name))}),self.addEventListener("fetch",function(e){var t=router.match(e.request);t?e.respondWith(t(e.request)):router["default"]&&"GET"===e.request.method&&e.respondWith(router["default"](e.request))}),module.exports={networkOnly:strategies.networkOnly,networkFirst:strategies.networkFirst,cacheOnly:strategies.cacheOnly,cacheFirst:strategies.cacheFirst,fastest:strategies.fastest,router:router,options:options,cache:cache,uncache:uncache,precache:precache};
},{"./helpers":1,"./options":3,"./router":5,"./strategies":9,"serviceworker-cache-polyfill":15}],13:[function(require,module,exports){
module.exports=Array.isArray||function(r){return"[object Array]"==Object.prototype.toString.call(r)};
},{}],14:[function(require,module,exports){
function parse(e){for(var t,r=[],n=0,o=0,a="";null!=(t=PATH_REGEXP.exec(e));){var p=t[0],i=t[1],s=t.index;if(a+=e.slice(o,s),o=s+p.length,i)a+=i[1];else{var c=e[o],u=t[2],l=t[3],f=t[4],g=t[5],x=t[6],h=t[7];a&&(r.push(a),a="");var d=null!=u&&null!=c&&c!==u,y="+"===x||"*"===x,m="?"===x||"*"===x,R=t[2]||"/",T=f||g||(h?".*":"[^"+R+"]+?");r.push({name:l||n++,prefix:u||"",delimiter:R,optional:m,repeat:y,partial:d,asterisk:!!h,pattern:escapeGroup(T)})}}return o<e.length&&(a+=e.substr(o)),a&&r.push(a),r}function compile(e){return tokensToFunction(parse(e))}function encodeURIComponentPretty(e){return encodeURI(e).replace(/[\/?#]/g,function(e){return"%"+e.charCodeAt(0).toString(16).toUpperCase()})}function encodeAsterisk(e){return encodeURI(e).replace(/[?#]/g,function(e){return"%"+e.charCodeAt(0).toString(16).toUpperCase()})}function tokensToFunction(e){for(var t=new Array(e.length),r=0;r<e.length;r++)"object"==typeof e[r]&&(t[r]=new RegExp("^(?:"+e[r].pattern+")$"));return function(r,n){for(var o="",a=r||{},p=n||{},i=p.pretty?encodeURIComponentPretty:encodeURIComponent,s=0;s<e.length;s++){var c=e[s];if("string"!=typeof c){var u,l=a[c.name];if(null==l){if(c.optional){c.partial&&(o+=c.prefix);continue}throw new TypeError('Expected "'+c.name+'" to be defined')}if(isarray(l)){if(!c.repeat)throw new TypeError('Expected "'+c.name+'" to not repeat, but received `'+JSON.stringify(l)+"`");if(0===l.length){if(c.optional)continue;throw new TypeError('Expected "'+c.name+'" to not be empty')}for(var f=0;f<l.length;f++){if(u=i(l[f]),!t[s].test(u))throw new TypeError('Expected all "'+c.name+'" to match "'+c.pattern+'", but received `'+JSON.stringify(u)+"`");o+=(0===f?c.prefix:c.delimiter)+u}}else{if(u=c.asterisk?encodeAsterisk(l):i(l),!t[s].test(u))throw new TypeError('Expected "'+c.name+'" to match "'+c.pattern+'", but received "'+u+'"');o+=c.prefix+u}}else o+=c}return o}}function escapeString(e){return e.replace(/([.+*?=^!:${}()[\]|\/])/g,"\\$1")}function escapeGroup(e){return e.replace(/([=!:$\/()])/g,"\\$1")}function attachKeys(e,t){return e.keys=t,e}function flags(e){return e.sensitive?"":"i"}function regexpToRegexp(e,t){var r=e.source.match(/\((?!\?)/g);if(r)for(var n=0;n<r.length;n++)t.push({name:n,prefix:null,delimiter:null,optional:!1,repeat:!1,partial:!1,asterisk:!1,pattern:null});return attachKeys(e,t)}function arrayToRegexp(e,t,r){for(var n=[],o=0;o<e.length;o++)n.push(pathToRegexp(e[o],t,r).source);var a=new RegExp("(?:"+n.join("|")+")",flags(r));return attachKeys(a,t)}function stringToRegexp(e,t,r){for(var n=parse(e),o=tokensToRegExp(n,r),a=0;a<n.length;a++)"string"!=typeof n[a]&&t.push(n[a]);return attachKeys(o,t)}function tokensToRegExp(e,t){t=t||{};for(var r=t.strict,n=t.end!==!1,o="",a=e[e.length-1],p="string"==typeof a&&/\/$/.test(a),i=0;i<e.length;i++){var s=e[i];if("string"==typeof s)o+=escapeString(s);else{var c=escapeString(s.prefix),u="(?:"+s.pattern+")";s.repeat&&(u+="(?:"+c+u+")*"),u=s.optional?s.partial?c+"("+u+")?":"(?:"+c+"("+u+"))?":c+"("+u+")",o+=u}}return r||(o=(p?o.slice(0,-2):o)+"(?:\\/(?=$))?"),o+=n?"$":r&&p?"":"(?=\\/|$)",new RegExp("^"+o,flags(t))}function pathToRegexp(e,t,r){return t=t||[],isarray(t)?r||(r={}):(r=t,t=[]),e instanceof RegExp?regexpToRegexp(e,t):isarray(e)?arrayToRegexp(e,t,r):stringToRegexp(e,t,r)}var isarray=require("isarray");module.exports=pathToRegexp,module.exports.parse=parse,module.exports.compile=compile,module.exports.tokensToFunction=tokensToFunction,module.exports.tokensToRegExp=tokensToRegExp;var PATH_REGEXP=new RegExp(["(\\\\.)","([\\/.])?(?:(?:\\:(\\w+)(?:\\(((?:\\\\.|[^()])+)\\))?|\\(((?:\\\\.|[^()])+)\\))([+*?])?|(\\*))"].join("|"),"g");
},{"isarray":13}],15:[function(require,module,exports){
!function(){var t=Cache.prototype.addAll,e=navigator.userAgent.match(/(Firefox|Chrome)\/(\d+\.)/);if(e)var r=e[1],n=parseInt(e[2]);t&&(!e||"Firefox"===r&&n>=46||"Chrome"===r&&n>=50)||(Cache.prototype.addAll=function(t){function e(t){this.name="NetworkError",this.code=19,this.message=t}var r=this;return e.prototype=Object.create(Error.prototype),Promise.resolve().then(function(){if(arguments.length<1)throw new TypeError;return t=t.map(function(t){return t instanceof Request?t:String(t)}),Promise.all(t.map(function(t){"string"==typeof t&&(t=new Request(t));var r=new URL(t.url).protocol;if("http:"!==r&&"https:"!==r)throw new e("Invalid scheme");return fetch(t.clone())}))}).then(function(n){if(n.some(function(t){return!t.ok}))throw new e("Incorrect response status");return Promise.all(n.map(function(e,n){return r.put(t[n],e)}))}).then(function(){})},Cache.prototype.add=function(t){return this.addAll([t])})}();
},{}]},{},[12])(12)
});


//# sourceMappingURL=./build/sw-toolbox.map.json
// *** End of auto-included sw-toolbox code. ***




/* eslint-disable quotes, comma-spacing */
var PrecacheConfig = [["/images/120x120.jpg","0fc37ac31a73b1655d593aa760dca150"],["/images/advocacy/advocacy_1.jpg","bcee90ae11aa5574da0db6946ae8d30e"],["/images/advocacy/advocacy_2.jpg","cef8d03dc54f035e9d3ec274055424cd"],["/images/advocacy/advocacy_3.jpg","ce1de7ea78057de531c4dbcaa121df6f"],["/images/advocacy/advocacy_4.jpg","2cd0b282b32ae6c7af4f55b59c121d2b"],["/images/android-icon-144x144.png","b0616fd3d9b5f642ad7169af66657c69"],["/images/android-icon-192x192.png","ec908663836852c9f2c17b7ff21fd347"],["/images/android-icon-36x36.png","d8380adf1b1ffeb0da55593575d52e5a"],["/images/android-icon-48x48.png","aecc322181dd3aee5b6e36cd9a15ca1d"],["/images/android-icon-72x72.png","9268c604ea8c8ae9fec9861795ab5467"],["/images/android-icon-96x96.png","8e7e1533111409606117617c8499a9d1"],["/images/apple-icon-114x114.png","ffb35b6381c6bda34ecc90a66e2bcd9d"],["/images/apple-icon-120x120.png","cd5924d86acd4ceae7afe6406f3aeb59"],["/images/apple-icon-144x144.png","b0616fd3d9b5f642ad7169af66657c69"],["/images/apple-icon-152x152.png","9c7a5bc4cf854385b46a0172703b237b"],["/images/apple-icon-180x180.png","ece7bc7a14ab21716ae096b06d3fb4a9"],["/images/apple-icon-57x57.png","ad4214e72cf60caa0f9f384b99960cdd"],["/images/apple-icon-60x60.png","611ed9ec58634f5a9a8189c56af569f2"],["/images/apple-icon-72x72.png","9268c604ea8c8ae9fec9861795ab5467"],["/images/apple-icon-76x76.png","344af7ca78b9e6a59ce3cc60cddfe729"],["/images/apple-icon-precomposed.png","bf3aed1c6280b4debbddc45c9e420d62"],["/images/apple-icon.png","bf3aed1c6280b4debbddc45c9e420d62"],["/images/community/assemblies.jpg","1b0e6f797a97821d40d6791b9bf346a9"],["/images/community/become_member.jpg","29973142d79619bc2319f3a13c7e7c71"],["/images/community/junior.jpg","f3befb146e5090a64b1649bcb9e41dc5"],["/images/community/my_ers.jpg","272ca5e640eb090903bb2a5e3349c296"],["/images/course/Nicolino_Ambrosino.jpg","d06d273c1d9a9ce1ae2799831e446ed3"],["/images/course/course_event.jpg","ce94ee389a32e93774e0f336db670c5d"],["/images/course/course_img.jpg","7b2aef35b0fa4e3b2de8adc85e36bd99"],["/images/course/item_photo.jpg","244f6105052a2c92f5da962c01f8511d"],["/images/course/map.jpg","aa8242f388fa4e6c592ac31ca0249519"],["/images/elf/elf.png","bfd3789f208bf9a82f4a4a23ad4cca28"],["/images/elf/elf_1.jpg","39cfd344d532e299f648fd327c3fcbe9"],["/images/elf/elf_2.jpg","af16741d62dd51452eb3680e38cad795"],["/images/elf/elf_3.jpg","04dff6776b18fca56b115ab04d04d22d"],["/images/elf/elf_4.jpg","9de3745eb21450013c078027d80d25a8"],["/images/favicon-16x16.png","a80b33b485ab1cfad9fdc0ccacf6e3ca"],["/images/favicon-32x32.png","5f3c1d13a8e183db93b28d4ab3908413"],["/images/favicon-96x96.png","8e7e1533111409606117617c8499a9d1"],["/images/fb-icon.png","406fb14c68c2690010d1948dad3dc1bb"],["/images/fl-icon.png","36fce9283446b5d9cd9c7c9ac6e1bc6b"],["/images/home/education.jpg","ec169cfca652d14e353d9fad170e690b"],["/images/home/education_2.jpg","7a6471d2f9ece85e316c92eb2ae14e63"],["/images/home/educational_courses.jpg","7d3b7c6d96f791c864438b24afc8373e"],["/images/home/lsc.jpg","8000d931e90c39371f56081efa43bb51"],["/images/home/news160602.jpg","9867096bbc3bac1fe199e7b5eebaaa22"],["/images/home/sb.jpg","96ea2c25bdefbd2f190e2f39eec63331"],["/images/ie-spacer.gif","df3e567d6f16d040326c7a0ea29a4f41"],["/images/logo-white.png","20ec993127597c28fa5f2df6ae9589c5"],["/images/logo.png","b55acd037a4b2abd6cdd09943d53ccaf"],["/images/london2016.jpg","d4cdabdbb6a662170bbdb3dc3b04d6be"],["/images/mail-open-file.svg","5088bd027f7539c354187be9cb7d5121"],["/images/ms-icon-144x144.png","b0616fd3d9b5f642ad7169af66657c69"],["/images/ms-icon-150x150.png","fcfb55b791dd77de42f5df301bd5dfce"],["/images/ms-icon-310x310.png","668d0fbf77b8a8ccefcfbc9812b07b34"],["/images/ms-icon-70x70.png","f073339f1e9becc0ef1b8a9c88665661"],["/images/navigation/hlfl.png","85e82d36aaaeab05bc664f603928b680"],["/images/navigation/who.png","6cc38efed59a979324c910c9c331c67b"],["/images/news/hlfl.jpg","b33917ab13c9e1a09bce066289b16df3"],["/images/news/take-the-active.jpg","17d604c01c9e586721490e2ad46e3a41"],["/images/news/wcd2016.jpg","82fe40fc1683d0e5145f5db5f646a8b9"],["/images/note2.svg","9ec3176148aaf38be64ec7b965104c9d"],["/images/publications/Monograph.jpg","b4245aa940baaf4a0b6dcb6b3e1a45e4"],["/images/publications/air_quality_and_health.jpg","18c0b062909fb061ea7430ee4acc855c"],["/images/publications/breathe.jpg","1f684882521d13a50e7b680979e9eecb"],["/images/publications/copd.jpg","0b10659ce007d875df9d097837cb2ee0"],["/images/publications/erj.jpg","95ba8cfb361c2c5744302872d6524b70"],["/images/publications/erj_op.jpg","882fea035e9590f96ca3feac8239b40a"],["/images/publications/err.jpg","edefb858dd2db892ea287dc395cc23c5"],["/images/publications/european_lung_white_book.jpg","93c4d8ec7432da11a7f66cf20887fc96"],["/images/publications/firs_world_report.jpg","a7231e274cc5a4d20909c3a7b6ccf827"],["/images/publications/hand_book.jpg","63ed21369ab750cfae4371a505a593c2"],["/images/publications/red_book.jpg","c9178f1efa944653c7aed410e2b037e9"],["/images/publications/roadmap.jpg","814e23457c7969faf52a03f1dbb19a23"],["/images/publications/roadmap_2.png","3c91c3e336b1f84166402b12387a790c"],["/images/research/research_1.jpg","421d523ae117d2626889ec0cee95b7c3"],["/images/research/research_2.jpg","f285b3d52df21b6e17e0d6f85aeb43b0"],["/images/research/research_3.jpg","ff9c3f697c07c20340808036113161a3"],["/images/research/research_4.jpg","c62b37214c794f36ae8b990decd90969"],["/images/stories/executive-office/bsax.jpg","831fbe311fc4c884755eb9865b3988ea"],["/images/stories/executive-office/bward.jpg","0dddcfcd4354b0996f07709b51fbe4db"],["/images/stories/executive-office/congress.jpg","ba747683969f279894f8408d5f7d48c8"],["/images/stories/executive-office/corporate.jpg","3554a68970c1b8252fb62bd6609788b7"],["/images/stories/executive-office/cpannetier.jpg","219cf6c3a2ed199f6b0d8f4b7088a422"],["/images/stories/executive-office/educational.jpg","622a38f12032e48d18f8184b9c0ce9af"],["/images/stories/executive-office/elf.jpg","31cc38bf73817f2d5185bf3e3525945f"],["/images/stories/executive-office/eu.jpg","3d1243d2aa7dd0d92bb480abc9f5ee2c"],["/images/stories/executive-office/finance.jpg","105c2291b54ae432797564de0a7db1cd"],["/images/stories/executive-office/it.jpg","740683a20a94b05d9fa7e3947cda75e1"],["/images/stories/executive-office/membership.jpg","99d235f9c4e23db5a9c1cb844e9d348d"],["/images/stories/executive-office/pfoo.jpg","8c565385968e7aa6c526dd223b6d8393"],["/images/stories/executive-office/ppowell.jpg","408195a26ebc07116592bca2bea55008"],["/images/stories/executive-office/publications.jpg","212ed36737f7f1bddb9b00bd71e42f41"],["/images/stories/executive-office/scientific.jpg","4c940c3601f3aa73705bb75fe267c15e"],["/images/stories/executive-office/sdupasquier.jpg","eb67109107c4a351b6dfebf8294b71d0"],["/images/stories/executive-office/ssealy.jpg","b9ffa3c947b12320f88a1cd1772e3650"],["/images/stories/executive-office/wbill.jpg","620a5884289efe50bef16f495843ccdf"],["/images/stories/people/Agnes_Boots.jpg","92087ba5b664092bc02c4d3c892534cc"],["/images/stories/people/Andrea_Aliverti.jpg","dd112e00a5c73812214add228ca65968"],["/images/stories/people/Antonio_Spanevello.jpg","fd6495ae0da4068c907f2dbe3c5c202c"],["/images/stories/people/Bogdan_Dragos_Grigoriu.jpg","8ad96e85f873021ee834c7eda508ea0e"],["/images/stories/people/Carlos_Robalo.jpg","68e198ee3ebbb03ebdd7e68a50f30b67"],["/images/stories/people/Christer_Jansen.jpg","389e90e1c5814edaee283d43ce103d7b"],["/images/stories/people/Christian_M_Kaehler.jpg","7903cd2a086d22f8a733323843412b98"],["/images/stories/people/Dick_Heederik.jpg","099416002c8335492c3c68b776073db7"],["/images/stories/people/Dragan_R_Subotic.jpg","99d9ce4a050b880c5ed8b5d79203e480"],["/images/stories/people/Fabio_Midulla.jpg","2c8fd1149abc62b7b815d923c400d63c"],["/images/stories/people/Felix_JF_Herth.jpg","74725be78799aaf4b8c583e7a21cd0a5"],["/images/stories/people/Geert_Verleden.jpg","1a7f225308daa8af95fb8d719da2d476"],["/images/stories/people/Gernot_Rohde.jpg","83e3c3b0a2983a786c7b8343b2514919"],["/images/stories/people/Giovanni_Battista_Migliori.jpg","a996e96fe3762e0a7e366335915bcae4"],["/images/stories/people/Giovanni_Sotgiu.jpg","53843c89b2a5c55a3cc4dd94452f1f23"],["/images/stories/people/Guy_Joos.jpg","5b4b93963a407117a71ee687cb6b38c5"],["/images/stories/people/Ian_M_Adcock.jpg","33515378d7dce9f0e9a9bedcbe6daa5b"],["/images/stories/people/Irene_Steenbruggen.jpg","e7690092bde9814a1f22a966df0e9e15"],["/images/stories/people/Joajen_Vestbo.jpg","37d1485cb270fcb4f24f20d8455f4b2d"],["/images/stories/people/Jonathan_Grigg.jpg","ce2eef4539f51b35f1872465053c6b08"],["/images/stories/people/Maria_R_Bonsignore.jpg","c0ce0ca32996b00033bbf301d648a276"],["/images/stories/people/Mark_Elliott.jpg","b4dcacae9877fb081d77786268b401c4"],["/images/stories/people/Martijn_A_Spruit.jpg","0ffe1f24084ab59d642642b465d30644"],["/images/stories/people/Nicolas_Schonfeld.jpg","d082ecb4fab2783467a97bf9b53ead62"],["/images/stories/people/Paolo_Navalesi.jpg","19309a5649ad2d35fada180fbf3450db"],["/images/stories/people/Philipp_A_Schnabel.jpg","0e2e691f62a5c52cbe168f3e03ac8415"],["/images/stories/people/Renata_Riha.jpg","7cc860044302530d9cd20ce9831f9117"],["/images/stories/people/Stefano_Aliberti.jpg","e8d25dca856502e8a859fc6448773d76"],["/images/stories/people/Stylianos_Orfanos.jpg","c0e33e6e842471c7987dec2f01270dea"],["/images/stories/people/Venerino_Poletti.jpg","9cd71bd63c01ff491f33ed63dfbca0b9"],["/images/stories/people/christina_gratziou.jpg","3065b4ae5ce8b39ab8579abdaad9b184"],["/images/stories/people/dan-smyth.jpg","e322c974b0c8c7d334e4952a1d6fb940"],["/images/stories/people/elisabeth_bell.jpg","17ccb3504254e89407929724c8611898"],["/images/stories/people/erik-driessen.jpg","ed0bd5c17f5b4d670d87cfa278cddd38"],["/images/stories/people/ernst_eber.jpg","e17bd427ed24589dd1d2b8d11a40f83f"],["/images/stories/people/frans_de_jongh.jpg","49968d3a10dad5e5d1f1105e5e5f7515"],["/images/stories/people/guy_brusselle.jpg","06fda6390eae98fa01df77579929a55b"],["/images/stories/people/ildiko_horvath.jpg","8604990588e733dc514b3a1bd5144733"],["/images/stories/people/john_gibson.jpg","b5524cba1954227da58b1214904175a0"],["/images/stories/people/marc_miravitlles.jpg","3dc0797684ed028c027172d825191d30"],["/images/stories/people/maria_belvisi.jpg","976471b8a342291c27eb284239073abe"],["/images/stories/people/mina_gaga.jpg","b63769ae88cc1ec70304470bc6c5430a"],["/images/stories/people/otto_chris_burghuber.jpg","cdbfd81869058d6edbeb4074883ab561"],["/images/stories/people/robert-bals.jpg","34ea911091518565714cedeb6c79b7e2"],["/images/stories/people/rory_morty.jpg","f8599f71d399189ff435c529689ecc35"],["/images/stories/people/stephen_holgate.jpg","086e7ed6aa81b16fc486b6fe95220f34"],["/images/world.jpg","6a9ba57400637b48e7b6a0ede1e1943c"],["/js/sw-registration.js","373a64985db6c92d47e745b6b87bcf4c"]];
/* eslint-enable quotes, comma-spacing */
var CacheNamePrefix = 'sw-precache-v1--' + (self.registration ? self.registration.scope : '') + '-';


var IgnoreUrlParametersMatching = [/^utm_/];



var addDirectoryIndex = function (originalUrl, index) {
    var url = new URL(originalUrl);
    if (url.pathname.slice(-1) === '/') {
      url.pathname += index;
    }
    return url.toString();
  };

var getCacheBustedUrl = function (url, param) {
    param = param || Date.now();

    var urlWithCacheBusting = new URL(url);
    urlWithCacheBusting.search += (urlWithCacheBusting.search ? '&' : '') +
      'sw-precache=' + param;

    return urlWithCacheBusting.toString();
  };

var isPathWhitelisted = function (whitelist, absoluteUrlString) {
    // If the whitelist is empty, then consider all URLs to be whitelisted.
    if (whitelist.length === 0) {
      return true;
    }

    // Otherwise compare each path regex to the path of the URL passed in.
    var path = (new URL(absoluteUrlString)).pathname;
    return whitelist.some(function(whitelistedPathRegex) {
      return path.match(whitelistedPathRegex);
    });
  };

var populateCurrentCacheNames = function (precacheConfig,
    cacheNamePrefix, baseUrl) {
    var absoluteUrlToCacheName = {};
    var currentCacheNamesToAbsoluteUrl = {};

    precacheConfig.forEach(function(cacheOption) {
      var absoluteUrl = new URL(cacheOption[0], baseUrl).toString();
      var cacheName = cacheNamePrefix + absoluteUrl + '-' + cacheOption[1];
      currentCacheNamesToAbsoluteUrl[cacheName] = absoluteUrl;
      absoluteUrlToCacheName[absoluteUrl] = cacheName;
    });

    return {
      absoluteUrlToCacheName: absoluteUrlToCacheName,
      currentCacheNamesToAbsoluteUrl: currentCacheNamesToAbsoluteUrl
    };
  };

var stripIgnoredUrlParameters = function (originalUrl,
    ignoreUrlParametersMatching) {
    var url = new URL(originalUrl);

    url.search = url.search.slice(1) // Exclude initial '?'
      .split('&') // Split into an array of 'key=value' strings
      .map(function(kv) {
        return kv.split('='); // Split each 'key=value' string into a [key, value] array
      })
      .filter(function(kv) {
        return ignoreUrlParametersMatching.every(function(ignoredRegex) {
          return !ignoredRegex.test(kv[0]); // Return true iff the key doesn't match any of the regexes.
        });
      })
      .map(function(kv) {
        return kv.join('='); // Join each [key, value] array into a 'key=value' string
      })
      .join('&'); // Join the array of 'key=value' strings into a string with '&' in between each

    return url.toString();
  };


var mappings = populateCurrentCacheNames(PrecacheConfig, CacheNamePrefix, self.location);
var AbsoluteUrlToCacheName = mappings.absoluteUrlToCacheName;
var CurrentCacheNamesToAbsoluteUrl = mappings.currentCacheNamesToAbsoluteUrl;

function deleteAllCaches() {
  return caches.keys().then(function(cacheNames) {
    return Promise.all(
      cacheNames.map(function(cacheName) {
        return caches.delete(cacheName);
      })
    );
  });
}

self.addEventListener('install', function(event) {
  event.waitUntil(
    // Take a look at each of the cache names we expect for this version.
    Promise.all(Object.keys(CurrentCacheNamesToAbsoluteUrl).map(function(cacheName) {
      return caches.open(cacheName).then(function(cache) {
        // Get a list of all the entries in the specific named cache.
        // For caches that are already populated for a given version of a
        // resource, there should be 1 entry.
        return cache.keys().then(function(keys) {
          // If there are 0 entries, either because this is a brand new version
          // of a resource or because the install step was interrupted the
          // last time it ran, then we need to populate the cache.
          if (keys.length === 0) {
            // Use the last bit of the cache name, which contains the hash,
            // as the cache-busting parameter.
            // See https://github.com/GoogleChrome/sw-precache/issues/100
            var cacheBustParam = cacheName.split('-').pop();
            var urlWithCacheBusting = getCacheBustedUrl(
              CurrentCacheNamesToAbsoluteUrl[cacheName], cacheBustParam);

            var request = new Request(urlWithCacheBusting,
              {credentials: 'same-origin'});
            return fetch(request).then(function(response) {
              if (response.ok) {
                return cache.put(CurrentCacheNamesToAbsoluteUrl[cacheName],
                  response);
              }

              console.error('Request for %s returned a response status %d, ' +
                'so not attempting to cache it.',
                urlWithCacheBusting, response.status);
              // Get rid of the empty cache if we can't add a successful response to it.
              return caches.delete(cacheName);
            });
          }
        });
      });
    })).then(function() {
      return caches.keys().then(function(allCacheNames) {
        return Promise.all(allCacheNames.filter(function(cacheName) {
          return cacheName.indexOf(CacheNamePrefix) === 0 &&
            !(cacheName in CurrentCacheNamesToAbsoluteUrl);
          }).map(function(cacheName) {
            return caches.delete(cacheName);
          })
        );
      });
    }).then(function() {
      if (typeof self.skipWaiting === 'function') {
        // Force the SW to transition from installing -> active state
        self.skipWaiting();
      }
    })
  );
});

if (self.clients && (typeof self.clients.claim === 'function')) {
  self.addEventListener('activate', function(event) {
    event.waitUntil(self.clients.claim());
  });
}

self.addEventListener('message', function(event) {
  if (event.data.command === 'delete_all') {
    console.log('About to delete all caches...');
    deleteAllCaches().then(function() {
      console.log('Caches deleted.');
      event.ports[0].postMessage({
        error: null
      });
    }).catch(function(error) {
      console.log('Caches not deleted:', error);
      event.ports[0].postMessage({
        error: error
      });
    });
  }
});


self.addEventListener('fetch', function(event) {
  if (event.request.method === 'GET') {
    var urlWithoutIgnoredParameters = stripIgnoredUrlParameters(event.request.url,
      IgnoreUrlParametersMatching);

    var cacheName = AbsoluteUrlToCacheName[urlWithoutIgnoredParameters];
    var directoryIndex = 'index.html';
    if (!cacheName && directoryIndex) {
      urlWithoutIgnoredParameters = addDirectoryIndex(urlWithoutIgnoredParameters, directoryIndex);
      cacheName = AbsoluteUrlToCacheName[urlWithoutIgnoredParameters];
    }

    var navigateFallback = '';
    // Ideally, this would check for event.request.mode === 'navigate', but that is not widely
    // supported yet:
    // https://code.google.com/p/chromium/issues/detail?id=540967
    // https://bugzilla.mozilla.org/show_bug.cgi?id=1209081
    if (!cacheName && navigateFallback && event.request.headers.has('accept') &&
        event.request.headers.get('accept').includes('text/html') &&
        /* eslint-disable quotes, comma-spacing */
        isPathWhitelisted([], event.request.url)) {
        /* eslint-enable quotes, comma-spacing */
      var navigateFallbackUrl = new URL(navigateFallback, self.location);
      cacheName = AbsoluteUrlToCacheName[navigateFallbackUrl.toString()];
    }

    if (cacheName) {
      event.respondWith(
        // Rely on the fact that each cache we manage should only have one entry, and return that.
        caches.open(cacheName).then(function(cache) {
          return cache.keys().then(function(keys) {
            return cache.match(keys[0]).then(function(response) {
              if (response) {
                return response;
              }
              // If for some reason the response was deleted from the cache,
              // raise and exception and fall back to the fetch() triggered in the catch().
              throw Error('The cache ' + cacheName + ' is empty.');
            });
          });
        }).catch(function(e) {
          console.warn('Couldn\'t serve response for "%s" from cache: %O', event.request.url, e);
          return fetch(event.request);
        })
      );
    }
  }
});


// Runtime cache configuration, using the sw-toolbox library.

toolbox.router.get(/^https:\/\/new\.ersnet\.org/, toolbox.networkFirst, {"cache":{"name":"european-respiratory-offline-pages"}});
toolbox.router.get(/^https:\/\/new\.ersnet\.org\//, toolbox.networkFirst, {"cache":{"name":"european-respiratory-offline-pages"}});
toolbox.router.get(/^https:\/\/new\.ersnet\.org\/#home/, toolbox.networkFirst, {"cache":{"name":"european-respiratory-offline-pages"}});
toolbox.router.get(/^https:\/\/new\.ersnet\.org\/the-society\/news/, toolbox.cacheFirst, {"cache":{"maxEntries":10,"name":"european-respiratory-offline-pages"}});
toolbox.router.get(/^https:\/\/new\.ersnet\.org\/#news/, toolbox.cacheFirst, {"cache":{"maxEntries":10,"name":"european-respiratory-offline-pages"}});
toolbox.router.get(/^https:\/\/bootstrap\.ersnet\.org\/js\/all\.js/, toolbox.cacheFirst, {"cache":{"maxEntries":10,"name":"european-respiratory-assets"}});
toolbox.router.get(/^https:\/\/bootstrap\.ersnet\.org\/js\/jquery\.min\.js/, toolbox.cacheFirst, {"cache":{"maxEntries":10,"name":"european-respiratory-assets"}});
toolbox.router.get(/^https:\/\/bootstrap\.ersnet\.org\/js\/fullpage\.js/, toolbox.cacheFirst, {"cache":{"maxEntries":10,"name":"european-respiratory-assets"}});
toolbox.router.get(/^https:\/\/bootstrap\.ersnet\.org\/js\/app-home\.js/, toolbox.cacheFirst, {"cache":{"maxEntries":10,"name":"european-respiratory-assets"}});
toolbox.router.get(/^https:\/\/bootstrap\.ersnet\.org\/fonts\/DINpro\/DINWebPro\.woff/, toolbox.cacheFirst, {"cache":{"maxEntries":10,"name":"european-respiratory-assets"}});
toolbox.router.get(/^https:\/\/bootstrap\.ersnet\.org\/fonts\/icomoon\/fonts\/icomoon\.woff/, toolbox.cacheFirst, {"cache":{"maxEntries":10,"name":"european-respiratory-assets"}});
toolbox.router.get(/^https:\/\/bootstrap\.ersnet\.org\/fonts\/icomoon\/fonts\/icomoon\.ttf/, toolbox.cacheFirst, {"cache":{"maxEntries":10,"name":"european-respiratory-assets"}});
toolbox.router.get(/^https:\/\/bootstrap\.ersnet\.org\/fonts\/stroke-7\/fonts\/Stroke-7\.ttf/, toolbox.cacheFirst, {"cache":{"maxEntries":10,"name":"european-respiratory-assets"}});
toolbox.router.get(/^https:\/\/bootstrap\.ersnet\.org\/fonts\/stroke-7\/fonts\/Stroke-7\.woff/, toolbox.cacheFirst, {"cache":{"maxEntries":10,"name":"european-respiratory-assets"}});
toolbox.router.get(/^https:\/\/fonts\.googleapis\.com\/css\?family=Amiri:400,400italic,700,700italic/, toolbox.cacheFirst, {"cache":{"maxEntries":10,"name":"european-respiratory-assets"}});
toolbox.router.get(/^https:\/\/bootstrap\.ersnet\.org\/css\/all\.css/, toolbox.cacheFirst, {"cache":{"maxEntries":10,"name":"european-respiratory-assets"}});
toolbox.router.get(/^https:\/\/bootstrap\.ersnet\.org\/images\/logo-full-retina\.png/, toolbox.cacheFirst, {"cache":{"maxEntries":10,"name":"european-respiratory-assets"}});



