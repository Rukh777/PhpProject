<head>
	<style>
			* {
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Open Sans', arial, sans-serif;
    background: rgb(123, 158, 158);
}

#hexGrid {
    overflow: hidden;
    width: 90%;
    margin: 0 auto;
    padding:0.707% 0;
}

#hexGrid:after {
    content: "";
    display: block;
    clear: both;
}

.hex {
    position: relative;
    list-style-type: none;
    float: left;
    overflow: hidden;
    visibility: hidden;
    -webkit-transform: rotate(-60deg) skewY(30deg);
        -ms-transform: rotate(-60deg) skewY(30deg);
            transform: rotate(-60deg) skewY(30deg);
}

.hex * {
    position: absolute;
    visibility: visible;
}

.hexIn {
    display:block;
    width: 100%;
    height: 100%;
    text-align: center;
    color: #fff;
    overflow: hidden;
    -webkit-transform: skewY(-30deg) rotate(60deg);
        -ms-transform: skewY(-30deg) rotate(60deg);
            transform: skewY(-30deg) rotate(60deg);
    -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
}


/* HEX CONTENT */

.hex img {
    left: -100%;
    right: -100%;
    width: auto;
    height: 100%;
    margin: 0 auto;
}

.hex h1, .hex p {
    width: 90%;
    padding: 0 5%;
    background-color: #008080;
    background-color: rgba(0, 128, 128, 0.8);
    font-family: 'Raleway', sans-serif;
    -webkit-transition: top .2s ease-out, bottom .2s ease-out, .2s padding .2s ease-out;
            transition: top .2s ease-out, bottom .2s ease-out, .2s padding .2s ease-out;
}

.hex h1 {
    bottom: 110%;
    font-style: italic;
    font-weight: normal;
    font-size: 1.5em;
    padding-top: 100%;
    padding-bottom: 100%;
}

.hex h1:after {
    content: '';
    display: block;
    position: absolute;
    bottom: -1px;
    left: 45%;
    width: 10%;
    text-align: center;
    z-index: 1;
    border-bottom: 2px solid #fff;
}

.hex p {
    padding-top: 50%;
    top: 110%;
    padding-bottom: 50%;
}


/* HOVER EFFECT  */

.hexIn:hover h1 {
    bottom: 50%;
    padding-bottom: 10%;
}

.hexIn:hover p {
    top: 50%;
    padding-top: 10%;
}

/* SPACING AND SIZING */

@media (min-width:1201px) {
    .hex {
        width: 19.2%; /* = (100-4) / 5 */
        padding-bottom: 22.170%; /* =  width / sin(60deg) */
    }
    .hex:nth-child(9n+6),
    .hex:nth-child(9n+7),
    .hex:nth-child(9n+8),
    .hex:nth-child(9n+9) {
        margin-top: -4.676%;
        margin-bottom: -4.676%;
        -webkit-transform: translateX(50%) rotate(-60deg) skewY(30deg);
            -ms-transform: translateX(50%) rotate(-60deg) skewY(30deg);
                transform: translateX(50%) rotate(-60deg) skewY(30deg);
    }
    .hex:nth-child(9n+6):last-child,
    .hex:nth-child(9n+7):last-child,
    .hex:nth-child(9n+8):last-child,
    .hex:nth-child(9n+9):last-child {
        margin-bottom: 0;
    }
    .hex:nth-child(9n+6) {
        margin-left: 0.5%;
        clear: left;
    }
    .hex:nth-child(9n+10) {
        clear: left;
    }
    .hex:nth-child(9n+2),
    .hex:nth-child(9n+ 7) {
        margin-left: 1%;
        margin-right: 1%;
    }
    .hex:nth-child(9n+3),
    .hex:nth-child(9n+4),
    .hex:nth-child(9n+8) {
        margin-right: 1%;
    }
}

@media (max-width: 1200px) and (min-width:901px) {
    .hex {
        width: 24.25%; /* = (100-3) / 4 */
        padding-bottom: 28.001%; /* =  width / sin(60deg) */
    }
    .hex:nth-child(7n+5),
    .hex:nth-child(7n+6),
    .hex:nth-child(7n+7) {
        margin-top: -6.134%;
        margin-bottom: -6.134%;
        -webkit-transform: translateX(50%) rotate(-60deg) skewY(30deg);
            -ms-transform: translateX(50%) rotate(-60deg) skewY(30deg);
                transform: translateX(50%) rotate(-60deg) skewY(30deg);
    }
    .hex:nth-child(7n+5):last-child,
    .hex:nth-child(7n+6):last-child,
    .hex:nth-child(7n+7):last-child {
        margin-bottom: 0;
    }
    .hex:nth-child(7n+2),
    .hex:nth-child(7n+6) {
        margin-left: 1%;
        margin-right: 1%;
    }
    .hex:nth-child(7n+3) {
        margin-right: 1%;
    }
    .hex:nth-child(7n+8) {
        clear: left;
    }
    .hex:nth-child(7n+5) {
        clear: left;
        margin-left: 0.5%;
    }
}

