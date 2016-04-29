<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NewUrbanMechanic</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/AdminLTE.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/skin-blue.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/my_style.css">
        <script src="<?php echo base_url(); ?>assets/js/plugins/jQuery-2.1.4.min.js"></script>

	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">


        <a href="index2.html" class="logo">
          <span class="logo-mini"><b>NUM</b></span>
          <span class="logo-lg"><b>NewUrbanMechanic</b></span>
        </a>

        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">





              <li class="dropdown user user-menu">
                <a href="<?php echo base_url("admin/login/logout");  ?>" >
                  <span class="hidden-xs"> <i class="fa fa-fw fa-power-off"></i> logout</span>
                </a>
              </li>

            </ul>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar">


        <section class="sidebar">

          <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <li class="active"><a href="<?php echo base_url() ?>admin/master/city"><i class="fa fa-link"></i> <span>City</span></a></li>
            <li><a href="<?php echo base_url() ?>admin/master/area"><i class="fa fa-link"></i> <span>Area</span></a></li>
            <li><a href="<?php echo base_url() ?>admin/master/category"><i class="fa fa-link"></i> <span>Category</span></a></li>
            <li><a href="<?php echo base_url() ?>admin/master/company"><i class="fa fa-link"></i> <span>Company</span></a></li>
            <li><a href="<?php echo base_url() ?>admin/master/service"><i class="fa fa-link"></i> <span>Service</span></a></li>
            <li><a href="service-provider.php"><i class="fa fa-link"></i> <span>Service Provider</span></a></li>
            
          </ul>
		  
        </section>

      </aside>