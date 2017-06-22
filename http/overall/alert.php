<div class="container">
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <center>
           <?php  
           if(isset($_GET['success'])) {
              echo '<div class="alert alert-dismissible alert-success"><h4><strong>Activado!</strong> tu usuario ha sido activado correctamente.</h4></div>';
                                      }

           if(isset($_GET['error'])) {
              echo '<div class="alert alert-dismissible alert-danger"><h4><strong>Error!</strong></strong> Tu key es invalida.</h4></div>';  
                                     }
                                                 if(isset($_GET['activo'])) {
              echo '
                <div class="alert alert-dismissible alert-success">
      <strong>Contraseña cambiada!</strong> se ha generado una nueva contraseña <strong>'.$password .'</strong> , prueba <a data-toggle="modal" data-target="#Login">iniciar sesión</a> con ella y podrás cambiarla una vez estes dentro.
  </div>

              ';

            }  
                      
           ?>
        </center>
        </div>         
     </div>
</div>




