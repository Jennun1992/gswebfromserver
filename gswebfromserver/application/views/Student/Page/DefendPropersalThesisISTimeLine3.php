<div class="row" style="text-align:left;margin-top:3%">

  <!-- ACTIVITY TAB CONTENT -->
  <div class="tab-pane activity" id="activity-tab">

    <div class="inbox">
      <div class="top">
        <div class="row">
          <div class="col-lg-12">
            <button class="btn btn-primary btn-block btn-compose"><i class="fa fa-pencil"></i>
              <?php echo $_SESSION['LEVELID'] ==82 ? "ขอสอบเค้าโครงการค้นคว้าอิสระ" : "ขอสอบเค้าโครงวิทยานิพนธ์";?>
            </button>
          </div>

          </div>
        </div>
        <!-- /row -->
      </div>
      <div class="bottom">

        <div class="row">

          <!-- right main content, the messages -->
          <div class="col-xs-12 col-sm-12 col-lg-12">
            <div class="messages">
              <div class="table-responsive">

                <?php if($data['show_exampaper']=="showExamPaper"){ 	?>

                      <p class="alert alert-info"><i class="fa fa-info-circle"></i>
                        <a href="javascript:editform(1,'')" class="btn btn-warning">แก้ไข</a>
                        <a href="javascript:editform(2,'Student/exams/1/showlist')" class="btn btn-success">ปริ้น</a>

                      </p>
                      <?php
                      echo "<div id='printableArea'>";
                      // ถ้ามีการกดปุ่มขอสอบเค้าโครงให้แสดง form เอกสาร ขอสอบเค้าโครง
                        $this->load->view('Papers/Thesis_proposal_petition_exam');
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
                              <a href="<?php echo base_url();?>index.php/Student/DefendPropersalThesisIS/2" class="btn btn-success">Print</a>
                              <br>

                              <?php  } ?>
                          </td>
                        </tbody>
                      </table>
                      <a href="<?php echo base_url();?>index.php/Student/DefendPropersalThesisIS/1/showExamPaper" style="margin:0 auto;" class="btn btn-primary btn-xs"> ขอสอบเค้าโครง </a>

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
