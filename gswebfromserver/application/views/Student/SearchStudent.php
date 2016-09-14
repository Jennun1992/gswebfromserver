<div class="dataTables_wrapper" id="example_wrapper">
  <div class="row">
    <div class="col-sm-3">
      <div class="widget widget-table">
        <div class="widget-header">
          <h3><i class="fa fa-table"></i>ค้นหาข้อมูลนักศึกษา</h3>
        </div>
        <div class="widget-content">
          <div class="table-responsive">
            <table border="0" cellpadding="3" cellspacing="0" width="100%">
              <tbody>
                <tr id="filter_col1" class="tr_filter" data-column="0">
                  <td class="td_topic">รหัสนักศึกษา</td>
                  <td class="input_table">
                    <input class="column_filter form-control col-sm-10" id="col0_filter" type="text">
                  </td>
                </tr>
                <tr id="filter_col2" class="tr_filter" data-column="1">
                  <td class="td_topic">ชื่อ - สกุล</td>
                  <td class="input_table">
                    <input class="column_filter form-control col-sm-10" id="col1_filter" type="text">
                  </td>
                </tr>
                <tr id="filter_col3" class="tr_filter" data-column="2">
                  <td class="td_topic">Name - Surname</td>
                  <td class="input_table">
                    <input class="column_filter form-control col-sm-10" id="col2_filter" type="text">
                  </td>
                </tr>
                <tr id="filter_col4" class="tr_filter" data-column="3">
                  <td class="td_topic">คณะ</td>
                  <td class="input_table">
                    <input class="column_filter form-control col-sm-10" id="col3_filter" type="text">
                  </td>
                </tr>
                <tr id="filter_col5" class="tr_filter" data-column="4">
                  <td class="td_topic">ภาควิชา</td>
                  <td class="input_table">
                    <input class="column_filter form-control col-sm-10" id="col4_filter" type="text">
                  </td>
                </tr>
                <tr id="filter_col6" class="tr_filter" data-column="5">
                  <td class="td_topic">สาขา/แผนการศึกษา</td>
                  <td class="input_table">
                    <input class="column_filter form-control col-sm-10" id="col5_filter" type="text">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-9">
      <table id="example" cellspacing="0">
        <thead>
          <tr>
            <th>รหัสนักศึกษา</th>
            <th>
              <div>ชื่อ - สกุล</div>
              <div>(ภาษาไทย)</div>
            </th>
            <th>
              <div>ชื่อ - สกุล</div>
              <div>(ภาษาอังกฤษ)</div>
            </th>
            <th>คณะ</th>
            <th>ภาควิชา</th>
            <th>สาขา/แผนการศึกษา</th>
          </tr>
        </thead>

        <tbody>
          <?php $i=0; ?>
            <?php foreach ($studentInfo as $key => $value) {  ?>
              <tr class="<?php echo $i%2 ==0 ? 'even': 'odd';?>">
                <td>
                  <a href="<?php echo base_url();?>index.php/Student/student_thesis_is_info/<?php echo $value['STUDENTID'];?>">
                    <?php echo $value['STUDENTID']; ?>
                  </a>
                </td>
                <td>
                  <a href="<?php echo base_url();?>index.php/Student/student_thesis_is_info/<?php echo $value['STUDENTID'];?>">
                    <?php echo $value['STUDENTNAME']."  ".$value['STUDENTSURNAME']; ?>
                  </a>
                </td>
                <td>
                  <a href="<?php echo base_url();?>index.php/Student/student_thesis_is_info/<?php echo $value['STUDENTID'];?>">
                    <?php echo $value['STUDENTNAMEENG']."  ".$value['STUDENTSURNAMEENG']; ?>
                  </a>
                </td>
                <td>
                  <?php echo $value['FACULTYNAME']; ?>
                </td>
                <td>
                  <?php echo $value['DEPARTMENTNAME']; ?>
                </td>
                <td>$112,000</td>
              </tr>
              <?php $i++ ?>
                <?php }//foreach ?>
        </tbody>
      </table>
    </div>
  </div>


</div>