@media (max-width: 900px) and (min-width:601px) {
    .hex {
        width: 32.666%; /* = (100-2) / 3 */
        padding-bottom: 37.720%; /* =  width / sin(60) */
    }
    .hex:nth-child(5n+4),
    .hex:nth-child(5n+5) {
        margin-top: -8.564%;
        margin-bottom: -8.564%;
        -webkit-transform: translateX(50%) rotate(-60deg) skewY(30deg);
            -ms-transform: translateX(50%) rotate(-60deg) skewY(30deg);
                transform: translateX(50%) rotate(-60deg) skewY(30deg);
    }
    .hex:nth-child(5n+4):last-child,
    .hex:nth-child(5n+5):last-child {
        margin-bottom: 0;
    }
    .hex:nth-child(5n+4) {
        margin-right: 1%;
        margin-left: 0.5%;
    }
    .hex:nth-child(5n+2) {
        margin-left: 1%;
        margin-right: 1%;
    }
    .hex:nth-child(5n+6) {
        clear: left;
    }
}

@media (max-width: 600px) {
    .hex {
        width: 49.5%; /* = (100-1) / 2 */
        padding-bottom: 57.158%; /* =  width / sin(60) */
    }
    .hex:nth-child(3n+3) {
        margin-top: -13.423%;
        margin-bottom: -13.423%;
        -webkit-transform: translateX(50%) rotate(-60deg) skewY(30deg);
            -ms-transform: translateX(50%) rotate(-60deg) skewY(30deg);
                transform: translateX(50%) rotate(-60deg) skewY(30deg);
    }
    .hex:nth-child(3n+3):last-child {
        margin-bottom: 0;
    }
    .hex:nth-child(3n+3) {
        margin-left: 0.5%;
    }
    .hex:nth-child(3n+2) {
        margin-left: 1%;
    }
    .hex:nth-child(3n+4) {
        clear: left;
    }
}
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,300,200,100,900' rel='stylesheet' type='text/css'>

<ul id="hexGrid">
  <li class="hex">
    <a class="hexIn" href="#">
      <img src="des3.jpg" alt="" />
      <h1>This is a title</h1>
     <p>Some sample text about the article this hexagon leads to</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="#">
      <img src="co1.jpg" alt="" />
      <h1>This is a title</h1>
      <p>Some sample text about the article this hexagon leads to</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="#">
      <img src="co2.jpg" alt="" />
     <h1>This is a title</h1>
      <p>Some sample text about the article this hexagon leads to</p>
    </a>

	</style>
</head>


<body>
<table border='0' cellspacing='0' cellpadding='10' width='100%' height='100'>	
		<tr align='center'>
			<td bgcolor='orange' align='center' width='100%' height='30'></td>
		</tr>
		<tr align='center'>
			<td bgcolor='black' align='center'>
			
					<h1><font face='BatangChe' color='white' size='+5'><big><u>PHOTO GALLERY</u></big></font></h1>
			</td>
	
		</tr>
		<tr>
			<td bgcolor='black' colspan='5' align='left'>
				 
						<font face='AR JULIAN' size='+3' color='white'><b style='align:left';><a href='decoruser.php'><img src='ru.jpg' height='70' width='100px'></a>DESIGN Studio</font>
				
				</td>
			</tr>
</table>
<ul id="hexGrid">
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="lv3.jpg" alt="" />
      <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="green.jpg" alt="" />
      <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="wp.png" alt="" />
		<h1>Ideabook	</h1>
      <p> Collection of various styles</p>      
	  </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="store.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>   </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="dr.jpg" alt="" />
 <h1>Ideabook	</h1>
      <p> Collection of various styles</p>      
	  </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="wd.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="dr1.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="cc.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="hd.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="hb.jpg" alt="" />
      <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="hm.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="hsi.jpg" alt="" />
      <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="ig1.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="ig2.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="ig3.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="ig4.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="ig5.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="ig6.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="ig7.jpg" alt="" />
      <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="ig8.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="ig9.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="ig10.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="ig11.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="ig12.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="ig13.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="ig14.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="lv3.jpg" alt="" />
      <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="lib.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="lux.jpg" alt="" />
      <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="lv4.jpg" alt="" />
      <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="lv2.png" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="md.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="mirror.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="bed3.jpg" alt="" />
      <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="mrr.jpg" alt="" />
      <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="ro.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="uf.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="tv.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="tap.png" alt="" />
      <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="ig.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="tech2.jpg" alt="" />
      <h1>Ideabook	</h1>
      <p> Collection of various styles</p> </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="tech.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="bed2.jpg" alt="" />
      <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
  <li class="hex">
    <a class="hexIn" href="ideaview.php">
      <img src="lv3.jpg" alt="" />
       <h1>Ideabook	</h1>
      <p> Collection of various styles</p>
    </a>
  </li>
</ul>
<tr align='center'>
						<td colspan='5' style='background-color: rgba(0, 128, 128, 0.8)';>
								<?php 
									include("decorfoot.php");
								?>
						</td>
					</tr>

</body>
</body>