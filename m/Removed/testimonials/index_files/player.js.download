/*!@vimeo/player v2.0.1 | (c) 2016 Vimeo | MIT License | https://github.com/vimeo/player.js*/(function(global,factory){typeof exports==='object'&&typeof module!=='undefined'?module.exports=factory():typeof define==='function'&&define.amd?define(factory):(global.Vimeo=global.Vimeo||{},global.Vimeo.Player=factory());}(this,(function(){'use strict';var arrayIndexOfSupport=typeof Array.prototype.indexOf!=='undefined';var postMessageSupport=typeof window.postMessage!=='undefined';if(!arrayIndexOfSupport||!postMessageSupport){throw new Error('Sorry, the Vimeo Player API is not available in this browser.');}
var commonjsGlobal=typeof window!=='undefined'?window:typeof global!=='undefined'?global:typeof self!=='undefined'?self:{};function createCommonjsModule(fn,module){return module={exports:{}},fn(module,module.exports),module.exports;}
var index=createCommonjsModule(function(module,exports){(function(exports){'use strict';var i;var defineProperty=Object.defineProperty,is=function is(a,b){return a===b||a!==a&&b!==b;};if(typeof WeakMap=='undefined'){exports.WeakMap=createCollection({'delete':sharedDelete,clear:sharedClear,get:sharedGet,has:mapHas,set:sharedSet},true);}
if(typeof Map=='undefined'||typeof new Map().values!=='function'||!new Map().values().next){exports.Map=createCollection({'delete':sharedDelete,has:mapHas,get:sharedGet,set:sharedSet,keys:sharedKeys,values:sharedValues,entries:mapEntries,forEach:sharedForEach,clear:sharedClear});}
if(typeof Set=='undefined'||typeof new Set().values!=='function'||!new Set().values().next){exports.Set=createCollection({has:setHas,add:sharedAdd,'delete':sharedDelete,clear:sharedClear,keys:sharedValues,values:sharedValues,entries:setEntries,forEach:sharedForEach});}
if(typeof WeakSet=='undefined'){exports.WeakSet=createCollection({'delete':sharedDelete,add:sharedAdd,clear:sharedClear,has:setHas},true);}
function createCollection(proto,objectOnly){function Collection(a){if(!this||this.constructor!==Collection)return new Collection(a);this._keys=[];this._values=[];this._itp=[];this.objectOnly=objectOnly;if(a)init.call(this,a);}
if(!objectOnly){defineProperty(proto,'size',{get:sharedSize});}
proto.constructor=Collection;Collection.prototype=proto;return Collection;}
function init(a){var i;if(this.add)a.forEach(this.add,this);else a.forEach(function(a){this.set(a[0],a[1]);},this);}
function sharedDelete(key){if(this.has(key)){this._keys.splice(i,1);this._values.splice(i,1);this._itp.forEach(function(p){if(i<p[0])p[0]--;});}
return-1<i;}
function sharedGet(key){return this.has(key)?this._values[i]:undefined;}
function has(list,key){if(this.objectOnly&&key!==Object(key))throw new TypeError("Invalid value used as weak collection key");if(key!=key||key===0)for(i=list.length;i--&&!is(list[i],key);){}else i=list.indexOf(key);return-1<i;}
function setHas(value){return has.call(this,this._values,value);}
function mapHas(value){return has.call(this,this._keys,value);}
function sharedSet(key,value){this.has(key)?this._values[i]=value:this._values[this._keys.push(key)-1]=value;return this;}
function sharedAdd(value){if(!this.has(value))this._values.push(value);return this;}
function sharedClear(){(this._keys||0).length=this._values.length=0;}
function sharedKeys(){return sharedIterator(this._itp,this._keys);}
function sharedValues(){return sharedIterator(this._itp,this._values);}
function mapEntries(){return sharedIterator(this._itp,this._keys,this._values);}
function setEntries(){return sharedIterator(this._itp,this._values,this._values);}
function sharedIterator(itp,array,array2){var p=[0],done=false;itp.push(p);return{next:function next(){var v,k=p[0];if(!done&&k<array.length){v=array2?[array[k],array2[k]]:array[k];p[0]++;}else{done=true;itp.splice(itp.indexOf(p),1);}
return{done:done,value:v};}};}
function sharedSize(){return this._values.length;}
function sharedForEach(callback,context){var it=this.entries();for(;;){var r=it.next();if(r.done)break;callback.call(context,r.value[1],r.value[0],this);}}})(typeof exports!='undefined'&&typeof commonjsGlobal!='undefined'?commonjsGlobal:window);});var npo_src=createCommonjsModule(function(module){var _typeof=typeof Symbol==="function"&&typeof Symbol.iterator==="symbol"?function(obj){return typeof obj;}:function(obj){return obj&&typeof Symbol==="function"&&obj.constructor===Symbol&&obj!==Symbol.prototype?"symbol":typeof obj;};/*! Native Promise Only
v0.8.1 (c) Kyle Simpson
MIT License: http://getify.mit-license.org
*/(function UMD(name,context,definition){context[name]=context[name]||definition();if(typeof module!="undefined"&&module.exports){module.exports=context[name];}else if(typeof define=="function"&&define.amd){define(function $AMD$(){return context[name];});}})("Promise",typeof commonjsGlobal!="undefined"?commonjsGlobal:commonjsGlobal,function DEF(){"use strict";var builtInProp,cycle,scheduling_queue,ToString=Object.prototype.toString,timer=typeof setImmediate!="undefined"?function timer(fn){return setImmediate(fn);}:setTimeout;try{Object.defineProperty({},"x",{});builtInProp=function builtInProp(obj,name,val,config){return Object.defineProperty(obj,name,{value:val,writable:true,configurable:config!==false});};}catch(err){builtInProp=function builtInProp(obj,name,val){obj[name]=val;return obj;};}
scheduling_queue=function Queue(){var first,last,item;function Item(fn,self){this.fn=fn;this.self=self;this.next=void 0;}
return{add:function add(fn,self){item=new Item(fn,self);if(last){last.next=item;}else{first=item;}
last=item;item=void 0;},drain:function drain(){var f=first;first=last=cycle=void 0;while(f){f.fn.call(f.self);f=f.next;}}};}();function schedule(fn,self){scheduling_queue.add(fn,self);if(!cycle){cycle=timer(scheduling_queue.drain);}}
function isThenable(o){var _then,o_type=typeof o==="undefined"?"undefined":_typeof(o);if(o!=null&&(o_type=="object"||o_type=="function")){_then=o.then;}
return typeof _then=="function"?_then:false;}
function notify(){for(var i=0;i<this.chain.length;i++){notifyIsolated(this,this.state===1?this.chain[i].success:this.chain[i].failure,this.chain[i]);}
this.chain.length=0;}
function notifyIsolated(self,cb,chain){var ret,_then;try{if(cb===false){chain.reject(self.msg);}else{if(cb===true){ret=self.msg;}else{ret=cb.call(void 0,self.msg);}
if(ret===chain.promise){chain.reject(TypeError("Promise-chain cycle"));}else if(_then=isThenable(ret)){_then.call(ret,chain.resolve,chain.reject);}else{chain.resolve(ret);}}}catch(err){chain.reject(err);}}
function resolve(msg){var _then,self=this;if(self.triggered){return;}
self.triggered=true;if(self.def){self=self.def;}
try{if(_then=isThenable(msg)){schedule(function(){var def_wrapper=new MakeDefWrapper(self);try{_then.call(msg,function $resolve$(){resolve.apply(def_wrapper,arguments);},function $reject$(){reject.apply(def_wrapper,arguments);});}catch(err){reject.call(def_wrapper,err);}});}else{self.msg=msg;self.state=1;if(self.chain.length>0){schedule(notify,self);}}}catch(err){reject.call(new MakeDefWrapper(self),err);}}
function reject(msg){var self=this;if(self.triggered){return;}
self.triggered=true;if(self.def){self=self.def;}
self.msg=msg;self.state=2;if(self.chain.length>0){schedule(notify,self);}}
function iteratePromises(Constructor,arr,resolver,rejecter){for(var idx=0;idx<arr.length;idx++){(function IIFE(idx){Constructor.resolve(arr[idx]).then(function $resolver$(msg){resolver(idx,msg);},rejecter);})(idx);}}
function MakeDefWrapper(self){this.def=self;this.triggered=false;}
function MakeDef(self){this.promise=self;this.state=0;this.triggered=false;this.chain=[];this.msg=void 0;}
function Promise(executor){if(typeof executor!="function"){throw TypeError("Not a function");}
if(this.__NPO__!==0){throw TypeError("Not a promise");}
this.__NPO__=1;var def=new MakeDef(this);this["then"]=function then(success,failure){var o={success:typeof success=="function"?success:true,failure:typeof failure=="function"?failure:false};o.promise=new this.constructor(function extractChain(resolve,reject){if(typeof resolve!="function"||typeof reject!="function"){throw TypeError("Not a function");}
o.resolve=resolve;o.reject=reject;});def.chain.push(o);if(def.state!==0){schedule(notify,def);}
return o.promise;};this["catch"]=function $catch$(failure){return this.then(void 0,failure);};try{executor.call(void 0,function publicResolve(msg){resolve.call(def,msg);},function publicReject(msg){reject.call(def,msg);});}catch(err){reject.call(def,err);}}
var PromisePrototype=builtInProp({},"constructor",Promise,false);Promise.prototype=PromisePrototype;builtInProp(PromisePrototype,"__NPO__",0,false);builtInProp(Promise,"resolve",function Promise$resolve(msg){var Constructor=this;if(msg&&(typeof msg==="undefined"?"undefined":_typeof(msg))=="object"&&msg.__NPO__===1){return msg;}
return new Constructor(function executor(resolve,reject){if(typeof resolve!="function"||typeof reject!="function"){throw TypeError("Not a function");}
resolve(msg);});});builtInProp(Promise,"reject",function Promise$reject(msg){return new this(function executor(resolve,reject){if(typeof resolve!="function"||typeof reject!="function"){throw TypeError("Not a function");}
reject(msg);});});builtInProp(Promise,"all",function Promise$all(arr){var Constructor=this;if(ToString.call(arr)!="[object Array]"){return Constructor.reject(TypeError("Not an array"));}
if(arr.length===0){return Constructor.resolve([]);}
return new Constructor(function executor(resolve,reject){if(typeof resolve!="function"||typeof reject!="function"){throw TypeError("Not a function");}
var len=arr.length,msgs=Array(len),count=0;iteratePromises(Constructor,arr,function resolver(idx,msg){msgs[idx]=msg;if(++count===len){resolve(msgs);}},reject);});});builtInProp(Promise,"race",function Promise$race(arr){var Constructor=this;if(ToString.call(arr)!="[object Array]"){return Constructor.reject(TypeError("Not an array"));}
return new Constructor(function executor(resolve,reject){if(typeof resolve!="function"||typeof reject!="function"){throw TypeError("Not a function");}
iteratePromises(Constructor,arr,function resolver(idx,msg){resolve(msg);},reject);});});return Promise;});});var callbackMap=new WeakMap();function storeCallback(player,name,callback){var playerCallbacks=callbackMap.get(player.element)||{};if(!(name in playerCallbacks)){playerCallbacks[name]=[];}
playerCallbacks[name].push(callback);callbackMap.set(player.element,playerCallbacks);}
function getCallbacks(player,name){var playerCallbacks=callbackMap.get(player.element)||{};return playerCallbacks[name]||[];}
function removeCallback(player,name,callback){var playerCallbacks=callbackMap.get(player.element)||{};if(!playerCallbacks[name]){return true;}
if(!callback){playerCallbacks[name]=[];callbackMap.set(player.element,playerCallbacks);return true;}
var index=playerCallbacks[name].indexOf(callback);if(index!==-1){playerCallbacks[name].splice(index,1);}
callbackMap.set(player.element,playerCallbacks);return playerCallbacks[name]&&playerCallbacks[name].length===0;}
function shiftCallbacks(player,name){var playerCallbacks=getCallbacks(player,name);if(playerCallbacks.length<1){return false;}
var callback=playerCallbacks.shift();removeCallback(player,name,callback);return callback;}
function swapCallbacks(oldElement,newElement){var playerCallbacks=callbackMap.get(oldElement);callbackMap.set(newElement,playerCallbacks);callbackMap.delete(oldElement);}
function getMethodName(prop,type){if(prop.indexOf(type.toLowerCase())===0){return prop;}
return ''+type.toLowerCase()+prop.substr(0,1).toUpperCase()+prop.substr(1);}
function isDomElement(element){return element instanceof window.HTMLElement;}
function isInteger(value){return!isNaN(parseFloat(value))&&isFinite(value)&&Math.floor(value)==value;}
function isVimeoUrl(url){return(/^(https?:)?\/\/(player.)?vimeo.com(?=$|\/)/.test(url));}
function getVimeoUrl(){var oEmbedParameters=arguments.length>0&&arguments[0]!==undefined?arguments[0]:{};var id=oEmbedParameters.id;var url=oEmbedParameters.url;var idOrUrl=id||url;if(!idOrUrl){throw new Error('An id or url must be passed, either in an options object or as a data-vimeo-id or data-vimeo-url attribute.');}
if(isInteger(idOrUrl)){return 'https://vimeo.com/'+idOrUrl;}
if(isVimeoUrl(idOrUrl)){return idOrUrl.replace('http:','https:');}
if(id){throw new TypeError('\u201C'+id+'\u201D is not a valid video id.');}
throw new TypeError('\u201C'+idOrUrl+'\u201D is not a vimeo.com url.');}
var oEmbedParameters=['id','url','width','maxwidth','height','maxheight','portrait','title','byline','color','autoplay','autopause','loop','responsive'];function getOEmbedParameters(element){var defaults=arguments.length>1&&arguments[1]!==undefined?arguments[1]:{};return oEmbedParameters.reduce(function(params,param){var value=element.getAttribute('data-vimeo-'+param);if(value||value===''){params[param]=value===''?1:value;}
return params;},defaults);}
function getOEmbedData(videoUrl){var params=arguments.length>1&&arguments[1]!==undefined?arguments[1]:{};return new Promise(function(resolve,reject){if(!isVimeoUrl(videoUrl)){throw new TypeError('\u201C'+videoUrl+'\u201D is not a vimeo.com url.');}
var url='https://vimeo.com/api/oembed.json?url='+encodeURIComponent(videoUrl);for(var param in params){if(params.hasOwnProperty(param)){url+='&'+param+'='+encodeURIComponent(params[param]);}}
var xhr='XDomainRequest'in window?new XDomainRequest():new XMLHttpRequest();xhr.open('GET',url,true);xhr.onload=function(){if(xhr.status===404){reject(new Error('\u201C'+videoUrl+'\u201D was not found.'));return;}
if(xhr.status===403){reject(new Error('\u201C'+videoUrl+'\u201D is not embeddable.'));return;}
try{var json=JSON.parse(xhr.responseText);resolve(json);}catch(error){reject(error);}};xhr.onerror=function(){var status=xhr.status?' ('+xhr.status+')':'';reject(new Error('There was an error fetching the embed code from Vimeo'+status+'.'));};xhr.send();});}
function createEmbed(_ref,element){var html=_ref.html;if(!element){throw new TypeError('An element must be provided');}
if(element.getAttribute('data-vimeo-initialized')!==null){return element.querySelector('iframe');}
var div=document.createElement('div');div.innerHTML=html;element.appendChild(div.firstChild);element.setAttribute('data-vimeo-initialized','true');return element.querySelector('iframe');}
function initializeEmbeds(){var parent=arguments.length>0&&arguments[0]!==undefined?arguments[0]:document;var elements=[].slice.call(parent.querySelectorAll('[data-vimeo-id], [data-vimeo-url]'));var handleError=function handleError(error){if('console'in window&&console.error){console.error('There was an error creating an embed: '+error);}};elements.forEach(function(element){try{if(element.getAttribute('data-vimeo-defer')!==null){return;}
var params=getOEmbedParameters(element);var url=getVimeoUrl(params);getOEmbedData(url,params).then(function(data){return createEmbed(data,element);}).catch(handleError);}catch(error){handleError(error);}});}
function parseMessageData(data){if(typeof data==='string'){data=JSON.parse(data);}
return data;}
function postMessage(player,method,params){if(!player.element.contentWindow.postMessage){return;}
var message={method:method};if(params!==undefined){message.value=params;}
var ieVersion=parseFloat(navigator.userAgent.toLowerCase().replace(/^.*msie (\d+).*$/,'$1'));if(ieVersion>=8&&ieVersion<10){message=JSON.stringify(message);}
player.element.contentWindow.postMessage(message,player.origin);}
function processData(player,data){data=parseMessageData(data);var callbacks=[];var param=void 0;if(data.event){if(data.event==='error'){var promises=getCallbacks(player,data.data.method);promises.forEach(function(promise){var error=new Error(data.data.message);error.name=data.data.name;promise.reject(error);removeCallback(player,data.data.method,promise);});}
callbacks=getCallbacks(player,'event:'+data.event);param=data.data;}else if(data.method){var callback=shiftCallbacks(player,data.method);if(callback){callbacks.push(callback);param=data.value;}}
callbacks.forEach(function(callback){try{if(typeof callback==='function'){callback.call(player,param);return;}
callback.resolve(param);}catch(e){}});}
var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||false;descriptor.configurable=true;if("value"in descriptor)descriptor.writable=true;Object.defineProperty(target,descriptor.key,descriptor);}}return function(Constructor,protoProps,staticProps){if(protoProps)defineProperties(Constructor.prototype,protoProps);if(staticProps)defineProperties(Constructor,staticProps);return Constructor;};}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor)){throw new TypeError("Cannot call a class as a function");}}
var playerMap=new WeakMap();var readyMap=new WeakMap();var Player=function(){function Player(element){var _this=this;var options=arguments.length>1&&arguments[1]!==undefined?arguments[1]:{};_classCallCheck(this,Player);if(window.jQuery&&element instanceof jQuery){if(element.length>1&&window.console&&console.warn){console.warn('A jQuery object with multiple elements was passed, using the first element.');}
element=element[0];}
if(typeof element==='string'){element=document.getElementById(element);}
if(!isDomElement(element)){throw new TypeError('You must pass either a valid element or a valid id.');}
if(element.nodeName!=='IFRAME'){var iframe=element.querySelector('iframe');if(iframe){element=iframe;}}
if(element.nodeName==='IFRAME'&&!isVimeoUrl(element.getAttribute('src')||'')){throw new Error('The player element passed isn’t a Vimeo embed.');}
if(playerMap.has(element)){return playerMap.get(element);}
this.element=element;this.origin='*';var readyPromise=new npo_src(function(resolve,reject){var onMessage=function onMessage(event){if(!isVimeoUrl(event.origin)||_this.element.contentWindow!==event.source){return;}
if(_this.origin==='*'){_this.origin=event.origin;}
var data=parseMessageData(event.data);var isReadyEvent='event'in data&&data.event==='ready';var isPingResponse='method'in data&&data.method==='ping';if(isReadyEvent||isPingResponse){_this.element.setAttribute('data-ready','true');resolve();return;}
processData(_this,data);};if(window.addEventListener){window.addEventListener('message',onMessage,false);}else if(window.attachEvent){window.attachEvent('onmessage',onMessage);}
if(_this.element.nodeName!=='IFRAME'){var params=getOEmbedParameters(element,options);var url=getVimeoUrl(params);getOEmbedData(url,params).then(function(data){var iframe=createEmbed(data,element);_this.element=iframe;swapCallbacks(element,iframe);return data;}).catch(function(error){return reject(error);});}});readyMap.set(this,readyPromise);playerMap.set(this.element,this);if(this.element.nodeName==='IFRAME'){postMessage(this,'ping');}
return this;}
_createClass(Player,[{key:'callMethod',value:function callMethod(name){var _this2=this;var args=arguments.length>1&&arguments[1]!==undefined?arguments[1]:{};return new npo_src(function(resolve,reject){return _this2.ready().then(function(){storeCallback(_this2,name,{resolve:resolve,reject:reject});postMessage(_this2,name,args);});});}},{key:'get',value:function get(name){var _this3=this;return new npo_src(function(resolve,reject){name=getMethodName(name,'get');return _this3.ready().then(function(){storeCallback(_this3,name,{resolve:resolve,reject:reject});postMessage(_this3,name);});});}},{key:'set',value:function set(name,value){var _this4=this;return npo_src.resolve(value).then(function(val){name=getMethodName(name,'set');if(val===undefined||val===null){throw new TypeError('There must be a value to set.');}
return _this4.ready().then(function(){return new npo_src(function(resolve,reject){storeCallback(_this4,name,{resolve:resolve,reject:reject});postMessage(_this4,name,val);});});});}},{key:'on',value:function on(eventName,callback){if(!eventName){throw new TypeError('You must pass an event name.');}
if(!callback){throw new TypeError('You must pass a callback function.');}
if(typeof callback!=='function'){throw new TypeError('The callback must be a function.');}
var callbacks=getCallbacks(this,'event:'+eventName);if(callbacks.length===0){this.callMethod('addEventListener',eventName).catch(function(){});}
storeCallback(this,'event:'+eventName,callback);}},{key:'off',value:function off(eventName,callback){if(!eventName){throw new TypeError('You must pass an event name.');}
if(callback&&typeof callback!=='function'){throw new TypeError('The callback must be a function.');}
var lastCallback=removeCallback(this,'event:'+eventName,callback);if(lastCallback){this.callMethod('removeEventListener',eventName).catch(function(e){});}}},{key:'loadVideo',value:function loadVideo(id){return this.callMethod('loadVideo',id);}},{key:'ready',value:function ready(){var readyPromise=readyMap.get(this);return npo_src.resolve(readyPromise);}},{key:'addCuePoint',value:function addCuePoint(time){var data=arguments.length>1&&arguments[1]!==undefined?arguments[1]:{};return this.callMethod('addCuePoint',{time:time,data:data});}},{key:'removeCuePoint',value:function removeCuePoint(id){return this.callMethod('removeCuePoint',id);}},{key:'enableTextTrack',value:function enableTextTrack(language,kind){if(!language){throw new TypeError('You must pass a language.');}
return this.callMethod('enableTextTrack',{language:language,kind:kind});}},{key:'disableTextTrack',value:function disableTextTrack(){return this.callMethod('disableTextTrack');}},{key:'pause',value:function pause(){return this.callMethod('pause');}},{key:'play',value:function play(){return this.callMethod('play');}},{key:'unload',value:function unload(){return this.callMethod('unload');}},{key:'getAutopause',value:function getAutopause(){return this.get('autopause');}},{key:'setAutopause',value:function setAutopause(autopause){return this.set('autopause',autopause);}},{key:'getColor',value:function getColor(){return this.get('color');}},{key:'setColor',value:function setColor(color){return this.set('color',color);}},{key:'getCuePoints',value:function getCuePoints(){return this.get('cuePoints');}},{key:'getCurrentTime',value:function getCurrentTime(){return this.get('currentTime');}},{key:'setCurrentTime',value:function setCurrentTime(currentTime){return this.set('currentTime',currentTime);}},{key:'getDuration',value:function getDuration(){return this.get('duration');}},{key:'getEnded',value:function getEnded(){return this.get('ended');}},{key:'getLoop',value:function getLoop(){return this.get('loop');}},{key:'setLoop',value:function setLoop(loop){return this.set('loop',loop);}},{key:'getPaused',value:function getPaused(){return this.get('paused');}},{key:'getTextTracks',value:function getTextTracks(){return this.get('textTracks');}},{key:'getVideoEmbedCode',value:function getVideoEmbedCode(){return this.get('videoEmbedCode');}},{key:'getVideoId',value:function getVideoId(){return this.get('videoId');}},{key:'getVideoTitle',value:function getVideoTitle(){return this.get('videoTitle');}},{key:'getVideoWidth',value:function getVideoWidth(){return this.get('videoWidth');}},{key:'getVideoHeight',value:function getVideoHeight(){return this.get('videoHeight');}},{key:'getVideoUrl',value:function getVideoUrl(){return this.get('videoUrl');}},{key:'getVolume',value:function getVolume(){return this.get('volume');}},{key:'setVolume',value:function setVolume(volume){return this.set('volume',volume);}}]);return Player;}();initializeEmbeds();return Player;})));