
  <div class="col-xs-12 col-sm-12 col-lg-12">
    <div class="messages">
      <div class="table-responsive">

        <table class="table">
          <thead>
            <tr>
              <th>ครั้งที่สอบ</th>
              <th>วันที่สอบ</th>
              <th>ผลการสอบ</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>12 สิงหา 2558</td>
              <td>ไม่ผ่าน</td>
              <td></td>
            </tr>
            <td>1</td>
            <td>12 สิงหา 2559</td>
            <td>
              รอผลสอบ
            </td>
            <td>
              <?php if($this->session->userdata('ceqe_status')==3){
                          ?>
                <a href="<?php echo base_url();?>index.php/Student/DefendPropersalThesisIS/2" class="btn btn-success">Print</a>
                <br>

                <?php  } ?>
            </td>
          </tbody>
        </table>
        <a href="<?php echo base_url();?>index.php/Student/DefendPropersalThesisIS/2"
          style="margin:0 auto;text-align:center" class="btn btn-primary btn-lg"> ขอสอบเค้าโครง </a>

      </div>

    </div>

  </div>
