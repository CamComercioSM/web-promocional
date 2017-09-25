<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php include_once './inc/head.php'; ?>
    <body>
        <div class="page-wrapper">
            <div class="preloader"></div>
            <div class="header-top"></div>
            <?php include_once './inc/encabezado.php'; ?>

            <?php include './inc/secciones/slider.php'; ?>
            <?php include './inc/secciones/introduccion.php'; ?>
            <?php //include './inc/secciones/conferencistas.php'; ?>
            <?php include './inc/secciones/horario.php'; ?>


            <?php include_once './inc/piecera.php'; ?>
        </div>

        <div class="scroll-to-top scroll-to-target" data-target=".header-top"><span class="icon fa fa-long-arrow-up"></span></div>        
    </body>
    <?php include_once './inc/scripts.php'; ?>
</html>
