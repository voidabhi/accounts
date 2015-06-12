<?php
session_start();
	
	require 'helpers/registrationHelpers.php';
	
    $errors = array(
        1=>'Please enter a valid username',
        2=>'Please enter a valid password',
        3=>'Please enter a valid email address',
		4=>'Please complete the form',
		5=>'Username already exists',
		6=>'User registered successfully!'
    );
	
	$name = 'guest';
	
	if(!isset($_SESSION['username']))
		header('Location:login.php?err=2');
	else
		$name = $_SESSION['username'];
	
	
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		if(isset($_POST['username'],$_POST['email'],$_POST['city'],$_POST['password']))
		{
			$validUser = validateUser($_POST);
			if($validUser!=0)
				header('Location:index.php?err='.$validUser);
				
			if(!userExists($_POST['username']))
			{
				registerUser($_POST); 
				header('Location:index.php?err=6');
			}
			else {
				header('Location:index.php?err=5');
			}
		}
		else
		{	
			header('Location:login.php?err=4');
		}
	}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accounts Manager</title>

    <!-- Bootstrap -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">

	
	<link rel="icon" href="static/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="static/favicon.ico" type="image/x-icon" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="container">
        
	<div class="row clearfix center-block">
		<div class="col-md-2 column">
		</div>
		<div class="col-md-8 column">
			<div class="page-header">
					<h1 class="text-left text-danger">Hi <?php print $name;?>!</h1>
					<a href="logout.php" class="text-center">Logout</a>
			</div>
		</div>
		<div class="col-md-2 column">
		</div>
	</div>        

        
        <form class="form-signin" role="form" action="index.php" method="POST">
          <h2 class="form-signin-heading text-center text-muted">Enter User Details</h2><br>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" class="form-control" placeholder="Username" name="username" required autofocus>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Email" name="email" required>    
		<label for="inputCity" class="sr-only">City</label>
        <input type="text" id="inputCity" class="form-control" placeholder="City" name="city" required>		
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        <?php if(isset($_GET['err'])){?><p class="text-danger text-center"><?=$errors[$_GET['err']]?></p><?php }?>
        <button class="btn btn-lg btn-primary btn-block btn-danger" type="submit">Add User</button><br>
      </form>

    </div> 
    <script src="static/js/jquery.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
	<script src="static/js/typeahead.js"></script>
	<script src="static/js/script.js"></script>
  </body>
</html>
