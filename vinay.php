<head>
	<style>
			  @import url(http://fonts.googleapis.com/css?family=Raleway:100,200,400,600);

html{
  height: 100%;
}
body {
  min-height: 100%;
  height: 100%;
  text-align: center;
  background: url(tv.jpg) 50%;
  background-size: cover;
  background-attachment: fixed;
  font-family: "Raleway", "Helvetica Neue", Helvetica, Verdana, Tahoma, sans-serif;
  letter-spacing: 2px;
  line-height: 150%;
  color: #fff;
}
[class*='col-'] {
  margin-right: 15px;
}
[class*='col-']:last-of-type {
  margin-right: 0;
}
.col-1-4 {
  width: 25%;
}
.col-1-3 {
  width: calc(33.33333% - 10px);
}
.col-3-4 {
  width: 75%;
}
[class*='col-'] {
  float: left;
}
.content:first-of-type {
  margin-top: 100px;
}
.sheath {
  width: 100%;
  position: absolute;
  background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(53,53,53, .4)), color-stop(100%, rgba(53,53,53, .6)));
}
.content {
  opacity: 0;
  padding: 1px;
  width: 100%;
  margin: 0 auto;
  background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(89,120,145, .5)), color-stop(100%, rgba(141,149,167, .9)));
    -webkit-animation: dropfade .3s ease-in 1s forwards; /* Safari and Chrome */ 
       -moz-animation: dropfade .3s ease-in 1s forwards; /* Firefox */
        -ms-animation: dropfade .3s ease-in 1s forwards; /* Internet Explorer */
         -o-animation: dropfade .3s ease-in 1s forwards; /* Opera */
            animation: dropfade .3s ease-in 1s forwards;
}
.skills {
  text-align: right;
  clear: both;
}
.skills p:nth-of-type(odd) {
  color: white;
  padding: 0 5px;
  line-height: 2em;
  background: #444;
  display: inline-block;
}
.skills p:nth-of-type(even) {
  font-weight: 600;
  font-size: .7em;
  text-transform: uppercase;
  margin-bottom: 1em;
}
.skills p:last-of-type {
  margin-bottom: 0;
}
.skills .a {
  float: left;
  width: 30%;
}
.skills .b {
  float: left;
  width: calc(70% - 10px);
  margin-left: 10px;
  background: rgba(141,149,167,.2);
}

.time {
  height: calc(2em);
  background: rgb(141,149,167);
}
.ninety { width: 0%; 
  -webkit-animation: ninety .5s ease-in-out 4s forwards;
       -moz-animation: ninety .5s ease-in-out 4s forwards;
        -ms-animation: ninety .5s ease-in-out 4s forwards;
         -o-animation: ninety .5s ease-in-out 4s forwards;
            animation: ninety .5s ease-in-out 4s forwards; }
.eighty { width: 0%; 
  -webkit-animation: eighty .5s ease-in-out 4s forwards;
       -moz-animation: eighty .5s ease-in-out 4s forwards;
        -ms-animation: eighty .5s ease-in-out 4s forwards;
         -o-animation: eighty .5s ease-in-out 4s forwards;
            animation: eighty .5s ease-in-out 4s forwards; }
.seventy { width: 0%; 
  -webkit-animation: seventy .5s ease-in-out 4s forwards;
       -moz-animation: seventy .5s ease-in-out 4s forwards;
        -ms-animation: seventy .5s ease-in-out 4s forwards;
         -o-animation: seventy .5s ease-in-out 4s forwards;
            animation: seventy .5s ease-in-out 4s forwards;}
.sixty { width: 0%; 
-webkit-animation: sixty .5s ease-in-out 4s forwards;
       -moz-animation: sixty .5s ease-in-out 4s forwards;
        -ms-animation: sixty .5s ease-in-out 4s forwards;
         -o-animation: sixty .5s ease-in-out 4s forwards;
            animation: sixty .5s ease-in-out 4s forwards;}
.fifty { width: 0%; 
-webkit-animation: fifty .5s ease-in-out 4s forwards;
       -moz-animation: fifty .5s ease-in-out 4s forwards;
        -ms-animation: fifty .5s ease-in-out 4s forwards;
         -o-animation: fifty .5s ease-in-out 4s forwards;
            animation: fifty .5s ease-in-out 4s forwards;}
.forty { width: 0%; 
-webkit-animation: forty .5s ease-in-out 4s forwards;
       -moz-animation: forty .5s ease-in-out 4s forwards;
        -ms-animation: forty .5s ease-in-out 4s forwards;
         -o-animation: forty .5s ease-in-out 4s forwards;
            animation: forty .5s ease-in-out 4s forwards;}
