
<div class="main-header">
	<h2 class="Page-Heading"><i class="glyphicon glyphicon-education"></i><span class="text">ข้อมูลนักศึกษา และอนุมัติเอกสาร</span></h2>
</div>
<div class="main-content">

	<div class="row">
		<div class="col-md-12">
			<div class="widget-content" style="font-size: 12px;">
				<table id="ManageStudents" class="table table-bordered table-responsive table-sorting table-striped table-hover datatable dataTable no-footer" role="grid" aria-describedby="datatable-column-filter_info">
					<thead>
						<tr role="row">
							<th>รหัสนักศึกษา</th>
							<th>ชื่อ-นามสกุล</th>
							<th>คณะ</th>
							<th>สาขา/แผนการศึกษา</th>
							<th>ระดับการศึกษา</th>
							<th>ปีการศึกษา</th>
							<th>สถานภาพ</th>
							<th>เพิ่มเติม</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($Result as $Result): ?>
							<tr role="row" class="odd">
								<td><?php echo $Result['STUDENTCODE']; ?></td>
								<td>
									<p><span><?php echo $Result['STUDENTNAME']; ?></span> <span><?php echo $Result['STUDENTSURNAME']; ?></span></p>
									<p><span><?php echo $Result['STUDENTNAMEENG']; ?></span> <span><?php echo $Result['STUDENTSURNAMEENG']; ?></span></p>
								</td>
								<td><?php echo $Result['FACULTYNAME']; ?></td>
								<td><?php echo $Result['DEPARTMENTNAME']; ?></td>
								<td><?php echo $Result['LEVELNAME']; ?></td>
								<td><?php echo $Result['CURRENTACADYEAR']; ?></td>
								<td><?php echo $Result['procedure_name']; ?></td>
								<td><a href="<?php echo site_url('graduate/StudentInfo/'); ?>/<?php echo $Result['STUDENTID']; ?>" class="btn btn-info">รายละเอียด</a></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
