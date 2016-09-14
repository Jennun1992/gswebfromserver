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
            <?php foreach ($stds_in_is_adviser as $key => $value) { ?>

                  <tr>
                    <td><?php echo  ++$i; ?></td>
                    <td>
                      <?php echo $value['STUDENTID'];?>
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
                          <th>ชื่อ-นามสกุล</th>
                          <th>คณะ</th>
                          <th>Username</th>
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
                                  <?php echo $value['STUDENTID'];?>
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
</div>
<!-- END SETTINGS TAB ACTIVITY -->
