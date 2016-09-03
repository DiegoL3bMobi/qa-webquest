<?php include_once 'header.html'; ?>

<!-- contact us -->
<section class="contactus">
    <div class="container">
			 <div class="row"> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
               <div>
                  <h2 id="title">Fale conosco</h2>
               </div>
               <form class="my-form" role="form" action="contato_info.php">
  						   <div class="form-group">
  							   <input type="text" class="form-control" id="name" placeholder="Nome">
  						   </div>
  						   <div class="form-group">
  							   <input type="email" class="form-control" id="email" placeholder="email@email.com">
  						   </div>
                 <div class="form-group">
  							   <input type="text" class="form-control" id="fone" placeholder="(XX) 9 dddd-dddd">
  						   </div>
  						   <div class="form-group">
  							    <textarea class="form-control" name="message" id="message" rows="7" cols="25" 
                       style="resize:none;" required="required" placeholder="Mensagem">
                    </textarea>
  						   </div>
  						  
  						   <button type="submit" class="btn btn-default btn-block">Enviar informa&ccedil;&otilde;es</button>
  						</form>
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                   <div id="contact-info">
                     <div class="physical-address">
    						        <h2 id="title"> Nosso contato </h2>
    				
            						<address>
            						    <strong>CaxisTek Inc - Desenvolvimento Mobile e Web</strong><br>
            						    Avenida Juscelino Kubitschek de Oliveira, n&#176; 1955<br>
                            Bairro: Monsenhor Mendes<br>
            						  <abbr title="Phone">OI: </abbr> (99) xxxx-xxxx<br>
            						  <abbr title="Phone">TIM: </abbr> (99) yyyy-yyyy
            						</address>
    
            						<address>
            						  <strong>Email</strong><br>
            						  <a href="_blank" id="email-contact">caxistek@contato.com.br</a>
            						</address>
                     </div>
                   </div>
            </div>                       
       </div>
       
    </div>
</section>

<?php include_once 'footer.html'; ?>