<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Jurnal</title>
   <!-- Favicon -->
    <link rel="icon" href="<?= base_url('komponen/front/images/') ?>yellow-book.jpg" type="image/x-icon" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?= base_url('komponen/admin/bower_components/') ?>bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('komponen/admin/bower_components/') ?>font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('komponen/admin/bower_components/') ?>Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('komponen/admin/dist/') ?>css/AdminLTE.min.css">

  <link rel="stylesheet" href="<?= base_url('komponen/admin/dist/') ?>css/skins/skin-blue.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('komponen/admin/bower_components/') ?>datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= base_url('komponen/admin/') ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?= base_url() ?>" target="_blank" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><i class="fa fa-file"></i></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>JUR</b>NAL</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          

         
        
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?= base_url('komponen/admin/dist/') ?>img/user.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Administrator</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?= base_url('komponen/admin/dist/') ?>img/user.jpg" class="img-circle" alt="User Image">

                <p>
                  Administrator
                </p>
              </li>
            
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?= base_url('admin/pengaturan') ?>" class="btn btn-default btn-flat">Pengaturan</a>
                </div>
                <div class="pull-right">
                  <a href="<?= base_url('admin/keluar') ?>" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('komponen/admin/dist/') ?>img/user.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <!-- Optionally, you can add icons to the links -->
        <li id="mn1">
          <a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> <span>Beranda</span></a>
        </li>
        <li id="mn2">
          <a href="<?= base_url('admin/jurnal') ?>"><i class="fa fa-file"></i> <span>Data Jurnal</span></a>
        </li>
       <!--  <li id="mn4">
          <a href="<?= base_url('admin/metode') ?>"><i class="fa fa-file"></i> <span>Data Metode</span></a>
        </li> -->
        <li id="mn3">
          <a href="<?= base_url('admin/pengaturan') ?>"><i class="fa fa-gear"></i> <span>Pengaturan</span></a>
        </li>
        <!-- <li id="mn" class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li> -->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
