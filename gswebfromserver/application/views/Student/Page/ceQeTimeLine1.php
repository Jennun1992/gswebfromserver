<div class="row request" style="text-align:left;margin-top:5%">
  <!-- ACTIVITY TAB CONTENT -->
  <div class="tab-pane activity" id="activity-tab">

    <div class="inbox">

      <div class="top">
        <div class="row">
          <div class="col-lg-12">
            <button class="btn btn-primary btn-block btn-compose"><i class="fa fa-pencil"></i>
              <?php echo $data['namepage'];?>
            </button>
          </div>

        </div>
        <!-- /row -->
      </div>
      <!-- /top -->
      <div class="bottom">
        <div class="row">
          <!-- inbox left menu -->

          <!-- right main content, the messages -->
          <div class="col-xs-12 col-sm-12 col-lg-12">
              <!-- check ว่า นักศึกษาเรียน วิชาเรียนครบหลักสูตรหรือยัง
              ถ้ายังไม่ครบ ไม่สารมารถใช้งานส่วนนี้ได้ -->
            <?php
              if($data['studentInfo'][0]['COURSETOTAL'] == $data['studentInfo'][0]['COURSEENTRY']){
            ?>
                <div class="alert alert-danger top-general-alert" style="display:none">
                    <p>คุณยังไม่สามารถใช้งานส่วนนี้ได้เนื่องจาก</p>
                    <p>คุณยังทำการเรียนไม่ครบหลักสูตร </p>

                </div>
            <?php
              }else{ //else   1
             ?>
                <!-- ถ้าเรียนครบหลักสูตรหรือเคยสอบมาแล้วแต่ยังไม่ผ่าน
                และสอบยังไม่เกินครบสองครั้ง สามารถใช้งานส่วนนี้ได้ -->
                <?php
                  //ถ้ายังไม่เคยสอบ
                  if(count($data['ce_qe_info']) == 0){
                ?>
                <div class="alert alert-danger top-general-alert">
                    คุณยังไม่เคยสอบ <br /><br />
                    <a href="<?php echo site_url();?>/Student/ceqe/2/">
                      <button type="submit" class="btn btn-primary btn-lg">
                        <?php echo $data['namepage'];?>
                      </button>
                    </a>
                </div>

                <?php
              }else{
                //ถ้าเรียน  course work ครบแล้ว และ เคยสอบแล้ว
                 ?>
                  <div class="messages">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>ครั้งที่สอบ</th>
                            <th>วันที่สอบ</th>
                            <th>ผลการสอบ</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody
                        <?php $i=1; ?>
                        <?php foreach ($data['ce_qe_info'] as $key => $value): ?>
                          <tr>
                            <td><?php echo $i++;?></td>
                            <td><?php echo $value['EXAM_DATE'];?></td>
                            <td><?php switch ($value['EXAM_STATUS']) {
                              case '0':
                                echo  "ไม่ผ่าน";
                                break;
                              case '1':
                                echo  "ผ่าน";
                                break;
                              case '3':
                                echo  'ยังไม่ได้ทำการปริ้นเอกสาร
                                        <a href="<?php echo site_url();?>/Student/ceqe/2" class="btn btn-success">Print</a>';
                                break;
                              default:
                                echo  "รอผลสอบ";
                                break;
                            } ?>
                            </td>
                            <td>
                              <?php if($this->session->userdata('ceqe_status')==3){
                                  ?>

                                <?php  } ?>
                            </td>
                          </tr>
                        <?php endforeach; ?>

                        </tbody>
                      </table>
                <?php
              }//end  inner else ถ้าเรียน  course work ครบแล้ว และ เคยสอบแล้ว
            }//end else $data['studentInfo'][0]['COURSETOTAL'] != $data['studentInfo'][0]['COURSEENTRY']
                ?>
                <?php if($this->session->userdata('ceqe_status')==3 || count($data['ce_qe_info']) > 0){ ?>
                  <div class="alert alert-info top-general-alert">
                  <a href="<?php echo site_url();?>/Student/ceqe/2/">
                    <button type="submit" class="btn btn-primary btn-lg">
                      <?php echo $data['namepage'];?>
                    </button>
                  </a>
                </div>
                  <?php  } ?>
              </div>
            </div>
          </div>
          <!-- end right main content, the messages -->
        </div>
      </div>
    </div>
  </div>
  <!-- END ACTIVITY TAB CONTENT -->

</div>
