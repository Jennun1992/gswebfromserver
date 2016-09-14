<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบสารสนเทศนักศึกษา</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  </head>
  <body align='center'>

    <div class="top-bar" style="background-color:#555">
      <div class="row">
        <!-- logo -->
        <div class="col-md-2 logo" style="margin-top:-7px; margin-bottom:5px;">
          <a href="#"><b style="color:#F2F2F2;font-size:16px;"><img src="http://localhost/gs_web/assets/img/logo-gs-s.png"></b></a>
        </div>
        <!-- end logo -->
        <div class="col-md-6"></div>
        <div class="col-md-4">
          <p>
            <a href="<?php echo site_url();?>/Student/search_student/" class="btn btn-custom-primary">ค้นหานักศึกษา</a>
            <a href="<?php echo base_url();?>index.php/Teacher/search_teacher/" class="btn btn-custom-primary">ค้นหาอาจารย์</a>
          </p>
          <!-- /row -->
        </div>
      </div>
      <!-- /row -->
      <!-- </div> -->
    </div>



  	<div class="col-sm-12" style="padding-top:10%;">
	  	<div class="col-sm-4">
	  	</div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading" style="text-align:left;">ระบบสารสนเทศนักศึกษา</div>
				<div class="panel-body">
					<div class="col-sm-12">
            <?php echo form_open('/Student/AuthenStudent');?>
						<form class="form-horizontal" name='form' action="<?php echo base_url();?>index.php/authen/StudentLogin/" method="post">
							<div class="form-group">
								<label for="userName" class="col-sm-4 control-label">ชื่อเข้าใช้</label>
								<div class="col-sm-8">
									<input type="text" class="form-control col-sm-12" name='userName' placeholder="User Name">
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-sm-4 control-label">รหัสผ่าน</label>
								<div class="col-sm-8">
									<input type="password" class="form-control col-sm-12" name="password" placeholder="Password">
								</div>

							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<button type="submit" class="btn btn-default pull-right">เข้าสู่ระบบ</button>
								</div>
							</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
	  	</div>
	</div>
</div>

<!-- <div class="col-md-12">
    <$this->load->view('SearchStudent');?>
</div> -->
	<!-- Javascript -->
	<script src="<?php echo base_url();?>assets/js/jquery/jquery-2.1.0.min.js"></script>

  <script src="<?php echo base_url();?>assets/js/my_script.js"></script>
	</body>
	</html>
