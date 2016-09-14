<div class="tab-pane profile active" id="profile-tab">
  <div class="row">
    <div class="col-md-3">
      <div class="user-info-left">
        <img src="<?php echo base_url();?>assets/img/profile-avatar.png" alt="Profile Picture">
        <h2 style="text-align:center">
          <p>
            <?php echo $student_info[0]['PREFIXNAME'].$student_info[0]['STUDENTNAME']."   ".$student_info[0]['STUDENTSURNAME'];?>
          </p>
          <p>
            <?php echo $student_info[0]['PREFIXNAMEENG'].$student_info[0]['STUDENTNAMEENG']."   ".$student_info[0]['STUDENTSURNAMEENG'];?>
          </p>
        </h2>
        <div class="contact">
          <ul class="list-inline social">
            <li><a href="#" title="Facebook"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="mailto:<?php echo $student_info[0]['STUDENTEMAIL']?>" title="Email"><i class="fa fa-envelope-square"></i></a></li>
            <li><a href="#" title="Google Plus"><i class="fa fa-google-plus-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="user-info-right">
        <div class="basic-info">
          <h3><i class="fa fa-square"></i> ข้อมูลพื้นฐาน</h3>
          <table class="table">
            <tbody>
              <tr>
                <td class="success col-md-3 p_topic">รหัสนักศึกษา</td>
                <td><?php echo $student_info[0]['STUDENTID'];?></td>
              </tr>
              <tr>
                <td class="success p_topic">ระดับการศึกษา</td>
                <td><?php echo $student_info[0]['LEVELNAME'];?> </td>
              </tr>
              <tr>
                <td class="success p_topic">คณะ</td>
                <td><?php echo $student_info[0]['FACULTYNAME'];?></td>
              </tr>
              <tr>
                <td class="success p_topic">ภาควิชา/สาขาวิชา/กลุ่มวิชา</td>
                <td><?php echo $student_info[0]['DEPARTMENTNAME'];?></td>
              </tr>
              <tr>
                <td class="success p_topic">วิทยาเขต</td>
                <td><?php echo $student_info[0]['CAMPUSNAME'];?></td>
              </tr>
              <tr>
                <td class="success p_topic">แผนการศึกษา</td>
                <td><?php echo $student_info[0]['PROGRAMNAME'];?></td>
              </tr>
              <tr>
                <td class="success p_topic">ความสามารถทาง ภาษาต่างประเทศ</td>
                <td>-</td>
              </tr>
              <tr>
                <td class="success p_topic">สถานภาพ</td>
                <td><?php echo $student_info[0]['procedure_name'];?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
