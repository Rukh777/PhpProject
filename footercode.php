<!--Copyright [2014] [Luke David Sinclair]

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.-->
<head><script>skel.init({
	reset: 'full',
	breakpoints: {
		'global': { range: '*', href: 'css/style.css', lockViewport: true, viewport: 'minimal-ui' }
	}
});

window.onload = function() {
	document.body.className = '';
}

window.ontouchmove = function() {
	return false;
}

window.onorientationchange = function() {
	document.body.scrollTop = 0;
}</script>
<style>
@import url("http://fonts.googleapis.com/css?family=Exo+2:400,900");

/* Basic */

	body, input, select, textarea{
		color: white;
		font-family: 'Exo 2', sans-serif;
		font-size: 15pt;
		font-weight: 300 !important;
		letter-spacing: -0.025em;
		line-height: 1.75em;
	}
		body{
			background: white;
			/*overflow: hidden;*/
		}
	body.loading * {
		-moz-animation: none !important;
		-webkit-animation: none !important;
		-o-animation: none !important;
		-ms-animation: none !important;
		animation: none !important;
	}
	a{
		text-decoration: none;
		-moz-transition: border-color 0.2s ease-in-out;
		-webkit-transition: border-color 0.2s ease-in-out;
		-o-transition: border-color 0.2s ease-in-out;
		-ms-transition: border-color 0.2s ease-in-out;
		transition: border-color 0.2s ease-in-out;
		color: inherit;
		outline: 0;
	}
		a:hover {
			border-color: transparent;
			text-decoration: none;
		}
	h1{
		font-weight: bold;
	}
	p{
		text-decoration: none;
	}

/* Wrapper */
	@-moz-keyframes wrapper { 0% { opacity: 0; } 100% { opacity: 1; } }
	@-webkit-keyframes wrapper { 0% { opacity: 0; } 100% { opacity: 1; } }
	@-o-keyframes wrapper { 0% { opacity: 0; } 100% { opacity: 1; } }
	@-ms-keyframes wrapper { 0% { opacity: 0; } 100% { opacity: 1; } }
	@keyframes wrapper { 0% { opacity: 0; } 100% { opacity: 1; } }

	#wrapper{
		-moz-animation: wrapper 3s forwards;
		-webkit-animation: wrapper 3s forwards;
		-o-animation: wrapper 3s forwards;
		-ms-animation: wrapper 3s forwards;
		animation: wrapper 3s forwards;
		height: 100%;
		left: 0;
		opacity: 0;
		position: fixed;
		top: 0;
		width: 100%;
	}

