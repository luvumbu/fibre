/*  𝕨𝕨𝕨.𝔹𝕠𝕜𝕠𝕟𝕫𝕚.𝕔𝕠𝕞  𝖞𝖉𝖊𝖓𝖌𝖆 𝕿𝖚𝖛𝖚𝖒𝖇𝖚   ★☆♨♫✈❤  
    //  ★   =   début de l'information
    //  ☆   =   fin de l'information
    //  ♨   =   Code de l'information premier letre du fichier et dernier lettre du fichier suivi du numéro du commentaire.
    //  ♫   = connexion css all suivi du nom du fichier
    //  ☹☹ Double appel du fichier 
    //  ✈  = ♨=ls0001☹☹♨=ap012  app.links et app.ph ♨=ls0001☹☹  ♨=ap012
    //  ❥ = le fichier ne pas au même emplacement que l'appelant /!\
    𝕨𝕨𝕨.𝔹𝕠𝕜𝕠𝕟𝕫𝕚.𝕔𝕠𝕞  𝖞𝖉𝖊𝖓𝖌𝖆 𝕿𝖚𝖛𝖚𝖒𝖇𝖚   ★☆♨♫✈❤  */
    var  name_bdd =document.getElementById("name_bdd").className ;
    const form = { 
      user_name:"", 
      user_password:"",
      name_bdd:name_bdd,      
    };    
function formset() 
{
form.user_name=document.getElementById("user_name").value; 
form.user_password=document.getElementById("user_password").value; 
$.post( "src/app/all/function/check.bdd.php", form )
  .done(function( data ) {
    console.log(data);
});
  setTimeout(function(){      
    document.location.reload(true);      
       }, 700);
}

var validateur = 0;
function keyInfo(_this)
{
    var ok = document.getElementsByClassName(_this.className);  
    validateur = 0;
   for(var i = 0 ; i<ok.length;i++) 
   {
        if(ok[i].value=="")
        {
            validateur++; 
        } 
   }
   if(validateur==0) 
   {
    document.getElementById("set_form").className="set cursor-pointer" ; 
   
   }
   else 
   {
    document.getElementById("set_form").className="set_form set" ; 
   } 
}
function formset_form()
{
   var set_form= document.getElementById("set_form").className;   
    if(validateur==0 && set_form=="set cursor-pointer" )
    {
        formset() ;
    }
}