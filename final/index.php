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
	<link rel="stylesheet"type="text/css"href="style.css"/>
	<link rel="shortcut icon"href="logo.png"/>
</head>
<body>
	<header>
		<div class="drop"><img id="back"src="logo.png"></div>
		<h1 class="head"id="ban"style="font-size:90;letter-spacing:2rem;">NATHAN HIGLEY</h1>
		<h2 class="head"id="ban"style="font-size:40">Icon of the Hubris</h2>
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
				}
			else {
					$get = -1;
			}

			if ($get == -1 or $get == 0) {
				require "intro.html";
			}
			if ($get == 1) {
				require "rebound.html";
			}
			if ($get == 2) {
				require "challenges.html";
			}
			if ($get == 3) {
				require "satisfaction.html";
			}
			if ($get == 4) {
				require "plans.html";
			}
			if ($get == 5) {
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
