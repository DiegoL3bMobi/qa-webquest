<?php
    include_once './conexao/conecta_db.php';        
    
    function security_data($data)
    {
        $con = mysqli_connect("localhost","Sph3yinks","lb#27^\Am0","quest_app_db");
                 
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        $data = mysqli_real_escape_string($con,$data);
        return $data;    
          
    }
            
    if ( isset($_POST['btn-registro']) ) {  //!empty($_POST) 
    
        $nm_pesquisador = security_data($_POST['lbm_pesqd_nome']);
        $cpf = security_data($_POST['lbm_pesqd_cpf']);
        $telefone = security_data($_POST['lbm_pesqd_fone']);
        $email = security_data($_POST['lbm_pesqd_email']);
        $instituicao = security_data($_POST['lbm_pesqd_instituicao']);
        $planos = security_data($_POST['lbm_pesqd_planos']);
        $periodos = security_data($_POST['lbm_pesqd_periodo']);
        $usuario = security_data($_POST['lbm_pesqd_usuario']);
        $senhaAux = security_data($_POST['lbm_pesqd_senha']);
        
        $senha = md5($senhaAux);
        
        if (   ($nm_pesquisador != null) && ($cpf != null) && ($telefone != null) && ($email != null) 
               && ($instituicao != null) && ($planos != null) && ($periodos != null) && ($usuario != null) && ($senhaAux != null) )
        {
            $pdo = Database::connect();
                
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $verificaCPF = "SELECT COUNT(cpf) FROM professores WHERE cpf = '$cpf' LIMIT 1";
            
            if ( $verificaCPF > 0 )
            {
                echo "<span class='span-alert'>N&atilde;o &eacute; possivel cadastrar este Professor, devido a j&aacute; haver um CPF registrado.</span>"; 
            } else {
                $sql = "INSERT INTO professores(nome_comp, instituicao, telefone, email, cpf, tp_plano, data_entrada, periodo_pesq, psqd_usuario, psqd_senha) values(?, ?, ?, ?, ?, ?, NOW(), ?, ?, ?)";
                $q = $pdo->prepare($sql);
                $q->execute(array($nm_pesquisador,$instituicao,$telefone,$email,$cpf,$planos,$periodos,$usuario,$senha));          			
                                      
                header("Location: ./sucesso.php");
                                              
                Database::disconnect();
            }              
                    
        }
        
        
        
        /*                
        $nomeError = null;
        $cpfError = null;
        $foneError = null;
        $emailError = null;
        $instituicaoError = null;
        $usuarioError = null;
        $senhaError = null;
        
        
        // validação de entrada 
        /*
        $valida = true;
        if ( empty($nm_pesquisador) ) {
               $nomeError = '<span class="span-alert">Por favor, preencha o campo Nome do Pesquisador</span>';
               $valida = false;
        }
          
        if ( empty($cpf) ) {
               $cpfError = '<span class="span-alert">Por favor, preencha o campo CPF</span>';
               $valida = false;
        }
          
        if ( empty($telefone) ) {
               $foneError = '<span class="span-alert">Por favor, preencha o campo TELEFONE</span>';
               $valida = false;
        }
          
        if ( empty($email) ) {
               $emailError = '<span class="span-alert">Por favor, preencha o campo EMAIL</span>';
               $valida = false;
        } 
                    
        if ( empty($instituicao) ) {
               $instituicaoError = '<span class="span-alert">Por favor, preencha o campo INSTITUICAO</span>';
               $valida = false;
        }
          
        if ( empty($usuario) ) {
               $usuarioError = '<span class="span-alert">Por favor, preencha o campo USUARIO</span>';
               $valida = false;
        }
          
        if ( empty($senhaAux) ) {
               $senhaError = '<span class="span-alert">Por favor, preencha o campo SENHA</span>';
               $valida = false;
        } 
        
        // inserir dados na tabela
        if ( $valida ) {
                $pdo = Database::connect();
                
          			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          			$sql = "INSERT INTO professores(nome_comp, instituicao, telefone, email, cpf, tp_plano, data_entrada, periodo_pesq, psqd_usuario, psqd_senha) values(?, ?, ?, ?, ?, ?, NOW(), ?, ?, ?)";
          			$q = $pdo->prepare($sql);
          			$q->execute(array($nm_pesquisador,$instituicao,$telefone,$email,$cpf,$planos,$periodos,$usuario,$senha));          			
                              
                header("Location: ./sucesso.php");
                                      
                Database::disconnect();
        }
        else {
           echo "<span class='alert-danger'>Error 404 - Is not possible save in database</span>";
        }
        */
    } 
?>