.thirty { width: 0%; 
-webkit-animation: thirty .5s ease-in-out 4s forwards;
       -moz-animation: thirty .5s ease-in-out 4s forwards;
        -ms-animation: thirty .5s ease-in-out 4s forwards;
         -o-animation: thirty .5s ease-in-out 4s forwards;
            animation: thirty .5s ease-in-out 4s forwards;}
.twenty { width: 0%; 
-webkit-animation: twenty .5s ease-in-out 4s forwards;
       -moz-animation: twenty .5s ease-in-out 4s forwards;
        -ms-animation: twenty .5s ease-in-out 4s forwards;
         -o-animation: twenty .5s ease-in-out 4s forwards;
            animation: twenty .5s ease-in-out 4s forwards;}
.ten { width: 0%; 
-webkit-animation: ten .5s ease-in-out 4s forwards;
       -moz-animation: ten .5s ease-in-out 4s forwards;
        -ms-animation: ten .5s ease-in-out 4s forwards;
         -o-animation: ten .5s ease-in-out 4s forwards;
            animation: ten .5s ease-in-out 4s forwards;}
.tricks {
  display: inline-block;
  padding: 20px;
  color: #666;
  opacity: 0;
  width: 100%;
  background: rgba(255,255,255,.8);
    -webkit-animation: dropfade .3s ease-in 1s forwards; /* Safari and Chrome */ 
       -moz-animation: dropfade .3s ease-in 1s forwards; /* Firefox */
        -ms-animation: dropfade .3s ease-in 1s forwards; /* Internet Explorer */
         -o-animation: dropfade .3s ease-in 1s forwards; /* Opera */
            animation: dropfade .3s ease-in 1s forwards;
}
.shmall {
  font-size: .8em;
  text-transform: uppercase;
  text-spacing: 100%;
  line-height: 1.1em;
}
.title {
  font-weight: 600;
  text-transform: uppercase;
  font-size: 1em;
  line-height: 1.1em;
}
.stoveBreak {
  width: 100%;
  border-bottom: solid 2px;
  margin: 1em 0;
}
.endroit {
  font-weight: 400;
  text-transform: capitalize;
  font-size: 1em;
}
.cover {
  position: absolute;
  padding-top: 22px;
  height: 130px;
  width: calc((60% + 60px)/3 - 30px);
  opacity: 0;
  margin-left: 5px;
  margin-top: -72px;
  color: #fff !important;
  background: rgb(141,149,167) !important;
  border: 10px solid rgb(141,149,167);
  -webkit-transition: .2s ease-in-out all;
}

.cover:hover:after {
  left: -20px;
  top: -20px;
  border: 2px solid rgb(141,149,167);  
  height: 150px;
  width: calc(100% + 41px);
}

.cover:after {
  content: '';  
  left: -10px;
  top: -10px;
  position: absolute;   
  border: 2px solid rgb(141,149,167);  
  height: 130px;
  width: calc(100% + 21px);
  -webkit-transition: all .3s ease-in;
}

.stove:hover > .cover {
  opacity: 1;
  -webkit-transition: .7s ease-in-out all;
}

h3 {
  position: relative;
  font-size: .4em;
  letter-spacing: 2px;
  font-weight: 200;
  top: 25px;
}
.dot {
  padding: 10px 5px 5px 5px;
  width: 45%;
  background: rgba(0,0,255,.4);
  height: 150px;
  font-size:20px;
  color:white; <!--rgb(141,149,167);-->
  position: relative;
  margin-bottom: 30px
}
.dot.r {
  width: calc((60% + 60px)*.45);
  right: calc((100% - (60% + 60px)) / 2);
  position: absolute;
  font-size:20px;
  margin-top: -100px
}
.dot.l:after {
  content: '';
  width: 0; 
	height: 0; 
	border-top: 10px solid transparent;
	border-bottom: 10px solid transparent;
	border-left: 10px solid rgba(255,255,255,.8);
  right: -10px;
  top: 10px;
  position: absolute;  
	
}
.dot.r:after {
  content: '';
  width: 0; 
	height: 0; 
	border-top: 10px solid transparent;
	border-bottom: 10px solid transparent;
	border-right: 10px solid rgba(255,255,255,.8);
  left: -10px;
  top: 10px;
  position: absolute;   
}
.stove {
  padding: 65px 5px 5px 5px;
  opacity: 0;
  background: rgba(255,255,255,.8);
  height: 150px;
  color: rgb(141,149,167);
  overflow: hidden;
  -webkit-transition: .5s ease-in-out all;
}

.stove:hover {
  color: rgba(0,0,0,0);
  background: none;
  cursor: pointer;
  -webkit-transition: .2s ease-out all;
}

