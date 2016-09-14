<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<title>ระบบสารสนเทศนักศึกษา</title>
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

	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/ico/kingadmin-favicon144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/ico/kingadmin-favicon114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/ico/kingadmin-favicon72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo base_url();?>assets/ico/kingadmin-favicon57x57.png">
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
						<a href="#"><b style="color:#F2F2F2;font-size:16px;"><img src="<?php echo base_url();?>assets/img/logo-gs-s.png"></b></a>
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
									<!-- end responsive menu bar icon -->

									<!-- <button type="button" id="global-volume" class="btn btn-link btn-global-volume"><i class="fa"></i></button>  -->
									<div class="logged-user">
										<div class="btn-group">
											<a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
												<img src="<?php echo base_url();?>assets/img/user-avatar.png" alt="User Avatar"/>
												<span class="name">นายทดสอบ ใจดีมาก</span> <span class="caret"></span>
											</a>
											<ul class="dropdown-menu" role="menu">
												<li>
													<a href="<?php echo base_url();?>index.php/Student/profile/">
														<i class="fa fa-user"></i>
														<span class="text"> Profile </span>
													</a>
												</li>
												<li>
													<a href="<?php echo base_url();?>index.php/authen/logout/">
														<i class="fa fa-power-off"></i>
														<span class="text"> Logout </span>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<!-- end logged user and the menu -->
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
					<div class="col-md-2 left-sidebar">
						<!-- main-nav -->
						<nav class="main-nav">
							<ul class="main-menu">
								<li <?php echo $menuactive=='1' ? 'class="active"':'' ;?> >
									<a href="<?php echo base_url();?>index.php/Student/" >
									<i class="fa fa-home fa-fw"></i><span class="text">HOME</span></a>
								</li>
								<li <?php echo $menuactive=='2' ? 'class="active"':'' ;?>>
									<a href="<?php echo base_url();?>index.php/Student/ceqe/" >

									<i class="glyphicon glyphicon-file"></i>
									<span class="text">
									<?php echo $this->session->userdata('username')=='ms_user' ? 'ขอสอบประมวลผลความรู้' : 'ขอสอบวัดคุณสมบัติ' ;?>
									</span>
									</a>
								</li>
								<li <?php echo $menuactive=='8' ? 'class="active"':'' ;?>>
									<a href="<?php echo base_url();?>index.php/Student/adviser/" >
									<i class="glyphicon glyphicon-link"></i><span class="text">ขอแต่งตั้งอาจารย์ที่ปรึกษา</span></a>
								</li>
								<li <?php echo $menuactive=='3' ? 'class="active"':'' ;?>>
									<a href="<?php echo base_url();?>index.php/Student/termpaper/" >
									<i class="glyphicon glyphicon-link"></i><span class="text">ยื่นหัวข้อภาคนิพนธ์</span></a>
								</li>
								<li <?php echo $menuactive=='4' ? 'class="active"':'' ;?>>
									<a href="<?php echo base_url();?>index.php/Student/exams/" >
									<i class="glyphicon glyphicon-bullhorn"></i><span class="text">ขอสอบภาคนิพนธ์</span></a>
								</li>
								<!-- <li <echo $menuactive=='5' ? 'class="active"':'' ;?>>
									<a href="<echo base_url();?>index.php/Student/searchdisst/" >
									<i class="glyphicon glyphicon-list-alt"></i><span class="text">ค้นหาภาคนิพนธ์</span></a>
								</li> -->
								<li <?php echo $menuactive=='5' ? 'class="active"':'' ;?>>
									<a href="<?php echo base_url();?>index.php/Student/search_thesis/" >
									<i class="glyphicon glyphicon-list-alt"></i><span class="text">ค้นหาภาคนิพนธ์</span></a>
								</li>
								<li <?php echo $menuactive=='6' ? 'class="active"':'' ;?>>
									<a href="<?php echo base_url();?>index.php/Student/search_research/" ><i class="fa fa-th-list fa-fw"></i><span class="text">	ค้นหางานวิจัย</span></a>
								</li>
								<li <?php echo $menuactive=='6' ? 'class="active"':'' ;?>>
									<a href="<?php echo base_url();?>index.php/Student/research/" ><i class="fa fa-th-list fa-fw"></i><span class="text">ผลงานวิจัยนักศึกษา</span></a>
								</li>
								<li <?php echo $menuactive=='7' ? 'class="active"':'' ;?>>
									<a href="<?php echo base_url();?>index.php/Student/completions/" ><i class="glyphicon glyphicon-education"></i><span class="text">ขอสำเร็จการศึกษา</span></a>
								</li>
							</ul>
						</nav>
						<!-- /main-nav -->
						<!-- <i class="fa fa-angle-left js-toggle-minified"></i>  -->

					</div>
					<!-- end left sidebar -->
					<!-- content-wrapper -->
					<div class="col-md-10 content-wrapper" >
						<div class="row" >
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><i class="fa fa-home"></i><a href="#">Home</a></li>
									<li class="active"><?php echo $namepage; ?></li>
								</ul>
							</div>
							<div class="col-md-12" style="margin-top:-30px;"><hr></div>

						</div>
						<!-- main -->
						<div class="content">
