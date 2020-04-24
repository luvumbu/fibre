<div id="form" class="form_style1"></div>
<script src="src/app/all/function/bkz.js"></script>
<script>  
     function form_style(variable)
     {
        var ok = document.getElementById(variable);
        var taille_style1 = ok.childElementCount ;
        for(var i = 0 ; i<taille_style1-1 ; i++)
        {
            ok.children[i].setAttribute("onKeyUp","keytest(this)") ; 
        }
     }
     function keytest(_this) 
     {
        var test = document.getElementById(_this.id);
        /*
        */
        var div_parent = document.getElementById(test.parentNode.id);
        var taille_style1 = div_parent.childElementCount ;
        var status =0;
        for(var i = 0 ; i<taille_style1-1 ; i++)
        {           
            if(div_parent.children[i].value=="")
            {                
                status ++ ; 
            }
            else 
            {
               
                forms[i] = div_parent.children[i].value ;
            }
        }
        if(status==0)
        {              
            div_parent.children[taille_style1-1].className="opacity_on cursor-pointer";        
            div_parent.children[taille_style1-1].setAttribute("onclick","valeur()");         
        }
        else 
        {
            div_parent.children[taille_style1-1].className="opacity_off"; 
            div_parent.children[taille_style1-1].setAttribute("onclick","");
        }
     }
     function valeur() 
{ 
    const myObj = {         
        user_name:forms[0],
        user_password:forms[1],
        name_bdd:name_bdd,       
      };    
  
        console.log("click");
        $.post( "src/app/all/function/check.bdd.php", myObj )
          .done(function( data ) {
            console.log(data);
        });
}
     var forms = []; 
     input1 = new IdentificationHtml("input","input1",'form');     
     input2 = new IdentificationHtml("input","input2",'form'); 
     input3 = new IdentificationHtml("div","send",'form');       
     input1.set_attribute("placeholder","Nom de la base : ") ;
     input2.set_attribute("placeholder","Mot de passe : ") ;  
     input2.set_attribute("type","password") ; 
     input3.set_text("Envoyer") ; 
     input3.set_attribute("class","opacity_off") ; 
     form_style("form") ;     
</script>
<style>

</style>