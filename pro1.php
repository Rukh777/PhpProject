
		

<head>
    <title>User Profile Widget</title>
	<style>
			.left { float: left; }
.right { float: right; }
.clear { clear: both; }

h1 { font-size: 18px; }
h6 { font-size: 13px; }

.profile-card {
    margin: 50px;
    width: 500px;
    height: 400px;
    font: 12px "Myriad Pro";
}
.profile-card .profile-cover {
    background: url('http://dl.dropboxusercontent.com/s/b9zehob0bif4zr0/newyork.jpg') no-repeat center;
    position: relative;
    height: 260px;

    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;

    filter: url(filters.svg#grayscale); /* Firefox 3.5+ */
    filter: gray; /* IE6-9 */
    -webkit-filter: grayscale(1); /* Google Chrome & Safari 6+ */

    transition: all .5s;
    -moz-transition: all .5s; /* Firefox 4 */
    -webkit-transition: all .5s; /* Safari and Chrome */
    -o-transition: all .5s; /* Opera */
}
.profile-card .profile-cover:hover {
    filter: none;
    filter: none;
    -webkit-filter: none;

}
.profile-card .profile-cover .profile-avatar {
    background: #ffffff;
    border: 1px solid #eeeeee;
    border: 5px solid #ffffff;
    width: 150px;
    height: 150px;
    position: absolute;
    margin: 25px auto 0;
    overflow: hidden;
    left: 0;
    right: 0;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    transition: all .5s;
    -moz-transition: all .5s; /* Firefox 4 */
    -webkit-transition: all .5s; /* Safari and Chrome */
    -o-transition: all .5s; /* Opera */
}
.profile-card .profile-cover .profile-avatar:hover {
    margin-top: 23px;
}
.profile-card .profile-cover .profile-avatar .btns-container {
    position: relative;
}
.profile-card .profile-cover .profile-avatar .btns-container .profile-links {
    position: absolute;
    top: 110px;
    left: 0;
    right: 0;
    text-align: center;
    display: none;
}
.profile-card .profile-cover .profile-avatar .btns-container .profile-links a {
    display: inline-block;
    background: #ffffff;
    text-decoration: none;
    padding: 5px;
}
.profile-card .profile-cover .profile-avatar .btns-container .profile-links a img {
    display: block;
}
.profile-card .profile-cover .profile-avatar .btns-container .profile-links a.zoom-avatar {
    background: rgba(103, 186, 144, 0.7);
}
.profile-card .profile-cover .profile-avatar .btns-container .profile-links a.zoom-avatar:hover {
    background: rgba(103, 186, 144, 1);
}
.profile-card .profile-cover .profile-avatar .btns-container .profile-links a.read-more {
    background: rgba(231, 76, 60, 0.7);
}
.profile-card .profile-cover .profile-avatar .btns-container .profile-links a.read-more:hover {
    background: rgba(231, 76, 60, 1);
}
.profile-card .profile-cover .profile-avatar .btns-container .profile-links a.view-map {
    background: rgba(157, 177, 218, 0.7);
}
.profile-card .profile-cover .profile-avatar .btns-container .profile-links a.view-map:hover {
    background: rgba(157, 177, 218, 1);
}
.profile-card .profile-cover .profile-details {
    background: rgba(0,0,0,0.4);
    border-top: 1px solid rgba(0,0,0,0.5);
    color: #ffffff;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    text-align: center;
    font-weight: bold;
    padding: 5px 0 7px;
}
.profile-card .profile-cover .profile-details h6 {
    font-weight: normal;
}
.profile-card .profile-info {
    background: #e74c3c;
    color: #ffffff;
    padding: 10px;
    font-family: Arial;
    text-align: justify;
}
.profile-card .profile-info h1 {
    border-bottom: 1px solid rgba(255, 255, 255, 0.5);
    padding-bottom: 3px;
    padding-left: 10px;
    margin-bottom: 5px;
}
.profile-card .profile-info .info-area {
    padding: 0 10px 5px;
}
.profile-card .profile-map {
    border-top: 1px solid #cccccc;
    float: left;
    width: 100%;
}
.profile-card .profile-content {
    background: #ffffff; /* Old browsers */
    /* IE9 SVG, needs conditional override of 'filter' to 'none' */
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNlZWVlZWUiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top,  #ffffff 0%, #eeeeee 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#eeeeee)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #ffffff 0%,#eeeeee 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #ffffff 0%,#eeeeee 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #ffffff 0%,#eeeeee 100%); /* IE10+ */
    background: linear-gradient(to bottom,  #ffffff 0%,#eeeeee 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#eeeeee',GradientType=0 ); /* IE6-8 */
    border: 1px solid #cccccc;
    border-top: none;
    -webkit-border-bottom-right-radius: 5px;
    -webkit-border-bottom-left-radius: 5px;
    -moz-border-radius-bottomright: 5px;
    -moz-border-radius-bottomleft: 5px;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
}
.profile-card .profile-content ul li {
    float: left;
    padding: 10px 32px;
    text-align: center;
    border-right: 1px solid #eeeeee;
    border-left: 1px solid #ffffff;
}
.profile-card .profile-content ul li:first-child {
    border-left: none;
}
.profile-card .profile-content ul li:last-child {
    border-right: none;
}
.profile-card .profile-content ul li .digits {
    font-weight: bold;
    font-size: 16px;
}

.menu-container {
    position: relative;
    margin: 10px 0 0 10px;
    float: left;
}
.menu-container .list-icon {
    background: url('http://dl.dropboxusercontent.com/s/zgj5vdngzkemvpe/list-icon.png') no-repeat;
    height: 18px;
    width: 24px;
    display: block;
    opacity: 0.5;
    transition: all .5s;
    -moz-transition: all .5s; /* Firefox 4 */
    -webkit-transition: all .5s; /* Safari and Chrome */
    -o-transition: all .5s; /* Opera */
}
.menu-container .list-icon.active,
.menu-container .list-icon:hover {
    opacity: 1;
}
.menu-container .profile-actions {
    border: 1px solid rgba(0, 0, 0, 0.8);
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    background: rgba(0, 0, 0, 0.8);
}
.menu-container .profile-actions li {
    border-bottom: 1px solid #000000;
}
.menu-container .profile-actions li:last-child {
    border-bottom: none;

}
.menu-container .profile-actions li a {
    display: block;
    width: 100px;
    padding: 5px;
    color: #ffffff;
    text-decoration: none;
    font: 10px Arial;
}
.menu-container .profile-actions li a:hover {
    background: rgba(221, 221, 221, 0.2);
}
.menu-container .profile-actions li:first-child a {
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}
.menu-container .profile-actions li:last-child a {
    -webkit-border-bottom-right-radius: 5px;
    -webkit-border-bottom-left-radius: 5px;
    -moz-border-radius-bottomright: 5px;
    -moz-border-radius-bottomleft: 5px;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;

}
	</style>

<script>
		        $(document).ready(function(){
            $('.menu-container').hover(
                function(){
                    $('.profile-actions').slideDown('fast');
                  $('.list-icon').addClass('active');
                },
                function(){
                    $('.profile-actions').slideUp('fast');
                  $('.list-icon').removeClass('active');
                }
            );
            $('.profile-card').mouseleave(function(){
                $('.profile-actions').slideUp('fast');
                $('.profile-info').slideUp('fast');
                $('.profile-map').slideUp('fast');
            });

            $('.profile-avatar').hover(
                function(){
                    $('.profile-links').fadeIn('fast');
                },
                function(){
                    $('.profile-links').hide();
                }
            );
            $('.read-more').click(function(){
                $('.profile-map').slideUp('fast');
                $('.profile-info').slideToggle('fast');
                return false;
            });
            $('.view-map').click(function(){
                $('.profile-info').slideUp('fast');
                $('.profile-map').slideToggle('fast');
                return false;
            });
        });
</script>
</head>
<body>
    <div class="profile-card">
        <div class="profile-cover">
            <div class="menu-container">
                <a class="list-icon" title="Expand" href="javascript:void(0);"></a>
                <ul class="profile-actions" style="display: none;">
                    <li><a href="#">Follow</a></li>
                    <li><a href="#">Add as Friend</a></li>
                    <li><a href="#">Like</a></li>
                </ul>
            </div>
            <div class="profile-avatar">
                <div class="btns-container">
                    <div class="profile-links">
                        <a class="zoom-avatar" href="#"><img src="http://dl.dropboxusercontent.com/s/5liaxzvwbfuqzpo/zoom.png"></a>
                        <a class="read-more" href="#"><img src="http://dl.dropboxusercontent.com/s/62dfoo9h44o58lw/more.png"></a>
                        <a class="view-map" href="#"><img src="http://dl.dropboxusercontent.com/s/9ofmihok0h64lvn/location.png"></a>
                    </div>
                </div>
                <a href="#"><img src="http://dl.dropboxusercontent.com/s/7pcnqq18skh1myk/avatar.jpg" alt="Anis M" /></a>
            </div>
            <div class="profile-details">
                <h1>Anis M</h1>
                <h6>@anismashku</h6>
            </div>
        </div>
        <div class="profile-info" style="display: none;">
            <h1>About Me</h1>
            <div class="info-area">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.Stet clita kasd gubergren, no sea takimata sanctus est.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
            </div>
            <div class="clear"></div>
        </div>
        <div class="profile-map" style="display: none;">
            <iframe width="100%" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Saveology+New+York&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=40.052282,86.572266&amp;t=h&amp;ie=UTF8&amp;hq=Saveology&amp;hnear=New+York&amp;ll=40.552027,-74.420902&amp;spn=0.357117,0.912844&amp;iwloc=near&amp;output=embed"></iframe>
            <div class="clear"></div>
        </div>
        <div class="profile-content">
            <ul>
                <li>
                    <div class="digits">83</div>
                    Followers
                </li>
                <li>
                    <div class="digits">1507</div>
                    Tweets
                </li>
                <li>
                    <div class="digits">234</div>
                    Friends
                </li>
                <li>
                    <div class="digits">51</div>
                    Likes
                </li>
                <li>
                    <div class="digits">42</div>
                    Gits
                </li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
</body>


