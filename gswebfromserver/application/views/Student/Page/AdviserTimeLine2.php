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
            <a href="javascript:editform(1,'')" name="editBth" id="editBth" class="btn btn-warning">แก้ไข</a>
            <!-- <a href="javascript:editform('print','Student/Adviser/3')" class="btn btn-success" >Print</a> -->
            <!-- <input type="submit" value="adviserSubmitBtn" class="btn btn-success"  name="adviserSubmitBtn" id="adviserSubmitBtn" /> -->
       </p>
      </div>

      <br style="clear:both">
      <div class="col-md-12 col-sm-12 " id="printableArea">

        <?php
          echo form_error();
          echo form_open('Student/Adviser/3', 'name="myform" id="myform" onsubmit="disabledfalse()"');
          $this->load->view('Papers/Aviser_appoint_paper');
          echo form_submit('adviserSubmitBtn','ยืนยันความถูกต้อง','class="btn btn-success"');
          echo form_close();
        ?>
        </form>
      </div>
    </div>
  </div>
</div>
