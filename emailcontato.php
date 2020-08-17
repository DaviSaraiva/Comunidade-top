<?php 

$Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT, FILE_APPEND);
header('Content-Type: application/json');

$nome =$_POST['nome'];
$email= $_POST['email'];
$mensagem =$_POST['mensagem'];
if(empty($nome) || empty($email)||empty($mensagem)){
    echo json_encode ($Dados['vazio']=true);
    exit;
}
else{
    $Dados['vazio']=false;

    $corpo = "Mensagem vinda do site Comunidade TOP" . "\r\n";
    $corpo .= "Nome: " .$nome. "\r\n";
    $corpo .= "Email: " .$email. "\r\n";
    $corpo .= "Mensagem" . $mensagem . "\r\n";
    
    $enviarEmail = "apenasteste777@hotmail.com";
    $destino = $enviarEmail;
    $assunto = " Contato pelo site Comunidade TOP";
    
    // É necessário indicar que o formato do e-mail é html
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From:'. $nome .'<'.$email.'>';
    
    $enviaremail = mail($destino, $assunto, $headers, $corpo);
    
    
      
          echo json_encode ($Dados);
          exit;
          }
        ?>

 