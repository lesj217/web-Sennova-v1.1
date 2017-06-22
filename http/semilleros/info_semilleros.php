<?php 
include_once('core/core.php');
include_once(HTTP_DIR.'overall/head.php');
include_once(HTTP_DIR.'overall/header.php');
include_once(HTTP_DIR.'overall/nav.php');
$info_semilleros= $db->query("SELECT * FROM semilleros WHERE id_semillero='$id_semillero';");
		
     foreach ($info_semilleros as $info) {
echo '<div id="nombre" class="hio">'.$info['nombre'].'</div>';
echo '<div id="mision" class="hio">'.$info['mision'].'</div>';
echo '<div id="vision" class="hio">'.$info['vision'].'</div>';
echo '<div id="obgetivosG" class="hio">'.$info['obgetivos_general'].'</div>';
echo '<div id="obgetivosE" class="hio">'.$info['obgetivos_especificos'].'</div>';
echo '<div id="logo" class="hio">'.$info['logo'].'</div>';
} ?>

<div class="container-fluid">
<div class="row"><div class="col-xs-12 col-ms-12 col-md-12 col-lg-12"><center><h1 id="nombreV"></h1></center></div></div>
   <div class="row">
     <div class="col-xs-12 col-ms-12 col-md-3 col-lg-3">
	    <ul>
	    	<li id="Mision"><a onclick="m()">Mision</a></li>
	    	<li id="Vision"><a onclick="v()">Vision</a></li>
	    	<li id="ObgetivosG"><a onclick="og()">Obgetivos generales</a></li>
	    	<li id="ObgetivosE"><a onclick="oe()">Obgetivos especificos</a></li>
	    	<li id="Noticias"><a onclick="n()">Noticias</a></li>
	    	<li id="Proyectos"><a onclick="p()">Proyectos</a></li>
	    	<li id="integrantes"><a onclick="i()">integrantes</a></li>
	    </ul>
    </div>
     <div class="col-xs-12 col-sm-6 col-md-9 col-lg-9">
	   <div id="cajaIF">
		<p id="VV"></p>
	   </div>
    </div>
   </div>
</div><br><br><br><br><br>
     


<?php 
include_once(HTTP_DIR.'overall/footer.php');
?>
<script type="text/javascript">

function __(id) {
  return document.getElementById(id);
}
function m(){
	mision= __('mision').innerHTML;
	__('VV').innerHTML= mision;
}
function v(){
	vision= __('vision').innerHTML;
	__('VV').innerHTML= vision;
}
function og(){
	ObgetivosG= __('obgetivosG').innerHTML;
	__('VV').innerHTML= ObgetivosG;
}
function oe(){
	ObgetivosE= __('obgetivosE').innerHTML;
	__('VV').innerHTML= ObgetivosE;
}
function l(){
	logo= __('logo').innerHTML;
	__('VV').innerHTML= logo;
}


	nombre= __('nombre').innerHTML;
	__('nombreV').innerHTML= nombre;
</script>
<style type="text/css">
	.hio{
		display: none;
	}
</style>