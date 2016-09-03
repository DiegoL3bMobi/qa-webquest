// JS button's clicks events
$(document).ready(function () {
    
    
    // On Click Btn-Reg1 It Will Hide Registration Form #2 and Display Form #1
    $("#btn-reg1").click(function() {
        //$("#form-reg2").fadeOut();
        //$("#form-reg3").fadeOut();
        $("#form-reg1").fadeIn();                  
                                 
        $("#btn-reg1").attr("disabled","disabled");
        $("#btn-reg2").attr("disabled","disabled");
        $("#btn-reg3").attr("disabled","disabled"); 
                
        $(".think").hide();
                                                                                                                                           
    });
             
    // On Click Btn-Reg2 It Will Hide Registration Form #1 and Display Form #2
    $("#btn-reg2").click(function() {
          //$("#form-reg1").fadeOut();
          //$("#form-reg3").fadeOut();
          $("#form-reg2").fadeIn();
                
          $("#btn-reg1").attr("disabled","disabled");
          $("#btn-reg2").attr("disabled","disabled");
          $("#btn-reg3").attr("disabled","disabled"); 
                
          $(".think").hide();
                                                                                                 
    });
            
    // On Click Btn-Reg3 It Will Hide Registration Form #1 and Display Form #3
    $("#btn-reg3").click(function() {
            //$("#form-reg1").fadeOut();
            //$("#form-reg2").fadeOut();
            $("#form-reg3").fadeIn();
                
            $("#btn-reg1").attr("disabled","disabled");
            $("#btn-reg2").attr("disabled","disabled");
            $("#btn-reg3").attr("disabled","disabled"); 
                
            $(".think").hide();
                                                                                  
    });
    
        
    $('input[type="checkbox"]').click(function(){
        
          if($(this).attr("value")=="3 Grau"){
               $(".form-checkbox-participante").toggle();
          }
        
    });
       
    $("#btn-voltar").click(function () {
        window.location.replace("./inicio.php"); //page will redirect to mod_registro.php
    });    
              
    // verifica quais checkbox foram checados e permitir apenas um de ser selecionado
    
});