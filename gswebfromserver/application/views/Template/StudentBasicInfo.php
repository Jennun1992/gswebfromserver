<div class="basic-info">

  <p class="data-row">
    <span class="data-name">รหัสนักศึกษา</span>
    <span class="data-value"><?php echo $Result[0]['STUDENTCODE'];?></span>
  </p>
  <p class="data-row">
    <span class="data-name">ชื่อ-สกุล ภาษาไทย</span>
    <span class="data-value"><?php echo $Result[0]['STUDENTNAME']?> <?php echo $Result[0]['STUDENTSURNAME'];?></span>
  </p>
  <p class="data-row">
    <span class="data-name">ชื่อ-สกุล ภาษาอังกฤษ</span>
    <span class="data-value"><?php echo $Result[0]['STUDENTNAMEENG']?> <?php echo $Result[0]['STUDENTSURNAMEENG'];?></span>
  </p>
  <p class="data-row">
    <span class="data-name">คณะ</span>
    <span class="data-value"><?php echo $Result[0]['FACULTYNAME'];?></span>
  </p>
  <p class="data-row">
    <span class="data-name">สาขา/แผนการศึกษา</span>
    <span class="data-value"><?php echo $Result[0]['DEPARTMENTNAME'];?></span>
  </p>
  <p class="data-row">
    <span class="data-name">ระดับการศึกษา</span>
    <span class="data-value"><?php echo $Result[0]['LEVELNAME']; ?></span>
  </p>
  <p class="data-row">
    <span class="data-name">ปีการศึกษา</span>
    <span class="data-value"><?php echo $Result[0]['ACADYEAR'];?></span>
  </p>
</div>
