$(document).ready(function() {
    /// Quando usuário clicar em salvar será feito todos os passo abaixo
    $('#listavip').click(function() {

        var dados = $('#emailvip').serialize();



        $.ajax({
            method: "POST",
            url: "listavip.php",
            data: dados,
            dataType: 'json',

            success: function(data) {
                console.log(data)
                if (data['vazio'] == false) {
                    var arquivo = data['arquivo'];
                    document.getElementById("emailvipsaida").innerHTML = "<br><a>Email Cadastrado com Sucesso! </a><br>";
                } else {
                    document.getElementById("emailvipsaida").innerHTML = "<a > Preencha o campo acima! </a>";
                }



            },
            error: function(data) {
                console.log("Erro " + JSON.stringify(data));

            }

        });
    });
});