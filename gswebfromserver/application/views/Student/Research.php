<?php $this->load->view('/Student/Header'); ?>
  <div class="row" style="text-align:left;margin-top:1%">
    <div class="col-md-12 col-sm-12 ">
      <div class="panel panel-default" style="height:<?php echo $param1 == '3' ? '410px;' : '280px;' ; ?>padding:5px;">
        <div class="panel-heading"><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp; ผลงานวิจัย</div>
        <table class="tb_list" width="100%" cellpadding="10">
          <thead>
            <tr>
              <th width="40" height="40" class="tb_th"> no. </th>
              <th class="tb_th">หัวข้องานวิจัย</th>
              <th width="15%" class="tb_th">วันที่ส่ง</th>
              <th width="10%" class="tb_th">สถานะ</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="tb_td">1</td>
              <td class="tb_td">
                การพัฒนางานประชาสัมพันธ์ขององค์การบริหารส่วนจังหวัดฉะเชิงเทรา
                <br> DEVELOPMENT OF PUBLIC RALATIONS ORGANIZATION ADMINISTRATION CHACHOENGSAO</td>
              <td class="tb_td">12 มีนาคม 2558</td>
              <td class="tb_td">เผยแพร่งานวิจัย</td>
            </tr>
            <tr>
              <td class="tb_td">2</td>
              <td class="tb_td">
                การศึกษาความเป็นไปได้ของโครงการลงทุนในธุรกิจบริการซักอบรีด เขตบางนา
                <br> THE FEASIBLITY STUDY ON INVESTMENT OF THE LAUNDRY SERVICE BUSINESS AT BANG NA
              </td>
              <td class="tb_td">8 ตุลาคม 2558</td>
              <td class="tb_td">เผยแพร่งานวิจัย</td>
            </tr>
            <tr>
              <td class="tb_td">3</td>
              <td class="tb_td">
                การวางกลยุทธ์ทางการตลาดธุรกิจเส้อผ้าสำเร้จรูปใน อ.เมือง จังหวัดเชียงใหม่ ของบริษัท มัลติ ครีเอชั่น สกรีน จำกัด
                <br> THE STUDY OF STRATEGIC MARKETING PLAN A CASE STUDY OF MULTI CREATION SCREEN CO., LTD
              </td>
              <td class="tb_td">9 มีนาคม 2559</td>
              <td class="tb_td">เผยแพร่งานวิจัย</td>
            </tr>
          </tbody>
        </table>
        <br>
        <?php if($param1=='3'){ ?>
          <div class="col-sm-12" style="margin-top:10px;">
            <label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:8px;">ชื่องานวิจัย (ภาษาไทย)</label>
            <div class="col-sm-8">
              <input type="text" class="form-control col-md-12" style="height:30px;" name="name_th" value="" required placeholder="ระบุรหัสนักศึกษา...">
            </div>
          </div>
          <div class="col-sm-12" style="margin-top:10px;">
            <label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:8px;">ชื่องานวิจัย (ภาษาอังกฤษ)</label>
            <div class="col-sm-8">
              <input type="text" class="form-control col-md-12" style="height:30px;" name="name_th" value="" required placeholder="ระบุชื่องานวิจัย...">
            </div>
          </div>
          <div class="col-sm-12" style="margin-top:10px;">
            <label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:8px;">สถานะ </label>
            <div  class="col-md-9">
            <div class="input-group">
            <select class="multiselect" >
              <option value="cheese">เผยแพร่งานวิจัย</option>
              <option value="tomatoes">ตีพิมพ์วารสารต่างประเทศ</option>
              <option value="mozarella">รอการอนุมัติ</option>
              <option value="mushrooms">มีการแก้ไขปรับปรุง</option>

            </select>
          </div>
          </div>
          </div>
          <div class="col-sm-12" style="margin-top:10px;">
            <label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:8px;">วันที่ส่ง </label>
            <div class="col-sm-3">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="text" id="datepicker" class="form-control">
              </div>
            </div>
						<div class="col-md-6"></div>
          </div>

          <div class="col-sm-12" style="margin-top:20px;">
            <label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:8px;"></label>
            <div class="col-sm-8">
							<div class="input-group">
              <a href="<?php echo base_url();?>index.php/Student/research/1/">
                <button class="btn btn-success  btn-xs">+ ยืนยันการบันทึกข้อมูล</button>
              </a>
						</div>
            </div>
          </div>
          <?php }  ?>
            <?php if($param1=='1' or $param1=='2'){ ?>
              <div class="col-md-12" style="text-align:right;margin-top:0px;">
                <a href="<?php echo base_url();?>index.php/Student/research/3/">
                  <button class="btn btn-success  btn-sm">+ เพิ่มงานวิจัย</button>
                </a>
              </div>
              <?php }  ?>
      </div>
    </div>
  </div>




  <?php $this->load->view('/Student/Footer'); ?>
