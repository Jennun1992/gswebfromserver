<div class="row" style="text-align:left;margin-top:0%">
  <div class="col-md-12 col-sm-12" style="text-align:center;margin-top:3%">
    <div class="col-md-1"></div>
    <div class="col-md-3 col-sm-4">
      <?php $res = "no"; ?>
      <div class="sidebar-minified active" style="margin-left:-19%;margin-right:-19%;">
          <?php if($data['param1'][0]==1 || $data['param1'][0]==2 || $data['param1'][0]==3 || $res != "pass"){ ?>
            <i style="background:#088A08;color:#ffffff;">1</i>
            <?php }else{ ?>
              <i>1</i>
              <?php } ?>
      </div>
      <?php echo $_SESSION['LEVELID'] ==82 ? "สอบการค้นคว้าอิสระ" : "สอบวิทยานิพนธ์";?>
    </div>
    <div class="col-md-4 col-sm-4">
      <div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
          <?php if($data['param1'][0]==2 || $data['param1'][0]==3 || $res =="pass"){ ?>
            <i style="background:#088A08;color:#ffffff;">2</i>
            <?php }else{ ?>
              <i>2</i>
              <?php } ?>
      </div>
      <span>preview</span>
    </div>
    <div class="col-md-3 col-sm-4">
      <div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
          <?php if($data['param1'][0]==3){ ?>
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


<div class="inbox" style="margin-top:3%">
  <div class="top">
    <div class="row">
      <div class="col-lg-12">
        <button class="btn btn-primary btn-block btn-compose"><i class="fa fa-pencil"></i>
          <?php echo $_SESSION['LEVELID'] ==82 ? "ขอสอบการค้นคว้าอิสระ" : "ขอสอบวิทยานิพนธ์";?>
        </button>
      </div>
    </div>
  </div>
    <!-- /row -->
</div>
<?php if($data['param1'][0] ==1){
  $this->load->view('Student/Page/DefendThesisISTimeLine1');
}else if($data['param1'][0] ==2){
  $this->load->view('Student/Page/DefendThesisISTimeLine2');
}else if($data['param1'][0]==3){
  $this->load->view('Student/Page/DefendThesisISTimeLine3');
}
?>
