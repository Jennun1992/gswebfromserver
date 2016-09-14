<div class="widget">
          <div class="widget-header">
            <h3><i class="fa fa-edit"></i> ปริญญาและสาขาวิชา</h3>
          </div>
          <div class="widget-content">
            <div class="form-horizontal">
              <div class="form-group">
                <label class="col-md-3 control-label">ระดับปริญญา</label>
                <div class="col-md-9">
                  <select id="STDYLEVEL" name="LEVELID" style="display: none;" >
                    <option value="0">คณะ</option>
                    <?php foreach ($Result['STDYLEVEL'] as $Result['STDYLEVEL']): ?>
                    <option
											<?php if ($Result['STDYLEVEL']['LEVELID']==isset($Result['PROGRAM'][0]['LEVELID']) ? $Result['PROGRAM'][0]['LEVELID'] : $Result['PROGRAM'][0]['LEVELID'] = ''): ?>
												selected="selected"
											<?php endif; ?>
											value="<?php echo $Result['STDYLEVEL']['LEVELID'] ?>"><?php echo $Result['STDYLEVEL']['LEVELNAME'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">ชื่อเต็ม (ไทย)</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" placeholder="ชื่อเต็ม (ไทย)"
									name="PROGRAMNAME"
									value="<?php
									isset($Result['PROGRAM'][0]['PROGRAMNAME']) ? $Result['PROGRAM'][0]['PROGRAMNAME'] : $Result['PROGRAM'][0]['PROGRAMNAME'] = '';
									echo $Result['PROGRAM'][0]['PROGRAMNAME']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">ชื่อย่อ (ไทย)</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" placeholder="ชื่อย่อ (ไทย)"
									name="PROGRAMABB"
									value="<?php
									isset($Result['PROGRAM'][0]['PROGRAMABB']) ? $Result['PROGRAM'][0]['PROGRAMABB'] : $Result['PROGRAM'][0]['PROGRAMABB'] = '';
									echo $Result['PROGRAM'][0]['PROGRAMABB']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">ชื่อเต็ม (อังกฤษ)</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" placeholder="ชื่อเต็ม (ภาษาอังกฤษ)"
									name="PROGRAMNAMEENG"
									value="<?php
									isset($Result['PROGRAM'][0]['PROGRAMNAMEENG']) ? $Result['PROGRAM'][0]['PROGRAMNAMEENG'] : $Result['PROGRAM'][0]['PROGRAMNAMEENG'] = '';
									echo $Result['PROGRAM'][0]['PROGRAMNAMEENG']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">ชื่อย่อ (อังกฤษ)</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" placeholder="ชื่อย่อ (ภาษาอังกฤษ)"
									name="PROGRAMABBENG"
									value="<?php
									isset($Result['PROGRAM'][0]['PROGRAMABBENG']) ? $Result['PROGRAM'][0]['PROGRAMABBENG'] : $Result['PROGRAM'][0]['PROGRAMABBENG'] = '';
									echo $Result['PROGRAM'][0]['PROGRAMABBENG']; ?>">
                </div>
              </div>
            </div>
          </div>
        </div>