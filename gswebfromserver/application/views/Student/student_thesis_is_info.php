  <div class="wrapper">
    <div class="main-content">
      <ul class="nav nav-tabs nav-tabs-custom-colored tabs-iconized">
        <li class="active"><a href="#profile-tab" data-toggle="tab"><i class="fa fa-user"></i>   ข้อมูลนักศึกษา</a></li>
        <li><a href="#activity-tab" data-toggle="tab"><i class="fa fa-rss"></i> ข้อมูลวิทยานิพนธ์</a></li>
        <li><a href="#settings-tab" data-toggle="tab"><i class="fa fa-gear"></i> อาจารย์ที่ปรึกษา</a></li>
      </ul>
      <div class="tab-content profile-page">
        <?php $this->load->view('Student/Page/student_thesis_is_info_stdprofile'); ?>
        <?php $this->load->view('Student/Page/student_thesis_is_info_stdthesis_is'); ?>
        <?php $this->load->view('Student/Page/student_thesis_is_info_adviser'); ?>
      </div>
    </div>
  </div>
