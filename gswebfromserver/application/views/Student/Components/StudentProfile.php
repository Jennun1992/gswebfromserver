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
					<td align="left"><p style="padding: 5px;"><?=$data['Result'][0]['STUDENTCODE'];?></p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;"><b>ชื่อ-สกุล (ภาษาไทย) :</b></p></td>
					<td align="left"><p style="padding: 5px;"><?=$data['Result'][0]['STUDENTNAME']."   ".$data['Result'][0]['STUDENTSURNAME'];?></p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;"><b>แผนการเรียน :</b></p></td>
					<td align="left"><p style="padding: 5px;"><?=$data['Result'][0]['LEVELNAME'];?></p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;"><b>สถานะภาพ :</b></p></td>
					<td align="left"><p style="padding: 5px;">กำลังศึกษา</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;"><b>วันเข้าศึกษา :</b></p></td>
					<td align="left"><p style="padding: 5px;"><?=$data['Result'][0]['ADMITDATE'];?></p></td>
				</tr>
			</table>
		</div>
		<div class="col-md-5 col-sm-12" >
			<table  border="0" width="100%">
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;"><b>ระดับการศึกษา :</b></p></td>
					<td align="left">
						<p style="padding: 5px;">
							<?php  //echo $this->session->userdata('username')=='ms_user' ? 'ปริญญาโท' : 'ปริญญาเอก' ;?>
							<?=$data['Result'][0]['LEVELNAMECERTIFY'];?>
						</p>
					</td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;"><b>ชื่อ-สกุล (ภาษาอังกฤษ) :</b></p></td>
					<td align="left"><p style="padding: 5px;"><?=$data['Result'][0]['STUDENTNAMEENG']."   ".$data['Result'][0]['STUDENTSURNAMEENG'];?></p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;"><b>คณะ :</b></p></td>
					<td align="left"><p style="padding: 5px;"><?=$data['Result'][0]['FACULTYNAME'];?></p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;"><b>สาขา/แผนการศึกษา :</b></p></td>
					<td align="left"><p style="padding: 5px;"><?=$data['Result'][0]['FACULTYABB'];?></p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;"><b>ภาษาต่างประเทศ :</b></p></td>
					<td align="left"><p style="padding: 5px;">ผ่าน</p></td>
				</tr>
			</table>
		</div>
		<div class="col-md-12 col-sm-12" style="text-align:center;margin-top:3%">
			<div class="col-md-2 col-sm-4" id="transcript_btn">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
				<i class="active">1</i>
				</div>
				<span>ผลการศึกษา</span>
			</div><?//?=print_r($Result); ?>
			<div class="col-md-2 col-sm-4" id="ceqe_btn">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
				<i class="active">2</i>
				</div>
				<span>
					<?php echo $data['Result'][0]['LEVELID'] < 90 ? 'ขอสอบ<br />ประมวลผลความรู้' : 'ขอสอบวัดคุณสมบัติ' ;?>
				</span>
			</div>
			<div class="col-md-2 col-sm-4">
				<div class="sidebar-minified active" style="margin-left:-19%;margin-right:-19%;">
					<i >3</i>
				</div>
				<span><?php echo $data['Result'][0]['LEVELID'] < 90 ? 'ยื่นหัว<br />ข้อการค้นคว้าอิสระ' : 'ยื่นหัวข้อวิทยานิพนธ์' ;?></span>
			</div>
			<div class="col-md-2 col-sm-4">
				<div class="sidebar-minified " style="margin-left:-19%;margin-right:-19%;">
				<i >4</i>
				</div>
				<span><?php echo $data['Result'][0]['LEVELID'] < 90 ? 'สอบเค้าโครง<br />การค้นคว้าอิสระ' : 'สอบเค้าโครงวิทยานิพนธ์' ;?></span>
			</div>
			<div class="col-md-2 col-sm-4">
				<div class="sidebar-minified " style="margin-left:-19%;margin-right:-19%;">
				<i >5</i>
				</div>
				<span><?php echo $data['Result'][0]['LEVELID'] < 90 ? 'สอบการค้นคว้าอิสระ' : 'สอบวิทยานิพนธ์' ;?></span>
			</div>
			<div class="col-md-2 col-sm-4">
				<div class="sidebar-minified " style="margin-left:-19%;margin-right:-19%;">
				<i >6</i>
				</div>
				<span>จบการศึกษา</span>
			</div>
		</div>
	</div>

	<!-- ส่วนแสดงcontent ของแต่ปุ่ม timeline เมื่อกดปุ่ม timeline-->
		<!-- 1.แสดงผลการศึกษา -->
	<div id="transcript" class="row" style="margin:5% 0 0 0;display:block">

		  <div class="widget">
				  <div class="widget-header">
						<div class="panel-heading" ><i class="glyphicon glyphicon-book"></i></div>
					</div><!--end widget-header-->
					<div class="widget-content">

						<div class="widget">
						<div class="widget-header">
							<div class="panel-heading" ><i class="glyphicon glyphicon-book"></i>ภาคการศึกษาที่ 1</div>
						</div><!--end widget-header-->


						<table class="table table-bordered">
													<thead>
														<tr>
															<th width="10%">รหัสวิชา</th>
															<th width="60%">รายการวิชา</th>
															<th width="10%">เทอม</th>
															<th width="10%">หน่วยกิต</th>
															<th width="10%">ผลการเรียน</th>
														</tr>
													</thead>
													<tbody>

														<?php foreach ($data['transcript'] as $value) {
														?>
														<tr>
															<td><?=$value['COURSEID'];?></td>
															<td><?=$value['COURSENAME'];?></td>
															<td><?=$value['SEMESTER'];?></td>
															<td><?=$value['COURSEUNIT'];?></td>
															<td><?=$value['GRADE'];?></td>
														</tr>

											<?php } ?>
													</tbody>
												</table>
											</div>



					</div><!--end widget-content-->
			</div><!--end class widget-->

			<div class="row">
									<div class="col-md-8">	</div>
									<div class="col-md-4">
										<div class="contextual-summary-info contextual-background green-bg">
											<i class="fa fa-check-circle"></i>
											<p class="pull-right"><span style="font:18px bold;">เกรดเฉลี่ยรวม</span>
												<?php echo $data['Result'][0]['GPA']%2==0 ?$data['Result'][0]['GPA'].".00" : $data['Result'][0]['GPA'] ;?>
											</p>
										</div>
									</div>
								</div>
	</div> <!--end id=transcript-->
	<div class="row" id="CeQe" style="display:none">

		<?php if($param1==1){ ?>
			<div class="row request" style="text-align:left;margin-top:5%">
				<div class="col-md-12 col-sm-12 " >
					<div class="panel panel-default" style="height:250px;padding:5px;">
						<div class="panel-heading" ><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp; <?php echo $namepage?> </div>
						<br>
						<div class="col-sm-12" style="margin-top:10px;">
							 <b>สอบครั้งที่ 1 02/08/2558 </b> &nbsp;&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-thumbs-down" style="color:#8A0808;"></i> <b style="color:#8A0808;"> ไม่ผ่านการสอบ </b> <br>
						</div>

					</div>
				</div>
			</div>
		<?php }else if($param1==2){ ?>
			<div class="row preview" style="text-align:left;margin-top:5%">
				<div class="col-md-12 col-sm-12 " >
					<div class="panel panel-default" style="height:1700px;padding:5px;">
						<div class="panel-heading" ><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp; <?php echo $namepage?>  </div>
						<br>
						<div class="col-md-12 col-sm-12 " >
						<?php if($this->session->userdata('username')=='ms_user'){
							$fm = base_url().'assets/img/form2.jpg';
						}else{
							$fm = base_url().'assets/img/form1.jpg';
						}?>
							<img src="<?php echo $fm;?>" style="width:100%;">

						</div>
					</div>
				</div>
			</div>
		<?php }else if($param1==3){ ?>
		<?php } ?>
	</div><!--CeQe-->
	<div class="row" style="text-align:left;margin-top:5%;display:none"  >

		<div class="col-md-6 col-sm-12">
			<div class="panel panel-default" style="height:450px;padding:5px;">
				<div class="panel-heading" ><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp;ภาคนิพนธ์</div>
				<table  border="0" width="100%">
					<tr>
						<td align="right" width="30%"><p style="padding: 5px;">ชื่อภาคนิพนธ์ (TH) :</p></td>
						<td align="left">
							<p style="padding: 5px;text-align:right;">
								<button type="button" class="btn btn-danger btn-sm">ส่งหัวข้อภาคนิพนธ์</button>
							</p>
						</td>
					</tr>
					<tr>
						<td align="right" width="30%"><p>ชื่อภาคนิพนธ์ (EN) :</p></td>
						<td align="left"><p>  </p></td>
					</tr>
					<tr>
						<td align="right" width="30%"><p style="padding: 5px;">รายละเอียด :</p></td>
						<td align="left"><p style="padding: 5px;"> </p></td>
					</tr>
					<tr>
						<td align="right" width="30%"><p style="padding: 5px;">ผลงานวิจัย :</p></td>
						<td align="left"><p style="padding: 5px;"> </p></td>
					</tr>
					<tr>
						<td align="right" width="30%"><p style="padding: 5px;"><br></p></td>
						<td align="left"><p style="padding: 5px;"> </p></td>
					</tr>
					<tr>
						<td align="right" width="30%"><p style="padding: 5px;">วันส่งเล่มสมบูรณ์ :</p></td>
						<td align="left"><p style="padding: 5px;"> </p></td>
					</tr>
					<tr>
						<td align="right" width="30%"><p style="padding: 5px;">สถานะการส่งเล่ม :</p></td>
						<td align="left"><p style="padding: 5px;"> </p></td>
					</tr>
					<tr>
						<td align="right" width="30%"><p style="padding: 5px;">อาจารย์ที่ปรึกษาหลัก :</p></td>
						<td align="left">
							<p style="padding: 5px;text-align:right;">
								<button type="button" class="btn btn-danger btn-sm">ขอแต่งตั้งอาจารย์ที่ปรึกษาหลัก</button>
							</p>
						</td>
					</tr>
					<tr>
						<td align="right" width="30%"><p style="padding: 5px;">อาจารย์ที่ปรึกษาร่วม :</p></td>
						<td align="left">
							<p style="padding: 5px;text-align:right;">
								<button type="button" class="btn btn-danger btn-sm">ขอแต่งตั้งอาจารย์ที่ปรึกษาร่วม</button>
							</p>
						</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="col-md-6 col-sm-12 ">
			<div class="panel panel-default" style="height:450px;padding:5px;">
				<div class="panel-heading" ><i class="glyphicon glyphicon-tags"></i>&nbsp;&nbsp;ข่าวสารข้อมูล </div>
				<br>
				<b><a href="#">ประกาศผล ส่งหัวข้อภาคนิพนธ์</a></b><br>
				<b><a href="#">ประกาศ ตารางสอบหัวข้อภาคนิพนธ์</a></b><br>
				<b><a href="#">ประกาศมหาวิทยาลัย</a></b><br>
			</div>
		</div>
	</div>
