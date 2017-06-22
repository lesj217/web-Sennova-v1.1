<?php 

  if (isset($_SESSION['app_id'])) {
      if(true){
          include_once(HTTP_DIR.'overall/head.php');
          include_once(HTTP_DIR.'overall/header.php');
          include_once(HTTP_DIR.'overall/nav.php');
          echo '<div class="container">';
          echo '<div class="row">';
          echo '<div class="col-md-6">';
          echo '<center>';
          echo '<h4><strong>'.DataUser().'</strong></h4>'; 
          echo '<a class="colorBtn" href="?view=cuenta">EDITAR PERFIL</a><br>';
          echo '<img src="views/app/img/users/default.jpg" class="thumbnail" height="120" /><br>';
          echo '<img src="views/app/img/icon_online.gif"><br/>';
          echo '<b style="color: #530000;"></b>';
          echo '<br><br>';
          echo '</center>';
          echo '</div>';

          echo '<div class="col-md-6">';
          echo '<center>';
          echo '<ul style="list-style:none; padding-left: 4px;">';
          echo '<li><b></b></li>';
          echo '</center>';
          echo '<li><b></b> temas </li>';
          echo '<li><b></b> mensajes</li>';
          echo '<li><b></b> años</li>';
          echo '<li>Registrado el <b></b></li>';
          echo '</ul>';
          echo '<blockquote></blockquote>';
          echo '</div></div></div>';
          include(HTTP_DIR . 'overall/footer.php');

        }
          
        }else{
          include('core/controllers/errorController.php');
        }

 ?>


