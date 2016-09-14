<div class="tab-pane settings" id="settings-tab">
  <div class="inbox">

    <div class="top">
      <div class="row">
        <div class="col-lg-2">
          <button class="btn btn-primary btn-block btn-compose"><i class="fa fa-pencil"></i> อาจารย์ที่ปรึกษาหลัก</button>
        </div>
        <div class="col-lg-10">
          <div class="top-menu">

            <ul class="list-inline top-menu-group1 hide">

            </ul>
            <ul class="list-inline top-menu-group2">

              <li class="top-menu-more">
                <div class="btn-group"> &nbsp;
                  <br /> &nbsp;</div>
              </li>
            </ul>

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
                    <th>ชื่อ-นามสกุล</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>
                        <a href="<?php echo site_url()?>/Student/teacher_info/<?php echo $std_ts_is_info[0]['OFFICERID'];?>">
                          <?php echo $std_ts_is_info[0]['OFFICERPOSITION'].$std_ts_is_info[0]['OFFICERNAME'].
                                      "  ".$std_ts_is_info[0]['OFFICERSURNAME'];?>
                        </a>
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

            </ul>
            <ul class="list-inline top-menu-group2">

              <li class="top-menu-more">
                <div class="btn-group"> &nbsp;
                  <br /> &nbsp;</div>
              </li>
            </ul>

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
                    <th>ชื่อ-นามสกุล</th>

                  </tr>
                </thead>
                <tbody>
        <?php $i=0; ?>
        <?php foreach ($std_ts_is_info as $key => $value) { ?>
        <?php   if($value['ADVISERTYPE'] ==2){ ++$i; ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td>
                        <a href="<?php echo site_url()?>/Student/teacher_info/<?php echo $std_ts_is_info[$i]['OFFICERID'];?>">
                          <?php echo $std_ts_is_info[$i]['OFFICERPOSITION'].$std_ts_is_info[$i]['OFFICERNAME'].
                                      "  ".$std_ts_is_info[$i]['OFFICERSURNAME'];?>
                        </a>
                    </td>
                  </tr>
        <?php   }
              }
        ?>
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
