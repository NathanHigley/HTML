<?php

	require_once("session.php");
	require_once("class.user.php");
	$auth_user = new USER();
	
	
	$user_id = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<html>
<head>
<title>APP - <?php print($userRow['user_name']); ?></title>
<link rel="stylesheet"type="text/css"href="style.css">
</head>

<body>
	<center><h1 class="box"id="head">Hambone Hotline</h1></center>
			<div class="box"id="menu">
    	<label>WELCOME : <?php print($userRow['user_name']); ?></label><hr />
		<a href="profile.php">View Profile</a>
		<a href="logout.php?logout=true">Sign Out</a>
        </div>
        <br />
        <center>
		<div class="box" id="nav">
        <nav>
        <a href="home.php">HOME</a> &nbsp; 
        </nav>
        </div>
        </center>
<br /><hr /><br />
      <center>
      <div class="box"id="info"><h2>Welcome Back, <?php print($userRow['user_name']); ?>!</h2></div>
      </center>
       
       
     

</body>
</html>
