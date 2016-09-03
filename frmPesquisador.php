
<?php require_once 'includes/registrar_pesquisador.php'; ?>
<form role="form" class="registration-form" id="pesquisadorForm" method="post">
                        			                                                                      
     <div class="form-group">
              <label class="sr-only">Pesquisador</label>        			                        	  
              <input type="text" name="lbm_pesqd_nome" placeholder="Nome do Pesquisador" class="form-control">                                                                                                                                                                                                                                                                                                                                                                                                                                               
     </div>                                                 
                                                                                                                                                         
     <div class="form-group">
              <label class="sr-only">CPF</label>                                                                <!-- pattern="^[0-9]{3}.[0-9]{3}.[0-9]{3}\-?[0-9]{2}$" -->
              <input type="text" name="lbm_pesqd_cpf" id="lbm_pesqd_cpf" placeholder="CPF" class="form-control" maxlength="14" onkeypress="formatarCpf('###.###.###-##', this);">                                                                                                                                       
     </div>                                                                                                   
                                                      
     <div class="form-group">
              <label class="sr-only">Telefone</label>                                             <!--onkeypress="mascaraFone(this) pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}"-->
              <input type="text" name="lbm_pesqd_fone" id="lbm_pesqd_fone" placeholder="Telefone" class="form-control" maxlength="15" onkeypress="mascaraFone(this)">                                                                                                                        
     </div>
                                                      
     <div class="form-group">
              <label class="sr-only" for="email">Email</label>
              <input type="text" name="lbm_pesqd_email" placeholder="Email" class="form-control" id="form-email">                                                                                                                         
     </div>
                                                      
     <div class="form-group">
              <label class="sr-only">Instituicao</label>
              <input type="text" name="lbm_pesqd_instituicao" placeholder="Institui&ccedil;&atilde;o" class="form-control">                                                                                                                         
      </div>
                                                      
      <hr>
      
      <div class="form-group">
              <label id="text">Tipo de Plano</label>
              <select class='form-control' name="lbm_pesqd_planos">
                <option>Selecione abaixo:</option>
                <option>Plano Simples - 15 Pesquisas</option>
                <option>Plano M&eacute;dio - 30 Pesquisas</option>
                <option>Plano Completo - 50 Pesquisas</option>
                <option>Plano Premium - 100 Pesquisas</option>
              </select>
      </div>
                                                      
      <div class="form-group">
              <label id="text">Per&iacute;odo da pesquisa</label>
              <select class='form-control' name="lbm_pesqd_periodo">
                 <option>Selecione abaixo:</option>                                   
                 <option>15 dias</option>          
                 <option>30 dias</option>
                 <option>60 dias</option>
                 <option>90 dias</option>                           
              </select>
      </div>
      
      <hr>
      
      <div class="form-group">
          <label id="text">Nome de Usu&aacute;rio</label>
          <input type="text" class="form-control" name="lbm_pesqd_usuario">                                                                                                                                      
      </div>
                                                      
      <div class="form-group">
          <label id="text">Senha de Acesso</label>
          <input type="password" class="form-control" name="lbm_pesqd_senha">                                                                                                                               
      </div>
                                                      
      <div class="container submit">
          <button type="submit" class="btn btn-link-2" id="btn-registro" name="btn-registro">                                                               
                  SALVAR INFORMA&Ccedil;&Otilde;ES
          </button>                                                                            
     </div>        			                                                                                                                                 
              
</form>                    		    