<?php
session_start() ; 
header("Access-Control-Allow-Origin: *"); 
$mail = $_POST['mail'];
$name = $_POST['name'];
echo $mail ; 
echo $name ;
$password_ =  $_SESSION["password"] ; 
$username_ =  $_SESSION["username"] ; 
$_SESSION["mail"] =$mail ;
$passage_ligne = "\n";
//Déclaration des messages au format texte et au format HTML.
$message_html = "<html><head>";
$message_html = "<html><head>";
$message_html .= "</head><body><b>Bonjour,</b><br /><br /><p> Activation de votre compte ici";
$message_html .= '<a href="http://bokonzi.com/src/app/all/activation.php"><i>ACTIVATION</i></a>';
$message_html .= "</p></body></html>"; 
//Définition du sujet.
$sujet = "Véhicule de fonction"; 
//Création du header de l'e-mail.
$header = 'From: "Bokonzi"<contact@bokonzi.com>'.$passage_ligne;
$header.= 'Reply-to: "Bokonzi" <contact@bokonzi.com>'.$passage_ligne;
$header.= 'MIME-Version: 1.0'.$passage_ligne;
$header.= 'Content-Type: text/html; charset="ISO-8859-1"'.$passage_ligne;
$header.= 'Content-Transfer-Encoding: 8bit'.$passage_ligne;
$to = $mail ;                                                                                                                                                                                                   
//Envoi de l'e-mail.
mail($to, $sujet, $message_html,$header);
$servername = "localhost";
$username = $username_;
$password = $password_ ;
$dbname = $username_;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO users (users_name,users_email)
VALUES ('$name','$mail')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>