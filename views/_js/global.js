Cadastro = {
    ValidarCamposObrigatorios: function() {

        var camposObrigatorios = $("[data-required]");

        var contemErro = false;
        $.each(camposObrigatorios, function(indice, campo) {

            campo = $(campo);

            var contemCampoNaoPreenchido = campo.val() === "";
            if (contemCampoNaoPreenchido) {
                contemErro = contemCampoNaoPreenchido;
                campo.closest(".form-group").addClass("has-error");

            }
        });

        if (contemErro)
            CadSystem.MostrarMensagemErro("Favor informar campos obrigatórios");

        return contemErro;
    },

    ValidarEmail: function() {

        if ($("input[type=email]").val() !== "") {


            var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            var emailValido = regex.test(email);

            if (!emailValido) {
                $("input[type=email]").closest(".form-group").addClass("has-error");
                CadSystem.MostrarMensagemErro("Email inválido");
            }

            return true;
        }

        return false;
    },


    LimparValidacao: function() {
        $("div").removeClass("has-error");
    }
}


CadSystem = {
    MostrarMensagemErro: function (mensagem) {
        $("#validacao").removeClass("oculto");
        $("#validacao div").append("<p>" + mensagem + "</p>");
    }
}