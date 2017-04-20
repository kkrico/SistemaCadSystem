Cadastro = {

}

$(function () {
    Cadastro["Cliente"] = {
        ValidarRegras: function () {
            // TODO: Adicionar as regras para validar com javascript
        }
    }

    $("form").on("submit", Cadastro.Cliente.ValidarRegras);
});


