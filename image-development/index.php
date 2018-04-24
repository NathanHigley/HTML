<html>
<head>
<title>higley.ioe - IMG_D</title>
<link rel="stylesheet"type="text/css"href="../css/stylesheet.css">
</head>
<?php
session_start();
$_SESSION['pagename'] = "html-index";
include "../db/pushhits.php";
	error_reporting(0);
	$theList = array("*");
    if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
		
		$l = "file.png";
		
		if ($file == "image-development" || $file == "functiontoolkit" || $file == "app" || $file == "img" || $file == "menu" )
		$l = "directory.png";
		
        if ($file != "." && $file != ".."&& $file != "index.php" && $file != "css" && $file !="db" && $file !=".git") 
        {
            $thelist .= '<img src = ../img/'.$l.'><a href="'.$file.'"class = "bttn bttn2" target = "_blank">'.$file.'</a><br />';
        }
    }
    closedir($handle);
    }
?>

<body>
<div id="list">	
<div class="header">
<center>
  <img src = "../img/logo.png" height = "60px"><br /><br />
  <?php  echo date("m/d/Y"); ?>
</div>
<header><span><h2 style="text-align:center;">IMG_D</h2></span></header>
</center>
<hr />
<ul>
<?php echo $thelist?>
</ul>

<hr />
</div>
<footer>
<center>

</center>
</footer>

</body>
</head>
