<p>
  เป็นนักศึกษาระดับ  <input type="checkbox" checked>
      <span style="font-size:11px">ปริญญาโท</span>
       ( <span style="font-size:11px">แผน ข</span>)
       สาขา<input type="text" class="underline" style="width:22%" value ="<?=$data['studentInfo'][0]['PROGRAMNAME'];?>" disabled>
       รูปแบบการศึกษา  <input type="checkbox"> <span style="font-size:11px;">ในเวลาราชการ</span>
       <input type="checkbox"> <span style="font-size:11px;">นอกเวลาราชการ</span>
</p>
<p>
  ศูนย์การศึกษา<input type="text" class="underline" style="width:30%" value ="<?=$data['studentInfo'][0]['CAMPUSNAME'];?>" disabled>
  เริ่มเข้าเรียน
  ในภาคเรียนที่<input type="text" class="underline" style="width:3%" name="semester" value ="<?=$data['studentInfo'][0]['SEMESTER'];?>" disabled>/
 <input type="text" class="underline" style="width:6%" name="acadyear" value ="<?=$data['studentInfo'][0]['ACADYEAR'];?>" disabled>
 มีความประสงคขอสอบประมวลความรู้
</p>
<p>
  มีความประสงคขอสอบประมวลความรู้
  ประจำภาคเรียนที่<input type="text" class="underline" style="width:6%" name="exam_semester"
        value="<?=$this->session->userdata('print_status')=="print"? $data['ce_qe_info'][0]['SEMESTER_EXAM'] : ""; ?>">/
                <input type="text" class="underline" style="width:10%" name="exam_acadyear"
                value="<?=$this->session->userdata('print_status')=="print"? $data['ce_qe_info'][0]['ADCADYEAR_EXAM'] : ""; ?>">

  กำหนดสอบวันที่<input type="text" class="underline" style="width:4%" name="examdate"
          value="<?=isset($date)? $month :"" ;?>">
  เดือน<input type="text" class="underline" style="width:8%" name="exammonth" value ="<?=isset($month)? $month :"" ;?>" >
  พ.ศ<input type="text" class="underline" style="width:7%" name="examyear" "<?=isset($year)? $year :"" ;?>" >และได้ชำระค่าสอบประมวลความรู้แล้ว
  จำนวน<input type="text" class="underline" name="fee" style="width:5%"
      value ="<?php isset($data['studentInfo'][0]['COST']) ? $data['studentInfo'][0]['COST'] : "" ;?>" disabled>บาท
  ตามใบเสร็จรับเงินเล่มที่<input type="text" class="underline" style="width:15%" name="feebook_no"
    value ="<?php isset($data['studentInfo'][0]['ACCOUNTBOOK']) ? $data['studentInfo'][0]['ACCOUNTBOOK'] : "";?>" disabled>
  เลขที่<input type="text" class="underline" style="width:5%" name="fee_no"
      value ="<?php isset($data['studentInfo'][0]['ACOUNTNUMBER']) ?$data['studentInfo'][0]['ACOUNTNUMBER'] :"" ;?>" disabled>
  ลงวันที่<input type="text" class="underline" style="width:5%" name="date_fee_paid" value ="" disabled>
  เดือน<input type="text" class="underline" style="width:10%" name="month_fee_paid" value ="" disabled>
  พ.ศ<input type="text" class="underline" style="width:10%" name="year_fee_paid" value ="" disabled>
</p>
