<html>
<head>
	<?php
		$a = [
			'When in Rome, Sink Ships',
			'TUMS® Festival',
			'Another Happy Landing',
			'The Fire Rises',
			'You don\'t get to bring friends',
			'He didn\'t fly so good',
		];
		$b = $a[mt_rand(0, count($a) - 1)];
		print "<title>$b</title>";
	?>
	<link rel="stylesheet"type="text/css"href="../css/media.css"/>
	<link rel="shortcut icon"href="logo.png" />
<style>
	body{
		background:linear-gradient(to right,grey,darkgrey,grey);
	}
	.head {
		letter-spacing: 0.45rem;
		font-family:Courier;
		font-weight:bold;
		text-shadow: 0px 0px 3.5px white;
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select:none;
		user-select:none;
		-o-user-select:none;
	}
	#ban {
		text-shadow: 0px 0px 7px white;
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
		opacity:0.15;
	}
	li {
		display:inline-block;
	}
	li:hover {
		opacity:0.7;
	}
	.nav{
		font-size:20px;
		font-family:Courier;
		font-weight:bold;
		background-color:black;
		color:white;
		padding:5px;
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
	header {
		text-align:center;
	}
	footer {
		padding-top:3%;
		text-align:center;
	}
	nav {
		max-width:1000px;
		min-width:1000px;
	}
	p {
		line-height: 35px;
		font-size:20px;
		color:white;
	  text-shadow:0px 0px 3.5px black;
	}
</style>
</head>
<body>
	<header>
		<div class="drop"><img id="back"src="logo.png"></div>
		<h1 class="head"id="ban"style="font-size:90;letter-spacing:2rem;">NATHAN HIGLEY</h1>
		<h2 class="head"id="ban"style="font-size:40">Absolution of Hambonery</h2>
	</header>
	<hr style="max-width:1000px;"/><br />
	<center>
		<nav>
			<li><a class="nav"href="index.php?v=0">[ INTRO ]</a></li>
			<li><a class="nav"href="index.php?v=1">[ REBOUND ]</a></li>
			<li><a class="nav"href="index.php?v=2">[ CHALLENGE ]</a></li>
			<li><a class="nav"href="index.php?v=3">[ SATISFACTION ]</a></li>
			<li><a class="nav"href="index.php?v=4">[ PLANS ]</a></li>
			<li><a class="nav"href="index.php?v=5">[ TRI-TECH ]</a></li>
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
				require "rebound.html";
			}
			if ($get== 2) {
				require "challenges.html";
			}
			if ($get== 3) {
				require "satisfaction.html";
			}
			if ($get== 4) {
				require "plans.html";
			}
			if ($get== 5) {
				require "tt.html";
			}
			?>
		</div>
		<footer>
			<div class="m"><a href="https://nathanhigley.github.io"><img id="bot" src="logo.png"></a></div>
		</footer>
	</center>
</body>
</html>