/* BG */

	#bg {
		-moz-animation: bg 60s linear infinite;
		-webkit-animation: bg 60s linear infinite;
		-o-animation: bg 60s linear infinite;
		-ms-animation: bg 60s linear infinite;
		animation: bg 60s linear infinite;
		-moz-backface-visibility: hidden;
		-webkit-backface-visibility: hidden;
		-o-backface-visibility: hidden;
		-ms-backface-visibility: hidden;
		backface-visibility: hidden;
		-moz-transform: translate3d(0,0,0);
		-webkit-transform: translate3d(0,0,0);
		-o-transform: translate3d(0,0,0);
		-ms-transform: translate3d(0,0,0);
		transform: translate3d(0,0,0);
		background-color: #348cb2;
		background-image: url("http://lukesinclair.co.uk/core/css/images/bg.jpg");
		background-position: bottom left;
		background-repeat: repeat-x;
		height: 100%;
		left: 0;
		opacity: 1;
		position: fixed;
		top: 0;
	}
	@-moz-keyframes bg { 
		0% { -moz-transform: translate3d(0,0,0); 
			-webkit-transform: translate3d(0,0,0); 
			-o-transform: translate3d(0,0,0); 
			-ms-transform: translate3d(0,0,0); 
			transform: translate3d(0,0,0); 
		} 
		100% { 
			-moz-transform: translate3d(-2250px,0,0); 
			-webkit-transform: translate3d(-2250px,0,0); 
			-o-transform: translate3d(-2250px,0,0); 
			-ms-transform: translate3d(-2250px,0,0); 
			transform: translate3d(-2250px,0,0); 
		} 
	}
	@-webkit-keyframes bg { 
		0% { 
			-moz-transform: translate3d(0,0,0); 
			-webkit-transform: translate3d(0,0,0); 
			-o-transform: translate3d(0,0,0); 
			-ms-transform: translate3d(0,0,0); 
			transform: translate3d(0,0,0); 
		} 
		100% { 
			-moz-transform: translate3d(-2250px,0,0); 
			-webkit-transform: translate3d(-2250px,0,0); 
			-o-transform: translate3d(-2250px,0,0); 
			-ms-transform: translate3d(-2250px,0,0); 
			transform: translate3d(-2250px,0,0); 
		} 
	}
	@-o-keyframes bg { 
		0% { 
			-moz-transform: translate3d(0,0,0); 
			-webkit-transform: translate3d(0,0,0); 
			-o-transform: translate3d(0,0,0); 
			-ms-transform: translate3d(0,0,0); 
			transform: translate3d(0,0,0); 
		} 
		100% { 
			-moz-transform: translate3d(-2250px,0,0); 
			-webkit-transform: translate3d(-2250px,0,0); 
			-o-transform: translate3d(-2250px,0,0); 
			-ms-transform: translate3d(-2250px,0,0); 
			transform: translate3d(-2250px,0,0); 
		} 
	}
	@-ms-keyframes bg { 
		0% { 
			-moz-transform: translate3d(0,0,0); 
			-webkit-transform: translate3d(0,0,0); 
			-o-transform: translate3d(0,0,0); 
			-ms-transform: translate3d(0,0,0); 
			transform: translate3d(0,0,0); 
		}
		100% {
			-moz-transform: translate3d(-2250px,0,0); 
			-webkit-transform: translate3d(-2250px,0,0); 
			-o-transform: translate3d(-2250px,0,0); 
			-ms-transform: translate3d(-2250px,0,0); 
			transform: translate3d(-2250px,0,0); 
		} 
	}
	@keyframes bg { 
		0% {
			-moz-transform: translate3d(0,0,0); 
			-webkit-transform: translate3d(0,0,0); 
			-o-transform: translate3d(0,0,0); 
			-ms-transform: translate3d(0,0,0); 
			transform: translate3d(0,0,0); 
		}
		100% {
			-moz-transform: translate3d(-2250px,0,0); 
			-webkit-transform: translate3d(-2250px,0,0); 
			-o-transform: translate3d(-2250px,0,0); 
			-ms-transform: translate3d(-2250px,0,0); 
			transform: translate3d(-2250px,0,0); 
		} 
	}

	#bg {
		background-size: 2250px auto;
		width: 6750px;
	}

/* Main */

	#main {
		height: 100%;
		width: 100%;
		left: 0;
		position: fixed;
		text-align: center;
		top: 0;
	}

		#main:before {
			content: '';
			display: inline-block;
			height: 100%;
			margin-right: 0;
			vertical-align: middle;
			width: 1px;
		}

