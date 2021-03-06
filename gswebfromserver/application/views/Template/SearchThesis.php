
<div class="main-header">
	<h2 class="Page-Heading"></h2>
	<!-- <em>submit ticket form</em> -->
</div>
<div class="main-content">

	<div class="row">
		<div class="col-md-12">


				<div class="widget-content" style="font-size: 12px;">
					<table id="LoadThesisAll" class="table table-bordered table-responsive table-sorting table-striped table-hover datatable dataTable no-footer" role="grid" aria-describedby="datatable-column-filter_info">
						<thead>
							<tr role="row">
								<th>รหัสวิทยานิพนธ์</th>
								<th>ชื่อวิทยานิพนธ์</th>
								<th>นักศึกษา</th>
								<th>คณะ</th>
								<th>สาขา/แผนการศึกษา</th>
								<th>ระดับการศึกษา</th>
								<th>ปีการศึกษา</th>
								<th>ประเภท</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($Result as $Result): ?>
								<tr role="row" class="odd">
									<td><?php echo $Result['THESISCODE']; ?></td>
									<td style="width: 15%;"><?php echo $Result['THESISNAME']; ?></td>
									<td>
										<p><span><?php echo $Result['STUDENTNAME']; ?></span> <span><?php echo $Result['STUDENTSURNAME']; ?></span></p>
										<p><span><?php echo $Result['STUDENTNAMEENG']; ?></span> <span><?php echo $Result['STUDENTSURNAMEENG']; ?></span></p>
									</td>
									<td><?php echo $Result['FACULTYNAME']; ?></td>
									<td style="width: 15%;"><?php echo $Result['DEPARTMENTNAME']; ?></td>
									<td><?php echo $Result['LEVELNAME']; ?></td>
									<td><?php echo $Result['CURRENTACADYEAR']; ?></td>
									<td><?php if($Result['THESISTYPE']=="T"){
										echo "<span class='label label-success' style='font-size: 12px;'>วิทยานิพนธ์</span>";
									}else if($Result['THESISTYPE']=="I"){
										echo "<span class='label label-info' style='font-size: 12px;'>ค้นคว้าอิศระ</span>";
									}else {
										echo "<span class='label label-danger' style='font-size: 12px;'>ไม่มีข้อมูล</span>";
									}?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
		</div>
	</div>
</div>
