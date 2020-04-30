/*  𝕨𝕨𝕨.𝔹𝕠𝕜𝕠𝕟𝕫𝕚.𝕔𝕠𝕞  𝖞𝖉𝖊𝖓𝖌𝖆 𝕿𝖚𝖛𝖚𝖒𝖇𝖚   ★☆♨♫✈❤ 
    //  ★   =   début de l'information
    //  ☆   =   fin de l'information
    //  ♨   =   Code de l'information premier letre du fichier et dernier lettre du fichier suivi du numéro du commentaire.
    //  ♫   = connexion css all suivi du nom du fichier
    //  ☹☹ Double appel du fichier 
    //  ✈  = ★♨=ls0003☹☹♨=ap012  app.links et app.ph ★♨=ls0003☹☹  ♨=ap012
    //  ❥ = le fichier ne pas au même emplacement que l'appelant /!\
    𝕨𝕨𝕨.𝔹𝕠𝕜𝕠𝕟𝕫𝕚.𝕔𝕠𝕞  𝖞𝖉𝖊𝖓𝖌𝖆 𝕿𝖚𝖛𝖚𝖒𝖇𝖚   ★☆♨♫✈❤ */
    var hidden = "section_child_class5_hidden" ;
    var visible = "section_child_class5" ; 
    var envoyer_info = "" ;
    var send_wait =0 ; 
      function input_value()
    {
        var input1=    document.getElementById("section_child_id3").value ; 
        var input2=    document.getElementById("section_child_id4").value ;
      var valeursends = document.getElementById('section_child_id4').className ; 
       
      if(valeursends!="none_value")
      {
        if(input1=="" || input2=="")
            {
                        document.getElementById("section_child_id5").className=hidden ;
                        section_5_final.set_attribute("class",hidden) ;  
            }
            else 
            {
                document.getElementById("section_child_id5").className=visible ; 
                section_5_final.set_attribute("class",visible) ; 
            } 
      }
      else 
      {
        if(input1=="")
            {
            
                        document.getElementById("section_child_id5").className=hidden ;
                        section_5_final.set_attribute("class",hidden) ;  
            }
            else 
            {
                document.getElementById("section_child_id5").className=visible ; 
                section_5_final.set_attribute("class",visible) ; 
            } 
      }

    }
function envoyer(this_)
{
   
                if(this_.className==visible)
                {
                var input1 =  document.getElementById("section_child_id3").value  ; 
                var input2 =  document.getElementById("section_child_id4").value ;    
                var identite = new FormData();
                identite.append("mail", input1);
                identite.append("password",input2);
                        if(this_.className+envoyer_info!=this_.className+"connexion")
                        {
                            identite.append("infos","connexion");
                          
                            
                        }
                        else 
                        {
                            identite.append("infos","inscription");
                        }
if(send_wait==0)
{


                if(document.getElementById("section_child_id4").className=="none_value")
                {
                                        // Création et configuration d'une requête HTTP POST vers le fichier post_form.php
                // var req = new XMLHttpRequest();
                // req.open("POST", "src/app/all/function/app.cookie.php");
                // // Envoi de la requête en y incluant l'objet
                // req.send(identite);
                // console.log(req);
                

                identite.append("infos", "inscription");
                var req = new XMLHttpRequest();
                req.open("POST", "src/app/all/function/app.cookie.php");
                // Envoi de la requête en y incluant l'objet
                req.send(identite);
                console.log(req);
                send_wait = 1 ; 
              document.getElementById("loading").className="loading";
                section_5_final.set_attribute("class",hidden) ; 
                document.getElementById("section0").className="none";
                setTimeout(function(){ 
                    section_5_final.set_attribute("class",visible) ; 
                    send_wait = 0 ;
                    document.getElementById("loading").className="none";
                    document.getElementById("section0").className=""; 
                    document.location.reload(true);
                    
                }, 5000);
                // si action sut le boutton inscription !! 
                }
                else 
                {
                identite.append("infos", "connexion");
                identite.append("infos", "connexion");
                var req = new XMLHttpRequest();
                req.open("POST", "src/app/all/function/app.cookie.php");
                // Envoi de la requête en y incluant l'objet
                req.send(identite);
                console.log(req);

                send_wait = 1;
                section_5_final.set_attribute("class",hidden) ; 

                section_5_final.set_attribute("class",hidden) ; 
                document.getElementById("loading").className="loading";
                document.getElementById("section0").className="none";
                setTimeout(function(){ 
                    section_5_final.set_attribute("class",visible) ; 
                    document.getElementById("loading").className="none";
                    document.getElementById("section0").className=""; 
                    send_wait = 0 ; 
                    document.location.reload(true);
                }, 5000);
                // si action sut le boutton inscription !! 
                }
            }
                }
}
function div_connexion() 
    {      
        document.getElementById("section_child_id1").className="section_child_class1" ; 
        document.getElementById("section_child_id3").placeholder="Mail de connexion" ; // attention 
        document.getElementById("section_child_id4").placeholder="Confirmation d'adresse mail connexion" ;  
        section_4_final.set_attribute("class",section_child_class4) ;  
        envoyer_info  = "connexion" ;
    }
    function div_inscription() 
    {        
        document.getElementById("section_child_id3").placeholder="Mail d'Inscription" ; // attention 
        document.getElementById("section_child_id1").className="section_child_class1" ;
        section_4_final.set_attribute("class","none_value") ; 
           
    }

