$(function () {
    Cadastro["Cliente"] = {
        ValidarRegras: function () {
            Cadastro.LimparValidacao();
            var campoObrigatorioInvalido = Cadastro.ValidarCamposObrigatorios();

            var campoEmailInvalido = Cadastro.ValidarEmail();

            var contemErros = campoEmailInvalido || campoObrigatorioInvalido;
            return !contemErros;
        }
    }

    $("form").on("submit", Cadastro.Cliente.ValidarRegras);
});


