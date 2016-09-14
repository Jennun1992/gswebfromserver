<div class="row" style="text-align:left;margin-top:5%">
<?php //print_r($studentInfo); ?>

  <!-- ACTIVITY TAB CONTENT -->
  <div class="tab-pane activity" id="activity-tab">

    <div class="inbox">

      <div class="top">
        <div class="row">
          <div class="col-lg-12">
            <button class="btn btn-primary btn-block btn-compose">
              ขอแแต่งตั้งอาจารย์ที่ปรึกษา
            </button>
          </div>

        </div>
        <!-- /row -->
      </div>
      <!-- /top -->
      <div class="bottom">
        <div class="row">
          <!-- inbox left menu -->

          <!-- end inbox left menu -->
          <!-- right main content, the messages -->
          <div class="col-xs-12 col-sm-12 col-lg-12">
            <div class="messages">
              <div class="table-responsive">
                <form action="<?php echo site_url();?>/Student/adviser/2" method="post" name="appoint_advisor_form">
                <div class="col-sm-12" style="margin-top:10px;">
                  <label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:10px;">อาจารย์ที่ปรึกษาหลัก </label>
                  <div class="col-sm-8">
                    <select name="adviser" id="adviser" class="select2">
                      <option value="">เลือก...</option>
                      <?php foreach ($data['adviserList'] as $value): ?>
                          <option value="<?=$value['OFFICERID'];?>"><?=$value['OFFICERNAME']."  ".$value['OFFICERSURNAME'];?></option>
                      <?php endforeach; ?>
                    </select>
                    <!-- <input type="text" class="form-control col-md-12" id="address" placeholder="ค้นหา..."> -->
                  </div>
                </div>
              <?php if($data['studentInfo'][0]['LEVELID'] != 82){ ?>
                <div class="col-sm-12" style="margin-top:10px;">
                  <label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:10px;">อาจารย์ที่ปรึกษาร่วม </label>
                  <div class="col-sm-8">
                    <select name="sub_adviser1" id="sub_adviser1" class="select2">
                      <option value="">เลือก...</option>
                      <?php print_r($data['adviserList']) ;foreach ($data['adviserList'] as $value): ?>
                          <option value="<?=$value['OFFICERID'];?>"><?=$value['OFFICERNAME']."  ".$value['OFFICERSURNAME'];?></option>
                      <?php endforeach; ?>
                    </select>
                    <!-- <input type="text" class="form-control col-md-12" id="address" placeholder="ค้นหา..."> -->
                  </div>
                </div>
                <div class="col-sm-12" style="margin-top:10px;">
                  <label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:10px;">อาจารย์ที่ปรึกษาร่วม </label>
                  <div class="col-sm-8">
                    <select name="sub_adviser2" id="sub_adviser2" class="select2">
                      <option value="">เลือก...</option>
                      <?php foreach ($advisorlist as $value): ?>
                          <option value="<?=$value['OFFICERID'];?>"><?=$value['OFFICERNAME']."  ".$value['OFFICERSURNAME'];?></option>
                      <?php endforeach; ?>
                    </select>
                    <!-- <input type="text" class="form-control col-md-12" id="address" placeholder="ค้นหา..."> -->
                  </div>
                </div>
              <?php }else{ ?>
                  <input type="hidden" name="sub_adviser1" id="sub_adviser1" value="" />
                  <input type="hidden" name="sub_adviser2" id="sub_adviser2" value="" />
              <?php } ?>
                <div class="col-sm-12" style="text-align:center;">
                  <br>
                  <a href="<?php echo site_url();?>/Student/adviser/2/">
                    <button type="submit" name="appoint_advisor_btn" class="btn btn-primary btn-sm">ยื่นขอแต่งตั้งอาจารย์ที่ปรึกษา</button>
                  </a>
                  <br>


                </div>
              </form>
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
