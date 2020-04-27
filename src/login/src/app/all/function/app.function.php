<?php
header("Access-Control-Allow-Origin: *");
include("../../../../../app/all/function/app.bdd.php");
// Create connection
 



 
 
 
echo "ouiiiiiiiiii" ;
// echo $_POST["login1"] ;  
// echo $_POST["login2"] ;  
// echo $_POST["login3"] ;  
// echo $_POST["login4"] ;  
// echo $_POST["login5"] ;  
// echo $_POST["login6"] ;  
// echo $_POST["login7"] ;  





 
// $sex_epreuve =$_POST["sex_epreuve"] ; 
// $epreuve_zone= $_POST["epreuve_zone"] ; 
   
    
     


$nd= $_POST["nd"] ; 
 
// Create connection
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO fibre (fibre_nd)
VALUES ('$nd')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
