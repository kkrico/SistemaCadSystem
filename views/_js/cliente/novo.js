

$(function () {
    Cadastro["Cliente"] = {
        ValidarRegras: function () {
            Cadastro.ValidarCamposObrigatorios();
        }
    }

    $("form").on("submit", Cadastro.Cliente.ValidarRegras);
});


