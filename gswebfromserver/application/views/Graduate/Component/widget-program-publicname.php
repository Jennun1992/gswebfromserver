<div class="widget">
          <div class="widget-header">
            <h3><i class="fa fa-edit"></i> หลักสูตร</h3>
          </div>
          <div class="widget-content">
            <div class="form-horizontal">
              <div class="form-group">
                <label class="col-md-3 control-label">รหัสหลักสูตร</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" placeholder="รหัสหลักสูตร" name="PROGRAMID" value="<?php isset($Result['PROGRAM'][0]['PROGRAMID']) ? $Result['PROGRAM'][0]['PROGRAMID'] : $Result['PROGRAM'][0]['PROGRAMID'] = ''; echo $Result['PROGRAM'][0]['PROGRAMID']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">ชื่อภาษาไทย</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" placeholder="ชื่อภาษาไทย" name="PROGRAMCODENAME" value="<?php isset($Result['PROGRAM'][0]['PROGRAMCODENAME']) ? $Result['PROGRAM'][0]['PROGRAMCODENAME'] : $Result['PROGRAM'][0]['PROGRAMCODENAME'] = ''; echo $Result['PROGRAM'][0]['PROGRAMCODENAME']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">ชื่อภาษาอังกฤษ</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" placeholder="ชื่อภาษาอังกฤษ" name="PROGRAMCODENAMEENG" value="<?php isset($Result['PROGRAM'][0]['PROGRAMCODENAMEENG']) ? $Result['PROGRAM'][0]['PROGRAMCODENAMEENG'] : $Result['PROGRAM'][0]['PROGRAMCODENAMEENG'] = ''; echo $Result['PROGRAM'][0]['PROGRAMCODENAMEENG']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label"> ปีการศึกษา</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" placeholder="ปีการศึกษา" name="PROGRAMYEAR" value="<?php isset($Result['PROGRAM'][0]['PROGRAMYEAR']) ? $Result['PROGRAM'][0]['PROGRAMYEAR'] : $Result['PROGRAM'][0]['PROGRAMYEAR'] = ''; echo $Result['PROGRAM'][0]['PROGRAMYEAR']; ?>">
                </div>
              </div>
            </div>
          </div>
        </div>