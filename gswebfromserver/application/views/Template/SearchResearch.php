
<div class="main-header">
	<h2 class="Page-Heading"></h2>
	<!-- <em>submit ticket form</em> -->
</div>
<div class="main-content">

	<div class="row">
		<div class="col-md-12">


				<div class="widget-content" style="font-size: 12px;">
					<table id="LoadResearchAll" class="table table-bordered table-responsive table-sorting table-striped table-hover datatable dataTable no-footer" role="grid" aria-describedby="datatable-column-filter_info">
						<thead>
							<tr role="row">
								<th>รหัสงานวิจัย</th>
								<th>ชื่อวิจัย</th>
								<th>นักศึกษา</th>
								<th>คณะ</th>
								<th>สาขา/แผนการศึกษา</th>
								<th>ระดับการศึกษา</th>
								<th>ปีการศึกษา</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($Result as $Result): ?>
								<tr role="row" class="odd">
									<td><?php echo $Result['RESEARCHCODE']; ?></td>
									<td style="width: 15%;"><?php echo $Result['RESEARCHNAME']; ?></td>
									<td>
										<p><span><?php echo $Result['STUDENTNAME']; ?></span> <span><?php echo $Result['STUDENTSURNAME']; ?></span></p>
										<p><span><?php echo $Result['STUDENTNAMEENG']; ?></span> <span><?php echo $Result['STUDENTSURNAMEENG']; ?></span></p>
									</td>
									<td><?php echo $Result['FACULTYNAME']; ?></td>
									<td style="width: 15%;"><?php echo $Result['DEPARTMENTNAME']; ?></td>
									<td><?php echo $Result['LEVELNAME']; ?></td>
									<td><?php echo $Result['CURRENTACADYEAR']; ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
		</div>
	</div>
</div>
