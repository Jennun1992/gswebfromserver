<tr>
  <td style="text-align:right">
   เจ้าหน้าที่รับเงินลงนาม
   <input type="text" class="underline" style="width:45%" value =" " disabled>
  </td>
  <td>
   (<input type="text" class="underline" style="width:95%;text-align:center"
      value =" <?php isset($data['studentInfo'][0]['EMPLOYEEID']) ? $data['studentInfo'][0]['EMPLOYEEID'] : "";?>" disabled>)
  </td>
</tr>

<tr>
<td class="alignleft" style="text-align:right">
 ลงลายมือชื่อนักศึกษา
 <input type="text" class="underline" style="width:45%" value =" " disabled>
</td>
<td>
 (<input type="text" class="underline" style="width:95%;text-align:center"
  value ="<?=$data['studentInfo'][0]['STUDENTNAME']. " ".$data['studentInfo'][0]['STUDENTSURNAME'];?>" disabled>)
</td>
</tr>
</table>

<table>
<tr>
  <td class="alignleft"  colspan="3">
    <b>1.  อาจารย์ที่ปรึกษา<?php echo $_SESSION['LEVELID'] <90 ? "การค้นคว้าอิสระ" : "วิทยานิพนธ์";?>ตรวจคำร้องนี้แล้ว    เห็นควร</b><input type="checkbox"> <span style="font-size:12px;">อนุมัติ</span>
    <input type="checkbox"> <span style="font-size:12px;">ไม่อนุมัติ</span>
     เพราะว่า<input type="text" class="underline" style="width:25%" value =" " disabled>
            <input type="text" class="underline" style="width:99%" value =" " disabled>
  </td>
</tr>
<tr>
  <td class="alignleft">
   อาจารย์ที่ปรึกษา<?php $_SESSION['LEVELID'] <90 ? "การค้นคว้าอิสระ" : "วิทยานิพนธ์";?>ลงนาม
   <input type="text" class="underline" style="width:18%" value =" " disabled>

     (<input type="text" class="underline" style="width:15%" value =" " disabled>)

     วันที่<input type="text" class="underline" style="width:5%" value =" " disabled>
     เดือน<input type="text" class="underline" style="width:10%" value =" " disabled>
     พ.ศ.<input type="text" class="underline" style="width:8%" value =" " disabled>
 </td>
</tr>
</table>
<div style="margin-top:20px;width:100%" class="alignleft">
<b>2.  เจ้าหน้าที่คณะที่สาขาวิชาสังกัด  ได้ตรวจคำร้องและเอกสารที่เกี่ยวข้องครบสมบูรณ์แล้ว  จึงนำเสนอเพื่อโปรดพิจารณา</b>
</div>
<table>
<tr>
<td class="alignleft">
 ลายมือชื่อเจ้าหน้าที่
 <input type="text" class="underline" style="width:25%" value =" " disabled>

   (<input type="text" class="underline" style="width:20%" value =" " disabled>)

   วันที่<input type="text" class="underline" style="width:5%" value =" " disabled>
   เดือน<input type="text" class="underline" style="width:10%" value =" " disabled>
   พ.ศ.<input type="text" class="underline" style="width:10%" value =" " disabled>
 </td>
</tr>
</table>
<div style="margin-top:20px;width:100%" class="alignleft">
<b>3.  ประธานคณะกรรมการผู้รับผิดชอบหลักสูตร  ได้ตรวจคำร้องและเอกสารที่เกี่ยวข้องแล้ว เห็นควร</b>
<input type="checkbox"> <span style="font-size:12px;">อนุมัติ</span>
<input type="checkbox"> <span style="font-size:12px;">ไม่อนุมัติ</span>
</div>
<table>
<tr>
<td class="alignleft">
 เพราะว่า
 <input type="text" class="underline" style="width:92%" value =" " disabled>
</td>
</tr>
<tr>
<td class="alignleft">
 ลายมือชื่อประธานฯ
 <input type="text" class="underline" style="width:22%" value =" " disabled>
   (<input type="text" class="underline" style="width:20%" value =" " disabled>)
   วันที่<input type="text" class="underline" style="width:6%" value =" " disabled>
   เดือน<input type="text" class="underline" style="width:13%" value =" " disabled>
   พ.ศ.<input type="text" class="underline" style="width:8%" value =" " disabled>
 </td>
