
  <div class="row" style="text-align:left;margin-top:0%">
    <div class="col-md-12 col-sm-12" style="text-align:center;margin-top:3%">
      <div class="col-md-1"></div>
      <div class="col-md-3 col-sm-4">
        <div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
            <?php if($data['param1'][0]==1 OR $data['param1'][0]==2){ ?>
              <i style="background:#088A08;color:#ffffff;">1</i>
              <?php }else{ ?>
                <i>1</i>
                <?php } ?>
        </div>
        <span>ขอแต่งตั้งอาจารย์ที่ปรึกษาค้นคว้าอิสระ</span>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
            <?php if($data['param1'][0]==2){ ?>
              <i style="background:#088A08;color:#ffffff;">2</i>
              <?php }else{ ?>
                <i>2</i>
                <?php } ?>
        </div>
        <span>Preview</span>
      </div>
      <div class="col-md-3 col-sm-4">
        <div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
            <?php if($data['param1'][0]==3){ ?>
              <i style="background:#088A08;color:#ffffff;">3</i>
              <?php }else{ ?>
                <i>3</i>
            <?php } ?>
        </div>
        <span>Print</span>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
  <?php
    if($data['param1'][0]==1){
      $this->load->view('Student/Page/AdviserTimeLine1');
    }
    else if($data['param1'][0]==2){
      $this->load->view('Student/Page/AdviserTimeLine2');
    }else if($data['param1'][0]==3){
		    if($this->session->userdata('ceqe_status')==3){
		      }
      $this->load->view('Student/Page/AdviserTimeLine3');
    }
  ?>
