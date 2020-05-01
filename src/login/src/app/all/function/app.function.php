<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("../../../../../app/all/function/app.bdd.php");
// Create connection
$AERIEN= $_POST["login1"] ;  
$SOUTFACADE=$_POST["login2"] ;  
$SAV= $_POST["login3"] ;  
$PLP= $_POST["login4"] ;  
$APPART= $_POST["login5"] ;  
$PVRHN= $_POST["login6"] ;  
$HOML1= $_POST["login7"] ;  
$fibre_adds = $_POST["fibre_adds"] ; 
if($AERIEN=="true")
{
    $AERIEN = 1 ; 
}
else 
{
    $AERIEN = 0 ; 
}
if($SOUTFACADE=="true")
{
    $SOUTFACADE = 1 ; 
}
else 
{
    $SOUTFACADE = 0 ; 
}
if($SAV=="true")
{
    $SAV = 1 ; 
}
else 
{
    $SAV = 0 ; 
}
if($PLP=="true")
{
    $PLP = 1 ; 
}
else 
{
    $PLP = 0 ; 
}
if($APPART=="true")
{
    $APPART = 1 ; 
}
else 
{
    $APPART = 0 ; 
}
if($PVRHN=="true")
{
    $PVRHN = 1 ; 
}
else 
{
    $PVRHN = 0 ; 
}
if($HOML1=="true")
{
    $HOML1 = 1 ; 
}
else 
{
    $HOML1 = 0 ; 
} 
// echo $_POST["login3"] ;  
// echo $_POST["login4"] ;  
// echo $_POST["login5"] ;  
// echo $_POST["login6"] ;  
// echo $_POST["login7"] ;  
// $sex_epreuve =$_POST["sex_epreuve"] ; 
// $epreuve_zone= $_POST["epreuve_zone"] ;    
// $stack = array("orange", "banana");
// array_push($stack, "apple", "raspberry");
// print_r($stack);
$fibre_id_user = $_SESSION["fibre_id_user"] ;
$nd= $_POST["nd"] ; 
// Create connection
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO fibre (fibre_id_user,fibre_nd,AERIEN,SOUTFACADE,SAV,PLP,APPART,PVRHN,HOML1,fibre_adds)
VALUES ('$fibre_id_user','$nd','$AERIEN','$SOUTFACADE','$SAV','$PLP','$APPART','$PVRHN','$HOML1','$fibre_adds')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
