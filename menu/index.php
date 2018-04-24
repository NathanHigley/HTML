<!DOCTYPE html>
<html>
<head>
<title>
PHP MENU
</title>
<link rel="stylesheet"type="text/css"href="stylesheet.css">
</head>
<body>
<h1>[ MENU ]</h1><br />
	<nav>
    <li><a href="index.php?v=0">Home</a></li>
	<li><a href="index.php?v=1" >About Us</a></li>
	<li><a href="index.php?v=2" >Contact</a></li>
	</nav>
	<hr />
<center>
<div class="a">
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
</center>

</body>
</html>
