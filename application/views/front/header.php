<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perpustakaan Jurnal Jurusan Teknik Geofisika - Universitas Halu Oleo</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('komponen/front/images/') ?>yellow-book.jpg" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="<?= base_url('komponen/front/css/') ?>bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="<?= base_url('komponen/front/vendors/') ?>animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
	<link rel="stylesheet" href="<?= base_url('komponen/front/vendors/') ?>font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="<?= base_url('komponen/front/vendors/') ?>camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('komponen/front/vendors/') ?>owl_carousel/owl.carousel.css" media="all">

    <!--Theme Styles CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('komponen/front/css/') ?>style.css" media="all" />

    <link rel="stylesheet" type="text/css" href="<?= base_url('komponen/front/css/') ?>jquery.dataTables.min.css" media="all" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style>
        p{
            padding: 0 0 ;
            margin: 0 0;
        }
    </style>
</head>
<body>
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->

	<!-- Top Header_Area -->
	<section class="top_header_area">
	    <div class="container">
            <ul class="nav navbar-nav top_nav">
                <li><a href="#"><i class="fa fa-phone"></i>+1 (168) 314 5016</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i>info@uho.ac.id</a></li>
                <li><a href="#"><i class="fa fa-clock-o"></i>Mon - Fri 08:00 - 16:00</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right social_nav">
            </ul>
	    </div>
	</section>
	<!-- End Top Header_Area -->

	<!-- Header_Area -->
    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <div class="container">
            <!-- searchForm -->
            <div class="searchForm">
                <form action="#" class="row m0">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                        <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div><!-- End searchForm -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-4 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="<?= base_url('komponen/front/images/') ?>logo.png" alt="" width="200" style="margin-top: -10px">
                        <span style="width: 100%; font-size: 11pt">Perpustakaan Jurnal Jurusan Teknik Geofisika</span>
                    </a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-8 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?= base_url('menu') ?>">Beranda</a></li>
                        <li><a href="<?= base_url('menu/jurnal') ?>">Jurnal</a></li>
                        <li><a href="<?= base_url('menu/metode') ?>">Metode</a></li>
                        
                        <!-- <li><a href="#" class="nav_searchFrom"><i class="fa fa-search"></i></a></li> -->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
	<!-- End Header_Area -->