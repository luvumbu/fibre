<?php
session_start() ;
header("Access-Control-Allow-Origin: *"); 

include("app.bdd.php");
 
$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

echo "<br/>" ; 



$mail1= "";
$mail2= "";
for($i = strlen($monUrl)-1 ; $i>0 ; $i--)
{
 if($monUrl[$i]=="=")
 {
        $i = 0; 
 }
 else 
 {
 
     $mail1 = $mail1.$monUrl[$i]; 
 }
}
for($i = strlen($mail1)-1 ; $i>-1 ; $i--)
{    
    $mail2 = $mail2.$mail1[$i];
}
 echo  $mail2 ; 

















// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'UPDATE `users` SET `users_verif` = "10" WHERE `users`.`users_emails` = 6';

if ($conn->query($sql) === TRUE) {
    echo "Votre adresse mail a bien été validé";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();





 

?>