/* Header */
	@-moz-keyframes header {
		0% {
			-moz-transform: translate3d(0,1em,0); 
			-webkit-transform: translate3d(0,1em,0); 
			-o-transform: translate3d(0,1em,0); 
			-ms-transform: translate3d(0,1em,0);
			transform: translate3d(0,1em,0); opacity: 0; 
		}
		100% {
			-moz-transform: translate3d(0,0,0); 
			-webkit-transform: translate3d(0,0,0); 
			-o-transform: translate3d(0,0,0); 
			-ms-transform: translate3d(0,0,0); 
			transform: translate3d(0,0,0); opacity: 1; 
		} 
	}
	@-webkit-keyframes header {
		0% {
			-moz-transform: translate3d(0,1em,0); 
			-webkit-transform: translate3d(0,1em,0); 
			-o-transform: translate3d(0,1em,0); 
			-ms-transform: translate3d(0,1em,0); 
			transform: translate3d(0,1em,0); opacity: 0; 
		}
		100% {
			-moz-transform: translate3d(0,0,0);
			-webkit-transform: translate3d(0,0,0); 
			-o-transform: translate3d(0,0,0); 
			-ms-transform: translate3d(0,0,0); 
			transform: translate3d(0,0,0); opacity: 1; 
		} 
	}
	@-o-keyframes header {
		0% {
			-moz-transform: translate3d(0,1em,0);
			-webkit-transform: translate3d(0,1em,0); 
			-o-transform: translate3d(0,1em,0); 
			-ms-transform: translate3d(0,1em,0); 
			transform: translate3d(0,1em,0); opacity: 0; 
		}
		100% {
			-moz-transform: translate3d(0,0,0); 
			-webkit-transform: translate3d(0,0,0);
			 -o-transform: translate3d(0,0,0); 
			 -ms-transform: translate3d(0,0,0); 
			 transform: translate3d(0,0,0); opacity: 1; 
		}
	}
	@-ms-keyframes header {
		0% {
			-moz-transform: translate3d(0,1em,0); 
			-webkit-transform: translate3d(0,1em,0); 
			-o-transform: translate3d(0,1em,0); 
			-ms-transform: translate3d(0,1em,0); 
			transform: translate3d(0,1em,0); opacity: 0; 
		}
		100% {
			-moz-transform: translate3d(0,0,0); 
			-webkit-transform: translate3d(0,0,0); 
			-o-transform: translate3d(0,0,0); 
			-ms-transform: translate3d(0,0,0); 
			transform: translate3d(0,0,0); opacity: 1; 
		} 
	}
	@keyframes header {
		0% { 
			-moz-transform: translate3d(0,1em,0); 
			-webkit-transform: translate3d(0,1em,0); 
			-o-transform: translate3d(0,1em,0); 
			-ms-transform: translate3d(0,1em,0); 
			transform: translate3d(0,1em,0); opacity: 0; 
		}
		100% {
			-moz-transform: translate3d(0,0,0); 
			-webkit-transform: translate3d(0,0,0); 
			-o-transform: translate3d(0,0,0); 
			-ms-transform: translate3d(0,0,0); 
			transform: translate3d(0,0,0); opacity: 1; 
		}
	}
	@-moz-keyframes nav-icons {
		0% {
			-moz-transform: translate3d(0,1em,0); 
			-webkit-transform: translate3d(0,1em,0); 
			-o-transform: translate3d(0,1em,0); 
			-ms-transform: translate3d(0,1em,0); 
			transform: translate3d(0,1em,0); opacity: 0; 
		}
		100% {
			-moz-transform: translate3d(0,0,0); 
			-webkit-transform: translate3d(0,0,0); 
			-o-transform: translate3d(0,0,0); 
			-ms-transform: translate3d(0,0,0); 
			transform: translate3d(0,0,0); opacity: 1; 
		}
	}
	@-webkit-keyframes nav-icons {
		0% {
			-moz-transform: translate3d(0,1em,0);
			-webkit-transform: translate3d(0,1em,0); 
			-o-transform: translate3d(0,1em,0);
			-ms-transform: translate3d(0,1em,0); 
			transform: translate3d(0,1em,0); opacity: 0; 
		}
		100% {
			-moz-transform: translate3d(0,0,0); 
			-webkit-transform: translate3d(0,0,0); 
			-o-transform: translate3d(0,0,0); 
			-ms-transform: translate3d(0,0,0); 
			transform: translate3d(0,0,0); opacity: 1; 
		} 
	}
	@-o-keyframes nav-icons {
		0% {
			-moz-transform: translate3d(0,1em,0); 
			-webkit-transform: translate3d(0,1em,0); 
			-o-transform: translate3d(0,1em,0); 
			-ms-transform: translate3d(0,1em,0); 
			transform: translate3d(0,1em,0); opacity: 0; 
		}
		100% {
			-moz-transform: translate3d(0,0,0); 
			-webkit-transform: translate3d(0,0,0); 
			-o-transform: translate3d(0,0,0); 
			-ms-transform: translate3d(0,0,0); 
			transform: translate3d(0,0,0); opacity: 1; 
		}
	}
	@-ms-keyframes nav-icons {
		 0% {
		 	-moz-transform: translate3d(0,1em,0); 
		 	-webkit-transform: translate3d(0,1em,0); 
		 	-o-transform: translate3d(0,1em,0); 
		 	-ms-transform: translate3d(0,1em,0); 
		 	transform: translate3d(0,1em,0); opacity: 0; 
		} 
		100% {
			-moz-transform: translate3d(0,0,0); 
			-webkit-transform: translate3d(0,0,0); 
			-o-transform: translate3d(0,0,0); 
			-ms-transform: translate3d(0,0,0); 
			transform: translate3d(0,0,0); opacity: 1; 
		}
	}
	@keyframes nav-icons { 
		0% {
			-moz-transform: translate3d(0,1em,0); 
			-webkit-transform: translate3d(0,1em,0); 
			-o-transform: translate3d(0,1em,0); 
			-ms-transform: translate3d(0,1em,0); 
			transform: translate3d(0,1em,0); opacity: 0; 
		}
		100% {
			-moz-transform: translate3d(0,0,0); 
			-webkit-transform: translate3d(0,0,0); 
			-o-transform: translate3d(0,0,0); 
			-ms-transform: translate3d(0,0,0); 
			transform: translate3d(0,0,0); opacity: 1; 
		} 
	}

	#header {
		-moz-animation: header 1s 2.25s forwards;
		-webkit-animation: header 1s 2.25s forwards;
		-o-animation: header 1s 2.25s forwards;
		-ms-animation: header 1s 2.25s forwards;
		animation: header 1s 2.25s forwards;
		-moz-backface-visibility: hidden;
		-webkit-backface-visibility: hidden;
		-o-backface-visibility: hidden;
		-ms-backface-visibility: hidden;
		backface-visibility: hidden;
		-moz-transform: translate3d(0,0,0);
		-webkit-transform: translate3d(0,0,0);
		-o-transform: translate3d(0,0,0);
		-ms-transform: translate3d(0,0,0);
		transform: translate3d(0,0,0);
		cursor: default;
		display: inline-block;
		opacity: 0;
		position: relative;
		text-align: center;
		top: -1em;
		vertical-align: middle;
		width: 90%;
	}

		#header h1 {
			font-size: 4.35em;
			font-weight: 900;
			letter-spacing: -0.035em;
			line-height: 1em;
		}

		#header p {
			font-size: 1.25em;
			margin: 0.75em 0 0.25em 0;
			opacity: 0.75;
		}

		#header nav {
			margin: 1.5em 0 0 0;
		}

			#header nav li {
				-moz-animation: nav-icons 0.5s ease-in-out forwards;
				-webkit-animation: nav-icons 0.5s ease-in-out forwards;
				-o-animation: nav-icons 0.5s ease-in-out forwards;
				-ms-animation: nav-icons 0.5s ease-in-out forwards;
				animation: nav-icons 0.5s ease-in-out forwards;
				-moz-backface-visibility: hidden;
				-webkit-backface-visibility: hidden;
				-o-backface-visibility: hidden;
				-ms-backface-visibility: hidden;
				backface-visibility: hidden;
				-moz-transform: translate3d(0,0,0);
				-webkit-transform: translate3d(0,0,0);
				-o-transform: translate3d(0,0,0);
				-ms-transform: translate3d(0,0,0);
				transform: translate3d(0,0,0);
				display: inline-block;
				height: 5.35em;
				line-height: 5.885em;
				opacity: 0;
				position: relative;
				top: 0;
				width: 5.35em;
			}

				#header nav li:nth-child(1) {
					-moz-animation-delay: 2.5s;
					-webkit-animation-delay: 2.5s;
					-o-animation-delay: 2.5s;
					-ms-animation-delay: 2.5s;
					animation-delay: 2.5s;
				}

				#header nav li:nth-child(2) {
					-moz-animation-delay: 2.75s;
					-webkit-animation-delay: 2.75s;
					-o-animation-delay: 2.75s;
					-ms-animation-delay: 2.75s;
					animation-delay: 2.75s;
				}

				#header nav li:nth-child(3) {
					-moz-animation-delay: 3s;
					-webkit-animation-delay: 3s;
					-o-animation-delay: 3s;
					-ms-animation-delay: 3s;
					animation-delay: 3s;
				}

				#header nav li:nth-child(4) {
					-moz-animation-delay: 3.25s;
					-webkit-animation-delay: 3.25s;
					-o-animation-delay: 3.25s;
					-ms-animation-delay: 3.25s;
					animation-delay: 3.25s;
				}

				#header nav li:nth-child(5) {
					-moz-animation-delay: 3.5s;
					-webkit-animation-delay: 3.5s;
					-o-animation-delay: 3.5s;
					-ms-animation-delay: 3.5s;
					animation-delay: 3.5s;
				}

			#header nav a {
				-webkit-tap-highlight-color: transparent;
				-webkit-touch-callout: none;
				border: 0;
				display: inline-block;
			}

				#header nav a:before {
					-moz-transition: all 0.2s ease-in-out;
					-webkit-transition: all 0.2s ease-in-out;
					-o-transition: all 0.2s ease-in-out;
					-ms-transition: all 0.2s ease-in-out;
					transition: all 0.2s ease-in-out;
					border-radius: 100%;
					border: solid 1px white;
					display: block;
					font-size: 1.75em;
					height: 2.5em;
					line-height: 2.5em;
					position: relative;
					text-align: center;
					top: 0;
					width: 2.5em;
				}

				#header nav a:hover {
					font-size: 1.1em;
				}

					#header nav a:hover:before {
						background-color: rgba(255, 255, 255, 0.175);
						color: white;
					}

				#header nav a:active {
					font-size: 0.95em;
					background: none;
				}

					#header nav a:active:before {
						background-color: rgba(255, 255, 255, 0.35);
						color: white;
					}

				#header nav a span {
					display: none;
				}

