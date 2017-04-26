<?php if ( ! defined('ABSPATH')) exit; ?>


<div class="page-header">
    <br>
    <h1>Cadastro de Cliente</h1>
</div>
<div id="formulario">
    <form name="formControl" id="cliente" action="" method="POST">
        <div class="row">
            <div class="col-md-2">
                <label>Data de Cadastro:</label>
                <input type="date" id="datacadastropessoa" name="datacadastropessoa" class="form-control" />
            </div>

        </div>

        <br />
        <div class="row">
            <div class="col-md-3">
                <label>Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" />
            </div>

            <div class="col-md-3">
                <label>Sobrenome:</label>
                <input type="text" id="sobrenome" name="sobrenome" class="form-control" placeholder="Sobrenome" />
            </div>

            <div class="col-md-3">
                <label>CPF:</label>
                <input type="text" id="cpf" name="cpf" class="form-control" placeholder="CPF" />
            </div>

            <div class="col-md-3">
                <label>RG:</label>
                <input type="text" id="rg" name="rg" class="form-control" placeholder="RG" />
            </div>
        </div>

        <br />
        <div class="row">

            <div class="col-md-2">
                <label>Data de Nascimento:</label>
                <input type="date" id="datanascimento" name="datanascimento" class="form-control" />
            </div>

            <div class="col-md-1">
                <label>Sexo:</label>
                <br>
                <input type="radio" name="sexo" value="1">
                M 
               
                <input type="radio" name="sexo" value="2">
                F
           
            </div>

            <div class="col-md-4">
                <label>E-mail:</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" />
            </div>

            <div class='col-md-5'>
                <label>Endereço:</label>
                <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço" />
            </div>
        </div>

        <br>
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
                <label>UF:</label>
                 <?php $modelo->dropDownPara(UF::getConstants(), "UF", "uf") ?>
            </div>

            <div class='col-md-4'>
                <label>Ponto de Referência:</label>
                <input type="text" id="ptreferencia" name="ptreferencia" class="form-control" placeholder="Ponto de Referência" />
            </div>

            <div class='col-md-2'>
                <label>CEP:</label>
                <input type="text" id="cep" name="cep" class="form-control" placeholder="CEP" />
            </div>
        </div>

        <br>
        <div class="row">
            <div class='col-md-2'>
                <label>Tipo de Telefone:</label>
                <?php $modelo->dropDownPara(TipoTelefone::getConstants(), "Selecione...", "TipoTelefone1") ?>
            </div>

            <div class='col-md-1'>
                <label>DDD:</label>
                <input type="text" id="dddtelefone1" name="dddtelefone" class="form-control" placeholder="DDD" />
            </div>

            <div class='col-md-3'>
                <label>Nº Telefone</label>
                <input type="text" id="numtelefone1" name="numtelefone" class="form-control" placeholder="NºTelefone" />
            </div>


            <div class='col-md-2'>
                <label>Operadora:</label>
                <input type="text" id="operadora1" name="operadora" class="form-control" placeholder="Operadora" />
            </div>

            <div class='col-md-4'>
                <label>Melhor Horário para contato:</label>
                <input type="text" id="horariocontato1" name="horariocontato" class="form-control" placeholder="Melhor Horário" />
            </div>
        </div>

        <br />
        <div class="row">
            <div class='col-md-2'>
                <label>Tipo de Telefone:</label>
                <?php $modelo->dropDownPara(TipoTelefone::getConstants(), "Selecione...", "TipoTelefone2") ?>
            </div>

            <div class='col-md-1'>
                <label>DDD:</label>
                <input type="text" id="dddtelefone2" name="dddtelefone" class="form-control" placeholder="DDD" />
            </div>

            <div class='col-md-3'>
                <label>Nº Telefone</label>
                <input type="text" id="numtelefone2" name="numtelefone" class="form-control" placeholder="NºTelefone" />
            </div>

            <div class='col-md-2'>
                <label>Operadora:</label>
                <input type="text" id="operadora2" name="operadora" class="form-control" placeholder="Operadora" />
            </div>

            <div class='col-md-4'>
                <label>Melhor Horário para contato:</label>
                <input type="text" id="horariocontato2" name="horariocontato" class="form-control" placeholder="Melhor Horário" />
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-2">
                <br>
                <input type="button" name="btCancelar" id="txCancelar" style="width: 100%;"
                    class="btn btn-warning" value="Cancelar" onclick="" />
            </div>

            <div class="col-md-2">
                <br>
                <input type="reset" name="btLimpar" id="txLimpar" style="width: 100%;"
                    class="btn btn-info" value="Limpar" />
            </div>

            <div class="col-md-2">
                <br>
                <input type="submit" name="btSalvar" id="txGravar" style="width: 100%;"
                    class="btn btn-success" value="Salvar" />
            </div>

        </div>
    </form>
</div>
