<?php
session_start() ;
header("Access-Control-Allow-Origin: *"); 
include("app.bdd.php");
$infos = $_POST["infos"] ;
$mail = $_POST["mail"] ; 
$my_password = $_POST["password"] ; 
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
         
        $_SESSION["info_http"] = "on" ;         
        $_SESSION["servername"] = $servername ; 
        $_SESSION["username"] = $username ; 
        $_SESSION["password"] = $password ; 
        $_SESSION["dbname"] = $dbname ; 
        $_SESSION["users_email"] =  $row["users_email"];
        $_SESSION["users_password"] =  $row["users_password"];
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
         //$_SESSION["info_http"] = $row["users_verif"] ;
        $users_verif = $row["users_verif"];
        if($users_verif=="-1")
        {
            $_SESSION["info_http"]= "Votre adresse mail n'est pas activé";
        }
        else 
        {
            $_SESSION["info_http"]= "Votre compte existe connecté vous pour vous connecter " ;
        }
        $_SESSION["info_status"] = "0" ;
        $_SESSION["info_mail"] = $mail ;
        /// debut du code 
$connx = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connx->connect_error) {
    die("Connection failed: " . $connx->connect_error);
}
$sqlx = 'SELECT * FROM `users` WHERE `users_email`="'.$mail.'" AND `users_verif`="0"';
$resultx = $connx->query($sqlx);
if ($resultx->num_rows > 0) {
    // output data of each row
    while($row = $resultx->fetch_assoc()) {
        echo "Valeur pas verif" ; 
    }
} else {
    echo "0 results";
}
$connx->close();
     /// fin du code

    }
} else {
    echo "Inscription reussi" ;
    $_SESSION["info_http"] = "Inscription reussi" ;
     
    $monUrl = $_SERVER['HTTP_HOST'];
    $_SESSION["info_status"] = "1" ;
    
         // Plusieurs destinataires
         $to  = $mail; // notez la virgule
    
         // Sujet
         $subject = 'Activation compte Bokonzi';
     

          
         // message
         $lien = $monUrl."/src/app/all/function/app.activate.php/=".sha1($mail)."=".$mail;
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
