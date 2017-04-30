CadSystem = {
    MostrarMensagemErro: function (mensagem) {
        $("#validacao").removeClass("oculto");
        $("#validacao div").append("<p>" + mensagem + "</p>");
    }
}

Cadastro = {
    ValidarCamposObrigatorios: function () {

        var camposObrigatorios = $("[required]:not(input[type=radio])");
        var camposRadioObrigatorios = $("input[type=radio][required]");

        var contemRadioPreenchido = camposRadioObrigatorios.toArray().some(function(campo) {
            return $(campo).is(":checked");
        });
        var contemAlgumCampoObrigatorioNaoPreenchido = camposObrigatorios.toArray().some(function(campo) {
            return $(campo).val() === "";
        });

        if (!contemRadioPreenchido) {
            camposRadioObrigatorios.closest(".form-group").addClass("has-error");
        }

        $.each(camposObrigatorios, function (indice, campo) {

            campo = $(campo);
            var naoPreenchido = campo.val() === "";
            if (naoPreenchido) {
                campo.closest(".form-group").addClass("has-error");
            }
        });


        var resultadoInValido = contemAlgumCampoObrigatorioNaoPreenchido || !contemRadioPreenchido;
        if (resultadoInValido)
            CadSystem.MostrarMensagemErro("Favor informar campos obrigatórios");

        return !resultadoInValido; // Deve retornar true SE for válido
    },


    ValidarCPF: function (cpf) {
        var numeros, digitos, soma, i, resultado, digitos_iguais;


        String.prototype.replaceAll = function (search, replacement) {
            var target = this;
            return target.split(search).join(replacement);
        };


        cpf = cpf.replaceAll(",", "").replaceAll(".", "").replaceAll("-", "");
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

            return emailValido;
        }

        return true;
    },


    LimparValidacao: function () {
        $("div").removeClass("has-error");
        var divComMensagemValidacao = $("#validacao div");
        divComMensagemValidacao.empty();

        if (divComMensagemValidacao.children("p").length === 0) divComMensagemValidacao.parent("div").addClass("oculto");
    }
}


