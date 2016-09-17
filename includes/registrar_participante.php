<?php
  
  include_once './conexao/conecta_db.php'; 
  
  function security_escape($data)
  {
        $con = mysqli_connect("localhost","Sph3yinks","lb#27^\Am0","quest_app_db");
                 
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        $data = mysqli_real_escape_string($con,$data);
        
        return $data;    
          
  }
    
  
  if ( !empty($_POST['btn-registro-participante']) ) { // isset($_POST['btn-registro-participante'])
    
        $nomeParticipante = security_escape($_POST['participanteNome']);
        $ocupacao         = security_escape($_POST['participanteOcupacao']);
        $idade            = security_escape($_POST['participanteIdade']);
        $cidade           = security_escape($_POST['participanteCidade']);
        $uf               = security_escape($_POST['participanteUF']);
        $endereco         = security_escape($_POST['participanteEndereco']);
        $estadoCivil      = security_escape($_POST['participanteEstadoCivil']);
        $sexo             = security_escape($_POST['participanteSexo']);
        $email            = security_escape($_POST['participanteEmail']);
        
        $perguntaSecreta     =  security_escape($_POST['participantePergSecreta']);
        $respostaSecreta     =  security_escape($_POST['participanteRespSecreta']);
        
        $usuarioParticipante =  security_escape($_POST['participanteUsuario']);
        $senhaAuxPartic      =  security_escape($_POST['participanteSenha']);
        
        $senhaParticipante   = md5($senhaAuxPartic);
        
        /****************************************************************************/                          
        $escolaridade = $_POST['escolaridade'];
        
        $i = 0;
        
        if ( !empty($_POST['superior']) ){
              $superior        =  $_POST['superior'];       
              $IESParticipante =  security_escape($_POST['partcIES']);
        } else {
                      
           $i++;          
           $superior = "0";           
           $IESParticipante = "Nenhuma - " . $i; 
        } 
        
        try {
        
            // Abre a conexão com o BD
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $stmt = $pdo->prepare("SELECT * FROM participantes WHERE email=:email");
            $stmt->execute(array(":email"=>$email));
            $count = $stmt->rowCount();
            
            if ( $count==0 ) {
            
                //$sql  =  "INSERT INTO participantes(nome, ocupacao, sexo, estado_civil, dt_cadastro, cidade, uf, email, endereco, idade, pergunta_secreta, resposta, participante_usuario, participante_senha, escolaridade, escolaridade_detalhes, escolaridade_instituicao) "; 
                //$sql .=  "VALUES(?, ?, ?, ?, NOW(), ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt  =  "INSERT INTO participantes(nome, ocupacao, sexo, estado_civil, dt_cadastro, cidade, uf, email, endereco, idade, pergunta_secreta, resposta, participante_usuario, participante_senha, escolaridade, escolaridade_detalhes, escolaridade_instituicao) "; 
                $stmt .=  "VALUES(?, ?, ?, ?, NOW(), ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"; 
                
                $q = $pdo->prepare($stmt);
                //$q->execute(array($nomeParticipante,$ocupacao,$sexo,$estadoCivil,$cidade,$uf,$email,$endereco,$idade,$perguntaSecreta,$respostaSecreta,$usuarioParticipante,$senhaParticipante,$escolaridade,$superior,$IESParticipante));           			                                                                                                                                                                                                                                                        			
                
                if ( $q->execute(array($nomeParticipante,$ocupacao,$sexo,$estadoCivil,$cidade,$uf,$email,$endereco,$idade,$perguntaSecreta,$respostaSecreta,$usuarioParticipante,$senhaParticipante,$escolaridade,$superior,$IESParticipante))  ){
                      header("Location: ./sucesso_participante.php");
                                                      
                      Database::disconnect();
                } else {
                      echo "\nPDOStatement::errorInfo():\n";
                      $arr = $stmt->errorInfo();
                      print_r($arr);
                      
                      Database::disconnect();
                } 
            
            } else{
          
                echo "<span>Email j&aacute; cadastrado</span>"; // user email not available
            }                                         
            
        
        } catch(PDOException $e){
            echo $e->getMessage();
        }     
      
            
    }
        
    
?>