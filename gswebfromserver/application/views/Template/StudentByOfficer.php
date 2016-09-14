<div class="row">
 <div class="col-md-12">
   <div class="widget-content" style="font-size: 12px;">
     <table id="StudentByOfficer" class="table table-bordered table-responsive table-sorting table-striped table-hover datatable dataTable no-footer" role="grid" aria-describedby="datatable-column-filter_info">
       <thead>
         <tr role="row">
           <th>รหัสนักศึกษา</th>
           <th>ชื่อ-นามสกุล</th>
           <th>คณะ</th>
           <th>สาขา/แผนการศึกษา</th>
           <th>ระดับการศึกษา</th>
           <th>ปีการศึกษา</th>
           <th>สถานภาพ</th>
           <th>ภาระงาน</th>
         </tr>
       </thead>
       <tbody>
         <?php foreach ($Result['StudentByOfficer'] as $Result['StudentByOfficer']): ?>
           <tr role="row" class="odd">
             <td><?php echo $Result['StudentByOfficer']['STUDENTCODE']; ?></td>
             <td>
               <p><span><?php echo $Result['StudentByOfficer']['STUDENTNAME']; ?></span> <span><?php echo $Result['StudentByOfficer']['STUDENTSURNAME']; ?></span></p>
               <p><span><?php echo $Result['StudentByOfficer']['STUDENTNAMEENG']; ?></span> <span><?php echo $Result['StudentByOfficer']['STUDENTSURNAMEENG']; ?></span></p>
             </td>
             <td><?php echo $Result['StudentByOfficer']['FACULTYNAME']; ?></td>
             <td style="width: 15%;"><?php echo $Result['StudentByOfficer']['DEPARTMENTNAME']; ?></td>
             <td><?php echo $Result['StudentByOfficer']['LEVELNAME']; ?></td>
             <td><?php echo $Result['StudentByOfficer']['CURRENTACADYEAR']; ?></td>
             <td><?php echo $Result['StudentByOfficer']['procedure_name']; ?></td>
             <td ><?php
             if ($Result['StudentByOfficer']['officer_relation_type']=='ADVISER') {
               echo "<span class='label label-success' style='font-size: 12px;'>อาจารย์ที่ปรึกษาหลัก</span>";
             } else {
               echo "<span class='label label-warning' style='font-size: 12px;'>อาจารย์ที่ปรึกษารอง</span>";
               }
             ?></td>
           </tr>
         <?php endforeach; ?>
       </tbody>
     </table>
   </div>
 </div>
</div>
