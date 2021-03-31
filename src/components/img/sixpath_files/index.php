var truvid_cb_69726886227465_loaded = false;
(function() {
var doc = document;
var win = window;
    function insideFriendlyIframe(){try{if(window.frameElement&&window.parent.document)return!0}catch(n){return!1}return!1}
    if(insideFriendlyIframe()){doc=window.parent.document,win=window.parent.window;var p=document.createElement("div");p.className="truvid_placeholder_2769",window.frameElement.parentNode.insertBefore(p,window.frameElement),window.frameElement.style.height="1px";}
loadJSFile=function(e,n,l){if(!1!==e){var a=n.createElement("script");a.src=e,a.async=!0,a.onload=function(){a.onload=null,l()},n.getElementsByTagName("body")[0].appendChild(a)}else l&&l()};
loadJSFile('https://s.trvdp.com/scripts/v5.535/instream.js',doc,function() {
if(truvid_cb_69726886227465_loaded == false) {truvid_cb_69726886227465_loaded = true;win.brWidgetInit.init('125', '2769', '69726886227465', 'https://stg.truvidplayer.com', {"playlist_id":"1351","video_id":false}, false , 'v5.535','');}
});
})();