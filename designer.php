<head>
	<style>
html{height:100%;}
body{
  background: -webkit-radial-gradient(center, ellipse cover, #AD44AD 0%,#323e4c 100%);
  background: -moz-radial-gradient(center, ellipse cover, #AD44AD 0%,#323e4c 100%);
	background: -o-radial-gradient(center, ellipse cover, #AD44AD 0%,#323e4c 100%);
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
  font-weight: 300;
  font-size: 15px;
}
.box {
	width: 400px;
	height: 60px;
	-moz-border-radius: 30px;
	-webkit-border-radius: 30px;
	border-radius: 30px;
	-moz-background-clip: padding;
	-webkit-background-clip: padding-box;
	background-clip: padding-box;
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,.3);
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,.3);
	box-shadow: 0 1px 3px rgba(0,0,0,.3);
	background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDQwMCA2MCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGxpbmVhckdyYWRpZW50IGlkPSJoYXQwIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjUwJSIgeTE9IjEwMCUiIHgyPSI1MCUiIHkyPSItMS40MjEwODU0NzE1MjAyZS0xNCUiPgo8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjZGZkZmRmIiBzdG9wLW9wYWNpdHk9IjEiLz4KPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjZTllOWU5IiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgPC9saW5lYXJHcmFkaWVudD4KCjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSI0MDAiIGhlaWdodD0iNjAiIGZpbGw9InVybCgjaGF0MCkiIC8+Cjwvc3ZnPg==);
	background-image: -moz-linear-gradient(90deg, #dfdfdf 0%, #e9e9e9 100%);
	background-image: -o-linear-gradient(90deg, #dfdfdf 0%, #e9e9e9 100%);
	background-image: -webkit-linear-gradient(90deg, #dfdfdf 0%, #e9e9e9 100%);
	background-image: linear-gradient(90deg, #dfdfdf 0%, #e9e9e9 100%);
	position: relative;
	top: 100px;
	display: table-cell;
	vertical-align: middle;
	text-align: center;
}
.power {
	width: 28px;
	height: 28px;
	-moz-border-radius: 14px;
	-webkit-border-radius: 14px;
	border-radius: 14px;
	-moz-background-clip: padding;
	-webkit-background-clip: padding-box;
	background-clip: padding-box;
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,.25);
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,.25);
	box-shadow: 0 1px 3px rgba(0,0,0,.25);
  position: relative;
  top: 9px;
  left: 12px;
}
p {
  color: #999;
  display: inline;
  position: relative;
  bottom: 13px;
  left: 20px;
}
.user {
  color: #000;
}
.user:after {
  content: '\25BE';
}
.userbox {
  width: 70px;
  height: 70px;
  background-color: #00ff00;
  position: absolute;
  transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  left: 60px;
  top: -2px;
-moz-border-radius: 4px;
-webkit-border-radius: 4px;
border-radius: 4px;
-moz-background-clip: padding;
-webkit-background-clip: padding-box;
background-clip: padding-box;
-moz-box-shadow: 0 1px 3px rgba(0,0,0,.2);
-webkit-box-shadow: 0 1px 3px rgba(0,0,0,.2);
box-shadow: 0 1px 3px rgba(0,0,0,.2);
background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDgxIDgxIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIj48bGluZWFyR3JhZGllbnQgaWQ9ImhhdDAiIGdyYWRpZW50VW5pdHM9Im9iamVjdEJvdW5kaW5nQm94IiB4MT0iNTAlIiB5MT0iMTAwJSIgeDI9IjUwJSIgeTI9Ii0xLjQyMTA4NTQ3MTUyMDJlLTE0JSI+CjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNkZmRmZGYiIHN0b3Atb3BhY2l0eT0iMSIvPgo8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNlOWU5ZTkiIHN0b3Atb3BhY2l0eT0iMSIvPgogICA8L2xpbmVhckdyYWRpZW50PgoKPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjgxIiBoZWlnaHQ9IjgxIiBmaWxsPSJ1cmwoI2hhdDApIiAvPgo8L3N2Zz4=);
background-image: -moz-linear-gradient(90deg, #dfdfdf 0%, #e9e9e9 100%);
background-image: -o-linear-gradient(90deg, #dfdfdf 0%, #e9e9e9 100%);
background-image: -webkit-linear-gradient(90deg, #dfdfdf 0%, #e9e9e9 100%);
background-image: linear-gradient(90deg, #dfdfdf 0%, #e9e9e9 100%);
}
	</style>
</head>

<body>
		<center>
  
  <div class="box">
    <div class="power">☮</div>
    <div class="userbox">
      <div class="pic"></div>
    </div>
    <p>Hi, <span class="user">Jonathan Graft </span></p>
  </div>
  
</center>
</body>