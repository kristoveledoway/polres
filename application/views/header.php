<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POLRES</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css">
</head>
<body>
    <!-- jumbotron -->
    <div class="jumbotron">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <img src="<?php echo base_url(); ?>images/logo-kobar.jpg" class="img-thumbnail">
                </div>
                <div class="col-md-6">
                    <h2>Sistem Informasi Kendaraan Hilang Berbasis WEB dan Informasi Penemuan Kendaraan Hilang Menggunakan Sms Gateway</h2>
                </div>
                <div class="col-md-3">
                    <img src="<?php echo base_url(); ?>images/logo-kobar.jpg" class="img-thumbnail">
                </div>
            </div>
        </div>
    </div>

    <!-- navigation -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Polres</a>
            </div>
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url(); ?>home" class="glyphicon glyphicon-home"> HOME</a></li>
                    <li><a href="<?php echo base_url(); ?>home/profil" class="glyphicon glyphicon-user"> PROFIL</a></li>
                    <li><a href="<?php echo base_url(); ?>home/polres" class="glyphicon glyphicon-dashboard"> POLRES</a></li>
                    <li><a href="<?php echo base_url(); ?>home/polsek" class="glyphicon glyphicon-dashboard"> POLSEK</a></li>
                    <li><a href="<?php echo base_url(); ?>home/informasi" class="glyphicon glyphicon-bishop"> INFORMASI</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url(); ?>home/log" class="glyphicon glyphicon-log-in"> LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>