	<div class="row" >
		<div class="col-md-2 col-sm-4" style="text-align:center;">
			<p style="padding: 10px;">
				<img alt="" width="100%"  src="<?php echo base_url().'assets/img/profile-studen.png';?>" data-holder-rendered="true" style=" display: block;">
			</p>
		</div>
		<div class="col-md-5 col-sm-12" >
			<table border="0" width="100%">
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;"><b>รหัส :</b></p></td>
					<td align="left"><p style="padding: 5px;">59123435678</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;"><b>ชื่อ-สกุล (ภาษาไทย) :</b></p></td>
					<td align="left"><p style="padding: 5px;">นายสมชาย ใจดีมาก</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;"><b>แผนการเรียน :</b></p></td>
					<td align="left"><p style="padding: 5px;">ภาคปกติ</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;"><b>สถานะภาพ :</b></p></td>
					<td align="left"><p style="padding: 5px;">กำลังศึกษา</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;"><b>วันเข้าศึกษา :</b></p></td>
					<td align="left"><p style="padding: 5px;">16/07/2559</p></td>
				</tr>
			</table>
		</div>
		<div class="col-md-5 col-sm-12" >
			<table  border="0" width="100%">
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;"><b>ระดับการศึกษา :</b></p></td>
					<td align="left">
						<p style="padding: 5px;">
							<?php  echo $this->session->userdata('username')=='ms_user' ? 'ปริญญาโท' : 'ปริญญาเอก' ;?>
						</p>
					</td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;"><b>ชื่อ-สกุล (ภาษาอังกฤษ) :</b></p></td>
					<td align="left"><p style="padding: 5px;">Somchai Jaidemark</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;"><b>คณะ :</b></p></td>
					<td align="left"><p style="padding: 5px;">ครุศาสตร์</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;"><b>สาขา/แผนการศึกษา :</b></p></td>
					<td align="left"><p style="padding: 5px;">ครุศาสตร์</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;"><b>ภาษาต่างประเทศ :</b></p></td>
					<td align="left"><p style="padding: 5px;">ผ่าน</p></td>
				</tr>
			</table>
		</div>
		<div class="col-md-12 col-sm-12" style="text-align:center;margin-top:3%">
			<div class="col-md-2 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
				<i style="background:#088A08;color:#ffffff;border-color:#088A08;">1</i>
				</div>
				<span>เข้าศึกษา</span>
			</div>
			<div class="col-md-2 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
				<i style="background:#088A08;color:#ffffff;border-color:#088A08;">2</i>
				</div>
				<span>
					<?php echo $_SESSION['LEVELID'] ==82 ? 'ขอสอบประมวลผลความรู้' : 'ขอสอบวัดคุณสมบัติ' ;?>
				</span>
			</div>
			<div class="col-md-2 col-sm-4">
				<div class="sidebar-minified active" style="margin-left:-19%;margin-right:-19%;">
					<i style="background:#088A08;color:#ffffff;border-color:#088A08;">3</i>
				</div>
				<span><?php echo $_SESSION['LEVELID'] ==82 ? 'ยื่นหัวข้อการค้นคว้าอิสระ' : 'ยื่นหัวข้อวิทยานิพนธ์' ;?></span>
			</div>
			<div class="col-md-2 col-sm-4">
				<div class="sidebar-minified " style="margin-left:-19%;margin-right:-19%;">
				<i style="background:#088A08;color:#ffffff;border-color:#088A08;">4</i>
				</div>
				<span><?php echo $_SESSION['LEVELID'] ==82 ? 'สอบเค้าโครงการค้นคว้าอิสระ' : 'สอบเค้าโครงวิทยานิพนธ์' ;?></span>
			</div>
			<div class="col-md-2 col-sm-4">
				<div class="sidebar-minified " style="margin-left:-19%;margin-right:-19%;">
				<i style="background:#088A08;color:#ffffff;border-color:#088A08;">5</i>
				</div>
				<?php echo $_SESSION['LEVELID'] ==82 ? 'สอบการค้นคว้าอิสระ' : 'สอบวิทยานิพนธ์' ;?>
			</div>
			<div class="col-md-2 col-sm-4">
				<div class="sidebar-minified " style="margin-left:-19%;margin-right:-19%;">
				<i style="background:#088A08;color:#ffffff;border-color:#088A08;">6</i>
				</div>
				<span>จบการศึกษา</span>
			</div>
		</div>
	</div>

	<div class="row" style="text-align:left;margin-top:5%">
		<div class="col-md-12 col-sm-12 " >
			<div class="panel panel-default" style="height:<?php echo $data['param1'][0] == '2' ? '1540px;' : '280px;' ; ?>padding:5px;">
			<div class="panel-heading" ><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp; ขอสำเร็จการศึกษา</div>
	 	<?php  if($data['param1'][0]==1){ ?>
			<div class="col-md-12 col-sm-12 " style="text-align:center;margin-top:10%;">
				<a href="<?php echo base_url();?>index.php/Student/Graduated/2/" >
					<button type="submit" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-education"></i> ขอสำเร็จการศึกษา </button>
				</a>
			</div>
		<?php }else if($data['param1'][0]==2){ ?>
			<p class="alert alert-info"><i class="fa fa-info-circle"></i>
				<a href="javascript:editform(1,'')" class="btn btn-warning">แก้ไข</a>
				<a href="javascript:editform(2,'Student/exams/1/showlist')" class="btn btn-success">ปริ้น</a>

			</p>
			<div class="col-md-12 col-sm-12 " style="text-align:center;margin-top:1%;">

				<div id='printableArea'>
					<?php $this->load->view('Papers/Graduated');?>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
