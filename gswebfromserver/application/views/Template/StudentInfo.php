<!-- PROFILE TAB CONTENT -->
<div class="content-wrapper" style="margin-left:20px">

  <div class="main-header">
    <h2 class="Page-Heading"><i class="glyphicon glyphicon-education"></i><span class="text"> ข้อมูลนักศึกษา และอนุมัติเอกสาร</span></h2>
    </div>

    <div class="main-content">
      <div class="row">
        <div class="col-md-12">
          <div class="widget">
            <div class="widget-header">
              <h3>ข้อมูลพื้นฐาน</h3>
            </div>
            <div class="widget-content">
              <?php $this->load->view('Template/StudentBasicInfo'); ?>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <?php $this->load->view('Template/StudentCommand'); ?>
        </div>
      </div>

      <!-- END PROFILE TAB CONTENT -->

    </div>
  </div>
