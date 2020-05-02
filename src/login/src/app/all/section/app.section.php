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
$final = "" ;
$final2 ="";
?>
<script>
    var d = new Date();
    var anne  = d.getFullYear(); 
    var mois = d.getMonth() + 1;
    var jour = d.getDate();
    if(mois<10)
    {
             mois = "0"+mois;
    }
    if(jour<10)
    {
         
        jour = "0"+jour;
        
    }

    var anneTotal = anne+"-"+mois+"-"+jour;
</script>
<link rel="stylesheet" href="src/app/all/section/app.section.css">
<script src="src/app/all/section/app.section.js"></script>   
<?php 
//include('../app/all/function/app.bdd.php') ; 
// ajout des variable dans le fichier BDD parent
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$fibre_id_user =$_SESSION["fibre_id_user"];
$sql ='SELECT * FROM `fibre` WHERE `fibre_id_user`="'.$fibre_id_user.'"';
// code a revoir  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // affiche tous les ND 
        
        for($i = 0 ; $i<10; $i++)
        {
           // echo "Nd: " . $row["fibre_adds"].'<br/>';
            $final =$final.$row["fibre_adds"][$i]   ; 
        

        }      
      
        $final2 = $final ;
        if($row["today"]=="0")
        {
            echo $final.'<br/>';
        }

 
?>


<div class="<?php echo "a".$final  ?> " id="<?php echo "a"  ?> ">
</div>

<?php 



  $final ="" ; 
   }
} else {

}
$conn->close();
?>

 


<?php 

// echo 
// '<style>.a'.$final2.'
// {
//     background-color:green;
// }
// </style>' ;
?>

