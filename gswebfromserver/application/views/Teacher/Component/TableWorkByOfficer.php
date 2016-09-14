<div class="row">
	<div class="col-md-12">
		<div class="widget-content" style="font-size: 12px;">
			<table id="WorkByOfficer" class="table table-bordered table-responsive table-sorting table-striped table-hover datatable dataTable no-footer" role="grid" aria-describedby="datatable-column-filter_info">
				<thead>
					<tr role="row">
						<th>รหัสวิชา</th>
						<th>ชื่อวิชา</th>
						<th>หมู่เรียน</th>
						<th>ปีการศึกษา</th>
						<th>จำนวนนักศึกษา</th>
					</tr>
				</thead>
				<!-- PROGRAMID	SEQUENCE	OFFICERID	CITIZENID -->
				<tbody>
					<?php foreach ($Result as $Result): ?>
						<tr role="row" class="odd">
							<td><?php echo $Result['COURSEID']; ?></td>
							<td><?php echo $Result['COURSENAME']; ?></td>
							<td><?php echo $Result['SECTION']; ?></td>
							<td><?php echo $Result['ACADYEAR']; ?></td>
							<td><?php echo $Result['ENROLLSEAT']; ?> คน</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
