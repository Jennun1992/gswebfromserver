<div class="widget">
          <div class="widget-header">
            <h3><i class="fa fa-edit"></i> ค่าใช้จ่ายตลอดหลักสูตร</h3>
          </div>
          <div class="widget-content no-padding">
            <textarea id="editor1" name="PROGRAM_COST">
						<?php if (isset($Result['PROGRAM'][0]['PROGRAM_COST'])): ?>
						<?php echo $Result['PROGRAM'][0]['PROGRAM_COST']; ?>
						<?php else: ?>
							<h1><span class="marker">ตัวอย่างข้อมูล</span></h1>
							<h1 >ภาคปกติ (ในเวลาราชการ) ทั่วไป</h1>
							<p ><span >จำนวนเงินเหมาจ่าย : 85,000 </span>บาท</p>
							<p ><span >จำนวนภาคเรียน :</span>  <strong>4 ภาคเรียน</strong></p>
							<p ><strong><span >ภาคเรียนที่ 1,2,3 แบ่งจ่ายภาคเรียนละ : 22,000 </span>บาท ภาคเรียนที่ 4 จ่าย 19,000 บาท<br /></strong></p>
							<h1 >ภาคปกติ (ในเวลาราชการ) แผนวิชาชีพครู</h1>
							<p ><span >จำนวนเงินเหมาจ่าย : 100,000 </span>บาท</p>
							<p ><strong><span >จำนวนภาคเรียน :</span>  5  ภาคเรียน</strong></p>
							<p ><span >ภาคเรียนละ 20,000 บาท</span></p>
							<h1 >ภาคสมทบ (นอกเวลาราชการ) ทั่วไป</h1>
							<p ><span >จำนวนเงินเหมาจ่าย : 100,000 </span>บาท</p>
							<p ><span >จำนวนภาคเรียน :</span> <strong> 6 ภาคเรียน</strong></p>
							<p ><strong><span >แบ่งจ่ายภาคเรียนละ : 25,000 </span>บาท</strong></p>
							<h1 >ภาคสมทบ (นอกเวลาราชการ) แผนวิชาชีพครู</h1>
							<p ><span >จำนวนเงินเหมาจ่าย : 125,000 </span>บาท</p>
							<p ><span >จำนวนภาคเรียน :</span> <strong> 5 ภาคเรียน</strong></p>
							<p ><strong><span >ภาคเรียนที่ 1,2,3,4,5 แบ่งจ่ายภาคเรียนละ : 20,000 </span>บาท ภาคเรียนที่ 6 จ่าย 25,000 บาท</strong></p> 	</section>
						<?php endif; ?>
					</textarea>
            <script type="text/javascript">
					CKEDITOR.replace('editor1');
					</script> 
          </div>
        </div>