.stove:nth-of-type(1) {
  
  -webkit-animation: fadein .2s ease-in 1.5s forwards;
       -moz-animation: fadein .2s ease-in 1.5s forwards;
        -ms-animation: fadein .2s ease-in 1.5s forwards;
         -o-animation: fadein .2s ease-in 1.5s forwards;
            animation: fadein .2s ease-in 1.5s forwards;
}
.stove:nth-of-type(2) {
  -webkit-animation: fadein .2s ease-in 1.6s forwards;
       -moz-animation: fadein .2s ease-in 1.6s forwards;
        -ms-animation: fadein .2s ease-in 1.6s forwards;
         -o-animation: fadein .2s ease-in 1.6s forwards;
            animation: fadein .2s ease-in 1.6s forwards;
}
.stove:nth-of-type(3) {
  -webkit-animation: fadein .2s ease-in 1.7s forwards;
       -moz-animation: fadein .2s ease-in 1.7s forwards;
        -ms-animation: fadein .2s ease-in 1.7s forwards;
         -o-animation: fadein .2s ease-in 1.7s forwards;
            animation: fadein .2s ease-in 1.7s forwards;
}
a {
  color: #fff;
  font-weight: 500; }
.head {
  font-size: 1.5em;
  font-weight: 600;
  text-transform: uppercase;
  margin-bottom: .5em;
  min-height: 100%;
}
.name {
  font-size: 3em;
  letter-spacing: 5px;
  font-weight: 600;
  text-transform: uppercase;
  padding: 50px;
  margin: 0 auto 5%;
  background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(53,53,53, .4)), color-stop(100%, rgba(53,53,53,.8)));
  -webkit-animation: fadein .3s ease-out;
       -moz-animation: fadein .3s ease-out;
        -ms-animation: fadein .3s ease-out;
         -o-animation: fadein .3s ease-out;
            animation: fadein .3s ease-out;
}
.row {
  content: "";
  display: table;
  clear: both;
  width: calc(60% + 60px);
  margin: 0 auto 30px;
}

*, *:after, *:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.info {
  text-transform: uppercase;
  font-weight: 600;
  margin: 35px auto;
  width: 90%;
  position: relative;
  padding: 18px 0;
  font-size: 1em;
  border-top: solid 2px ;
  border-bottom: solid 2px ; }

.me {
  opacity: 0;
  height: 160px;
  width: 160px;
  border-radius: 80px;
  margin: 0 auto;
  background:  url(vinay.jpg) center; 
  background-size: cover;
  border: 2px white solid;
  margin-top: -80px;
  position: relative; 
    -webkit-animation: fadein .5s ease-in .8s forwards;
       -moz-animation: fadein .5s ease-in .8s forwards;
        -ms-animation: fadein .5s ease-in .8s forwards;
         -o-animation: fadein .5s ease-in .8s forwards;
            animation: fadein .5s ease-in .8s forwards;
}

.me:after {
  content: '';  
  position: absolute;   
  border-radius: 800px;
  border: 2px solid #fff;  
  
   -webkit-animation: boop .3s ease-out 1.2s forwards;
       -moz-animation: boop .3 ease-out 1.2s forwards;
        -ms-animation: boop .3 ease-out 1.2s forwards;
         -o-animation: boop .3 ease-out 1.2s forwards;
            animation: boop .3 ease-out 1.2s forwards;
}

@keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

@keyframes ninety {
    from { width: 0; }
    to   { width: 90%; }
}
@keyframes eighty {
    from { width: 0; }
    to   { width: 80%; }
}
@keyframes seventy {
    from { width: 0; }
    to   { width: 70%; }
}
@keyframes sixty {
    from { width: 0; }
    to   { width: 60%; }
}
@keyframes fifty {
    from { width: 0; }
    to   { width: 50%; }
}
@keyframes forty {
    from { width: 0; }
    to   { width: 40%; }
}
@keyframes thirty {
    from { width: 0; }
    to   { width: 30%; }
}
@keyframes twenty {
    from { width: 0; }
    to   { width: 20%; }
}
@keyframes ten {
    from { width: 0; }
    to   { width: 10%; }
}

@keyframes dropfade {
    from { opacity: 0; margin-top: 90px; }
    to   { opacity: 1; margin-top: 110px; }
}

@keyframes boop {
    from {  width: 160px;  
            height: 160px;  
            left: -1px; top: -1px; }
    to   {  width: 180px;  
            height: 180px;  
            left: -12px; top: -12px; }
}

/* Firefox */
@-moz-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

@-moz-keyframes ninety {
    from { width: 0; }
    to   { width: 90%; }
}
@-moz-keyframes eighty {
    from { width: 0; }
    to   { width: 80%; }
}
@-moz-keyframes seventy {
    from { width: 0; }
    to   { width: 70%; }
}
@-moz-keyframes sixty {
    from { width: 0; }
    to   { width: 60%; }
}
@-moz-keyframes fifty {
    from { width: 0; }
    to   { width: 50%; }
}
@-moz-keyframes forty {
    from { width: 0; }
    to   { width: 40%; }
}
@-moz-keyframes thirty {
    from { width: 0; }
    to   { width: 30%; }
}
@-moz-keyframes twenty {
    from { width: 0; }
    to   { width: 20%; }
}
@-moz-keyframes ten {
    from { width: 0; }
    to   { width: 10%; }
}

