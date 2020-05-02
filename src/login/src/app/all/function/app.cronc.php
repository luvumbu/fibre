<?php

// include() ; 
$servername = "localhost";
$username = "u510206436_bokonzi";
$password = "v3p9r3e@59A";
$dbname = "u510206436_bokonzi";
echo "oui" ; 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'UPDATE `fibre` SET `today` ="con 2 "';

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>