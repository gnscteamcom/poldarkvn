webpackJsonpjwplayer([2],{26:function(t,e,i){var a,r;a=[i(1),i(28),i(2),i(21),i(20)],r=function(t,e,i,a,r){function n(e){if(this._currentTextTrackIndex=-1,e){if(this._textTracks?(this._textTracks=t.reject(this._textTracks,function(t){if(this.renderNatively&&"nativecaptions"===t._id)return delete this._tracksById[t._id],!0},this),delete this._tracksById.nativemetadata):this._initTextTracks(),e.length){var a=0,n=e.length;for(a;a<n;a++){var s=e[a];if(!s._id){if("captions"===s.kind||"metadata"===s.kind){if(s._id="native"+s.kind,!s.label&&"captions"===s.kind){var c=r.createLabel(s,this._unknownCount);s.name=c.label,this._unknownCount=c.unknownCount}}else s._id=r.createId(s,this._textTracks.length);s.inuse=!0}if(s.inuse&&!this._tracksById[s._id])if("metadata"===s.kind)s.mode="hidden",s.oncuechange=L.bind(this),this._tracksById[s._id]=s;else if(b(s.kind)){var d,u=s.mode;if(s.mode="hidden",!s.cues.length&&s.embedded)continue;if(s.mode=u,this._cuesByTrackId[s._id]&&!this._cuesByTrackId[s._id].loaded){for(var o=this._cuesByTrackId[s._id].cues;d=o.shift();)y(s,d);s.mode=u,this._cuesByTrackId[s._id].loaded=!0}C.call(this,s)}}}this.renderNatively&&(this.textTrackChangeHandler=this.textTrackChangeHandler||g.bind(this),this.addTracksListener(this.video.textTracks,"change",this.textTrackChangeHandler),i.isEdge()&&(this.addTrackHandler=this.addTrackHandler||_.bind(this),this.addTracksListener(this.video.textTracks,"addtrack",this.addTrackHandler))),this._textTracks.length&&this.trigger("subtitlesTracks",{tracks:this._textTracks})}}function s(t){if(this.renderNatively){var e=t===this._itemTracks;e||a.cancelXhr(this._itemTracks),this._itemTracks=t,t&&(e||(this.disableTextTrack(),A.call(this),this.addTextTracks(t)))}}function c(){return this._currentTextTrackIndex}function d(e){this._textTracks&&(0===e&&t.each(this._textTracks,function(t){t.mode=t.embedded?"hidden":"disabled"}),this._currentTextTrackIndex!==e-1&&(this.disableTextTrack(),this._currentTextTrackIndex=e-1,this.renderNatively&&(this._textTracks[this._currentTextTrackIndex]&&(this._textTracks[this._currentTextTrackIndex].mode="showing"),this.trigger("subtitlesTrackChanged",{currentTrack:this._currentTextTrackIndex+1,tracks:this._textTracks}))))}function u(t){if(t.text&&t.begin&&t.end){var e=t.trackid.toString(),i=this._tracksById&&this._tracksById[e];i||(i={kind:"captions",_id:e,data:[]},this.addTextTracks([i]),this.trigger("subtitlesTracks",{tracks:this._textTracks}));var r;t.useDTS&&(i.source||(i.source=t.source||"mpegts")),r=t.begin+"_"+t.text;var n=this._metaCuesByTextTime[r];if(!n){n={begin:t.begin,end:t.end,text:t.text},this._metaCuesByTextTime[r]=n;var s=a.convertToVTTCues([n])[0];i.data.push(s)}}}function o(t){this._tracksById||this._initTextTracks();var e="native"+t.type,i=this._tracksById[e],a="captions"===t.type?"Unknown CC":"ID3 Metadata",r=t.cue;if(!i){var n={kind:t.type,_id:e,label:a,embedded:!0};i=I.call(this,n),this.renderNatively||"metadata"===i.kind?this.setTextTracks(this.video.textTracks):m.call(this,[i])}w.call(this,i,r)&&(this.renderNatively||"metadata"===i.kind?y(i,r):i.data.push(r))}function l(t){var e=this._tracksById[t.name];if(e){e.source=t.source;for(var i=t.captions||[],r=[],n=!1,s=0;s<i.length;s++){var c=i[s],d=t.name+"_"+c.begin+"_"+c.end;this._metaCuesByTextTime[d]||(this._metaCuesByTextTime[d]=c,r.push(c),n=!0)}n&&r.sort(function(t,e){return t.begin-e.begin});var u=a.convertToVTTCues(r);Array.prototype.push.apply(e.data,u)}}function h(t,e,i){t&&(T(t,e,i),this.instreamMode||(t.addEventListener?t.addEventListener(e,i):t["on"+e]=i))}function T(t,e,i){t&&(t.removeEventListener?t.removeEventListener(e,i):t["on"+e]=null)}function k(){a.cancelXhr(this._itemTracks);var t=this._tracksById&&this._tracksById.nativemetadata;(this.renderNatively||t)&&(p.call(this,this.video.textTracks),t&&(t.oncuechange=null)),this._itemTracks=null,this._textTracks=null,this._tracksById=null,this._cuesByTrackId=null,this._metaCuesByTextTime=null,this._unknownCount=0,this._activeCuePosition=null,this.renderNatively&&(this.removeTracksListener(this.video.textTracks,"change",this.textTrackChangeHandler),p.call(this,this.video.textTracks))}function f(){if(this._textTracks){var t=this._textTracks[this._currentTextTrackIndex];t&&(t.mode=t.embedded||"nativecaptions"===t._id?"hidden":"disabled")}}function v(){if(this._textTracks){var t=this._textTracks[this._currentTextTrackIndex];t&&(t.mode="showing")}}function g(){var e=this.video.textTracks,i=t.filter(e,function(t){return(t.inuse||!t._id)&&b(t.kind)});if(!this._textTracks||S.call(this,i))return void this.setTextTracks(e);var a=-1,r=0;for(r;r<this._textTracks.length;r++)if("showing"===this._textTracks[r].mode){a=r;break}a!==this._currentTextTrackIndex&&this.setSubtitlesTrack(a+1)}function _(){this.setTextTracks(this.video.textTracks)}function m(t){if(t){this._textTracks||this._initTextTracks();for(var e=0;e<t.length;e++){var i=t[e];if(!i.kind||b(i.kind)){var r=I.call(this,i);C.call(this,r),i.file&&(i.data=[],a.loadFile(i,this.addVTTCuesToTrack.bind(this,r),M))}}!this.renderNatively&&this._textTracks&&this._textTracks.length&&this.trigger("subtitlesTracks",{tracks:this._textTracks})}}function x(t,e){if(this.renderNatively){var i=this._tracksById[t._id];if(!i)return this._cuesByTrackId||(this._cuesByTrackId={}),void(this._cuesByTrackId[t._id]={cues:e,loaded:!1});if(!this._cuesByTrackId[t._id]||!this._cuesByTrackId[t._id].loaded){var a;for(this._cuesByTrackId[t._id]={cues:e,loaded:!0};a=e.shift();)y(i,a)}}}function y(t,e){if(!i.isEdge()||!window.TextTrackCue)return void t.addCue(e);var a=new window.TextTrackCue(e.startTime,e.endTime,e.text);t.addCue(a)}function p(e){e.length&&t.each(e,function(t){t.mode="hidden";for(var e=t.cues.length;e--;)t.removeCue(t.cues[e]);t.embedded||(t.mode="disabled"),t.inuse=!1})}function b(t){return"subtitles"===t||"captions"===t}function E(){this._textTracks=[],this._tracksById={},this._metaCuesByTextTime={},this._cuesByTrackId={},this._cachedVTTCues={},this._unknownCount=0}function I(e){var i,a=r.createLabel(e,this._unknownCount),n=a.label;if(this._unknownCount=a.unknownCount,this.renderNatively||"metadata"===e.kind){var s=this.video.textTracks;i=t.findWhere(s,{label:n}),i?(i.kind=e.kind,i.language=e.language||""):i=this.video.addTextTrack(e.kind,n,e.language||""),i["default"]=e["default"],i.mode="disabled",i.inuse=!0}else i=e,i.data=i.data||[];return i._id||(i._id=r.createId(e,this._textTracks.length)),i}function C(t){this._textTracks.push(t),this._tracksById[t._id]=t}function A(){if(this._textTracks){var e=t.filter(this._textTracks,function(t){return t.embedded||"subs"===t.groupid});this._initTextTracks(),t.each(e,function(t){this._tracksById[t._id]=t}),this._textTracks=e}}function L(i){var a=i.currentTarget.activeCues;if(a&&a.length){var r=a[a.length-1].startTime;if(this._activeCuePosition!==r){var n=[];if(t.each(a,function(t){t.startTime<r||(t.data||t.value?n.push(t):t.text&&this.trigger("meta",{metadataTime:r,metadata:JSON.parse(t.text)}))},this),n.length){var s=e.parseID3(n);this.trigger("meta",{metadataTime:r,metadata:s})}this._activeCuePosition=r}}}function w(t,e){var i=t.kind;this._cachedVTTCues[t._id]||(this._cachedVTTCues[t._id]={});var a,r=this._cachedVTTCues[t._id];switch(i){case"captions":a=Math.floor(20*e.startTime);var n=Math.floor(20*e.endTime),s=r[a]||r[a+1]||r[a-1];return!(s&&Math.abs(s-n)<=1)&&(r[a]=n,!0);case"metadata":var c=e.data?new Uint8Array(e.data).join(""):e.text;return a=e.startTime+c,!r[a]&&(r[a]=e.endTime,!0)}}function S(t){if(t.length>this._textTracks.length)return!0;for(var e=0;e<t.length;e++){var i=t[e];if(!i._id||!this._tracksById[i._id])return!0}return!1}function M(t){i.log("CAPTIONS("+t+")")}var B={_itemTracks:null,_textTracks:null,_tracksById:null,_cuesByTrackId:null,_cachedVTTCues:null,_metaCuesByTextTime:null,_currentTextTrackIndex:-1,_unknownCount:0,_activeCuePosition:null,_initTextTracks:E,addTracksListener:h,clearTracks:k,disableTextTrack:f,enableTextTrack:v,getSubtitlesTrack:c,removeTracksListener:T,addTextTracks:m,setTextTracks:n,setupSideloadedTracks:s,setSubtitlesTrack:d,textTrackChangeHandler:null,addTrackHandler:null,addCuesToTrack:l,addCaptionsCue:u,addVTTCue:o,addVTTCuesToTrack:x,renderNatively:!1};return B}.apply(e,a),!(void 0!==r&&(t.exports=r))},47:function(t,e,i){var a,r;a=[i(17),i(2),i(27),i(1),i(4),i(6),i(16),i(3),i(26),i(50)],r=function(t,e,i,a,r,n,s,c,d){function u(t,i){e.foreach(t,function(t,e){i.addEventListener(t,e,!1)})}function o(t,i){e.foreach(t,function(t,e){i.removeEventListener(t,e,!1)})}function l(t){if("hls"===t.type)if(t.androidhls!==!1){var i=e.isAndroidNative;if(i(2)||i(3)||i("4.0"))return!1;if(e.isAndroid())return!0}else if(e.isAndroid())return!1;return null}function h(h,I){function C(t,e){Ht.setAttribute(t,e||"")}function A(){At&&(lt(Ht.audioTracks),yt.setTextTracks(Ht.textTracks),C("jw-loaded","data"))}function L(){At&&C("jw-loaded","started")}function w(t){yt.trigger("click",t)}function S(){At&&!wt&&(F(R()),P(rt(),_t,gt))}function M(){At&&P(rt(),_t,gt)}function B(){T(It),bt=!0,At&&(yt.state===n.STALLED?yt.setState(n.PLAYING):yt.state===n.PLAYING&&(It=setTimeout(at,k)),wt&&Ht.duration===1/0&&0===Ht.currentTime||(F(R()),N(Ht.currentTime),P(rt(),_t,gt),yt.state===n.PLAYING&&(yt.trigger(r.JWPLAYER_MEDIA_TIME,{position:_t,duration:gt}),D())))}function D(){var t=Ft.level;if(t.width!==Ht.videoWidth||t.height!==Ht.videoHeight){if(t.width=Ht.videoWidth,t.height=Ht.videoHeight,ft(),!t.width||!t.height||Lt===-1)return;Ft.reason=Ft.reason||"auto",Ft.mode="hls"===xt[Lt].type?"auto":"manual",Ft.bitrate=0,t.index=Lt,t.label=xt[Lt].label,yt.trigger("visualQuality",Ft),Ft.reason=""}}function P(t,e,i){0===i||t===Ct&&i===gt||(Ct=t,yt.trigger(r.JWPLAYER_MEDIA_BUFFER,{bufferPercent:100*t,position:e,duration:i}))}function N(t){gt<0&&(t=-(tt()-t)),_t=t}function R(){var t=Ht.duration,e=tt();if(t===1/0&&e){var i=e-$();i!==1/0&&i>f&&(t=-i)}return t}function F(t){gt=t,Et&&t&&t!==1/0&&yt.seek(Et)}function O(){var t=R();wt&&t===1/0&&(t=0),yt.trigger(r.JWPLAYER_MEDIA_META,{duration:t,height:Ht.videoHeight,width:Ht.videoWidth}),F(t)}function H(){At&&(bt=!0,wt||ft(),g&&yt.setTextTracks(yt._textTracks),j())}function W(){At&&(Ht.muted&&(Ht.muted=!1,Ht.muted=!0),C("jw-loaded","meta"),O())}function j(){mt||(mt=!0,yt.trigger(r.JWPLAYER_MEDIA_BUFFER_FULL))}function Y(){yt.setState(n.PLAYING),Ht.hasAttribute("jw-played")||C("jw-played",""),yt.trigger(r.JWPLAYER_PROVIDER_FIRST_FRAME,{})}function J(){yt.state!==n.COMPLETE&&Ht.currentTime!==Ht.duration&&yt.setState(n.PAUSED)}function V(){wt||Ht.paused||Ht.ended||yt.state!==n.LOADING&&yt.state!==n.ERROR&&(yt.seeking||yt.setState(n.STALLED))}function G(){At&&yt.trigger(r.JWPLAYER_MEDIA_ERROR,{message:"Error loading media: File could not be played"})}function U(t){var i;return"array"===e.typeOf(t)&&t.length>0&&(i=a.map(t,function(t,e){return{label:t.label||e}})),i}function Q(t){xt=t,Lt=K(t);var e=U(t);e&&yt.trigger(r.JWPLAYER_MEDIA_LEVELS,{levels:e,currentQuality:Lt})}function K(t){var e=Math.max(0,Lt),i=I.qualityLabel;if(t)for(var a=0;a<t.length;a++)if(t[a]["default"]&&(e=a),i&&t[a].label===i)return a;return Ft.reason="initial choice",Ft.level={},e}function q(){var t=Ht.play();t&&t["catch"]&&t["catch"](function(t){console.warn(t)})}function X(t,i){Et=0,T(It);var a=document.createElement("source");a.src=xt[Lt].file;var r=Ht.src!==a.src,s=Ht.getAttribute("jw-loaded"),c=Ht.hasAttribute("jw-played");r||"none"===s||"started"===s?(gt=i,z(xt[Lt]),yt.setupSideloadedTracks(yt._itemTracks),Ht.load()):(0===t&&Ht.currentTime>0&&(Et=-1,yt.seek(t)),q()),_t=Ht.currentTime,m&&!c&&(j(),Ht.paused||yt.state===n.PLAYING||yt.setState(n.LOADING)),e.isIOS()&&yt.getFullScreen()&&(Ht.controls=!0),t>0&&yt.seek(t)}function z(t){Pt=null,Nt=-1,Rt=-1,Ft.reason||(Ft.reason="initial choice",Ft.level={}),bt=!1,mt=!1,wt=l(t),t.preload&&t.preload!==Ht.getAttribute("preload")&&C("preload",t.preload);var e=document.createElement("source");e.src=t.file;var i=Ht.src!==e.src;i&&(C("jw-loaded","none"),Ht.src=t.file)}function Z(){Ht&&(yt.disableTextTrack(),Ht.removeAttribute("preload"),Ht.removeAttribute("src"),Ht.removeAttribute("jw-loaded"),Ht.removeAttribute("jw-played"),i.emptyElement(Ht),Lt=-1,!_&&"load"in Ht&&Ht.load())}function $(){for(var t=Ht.seekable?Ht.seekable.length:0,e=1/0;t--;)e=Math.min(e,Ht.seekable.start(t));return e}function tt(){for(var t=Ht.seekable?Ht.seekable.length:0,e=0;t--;)e=Math.max(e,Ht.seekable.end(t));return e}function et(){yt.seeking=!1,yt.trigger(r.JWPLAYER_MEDIA_SEEKED)}function it(){yt.trigger("volume",{volume:Math.round(100*Ht.volume)}),yt.trigger("mute",{mute:Ht.muted})}function at(){Ht.currentTime===_t&&V()}function rt(){var t=Ht.buffered,i=Ht.duration;return!t||0===t.length||i<=0||i===1/0?0:e.between(t.end(t.length-1)/i,0,1)}function nt(){if(At&&yt.state!==n.IDLE&&yt.state!==n.COMPLETE){if(T(It),Lt=-1,Mt=!0,yt.trigger(r.JWPLAYER_MEDIA_BEFORECOMPLETE),!At)return;st()}}function st(){T(It),yt.setState(n.COMPLETE),Mt=!1,yt.trigger(r.JWPLAYER_MEDIA_COMPLETE)}function ct(t){Bt=!0,ot(t),e.isIOS()&&(Ht.controls=!1)}function dt(){for(var t=-1,e=0;e<Ht.audioTracks.length;e++)if(Ht.audioTracks[e].enabled){t=e;break}ht(t)}function ut(t){Bt=!1,ot(t),e.isIOS()&&(Ht.controls=!1)}function ot(t){yt.trigger("fullscreenchange",{target:t.target,jwstate:Bt})}function lt(t){if(Pt=null,t){if(t.length){for(var e=0;e<t.length;e++)if(t[e].enabled){Nt=e;break}Nt===-1&&(Nt=0,t[Nt].enabled=!0),Pt=a.map(t,function(t){var e={name:t.label||t.language,language:t.language};return e})}yt.addTracksListener(t,"change",dt),Pt&&yt.trigger("audioTracks",{currentTrack:Nt,tracks:Pt})}}function ht(t){Ht&&Ht.audioTracks&&Pt&&t>-1&&t<Ht.audioTracks.length&&t!==Nt&&(Ht.audioTracks[Nt].enabled=!1,Nt=t,Ht.audioTracks[Nt].enabled=!0,yt.trigger("audioTrackChanged",{currentTrack:Nt,tracks:Pt}))}function Tt(){return Pt||[]}function kt(){return Nt}function ft(){if("hls"===xt[0].type){var t="video";0===Ht.videoHeight&&(t="audio"),yt.trigger("mediaType",{mediaType:t})}}this.state=n.IDLE,this.seeking=!1,a.extend(this,c,d),this.renderNatively=e.isChrome()||e.isIOS()||e.isSafari()||e.isEdge(),this.trigger=function(t,e){if(At)return c.trigger.call(this,t,e)},this.setState=function(t){return s.setState.call(this,t)};var vt,gt,_t,mt,xt,yt=this,pt={click:w,durationchange:S,ended:nt,error:G,loadstart:L,loadeddata:A,loadedmetadata:W,canplay:H,playing:Y,progress:M,pause:J,seeked:et,timeupdate:B,volumechange:it,webkitbeginfullscreen:ct,webkitendfullscreen:ut},bt=!1,Et=0,It=-1,Ct=-1,At=!0,Lt=-1,wt=null,St=!!I.sdkplatform,Mt=!1,Bt=!1,Dt=e.noop,Pt=null,Nt=-1,Rt=-1,Ft={level:{}},Ot=document.getElementById(h),Ht=Ot?Ot.querySelector("video"):void 0;Ht=Ht||document.createElement("video"),Ht.className="jw-video jw-reset",this.isSDK=St,this.video=Ht,a.isObject(I.cast)&&I.cast.appid&&C("disableRemotePlayback",""),u(pt,Ht),C("x-webkit-airplay","allow"),C("webkit-playsinline"),C("playsinline"),this.stop=function(){T(It),At&&(Z(),this.clearTracks(),e.isIE()&&Ht.pause(),this.setState(n.IDLE))},this.destroy=function(){Dt=e.noop,o(pt,Ht),this.removeTracksListener(Ht.audioTracks,"change",dt),this.removeTracksListener(Ht.textTracks,"change",yt.textTrackChangeHandler),this.remove(),this.off()},this.init=function(t){At&&(xt=t.sources,Lt=K(t.sources),t.sources.length&&"hls"!==t.sources[0].type&&this.sendMediaType(t.sources),_t=t.starttime||0,gt=t.duration||0,Ft.reason="",z(xt[Lt]),this.setupSideloadedTracks(t.tracks))},this.load=function(t){At&&(Q(t.sources),t.sources.length&&"hls"!==t.sources[0].type&&this.sendMediaType(t.sources),m&&!Ht.hasAttribute("jw-played")||yt.setState(n.LOADING),X(t.starttime||0,t.duration||0))},this.play=function(){return yt.seeking?(yt.setState(n.LOADING),void yt.once(r.JWPLAYER_MEDIA_SEEKED,yt.play)):(Dt(),void q())},this.pause=function(){T(It),Ht.pause(),Dt=function(){var t=Ht.paused&&Ht.currentTime;if(t&&Ht.duration===1/0){var e=tt(),i=e-$(),a=i<f,r=e-Ht.currentTime;a&&e&&(r>15||r<0)&&(Ht.currentTime=Math.max(e-10,e-i))}},this.setState(n.PAUSED)},this.seek=function(t){if(At)if(t<0&&(t+=$()+tt()),0===Et&&this.trigger(r.JWPLAYER_MEDIA_SEEK,{position:Ht.currentTime,offset:t}),bt||(bt=!!tt()),bt){Et=0;try{yt.seeking=!0,Ht.currentTime=t}catch(e){yt.seeking=!1,Et=t}}else Et=t,x&&Ht.paused&&q()},this.volume=function(t){t=e.between(t/100,0,1),Ht.volume=t},this.mute=function(t){Ht.muted=!!t},this.checkComplete=function(){return Mt},this.detachMedia=function(){return T(It),this.removeTracksListener(Ht.textTracks,"change",this.textTrackChangeHandler),this.disableTextTrack(),At=!1,Ht},this.attachMedia=function(){At=!0,bt=!1,this.seeking=!1,Ht.loop=!1,this.enableTextTrack(),this.addTracksListener(Ht.textTracks,"change",this.textTrackChangeHandler),Mt&&st()},this.setContainer=function(t){vt=t,t.appendChild(Ht)},this.getContainer=function(){return vt},this.remove=function(){Z(),T(It),vt===Ht.parentNode&&vt.removeChild(Ht)},this.setVisibility=function(e){e=!!e,e||y?t.style(vt,{visibility:"visible",opacity:1}):t.style(vt,{visibility:"",opacity:0})},this.resize=function(e,i,a){if(!(e&&i&&Ht.videoWidth&&Ht.videoHeight))return!1;var r={objectFit:"",width:"",height:""};if("uniform"===a){var n=e/i,s=Ht.videoWidth/Ht.videoHeight;Math.abs(n-s)<.09&&(r.objectFit="fill",a="exactfit")}var c=v||y||p||b;if(c){var d=-Math.floor(Ht.videoWidth/2+1),u=-Math.floor(Ht.videoHeight/2+1),o=Math.ceil(100*e/Ht.videoWidth)/100,l=Math.ceil(100*i/Ht.videoHeight)/100;"none"===a?o=l=1:"fill"===a?o=l=Math.max(o,l):"uniform"===a&&(o=l=Math.min(o,l)),r.width=Ht.videoWidth,r.height=Ht.videoHeight,r.top=r.left="50%",r.margin=0,t.transform(Ht,"translate("+d+"px, "+u+"px) scale("+o.toFixed(2)+", "+l.toFixed(2)+")")}return t.style(Ht,r),!1},this.setFullscreen=function(t){if(t=!!t){var i=e.tryCatch(function(){var t=Ht.webkitEnterFullscreen||Ht.webkitEnterFullScreen;t&&t.apply(Ht)});return!(i instanceof e.Error)&&yt.getFullScreen()}var a=Ht.webkitExitFullscreen||Ht.webkitExitFullScreen;return a&&a.apply(Ht),t},yt.getFullScreen=function(){return Bt||!!Ht.webkitDisplayingFullscreen},this.setCurrentQuality=function(t){if(Lt!==t&&t>=0&&xt&&xt.length>t){Lt=t,Ft.reason="api",Ft.level={},this.trigger(r.JWPLAYER_MEDIA_LEVEL_CHANGED,{currentQuality:t,levels:U(xt)}),I.qualityLabel=xt[t].label;var e=Ht.currentTime||0,i=Ht.duration||0;i<=0&&(i=gt),yt.setState(n.LOADING),X(e,i)}},this.getCurrentQuality=function(){return Lt},this.getQualityLevels=function(){return U(xt)},this.getName=function(){return{name:E}},this.setCurrentAudioTrack=ht,this.getAudioTracks=Tt,this.getCurrentAudioTrack=kt}var T=window.clearTimeout,k=256,f=120,v=e.isIE(),g=e.isIE(9),_=e.isMSIE(),m=e.isMobile(),x=e.isFF(),y=e.isAndroidNative(),p=e.isIOS(7),b=e.isIOS(8),E="html5",I=function(){};return I.prototype=s,h.prototype=new I,h.getName=function(){return{name:"html5"}},h}.apply(e,a),!(void 0!==r&&(t.exports=r))}});
