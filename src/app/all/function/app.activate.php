<?php
session_start() ;
header("Access-Control-Allow-Origin: *"); 
include("app.bdd.php");


$infos = $_POST["infos"] ;
$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$monUrls = $_SERVER['HTTP_HOST']."/src/app/all/function/app.newpassword.php" ;
$one_monUrls =$_SERVER['HTTP_HOST'] ;
?>
<div id="monulr" style="opacity: 0">
<?php echo  $monUrls ?>
</div>

<div id="one_monUrls" style="opacity: 0">
<?php echo  $one_monUrls ?>
</div>


<?php 
echo "<br/>" ; 
$mail1= "";
$mail2= "";
for($i = strlen($monUrl)-1 ; $i>0 ; $i--)
{
 if($monUrl[$i]=="=")
 {
        $i = 0; 
 }
 else 
 {
 
     $mail1 = $mail1.$monUrl[$i]; 
 }
}
for($i = strlen($mail1)-1 ; $i>-1 ; $i--)
{    
    $mail2 = $mail2.$mail1[$i];
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE users SET users_verif='1' WHERE users_email='".$mail2."'";

if ($conn->query($sql) === TRUE) {
    echo '<div id="validation">
    Félicitation Votre compte a bien été Validé
    </div>';
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>


<div id="monmail" style="opacity: 0">
<?php 
echo $mail2 ; 
?>
</div>
 
<style>
#validation 
{
    background-color: #5fa2ed ; 
    color : #cae2f7 ; 
    font-size : 2em ; 
    margin:auto ; 
     width: 50% ;
     text-align: center ;
    padding:  30px ;
    text-shadow: 1px 1px black ; 
    box-shadow: 1px 1px black ; 

}
body 
{
    margin : 0 ; 
  

}
.inputs 
{
    width : 100% ; 
    border-radius: 15px ; 
    margin-bottom: 15px; 
    border:1px solid #5fa2ed ; 
    padding: 15px; 

}
.w50 
{
    width: 50%; 
    margin:auto ; 
    margin-top: 50px; 
}
.envoyer 
{
    background-color: #5fa2ed ; 
    color : white ; 
    width: 30% ; 
    text-align: center ; 
    font-size: 2em ; 
    padding: 15px; 
    border-radius: 10px; 
}
.envoyer:hover 
{
    cursor : pointer ; 
    background-color: #cae2f7 ; 
}
.envoyer:active 
{
    cursor : pointer ; 
    background-color: #5fa2ed ; 
}
</style>

<div class="w50">
    Entrer votre nouveau mot de passe 
</div>
<div class="w50">

<input type="password" class="inputs" placeholder="Mot de passe" id="password1">
<input type="password" class="inputs" placeholder="Confirmation du mot de passe"  id="password2">
<div class="envoyer" onclick="sendpassword()">Envoyer</div>
</div>

<script>
var myurl =  document.getElementById("monulr").innerText ; 

    function sendpassword() 
    {
      var passwors_1=  document.getElementById("password1").value ;
      var passwors_2=  document.getElementById("password2").value ;
      if(passwors_1!="" && passwors_2!="")
      {
          if(passwors_1==passwors_2)
          {
           
              if(passwors_1.length>6)
              {              
               var myurlUp="https://"+document.getElementById("monulr").innerHTML;
               var monmail = document.getElementById("monmail").innerText  ;

               var one_monUrls = document.getElementById("one_monUrls").innerText  ;
              //var  one_monUrls = "https://"+document.getElementById("monulr").innerHTML;
                 // Toutes les conditions sont respectées 
                    var identite = new FormData();
                    // Ajout d'information dans l'objet
                    identite.append("passwors_1", passwors_1);
                    identite.append("mail", monmail);
                    // Création et configuration d'une requête HTTP POST vers le fichier post_form.php
                    var req = new XMLHttpRequest();
                    req.open("POST", myurlUp);
                    // Envoi de la requête en y incluant l'objet
                    req.send(identite);
                    console.log(req);
                    setTimeout(function(){  
                    document.location.href="https://"+one_monUrls+"/src/login/index.php";                     
                         }, 1000);
              }
              else 
              {
                  alert("Mot de passe trop court 6 caractéres minimum") ; 
              }
          }
          else 
          {
              alert("Les mot de passe ne sont pas identiques ")  ; 
          }
      }
      else 
      {
          alert("Nous ne pouvons pas envoyer un formulaire vide") ; 
      }
    }
</script>
<?php 


$somme = 0 ; 
$moi = "";
for($i = strlen($monUrl)-1 ; $i>0 ; $i--)
{
 if($monUrl[$i]=="=")
 {
        //$i = 0; 
        $somme ++ ;
 }
 else if($somme==1) 
 {
    $moi =$moi.$monUrl[$i] ; 
 }
 else if($somme==2) 
 {
    $i = 0; 
 }


}



 

 
















$moi_bis = "" ; 


for($i = strlen($moi)-1 ; $i>-1 ; $i--)
{    
    $moi_bis = $moi_bis.$moi[$i];
}

 
 if($moi_bis!=sha1($mail2))
 {
    header('Location: http://www.bokonzi.fr/');
    exit;
 }
 
 
?>