
<?php
    function dbConnect(){
        try{
<<<<<<< HEAD
			// Localhost
            /*$username = 'root';
            $password = '';
            $conn = new pdo("mysql:host=localhost;dbname=accountsdb;", $username, $password);*/
			
			// Server
            $username = 'adminR75paIY';
            $password = 'cAsUpXKJkz5n';
            $conn = new pdo("mysql:host=127.7.184.2;dbname=accounts", $username, $password);
			
=======
            $username = 'root';
            $password = '';
            $conn = new pdo("mysql:host=localhost;dbname=accountsdb;", $username, $password);
>>>>>>> 19b68c5484f0d6a5cfb7e753940d1d564f7e1af6
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;

        }   catch(PDOException $e){
            echo 'ERROR', $e->getMessage();
        }
    }
?>

