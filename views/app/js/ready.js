$(document).ready(function(){

	$('#Misicion').click(function(){
	$('#cajaIF').load("http/overall/section.php");
	});

	$('#Vision').click(function(){
	$('#cajaIF').load("http/semilleros/index.php");
	});

	$('#ObgetivosG').click(function(){
	$('#cajaIF').load("http/proyectos/index.php");
	});

	$('#ObgetivosE').click(function(){
	$('#cajaIF').load("http/eventos/index.php");
	});

	$('#Noticias').click(function(){
	$('#cajaIF').load("http/foro/index.php");
	});

	$('#Proyectos').click(function(){
	$('#cajaIF').load("http/foro/index.php");
	});

	$('#integrantes').click(function(){
	$('#cajaIF').load("http/foro/index.php");
	});


});
