<?php

// if($_SERVER['REQUEST_URI'] != '/fms/freght/freight-system/index.php?page=includes/payroll'){
//     include 'visible_user.php';
// }
	session_start();
  if(!isset($_SESSION['login_id']))
    header('location:/fms/admin/');
    $url = "/fms"
 ?>

 



<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once "includes/heads.php" ?>
<title>Freight System | Human Resources Part 2</title>

</head>
    <body>
        <div class="wrapper">
            <!-- sidebar -->
         <?php include_once "includes/sidebar.php"?> 
            <!-- end sidebar -->
            <div id="body" class="active">
                <!-- start topnav -->
                <?php include_once "includes/topnav.php"?>
                <!-- end topnav -->
                <div class="content">
                    <div id="body_content" class="container">
                    <main id="view-panel">