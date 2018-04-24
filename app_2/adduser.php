<?php
session_start();
require_once('class.user.php');
$user = new USER();

if($user->is_loggedin()!="")
{
	$user->redirect('home.php');
}

if(isset($_POST['btn-signup']))
{
	$uname = strip_tags($_POST['txt_uname']);
	$umail = strip_tags($_POST['txt_umail']);
	$upass = strip_tags($_POST['txt_upass']);	
	
	if($uname=="")	{
		$error[] = "Provide Username.";	
	}
	else if($umail=="")	{
		$error[] = "Provie E-Mail.";	
	}
	else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
	    $error[] = 'Please enter a valid email address !';
	}
	else if($upass=="")	{
		$error[] = "Provide Password.";
	}
	else if(strlen($upass) < 6){
		$error[] = "Password must be at least 6 characters.";	
	}
	else
	{
		try
		{
			$stmt = $user->runQuery("SELECT user_name, user_email FROM users WHERE user_name=:uname OR user_email=:umail");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);
				
			if($row['user_name']==$uname) {
				$error[] = "Username already registered.";
			}
			else if($row['user_email']==$umail) {
				$error[] = "E-Mail already registered.";
			}
			else
			{
				if($user->register($uname,$umail,$upass)){	
					$user->redirect('adduser.php?joined');
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}	
}

?>
<html>
<head>
<title>APP - Register</title>
<link rel="stylesheet"type="text/css"href="style.css">
</head>
<body>
    	<center><h1 class="box"id="head">Hambone Hotline</h1><br /><br /><br /><hr /><br />
        <div class="box"id="add"><form method="post">
            <?php
			if(isset($error))
			{
			 	foreach($error as $error)
			 	{
					 echo $error; 
				}
			}
			else if(isset($_GET['joined']))
			{
				 ?>
                  Successfully registered <a href='index.php'>login</a>
                 <?php
			}
			?>
   
            <input type="text"  name="txt_uname" placeholder="Username" value="<?php if(isset($error)){echo $uname;}?>" />
            <input type="text"  name="txt_umail" placeholder="E-Mail" value="<?php if(isset($error)){echo $umail;}?>" />
			<input type="password"  name="txt_upass" placeholder="Password (6 Characters)" />
         
            	<button type="submit" name="btn-signup">
                &nbsp;REGISTER
                </button>
            <label><a href="index.php">CANCEL</a></label>
        </form></div>
</center>
</body>
</html>
