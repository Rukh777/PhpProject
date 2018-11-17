<head>
<link rel="stylesheet" href="ddscrollspydemo.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

<script src="ddscrollspy.js">

/*
* DD ScrollSpy Menu Script (c) Dynamic Drive (www.dynamicdrive.com)
* Last updated: Aug 1st, 14'
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
*/

</script>

<script>

jQuery(function($){ // on document load
	$('#horizontalmenu').ddscrollSpy({ // initialize first demo
		scrolltopoffset: -50
	})

	$('#verticalspymenu').ddscrollSpy({ // initialize 2nd demo
		spytarget: document.getElementById('contentcontainer'),
		enableprogress: 'progress',
		scrollduration: 300 // <-- no comma after last option!
	})
})

function dynamicadditem(){ // function that dynamically adds a new menu item to first demo, spying on #para6
	$('#verticalspymenu').append('<li><a href="#para5">Paragraph 5</a></li>')
	$('#verticalspymenu').trigger('updatespy')
}

</script>
</head>
<body>
<!-- Scroll Spy Menu 1 -->

<!--<ul id="horizontalmenu" class="underlinemenu">
<li><a href="#section1">1</a></li>
<li><a href="#section2">Section 2</a></li>
<li><a href="#section3">Section 3</a></li>
<li><a href="#section4">Section 4</a></li>
<li><a href="#section5">Section 5</a></li>
</ul>-->

<!-- Scroll Spy Menu 2 -->

<div style="float:left; margin-right:15px; width:150px; margin-top: 120px">
	<ul  id="verticalspymenu" class="shadowblockmenu-v">
	<li><a href="#para1">Bedroom</a></li>
	<li><a href="#para2">Kitchen</a></li>
	<li><a href="#para3">bathroom</a></li>
	<li><a href="#para4">dinning room</a></li>
	<li><a href="#para5">Living room</a></li>
	
	</ul>

<br />
<!--<a href="javascript:dynamicadditem()" style="font-weight:bold">Click to dynamically add another menu item</a>-->

</div>

<!-- Contents that Scroll Spy Menu 2 is spying on -->

<div id="contentcontainer" style="width:896px; height:500px; overflow-y:scroll; border:1px solid gray; font:bold 18px Arial; float:left; background:yellow; position:relative; margin-top: 120px">
	<p id="para1" style="height:400px; background:#d5e9b2">Kitchen<img src='lv3.jpg' height='100' width='100'></p>
	<p id="para2" style="height:600px; background:#f7de90">Bedroom</p>
	<p id="para3" style="height:700px; background:#9af5ed">bathroom </p>
	<p id="para4" style="height:500px; background:#fbd0e3">living room</p>
	<p id="para5" style="height:300px; background:#cbffe1">Dinning room</p>
</div>

<br style="clear:left" />

<!-- Contents that Scroll Spy Menu 1 is spying on 

<div id="section1" style="height:300px;">
<h2>This is section 1</h2>
</div>

<div id="section2" style="height:400px;">
<h2>This is section 2</h2>
</div>

<div id="section3" style="height:700px;">
<h2>This is section 3</h2>
</div>

<div id="section4" style="height:600px;">
<h2>This is section 4</h2>
</div>

<div id="section5" style="height:1000px;">
<h2>This is section 5</h2>
</div>-->
</body>