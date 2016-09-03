
<?php require_once 'includes/registrar_parceiro.php'; ?>
<form class="registration-form" id="frmParceiro" method="post" enctype="multipart/form-data">
      <div class="form-group">
      		<input type="text" name="empNome" placeholder="Nome da Empresa" class="form-control" id="form-company-name" maxlength="60">
      </div>
                                                                  
      <div class="form-group">
      		<input type="text" name="empFone" placeholder="Telefone" class="form-control" id="form-phone">
      </div>
                                    
      <div class="form-group">
      		<input type="text" name="empEmail" placeholder="Email" class="form-control" id="form-email">
      </div>                              
                                    
      <div class="form-group">
           <input type="file" name="empImgUpload" class="form-control" id="form-upload">
      </div>
                                    
      <div class="container submit">                              
           <button type="submit" class="btn btn-link-2" name="btn-reg-parceiro">Enviar Informa&ccedil;&otilde;es</button>                              
      </div>
      
      <!--
          <button type="submit" class="btn btn-register"> Salvar Informa&ccedil;&otilde;es </button>
          <input type="reset" class="btn btn-register" value="Limpar Campos" />
      -->         
                           
</form>