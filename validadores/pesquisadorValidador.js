// Validar campos do pesquisador com a biblioteca bootstrapValidator
$(document).ready(function() {
    $('#pesquisadorForm').bootstrapValidator({
        message: 'This value is not valid',
//        live: 'disabled',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            lbm_pesqd_nome: {
                    message: 'O nome do pesquisador n&atilde;o &eacute; v&acute;lido',
                    validators: {
                        notEmpty: {
                            message: 'O nome do pesquisador &eacute; requerido e n&atilde;o pode estar vazio'
                        },
                        stringLength: {
                            min: 8,
                            max: 40,
                            message: 'O nome do pesquisador deve conter de 8 at&eacute; 40 caracteres'
                        }
                    }
            },
            lbm_pesqd_cpf: {
                validators: {
                    callback: {
                        message: 'CPF Invalido',
                        callback: function(value) {
                                 //retira mascara e nao numeros       
                                 lbm_pesqd_cpf = value.replace(/[^\d]+/g,'');    
                                 if(lbm_pesqd_cpf == '') return false; 
                                    
                                 if (lbm_pesqd_cpf.length != 11) return false;
                                 
                                 // testa se os 11 digitos são iguais, que não pode.
                                 var valido = 0; 
                                 for (i=1; i < 11; i++){
                                  if (lbm_pesqd_cpf.charAt(0)!=lbm_pesqd_cpf.charAt(i)) valido =1;
                                 }
                                 if (valido==0) return false;
                                      
                                 //  calculo primeira parte  
                                 aux = 0;    
                                 for (i=0; i < 9; i ++)       
                                  aux += parseInt(lbm_pesqd_cpf.charAt(i)) * (10 - i);  
                                  check = 11 - (aux % 11);  
                                  if (check == 10 || check == 11)     
                                   check = 0;    
                                  if (check != parseInt(lbm_pesqd_cpf.charAt(9)))     
                                   return false;      
                           
                                 //calculo segunda parte  
                                 aux = 0;    
                                 for (i = 0; i < 10; i ++)        
                                  aux += parseInt(lbm_pesqd_cpf.charAt(i)) * (11 - i);  
                                 check = 11 - (aux % 11);  
                                 if (check == 10 || check == 11) 
                                  check = 0;    
                                 if (check != parseInt(lbm_pesqd_cpf.charAt(10)))
                                  return false;       
                                 return true;              
                        }
                    }, //callback
                    notEmpty: {
                        message: 'O CPF &eacute; requerido e n&atilde;o pode estar vazio'
                    }
                }                
            },
            lbm_pesqd_fone: {
                validators: {                                                           
                    notEmpty: {   
                        message: 'O telefone &eacute; requerido e n&atilde;o pode estar vazio'
                    },/*                    
                    digits: {
                        message: 'O telefone somente pode conter valores num&eacute;ricos'
                    }*/  
                    phone: {
                       country: 'BR',
                       message: 'O valor informado n&atilde;o &eacute; um n&uacute;mero de telefone v&aacute;lido'
                    } 
                }
            },
            lbm_pesqd_instituicao: {
                validators: {
                    notEmpty: {
                        message: 'O nome da institui&ccedil;&atilde;o &eacute; requerido e n&atilde;o pode estar vazio'
                    }
                }
            },
            lbm_pesqd_email: {
                validators: {
                    notEmpty: {
                        message: 'O email &eacute; requerido e n&atilde;o pode estar vazio'
                    },
                    emailAddress: {
                        message: 'Voce informou um endere&ccedil;o de email n&atilde;o v&aacute;lido'
                    }
                }
            },
            lbm_pesqd_planos: {
              validators: {
                 notEmpty: {
                        message: 'O tipo de plano  &eacute; requerido e n&atilde;o pode estar vazio'
                    }
              }
            },
            lbm_pesqd_periodo: {
              validators: {
                 notEmpty: {
                        message: 'O per&iacute;odo  &eacute; requerido e n&atilde;o pode estar vazio'
                    }
              }
            },
            lbm_pesqd_usuario: {
                message: 'O usuario n&atilde;o &eacute; v&acute;lido',
                validators: {
                    notEmpty: {
                        message: 'O usuario &eacute; requerido e n&atilde;o pode estar vazio'
                    },
                    stringLength: {
                            min: 6,
                            max: 20,
                            message: 'O nome de us&uacute;ario deve conter 6 e no m&aacute;x. 20 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'O nome de us&uacute;ario deve conter uma combina&ccedil;&atilde; de caracteres alfan&uacute;mericos, ponto e sublinhado'
                    },   
                    different: {
                        field: 'lbm_pesqd_senha',
                        message: 'O usuario e a senha n&atilde;o podem ser os mesmos'
                    }
                }
            },
            lbm_pesqd_senha: {
                validators: {
                    notEmpty: {
                        message: 'A senha &eacute; requerida e n&atilde;o pode estar vazia'
                    },
                    different: {
                        field: 'lbm_pesqd_usuario',
                        message: 'A senha n&atilde;o pode ser igual ao seu usuario'
                    }
                } // validators
            } // field password            
        } // fields
    });
    
    $('#pesquisadorForm').bootstrapValidator('resetForm', true);
});