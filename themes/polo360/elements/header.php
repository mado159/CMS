<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php Loader::element('header_required');?>
    <title>Polo 360</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->getThemePath();?>/css/main.css">

  </head>

  <body>
    <div class="header">
    	<div class="logo"><img src="<?php echo $this->getThemePath();?>/images/logo.png" alt=""></div>
    	<div class="menu">
            <?php
            $menu = new GlobalArea('Menu');
            $menu->display($c);?>
    	</div>
    </div>