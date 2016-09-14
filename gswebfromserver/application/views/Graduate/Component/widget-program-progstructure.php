<style media="screen">
	.col-input [class*="col-"]{
		margin: 0px 0px 10px;
	}
</style>
<div class="widget">
          <div class="widget-header">
            <h3><i class="fa fa-edit"></i> โครงสร้างหลักสูตร</h3>
          </div>
          <div class="widget-content">
            <div class="form-horizontal">
              <div class="form-group">

                <div class="col-md-12 col-input">
                  <?php if (!isset($Result['PROGRAM'][0]['PROGRAMID'])): ?>
                  <div class="alert alert-warning alert-dismissable"> <strong>หมายเหตุ:</strong> ต้องทำการบันทึกหลักสูตรก่อน </div>
                  <?php else : ?>
                  <?php foreach ($Result['PROGRAM_STRUC'] as $Result['PROGRAM_STRUC']): ?>
                  <div class="col-md-6">
                  <?php echo form_open('graduate/SaveStructure/'); ?>
                    <input type="text" class="form-control" placeholder="แผนการศึกษา"
			name="PROGRAMPLAN"
			value="<?php
			isset($Result['PROGRAM_STRUC']['PROGRAMPLAN']) ? $Result['PROGRAM_STRUC']['PROGRAMPLAN'] : $Result['PROGRAM_STRUC']['PROGRAMPLAN'] = '';
			echo $Result['PROGRAM_STRUC']['PROGRAMPLAN']; ?>">
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="หน่วยกิต"
			name="MAXCREDIT"
			value="<?php
			isset($Result['PROGRAM_STRUC']['MAXCREDIT']) ? $Result['PROGRAM_STRUC']['MAXCREDIT'] : $Result['PROGRAM_STRUC']['MAXCREDIT'] = '';
			echo $Result['PROGRAM_STRUC']['MAXCREDIT']; ?>">
                  </div>
                  <div class="col-md-3">
                  <!-- btn save prog structure-->

                  <input type="hidden" name="PROGRAMID" value="<?php echo $Result['PROGRAM'][0]['PROGRAMID']; ?>">
                  <input type="hidden" name="PROGRAMSTRUCTUREID" value="<?php echo $Result['PROGRAM_STRUC']['PROGRAMSTRUCTUREID']; ?>">
                    <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i>
                    </button>
                    <?php echo form_close(); ?>
                  <!-- btn del prog structure-->
                    <button type="button" class="btn btn-danger"
                    onClick="window.location.href='<?php echo site_url(); ?>/graduate/DelStructure/<?php echo $Result['PROGRAM_STRUC']['PROGRAMSTRUCTUREID']; ?>/<?php echo $Result['PROGRAM'][0]['PROGRAMID']; ?>'">
                    <i class="glyphicon glyphicon-remove"></i>
                    </button>
                  </div>
                  <?php endforeach; ?>
                  <?php echo form_open('graduate/SaveStructure/'); ?>
                  <input type="hidden" name="PROGRAMID" value="<?php echo $Result['PROGRAM'][0]['PROGRAMID']; ?>">
                  <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="แผนการศึกษา" name="PROGRAMPLAN">
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="หน่วยกิต" name="MAXCREDIT">
                  </div>
                  <div class="col-md-3">
                  <!-- btn save new prog structure-->
                    <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i>
                    </button>
                  </div>
                  <?php echo form_close(); ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
