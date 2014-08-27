<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>SISGEMED | <?= $titulo;?></title>
		<meta name="description" content="description">
		<meta name="author" content="DevOOPS">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?=base_url();?>css/iniciarSesion.css" rel="stylesheet" type="text/css" />        
		<link href="<?=base_url();?>plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="<?=base_url();?>plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="<?=base_url();?>plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
		<link href="<?=base_url();?>plugins/xcharts/xcharts.min.css" rel="stylesheet">
		<link href="<?=base_url();?>plugins/select2/select2.css" rel="stylesheet">
        <link href="<?=base_url();?>plugins/jquery-ui-timepicker-addon/jquery-ui-timepicker-addon.css" rel="stylesheet">
        <link href="<?=base_url();?>css/style.css" rel="stylesheet">
	</head>
<body>        
<!-- Porcion de codigo que evitara que PHP notifique todos los NOTICE en el codigo -->
<?php
// Notificar todos los errores excepto E_NOTICE 
// Este es el valor predeterminado establecido en php.ini 
error_reporting(E_ALL ^ E_NOTICE);
?>