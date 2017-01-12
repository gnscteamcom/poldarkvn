webpackJsonpjwplayer([7],{38:function(t,e,n){var r,i;r=[n(37)],i=function(t){function e(){return{decode:function(t){if(!t)return"";if("string"!=typeof t)throw new Error("Error - expected string data.");return decodeURIComponent(encodeURIComponent(t))}}}function n(t){function e(t,e,n,r){return 3600*(0|t)+60*(0|e)+(0|n)+(0|r)/1e3}var n=t.match(/^(\d+):(\d{2})(:\d{2})?\.(\d{3})/);return n?n[3]?e(n[1],n[2],n[3].replace(":",""),n[4]):n[1]>59?e(n[1],n[2],0,n[4]):e(0,n[1],n[2],n[4]):null}function r(){this.values=Object.create(null)}function i(t,e,n,r){var i=r?t.split(r):[t];for(var s in i)if("string"==typeof i[s]){var a=i[s].split(n);if(2===a.length){var o=a[0],c=a[1];e(o,c)}}}function s(t,e,s){function a(){var e=n(t);if(null===e)throw new Error("Malformed timestamp: "+u);return t=t.replace(/^[^\sa-zA-Z-]+/,""),e}function o(t,e){var n=new r;i(t,function(t,e){switch(t){case"region":for(var r=s.length-1;r>=0;r--)if(s[r].id===e){n.set(t,s[r].region);break}break;case"vertical":n.alt(t,e,["rl","lr"]);break;case"line":var i=e.split(","),a=i[0];n.integer(t,a),n.percent(t,a)&&n.set("snapToLines",!1),n.alt(t,a,["auto"]),2===i.length&&n.alt("lineAlign",i[1],["start","middle","end"]);break;case"position":i=e.split(","),n.percent(t,i[0]),2===i.length&&n.alt("positionAlign",i[1],["start","middle","end"]);break;case"size":n.percent(t,e);break;case"align":n.alt(t,e,["start","middle","end","left","right"])}},/:/,/\s/),e.region=n.get("region",null),e.vertical=n.get("vertical",""),e.line=n.get("line",-1),e.lineAlign=n.get("lineAlign","start"),e.snapToLines=n.get("snapToLines",!0),e.size=n.get("size",100),e.align=n.get("align","middle"),e.position=n.get("position",{start:0,left:0,middle:50,end:100,right:100},e.align),e.positionAlign=n.get("positionAlign",{start:"start",left:"start",middle:"middle",end:"end",right:"end"},e.align)}function c(){t=t.replace(/^\s+/,"")}var u=t;if(c(),e.startTime=a(),c(),"-->"!==t.substr(0,3))throw new Error("Malformed time stamp (time stamps must be separated by '-->'): "+u);t=t.substr(3),c(),e.endTime=a(),c(),o(t,e)}var a=function(t,n){this.window=t,this.state="INITIAL",this.buffer="",this.decoder=n||new e,this.regionList=[]};return r.prototype={set:function(t,e){this.get(t)||""===e||(this.values[t]=e)},get:function(t,e,n){return n?this.has(t)?this.values[t]:e[n]:this.has(t)?this.values[t]:e},has:function(t){return t in this.values},alt:function(t,e,n){for(var r=0;r<n.length;++r)if(e===n[r]){this.set(t,e);break}},integer:function(t,e){/^-?\d+$/.test(e)&&this.set(t,parseInt(e,10))},percent:function(t,e){var n;return!!((n=e.match(/^([\d]{1,3})(\.[\d]*)?%$/))&&(e=parseFloat(e),e>=0&&e<=100))&&(this.set(t,e),!0)}},a.prototype={parse:function(e){function n(){for(var t=a.buffer,e=0;e<t.length&&"\r"!==t[e]&&"\n"!==t[e];)++e;var n=t.substr(0,e);return"\r"===t[e]&&++e,"\n"===t[e]&&++e,a.buffer=t.substr(e),n}function r(t){i(t,function(t,e){switch(t){case"Region":console.log("parse region",e)}},/:/)}var a=this;e&&(a.buffer+=a.decoder.decode(e,{stream:!0}));try{var o;if("INITIAL"===a.state){if(!/\r\n|\n/.test(a.buffer))return this;o=n();var c=o.match(/^WEBVTT([ \t].*)?$/);if(!c||!c[0])throw new Error("Malformed WebVTT signature.");a.state="HEADER"}for(var u=!1;a.buffer;){if(!/\r\n|\n/.test(a.buffer))return this;switch(u?u=!1:o=n(),a.state){case"HEADER":/:/.test(o)?r(o):o||(a.state="ID");continue;case"NOTE":o||(a.state="ID");continue;case"ID":if(/^NOTE($|[ \t])/.test(o)){a.state="NOTE";break}if(!o)continue;if(a.cue=new t(0,0,""),a.state="CUE",o.indexOf("-->")===-1){a.cue.id=o;continue}case"CUE":try{s(o,a.cue,a.regionList)}catch(l){a.cue=null,a.state="BADCUE";continue}a.state="CUETEXT";continue;case"CUETEXT":var f=o.indexOf("-->")!==-1;if(!o||f&&(u=!0)){a.oncue&&a.oncue(a.cue),a.cue=null,a.state="ID";continue}a.cue.text&&(a.cue.text+="\n"),a.cue.text+=o;continue;case"BADCUE":o||(a.state="ID");continue}}}catch(l){"CUETEXT"===a.state&&a.cue&&a.oncue&&a.oncue(a.cue),a.cue=null,a.state="INITIAL"===a.state?"BADWEBVTT":"BADCUE"}return this},flush:function(){var t=this;try{if(t.buffer+=t.decoder.decode(),(t.cue||"HEADER"===t.state)&&(t.buffer+="\n\n",t.parse()),"INITIAL"===t.state)throw new Error("Malformed WebVTT signature.")}catch(e){throw e}return t.onflush&&t.onflush(),this}},a}.apply(e,r),!(void 0!==i&&(t.exports=i))}});
