<div class="main-header">
	<h2 class="Page-Heading"></h2>
</div>
<div class="main-content">
  <div class="row">
    <div class="col-md-12">
      <table id="OfficersAll" class="table table-bordered table-responsive table-sorting table-striped table-hover datatable dataTable no-footer" role="grid" aria-describedby="datatable-column-filter_info">
        <thead>
          <tr role="row">
            <th>รหัส</th>
            <th>ชื่อ-สกุล</th>
            <th>คณะ</th>
            <th>สาขา</th>

            <th>รายละเอียด</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($Result as $Result): ?>
            <tr role="row" class="odd">
              <td><?php echo $Result['OFFICERCODE']; ?></td>
              <td>
                <p><span><?php echo $Result['OFFICERNAME']; ?></span> <span><?php echo $Result['OFFICERSURNAME']; ?></span></p>
                <p><span><?php echo $Result['OFFICERNAMEENG']; ?></span> <span><?php echo $Result['OFFICERSURNAMEENG']; ?></span></p>
              </td>
              <td><?php echo $Result['FACULTYNAME']; ?></td>
              <td><?php echo $Result['DEPARTMENTNAME']; ?></td>


              	<td><a href="<?php echo site_url('Graduate/OfficerInfo/'); ?>/<?php echo $Result['OFFICERID']; ?>" class="btn btn-info">รายละเอียด</a></td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
