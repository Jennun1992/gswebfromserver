<p>

เป็นนักศึกษาระดับ  <input type="checkbox" checked>
    <span style="font-size:11px">ปริญญาเอก</span>
     (
      <input type="checkbox" ><span style="font-size:11px">แบบ 1.1</span>
      <input type="checkbox" ><span style="font-size:11px">แบบ 1.2</span>
      <input type="checkbox" ><span style="font-size:11px">แบบ 2.1</span>
      <input type="checkbox" ><span style="font-size:11px">แบบ 2.2</span>
     )
     สาขา<input type="text" class="underline" name="department" style="width:30%" value ="<?=$data['studentInfo'][0]['PROGRAMNAME'];?>" disabled>
  </P>
  <P>
    รูปแบบการศึกษา  <input type="checkbox"> <span style="font-size:11px;">ในเวลาราชการ</span>
    <input type="checkbox"> <span style="font-size:11px;">นอกเวลาราชการ</span>
    ศูนย์การศึกษา<input type="text" class="underline" name="campus" style="width:29%" value ="<?=$data['studentInfo'][0]['CAMPUSNAME'];?>" disabled>
    เริ่มเข้าเรียนในภาคเรียน
  </P>
  <p>
    ที่<input type="text" class="underline" style="width:3%" name="semester" value ="<?=$data['studentInfo'][0]['SEMESTER'];?>" disabled>/
   <input type="text" class="underline" style="width:6%" name="acadyear" value ="<?=$data['studentInfo'][0]['ACADYEAR'];?>" disabled>
    มีความประสงคขอสอบวัดคุณสมบัติ
    ประจำภาคเรียนที่
    <input type="text" class="underline" style="width:6%" name="exam_semester"
          value="<?php echo isset($data['ce_qe_info'][0]['SEMESTER_EXAM']) && $data['ce_qe_info'][0]['SEMESTER_EXAM'] !=0  ?
                  $data['ce_qe_info'][0]['SEMESTER_EXAM'] : "";?>" disabled>/
    <input type="text" class="underline" style="width:6%" name="exam_acadyear"
          value="<?php echo isset($data['ce_qe_info'][0]['ADCADYEAR_EXAM']) && $data['ce_qe_info'][0]['ADCADYEAR_EXAM'] !=0  ?
                $data['ce_qe_info'][0]['ADCADYEAR_EXAM'] : "";?>" disabled>
    กำหนดสอบวันที่
      <input type="text" class="underline" style="width:4%" name="examdate"
                  value ="<?php echo isset($data['examdate'][0]['date']) ? $data['examdate'][0]['date'] : '';?> " disabled>
     เดือน<input type="text" class="underline" style="width:10%" name="exammonth"
        value ="<?php echo isset($data['examdate'][0]['month']) ? $data['examdate'][0]['month'] : '';?> " disabled>
  </p>
  <p>
  พ.ศ<input type="text" class="underline" style="width:6%" name="examyear"
          value ="<?php echo isset($data['examdate'][0]['year']) ? $data['examdate'][0]['year'] : '';?> " disabled>
  และได้ชำระค่าสอบวัดคุณสมบัติแล้ว
    จำนวน<input type="text" class="underline" name="fee" style="width:5%" value ="<?=$data['studentInfo'][0]['COST'];?>" disabled>บาท
    ตามใบเสร็จรับเงินเล่มที่<input type="text" class="underline" style="width:15%" name="feebook_no"
      value ="<?=$data['studentInfo'][0]['ACCOUNTBOOK'];?>" disabled>
    เลขที่<input type="text" class="underline" style="width:5%" name="fee_no" value ="<?=$data['studentInfo'][0]['ACOUNTNUMBER'];?>" disabled>
  </p>
  <p>
    ลงวันที่<input type="text" class="underline" style="width:5%" name="date_fee_paid" value ="" disabled>
    เดือน<input type="text" class="underline" style="width:10%" name="month_fee_paid" value ="" disabled>
    พ.ศ<input type="text" class="underline" style="width:10%" name="year_fee_paid" value ="" disabled>

  </p>
