<?php $this->load->view('/Student/Header'); ?>

  <div class="row" style="text-align:left;margin-top:0%">
    <div class="col-md-12 col-sm-12" style="text-align:center;margin-top:3%">
      <div class="col-md-1"></div>
      <div class="col-md-3 col-sm-4">
        <?php $res = "no"; ?>
        <div class="sidebar-minified active" style="margin-left:-19%;margin-right:-19%;">
            <?php if($param1==1 || $param1==2 || $param1==3 || $res != "pass"){ ?>
              <i style="background:#088A08;color:#ffffff;">1</i>
              <?php }else{ ?>
                <i>1</i>
                <?php } ?>
        </div>
        <span>สอบเค้าโครง</span>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
            <?php if($param1==2 || $param1==3 || $res =="pass"){ ?>
              <i style="background:#088A08;color:#ffffff;">2</i>
              <?php }else{ ?>
                <i>2</i>
                <?php } ?>
        </div>
        <span>สอบวิทยานิพนธ์</span>
      </div>
      <div class="col-md-3 col-sm-4">
        <div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
            <?php if($param1==3){ ?>
              <i style="background:#088A08;color:#ffffff;">3</i>
              <?php }else{ ?>
                <i>3</i>
                <?php } ?>
        </div>
        <span>เสร็จสิ้น</span>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
  <?php if($res != "pass"){
    $this->load->view('Student/Page/ExamsTimeLine1');
  }else if($res == "pass"){
    $this->load->view('Student/Page/ExamsTimeLine2');
  }else if($param1==3){
    $this->load->view('Student/Page/ExamsTimeLine3');
  }
  ?>

<?php $this->load->view('/Student/Footer'); ?>
