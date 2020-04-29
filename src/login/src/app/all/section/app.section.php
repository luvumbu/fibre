<!--    𝕨𝕨𝕨.𝔹𝕠𝕜𝕠𝕟𝕫𝕚.𝕔𝕠𝕞  𝖞𝖉𝖊𝖓𝖌𝖆 𝕿𝖚𝖛𝖚𝖒𝖇𝖚   ★☆♨♫✈❤   
    //  ★   =   début de l'information
    //  ☆   =   fin de l'information
    //  ♨   =   Code de l'information premier letre du fichier et dernier lettre du fichier suivi du numéro du commentaire.
    //  ♫   = connexion css all suivi du nom du fichier 
    //  ✈  = provenence du fichier total /!\... app.php ... /!\ racine du fichier ♨=ap010
    //  ❥ = le fichier ne pas au même emplacement que l'appelant /!\
    //
    𝕨𝕨𝕨.𝔹𝕠𝕜𝕠𝕟𝕫𝕚.𝕔𝕠𝕞  𝖞𝖉𝖊𝖓𝖌𝖆 𝕿𝖚𝖛𝖚𝖒𝖇𝖚   ★☆♨♫✈❤  -->
<?php
require 'app.section.html';
?>
<link rel="stylesheet" href="src/app/all/section/app.section.css">
<script src="src/app/all/section/app.section.js"></script>   
<?php
 
include('../app/all/function/app.bdd.php') ; 

 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM `fibre` WHERE 1';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Nd: " . $row["fibre_nd"];


        
        echo "<br/>";    
        echo "AERIEN: " . $row["AERIEN"];
        $AERIEN = $row["AERIEN"]*1*2.35; 
        echo "<br/>";
        echo "SOUTFACADE: " . $row["SOUTFACADE"];
        $SOUTFACADE =$row["SOUTFACADE"]*1*1.5; 
        echo "<br/>";
        echo "SAV: " . $row["SAV"];
        $SAV = $row["SAV"]*1*0.45 ; 
 

        echo "<br/>";
        echo "PLP: " . $row["PLP"];
        $PLP = $row["PLP"]*1*0.35 ; 

        echo "<br/>";
        echo "APPART: " . $row["APPART"];
        $APPART = $row["APPART"]*1*0.7;

        echo "<br/>";
        echo "PVRHN: " . $row["PVRHN"];
        $row["PVRHN"] = $row["PVRHN"]*1*0.7 ; 

        echo "<br/>";
        echo "HOML1: " . $row["HOML1"];
        $HOML1 = $row["HOML1"]*1*0.3;
        echo "<br/>";

        
 $total = $AERIEN+$SOUTFACADE+$SAV + $PLP +$APPART+$PVRHN+$HOML1 ; 
echo  $total ; 
      ?> 
<?php 


    }
} else {
    echo "0 results";
}
$conn->close();
?>

 