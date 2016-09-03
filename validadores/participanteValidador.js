// Validar campos do pesquisador com a biblioteca bootstrapValidator
$(document).ready(function() {
    $('#participanteForm').bootstrapValidator({
        message: 'This value is not valid',
//        live: 'disabled',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            participanteNome: {
                    message: 'O nome do participante n&atilde;o &eacute; v&acute;lido',
                    validators: {
                        notEmpty: {
                            message: 'O nome do participante &eacute; requerido e n&atilde;o pode estar vazio'
                        },
                        stringLength: {
                            min: 8,
                            max: 40,
                            message: 'O nome do participante deve conter de 8 at&eacute; 40 caracteres'
                        }
                    }
            },
            participanteOcupacao: {
                validators: {
                     notEmpty: {
                            message: 'A ocupa&ccedil;&atilde;o do participante &eacute; requerida e n&atilde;o pode estar vazia'
                     },
                     stringLength: {
                            min: 20,
                            max: 30,
                            message: 'A ocupa&ccedil;&atilde;o do participante deve conter  o min. de 20 e o max. de 40 caracteres'
                    }
                }
            },
            participanteEmail: {
                validators: {
                    notEmpty: {
                        message: 'O email &eacute; requerido e n&atilde;o pode estar vazio'
                    },
                    emailAddress: {
                        message: 'Voce informou um endere&ccedil;o de email n&atilde;o v&aacute;lido'
                    }
                }
            },
            participanteIdade: {
                validators: {                                                                                                   
                    digits: {
                        message: 'O campo idade somente pode conter valores num&eacute;ricos'
                    }
                }
            },
            participanteCidade: {
                validators: {
                     notEmpty: {
                            message: 'A cidade do participante &eacute; requerida e n&atilde;o pode estar vazia'
                     },
                     stringLength: {
                            min: 20,
                            max: 30,
                            message: 'A cidade do participante deve conter  o min. de 20 e o max. de 40 caracteres'
                    }
                }
            },
            participanteUF: {
                validators: {
                   notEmpty: {
                      message: 'A UF do participante &eacute; requerida e n&atilde;o pode estar vazia'
                   }
                }
            },
            participanteEndereco: {
                validators: {
                     notEmpty: {
                            message: 'O endere*ccedil;o do participante &eacute; requerida e n&atilde;o pode estar vazia'
                     },
                     stringLength: {
                            min: 20,
                            max: 40,
                            message: 'O endere*ccedil;o do participante deve conter  o min. de 20 e o max. de 40 caracteres'
                    }
                }
            },
            participanteEstadoCivil: {
               validators: {
                   notEmpty: {
                      message: 'O estado civil do participante &eacute; requerida e n&atilde;o pode estar vazia'
                   }
                }
            },
            participanteSexo: {
               validators: {
                   notEmpty: {
                      message: 'O sexo do participante &eacute; requerida e n&atilde;o pode estar vazia'
                   }
                }
            },
            participanteChk1Grau: {
               validators: {
                   notEmpty: {
                      message: 'O nivel de escolaridade do participante &eacute; requerida e n&atilde;o pode estar vazia'
                   }
                }
            },
            participanteChk2Grau: {
               validators: {
                   notEmpty: {
                      message: 'O nivel de escolaridade do participante &eacute; requerida e n&atilde;o pode estar vazia'
                   }
                }
            },
            participanteChk3Grau: {
               validators: {
                   notEmpty: {
                      message: 'O nivel de escolaridade do participante &eacute; requerida e n&atilde;o pode estar vazia'
                   }
                }
            },
            participanteChkCompl: {
                validators: {
                   notEmpty: {
                      message: 'O nivel de escolaridade (completo) do participante &eacute; requerida e n&atilde;o pode estar vazia'
                   }
                }
            },
            participanteChkImcompl: {
                validators: {
                   notEmpty: {
                      message: 'O nivel de escolaridade (incompleto) do participante &eacute; requerida e n&atilde;o pode estar vazia'
                   }
                }
            },
            participanteIES: {
                validators: {
                     notEmpty: {
                            message: 'A IES do participante &eacute; requerida e n&atilde;o pode estar vazia'
                     },
                     stringLength: {
                            min: 20,
                            max: 40,
                            message: 'A IES do participante deve conter  o min. de 20 e o max. de 40 caracteres'
                    }
                }
            },
            participantePergSecreta: {
                validators: {
                   notEmpty: {
                      message: 'A pergunta secreta do participante &eacute; requerida e n&atilde;o pode estar vazia'
                   }
                }
            },
            participanteRespSecreta: {
                validators: {
                   notEmpty: {
                      message: 'A resposta secreta do participante &eacute; requerida e n&atilde;o pode estar vazia'
                   }
                }
            },
            /*****************************************************************************************
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
            },***************************************************************************************/
                        
            participanteUsuario: {
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
                        field: 'participanteSenha',
                        message: 'O usuario e a senha n&atilde;o podem ser os mesmos'
                    }
                }
            },
            participanteSenha: {
                validators: {
                    notEmpty: {
                        message: 'A senha &eacute; requerida e n&atilde;o pode estar vazia'
                    },
                    different: {
                        field: 'participanteUsuario',
                        message: 'A senha n&atilde;o pode ser igual ao seu usuario'
                    }
                } // validators
            } // field password            
        } // fields
    });
    
    $('#participanteForm').bootstrapValidator('resetForm', true);
});
