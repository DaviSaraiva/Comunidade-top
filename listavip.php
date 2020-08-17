<?php 

$Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT, FILE_APPEND);
header('Content-Type: application/json');

include('conexao.php');
date_default_timezone_set("Brazil/East");
//Horário do Brasil - São Paulo
$dataatual =date('Y-m-d H:i');

$email= $_POST['email'];

if(empty($email)){
    echo json_encode ($Dados['vazio']=true);
    exit;
}
else{
$sql = "INSERT INTO listavip (email,data) VALUES ( '$email','$dataatual' )"; 
$stmt = $PDO->prepare( $sql );
        $result = $stmt->execute();
      
        if ( ! $result )
        {
          var_dump($result);
            

         echo "Deu erro";

        }
        
        else{
            $Dados['vazio']=false;
      
          echo json_encode ($Dados);
          exit;
          }
}
        ?>

 