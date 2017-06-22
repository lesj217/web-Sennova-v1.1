 <?php
if(!isset($_SESSION['app_id'])) {
include_once(HTTP_DIR. 'public/login.html');
include_once(HTTP_DIR. 'public/reg.html');
include_once(HTTP_DIR. 'public/lostpass.html');
}
?>

 <header id="header-container">
    <div class="container">
      <div class="row ">

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <a href="index.php" ><img src="views/app/img/sennova.png" class="pull-xs-left responsive"></a> 
          </div>


          <div class="col-md-8 col-lg-8 text-md-right text-lg-right">


          <?php
           if(!isset($_SESSION['app_id'])) {
            echo '
             <a class="login hidden-xs-down hidden-sm-down text-uppercase font-weight-bold" href="#" data-toggle="modal" data-target="#Login">Login</a>';

           }else{
                 echo '<a class="login text-uppercase font-weight-bold hidden-xs-down hidden-sm-down " href="?view=perfil&id='.$_SESSION['app_id'].'">'. strtoupper(DataUser()) .'</a>
                              <a class="login  text-uppercase font-weight-bold hidden-xs-down hidden-sm-down" href="?view=logout">SALIR</a>';
           }?>

          </div>
        
      </div>
    </div>
</header>

