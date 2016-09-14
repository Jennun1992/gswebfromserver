<div class="main-header">
  <h2 class="Page-Heading">
    <?php if ($this->uri->segment(2)=='GraduateProgramsFilter'): ?>
      ผลการค้นหา
    <?php endif; ?>
  </h2>
  <!-- <em>submit ticket form</em> -->
  <button type="button" class="btn btn-primary" onClick="window.location.href='<?php echo site_url(); ?>/graduate/FormEditProgram'" ><i class="glyphicon glyphicon-edit"></i> สร้างใหม่</button>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="widget">
      <div class="widget-header">
        <h3><i class="glyphicon glyphicon-filter"></i> ค้นหา</h3>
      </div>
      <div class="widget-content">
        <?php echo form_open('Graduate/GraduateProgramsFilter'); ?>
        <div class="form-inline" role="form">
          <div class="form-group">
            <label class="sr-only" for="programname">หลักสูตร</label>
            <input class="form-control" id="programname" name="programname" type="text" placeholder="หลักสูตร">
          </div>
          <div class="form-group">
            <label class="sr-only" for="facultyname">คณะ</label>
            <input class="form-control" id="facultyname" name="facultyname" type="text" placeholder="คณะ">
          </div>
          <div class="form-group">
            <label class="sr-only" for="departmentname">สาขา</label>
            <input class="form-control" id="departmentname" name="departmentname" type="text" placeholder="สาขา">
          </div>
          <div class="form-group">
            <label class="sr-only" for="levelname">ระดับปริญญา</label>
            <input class="form-control" id="levelname" name="levelname" type="text" placeholder="ระดับปริญญา">
          </div>
        </div>
      </div>
      <div class="widget-content">
        <div class="form-inline" role="form">
          <div class="form-group">
            <label class="sr-only" for="programyearfor">ตั้งแต่ปีการศึกษา</label>
            <input class="form-control" id="programyearfor" name="programyearfor" type="text" placeholder="ตั้งแต่ปีการศึกษา">
          </div>
          <div class="form-group">
            <label class="sr-only" for="programyearto">ถึงปีการศึกษา</label>
            <input class="form-control" id="programyearto" name="programyearto" type="text" placeholder="ถึงปีการศึกษา">
          </div>
          <button class="btn btn-info" type="submit">ค้นหา</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="widget widget-table">
      <table id="ProgramsFilter" class="table table-responsive table-sorting table-striped table-hover datatable dataTable no-footer" role="grid" aria-describedby="datatable-column-filter_info">
        <thead>
          <tr role="row">
            <th>ชื่อหลักสูตร</th>
            <th>คณะ</th>
            <th>สาขาวิชา</th>
            <th>ระดับปริญญา</th>

            <th>ปีการศึกษา</th>
            <th>นักศึกษา</th>
            <th>เพิ่มเติม</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($Result as $Result): ?>
            <tr role="row" class="odd">
              <td><?php echo $Result['PROGRAMNAME']; ?></td>
              <td><?php echo $Result['FACULTYNAME']; ?></td>
              <td><?php echo $Result['DEPARTMENTNAME']; ?></td>
              <td><?php echo $Result['LEVELNAME']; ?></td>
              <td style="width:10%"><?php echo $Result['PROGRAMYEAR']; ?></td>
              <th style="width:10%"><?php echo $Result['AMT_STD']; ?> คน</th>
              <th style="width:10%"><a class="btn btn-info" href="<?php echo site_url(); ?>/graduate/FormEditProgram/<?php echo $Result['PROGRAMID']; ?>">รายละเอียด</a></th>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