@-moz-keyframes dropfade {
    from { opacity: 0; margin-top: 90px; }
    to   { opacity: 1; margin-top: 110px; }
}

@-moz-keyframes boop {
    from {  width: 160px;  
            height: 160px;  
            left: -1px; top: -1px; }
    to   {  width: 180px;  
            height: 180px;  
            left: -12px; top: -12px; }
}

/* Safari and Chrome */
@-webkit-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

@-webkit-keyframes ninety {
    from { width: 0; }
    to   { width: 90%; }
}
@-webkit-keyframes eighty {
    from { width: 0; }
    to   { width: 80%; }
}
@-webkit-keyframes seventy {
    from { width: 0; }
    to   { width: 70%; }
}
@-webkit-keyframes sixty {
    from { width: 0; }
    to   { width: 60%; }
}
@-webkit-keyframes fifty {
    from { width: 0; }
    to   { width: 50%; }
}
@-webkit-keyframes forty {
    from { width: 0; }
    to   { width: 40%; }
}
@-webkit-keyframes thirty {
    from { width: 0; }
    to   { width: 30%; }
}
@-webkit-keyframes twenty {
    from { width: 0; }
    to   { width: 20%; }
}
@-webkit-keyframes ten {
    from { width: 0; }
    to   { width: 10%; }
}

@-webkit-keyframes dropfade {
    from { opacity: 0; margin-top: 90px; }
    to   { opacity: 1; margin-top: 110px; }
}

@-webkit-keyframes boop {
    from {  width: 160px;  
            height: 160px;  
            left: -1px; top: -1px; }
    to   {  width: 190px;  
            height: 190px;  
            left: -17px; top: -17px; }
}

/* Internet Explorer */
@-ms-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

@-ms-keyframes ninety {
    from { width: 0; }
    to   { width: 90%; }
}
@-ms-keyframes eighty {
    from { width: 0; }
    to   { width: 80%; }
}
@-ms-keyframes seventy {
    from { width: 0; }
    to   { width: 70%; }
}
@-ms-keyframes sixty {
    from { width: 0; }
    to   { width: 60%; }
}
@-ms-keyframes fifty {
    from { width: 0; }
    to   { width: 50%; }
}
@-ms-keyframes forty {
    from { width: 0; }
    to   { width: 40%; }
}
@-ms-keyframes thirty {
    from { width: 0; }
    to   { width: 30%; }
}
@-ms-keyframes twenty {
    from { width: 0; }
    to   { width: 20%; }
}
@-ms-keyframes ten {
    from { width: 0; }
    to   { width: 10%; }
}

@-ms-keyframes dropfade {
    from { opacity: 0; margin-top: 90px; }
    to   { opacity: 1; margin-top: 110px; }
}

@-ms-keyframes boop {
    from {  width: 160px;  
            height: 160px;  
            left: -1px; top: -1px; }
    to   {  width: 180px;  
            height: 180px;  
            left: -12px; top: -12px; }
}
	</style>
</head>

<body>
		<div class="sheath">
<div id="body-wrapper">
  
  <div class="name">Vinay Soni<h3>Ahmedabaad,Gujarat, India</h3></div>
  
  <div class="row">    
      <div class="content">
        <div class="me"></div>
        <div class="info">
          <p>
		Product designer , Interior and Exterior Designer
		</p>
        </div>
      </div> 
  </div>
 
  <div class="head"></div>
  
  <div class="row">
    <div class="dot l">
      <h2>Service Provided</h2>
		All types of designing and 3d work

    </div>
    <div class="dot r">
      <b><big>Contact:</b></big>+91 98989 88909 <br><br> <b><big>Location:</b></big>Ahmedabad,India
    </div>
    <div class="dot l">
    <b><big>Areas served:<br><br> Residential & commercial projects
</b></big>
	</div>
    <div class="dot r">
      <b><big>Projects:</b></big>13&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=''>View Projects</a><br></br><br><br>
	  <b><big><input type='submit' value='follow' style='width:123px;height:30px;font-size:20px;font-weight:bold'></b></big>&nbsp;&nbsp;
	   <b><big><input type='submit' value='Contact me' style='width:140px;height:30px;font-size:20px;font-weight:bold'></b></big>
    </div>
    <div class="dot l">
	<b><big>Reviews:******</b></big><br><br>
	<b><big>Questions</b></big>
	
      
    </div>
  </div>

  </div></div>
</body>