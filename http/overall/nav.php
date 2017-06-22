<nav id="menu-container" class="navbar navbar-toggleable-md navbar-light bg-faded">
             <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon barras"></span>
            </button>
<?php 
if(isset($_SESSION['app_id'])){
echo '<li class="nav-item">
         <a  class="navbar-brand barras hidden-md-up hidden-lg-up" href="?view=perfil&id='.$_SESSION['app_id'].'">'. strtoupper(DataUser()) .'</a>
      </li>';
}else{
echo '<a class="navbar-brand barras hidden-xs-down hidden-sm-down" href="#"><br></a>

<a class="navbar-brand barras hidden-md-up hidden-lg-up" " href="#" data-toggle="modal" data-target="#Login">LOGIN</a>';
}
?>

            

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

              <?php
           if(isset($_SESSION['app_id'])) {
                 echo '
      <li class="nav-item">
         <a class="nav-link hidden-md-up hidden-lg-up" href="?view=logout">SALIR</a>
      </li>';
           }?>
     
        
      
      <li class="nav-item active">
        <a class="nav-link" href="?view=index">INICIO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?view=semilleros">SEMILLEROS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="?view=proyectos">PROYECTOS</a>
      </li>
       <li class="nav-item">
        <a class="nav-link " href="?view=eventos">EVENTOS</a>
      </li>
             <li class="nav-item">
        <a class="nav-link " href="#">FORO</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Busca lo que Necesitas!">
      <button class="btn btn-busc hidden-xs-down hidden-sm-down" type="submit">BUSCAR</button>
    </form>
  </div>
</nav>