<!DOCTYPE html>

<html>
    <head>
        <?php session_start();?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon"  href="img/LogoSITE.png">
        <link rel="stylesheet" href="css/estilopublica.css" >
        <link rel="stylesheet" href="css/estilo.css" >
        <link rel="stylesheet" href="css/estilocontato.css" >

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

            <title>Contato</title>
    
    </head>
     
   
    <body style="background-color: #F2F2F2;">
        
      <?php require_once 'menu3.php'; ?>
     <?php require_once 'whats.php';?>
<br>
<br>
<br>
<div class="container-fluid">
            <div class="row" id="row">
            <div class="col-sd-2 col-md-2"  ></div>
             <div class="col-sd-4 col-md-4 col-lg-4" style="text-align:center;" >
                    <p id="contatoinfo" >
                   

                    <img src="img/telefone.png" width="75" class="rounded" alt="Responsive image"><br> 
                    <div > <h6 style="font-weight: bold;">Ligue pra gente! </h6><br>
                       
                        <h6 id="contatoforma">(xx) xxxx-xxxx</h6><br>
                        </p>
                        <p id="contatoinfo">
                    <img src="img/email.png" width="75"  class="rounded" alt="Responsive image"><br> 
                    <div > <h6 style="font-weight: bold;">Entre em contato com a gente! </h6><br>
                        <h6 id="contatoforma">sejatopmidia.com.br</h6>
                    </div>
                    </p>

     </div>
                </div>
            <div class="col-sd-4 col-md-4 col-lg-4" >
                <div class="formulario" id="formulario" >
                    <form name="formulario_vc" id="formulario_vc" action="" method="POST"  >
                        <p class="nome">
                            <br> <label for="nome">Nome</label>
                            <input type="text" id="nomeid" class="form-control" required="required" name="nome" />
                        </p>
                        <p class="email">
                            <label for="email">Email</label>
                            <input type="email" id="emailid" class="form-control"  required="required"  placeholder="exemplo@exemplo.com"  name="email" />
                        </p>
                        <p class="mensagem">
                            <br> <label for="nome">Mensagem</label>
                            <input type="text" id="mensagemid" class="form-control" required="required" name="mensagem" />
                        </p>
<p id="botaop">
<button  type="button" class=" btn btn-secondary btn-lg " id='botaocontato' >
                                Enviar
                            </button>  
</p>
<p id="emailsaida">
                            
                        </p>

                    </form>
                </div>
</div>
<div class="col-sd-2 col-md-2"  ></div>


                </div>
            </div>
</div>
</div>

            <!-- formulario de email-->
            <div class="container">
            <div class="row" id="row">
            <div class="col-sd-4 col-md-4"  ></div>
            <div class="col-sd-4 col-md-4"  >
             
                <div class="col-sd-4 col-md-4"  ></div>
</div>
            </div>

        </div>

      <br>

                
                
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="js/contato.js"></script>
                
              
         
<?php require_once 'footer.php';?>   
    </body>
</html>