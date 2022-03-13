<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Badan Pusat Statistik</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .btn-primary,
    .app-header {
        background-color: #0093DD !important;
    }
    .app-header__logo {
        background-color: #00496e !important;
    }
</style>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header">
        <a class="app-header__logo" href="index.html"><img src="https://upload.wikimedia.org/wikipedia/commons/2/28/Lambang_Badan_Pusat_Statistik_%28BPS%29_Indonesia.svg" class="mb-2 mr-2" width="30" alt="">
            <span style="font-family: 'Courier New', Courier, monospace;">BPS HSU</span>
        </a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="ganti_password.php"><i class="fa fa-cog fa-lg"></i> Ganti Password</a></li>
                    <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Keluar</a></li>
                </ul>
            </li>
        </ul>
    </header>