<div class="wrapper" style="margin-left:20px">

  <div class="main-content">
    <!-- NAV TABS -->
    <ul class="nav nav-tabs nav-tabs-custom-colored tabs-iconized">
      <li class="active"><a href="#profile-tab" data-toggle="tab"><i class="fa fa-user"></i>   ข้อมูลอาจารย์</a></li>
      <li><a href="#activity-tab" data-toggle="tab"><i class="fa fa-rss"></i> ข้อมูลอาจารย์วิทยานิพนธ์</a></li>
      <li><a href="#settings-tab" data-toggle="tab"><i class="fa fa-gear"></i> ข้อมูลอาจารย์ค้นคว้าอิสระ</a></li>
    </ul>
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
      <!-- ACTIVITY TAB CONTENT -->
      <div class="tab-pane activity" id="activity-tab">
        <h3><i class="fa fa-square"></i> วิทยานิพนธ์</h3>


        <div class="inbox">

          <div class="top">
            <div class="row">
              <div class="col-lg-2">
                <button class="btn btn-primary btn-block btn-compose"><i class="fa fa-pencil"></i> อาจารย์ที่ปรึกษาหลัก</button>
              </div>
              <div class="col-lg-10">
                <div class="top-menu">

                  <ul class="list-inline top-menu-group1 hide">

                    <li>
                      <div class="btn-group">
                        <!-- <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-folder"></i> MOVE <span class="caret"></span>
                        </button> -->
                        <ul class="dropdown-menu">

                        </ul>
                      </div>
                    </li>
                  </ul>
                  <ul class="list-inline top-menu-group2">
                    <li class="top-menu-label hide">

                    </li>
                    <li class="top-menu-more">
                      <div class="btn-group">  &nbsp;<br />   &nbsp;</div>
                    </li>
                  </ul>
                  <div class="navigation">
                    <button type="button" class="btn btn-link hidden-sm hidden-md hidden-lg inbox-nav-toggle"><i class="fa fa-bars"></i></button>
                    <div class="pager-wrapper">

                    </div>
                  </div>
                </div>
                <!-- /top-menu -->
              </div>
            </div>
            <!-- /row -->
          </div>
          <!-- /top -->
          <div class="bottom">
            <div class="row">
              <!-- inbox left menu -->
              <div class="col-xs-12 col-sm-3 col-lg-2 inbox-left-menu">
                <h3 class="sr-only">Inbox Menu</h3>
                <div class="labels">
                </div>
              </div>
              <!-- end inbox left menu -->
              <!-- right main content, the messages -->
              <div class="col-xs-12 col-sm-9 col-lg-10">
                <div class="messages">
                  <div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>#</th>
                          <th>รหัสนักศึกษา</th>
													<th>ชื่อ-นามสกุล</th>
													<th>คณะ</th>
													<th>สาขา/แผนการศึกษา</th>
													<th>ระดับการศึกษา</th>
													<th>สถานภาพ</th>
													<th>คำสั่ง</th>
												</tr>
											</thead>
											<tbody>
                  <?php $i=0; ?>
                  <?php foreach ($stds_in_adviser as $key => $value) { ?>

												<tr>
                          <td>
                            <a href="<?php echo base_url();?>index.php/Student/student_thesis_is_info/<?php echo $value['STUDENTID'];?>">
                                <?php echo $value['STUDENTID'];?>
                            </a>
                          </td>
                          <td>
                            <a href="<?php echo base_url();?>index.php/Student/student_thesis_is_info/<?php echo $value['STUDENTID'];?>">
                              <?php echo $value['STUDENTNAME']." ".$value['STUDENTSURNAME'];?>
                            </a>
                          </td>
													<td><?php echo $value['STUDENTNAME']." ".$value['STUDENTSURNAME'];?></td>
													<td><?php echo $value['FACULTYNAME'];?></td>
													<td><?php echo $value['DEPARTMENTNAME'];?></td>
													<td><?php echo $value['LEVELNAME'];?></td>
													<td><?php echo $value['STUDENTSTATUS'];?></td>
													<td><?php echo $value['COMMAND_No'];?></td>
												</tr>
									<?php } ?>
                        <tr>
                          <td colspan="8" style="text-align:right;background:#f2dede">
                              รวมทั้งหมด&nbsp;<?php echo $i; ?>&nbsp;รายการ
                          </td>
                        </tr>
											</tbody>
										</table>
										</div>
                </div>
              </div>
              <!-- end right main content, the messages -->
            </div>
          </div>
        </div>

          <br />
        <div class="inbox">

          <div class="top">
            <div class="row">
              <div class="col-lg-2">
                <button class="btn btn-primary btn-block btn-compose"><i class="fa fa-pencil"></i> อาจารย์ที่ปรึกษารอง</button>
              </div>
              <div class="col-lg-10">
                <div class="top-menu">

                  <ul class="list-inline top-menu-group1 hide">
                    <li>
                    </li>
                    <li>

                    </li>
                  </ul>
                  <ul class="list-inline top-menu-group2">
                    <li class="top-menu-label hide">

                    </li>
                    <li class="top-menu-more">
                      <div class="btn-group">  &nbsp;<br />   &nbsp;</div>
                    </li>
                  </ul>
                  <div class="navigation">
                    <button type="button" class="btn btn-link hidden-sm hidden-md hidden-lg inbox-nav-toggle">
                      <i class="fa fa-bars"></i></button>
                    <div class="pager-wrapper">

                    </div>
                  </div>
                </div>
                <!-- /top-menu -->
              </div>
            </div>
            <!-- /row -->
          </div>
          <!-- /top -->
          <div class="bottom">
            <div class="row">
              <!-- inbox left menu -->
              <div class="col-xs-12 col-sm-3 col-lg-2 inbox-left-menu">
                <h3 class="sr-only">Inbox Menu</h3>
                <div class="labels"></div>
              </div>
              <!-- end inbox left menu -->
              <!-- right main content, the messages -->
              <div class="col-xs-12 col-sm-9 col-lg-10">
                <div class="messages">
                  <div class="table-responsive">
													<table class="table">
														<thead>
                              <tr>
      													<th>#</th>
                                <th>รหัสนักศึกษา</th>
      													<th>ชื่อ-นามสกุล</th>
      													<th>คณะ</th>
      													<th>สาขา/แผนการศึกษา</th>
      													<th>ระดับการศึกษา</th>
      													<th>สถานภาพ</th>
      													<th>คำสั่ง</th>
      												</tr>
														</thead>
														<tbody>
                              <?php $i=0; ?>
                              <?php foreach ($stds_in_subadviser as $key => $value) { ?>

            												<tr>
            													<td><?php echo  ++$i; ?></td>
                                      <td>
                                        <a href="<?php echo base_url();?>index.php/Student/student_thesis_is_info/<?php echo $value['STUDENTID'];?>">
                                            <?php echo $value['STUDENTID'];?>
                                        </a>
                                      </td>
            													<td>
                                        <a href="<?php echo base_url();?>index.php/Student/student_thesis_is_info/<?php echo $value['STUDENTID'];?>">
                                          <?php echo $value['STUDENTNAME']." ".$value['STUDENTSURNAME'];?>
                                        </a>
                                      </td>
            													<td><?php echo $value['FACULTYNAME'];?></td>
            													<td><?php echo $value['DEPARTMENTNAME'];?></td>
            													<td><?php echo $value['LEVELNAME'];?></td>
            													<td><?php echo $value['STUDENTSTATUS'];?></td>
            													<td><?php echo $value['COMMAND_No'];?></td>
            												</tr>
            									<?php } ?>
                                    <tr>
                                      <td colspan="8" style="text-align:right;background:#f2dede">
                                          รวมทั้งหมด&nbsp;<?php echo $i; ?>&nbsp;รายการ
                                      </td>
                                    </tr>
														</tbody>
													</table>
											</div>
                </div>
              </div>
              <!-- end right main content, the messages -->
            </div>
          </div>
        </div>
      </div>
      <!-- END SETTINGS TAB ACTIVITY -->

      <!-- ACTIVITY TAB SETTING -->
      <div class="tab-pane activity" id="settings-tab">
        <h3><i class="fa fa-square"></i> ค้นคว้าอิสระ</h3>


        <div class="inbox">

          <div class="top">
            <div class="row">
              <div class="col-lg-2">
                <button class="btn btn-primary btn-block btn-compose"><i class="fa fa-pencil"></i> อาจารย์ที่ปรึกษาหลัก</button>
              </div>
              <div class="col-lg-10">
                <div class="top-menu">

                  <ul class="list-inline top-menu-group1 hide">
                    <li>

                    </li>
                    <li>
                    </li>
                    <li>
                      <div class="btn-group">
                        <!-- <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-folder"></i> MOVE <span class="caret"></span>
                        </button> -->
                        <ul class="dropdown-menu">
                          <li><a href="#">My Folder</a></li>
                          <li><a href="#">My Other Folder</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                  <ul class="list-inline top-menu-group2">
                    <li class="top-menu-label hide">

                    </li>
                    <li class="top-menu-more">
                      <div class="btn-group">  &nbsp;<br />   &nbsp;</div>
                    </li>
                  </ul>
                  <div class="navigation">
                    <button type="button" class="btn btn-link hidden-sm hidden-md hidden-lg inbox-nav-toggle"><i class="fa fa-bars"></i></button>
                    <div class="pager-wrapper">

                    </div>
                  </div>
                </div>
                <!-- /top-menu -->
              </div>
            </div>
            <!-- /row -->
          </div>
          <!-- /top -->
          <div class="bottom">
            <div class="row">
              <!-- inbox left menu -->
              <div class="col-xs-12 col-sm-3 col-lg-2 inbox-left-menu">
                <h3 class="sr-only">Inbox Menu</h3>
                <div class="labels">
                </div>
              </div>
              <!-- end inbox left menu -->
              <!-- right main content, the messages -->
              <div class="col-xs-12 col-sm-9 col-lg-10">
                <div class="messages">
                  <div class="table-responsive">
													<table class="table">
														<thead>
                              <tr>
      													<th>#</th>
                                <th>รหัสนักศึกษา</th>
      													<th>ชื่อ-นามสกุล</th>
      													<th>คณะ</th>
      													<th>สาขา/แผนการศึกษา</th>
      													<th>ระดับการศึกษา</th>
      													<th>สถานภาพ</th>
      													<th>คำสั่ง</th>
      												</tr>
														</thead>
														<tbody>
                              <?php $i=0; ?>
                              <?php foreach ($stds_in_is_subadviser as $key => $value) { ?>

            												<tr>
            													<td><?php echo  ++$i; ?></td>
                                      <td>
                                        <a href="<?php echo base_url();?>index.php/Student/student_thesis_is_info/<?php echo $value['STUDENTID'];?>">
                                            <?php echo $value['STUDENTID'];?>
                                        </a>
                                      </td>
            													<td>
                                        <a href="<?php echo base_url();?>index.php/Student/student_thesis_is_info/<?php echo $value['STUDENTID'];?>">
                                          <?php echo $value['STUDENTNAME']." ".$value['STUDENTSURNAME'];?>
                                        </a>
                                      </td>
            													<td><?php echo $value['FACULTYNAME'];?></td>
            													<td><?php echo $value['DEPARTMENTNAME'];?></td>
            													<td><?php echo $value['LEVELNAME'];?></td>
            													<td><?php echo $value['STUDENTSTATUS'];?></td>
            													<td><?php echo $value['COMMAND_No'];?></td>
            												</tr>
            									<?php } ?>
                                    <tr>
                                      <td colspan="8" style="text-align:right;background:#f2dede">
                                          รวมทั้งหมด&nbsp;<?php echo $i; ?>&nbsp;รายการ
                                      </td>
                                    </tr>
														</tbody>
													</table>
												</div>
                </div>
              </div>
              <!-- end right main content, the messages -->
            </div>
          </div>
        </div>

          <br />
        <div class="inbox">

          <div class="top">
            <div class="row">
              <div class="col-lg-2">
                <button class="btn btn-primary btn-block btn-compose"><i class="fa fa-pencil"></i> อาจารย์ที่ปรึกษารอง</button>
              </div>
              <div class="col-lg-10">
                <div class="top-menu">

                  <ul class="list-inline top-menu-group1 hide">
                    <li>
                      <button type="button" class="btn"><i class="fa fa-trash-o"></i> DELETE</button>
                    </li>
                    <li>
                      <button type="button" class="btn"><i class="fa fa-warning"></i> SPAM</button>
                    </li>
                  </ul>
                  <ul class="list-inline top-menu-group2">
                    <li class="top-menu-label hide">

                    </li>
                    <li class="top-menu-more">
                      <div class="btn-group">  &nbsp;<br />   &nbsp;</div>
                    </li>
                  </ul>
                  <div class="navigation">
                    <button type="button" class="btn btn-link hidden-sm hidden-md hidden-lg inbox-nav-toggle">
                      <i class="fa fa-bars"></i></button>
                    <div class="pager-wrapper">

                    </div>
                  </div>
                </div>
                <!-- /top-menu -->
              </div>
            </div>
            <!-- /row -->
          </div>
          <!-- /top -->
          <div class="bottom">
            <div class="row">
              <!-- inbox left menu -->
              <div class="col-xs-12 col-sm-3 col-lg-2 inbox-left-menu">
                <h3 class="sr-only">Inbox Menu</h3>
                <div class="labels"></div>
              </div>
              <!-- end inbox left menu -->
              <!-- right main content, the messages -->
              <div class="col-xs-12 col-sm-9 col-lg-10">
                <div class="messages">
                  <div class="table-responsive">
													<table class="table">
														<thead>
                              <tr>
      													<th>#</th>
                                <th>รหัสนักศึกษา</th>
      													<th>ชื่อ-นามสกุล</th>
      													<th>คณะ</th>
      													<th>สาขา/แผนการศึกษา</th>
      													<th>ระดับการศึกษา</th>
      													<th>สถานภาพ</th>
      													<th>คำสั่ง</th>
      												</tr>
														</thead>
														<tbody>
                              <?php $i=0; ?>
                              <?php foreach ($stds_in_subadviser as $key => $value) { ?>

            												<tr>
            													<td><?php echo  ++$i; ?></td>
                                      <td>
                                        <a href="<?php echo base_url();?>index.php/Student/student_thesis_is_info/<?php echo $value['STUDENTID'];?>">
                                            <?php echo $value['STUDENTID'];?>
                                        </a>
                                      </td>
            													<td>
                                        <a href="<?php echo base_url();?>index.php/Student/student_thesis_is_info/<?php echo $value['STUDENTID'];?>">
                                          <?php echo $value['STUDENTNAME']." ".$value['STUDENTSURNAME'];?>
                                        </a>
                                      </td>
            													<td><?php echo $value['FACULTYNAME'];?></td>
            													<td><?php echo $value['DEPARTMENTNAME'];?></td>
            													<td><?php echo $value['LEVELNAME'];?></td>
            													<td><?php echo $value['STUDENTSTATUS'];?></td>
            													<td><?php echo $value['COMMAND_No'];?></td>
            												</tr>
            									<?php } ?>
                                    <tr>
                                      <td colspan="8" style="text-align:right;background:#f2dede">
                                          รวมทั้งหมด&nbsp;<?php echo $i; ?>&nbsp;รายการ
                                      </td>
                                    </tr>
														</tbody>
													</table>
											</div>
                </div>
              </div>
              <!-- end right main content, the messages -->
            </div>
          </div>
        </div>
      </div>
      <!-- END SETTINGS TAB SETTING -->

    </div>

</div>
</div>
