CadSystem = {
    MostrarMensagemErro: function (mensagem) {
        $("#validacao").removeClass("oculto");
        $("#validacao div").append("<p>" + mensagem + "</p>");
    }
}

Cadastro = {
    ValidarCamposObrigatorios: function () {

        var camposObrigatorios = $("[data-required]");

        var contemErro = false;
        $.each(camposObrigatorios, function (indice, campo) {

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


    ValidarCPF: function (cpf) {
        var numeros, digitos, soma, i, resultado, digitos_iguais;
        digitos_iguais = 1;
        if (cpf.length < 11) {
            CadSystem.MostrarMensagemErro("CPF Inválido");
            return false;
        }
        for (i = 0; i < cpf.length - 1; i++)
            if (cpf.charAt(i) != cpf.charAt(i + 1)) {
                digitos_iguais = 0;
                break;
            }
        if (!digitos_iguais) {
            numeros = cpf.substring(0, 9);
            digitos = cpf.substring(9);
            soma = 0;
            for (i = 10; i > 1; i--)
                soma += numeros.charAt(10 - i) * i;
            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
            if (resultado != digitos.charAt(0)) {
                CadSystem.MostrarMensagemErro("CPF Inválido");
                return false;
            }
            numeros = cpf.substring(0, 10);
            soma = 0;
            for (i = 11; i > 1; i--)
                soma += numeros.charAt(11 - i) * i;
            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
            if (resultado != digitos.charAt(1)) {
                CadSystem.MostrarMensagemErro("CPF Inválido");
                return false;
            }
            return true;
        } else {
            CadSystem.MostrarMensagemErro("CPF Inválido");
            return false;
        }
    },

    ValidarEmail: function () {

        if ($("input[type=email]").val() !== "") {


            var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            var emailValido = regex.test($("input[type=email]").val());

            if (!emailValido) {
                $("input[type=email]").closest(".form-group").addClass("has-error");
                CadSystem.MostrarMensagemErro("Email inválido");
            }

            return true;
        }

        return false;
    },


    LimparValidacao: function () {
        debugger;
        $("div").removeClass("has-error");
        var divComMensagemValidacao = $("#validacao div");
        divComMensagemValidacao.empty();

        if (divComMensagemValidacao.children("p").length === 0) divComMensagemValidacao.parent("div").addClass("oculto");
    }
}


