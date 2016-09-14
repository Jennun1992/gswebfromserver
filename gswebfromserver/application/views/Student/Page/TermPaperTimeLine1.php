<form class="form-horizontal" name='form' action="<?php echo site_url();?>/Student/SendTopicThesisAndIS/2/" method="post">
<div class="row" style="text-align:left;margin-top:5%">

  <!-- ACTIVITY TAB CONTENT -->
  <div class="tab-pane activity" id="activity-tab">

    <div class="inbox">

      <div class="top">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-lg-12">
            <button class="btn btn-primary btn-block btn-compose">
              <?php echo $_SESSION['LEVELID'] !=82 ? 'ยื่นหัวข้อวิทยานิพนธ์' :'ยื่นหัวข้อการค้นคว้าอิสระ' ;?></span>
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
                    <?php
                    if(isset($this->session->userdata("dataArr")['name_th'])){
                      if($this->session->userdata("dataArr")['name_th']==""){
                        echo '<div style="color:red; font:16px bold;" >';
                        echo $this->session->userdata("dataArr")['name_th_err'];
                        echo '</div>';
                      }

                    }
                  ?>
                      <textarea class="form-control" rows="5" cols="4" name="name_th"><?php isset($name_en) ? $name_en : ""; ?></textarea>

                  </div>
                </div>
                <div class="col-sm-12" style="margin-top:10px;">
                  <label for="email" class="col-sm-3 control-label" style="text-align:right;padding-top:10px;">หัวข้อภาษาอังกฤษ </label>
                  <div class="col-sm-8">
                    <?php
                    if(isset($this->session->userdata("dataArr")['name_en'])){
                      if($this->session->userdata("dataArr")['name_en']==""){
                        echo '<div style="color:red; font:16px bold;" >';
                        echo $this->session->userdata("dataArr")['name_en_err'];
                        echo '</div>';
                      }

                    }
                     ?>
                    <textarea class="form-control" rows="5" cols="4" name="name_en">
                      <?php
                        isset($name_en) ? $name_en : "";
                       ?>
                    </textarea>
                  </div>
                </div>

                <div class="col-sm-12" style="text-align:center;"><br>
                    <input  type="submit" name="topicPropersal" id="topicPropersal" value="ยื่นหัวข้อสอบภาคนิพนธ์" class="btn btn-primary btn-sm" />
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
