<?php
    include_once './conexao/conecta_db.php';        
    
    function security_data_2($data)
    {
        $con = mysqli_connect("localhost","Sph3yinks","lb#27^\Am0","quest_app_db");
                 
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        $data = mysqli_real_escape_string($con,$data);
        return $data;    
          
    }
    
    
    if ( isset($_POST['btn-registro-participante']) ) {
    
        $nomeParticipante = security_data_2($_POST['participanteNome']);
        $ocupacao         = security_data_2($_POST['participanteOcupacao']);
        $idade            = security_data_2($_POST['participanteIdade']);
        $cidade           = security_data_2($_POST['participanteCidade']);
        $uf               = security_data_2($_POST['participanteUF']);
        $endereco         = security_data_2($_POST['participanteEndereco']);
        $estadoCivil      = security_data_2($_POST['participanteEstadoCivil']);
        $sexo             = security_data_2($_POST['participanteSexo']);
        $email            = security_data_2($_POST['participanteEmail']);
        
        $perguntaSecreta     =  security_data_2($_POST['participantePergSecreta']);
        $respostaSecreta     =  security_data_2($_POST['participanteRespSecreta']);
        
        $usuarioParticipante =  security_data_2($_POST['participanteUsuario']);
        $senhaAuxPartic      =  security_data_2($_POST['participanteSenha']);
        
        $senhaParticipante   = md5($senhaAuxPartic);
        
        // Checkbox's para grau de escolaridade        
        //$chk1grau = $_POST['participanteChk1Grau'];
        //$chk2grau = $_POST['participanteChk2Grau'];
        //$chk3grau = $_POST['participanteChk3Grau'];
        
        // verifica se clicou no checkbox 
        /*     
        if ( isset($chk1grau) )
        {
             $chkParticipanteGrau = $chk1grau; 
        } else if ( isset($chk2grau) ) {
             $chkParticipanteGrau = $chk2grau;
        } else if ( isset($chk3grau)  ) {
             $chkParticipanteGrau = $chk3grau; 
             
             if ( isset($_POST['participanteChkCompl']) )
             {
                $chkParticipanteEnsinoSuperior = $_POST['participanteChkCompl'];
                $IESParticipante               = security_data_2($_POST['participanteIES']);
             } else if( isset($_POST['participanteChkImcompl']) ) {
                 $chkParticipanteEnsinoSuperior = $_POST['participanteChkImcompl'];
                 $IESParticipante               = security_data_2($_POST['participanteIES']);
             }             
        } */
        
        
        //$chkAuxEscol = $_POST['escolaridade']; 
        //$chkSupAux   = $_POST['superior'];
         
        /*
        $seleccion =  is_array($_POST['seleccion'])
                      ? implode(', ', $_POST['seleccion'])
                      : $_POST['seleccion'];
        */   
                           
        $chkAuxEscol =  is_array($_POST['escolaridade'])
                      ? implode(', ', $_POST['escolaridade'])
                      : $_POST['escolaridade'];
                      
        $chkSupAux =  is_array($_POST['superior'])
                      ? implode(', ', $_POST['superior'])
                      : $_POST['superior']; 
                    
        //$chkAuxEscol =  implode(', ', $_POST['escolaridade']);
        //$chkSupAux   =  implode(', ', $_POST['superior']); 
                                  
        /****************************************** 
        $field ="";
        $values ="";
        foreach($chk as $item)
        {
           $field .= $item.",";
           $values .= "'1'";
        } 
        *******************************************/
        
        /*
        $NivelEscolaridade = array();
        $vecEscolaridade['escolaridade'] = "";
        
        if(count($_POST['escolaridade']) > 0) {
            foreach($_POST['Regio'] as $key=>$value)
                $NivelEscolaridade[] = $value;
        }

        $vecEscolaridade['escolaridade'] = implode(',', $NivelEscolaridade);
        */
        
        /*********************************************
        $chkGrau1 = $_POST['ckGrau1'];
        $chkGrau2 = $_POST['ckGrau2'];
        $chkGrau3 = $_POST['ckGrau3'];
        
        if ( $chkGrau1 === 'on' )
             $chkEscolaridade = $chkGrau1;
        else if ( $chkGrau2 === 'on' )
             $chkEscolaridade = $chkGrau2;
        else if ( $chkGrau3 === 'on' ) 
        {
              $chkEscolaridade = $chkGrau3;
              if ( isset($chkSupAux) )  //!empty($chkSupAux)
              {                                    
                  $chkSuperior = $chkSupAux;
                  $IESParticipante = security_data_2($_POST['participanteIES']); 
              }
        } 
        *************************************/
             
        /************************************************************                     
        if ( isset($chkAuxEscol) AND $chkAuxEscol == 1 ) 
               $chkEscolaridade = "1º Grau";
        else if ( isset($chkAuxEscol) AND $chkAuxEscol == 2 )
                  $chkEscolaridade = "2º Grau";
        else if ( isset($chkAuxEscol) AND $chkAuxEscol == 3 ) {
        
             $chkEscolaridade = "3º Grau";
             if ( isset($chkSupAux) )  //!empty($chkSupAux)
             {
                  $chkSuperior = $chkSupAux;
                  $IESParticipante = security_data_2($_POST['participanteIES']);
             } 
        }            
        ****************************************************************/
                     
        if ( isset($chkAuxEscol) ) { // AND is_array($chkAuxEscol)
                            
              $chkEscolaridade = $chkAuxEscol;
              
                             
              if ( isset($chkSupAux) )  //!empty($chkSupAux)
              {                                    
                  $chkSuperior = $chkSupAux;
                  $IESParticipante = security_data_2($_POST['participanteIES']); 
              }
        }        
             
                
        if (    ($nomeParticipante != null) && ($ocupacao != null) && ($idade != null) 
             && ($cidade != null) && ($uf != null) && ($endereco != null)
             && ($estadoCivil != null) && ($sexo != null) && ($email != null)
             && ($perguntaSecreta != null) && ($respostaSecreta != null)
             && ($usuarioParticipante != null) && ($senhaAuxPartic != null)              
                         
           )
        {                         
                  
            // Abre a conexão com o BD
            $pdo = Database::connect();
                    
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // foreach to get values checkbox
            foreach($chkEscolaridade as $vlEscolaridade) {
               $sql  =  "INSERT INTO participantes(nome, ocupacao, sexo, estado_civil, dt_cadastro, cidade, uf, email, endereco, idade, pergunta_secreta, resposta, participante_usuario, participante_senha, escolaridade, escolaridade_detalhes, escolaridade_instituicao) "; 
               $sql .=  "VALUES(?, ?, ?, ?, NOW(), ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"; 
               $q = $pdo->prepare($sql);
               $q->execute(array($nomeParticipante,$ocupacao,$sexo,$estadoCivil,$cidade,$uf,$email,$endereco,$idade,$perguntaSecreta,$respostaSecreta,$usuarioParticipante,$senhaParticipante,$vlEscolaridade,$chkSuperior,$IESParticipante));           			                          
            }
                                                                                                                                                                                           
            //$sql  =  "INSERT INTO participantes(nome, ocupacao, sexo, estado_civil, dt_cadastro, cidade, uf, email, endereco, idade, pergunta_secreta, resposta, participante_usuario, participante_senha, escolaridade, escolaridade_detalhes, escolaridade_instituicao) "; 
            //$sql .=  "VALUES(?, ?, ?, ?, NOW(), ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"; 
                 
            //$q = $pdo->prepare($sql);
            //$q->execute(array($nomeParticipante,$ocupacao,$sexo,$estadoCivil,$cidade,$uf,$email,$endereco,$idade,$perguntaSecreta,$respostaSecreta,$usuarioParticipante,$senhaParticipante,$chkEscolaridade,$chkSuperior,$IESParticipante));           			
                                          
            header("Location: ./inicio.php");
            
            $sucesso  =  "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert'>&times;</a>";
            $sucesso .=  "<strong>Participante cadastrado com sucesso.</strong></div>";            
                                                  
            Database::disconnect();
        }
       
             
    }
?>