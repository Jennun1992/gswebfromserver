<div class="widget">
          <div class="widget-header">
            <h3><i class="fa fa-edit"></i> ประธานกรรมการผู้รับผิดชอบหลักสูตร</h3>
          </div>
          <div class="widget-content">
            <div class="row">
              <div class="col-md-12">
                <select id="OFFICER" name="OFFICERID" style="display: none;">
                  <option value="0">เลือกจากรายชื่ออาจารย์</option>
                  <?php foreach ($Result['OFFICER'] as $Result['OFFICER']): ?>
                  <option
										<?php if ($Result['OFFICER']['OFFICERID']==isset($Result['PROGRAM'][0]['OFFICERID']) ? $Result['PROGRAM'][0]['OFFICERID'] : $Result['PROGRAM'][0]['OFFICERID'] = ''): ?>
											selected="selected"
										<?php endif; ?>
										value="<?php echo $Result['OFFICER']['OFFICERID'] ?>"><?php echo $Result['OFFICER']['OFFICERPOSITION'] ?> <?php echo $Result['OFFICER']['OFFICERNAME'] ?> <?php echo $Result['OFFICER']['OFFICERSURNAME'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
        </div>