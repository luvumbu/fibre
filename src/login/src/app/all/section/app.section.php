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
$sommeTotal1= 0 ;
$sommeTotal2 = 0 ;
$sommeTotal1x= 0 ;
$sommeTotal2x = 0 ; 



$AERIENx1 = 0;
$SOUTFACADEx1 =0 ;
$SAVx1 = 0;
$PLPx1 = 0;
$APPARTx1 = 0;
$PVRHNx1 = 0;
$HOMLx1 = 0;
$AERIENx2 = 0;
$SOUTFACADEx2 =0 ;
$SAVx2 = 0;
$PLPx2 = 0;
$APPARTx2 = 0;
$PVRHNx2 = 0;
$HOMLx2 = 0;

 
$array_AERIENx1 = array("");
$array_SOUTFACADEx1 = array("");
$array_SAVx1 = array("");
$array_PLPx1 = array("");
$array_APPARTx1 = array("");
$array_PVRHNx1 = array("");
$array_HOMLx1 = array("");


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
            

            if($row["AERIEN"]==1)
            {
               
            $AERIENx1 = $AERIENx1 + 1 ;            
            if($array_AERIENx1[0]=="")
                {
                    $array_AERIENx1[0]  = $AERIENx1 ; 
                }
                else 
                {
                    array_push($array_AERIENx1, $AERIENx1);
                }         

 
            
 
            }
            if($row["SOUTFACADE"]==1)
            {              
             
                $SOUTFACADEx1 = $SOUTFACADEx1 + 1 ;
                

                if($array_SOUTFACADEx1[0]=="")
                {
                    $array_SOUTFACADEx1[0]  = $SOUTFACADEx1 ; 
                }
                else 
                {
                    array_push($array_SOUTFACADEx1, $SOUTFACADEx1);
                }
 
                

            }
            if($row["SAV"]==1)
            {
                 
                $SAVx1 = $SAVx1 + 1 ;
                
                if($array_SAVx1[0]=="")
                {
                    $array_SAVx1[0]  = $SAVx1 ; 
                }
                else 
                {
                    array_push($array_SAVx1, $SAVx1);
                }

            }
            if($row["PLP"]==1)
            {
                
                $PLPx1 = $PLPx1 + 1 ;
                if($array_PLPx1[0]=="")
                {
                    $array_PLPx1[0]  = $PLPx1 ; 
                }
                else 
                {
                    array_push($array_PLPx1, $PLPx1);
                }
            }
            if($row["APPART"]==1)
            {
                 
                $APPARTx1 = $APPARTx1 + 1 ;
                if($array_APPARTx1[0]=="")
                {
                    $array_APPARTx1[0]  = $APPARTx1 ; 
                }
                else 
                {
                    array_push($array_APPARTx1, $APPARTx1);
                }

            }
            if($row["PVRHN"]==1)
            {
                 
                $PVRHNx1 = $PVRHNx1 + 1 ;

                if($array_PVRHNx1[0]=="")
                {
                    $array_PVRHNx1[0]  = $PVRHNx1 ; 
                }
                else 
                {
                    array_push($array_PVRHNx1, $PVRHNx1);
                }

                if($array_APPARTx1[0]=="")
                {
                    $array_APPARTx1[0]  = $APPARTx1 ;
                    if($array_APPARTx1[0]=="")
                    {
                        $array_APPARTx1[0]  = $APPARTx1 ; 
                    }
                    else 
                    {
                        array_push($array_APPARTx1, $APPARTx1);
                    } 
                }
                else 
                {
                    array_push($array_APPARTx1, $APPARTx1);
                    

                    
                }

            }
            if($row["HOML1"]==1)
            {
                 
                $HOMLx1 = $HOMLx1 + 1 ;
                if($array_HOMLx1[0]=="")
                {
                    $array_HOMLx1[0]  = $HOMLx1 ; 
                }
                else 
                {
                    array_push($array_HOMLx1, $HOMLx1);
                }
            }
              
            $sommeTotal2 = $row["AERIEN"]+  $row["SOUTFACADE"]+  $row["SAV"]+  $row["PLP"]+  $row["APPART"]+ $row["PVRHN"]+$row["HOML1"];
            $sommeTotal2x =$sommeTotal2x+$row["AERIEN"]*1*2.5 +$row["SOUTFACADE"]*1*1.5+ $row["SAV"]*1*0.45+  $row["PLP"]*1*0.35+  $row["APPART"]*1*0.7+ $row["PVRHN"]*1*0.7+$row["HOML1"]*1*0.3; 
           }
        if($row["today"]=="1")
        {
        
            if($row["AERIEN"]==1)
            {
              
                // $AERIENx2 = $AERIENx2 +1;
                // $SOUTFACADEx2 =$SOUTFACADEx2 +1 ;
                // $SAVx2 = $SAVx2 +1;
                // $PLPx2 = $PLPx2 +1;
                // $APPARTx2 = $APPARTx2 +1;
                // $PVRHNx2 = $PVRHNx2 +1;
                // $HOMLx2 = $HOMLx2 +1;
            }
            if($row["SOUTFACADE"]==1)
            {
                
            }
            if($row["SAV"]==1)
            {
                
            }
            if($row["PLP"]==1)
            {
               
            }
            if($row["APPART"]==1)
            {
                
            }
            if($row["PVRHN"]==1)
            {
                 
            }
            if($row["HOML1"]==1)
            {
                
            }                
            echo '</div>'; 
            $sommeTotal1 = $sommeTotal1+$row["AERIEN"]+  $row["SOUTFACADE"]+  $row["SAV"]+  $row["PLP"]+  $row["APPART"]+ $row["PVRHN"]+$row["HOML1"];  
            $sommeTotal1x =$sommeTotal1x+$row["AERIEN"]*1*2.5 +$row["SOUTFACADE"]*1*1.5+ $row["SAV"]*1*0.45+  $row["PLP"]*1*0.35+  $row["APPART"]*1*0.7+ $row["PVRHN"]*1*0.7+$row["HOML1"]*1*0.3; 
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
$sommeTotalX = $sommeTotal1x + $sommeTotal2x ;
// echo "Somme total est de ".$sommeTotalX."<br/>" ; 
// echo  "Nombre des points aujourd'hui : " .$sommeTotal2x."<br/>"  ;
$sommeargent = $sommeTotal2x*25 ; 
// echo  "Nombre des points aujourd'hui  X25: " .$sommeargent  ;
?>
 
<style>
    .ajd
    {
        background-color: yellow;
    }
    .autre 
    {
        background-color: yellowgreen;
    }
</style>


<style>
    tr 
{
   
    text-align: center ;
    width: 100% ; 
    
}
table
{
    width:80%; 
 
    margin: auto ; 
}
caption ,td,th
{
    border : 1px solid rgba(0, 0, 0, 0.1);
    padding: 15px;
}
th 
{
   
    color :rgba(0, 0, 0, 0.6) ; 
    background-color: #d2e4ea ; 
}
caption 
{
    background-color: #c6dae2 ; 
}
</style>
<?php 
$array_AERIENx_total = 0 ; 
$array_SOUTFACADEx_total = 0 ; 
$array_SAVx_total = 0 ; 
$array_PLPx_total = 0 ; 
$array_APPARTx_total = 0 ; 
$array_PVRHNx_total = 0 ; 
$array_HOMLx_total = 0 ; 
if($array_AERIENx1[0]=="") 
{
$array_AERIENx_total = 0 ; 
}
else 
{
    $array_AERIENx_total = count($array_AERIENx1) ; 
}

if($array_SOUTFACADEx1[0]=="") 
{
    $array_SOUTFACADEx_total = 0 ; 
}
else 
{
 

    $array_SOUTFACADEx_total = count($array_SOUTFACADEx1);
 
}
if($array_SAVx1[0]=="") 
{
    $array_SAVx_total = 0 ; 

}
else 
{
    $array_SAVx_total = count($array_SAVx1);
  
}
if($array_PLPx1[0]=="") 
{
    $array_PLPx_total = 0 ; 
}
else 
{

    $array_PLPx_total = count($array_PLPx1 ) ; 
  
}
if($array_APPARTx1[0]=="") 
{
    $array_APPARTx_total = 0 ; 
    
}
else 
{

    $array_APPARTx_total = count($array_APPARTx1);
  
}
if($array_PVRHNx1[0]=="") 
{
    $array_PVRHNx_total = 0 ;
}
else 
{
    $array_PVRHNx_total = count($array_PVRHNx1);
    
}
if($array_HOMLx1[0]=="") 
{
    $array_HOMLx_total  = 0 ; 
}
else 
{
    $array_HOMLx_total = count($array_HOMLx1); 
}

?>
<table>
   <caption>Aujourd'hui</caption>

   <thead> <!-- En-tête du tableau -->
       <tr>
           <th>INTERS</th>
           <th>POINTS</th>
           <th>POINTS x25</th>
           <th>ND:</th>
       </tr>
   </thead>

   <tfoot> <!-- Pied de tableau -->
       <tr>
           <th>TOTAL</th>
           <th>
               <?php echo 
$array_AERIENx_total+
$array_SOUTFACADEx_total+
$array_SAVx_total+
$array_PLPx_total+
$array_APPARTx_total+
$array_PVRHNx_total+
$array_HOMLx_total ; ?>
            </th>
           <th>
<?php 
        echo   $array_AERIENx_total*1*2.35*25+
               $array_SOUTFACADEx_total*1*1.5*25+
               $array_SAVx_total*1*0.45*25+
               $array_PLPx_total*1*0.35*25+
               $array_APPARTx_total*1*0.7*25+
               $array_PVRHNx_total*1*0.7*25+
               $array_HOMLx_total*1*0.3*25 ; 
?>



           </th>
           <th></th>
       </tr>
   </tfoot>

   <tbody> <!-- Corps du tableau -->
       <tr>
           <td>AERIEN</td>
           <td>
               <?php echo  $array_AERIENx_total ?>
            </td>
           <td><?php echo  $array_AERIENx_total*1*2.5*25 ?></td>
           <td>0</td>
       </tr>
       <tr>
           <td>SOUT / FACADE</td>
           <td>
               <?php echo $array_SOUTFACADEx_total ?>
            </td>
           <td> <?php echo $array_SOUTFACADEx_total*1*1.5*25 ?></td>
           <td>0</td>
       </tr>
       <tr>
           <td>SAV</td>
           <td>
               <?php echo $array_SAVx_total ?>
            </td>
           <td> <?php echo $array_SAVx_total*1*0.45 ?></td>
           <td>0</td>
       </tr>
       <tr>
           <td>PLP</td>
           <td><?php  echo $array_PLPx_total ?></td>
           <td><?php  echo $array_PLPx_total*1*0.35 ?></td>
           <td>0</td>
       </tr>
       <tr>
           <td>APPART</td>
           <td>
               <?php echo $array_APPARTx_total ?>
            </td>
           <td> <?php echo $array_APPARTx_total*1*0.7 ?></td>
           <td>0</td>
       </tr>
       <tr>
           <td>PVRHN</td>
           <td><?php echo $array_PVRHNx_total ?></td>
           <td><?php echo $array_PVRHNx_total*1*0.7 ?></td>
           <td>0</td>
       </tr>
       <tr>
           <td>HOML1</td>
           <td><?php echo $array_HOMLx_total ?></td>
           <td><?php echo $array_HOMLx_total*1*0.3 ?></td>
           <td>0</td>
       </tr>
   </tbody>
</table>