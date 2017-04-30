<?php if ( ! defined('ABSPATH')) exit; ?>

<div class="page-header">
    <h1>Cadastro de Cliente</h1>
</div>


<?php
echo $modelo->form_msg;

?>

<div id="validacao" class="oculto">
    <div class="alert alert-danger" role="alert">

    </div>
</div>
<div id="formulario">
    <form name="formControl" id="cliente" action="" method="POST" novalidate>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Nome:</label>
                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" required/ />
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Sobrenome:</label>
                    <input type="text" id="sobrenome" name="sobrenome" class="form-control" placeholder="Sobrenome" required/ />
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">CPF:</label>
                    <input type="text" id="cpf" name="cpf" class="form-control" placeholder="CPF" required data-mask="000.000.000-00" />
                </div>
            </div>

            <div class="col-md-3">
                <label>RG:</label>
                <input type="text" id="rg" name="rg" class="form-control" placeholder="RG" data-mask="0.000.000">
            </div>
        </div>

        <br />
        <div class="row">

            <div class="col-md-2">
                <div class="form-group">
                    <label class="control-label">Data de Nascimento:</label>
                    <input type="text" id="datanascimento" name="datanascimento" class="form-control" data-provide="datepicker" data-mask="00/00/0000" />
                </div>
            </div>

            <div class="col-md-1">
                <label>Sexo:</label>
                <br />

                <?php $modelo->radioButtonPara(Sexo::getConstants(), "sexo"); ?>

            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">E-mail:</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" />
                </div>
            </div>

            <div class='col-md-5'>
                <label>Endereço:</label>
                <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço" />
            </div>
        </div>

        <br />
        <div class="row">
            <div class='col-md-3'>
                <label>Bairro:</label>
                <input type="text" id="bairro" name="bairro" class="form-control" placeholder="Bairro" />
            </div>

            <div class='col-md-2'>
                <label>Cidade:</label>
                <input type="text" id="cidade" name="cidade" class="form-control" placeholder="Cidade" />
            </div>

            <div class='col-md-1'>
                <div class="form-group">
                    <label class="control-label">UF:</label>
                    <?php $modelo->dropDownPara(UF::getConstants(), "UF", "uf") ?>
                </div>
            </div>

            <div class='col-md-4'>
                <div class="form-group">
                    <label class="control-label">Ponto de Referência:</label>
                    <input type="text" id="ptreferencia" name="ptreferencia" class="form-control" placeholder="Ponto de Referência" />
                </div>
            </div>

            <div class='col-md-2'>
                <div class="form-group">
                    <label class="control-label">CEP:</label>
                    <input type="text" id="cep" name="cep" class="form-control" placeholder="CEP" data-mask="00000-000" />
                </div>
            </div>
        </div>

        <br />
        <div class="row">
            <div class='col-md-2'>
                <div class="form-group">
                    <label class="control-label">Tipo de Telefone:</label>
                    <?php $modelo->dropDownPara(TipoTelefone::getConstants(), "Selecione...", "TipoTelefone1") ?>
                </div>
            </div>

            <div class='col-md-1'>
                <div class="form-group">
                    <label class="control-label">DDD:</label>
                    <input type="text" id="dddtelefone1" name="dddtelefone" class="form-control" placeholder="DDD" />
                </div>
            </div>

            <div class='col-md-3'>
                <div class="form-group">
                    <label class="control-label">Nº Telefone</label>
                    <input type="text" id="numtelefone1" name="numtelefone" class="form-control" placeholder="NºTelefone" />
                </div>
            </div>


            <div class='col-md-2'>
                <div class="form-group">
                    <label class="control-label">Operadora:</label>
                    <input type="text" id="operadora1" name="operadora" class="form-control" placeholder="Operadora" />
                </div>
            </div>

            <div class='col-md-4'>
                <div class="form-group">
                    <label class="control-label">Melhor Horário para contato:</label>
                    <input type="text" id="horariocontato1" name="horariocontato" class="form-control" placeholder="Melhor Horário" />
                </div>
            </div>
        </div>

        <br />
        <div class="row">
            <div class='col-md-2'>
                <div class="form-group">
                    <label class="control-label">Tipo de Telefone:</label>
                    <?php $modelo->dropDownPara(TipoTelefone::getConstants(), "Selecione...", "TipoTelefone2") ?>
                </div>
            </div>

            <div class='col-md-1'>
                <div class="form-group">
                    <label class="control-label">DDD:</label>
                    <input type="text" id="dddtelefone2" name="dddtelefone" class="form-control" placeholder="DDD" />
                </div>
            </div>

            <div class='col-md-3'>
                <div class="form-group">
                    <label class="control-label">Nº Telefone</label>
                    <input type="text" id="numtelefone2" name="numtelefone" class="form-control" placeholder="NºTelefone" />
                </div>
            </div>

            <div class='col-md-2'>
                <div class="form-group">
                    <label class="control-label">Operadora:</label>
                    <input type="text" id="operadora2" name="operadora" class="form-control" placeholder="Operadora" />
                </div>
            </div>

            <div class='col-md-4'>
                <div class="form-group">
                    <label class="control-label">Melhor Horário para contato:</label>
                    <input type="text" id="horariocontato2" name="horariocontato" class="form-control" placeholder="Melhor Horário" />
                </div>
            </div>
        </div>

        <br />
        <div class="row">
            <div class="col-md-offset-3 col-md-2">
                <input type="button" name="btCancelar" id="txCancelar" style="width: 100%;"
                    class="btn btn-warning" value="Cancelar" onclick="window.history.back();" />
            </div>

            <div class="col-md-2">
                <input type="reset" name="btLimpar" id="txLimpar" style="width: 100%;"
                    class="btn btn-info" value="Limpar" />
            </div>

            <div class="col-md-2">
                <input type="submit" name="btSalvar" id="txGravar" style="width: 100%;"
                    class="btn btn-success" value="Salvar" />
            </div>

        </div>
    </form>
</div>
