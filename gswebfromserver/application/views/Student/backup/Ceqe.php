<?php $this->load->view('/Student/Header'); ?>
  <div class="row" style="text-align:left;margin-top:0%">
    <div class="col-md-12 col-sm-12" style="text-align:center;margin-top:3%">
      <div class="col-md-1"></div>
      <div class="col-md-3 col-sm-4">
        <div class="sidebar-minified active" style="margin-left:-19%;margin-right:-19%;">
          <i style="background:#088A08;color:#ffffff;">1</i>
        </div>
        <span><?php echo $namepage?> </span>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
            <?php if($param1==2 OR $this->session->userdata('ceqe_status')==3 OR $param1==3){ ?>
              <i style="background:#088A08;color:#ffffff;">2</i>
              <?php }else{ ?>
                <i>2</i>
                <?php } ?>
        </div>
        <span>แก้ไข</span>
      </div>
      <div class="col-md-3 col-sm-4">
        <div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
            <?php if($param1==3  OR $this->session->userdata('ceqe_status')==3){ ?>
              <i style="background:#088A08;color:#ffffff;">3</i>
              <?php }else{ ?>
                <i>3</i>
                <?php } ?>
        </div>
        <span>ปริ้น</span>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>

<!-- timeline ที่ 1หน้าที่ 1 -->
  <?php
    if($param1==1)
    {
        $this->load->view('Student/Page/ceQeTimeLine1');
    }
    else if($param1==2)
    {
      $this->load->view('Student/Page/ceQeTimeLine2');
    }
    else if($param1==3){
		    if($this->session->userdata('ceqe_status')==3){
		      }
      $this->load->view('Student/Page/ceQeTimeLine3');
    }
 $this->load->view('/Student/Footer');
  ?>
