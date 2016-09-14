<div class="tab-pane activity" id="activity-tab">

  <div class="inbox">

    <div class="top">
      <div class="row">
        <div class="col-lg-2">
          <button class="btn btn-primary btn-block btn-compose"><i class="fa fa-pencil"></i> ข้อมูลวิทยานิพนธ์</button>
        </div>
        <div class="col-lg-10">
          <div class="top-menu">

            <ul class="list-inline top-menu-group1 hide">

              <li>
                <div class="btn-group">

                  <ul class="dropdown-menu">

                  </ul>
                </div>
              </li>
            </ul>
            <ul class="list-inline top-menu-group2">
              <li class="top-menu-label hide">

              </li>
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
                <tbody>
                  <tr>
                    <td class="success col-md-3 p_topic">ชื่อวิทยานิพนธ์ (ไทย) </td>
                    <td><?php echo $std_ts_is_info[0]['THESISNAME']; ?></td>

                  </tr>
                  <tr>
                    <td class="success p_topic">ชื่อวิทยานิพนธ์ (อังกฤษ)</td>
                    <td><?php echo $std_ts_is_info[0]['THESISNAMEENG']; ?> </td>
                  </tr>

                  <tr>
                    <td class="success p_topic">รายการติดตาม</td>
                    <td><?php echo $std_ts_is_info[0]['THESISSTATUS']; ?></td>
                  </tr>
                  <tr>
                    <td class="success p_topic">วันที่ส่งเล่มสมบูรณ์</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td class="success p_topic">สถานะการส่งเล่ม</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td colspan="2" style="text-align:right">

                      A= นักศึกษารับกลับไปแก้ไขแล้ว, B=ให้นักศึกษารับกลับไปแก้ไข, C=ให้นักศึกษารับไปเข้าเล่ม, D=นักศึกษารับไปเข้าเล่มแล้ว
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
