<!-- PROFILE TAB CONTENT -->
<style>
#image-preview {
  width: 125px;
height: 155px;
  position: relative;
  overflow: hidden;
  background-color: #ffffff;
  color: #ecf0f1;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
#image-preview  input {
  line-height: 200px;
  font-size: 200px;
  position: absolute;
  opacity: 0;
  z-index: 10;
}
#image-preview  label {
  position: absolute;
  z-index: 5;
  opacity: 0.8;
  cursor: pointer;
  background-color: #bdc3c7;
  /*width: 50px;*/
  height: 50px;
  font-size: 20px;
  line-height: 50px;
  text-transform: uppercase;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  text-align: center;
}
</style>
<script type="text/javascript">
        $(document).ready(function() {
          $.uploadPreview({
            input_field: "#image-upload",
            preview_box: "#image-preview",
            label_field: "#image-label",
          });
        });
        </script>

  <div class="row">
    <div class="col-md-3">
    <div class="user-info-left">
      <div>
        <?php echo form_open_multipart('/teacher/changepicprofile/'); ?>

        <div id="image-preview" class="img-thumbnail"
        style="background-image: url('<?php echo base_url(); ?>/image/officer/<?php
        isset($Result[0]['OFFICER_PIC']) ? $Result[0]['OFFICER_PIC'] : $Result[0]['OFFICER_PIC'] = 'user.png';
        echo $Result[0]['OFFICER_PIC']; ?>'); background-size: cover; background-position: center top;"
        >
          <!-- <label for="image-upload" id="image-label">รูปโปรไฟล์</label> -->
          <input type="file" name="image" id="image-upload" required="required" onChange="this.form.submit();">
        <?php echo form_close(); ?>
        </div>
      </div>
      <h4 class="text-center"><span><?php echo $Result[0]['OFFICERNAME']?></span> <span><?php echo $Result[0]['OFFICERSURNAME'];?></span></h4>
    </div>
  </div>
    <div class="col-md-9">
      <div class="user-info-right">
        <div class="basic-info">
          <h3><i class="fa fa-square"></i> ข้อมูลพื้นฐาน</h3>
          <p class="data-row">
            <span class="data-name">รหัสอาจารย์</span>
            <span class="data-value"><?php echo $Result[0]['OFFICERCODE'];?></span>
          </p>
          <p class="data-row">
            <span class="data-name">ชื่อ-สกุล ภาษาไทย</span>
            <span class="data-value"><?php echo $Result[0]['OFFICERNAME']?></span>
            <span class="data-value"><?php echo $Result[0]['OFFICERSURNAME'];?></span>
          </p>
          <p class="data-row">
            <span class="data-name">ชื่อ-สกุล ภาษาอังกฤษ</span>
            <span class="data-value"><?php echo $Result[0]['OFFICERNAMEENG']?></span>
            <span class="data-value"><?php echo $Result[0]['OFFICERSURNAMEENG'];?></span>
          </p>
          <p class="data-row">
            <span class="data-name">ภาควิชา/สาขาวิชา/กลุ่มวิชา</span>
            <span class="data-value"><?php echo $Result[0]['DEPARTMENTNAME'];?></span>
          </p>
          <p class="data-row">
            <span class="data-name">คณะ</span>
            <span class="data-value"><?php echo $Result[0]['FACULTYNAME'];?></span>
          </p>
          <p class="data-row">
            <span class="data-name">ความเชี่ยวชาญพิเศษ</span>
            <span class="data-value">-</span>
          </p>
          <p class="data-row">
            <span class="data-name">อีเมล</span>
            <span class="data-value"><?php echo $Result[0]['OFFICEREMAIL'];?></span>
          </p>
        </div>

      </div>
    </div>
  </div>

<!-- END PROFILE TAB CONTENT -->
