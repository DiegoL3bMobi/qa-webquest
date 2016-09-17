<?php

    include_once './conexao/conecta_db.php';        
    
    function security_data_sponsors($data)
    {
        $con = mysqli_connect("localhost","Sph3yinks","lb#27^\Am0","quest_app_db");
                 
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        $data = mysqli_real_escape_string($con,$data);
        return $data;    
          
    }
    
    if ( !empty($_POST) ) {
    
        $empresa = security_data_sponsors($_POST['empNome']);
        $fone    = security_data_sponsors($_POST['empFone']);
        $email   = security_data_sponsors($_POST['empEmail']);
        
        // Upload image de parceiro
        $file = rand(1000,100000)."-".$_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
        $folder="../images/parceiros/upload/";
        
        // make file name in lower case
        $new_file_name = strtolower($file);
        // make file name in lower case
         
        $final_file=str_replace(' ','-',$new_file_name);
 
        $pdo = Database::connect();                
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        if(move_uploaded_file($file_loc,$folder.$final_file))
        {
            $sql = "INSERT INTO parceiros(nm_empresa,email,telefone,logo) values(?, ?, ?, ?)";
            //$sql = "INSERT INTO parceiros(telefone,email,logo,nm_empresa) values(?, ?, ?, ?)";
        }
          
        $q = $pdo->prepare($sql);
        
        $q->execute(array($empresa,$email,$fone,$final_file));
        //$q->execute(array($fone,$email,$final_file,$empresa));
          
        Database::disconnect();
                             
    }
?>