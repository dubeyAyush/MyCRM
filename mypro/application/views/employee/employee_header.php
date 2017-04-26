<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CRM</title>
	
	<!-- core CSS -->
    <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/animate.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/prettyPhoto.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/main.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('css/responsive.css'); ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('js/html5shiv.js'); ?>"></script>
    <script src="<?php echo base_url('js/respond.min.js'); ?>"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url('images/ico/favicon.ico'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('images/ico/apple-touch-icon-144-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('images/ico/apple-touch-icon-114-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('images/ico/apple-touch-icon-72-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('images/ico/apple-touch-icon-57-precomposed.png'); ?>">
	 <script src="<?php echo base_url('js/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/jquery.prettyPhoto.js'); ?>"></script>
    <script src="<?php echo base_url('js/jquery.isotope.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/main.js'); ?>"></script>
    <script src="<?php echo base_url('js/wow.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/myjs.js'); ?>"></script>
</head><!--/head-->
<body class="homepage">

    <header id="header">
        
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>">CRM</a>
                </div>
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
						<li style="color:white; margin-top:7px;"> Welcome <?php $row=$this->session->userdata('my_session'); echo $row['first_name']; echo "  "; echo $row['last_name']; ?></li>                        
                        <li><a href="<?php echo base_url('admin/settings');?>">Settings</a></li>
                        <li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
