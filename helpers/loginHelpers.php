

<?php

require 'dbHelpers.php';

	function checkUser($username,$password)
	{
		
		$query = dbConnect()->prepare("SELECT * FROM users WHERE username=:username AND password=:password");
		
        $query->bindParam(':username', $username);
<<<<<<< HEAD
		$query->bindParam(':password', md5($password));		
=======
		$query->bindParam(':password', $password);		
>>>>>>> 19b68c5484f0d6a5cfb7e753940d1d564f7e1af6
		
		$query->execute();
		
        $row = $query->fetch();
		
		return count($row)>1;
		
	}
	
	function fetchUser($username)
	{
		$query = dbConnect()->prepare("SELECT * FROM users WHERE username=:username");
		
        $query->bindParam(':username', $username);	
		
		$query->execute();
		
        if($row = $query->fetch())
		{
			return array(
				'username' => $row['username'],
				'email' => $row['email'],
				'city' => $row['city']
			);
		}
		else
		{
			return null;
		}
	}
	


?>