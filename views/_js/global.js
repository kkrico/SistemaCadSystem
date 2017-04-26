Cadastro = {

    ValidarCamposObrigatorios: function() {
        

        if ($("input[required]").val() === "") {
            $("input[required").closest(".form-group").addClass("form-error");
        }
    }
}