<head>
	<style>
	body, html{
    height:100%;
}
body{
    padding:0;
    margin:0;
}
h1, p, li{
    font-family:'helvetica neue', helvetica, arial, sans-serif;
    color:#222;
    margin:0 0 1em;
}
section li{
    margin:0 0 10px;
}
h1{
    font-size:2.5em;
    font-weight:300;
}
p{
    font-size:1em;
    line-height:1.5em;
}
.wrapper{
    overflow:hidden;
}
section{
    padding:30px 30px 30px 80px;
    -moz-transition:all 200ms ease-in;
    -webkit-transition:all 200ms ease-in;
    -o-transition:all 200ms ease-in;
    transition:all 200ms ease-in;

}
nav{
    position:fixed;
    top:0;
    left:0;
    width:250px;
    height:100%;
    margin:0 0 0 -250px;
    -moz-transition:all 200ms ease-in;
    -webkit-transition:all 200ms ease-in;
    -o-transition:all 200ms ease-in;
    transition:all 200ms ease-in;
}
nav ul{
    width:250px;
    height:100%;
    padding:0;
    margin:0;
    list-style:none;
    background:#222;
    overflow:hidden;
}
nav li{
    margin:0;
}
nav a{
    color:#fff;
    font-size:1em;
    font-family:'helvetica neue', helvetica, arial, sans-serif;
    text-decoration:none;
    display:block;
    padding:12px 15px;
    font-weight:300;
    letter-spacing:2px;
    border-bottom:1px solid #333;
}
nav a:hover{
    background:#111;
}
label{
    display:block;
    font-family:'helvetica neue', helvetica, arial, sans-serif;
    font-weight:700;
    background:#1ea1b8;
    width:42px;
    height:42px;
    line-height:42px;
    color:#fff;
    text-align:center;
    font-size:2em;
    line-height:1.1em;
    position:fixed;
    top:10px;
    left:10px;
    -moz-transition:all 200ms ease-in;
    -webkit-transition:all 200ms ease-in;
    -o-transition:all 200ms ease-in;
    transition:all 200ms ease-in;
    z-index:500;
}
input[type="checkbox"]{
    display:none;
}
input[type="checkbox"]:checked ~ nav{
    margin:0;
}
input[type="checkbox"]:checked ~ label{
    left:260px;
}
input[type="checkbox"]:checked ~ section{
    -webkit-transform:translate3d(260px, 0, 0);
    -moz-transform:translate3d(260px, 0, 0);
    -o-transform:translate3d(260px, 0, 0);
    transform:translate3d(260px, 0, 0);
}
	</style>
</head>
<body>
<div class="wrapper">

    <input type="checkbox" id="navigation" />
    <label for="navigation">
        +
    </label>

    <nav>
        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="">Latest News</a>
            </li>
            <li>
                <a href="">What We Do</a>
            </li>
            <li>
                <a href="">Another Link</a>
            </li>
            <li>
                <a href="">Contact</a>
            </li>
        </ul>
    </nav>

       <!--<section>
            <article>
                <h1>Pure CSS slide in push menu</h1>
                <p>
                  Tap or click the + icon
                <p>
                    Tested and working in:
                </p>
                <ul>
                    <li>
                        Chrome
                    </li>
                    <li>
                        Safari
                    </li>
                    <li>
                        Firefox
                    </li>
                    <li>
                        Opera
                    </li>
                    <li>
                        IE11
                    </li>
                    <li>
                        IE10
                    </li>
                    <li>
                        IE9 - Without push or animation.
                    </li>
                </ul>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                </p>
                <p>
                    At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p>
            </article>
        </section>-->
    </div>
</div>
</body>