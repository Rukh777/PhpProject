<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>start</title>
<style type="text/css">
<!--	
body	{ background-image:url(de.jpg); color:white; overflow:hidden }
#skipDiv	{position:absolute; visibility:hidden; width:80px; }
#skipDiv a:link, #skipDiv a:visited	{ 
	font-family: verdana, arial, helvetica, sans-serif;
  font-size:10pt; color:#dee7f7; }

#wipeDiv1	{ position:absolute; visibility:hidden; left:0px; top:0px; 
	width:1px; height:1px; z-index:1; }
	
/* Classes for formatting the wipe text content. 
	 Wipe class is used in doWipes function. It's the only
	 one needed if all your text is formatted the same. */
.wipe { color:#dee7f7; 
	font-family: verdana, arial, helvetica, sans-serif; }	
/* If you don't need different sizes, just put a size in
	 the one above (.wipe) and delete unused classes */	
.wipe1	{ font-size:66pt; color:white; }	
.wipe2	{ font-size:52pt; color:cyan;}
.wipe3	{ font-size:48pt;color:red; }
	
	
-->
</style>
<script src="wipes.js" language="javascript" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
<!--

/*
Document Wipes effect- By Dynamic Web Coding (www.dyn-web.com)
Copyright 2002 by Sharon Paine
Visit http://www.dynamicdrive.com for this script
*/

dom = (document.getElementById) ? true : false;
ns5 = ((navigator.userAgent.indexOf("Gecko")>-1) && dom) ? true: false;
ie5 = ((navigator.userAgent.indexOf("MSIE")>-1) && dom) ? true : false;
ns4 = (document.layers && !dom) ? true : false;
ie4 = (document.all && !dom) ? true : false;
opr=  navigator.userAgent.indexOf("Opera")!=-1
nodyn = (!ns5 && !ns4 && !ie4 && !ie5) ? true : false;


//////////////////////////////////////////////////////////////////////////
// Customization Area
//
// If your wipe series includes images, put them in this array for preload, seperated by commas.
var wipe_imgs=new Array(
	'dwc_btn.gif'
);
if (document.images) {
	var theImgs=new Array();
	for (var i=0;i<wipe_imgs.length;i++) {
		theImgs[i]=new Image();
		theImgs[i].src=wipe_imgs[i];
	}
}

// Here's where you put the content for the wipes.
// Array elements are arranged in pairs:
// content to display, time allotted for wipe of that content. 
// Suggestion: give longer, larger content more time.
// If all your text is to be formatted the same, you can use
// just the wipe class above (it is applied in the doWipes function)
// and put plain text here.
// Images and links are okay too.
var wipe_array=new Array(
	'<span class="wipe1">Interior Design </span>',1000,
	'<span class="wipe3">Home of hundreds of great decor ideas</span>',2500,
	'<span class="wipe2">join us now</span>',2500,
	'<span class="wipe3"><center>Created by<br><img src="rstudio.jpg" width="536" height="50" border="0"></center></span>',2500
);

var wipe_final=new Array('Click here',2500);


var wipe_in_delay=1000;			// delay before each wipe in
var wipe_out_delay=1200;		// delay before each wipe out
// wipe out speed (wipe-in time is divided by this number)
var wipe_out_dv=2.5;	// 2 to 4 recommended
var dest_delay=0;			// delay before going to destination url

// destination url, where to go at end of wipes
function setDest() {
	window.location = "decoruser.php";
}
// end customization area
/////////////////////////////////////////////////////////////////////

if (opr||nodyn)
setDest()

function initDynLyrs() {
	// non-capable browsers skip this and go to your url
	if (nodyn) setDest();
	positionBotmRt('skipDiv');
	wipeLyr1 = new dynObj('wipeDiv1');
	wipeLyr1.centerIn(window);
	wipeLyr1.show();
	//wipeLyr2 = new dynObj('wipeDiv2');
	//wipeLyr2.centerIn(window);
	doWipes();
}

window.onload=initDynLyrs;
//-->
</script>
</head>
<body>

<!-- This div is for the changing content -->	
<div id="wipeDiv1"></div>


<!-- This is for people who don't want to view the animation.
		 Put your href here. -->
<div id="skipDiv">
	<a id="skipLnk" href="javascript:setDest()">skip&nbsp;intro</a>
</div>
</body>
</html>
