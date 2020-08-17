 $(document).ready(function() {
        /// Quando usuário clicar em salvar será feito todos os passo abaixo
        $('#baixarconteudo').click(function() {
 
                   var dados = $('#baixar').serialize();
       


    $.ajax({
        method: "POST",
        url: "baixar.php",
        data: dados,
        dataType: 'json',

        success: function(data) {
           console.log(data)
            if(data['vazio']==false){
                var arquivo = data['arquivo'];
            document.getElementById("conteudo").innerHTML = "<a href='"+arquivo+"' download> Baixar Conteudo </a>";
            }
            else{
                 document.getElementById("erro").innerHTML ="<a>Preencha o campo de email para baixar seu ebook. </a>";
            }
            
              

        },
        error: function(data) {
            console.log("Erro " + JSON.stringify(data));

        }

    });
});
     });