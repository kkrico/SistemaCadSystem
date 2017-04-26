<?php if ( ! defined('ABSPATH')) exit; 

      const path = "path";
      
?>
</div>
</div>
    <script type="text/javascript" src="<?php echo HOME_URI ?>/views/_js/jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo HOME_URI ?>/views/_js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo HOME_URI ?>/views/_js/global.js"></script>

<?php 

if (isset($_GET[path])) :
    if ($_GET[path] === "cliente/novo") :
?>
        <script type="text/javascript" src="<?php echo HOME_URI ?>/views/_js/cliente/novo.js"></script>
<?php
                                                  
    elseif ($_GET[path] === "cliente/index" || $_GET[path] === "cliente" || $_GET[path] === "cliente/") :
?>
        <link rel="stylesheet" href="<?php echo HOME_URI ?>/views/_css/bootstraptable/bootstrap-table.min.css" />
        <script type="text/javascript" src="<?php echo HOME_URI ?>/views/_js/bootstraptable/bootstrap-table.min.js"></script>
        <script type="text/javascript" src="<?php echo HOME_URI ?>/views/_js/bootstraptable/bootstrap-table-pt-BR.js"></script>
        <script type="text/javascript" src="<?php echo HOME_URI ?>/views/_js/cliente/index.js"></script>
<?php
    endif;
endif;
?>
</body>
</html>
