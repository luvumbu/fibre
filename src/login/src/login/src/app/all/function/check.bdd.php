<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
$user_password = $_POST['user_password']; 
$user_name = $_POST['user_name']; 
$name_bdd ="app.bdd.php";
// variables envoyé depuis le formulaire
$servername = "localhost";
$username = $user_name;
$password = $user_password;
$dbname = $username ;
$_SESSION["newsession"] = "off" ; 
echo $user_name ; 
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"; 
// Create connection
$conn1 = new mysqli($servername, $username, $password);
$conn2 = new mysqli($servername, $username, $password);
$conn3 = new mysqli($servername, $username, $password);
$conn4 = new mysqli($servername, $username, $password);
$conn5 = new mysqli($servername, $username, $password);
// Check connection
// Create connection
$conn1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}
// sql to create table
$sql1 = "CREATE TABLE users (
users_id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
users_name VARCHAR(50),
users_email VARCHAR(50),
users_password VARCHAR(50),
users_verif VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn1->query($sql1) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn1->error;
}
$conn1->close();
// Create connection
$conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
}
// sql to create table
$sql2 = "CREATE TABLE articles(
articles_id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
articles_id_user VARCHAR(30),
articles_id_name VARCHAR(100),
articles_format VARCHAR(30),
articles_source_in VARCHAR(200) ,
articles_source_ex VARCHAR(200),
articles_source_status VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn2->query($sql2) === TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn2->error;
}
$conn2->close();
$filename = $name_bdd;
if (file_exists($filename)) {
    echo "Le fichier $filename existe.";
} else {
    echo "Le fichier $filename n'existe pas.";
    $texte = "<?php";
    $texte = $texte."\n";
    $texte = $texte."\n";
    $texte = $texte.'$servername ="'.$servername.'";';
    $texte = $texte."\n";
    $texte = $texte.'$username="'.$username.'";';
    $texte = $texte." \n";
    $texte = $texte.'$password="'.$password.'";';
    $texte = $texte." \n";
    $texte = $texte.'$dbname="'.$dbname.'";';
    $texte = $texte." \n";
    $texte = $texte."\n";
    $texte = $texte."?>"; 
    // création du fichier
    $f = fopen($filename, "x+");
    // écriture
    fputs($f, $texte);    
    // fermeture
    fclose($f);
}
?>
 