<?php
session_start() ;
header("Access-Control-Allow-Origin: *"); 
include("app.bdd.php");
 
$infos = $_POST["infos"] ;
$mail = $_POST["mail"] ; 
$my_password = $_POST["password"] ; 

// $servername ="localhost";
// $username="u481158665_bokonzi"; 
// $password="v3p9r3e@59A"; 
// $dbname="u481158665_bokonzi"; 
if($infos=="connexion")
{
    echo "Connexion" ;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM `users` WHERE `users_email` ="'.$mail.'" AND `users_password` ="'.$my_password.'"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["users_name"];
        $_SESSION["info_http"] = "Connection reussi" ; 
    }
} else {
    echo "0 results";
    $_SESSION["info_http"] = "Echec de a connexion mot de passe ou adresse mail incorrect" ; 
}
$conn->close();

}
else 
{
















// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ='SELECT * FROM `users` WHERE `users_email` ="'.$mail.'"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "utilisateur connu dans la base de donne" ;
        $_SESSION["info_http"] = "Utilisateur connu dans la base de donne" ;
    }
} else {
    echo "Inscription reussi" ;
    $_SESSION["info_http"] = "Inscription reussi" ;
     
    $monUrl = $_SERVER['HTTP_HOST'];
    
         // Plusieurs destinataires
         $to  = $mail; // notez la virgule
    
         // Sujet
         $subject = 'Activation compte Bokonzi';
     
         // message
         $lien = "http://bokonzi.com/projets/fibre/src/app/all/function/app.activate.php/=".$mail;
         $message = '<a href="'.$lien.'">Cliquez ici pour activer</a>';
    
         // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
         $headers[] = 'MIME-Version: 1.0';
         $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    
         // En-têtes additionnels
         
         $headers[] = 'From: Bokonzi ndenga <contact@bokonzi.com>';
         $headers[] = 'Cc: contact@bokonzi.com';
         $headers[] = 'Bcc: contact@bokonzi.com';
    
         // Envoi
         mail($to, $subject, $message, implode("\r\n", $headers));
    
                                $conn = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
    
                            $sql = "INSERT INTO users (users_email)
                            VALUES ('$mail')";
    
                            if ($conn->query($sql) === TRUE) {
                                echo "New record created successfully";
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
    
                            $conn->close();
}
$conn->close();


















}


 


// Create connection

?>
