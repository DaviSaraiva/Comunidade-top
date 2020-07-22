<!DOCTYPE html>

<html>
    <head>
<?php session_start();?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/estilopublica.css" >
         
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

            <title>Post</title>
    
    </head>
    <body>
        
        <?php require_once 'Menu.php'; ?>
      <?php require_once 'whats.php'; ?>
        <div class="container-fluid">
            <div class="row" id="row">
                <div class="container-fluid" style="width:  100%; ">
                    <img src="img/topv.jpg"  width="100%">
                </div>
                
            </div>
            
        </div>
        
          <div class="container col-md-10 col-lg-8">
            <div class="row" style="margin-bottom:35px;">
  
                    
                <div class="col-lg-6 col-md-12" style="margin-top: 25px;">
                    <div style="margin:10px;">
                        <h2>Ative o modo criativo
                            <hr width = 61%   align = left noshade>
                        </h2>
                         
                        
                        <img src="img/val.jpg" width="90" height="80"  > <span style="margin-left:15px;">Por Valdisa Torres</span>
                       
                        <a href="https://www.instagram.com/valdisatorres/?hl=pt-br" target="_blank">
                            <div>
                                <img src="img/insta.png" width="20"  style="margin-bottom: 0px;margin-left: 110px;margin-top: -50px">
                            </div>
                            <div style="margin-bottom: 0px;margin-left: 135px;margin-top: -48px">
                                Conecte-se
                            </div>
                        </a>                        
                        
                    </div>
                    

                    <div>

                        <p align="justify" style="margin: 10px;">
                            Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. 
                            Lorem Ipsum é o texto fictício padrão do setor desde os anos 1500, quando uma impressora desconhecida pegou uma galera do tipo e a
                            mexeu para fazer um livro de amostras do tipo. Ele sobreviveu não apenas cinco séculos, mas também o salto para a composição eletrônica, 
                            permanecendo essencialmente inalterado. Foi popularizado na década de 1960 com o lançamento de folhas de Letraset contendo passagens de Lorem 
                            mais recentemente, com software de editoração eletrônica como o Aldus PageMaker, incluindo versões do Lorem Ipsum.            
                            Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. <br>
                            
                            Lorem Ipsum é o texto fictício padrão do setor desde os anos 1500, quando uma impressora desconhecida pegou uma galera do tipo e a
                            mexeu para fazer um livro de amostras do tipo. Ele sobreviveu não apenas cinco séculos, mas também o salto para a composição eletrônica, 
                            permanecendo essencialmente inalterado. Foi popularizado na década de 1960 com o lançamento de folhas de Letraset contendo passagens de Lorem 
                            mais recentemente, com software de editoração eletrônica como o Aldus PageMaker, incluindo versões do Lorem Ipsum.  <br>         
                    
                        </p>
                        
                        <form action='' id='baixar' method="post" name="baixar">
                            <input required="required" class="form-control" placeholder="seuemail@gmail.com" type="email"  name='email'/>
                           
                            <input hidden type="text" name="assunto" value="Quemsomos"/>
                        <div id='erro'></div>
                      
                             <button  type="button"  id='baixarconteudo' class=" btn btn-secondary btn-lg btn-block" style="background-color: black;margin-top: 30px; border-radius: 2rem;">
                                 
                            <span style="color:yellow;">Inscreva-se aqui</span>
                            </button>
                        </form>
                        
                        <div id='conteudo'></div>
                     
                    </div>
                   
                    <hr width = 100% align = right noshade>
                    
                    <p><center>#titulo materia</center></p>
                    
                    <hr width = 100% align = right noshade>
                    
                </div>
                
                    
                    <div class="col-lg-6 col-md-12">
                  
                        <div id='formvip'>
                        <a id='textolistavip'>UMA NOVA ERA NA <br>SUA COMUNICAÇÃO</a><br><br>
                    <a id='textolistavipinscreva'>Inscreva-se na nossa lista TOP <br>e receba conteudos exclusivos.</a>
                    <br>
                        <br>
                        
                        <form action='' id='emailvip' method="post" name="emailvip">
                            <input required="required" class="form-control" placeholder="seuemail@gmail.com"type="email"  name='email'/>
                            <small id="emailHelp" class="form-text text-muted">
                                <span id="text">Nunca vamos compartilhar seu email, com ninguém.</span>
                            </small>
                           
                        <div id='emailvipsaida'></div>
                       
                             <button  type="button" class=" btn btn-secondary btn-lg " id='listavip' >
                            Inscreva-se aqui
                            </button>
                        </form>
                        
                     
                    </div>
                            <img src="img/t.png"  width="80%" style="margin: 30px;">
                        </div>
                           <div>
                            <img src="img/t.png"  width="80%" style="margin: 30px;">
                        </div>
	</div>
                    
                </div>
        </div>
        
        <!--- fim da primeira parte da materia -->
          <div class="container col-md-10 col-lg-8">
            <div class="row" style="margin-bottom:35px;">
  
                    
                <div class="col-lg-6 col-md-12">
                    <div class="page-header">
                        <h2>Leia mais</h2>
                         <hr width = 50%   align = left noshade>
                    </div>
                    
                </div>
            </div>
          </div>
        
        
           <div class="container col-md-10 col-lg-8">
            <div class="row" style="margin-bottom:35px;">
                    
                    <div class="col-lg-8 col-md-12">
                        <div>
                            <img src="img/1.jpg" width="100%" style="margin: 15px;">
                        </div>
                    </div>
                 
             </div>
          </div>
        
         
        <div class="container col-md-10 col-lg-8">
            <div class="row" style="margin-bottom:35px;">
                    
                    <div class="col-lg-8 col-md-12">
                        <div>
                            <img src="img/1.jpg" width="100%" style="margin: 15px;">
                        </div>
                    </div>
                 
            </div>
           </div>
        
  
        

                
          
                        
        

        <?php require_once "footer.php" ?>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="js/baixar.js"></script>
                <script src="js/listavip.js"></script>
    </body>
</html>
