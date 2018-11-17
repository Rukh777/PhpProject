<head>
	<style>

.intro{
position:fixed;
left:0;
top:0;
layer-background-color:green;
background-image:url(dogr.jpg);
border:0.1px solid brown;
z-index:10;
}

			.img-circle{
					border-radius:70%;
			}
			.hexagon {
    background: url(http://placekitten.com/400/400/);
    width: 10px;
    height: 30px;
    position: relative;
}

]
.top {
    top: 0;
    border-bottom: 13px solid transparent;
}

.bottom {
    bottom: 0;
    border-top: 13px solid transparent;
}

			p{
				font-size:30;
				font-weight:bold;
				color:6960ec;
				
				font-style:Franklin Gothic Heavy;
			
			}
	</style>
</head>

<body >
		<div id="p1" class="intro"></div>
<div id="p2" class="intro"></div>
<div id="p3" class="intro"></div>
<div id="p4" class="intro"></div>
<div id="p5" class="intro"></div>
<div id="p6" class="intro"></div>
<div id="p7" class="intro"></div>
<div id="p8" class="intro"></div>
<div id="p9" class="intro"></div>
<div id="p10" class="intro"></div>
<div id="p11" class="intro"></div>
<div id="p12" class="intro"></div>
<div id="p13" class="intro"></div>
<div id="p14" class="intro"></div>
<div id="p15" class="intro"></div>
<div id="p16" class="intro"></div>
<div id="p17" class="intro"></div>
<div id="p18" class="intro"></div>
<div id="p19" class="intro"></div>
<div id="p20" class="intro"></div>
<div id="p21" class="intro"></div>
<div id="p22" class="intro"></div>
<div id="p23" class="intro"></div>
<div id="p24" class="intro"></div>
<div id="p25" class="intro"></div>

<script>

/*
Boxing-away Script- By Dynamic Drive (www.dynamicdrive.com)
For full source code, 100's more free DHTML scripts, and TOS,
visit http://www.dynamicdrive.com
*/


var espeed=300
var counter=1
var temp=new Array()
var temp2=new Array()




var containerwidth=(window.innerWidth)?parseInt(window.innerWidth)/5  : parseInt(document.body.clientWidth/5)
var containerheight=(window.innerWidth)?parseInt(window.innerHeight)/5 : parseInt(document.body.offsetHeight/5)

for (i=1;i<=25;i++){
temp[i]=document.getElementById("p"+i).style
temp[i].width=containerwidth + 'px'
temp[i].height=containerheight + 'px'
}

for (i=1;i<=5;i++)
temp[i].left=(i-1)*containerwidth + 'px'

for (i=6;i<=10;i++){
temp[i].left=(i-6)*containerwidth + 'px'
temp[i].top=containerheight + 'px'
}

for (i=11;i<=15;i++){
temp[i].left=(i-11)*containerwidth + 'px'
temp[i].top=2*containerheight + 'px'
}

for (i=16;i<=20;i++){
temp[i].left=(i-16)*containerwidth + 'px'
temp[i].top=3*containerheight + 'px'
}

for (i=21;i<=25;i++){
temp[i].left=(i-21)*containerwidth + 'px'
temp[i].top=4*containerheight + 'px'
}

function erasecontainerie(){
var whichcontainer=Math.round(Math.random()*25)
if (whichcontainer==0)
whichcontainer=1
if (temp[whichcontainer].visibility!="hidden")
temp[whichcontainer].visibility="hidden"
else{
while (temp[whichcontainer].visibility=="hidden"){
whichcontainer=Math.round(Math.random()*25)
if (whichcontainer==0)
whichcontainer=1
}
temp[whichcontainer].visibility="hidden"
}

if (counter==25){
clearInterval(beginerase)
for (i=1;i<26;i++)
temp[i].display="none"
}
counter++
espeed-=10

}


beginerase=setInterval("erasecontainerie()",espeed)


</script>
		
	<table align='center' width='100%' cellspacing='0' cellpadding='5'>
		<tr align='center' width='100%'>
			<td colspan='3' bgcolor='6960ec' align='left' width='100%'>
			
				<font face='Bodoni MT Black' size='+5' color='white'><b>B</b></font>
				<font face='times new roman' size='+2' color='yellow'>ED<font>
				<font face='AR BERKLEY' size='+7' color='salmon'><b>R</b></font>
				<font face='times new roman' size='+2' color='yellow'>OOM </font>
				<font face='Aldhabi' size='+50' color='salmon'><big>styles......</big></font>
			</td>
		</tr>
		
		<tr align='center'>
			<td>
				<a href='contm.php' ><img src='bed2.jpg' class='img-circle' border='0' Contemporay Bedroom width='600' height='500'></a>
				<p>Contemporay Bedroom</p>
			</td>
			<td>
				<a href='contm.php' ><img src='bed3.jpg' class='img-circle' border='0' width='600' height='500'></a>
				<p>Eclectic Bedroom</p>
			</td>
			<td>
				<a href='contm.php' ><img src='bed4.jpg'  class='img-circle'border='0' width='600' height='500'></a>
				<p>Modern Bedroom</p>
			</td>
		</tr>
			
		<tr align='center'>
			<td>
				<a href='contm.php' ><img src='bed5.jpg' border='0' class='img-circle' width='600' height='500'></a>
				<p>Traditional Bedroom</p>
			</td>
			<td>
				<a href='contm.php' ><img src='bed6.jpg' border='0' class='img-circle' width='600' height='500'></a>
				<p>Asian Bedroom</p>
			</td>
			<td>
			
				<a href='contm.php' ><img src='bed7.jpg' border='0'class='img-circle' width='600' height='500'></a>
				<p>Beach Bedroom</p>
			</td>
		</tr>
		
		<tr align='center'>
			<td>
				<a href='contm.php' ><img src='bed8.jpg' border='0' class='img-circle' width='600' height='500'></a>
				<p>Craftsman Bedroom</p>
			</td>
			<td>
				<a href='contm.php' ><img src='mrr.jpg' border='0' class='img-circle' width='600' height='500'></a>
				<p>Framhouse Bedroom</p>
			</td>
			<td>
				<a href='contm.php' ><img src='green1.jpg' border='0' class='img-circle' width='600' height='500'></a>
				<p>Industrial Bedroom</p>
			</td>
		</tr>
		
		<tr align='center'>
			<td>
				<a href='contm.php' ><img src='lv1.jpg' border='0' class='img-circle' width='600' height='500'></a>
				<p>Mediterranean Bedroom</p>
			</td>
			<td>
				<a href='contm.php' ><img src='co3.jpg' border='0' class='img-circle' width='600' height='500'></a>
				<p>Midcentury Bedroom</p>
			</td>
			<td>
				<a href='contm.php' ><img src='co1.jpg' border='0' class='img-circle' width='600' height='500'></a>
				<p>Rustic Bedroom</p>
			</td>
		</tr>
	
		
</body>