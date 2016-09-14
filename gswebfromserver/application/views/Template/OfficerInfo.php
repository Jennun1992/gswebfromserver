<!-- PROFILE TAB CONTENT -->
<div class="content-wrapper" style="margin-left:20px">

  <div class="main-header">
    <h2 class="Page-Heading"><i class="glyphicon glyphicon-education"></i><span class="text"> ข้อมูลอาจารย์</span></h2>
    </div>

    <div class="main-content">
      <ul class="nav nav-tabs nav-tabs-custom-colored tabs-iconized">
									<li class="active"><a href="#profile-tab" data-toggle="tab"><i class="fa fa-user"></i> ข้อมูลพื้นฐาน</a></li>
									<li><a href="#activity-tab" data-toggle="tab"><i class="fa fa-rss"></i> ภาระงานสอน</a></li>
									<li><a href="#settings-tab" data-toggle="tab"><i class="fa fa-gear"></i> ภาระงานที่ปรึกษา</a></li>
								</ul>

                <div class="tab-content profile-page">
									<!-- PROFILE TAB CONTENT -->
									<div class="tab-pane profile active" id="profile-tab">
                    <div class="widget-content">
                      <?php $this->load->view('Template/OfficerBasicInfo'); ?>
                    </div>
									</div>
									<!-- END PROFILE TAB CONTENT -->
									<!-- ACTIVITY TAB CONTENT -->
									<div class="tab-pane activity" id="activity-tab">
									<?php $this->load->view('Template/OfficerWork'); ?>
									</div>
									<!-- END ACTIVITY TAB CONTENT -->
									<!-- SETTINGS TAB CONTENT -->
									<div class="tab-pane settings" id="settings-tab">
										<?php $this->load->view('Template/StudentByOfficer'); ?>
									</div>
									<!-- END SETTINGS TAB CONTENT -->
								</div>



      <!-- END PROFILE TAB CONTENT -->

    </div>
  </div>
