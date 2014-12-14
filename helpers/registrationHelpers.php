

<?php

require 'dbHelpers.php';


	function registerUser($details) 
	{
		$query = dbConnect()->prepare("INSERT INTO users (username, password,email,city) VALUES (:username,:password,:email,:city)");
		
        $query->bindParam(':username', $details['username']);

<<<<<<< HEAD
        $query->bindParam(':password', md5($details['password']));	
=======
        $query->bindParam(':password', $details['password']);	
>>>>>>> 19b68c5484f0d6a5cfb7e753940d1d564f7e1af6
		
        $query->bindParam(':email', $details['email']);		

		$query->bindParam(':city', $details['city']);

		return $query->execute();

	}
	
	function userExists($username)
	{
		
		$query = dbConnect()->prepare("SELECT * FROM users WHERE username=:username");
		
        $query->bindParam(':username', $username);	
		
		$query->execute();
		
        $row = $query->fetch();
		
		return count($row)>1;
		
	}
	
	function validateUser($details)
	{
		$username_regex = '/^(?=.{6,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/';
		$email_regex = '/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/';
		
		if(!preg_match($username_regex,$details['username']))
			return 1;
		if(!preg_match($email_regex,$details['email']))
			return 3;				
		if(strlen($details['password'])<8)
			return 2;		

		return 0;
	}


?>