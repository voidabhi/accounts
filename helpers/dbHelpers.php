
<?php
    function dbConnect(){
        try{
			// Localhost
            /*$username = 'root';
            $password = '';
            $conn = new pdo("mysql:host=localhost;dbname=accountsdb;", $username, $password);*/
			
			// Server
            $username = 'adminR75paIY';
            $password = 'cAsUpXKJkz5n';
            $conn = new pdo("mysql:host=127.7.184.2;dbname=accounts", $username, $password);
			
            $username = 'root';
            $password = '';
            $conn = new pdo("mysql:host=localhost;dbname=accountsdb;", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;

        }   catch(PDOException $e){
            echo 'ERROR', $e->getMessage();
        }
    }
?>

