<head>
<!doctype html>

<link rel="stylesheet" type="text/css" href="contentslider.css" />

<script type="text/javascript" src="contentslider.js">

</script>
</head>
<body>


<script type="text/javascript">

featuredcontentslider.init({
	id: "slider1",  //id of main slider DIV
	contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
	toc: "#increment",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
	nextprev: ["Previous", "Next"],  //labels for "prev" and "next" links. Set to "" to hide.
	revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
	enablefade: [true, 0.2],  //[true/false, fadedegree]
	autorotate: [true, 3000],  //[true/false, pausetime]
	onChange: function(previndex, curindex, contentdivs){  //event handler fired whenever script changes slide
		//previndex holds index of last slide viewed b4 current (0=1st slide, 1=2nd etc)
		//curindex holds index of currently shown slide (0=1st slide, 1=2nd etc)
	}
})

</script>




<br />
<h2>Example 2, Pagination links from markup</h2>

<!--Inner content DIVs should always carry "contentdiv" CSS class-->
<!--Pagination DIV should always carry "paginate-SLIDERID" CSS class-->

<div id="slider2" class="sliderwrapper">

<div class="contentdiv">
<img src ='bed2.jpg' height='500' width='100%'>
</div>
<div class="contentdiv">
<img src ='tech.jpg' height='500' width='100%'>
</div>
<div class="contentdiv">
<img src ='green1.jpg' height='500' width='100%'>
</div> <br />
<p></p><a href="javascript:featuredcontentslider.jumpTo('slider2', 1)">Go back to 1st slide</a></p>
</div>



</div>

<div id="paginate-slider2" class="pagination">

<a href="#" class="toc">First Page</a> <a href="#" class="toc anotherclass">Second Page</a> <a href="#" class="toc">Third Page</a> <a href="#" class="prev" style="margin-left: 10px"><</a> <a href="#" class="next">></a>

</div>

<script type="text/javascript">

featuredcontentslider.init({
	id: "slider2",  //id of main slider DIV
	contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
	toc: "markup",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
	nextprev: ["Previous", "Next"],  //labels for "prev" and "next" links. Set to "" to hide.
	revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
	enablefade: [true, 0.2],  //[true/false, fadedegree]
	autorotate: [false, 3000],  //[true/false, pausetime]
	onChange: function(previndex, curindex, contentdivs){  //event handler fired whenever script changes slide
		//previndex holds index of last slide viewed b4 current (0=1st slide, 1=2nd etc)
		//curindex holds index of currently shown slide (0=1st slide, 1=2nd etc)
	}
})

</script>
</body>