<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<title>ระบบสารสนเทศ</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="KingAdmin - Bootstrap Admin Dashboard Theme">
	<meta name="author" content="The Develovers">
	<!-- favicon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico">

	<!-- CSS -->
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/gs.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet" type="text/css">
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/ico/kingadmin-favicon144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/ico/kingadmin-favicon114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/ico/kingadmin-favicon72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo base_url();?>assets/ico/kingadmin-favicon57x57.png">

	<!-- javascript -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery/jquery-2.1.0.min.js"></script>
	<style>
	h2{
		font-family:Kanit;
	}
	.data-row .data-name {
    width: 12em;
    background-color: #ddd;
    color: #0b4d84;
    font-size: 0.9em;
    vertical-align: top;
}
	</style>
</head>

<body class="dashboard">
	<!-- WRAPPER -->
	<div class="wrapper">
		<!-- TOP BAR -->
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<!-- logo -->
					<div class="col-md-2 logo" style="margin-top:-7px; margin-bottom:5px;">
						<a href="#"><b style="color:#F2F2F2;font-size:16px;"><img src="<?php echo base_url();?>assets/img/logo-gs-t.png"></b></a>
					</div>
					<!-- end logo -->
					<div class="col-md-10">
						<div class="row">
							<div class="col-md-3">
							</div>
							<div class="col-md-9">
								<div class="top-bar-right">
									<!-- responsive menu bar icon -->
									<a href="#" class="hidden-md hidden-lg main-nav-toggle"><i class="fa fa-bars"></i></a>

								</div>
								<!-- /top-bar-right -->
							</div>
						</div>
						<!-- /row -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /top -->
		<!-- BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->
		<div class="bottom">
			<div class="container">
				<div class="row">
					<!-- left sidebar -->

					<!-- end left sidebar -->
					<!-- content-wrapper -->
					<div class="col-md-12 content-wrapper" >
						<?php $this->load->view('Template/Breadcrumb'); ?>
						<!-- main -->
						<div class="content">
