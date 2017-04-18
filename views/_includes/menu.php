<?php if ( ! defined('ABSPATH')) exit; ?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">
                <img class="img" src="<?php echo HOME_URI ?>/views/img/home.png" alt="Home" width="35"></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/view/FormCadCliente.php">Cliente</a>
                </li>
                <li>
                    <a href="FormCadFuncionario.php">Funcionário</a>
                </li>
                <li>
                    <a href="FormCadOs.php">Ordem de Serviço</a>
                </li>
                <li>
                    <a href="FormCadUsuario.php">Usuário</a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Pesquisar<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/view/FormCadCliente.php">Cliente</a></li>
                        <li class="divider"></li>
                        <li><a href="/view/FormCadFuncionario.php">Funcionário</a></li>
                        <li class="divider"></li>
                        <li><a href="/view/FormCadOs.php">Ordem de Serviço </a></li>
                        <li class="divider"></li>
                        <li><a href="/view/FormCadUsuario.php">Usuário</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="main-content">
    <div class="container">
