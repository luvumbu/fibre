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
<div id="cookie-identification"></div>
<link rel="stylesheet" href="src/app/all/section/app.section.css">
<script src="src/app/all/section/app.section.js"></script>  
<?php 
if(isset($_SESSION["info_http"]))
{
    if( $_SESSION["info_http"]=="on")
    {
        $lien = $_SERVER['HTTP_HOST'] ;
        $lien = $_SERVER['HTTP_HOST'] ;
        echo '<meta http-equiv="refresh" content="0;URL=https://'.$lien.'fr/src/login/index.php">' ; 
        echo "sa marche" ; 
        echo '<div id="info_http">'.$_SESSION["info_http"].'</div>';
    }    
        echo '<div id="info_http">' ;
        echo $_SESSION["info_http"]  ; 
        echo '</div>' ;  
}
?>
<script>
  var info=  document.getElementById("info_http").innerHTML ; 
</script>


