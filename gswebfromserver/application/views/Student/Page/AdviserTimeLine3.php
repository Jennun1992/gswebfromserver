<div class="row preview" style="text-align:left;margin-top:5%">
  <div class="col-md-12 col-sm-12 ">
    <div class="panel panel-default" style="height:1700px;padding:5px;">
      <div class="panel-heading"><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp;
        <?php echo $data['namepage'];?>
      </div>
      <br>
      <!-- <input type="button" onclick="printDiv('printableArea')" class="btn btn-success" style="float:right" value="Print" /> -->
      <p class="alert alert-info" id="printmenu"><i class="fa fa-info-circle" ></i>
          <a href="javascript:printpaper()" class="btn btn-success" style="margin-left:45%; padding:5px 15px;font-weight:bold">Print</a>
     </p>
      <br style="clear:both">
      <br>
      <div class="col-md-12 col-sm-12 " id="printableArea">
        <?php if($this->session->userdata('username')=='ms_user'){
      $this->load->view('Papers/Ceform');
    }else{
      $this->load->view('Papers/Aviser_appoint_paper');
    }?>
            <?php  ;?>
      </div>
    </div>
  </div>
</div>
