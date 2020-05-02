<!-- 𝕨𝕨𝕨.𝔹𝕠𝕜𝕠𝕟𝕫𝕚.𝕔𝕠𝕞  𝖞𝖉𝖊𝖓𝖌𝖆 𝕿𝖚𝖛𝖚𝖒𝖇𝖚   ★☆♨♫✈❤
    //  ★   =   début de l'information
    //  ☆   =   fin de l'information
    //  ♨   =   Code de l'information premier letre du fichier et dernier lettre du fichier suivi du numéro du commentaire.
    //  ♫   = connexion css all suivi du nom du fichier 
    //  ✈   ♨=#ix   Je suis dans la racine du fichier   ♨=#ix  
    //  
    //
𝕨𝕨𝕨.𝔹𝕠𝕜𝕠𝕟𝕫𝕚.𝕔𝕠𝕞  𝖞𝖉𝖊𝖓𝖌𝖆 𝕿𝖚𝖛𝖚𝖒𝖇𝖚   ★☆♨♫✈❤   -->
<?php 
     session_start() ;
     $servername=      $_SESSION["servername"]; 
     $username=        $_SESSION["username"] ; 
     $password=        $_SESSION["password"]; 
     $dbname =         $_SESSION["dbname"];
     $users_email =    $_SESSION["users_email"];
     $users_password = $_SESSION["users_password"];

   if(isset($_SESSION["info_http"]))
   {
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = 'SELECT * FROM `users` WHERE `users_email`="'.$users_email.'" AND `users_password` ="'.$users_password.'"';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $_SESSION["fibre_id_user"] = $row["users_id"] ;
      // récuperation de L'id pour exploitation dans le fichier section.php 
     }
} 
else {
   // SI l'utilisateur ou mot de passe n'est pas correct faire une redirection puis deconnexion de la personne
   echo '<meta http-equiv="Refresh" content="0; url=https://bokonzi.fr/src/login/src/app/all/function/app.deconnexion.php" />';
}
$conn->close();
      if( $_SESSION["info_http"]=="")
      {
            $lien = $_SERVER['HTTP_HOST'] ; // redirection pour la déconnexion 
            echo '<meta http-equiv="Refresh" content="0; url='.$lien.'" />';
            echo '<style> body {opacity :0 }';
      }
   }
   else 
   {
      echo '<meta http-equiv="Refresh" content="0; url=https://bokonzi.fr" />';
      echo '<style> body {opacity :0 }';
   }
   $name_bdd = "app.bdd.php"; // création de la variable à verifier pour le bon fonctionnement de la page 
   // variable  1  
?>
<div id="name_bdd" class="<?php  echo $name_bdd; ?>">
<link rel="stylesheet" href="src/app/all/function/css/police.css">
<link rel="stylesheet" href="src/app/all/function/css/margin.css">
<link rel="stylesheet" href="src/app/all/function/css/padding.css">
<link rel="stylesheet" href="src/app/all/function/css/police.css">
<link rel="stylesheet" href="src/app/all/function/css/forms.css">
<link rel="stylesheet" href="src/app/all/function/css/general.css">
<!-- prend la valeur de la variable du div pour le re utiliser dans les fichier check.bdd.php" -->
</div>
<script
   src="https://code.jquery.com/jquery-3.4.1.min.js"
   integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
   crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
<!DOCTYPE html>
   <html lang="fr">
      <head>         
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">                      
      </head>
      <title>Document</title>
         <body id="body">          
            <?php                    
               require "src/app/all/app.php";  // demande ajouter les elements dans l'emplacement du fichier $name_bdd
             ?>
    <script src="src/app/all/function/app.js"></script>  
        </body>
    </html>
