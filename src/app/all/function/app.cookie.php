<?php
session_start() ;
header("Access-Control-Allow-Origin: *"); 
include("app.bdd.php");
 
$infos = $_POST["infos"] ;
$mail = $_POST["mail"] ; 
// echo  $servername ; 
// echo  $username ; 
// echo  $password ; 
// echo  $dbname ; 
if($infos=="connexion")
{
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM `users` WHERE `users_email` ="'.$mail.'"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["users_name"];
    }
} else {
    echo "0 results";
}
$conn->close();

}
else 
{
    echo "inscription  ok " ; 
}


 

?>