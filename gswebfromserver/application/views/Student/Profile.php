<?php $this->load->view('/Student/Header'); ?>
	<div class="row" >  
		<div class="col-md-2 col-sm-4" style="text-align:center;"> 
			<p style="padding: 10px;">
				<img alt="" width="100%"  src="<?php echo base_url().'assets/img/profile-studen.png';?>" data-holder-rendered="true" style=" display: block;">
			</p>
		</div> 
		<div class="col-md-5 col-sm-12" >
			<table border="0" width="100%">
				<tr>
					<td align="right" width="50%"><p style="padding-right: 3px;">รหัส :</p></td>
					<td align="left"><p style="padding: 3px;">59123435678</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding-right: 3px;">ชื่อ-สกุล (ภาษาไทย) :</p></td>
					<td align="left"><p style="padding: 3px;">นายสมชาย ใจดีมาก</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding-right: 3px;">แผนการเรียน :</p></td>
					<td align="left"><p style="padding: 3px;">ภาคปกติ</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding-right: 3px;">สถานะภาพ :</p></td>
					<td align="left"><p style="padding: 3px;">กำลังศึกษา</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding-right: 3px;">วันเข้าศึกษา :</p></td>
					<td align="left"><p style="padding: 3px;">16/07/2559</p></td>
				</tr>
			</table>
		</div> 
		<div class="col-md-5 col-sm-12" >
			<table  border="0" width="100%">
				<tr>
					<td align="right" width="50%"><p style="padding: 3px;">ระดับการศึกษา :</p></td>
					<td align="left"><p style="padding: 3px;">ปริญญาโท</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 3px;">ชื่อๅสกุล (ภาษาอังกฤษ) :</p></td>
					<td align="left"><p style="padding: 3px;">Somchai Jaidemark</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 3px;">คณะ :</p></td>
					<td align="left"><p style="padding: 3px;">ศึกษาศาสตร์</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 3px;">ภาษาต่างประเทศ :</p></td>
					<td align="left"><p style="padding: 3px;">ผ่าน</p></td>
				</tr>
			</table>
		</div>
		 
	</div>
	<div class="row" style="text-align:left;margin-top:2%">
		<div class="col-md-6 col-sm-12 " >
			<div class="panel panel-default" style="height:260px;padding:5px;"> 
				<div class="panel-heading" ><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp; แก้ไขข้อมูลส่วนตัว</div>
				<br>   
				<div class="col-sm-12" style="margin-top:10px;">
					<label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:10px;">ที่อยู่</label>
					<div class="col-sm-8">
						<input type="text" class="form-control col-md-12" id="address" placeholder="Address">
					</div>
				</div>  
				<div class="col-sm-12" style="margin-top:10px;">
					<label for="email" class="col-sm-3 control-label" style="text-align:right;padding-top:10px;">ชื่อเข้าใช้</label>
					<div class="col-sm-8">
						<input type="email" class="form-control col-sm-12" id="email" placeholder="Email">
					</div>
				</div>   
				<div class="col-sm-12" style="margin-top:10px;">
					<label for="phonenumber" class="col-sm-3 control-label" style="text-align:right;padding-top:10px;">เบอร์โทร</label>
					<div class="col-sm-8">
						<input type="text" class="form-control col-sm-12" id="phonenumber" placeholder="Phone Number">
					</div>
				</div>  
				<div class="col-sm-12" style="text-align:center;"><br>
					<button type="submit" class="btn btn-primary btn-sm">ยืนยันการแก้ไขรหัสผ่าน</button>
					<br>
				</div> 
			</div>
		</div> 
		<div class="col-md-6 col-sm-12 " >
			<div class="panel panel-default" style="height:260px;padding:5px;"> 
				<div class="panel-heading" ><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp; แก้ไขรหัสผ่าน</div>
				<br>   
				<div class="col-sm-12" style="margin-top:10px;">
					<label for="address" class="col-md-3 col-sm-2 control-label" style="text-align:right;padding-top:10px;">รหัสผ่านเดิม</label>
					<div class="col-sm-8">
						<input type="password" class="form-control col-sm-12" id="address" placeholder="Old Password">
					</div>
				</div>  
				<div class="col-sm-12" style="margin-top:10px;">
					<label for="email" class="col-sm-3 control-label" style="text-align:right;padding-top:10px;">รหัสผ่านใหม่</label>
					<div class="col-sm-8">
						<input type="password" class="form-control col-sm-12" id="email" placeholder="New Password">
					</div>
				</div>   
				<div class="col-sm-12" style="margin-top:10px;">
					<label for="phonenumber" class="col-sm-3 control-label" style="text-align:right;padding-top:10px;">ยืนยันรหัสผ่าน</label>
					<div class="col-sm-8">
						<input type="password" class="form-control col-sm-12" id="phonenumber" placeholder="Confirm Password">
					</div>
				</div>   
				<div class="col-sm-12" style="text-align:center;"><br>
					<button type="submit" class="btn btn-primary btn-sm">ยืนยันการแก้ไขรหัสผ่าน</button>
					<br>
				</div> 
			</div>
		</div> 
	</div> 

<?php $this->load->view('/Student/Footer'); ?>   









