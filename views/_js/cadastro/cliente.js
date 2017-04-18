Cadastro = {

}

$(function () {
    Cadastro["Cliente"] = {
        ValidarRegras: function () {
            return false;
        }
    }

    $("form").on("submit", Cadastro.Cliente.ValidarRegras);
});


