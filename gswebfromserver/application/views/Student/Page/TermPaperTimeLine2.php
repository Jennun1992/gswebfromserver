<form class="form-horizontal" name='form' action="<?php echo site_url();?>/Student/SendTopicThesisAndIS/3/" method="post">

<div class="tab-pane activity" id="activity-tab">

  <div class="inbox">

    <div class="top">
      <div class="row">
        <div class="col-lg-12">
          <button class="btn btn-primary btn-block btn-compose">
            	<span><?php echo $_SESSION['LEVELID'] !=82 ? 'ยื่นหัวข้อวิทยานิพนธ์' :'ยื่นหัวข้อการค้นคว้าอิสระ' ;?></span></span>
          </button>
        </div>

      </div>
      <!-- /row -->
    </div>
    <!-- /top -->
    <div class="bottom">
      <div class="row">
        <!-- right main content, the messages -->
        <div class="col-xs-12 col-sm-12 col-lg-12">
          <div class="messages">
            <div class="table-responsive">
              <div class="col-sm-12" style="margin-top:10px;">
                <label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:10px;">หัวข้อภาษาไทย </label>
                <div class="col-sm-8">
                    <textarea class="form-control propersal" rows="5" cols="4" name="name_th" ><?php echo $data['name_th']; ?></textarea>
                </div>
              </div>
              <div class="col-sm-12" style="margin-top:10px;">
                <label for="email" class="col-sm-3 control-label" style="text-align:right;padding-top:10px;">หัวข้อภาษาอังกฤษ </label>
                <div class="col-sm-8">
                  <textarea class="form-control propersal" rows="5" cols="4" name="name_en" ><?php echo $data['name_en']; ?></textarea>
                </div>
              </div>
              <!-- <div class="col-sm-12" style="margin-top:10px;">
                <label for="email" class="col-sm-3 control-label" style="text-align:right;"><b>อาจารย์ที่ปรึกษา</b> </label>
                <div class="col-sm-8 control-label"> -->
                   <?php //echo "รศ.ดร.เอนก คมขำ"; //$name_en; ?>
                <!-- </div>
              </div> -->
                
              <input type="hidden" name="thesiscode" value="<?php echo $data['thesiscode']; ?>" >
              <div class="col-sm-12" style="text-align:center;"><br><br>
                  <input type="submit" class="btn btn-primary btn-sm" value="ยืนยันเพื่อบันทึกข้อมูล">
              </div>
            </div>
          </div>
        </div>
        <!-- end right main content, the messages -->
      </div>
    </div>
  </div>
</div>
<!-- END ACTIVITY TAB CONTENT -->
</form>