</tr>

</table>

<div style="margin-top:20px;width:100%" class="alignleft">
<b>5.  คณบดี คณะที่สาขาวิชาสังกัดคณะ</b>
<input type="checkbox"> <span style="font-size:12px;">ครุศาสตร์</span>
<input type="checkbox"> <span style="font-size:12px;">มนุษยศาสตร์และสังคมศาสตร์</span>
<input type="checkbox"> <span style="font-size:12px;">วิทยาศาสตร์และเทคโนโลยี</span>
<input type="checkbox"> <span style="font-size:12px;">วิทยาการจัดการ</span>
<input type="checkbox"> <span style="font-size:12px;">เทคโนโลยีการเกษตร</span>
ได้ตรวจคำร้องและเอกสารที่เกี่ยวข้องแล้ว  เห็นควร
<input type="checkbox"> <span style="font-size:12px;">อนุมัติ</span>
<input type="checkbox"> <span style="font-size:12px;">ไม่อนุมัติ</span>
</div>
<table>
<tr>
<td class="alignleft">
 เพราะว่า
 <input type="text" class="underline" style="width:93%" disabled>
</td>
</tr>
<tr>
<td class="alignleft">
 ลายมือชื่อคณบดีสาขาวิชาสังกัด
 <input type="text" class="underline" name="dean_id" style="width:20%" disabled>

 (<input type="text" class="underline" style="width:18%" value =" " disabled>)
 วันที่<input type="text" class="underline" style="width:6%" value =" " disabled>
 เดือน<input type="text" class="underline" style="width:10%" value =" " disabled>
 พ.ศ.<input type="text" class="underline" style="width:7%" value =" " disabled>
 </td>
</tr>

</table>
<hr /><hr  style="margin-top:-15px"/>
<table>
<tr>
<td class="alignleft">
 เรียน  คณบดีบัณฑิตวิทยาลัย
</td>
</tr>
<tr>
<td class="alignleft">
1. รองคณบดีบัณฑิตวิทยาลัย   ตรวจสอบคำร้องเสนอขอ<?php echo $data['namepage'];?>ครั้งนี้แล้ว   เห็นควร
<input type="checkbox"> <span style="font-size:12px;">อนุมัติ</span>
<input type="checkbox"> <span style="font-size:12px;">ไม่อนุมัติ</span>
ตามข้อกำหนด ของข้อบังคับ  ระเบียบ และประกาศที่เกี่ยวข้องกับการจัดการศึกษาระดับบัณฑิตศึกษา  มหาวิทยาลัยราชภัฏมหาสารคาม
</td>
</tr>
<tr>
<td class="alignleft">
ลายมือชื่อรองคณบดีบัณฑิตวิทยาลัย
<input type="text" class="underline" style="width:18%" disabled>

(<input type="text" class="underline" style="width:18%" value =" " disabled>)
วันที่<input type="text" class="underline" style="width:5%" value =" " disabled>
เดือน<input type="text" class="underline" style="width:9%" value =" " disabled>
พ.ศ.<input type="text" class="underline" style="width:6%" value =" " disabled>
</td>
</tr>
<tr>
<td class="alignleft">
 2.  คณบดีบัณฑิตวิทยาลัย  พิจารณา
 <input type="checkbox"> <span style="font-size:12px;">อนุมัติ</span>
 <input type="checkbox"> <span style="font-size:12px;">ไม่อนุมัติ</span>
 เพราะว่า
 <input type="text" class="underline" style="width:48%" disabled>
</td>
</tr>
<tr>
  <td>
 ลายมือชื่อคณบดีบัณฑิตวิทยาลัย
 <input type="text" class="underline" style="width:20%" disabled>

 (<input type="text" class="underline" style="width:20%" value =" " disabled>)
 วันที่<input type="text" class="underline" style="width:5%" value =" " disabled>
 เดือน<input type="text" class="underline" style="width:9%" value =" " disabled>
 พ.ศ.<input type="text" class="underline" style="width:6%" value =" " disabled>
 </td>
</tr>

</table>
