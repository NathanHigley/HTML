<html>
<head>
<title>AA</title>
<link rel="stylesheet"type="text/css"href="../css/stylesheet.css">
</head>



<?php
	error_reporting(0);
	$theList = array("*");
    if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".."&& $file != "index.php")
        {
            $thelist .= '<li><a href="'.$file.'"class = "bttn bttn2" target = "_blank">'.$file.'</a></li>';
        }
    }
    closedir($handle);
    }
?>

<body>
<div id="list">	
<div class="header">
  <img src = "img/logo.png" height = "70px">
  <?php  echo date("m/d/Y"); ?>
</div>
<header><span>HTML</span></header>

<hr />
<p>Files:</p>
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
