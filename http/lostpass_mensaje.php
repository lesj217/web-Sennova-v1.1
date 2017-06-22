
<?php 
include_once('core/core.php');
include_once(HTTP_DIR.'overall/head.php');
include_once(HTTP_DIR.'overall/header.php');
include_once(HTTP_DIR.'overall/nav.php');

?>

<div class="container">
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <center>
           <?php  
            if(isset($_GET['error'])) {
              echo '<div class="alert alert-dismissible alert-danger"><h4><strong>Error!</strong></strong> Tu key es invalida.</h4></div>';  
            } else{ 
            	echo '<div class="alert alert-dismissible alert-success">';
            	echo '<p><strong>Contraseña cambiada!</strong> se ha generado una nueva contraseña  ';
            	echo '<strong>'.$password.'</strong>';

               echo '  prueba <a data-toggle="modal" data-target="#Login">iniciar sesión</a>con ella y podrás cambiarla una vez estes dentro.</p></div>'; 
                                     }      
           ?>
        </center>
        </div>         
     </div>
</div>






<?php
include_once(HTTP_DIR.'overall/section.php');
include_once(HTTP_DIR.'overall/footer.php');
?>
