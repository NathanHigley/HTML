<?php
session_start();
require_once("class.user.php");
$login = new USER();

if($login->is_loggedin()!="")
{
	$login->redirect('home.php');
}

if(isset($_POST['btn-login']))
{
	$uname = strip_tags($_POST['txt_uname_email']);
	$umail = strip_tags($_POST['txt_uname_email']);
	$upass = strip_tags($_POST['txt_password']);

	if($login->doLogin($uname,$umail,$upass))
	{
		$login->redirect('home.php');
	}
	else
	{
		$error = "Invalid.";
	}
}
?>

<html>
<head>
<title>APP - Welcome</title>
<link rel="stylesheet"type="text/css"href="style.css">
</head>
<body>
	<center><h1 class="box"id="head">Hambone Hotline</h1></center>
       <div class="box" id="menu"><form  method="post" id="login-form">


   <!-- error -->
        <?php
			if(isset($error))
			{
					echo $error;

			}
		?>

        <input type="text"  name="txt_uname_email" placeholder="Username | E-Mail" required />
        <input type="password" name="txt_password" placeholder="Password" />

       <br /><br />

            <button type="submit" name="btn-login">
                &nbsp; SIGN IN
            </button>

            <label><a href="adduser.php">REGISTER</a></label>
      </form></div></div><br /><br /><br /><hr /><br />
      <center>
      <div class="box"id="info">
		<h2>
		<?php $date = strtotime("February 28");
		$remaining = $date - time();
		$result = floor($remaining / 86400);
			if ($result < 0)
			{
				$date = strtotime("February 28 + 1 year");
				$remaining = $date - time();
				$result = floor($remaining / 86400);
			}
		print "There are $result days left until Day 59.";?>

		</h2>
	</div>
	</center>
</body>
</html>
