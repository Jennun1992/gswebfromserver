<!-- END NAV TABS -->
<div class="tab-content profile-page">
  <!-- PROFILE TAB CONTENT -->
  <div class="tab-pane profile active" id="profile-tab">
    <div class="row">
      <div class="col-md-3">
        <div class="user-info-left">
          <img src="<?php echo base_url();?>assets/img/profile-avatar.png" alt="Profile Picture">
          <h2 style="text-align:center">
            <?=$officer_info[0]['PREFIXNAME'].$officer_info[0]['OFFICERNAME']."   ".$officer_info[0]['OFFICERSURNAME'];?><br />
            <?=$officer_info[0]['PREFIXNAMEENG'].$officer_info[0]['OFFICERNAMEENG']."   ".$officer_info[0]['OFFICERSURNAMEENG'];?>
           </h2>
          <div class="contact">
            <!-- <a href="#" class="btn btn-block btn-custom-primary"><i class="fa fa-envelope-o"></i> Send Message</a>
                          <a href="#" class="btn btn-block btn-custom-secondary"><i class="fa fa-book"></i> Add To Contact</a> -->
            <ul class="list-inline social">
              <li><a href="#" title="Facebook"><i class="fa fa-facebook-square"></i></a></li>
              <li><a href="#" title="Twitter"><i class="fa fa-twitter-square"></i></a></li>
              <li><a href="#" title="Google Plus"><i class="fa fa-google-plus-square"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="user-info-right">
          <div class="basic-info">
            <h3><i class="fa fa-square"></i> ข้อมูลพื้นฐาน</h3>
            <p class="data-row">
              <span class="data-name">รหัสอาจารย์</span>
              <span class="data-value"><?php echo $officer_info[0]['OFFICERCODE'];?></span>
            </p>
            <p class="data-row">
              <span class="data-name">ชื่อ-สกุล ภาษาไทย</span>
              <span class="data-value"><?php echo $officer_info[0]['OFFICERNAME']?></span>
              <span class="data-value"><?php echo $officer_info[0]['OFFICERSURNAME'];?></span>
            </p>
            <p class="data-row">
              <span class="data-name">ชื่อ-สกุล ภาษาอังกฤษ</span>
              <span class="data-value"><?php echo $officer_info[0]['OFFICERNAMEENG']?></span>
              <span class="data-value"><?php echo $officer_info[0]['OFFICERSURNAMEENG'];?></span>
            </p>
            <p class="data-row">
              <span class="data-name">ภาควิชา/สาขาวิชา/กลุ่มวิชา</span>
              <span class="data-value"><?php echo $officer_info[0]['DEPARTMENTNAME'];?></span>
            </p>
            <p class="data-row">
              <span class="data-name">คณะ</span>
              <span class="data-value"><?php echo $officer_info[0]['FACULTYNAME'];?></span>
            </p>
            <p class="data-row">
              <span class="data-name">ความเชี่ยวชาญพิเศษ</span>
              <span class="data-value">-</span>
            </p>
            <p class="data-row">
              <span class="data-name">อีเมล</span>
              <span class="data-value"><?php echo $officer_info[0]['OFFICEREMAIL'];?></span>
            </p>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- END PROFILE TAB CONTENT -->



</div>
