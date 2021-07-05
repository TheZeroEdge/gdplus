<?php

error_reporting(0);
session_start();

$title = ucwords($_GET[s]);
include "system/function.php";
include "header.php";
?>
<style>.tooltipped{position:relative}.tooltipped:after{position:absolute;z-index:1000000;display:none;padding:5px 8px;font:normal normal 11px/1.5 Helvetica, arial, nimbussansl, liberationsans, freesans, clean, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol";color:#fff;text-align:center;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-wrap:break-word;white-space:pre;pointer-events:none;content:attr(aria-label);background:rgba(0, 0, 0, 0.8);border-radius:3px;-webkit-font-smoothing:subpixel-antialiased}.tooltipped:before{position:absolute;z-index:1000001;display:none;width:0;height:0;color:rgba(0, 0, 0, 0.8);pointer-events:none;content:"";border:5px solid transparent}.tooltipped:hover:before,.tooltipped:hover:after,.tooltipped:active:before,.tooltipped:active:after,.tooltipped:focus:before,.tooltipped:focus:after{display:inline-block;text-decoration:none}.tooltipped-multiline:hover:after,.tooltipped-multiline:active:after,.tooltipped-multiline:focus:after{display:table-cell}.tooltipped-s:after,.tooltipped-se:after,.tooltipped-sw:after{top:100%;right:50%;margin-top:5px}.tooltipped-s:before,.tooltipped-se:before,.tooltipped-sw:before{top:auto;right:50%;bottom:-5px;margin-right:-5px;border-bottom-color:rgba(0, 0, 0, 0.8)}.tooltipped-se:after{right:auto;left:50%;margin-left:-15px}.tooltipped-sw:after{margin-right:-15px}.tooltipped-n:after,.tooltipped-ne:after,.tooltipped-nw:after{right:50%;bottom:100%;margin-bottom:5px}.tooltipped-n:before,.tooltipped-ne:before,.tooltipped-nw:before{top:-5px;right:50%;bottom:auto;margin-right:-5px;border-top-color:rgba(0, 0, 0, 0.8)}.tooltipped-ne:after{right:auto;left:50%;margin-left:-15px}.tooltipped-nw:after{margin-right:-15px}.tooltipped-s:after,.tooltipped-n:after{-webkit-transform:translateX(50%);-ms-transform:translateX(50%);transform:translateX(50%)}.tooltipped-w:after{right:100%;bottom:50%;margin-right:5px;-webkit-transform:translateY(50%);-ms-transform:translateY(50%);transform:translateY(50%)}.tooltipped-w:before{top:50%;bottom:50%;left:-5px;margin-top:-5px;border-left-color:rgba(0, 0, 0, 0.8)}.tooltipped-e:after{bottom:50%;left:100%;margin-left:5px;-webkit-transform:translateY(50%);-ms-transform:translateY(50%);transform:translateY(50%)}.tooltipped-e:before{top:50%;right:-5px;bottom:50%;margin-top:-5px;border-right-color:rgba(0, 0, 0, 0.8)}.tooltipped-multiline:after{width:-webkit-max-content;width:-moz-max-content;width:max-content;max-width:250px;word-break:break-word;word-wrap:normal;white-space:pre-line;border-collapse:separate}.tooltipped-multiline.tooltipped-s:after,.tooltipped-multiline.tooltipped-n:after{right:auto;left:50%;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%)}.tooltipped-multiline.tooltipped-w:after,.tooltipped-multiline.tooltipped-e:after{right:100%}@media screen and (min-width: 0\0){.tooltipped-multiline:after{width:250px}}.tooltipped-sticky:before,.tooltipped-sticky:after{display:inline-block}.tooltipped-sticky.tooltipped-multiline:after{display:table-cell}.fullscreen-overlay-enabled.dark-theme .tooltipped:after{color:#000;background:rgba(255, 255, 255, 0.8)}.fullscreen-overlay-enabled.dark-theme .tooltipped .tooltipped-s:before,.fullscreen-overlay-enabled.dark-theme .tooltipped .tooltipped-se:before,.fullscreen-overlay-enabled.dark-theme .tooltipped .tooltipped-sw:before{border-bottom-color:rgba(255, 255, 255, 0.8)}</style>
<?php

if($_SESSION[email]) {

	$users = token("refresh",$_SESSION[email]);

	echo "<div class=\"container\"><div class=\"content-wrap\">";
	
	if($_GET[s] == "account") {
		
		include "system/menu/account.php";
		
	}

	else if($_GET[s] == "backup") {

		include "system/menu/backup.php";

	}
	
	else if($_GET[s] == "file") {
		
		include "system/menu/file.php";
		
	}
	
	else if($_GET[s] == "share") {
		
		include "system/menu/share.php";
		
	}
	
	else if($_GET[s] == "setting") {
		
		include "system/menu/setting.php";
		
	}

	echo "</div></div>";

	echo "<script src=\"https://clipboardjs.com/bower_components/highlightjs/highlight.pack.min.js\"></script>
	<script src=\"https://clipboardjs.com/dist/clipboard.min.js\"></script>
	<script src=\"https://clipboardjs.com/assets/scripts/demos.js\"></script>
<script>var btns=document.querySelectorAll('.zec');for(var i=0;i<btns.length;i++){btns[i].addEventListener('mouseleave',function(e){e.currentTarget.setAttribute('class','zec');e.currentTarget.removeAttribute('aria-label');});}
function showTooltip(elem,msg){elem.setAttribute('class','zec tooltipped tooltipped-s');elem.setAttribute('aria-label',msg);}
function fallbackMessage(action){var actionMsg='';var actionKey=(action==='cut'?'X':'C');if(/iPhone|iPad/i.test(navigator.userAgent)){actionMsg='No support :(';}
else if(/Mac/i.test(navigator.userAgent)){actionMsg='Press ⌘-'+ actionKey+' to '+ action;}
else{actionMsg='Press Ctrl-'+ actionKey+' to '+ action;}
return actionMsg;}
hljs.initHighlightingOnLoad();</script>";

} 

else echo "<div style=\"padding: 50px 15px;text-align: center;background-color: #fff;\"><h2>Permission denied</h2></div>";

include "footer.php";