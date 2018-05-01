<html>
<head>
	<title>aa</title>
	<link rel="stylesheet"type="text/css"href="../css/media.css">
<style>
body{
	background:linear-gradient(to right,grey,darkgrey,grey);
}
.head {
	font-family:Courier;
	font-weight:bold;
	text-shadow: 0px 0px 7px white;
	-moz-user-select: none;
	-webkit-user-select: none;
	-ms-user-select:none;
	user-select:none;
	-o-user-select:none;"
 	unselectable="on"
 	onselectstart="return false;"
 	onmousedown="return false;">
}
hr {
	box-shadow: 0px 0px 4px white;
	width:75%;
	border: 2px solid black;
	border-radius: 50px;
	max-width:800px;
}
#bot {
	filter: drop-shadow(0px 0px 3px white);
	width: 150px;
	height: auto;
}
#bot:hover {
	opacity:0.75;
}
#back {
  min-width:1000px;
  max-width:1000px;
}
.drop {
	filter:blur(8px);
	position:fixed;
	left:0;
	right:0;
  top:0;
  bottom:650px;
	z-index:-1;
	margin:auto;
	height: 0;
	max-width: 1200px;
	opacity:.15;
}
li {
	display:inline;
}
li:hover {
	opacity:.7;
}
.nav{
font-family:Courier;
background-color:black;
color:white;
padding:10px;
border: 3px solid black;
border-radius: 10px;
text-decoration:none;
}
#con {
	box-shadow: 0px 0px 10px white;
	max-width:1200px;
	background: rgba(0, 0, 0, 0.2);
	padding:5px;
	border: 3px solid black;
	border-radius: 15px;
}
</style>
</head>
<body>
	<header style="text-align:center;">
		<div class="drop"><img id="back"src="logo.png"></div>
		<h1 class="head"style="font-size:90">N A T H A N &nbsp H I G L E Y</h1>
		<h2 class="head"style="font-size:40">Hambone Extraordinaire</h2>
	</header>
	<hr style="max-width:1000px;"/><br />
	<center>
		<nav>
			<li><a class="nav"href="index.php?v=0">[ COME ]</a></li>
			<li><a class="nav"href="index.php?v=1">[ ON ]</a></li>
			<li><a class="nav"href="index.php?v=2">[ & ]</a></li>
			<li><a class="nav"href="index.php?v=3">[ SLAM ]</a></li>
		</nav>
		<br />
		<div id="con">
		<?php
		if (isset($_GET['v'])) {
			$get = $_GET['v']; // Default page
			} else {
				$get = -1;
			}

		if ($get == -1 or $get == 0) {
			require "intro.html";
		}
		if ($get== 1) {
			require "about.html";
		}
		if ($get== 2) {
			require "contact.html";
		}
		?>
	</div>
	<footer style="padding-top:5%;text-align:center;">
		<div class="m"><a href="https://nathanhigley.github.io"><img id="bot" src="logo.png"></a></div>
	</footer>
</center>
</body>
</html>
