// Validar campos do pesquisador com a biblioteca bootstrapValidator
$(document).ready(function() {
    $('#frmParceiro').bootstrapValidator({
        message: 'This value is not valid',
//        live: 'disabled',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            empNome: {
                    message: 'O nome do parceiro n&atilde;o &eacute; v&acute;lido',
                    validators: {
                        notEmpty: {
                            message: 'O nome do parceiro &eacute; requerido e n&atilde;o pode estar vazio'
                        },
                        stringLength: {
                            min: 8,
                            max: 40,
                            message: 'O nome do parceiro deve conter de 8 at&eacute; 40 caracteres'
                        }
                    }
            },            
            empFone: {
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
            empEmail: {
                validators: {
                    notEmpty: {
                        message: 'O email &eacute; requerido e n&atilde;o pode estar vazio'
                    },
                    emailAddress: {
                        message: 'Voce informou um endere&ccedil;o de email n&atilde;o v&aacute;lido'
                    }
                }
            }           
        } // fields
    });
    
    $('#frmParceiro').bootstrapValidator('resetForm', true);
});