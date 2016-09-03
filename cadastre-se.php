<?php
   // start output buffering
   ob_start();
   
   // Initialize session
   session_start();
?>


<?php include_once 'header.html'; ?>

<!-- Top content -->
<div class="top-content">
    
    <!-- bootstrap validator CSS -->     
    <link rel="stylesheet" href="css/bootstrapValidator.css"/>
                          	
    <div class="inner-bg">
          <div class="container">
                    <div class="row">                                                
                        
                        <div class="col-sm-7 text">
                            <h1><strong>Registros</strong> Multiplos</h1>
                            <div class="description">
                            	<p>
	                            	 Escolha uma das op&ccedil;&otilde;es abaixo, que melhor atenda seu tipo de usuario
                            	</p>
                            </div>
                            <div class="top-big-link">                            	                                  
                                <a class="btn btn-link-1" id="btn-reg1">Pesquisador</a> 
                                <a class="btn btn-link-1" id="btn-reg2">Participante</a>
                                <a class="btn btn-link-1" id="btn-reg3">Torne-se um parceiro</a>                                                            
                            </div>                                                        
                         </div>
                        
                         <div class="col-sm-5 form-box">
                          	 <div class="think"><img src="images/think_woman.jpg"></div>
                      
                             <div id="form-reg1"> 
                             
                                <div class="form-top">
                                      <div class="form-top-left">
                                              			<h3>Registro de Pesquisador</h3>
                                                  	<p>Preencha com aten&ccedil;&atilde;o os campos importantes</p>
                                      </div>
                                      <div class="form-top-right">
                                           <i class="fa fa-pencil"></i>
                                      </div>
                                      <div class="form-top-divider"></div>
                                 </div>
                                                
                                <div class="form-bottom">
                                     <?php include_once 'frmPesquisador.php';?>  
                        		    </div><!--\\COL-5 Form-Bottom #1 -->
            
                             
                             </div><!--\\COL-5 Form-Reg #1 --> 
                          
                             <div id="form-reg2">
                                 <div class="form-top">
                                		<div class="form-top-left">
                                			<h3>Registro de Participante</h3>
                                    		<p>Preencha com aten&ccedil;&atilde;o os campos importantes</p>
                                		</div>
                                		<div class="form-top-right">
                                			<i class="fa fa-pencil"></i>
                                		</div>
                                		<div class="form-top-divider"></div>
                                  </div>
                                  
                                <div class="form-bottom">
        			                       <?php include_once 'frmParticipante.php';?> 
        		                    </div><!--\\COL-5 Form-Bottom #2 -->
                            </div><!--\\COL-5 Form-Reg #2 -->
                        
                            <div id="form-reg3">
                                 <div class="form-top">
                                		<div class="form-top-left">
                                			<h3>Registro de An&uacute;ncio</h3>
                                    		<p>Preencha com aten&ccedil;&atilde;o os campos importantes</p>
                                		</div>
                                		<div class="form-top-right">
                                			<i class="fa fa-pencil"></i>
                                		</div>
                                		<div class="form-top-divider"></div>
                                  </div>
                          
                              <div class="form-bottom">
      			                       <?php include_once 'frmParceiro.php';?>
      		                    </div><!--\\COL-5 Form-Bottom #3 -->
                            </div><!--\\COL-5 Form-Reg #3 -->
                          
                         </div><!--\\COL-5 Form-Box -->
                        
                    </div><!--\\Row -->
          </div><!--\\Container -->
    </div>
     
</div>

<!-- footer -->
<footer id="footer">
		<div class="container">                                
    			<div class="row">    			
            <div class="col-sm-6 col-md-6 col-lg-6">					
    					<p>Copyright &copy; 2016. CaxisTek Inc - Desenvolvimento Mobile e Web. Todos os direitos reservados</p>          
    				</div>             
    			</div>			   
    </div>
</footer>
<!-- /.footer -->
  
    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>          	
    
    <script src="js/events.buttons.clicks.js"></script>     
     
    <!--script src="js/jquery.validate.min.js"></script> 
    <script src="js/register.js"></script-->
       
    <script src="js/bootstrapValidator.js"></script> 
    
    <script src="validadores/pesquisadorValidador.js"></script>
    <script src="validadores/participanteValidador.js"></script>
    <script src="validadores/parceiroValidador.js"></script> 
    
    <script src="js/jquery.maskedinput.js"></script>    
    
    <!--script src="js/jquery.mask.min.js"/></script-->
    
    <!-- MaskInputs Initialize -->
    <script type="text/javascript">
          $(function() {
              $.mask.definitions['~'] = "[+-]"; 
                       
              $("#43lbm_pesqd_fone").mask("(99) 9-9999-9999");                                 
              $("#naousado-lbm_pesqd_cpf").mask("999.999.999-99");        
              /*
              $("input").blur(function() {
                  $("#info").html("Valor sem máscara: " + $(this).mask());
              }).dblclick(function() {
                  $(this).unmask();
              }); */
              
              /*
              $('#lbm_pesqd_fone').focusout(function(){
            		var phone, element;
            		element = $(this);
            		element.unmask();
            		phone = element.val().replace(/\D/g, '');
            		if(phone.length > 10) {
            			element.mask("(99) 9999-999?9"); //element.mask("(99) 99999-999?9");
            		} else {
            			element.mask("(99) 9999-9999?9"); 
            		}
            	}).trigger('focusout'); */
          }); 
        
          /**
           *  máscara de cep, rg, cpf etc.: eg: 
           *  OnKeyPress="formatar('#####-###', this)" 
           *  OnKeyPress="formatar('##/##/####', this)"
          **/
          function formatarCpf(mascara, documento){
               var i = documento.value.length;
               var saida = mascara.substring(0,1);
               var texto = mascara.substring(i)
              
               if (texto.substring(0,1) != saida){
                documento.value += texto.substring(0,1);
               }  
          }
          
          function mascaraFone(telefone){ 
             if(telefone.value.length == 0)
               telefone.value = '(' + telefone.value; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
             if(telefone.value.length == 3)
                telefone.value = telefone.value + ') '; //quando o campo já tiver 3 caracteres (um parênteses e 2 números) o script irá inserir mais um parênteses, fechando assim o código de área.                        
                
             if(telefone.value.length == 10)
                telefone.value = telefone.value + '-'; //quando o campo já tiver 8 caracteres, o script irá inserir um tracinho, para melhor visualização do telefone.
            
          } 
          
          function checkPhone() {
              var phone = document.forms["lbmRegPesqd"]["lbm_pesqd_fone"].value;   //getElementById("lbm_pesqd_fone").value;
              var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
              
              if(phone.value.match(phoneNum)) {
                    return true;
              }
              else {
                    document.getElementById("lbm_pesqd_fone").className = document.getElementById("lbm_pesqd_fone").className + " error";
                    return false;
              }
          }                            
    </script>

       
      
  </body>
</html>