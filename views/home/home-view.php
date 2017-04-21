<?php if ( ! defined('ABSPATH')) exit; ?>


<header class="jumbotron hero-spacer">
    <h3 align="center">Seja Bem Vindo usuário!</h3>
</header>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Selecione o serviço desejado</h3>
    </div>
</div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-4 portfolio-item">
        <a href="">
            <img class="img" src="<?php echo HOME_URI ?>/views/img/cliente.jpg" alt="Cliente" width="120"></a>
        <h3><a href="<?php echo HOME_URI ?>/cliente/novo">Cliente</a></h3>
    </div>

    <div class="col-md-4 portfolio-item">
        <a href="">
            <img class="img" src="<?php echo HOME_URI ?>/views/img/os.png" alt="Oredem de Serviço" width="100"></a>
        <h3><a href="FormCadOs.php">Ordem de Serviço</a></h3>
    </div>
</div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-4 portfolio-item">
        <a href="">
            <img class="img" src="<?php echo HOME_URI ?>/views/img/funcionario.jpg" alt="Funcionário" width="80"></a>
        <h3><a href="FormCadFuncionario.php">Funcionário</a></h3>
    </div>

    <div class="col-md-4 portfolio-item">
        <a href="">
            <img class="img" src="<?php echo HOME_URI ?>/views/img/usuario.jpg" alt="Usuario" width="95"></a>
        <h3><a href="FormCadUsuario.php">Usuário</a></h3>
    </div>
