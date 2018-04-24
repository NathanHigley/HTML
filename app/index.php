<html><head><title>START LINUX COMMANDS</title>
<style>
body {
	background:linear-gradient(to left, #8D65B2,#CFBBFF);
	height:100%;
}
#menu {
    position: fixed;
    left: 1%;
    top: 25%;
}
#contents{
    position: absolute;
    font-size:20px;
	left:0px;
	right:0px;
	z-index:-1;
}
a:hover {
	color:darkgrey;
}
a {
	font-family:Courier;
	font-weight:bold;
	color:black;
	text-decoration:none;
	font-size:24px;
	z-index:-1;
}
.e {
	font-size:20px;
	padding:2%;
	border: 2px solid black;
	border-radius: 5px;
	background-color:lavender;
}
</style>
</head>
<body>
<div id = "menu">
<div class="e">
<a href = "index.php?v=0"  >BASH DATE</a>&nbsp;<br /> 
<a href = "index.php?v=1"  >MAN PS</a>&nbsp;<br />
<a href = "index.php?v=2"  >PS</a>&nbsp;<br />
<a href = "index.php?v=3"  >PS -A</a>&nbsp;<br />
<a href = "index.php?v=4"  >TIME C CODE</a>&nbsp;<br />
<a href = "index.php?v=5"  >PYTHON PING</a>&nbsp;<br />
<a href = "source/">SOURCE</a>&nbsp;
</div>
</div>
<center>
<div id = "contents">
<pre>
<?php
if (isset($_GET['v'])) {
	$thepost = $_GET['v']; // Default page
	} else {
		$thepost = -1;
	}
	
if ($thepost == -1) {
	$output = shell_exec('cal');
	 echo "OUTPUT";
	echo "<pre>$output</pre>";
}
if ($thepost == 0) {
	$output = shell_exec('date');
	 echo "OUTPUT";
	echo "<pre>$output</pre>";
}
if ($thepost == 1) {
	$output = shell_exec('man ps');
	 echo "OUTPUT";
	echo "<pre>$output</pre>";
}
if ($thepost == 2) {
	$output = shell_exec('ps');
	 echo "OUTPUT";
	echo "<pre>$output</pre>";
}

if ($thepost == 3) {
	$output = shell_exec('ps -a');
	 echo "OUTPUT";
	echo "<pre>$output</pre>";
}
if ($thepost == 4) {
        $output = shell_exec('./source/time');
	 echo "OUTPUT";
        echo "<pre>$output</pre>";
}

if ($thepost == 5) {
        $output = shell_exec('python3 source/pingdate.py');
	 echo "OUTPUT";
        echo "<pre>$output</pre>";
}

?>
</pre>
</div>
</center>

</body>
</html>
