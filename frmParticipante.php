
<?php require_once 'includes/registrar_participante.php'; ?>
<form method="post" class="registration-form" id="participanteForm" role="form" >
      <!-- Mensagem -->
      <div class="has-success">
           
      </div>
      
      <div class="form-group">			                    		  
        		<input type="text" name="participanteNome" placeholder="Nome completo" class="form-control">
      </div>                                                            
                                      
      <div class="form-group">			                        	
        		<input type="text" name="participanteOcupacao" placeholder="Ocupa&ccedil;&atilde;o" class="form-control">
      </div>      
      
      <div class="form-group">			                        	
        		<input type="text" name="participanteEmail" placeholder="Email" class="form-control">
      </div>
                                                                                                
      <div class="form-group">			                        	
        		<input type="text" name="participanteIdade" placeholder="Idade" class="form-control" maxlength="2">
      </div>                              
                                      
      <div class="form-group">			                        	
        		<input type="text" name="participanteCidade" placeholder="Cidade" class="form-control">
      </div>
                                      
      <div class="form-group">			                        	
        		<input type="text" name="participanteUF" placeholder="UF" class="form-control" maxlength="2">
      </div>
                                      
      <div class="form-group">			                        	
        		<input type="text" name="participanteEndereco" placeholder="Endere&ccedil;o completo" class="form-control">
      </div>
                                      
      <div class="form-group">
           <label id="text">Estado Civil</label>
           <select class="form-control" name="participanteEstadoCivil">
                <!--<option>Selecione abaixo :</option>-->
                <option>Solteiro (a)</option> 
                <option>Casado (a)</option>
                <option>Divorciado (a)</option>                                   
           </select>
      </div>
                                      
      <div class="form-group">
           <label id="text">Sexo</label>
           <select class="form-control" name="participanteSexo">
                   <!--<option>Selecione abaixo :</option>-->
                   <option>Masculino</option> 
                   <option>Feminino</option>                                   
           </select>
      </div>
                                      
      <hr>
                                      
      <div class="form-group">			                        	
        		<div class="panel panel-default">
                 <div class="panel-heading clearfix">
                       <i class="icon-calendar"></i>
                       <h3 class="panel-title">Escolaridade</h3>
                 </div>
                                            
                 <div class="panel-body">
                      <label class="checkbox-inline">                <!--participanteChk1Grau participanteChk2Grau participanteChk3Grau--->
                             <input id="lbm-chk-grau1" value="1 Grau" name="escolaridade[]" type="checkbox"> 1&#186; grau
                      </label>                                       <!-- ckGrau1 -->
                      <label class="checkbox-inline">
                             <input id="lbm-chk-grau2" value="2 Grau" name="escolaridade[]" type="checkbox"> 2&#186; grau
                      </label>
                      <label class="checkbox-inline">
                             <input id="lbm-chk-grau3" value="3 Grau" name="escolaridade[]" type="checkbox"> 3&#186; grau
                      </label>
                      <div class="form-checkbox-participante">
                           <label class="checkbox-inline">                   <!--participanteChkCompl participanteChkImcompl-->
                                  <input id="lbm-chk-compl" value="Completo" name="superior[]" type="checkbox"> Completo
                           </label>
                           <label class="checkbox-inline">
                                  <input id="lbm-chk-imcopl" value="Incompleto" name="superior[]" type="checkbox"> Incompleto
                           </label>
                           <br><br>
                           <input type="text" name="participanteIES" placeholder="Nome da Institui&ccedil;&atilde;o" class="form-control" id="form-ies">                                              
                      </div>
                 </div>
            </div>                                                                                                                                                                         
       </div>
                                     
       <hr>
                                        
       <div class="form-group">
            <label id="text">Pergunta Secreta</label>
            <select class='form-control' name="participantePergSecreta">
                   <option>Selecione abaixo :</option>
                   <option>Lugar onde morou at&eacute; os 10 anos de idade</option> 
                   <option>Primeiro animal de estima&ccedil;&atilde;o</option>
                   <option>Qual seu time de cora&ccedil;&atilde;o</option>
                   <option>Super-H&eacute;roi favorito</option>
                   <option>Disciplina favorita na escola</option>                                   
            </select>
       </div>
                                      
       <div class="form-group">
             <label id="text">Resposta</label>
             <input type="text" name="participanteRespSecreta" class="form-control" id="form-resposta"> 
       </div>
                                      
       <hr>
                                      
       <div class="form-group">
            <label id="text">Nome de Usuario</label>
            <input type="text" name="participanteUsuario" class="form-resposta form-control" id="form-resposta"> 
       </div>
                                      
       <div class="form-group">
            <label id="text">Senha de acesso</label>
            <input type="password" name="participanteSenha" class="form-resposta form-control" id="form-resposta"> 
       </div>
                                                                    
       <div class="container submit">
            <button type="submit" class="btn btn-link-2" name="btn-registro-participante" id="btn-registro-participante">Salvar Informa&ccedil;&otilde;es</button>                              
       </div>
       <!--
            <button type="submit" class="btn btn-register"> Salvar Informa&ccedil;&otilde;es </button>
            <input type="reset" class="btn btn-register" value="Limpar Campos" />
       -->                              
</form>