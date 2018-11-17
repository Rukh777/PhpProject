<head>
	<style>
body{
 margin: 0 auto;
 background: #272735;
 font-family:"Open Sans";
 font-size:16px;
 color: #272735;
}

ul,li{ 
  list-style-type: none; 
  margin:0; 
  padding:0; 
  position: relative;
  width: 80px;
  height: 40px;
  float: left; 
}
.center { 
  overflow: hidden;
  text-align: center;
  width:300px;
  margin: 0 auto;
}
i { color:#272735; margin: 5px;}

.center,.he{width: 250px; height: 300px;}

.he{-moz-transform: rotate(120deg); -ms-transform: rotate(120deg); -webkit-transform: rotate(120deg); transform: rotate(120deg); cursor: pointer; overflow: hidden; visibility: hidden;  }
.hex{height: auto; width: 100%; margin: 0 auto; text-align: center; clear: both; }
.hex1 {-moz-transform: rotate(-60deg); -ms-transform: rotate(-60deg); -webkit-transform: rotate(-60deg); transform: rotate(-60deg); height: 100%; overflow: hidden; width: 100%; 
}
.hex2 {-moz-transform: rotate(-60deg); -ms-transform: rotate(-60deg); -webkit-transform: rotate(-60deg); transform: rotate(-60deg); height: 100%;  position: center; visibility: visible; overflow: hidden; width: 100%; background-color: #2AB573;  }

.hex2 div{margin:0 auto;}

.profile-pic{ position:absolute; display:block; min-height:1px; top:10%; left:28%; z-index:3;}
.profile-pic img{max-width:auto; height: 100px; border-radius:999px; border: 5px solid #2AB573;}
.profile-info{
  background: none repeat scroll 0 0 rgba(0, 0, 0, 0.2);
  top:30%;
  height:100%;
  width:100%;
  margin: 0 auto;
  position: relative;
  padding:55px 0 10px; 
}

h3,h5{
  margin:0;
  padding:0;
}

.profile-info ul li{
  text-align:center;
  margin:0 auto;
}
.profile-info ul{  padding-top: 5px; margin:2px auto 0; text-align:center;}


ul { 
  list-style: none;
  float: left;
  width:100%;
  margin-top:50px;
}

	</style>
</head>
<body>

<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="center">
  <div class="he">
    <div class="hex1">
      <div class="hex2">
        <div class="profile-pic">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/141264/profile/profile-512_1.jpg" alt="myProfile"/>
        </div>
        <div class="profile-info">
          <h3>LAURA C.</h3>
          <h5>Hello</h5>
          <ul>
            <li><i class="fa fa-twitter fa-2x"></i></li>    
            <li><i class="fa fa-facebook fa-2x"></i></li>    
            <li><i class="fa fa-instagram fa-2x"></i></li>    
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</body>