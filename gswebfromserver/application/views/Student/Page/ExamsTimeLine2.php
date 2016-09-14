<div class="row" style="text-align:left;margin-top:3%">

  <!-- ACTIVITY TAB CONTENT -->
  <div class="tab-pane activity" id="activity-tab">

    <div class="inbox">

      <div class="top">
        <div class="row">
          <div class="col-lg-2">
            <button class="btn btn-primary btn-block btn-compose"><i class="fa fa-pencil"></i> ขอสอบวิทยานิพนธ์
            </button>
          </div>
          <div class="col-lg-10">
            <div class="top-menu">
              <br />
              <br />
            </div>
          </div>
        </div>
        <!-- /row -->
      </div>
      <div class="bottom">

        <div class="row">
          <!-- inbox left menu -->
          <div class="col-xs-12 col-sm-3 col-lg-2 inbox-left-menu"></div>
          <!-- end inbox left menu -->
          <!-- right main content, the messages -->
          <div class="col-xs-12 col-sm-9 col-lg-10">
            <div class="messages">
              <div class="table-responsive">

                <?php if($show_exampaper=="showThesisDefendPaper"){ 	?>

                  <p class="alert alert-info"><i class="fa fa-info-circle"></i>
                    <a href="javascript:editform(1)" class="btn btn-warning">แก้ไข</a>
                    <a href="<?php echo base_url();?>index.php/Student/exams/2/printthesisdefendpaper" class="btn btn-success">ยืนยันเอกสารถูกต้อง</a>

                  </p>
                  <?php
// ถ้ามีการกดปุ่มขอสอบเค้าโครงให้แสดง form เอกสาร ขอสอบเค้าโครง
  $this->load->view('Papers/ThesisDefendPaper');
}
else if($show_exampaper=="printthesisdefendpaper"){ ?>
                    <p class="alert alert-info" id="printmenu"><i class="fa fa-info-circle"></i>
                      <a href="javascript:printpaper()" class="btn btn-warning"> Print</a>
                    </p>
                    <?php
  echo "<div id='printableArea'>";
  // ถ้ามีการกดปุ่มขอสอบเค้าโครงให้แสดง form เอกสาร ขอสอบเค้าโครง
    $this->load->view('Papers/ThesisDefendPaper');
  echo "</div>";
}
else{
?>
                      <!-- ถ้าไม่ได้กดปุ่มขอสอบเค้าโครงให้แสดง ผลการสอบ -->

                      <!-- /top -->


                      <table class="table">
                        <thead>
                          <tr>
                            <th>ครั้งที่สอบ</th>
                            <th>วันที่สอบ</th>
                            <th>ผลการสอบ</th>
                            <th>&nbsp;</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>12 สิงหา 2558</td>
                            <td>ไม่ผ่าน</td>
                            <td></td>
                          </tr>
                          <td>1</td>
                          <td>12 สิงหา 2559</td>
                          <td>
                            รอผลสอบ
                          </td>
                          <td>
                            <?php if($this->session->userdata('ceqe_status')==3){
                          ?>
                              <button type="submit" class="btn btn-primary btn-xs">
                                <i class="glyphicon glyphicon-print" style="color:#ffffff;"></i>
                                <b style="color:#ffffff;"> Print </b>
                              </button>

                              <?php  } ?>
                          </td>
                        </tbody>
                      </table>
                      <a href="<?php echo base_url();?>index.php/Student/exams/2/showThesisDefendPaper" style="margin:0 auto;" class="btn btn-primary btn-xs"> ขอสอบวิทยานิพนธ์ </a>

              </div>

            </div>

          </div>
          <!-- end right main content, the messages -->

        </div>

      </div>
    </div>
  </div>
  <!-- END ACTIVITY TAB CONTENT -->
  <?php
}//else
?>


</div>
