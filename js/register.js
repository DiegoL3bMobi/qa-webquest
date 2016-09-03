// JavaScript Validation For Registration Page

$(document).ready(function()
{    
   // name validation
   var nameregex = /^[a-zA-Z ]+$/;
   
   $.validator.addMethod("validname", function( value, element ) {
       return this.optional( element ) || nameregex.test( value );
   }); 
   
   // valid email pattern
   var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   
   $.validator.addMethod("validemail", function( value, element ) {
       return this.optional( element ) || eregex.test( value );
   });
   
   $("#pesquisadorform").validate({
     
    rules:
    {
      lbm-pesqd-nome: {
         required: true,
         validname: true,
         minlength: 4
      },
      lbm-pesqd-email: {
        required: true,
        validemail: true
      }
    },
    messages:
    {
      lbm-pesqd-nome: {
          required: "O campo nome do pesquisador não é válido",
          validname: "O nome deve conter letras e espaço",
          minlength: "O nome introduzido tem um minimo de tamanho aceitado"
       },
       lbm-pesqd-email: {
          required: "O campo do endereço de email não pode estar vazio",
          validemail: "Insira um endereço de email"
       }
    },
    errorPlacement : function(error, element) {
     $(element).closest('.form-group').find('.help-block').html(error.html());
    },
    highlight : function(element) {
     $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    unhighlight: function(element, errorClass, validClass) {
     $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
     $(element).closest('.form-group').find('.help-block').html('');
    },
    
    submitHandler: submitForm
     
    }); 
    
    function submitForm(){
			   
			   $.ajax({
				
				    type : 'POST',
					  async: false,
					  url  : '../includes/registrar_ajax.php',
					  data : $('#pesquisadorForm').serialize(),
					  dataType : 'json',
					 			  
					  success : function(data){
						  
						  
							  console.log(data);
							  
							  
							  $('button').html('<img src="../images/ajax-loader.gif" /> &nbsp; registrando...').attr('disabled', 'disabled');
							   
							   setTimeout(function(){
								   
								   if ( data.status==='success' ) {
									   
									   $('#errorDiv').slideDown(200, function(){
											$('#errorDiv').html('<div class="alert alert-info">'+data.message+'</div>');
											$('#errorDiv').delay(3000).slideUp(100);
											$("#pesquisadorForm")[0].reset();
											$('#btn-registro').html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; SALVAR INFORMA&Ccedil;&Otilde;ES');
											$('#btn-registro').removeAttr('disabled');
							   	  	   });
									   
								   } else {
									   
									    $('#errorDiv').slideDown(200, function(){
											 $('#errorDiv').html('<div class="alert alert-danger">'+data.message+'</div>');
											 $('#errorDiv').delay(3000).slideUp(100);
											 $('#btn-registro').html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; SALVAR INFORMA&Ccedil;&Otilde;ES');
											 $('#btn-registro').removeAttr('disabled');
										 });
								   }
								  
							   },3000);
							   
							   
					  },
					  error: function(){alert('Error!')}
				   
			   });
			   
			   return false;
		   }
});
