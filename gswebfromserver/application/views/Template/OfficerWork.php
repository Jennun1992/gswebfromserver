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
          <?php foreach ($Result['WorkByOfficer'] as $Result['WorkByOfficer']): ?>
            <tr role="row" class="odd">
              <td><?php echo $Result['WorkByOfficer']['COURSEID']; ?></td>
              <td><?php echo $Result['WorkByOfficer']['COURSENAME']; ?></td>
              <td><?php echo $Result['WorkByOfficer']['SECTION']; ?></td>
              <td><?php echo $Result['WorkByOfficer']['ACADYEAR']; ?></td>
              <td><?php echo $Result['WorkByOfficer']['ENROLLSEAT']; ?> คน</td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
