<div class="row preview" style="text-align:left;margin-top:5%">
  <div class="col-md-12 col-sm-12 ">
    <div class="panel panel-default" style="height:1700px;padding:5px;">
      <div class="panel-heading"><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp;
        <?php echo $data['namepage'];?>
      </div>
      <br>
      <!-- <input type="button" onclick="printDiv('printableArea')" class="btn btn-success" style="float:right" value="Print" /> -->
      <div>
        <p class="alert alert-danger"><i class="fa fa-info-circle"></i>
            <a href="javascript:void()" onclick="editform(1,'Student/ceqe/3')"
              name="editBth" id="editBth" class="btn btn-warning">แก้ไข</a>
            <a href="javascript:editform(2,'')" class="btn btn-success" >Print</a>
       </p>
      </div>

      <br style="clear:both">
      <div class="col-md-12 col-sm-12 " id="printableArea">
        <form action="">

        <?php
          //echo form_open('Student/ceqe/2',array("id"=>"ceQeForm","onsubmit"=>"editform2()"));
          echo "<div>";
          $this->load->view('Papers/Ceform');
          echo"</div>";
          // echo '
          //   <p class="alert alert-info"><i class="fa fa-info-circle"></i>
          //     <input type="submit" name="confirm" value="ยืนยันเอกสารถูกต้อง" class="btn btn-success btn-lg" />
          //   </p>
          //   ';
        //  echo form_close();
        ?>
      </form>
      </div>
    </div>
  </div>
</div>
