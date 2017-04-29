$(function () {
    Cadastro["Cliente"] = {
        ValidarRegras: function () {
            Cadastro.LimparValidacao();
            var campoObrigatorioInvalido = Cadastro.ValidarCamposObrigatorios();

            var campoEmailInvalido = Cadastro.ValidarEmail();

            var campoCpfValido = Cadastro.ValidarCPF($("[name=cpf]").val());
            if (!campoCpfValido) {
                $("[name=cpf]").closest(".form-group").addClass("has-error");
            }
            var contemErros = campoEmailInvalido || campoObrigatorioInvalido || !campoCpfValido;
            return !contemErros;
        },

        LimparFormulario: function() {
            
        }
    }

    $("form").on("submit", Cadastro.Cliente.ValidarRegras);
    $("input[type=reset]").on("click", Cadastro.LimparValidacao);
});


