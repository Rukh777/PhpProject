<head>
	<style>
	
		.hex {
  position: relative;
  float: left;
  height: 100px;
  min-width: 100px;
  padding: 12px;
  margin: 4px;
  font-weight: bold;
  text-align: center;
  background: linear-gradient(to right, rgb(199, 41, 41), rgb(243, 67, 54));
  -webkit-clip-path: polygon(25px 0px, calc(100% - 25px) 0px, 100% 50%, calc(100% - 25px) 100%, 25px 100%, 0px 50%);
}
.hex.gradient-bg {
  color: white;
}
.hex.gradient-border {
  color: rgb(199, 41, 41);
}
.hex:before {
  position: absolute;
  content: '';
  height: calc(100% - 14px);  /* 100% - 2 * border width */
  width: calc(100% - 14px);  /* 100% - 2 * border width */
  left: 7px; /* border width */
  top: 7px; /* border width */
  -webkit-clip-path: polygon(22px 0px, calc(100% - 22px) 0px, 100% 50%, calc(100% - 22px) 100%, 22px 100%, 0px 50%);
  z-index: -1;
}
.hex.gradient-bg:before {
  background: linear-gradient(to right, rgb(199, 41, 41), rgb(243, 67, 54));
}
.hex.gradient-border:before {
  background: rgb(245, 246, 248);
}
span {
  display: block;
  margin-top: 50px;
  padding: 8px;
  transform: translateY(-50%);
}
	</style>
</head>

<body>
	<div class='hex gradient-border'>
  <span>Some text</span>
</div>
<div class='hex gradient-bg'>
  <span>Some very lengthy text</span>
</div>
<div class='hex gradient-bg'>
  <span>Some very lengthy text
  <br/>with line break</span>
</div>
<div class='hex gradient-bg'>
  <span>Some very lengthy text
  without line break</span>
</div>
</body>