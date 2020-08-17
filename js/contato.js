$(document).ready(function() {
    /// Quando usuário clicar em salvar será feito todos os passo abaixo
    $('#botaocontato').click(function() {

        var dados = $('#formulario_vc').serialize();



        $.ajax({
            method: "POST",
            url: "emailcontato.php",
            data: dados,
            dataType: 'json',

            success: function(data) {
                console.log(data)
                if (data['vazio'] == false) {
                    document.getElementById("emailsaida").innerHTML = "<br><a>Email enviado com Sucesso! </a><br>";
                } else {
                    document.getElementById("emailsaida").innerHTML = "<a > Preencha todos os campos acima! </a>";
                }



            },
            error: function(data) {
                console.log("Erro " + JSON.stringify(data));
                document.getElementById("emailsaida").innerHTML = "<a > Falha ao enviar! </a>";

            }

        });
    });
});