/* Footer */

	#footer {
		bottom: 0;
		cursor: default;
		height: 6em;
		left: 0;
		line-height: 8em;
		position: absolute;
		text-align: center;
		width: 100%;
		font-size: 0.8em;
	}

@media (max-width:360px) {
	#header {
		opacity: 0;
		position: relative;
		text-align: center;
		top: 0.2em;
		vertical-align: middle;
		width: 90%;
		height: 700px;
	}

		#header h1 {
			font-size: 4.35em;
			font-weight: 900;
			letter-spacing: -0.035em;
			line-height: 1em;
		}

		#header p {
			font-size: 1.25em;
			margin: 0.75em 0 0.25em 0;
			opacity: 0.75;
		}
		#header nav {
			margin: 1.5em 0 0 0;
		}

			#header nav li {
				-moz-animation: nav-icons 0.5s ease-in-out forwards;
				-webkit-animation: nav-icons 0.5s ease-in-out forwards;
				-o-animation: nav-icons 0.5s ease-in-out forwards;
				-ms-animation: nav-icons 0.5s ease-in-out forwards;
				animation: nav-icons 0.5s ease-in-out forwards;
				-moz-backface-visibility: hidden;
				-webkit-backface-visibility: hidden;
				-o-backface-visibility: hidden;
				-ms-backface-visibility: hidden;
				backface-visibility: hidden;
				-moz-transform: translate3d(0,0,0);
				-webkit-transform: translate3d(0,0,0);
				-o-transform: translate3d(0,0,0);
				-ms-transform: translate3d(0,0,0);
				transform: translate3d(0,0,0);
				display: inline-block;
				height: 5.35em;
				line-height: 5.885em;
				opacity: 0;
				position: relative;
				top: 0;
				width: 5.35em;
			}
	.about{
		display: inline-block;
	}
}

</style>
</head>
<body>
<div id="wrapper">
			<div id="bg"></div>
			<div id="main">
				<header id="header">
					<h1>Luke Sinclair</h1>
					<p class="about">Web Developer &nbsp;&bull;&nbsp; Gamer</p>
					<nav>
						<ul>
							<li><a href="http://goo.gl/QMsdDe" target="_blank" class="fa fa-facebook"><span>Facebook</span></a></li>
							<li><a href="http://goo.gl/gtGQT9" target="_blank" class="fa fa-github"><span>Github</span></a></li>
							<li><a href="mailto:lukesinclair16@gmail.com" target="_blank" class="fa fa-envelope-o"><span>Email</span></a></li>
							<li><a href="http://steamcommunity.com/id/lukesinclair12" target="_blank" class="fa fa-steam"><span>Steam</span></a></li>
						</ul>
					</nav>
				</header>
			</div>
		</div>
	</body>