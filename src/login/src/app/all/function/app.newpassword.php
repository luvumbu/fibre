<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *"); 
include("app.bdd.php");
echo $servername ; 
//$passwors_s= $_POST["passwors"] ; 
$monmail =  $_POST["mail"] ; 
$passwors_1 = $_POST["passwors_1"] ; 
echo $monmail  ; 
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }     
        $sql = 'UPDATE users SET users_password="'.$passwors_1.'" WHERE users_email="luvumbu.n@gmail.com"';
        
        if ($conn->query($sql) === TRUE) {
 
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $conn->close();
            $_SESSION["users_email"] =$monmail ; 
            $_SESSION["users_password"] =$passwors_1 ; 
?>