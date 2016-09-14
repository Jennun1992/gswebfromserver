<div class="content">
  <div class="main-header"> 
  <?php echo form_open('graduate/SaveProgram/'); ?>
  <input type="hidden" name="PROG_NUM" value="<?php isset($Result['PROGRAM'][0]['PROG_NUM']) ? $Result['PROGRAM'][0]['PROG_NUM'] : $Result['PROGRAM'][0]['PROG_NUM'] = ''; echo $Result['PROGRAM'][0]['PROG_NUM']; ?>"/>
    <h2>เพิ่มหลักสูตร</h2>
    
    <!-- <em>WYSIWYG and Markdown editor</em> -->
    <button type="submit" class="btn btn-primary" id="" ><i class="fa fa-save"></i> บันทึก</button>
    <button type="button" class="btn btn-warning" id="" onClick="window.location.href='<?php echo site_url(); ?>/graduate/GraduateManagePrograms'"><i class="glyphicon glyphicon-remove"></i> ยกเลิก</button>
    
    <?php if(isset($Result['PROGRAM'][0]['PROGRAMID'])): ?>
    <button type="button" class="btn btn-danger"  
    onClick="window.location.href='<?php echo site_url(); ?>/graduate/DelProgram/<?php isset($Result['PROGRAM'][0]['PROGRAMID']) ? $Result['PROGRAM'][0]['PROGRAMID'] : $Result['PROGRAM'][0]['PROGRAMID'] = ''; echo $Result['PROGRAM'][0]['PROGRAMID']; ?>'">
    <i class="glyphicon glyphicon-trash"></i> ลบ</button>
   
    <?php endif; ?>
  </div>
  
  
  <div class="main-content">
    <div class="row"> 
      <!-- คอลัมน์ ชวา -->
      <div class="col-md-6"> 
        <!-- หลักสูตร -->
        <?php $this->load->view('Graduate/Component/widget-program-publicname');?>
        <!-- วันที่เกี่ยวข้องหลักสูตร -->
        <?php $this->load->view('Graduate/Component/widget-program-daterefer');?>
        <!-- ปริญญาและสาขาวิชา -->
        <?php $this->load->view('Graduate/Component/widget-program-name');?>
      </div>
      <!-- คอลัมน์ ชวา -->
      <div class="col-md-6"> 
        <!-- ประธานสาขา -->
        <?php $this->load->view('Graduate/Component/widget-program-officerpresident');?>
        <!-- คณะและสาขา -->
        <?php $this->load->view('Graduate/Component/widget-program-depart-faculty');?>
        
        <!-- ค่าใช้จ่ายในการเล่าเรียน -->
        <?php $this->load->view('Graduate/Component/widget-program-progcost');?>
        <?php echo form_close(); ?> 
        <!-- โครงสร้างหลักสูตร -->
        <?php $this->load->view('Graduate/Component/widget-program-progstructure');?>
      </div>
    </div>
  </div>
  <!-- /main-content --> 
</div>
