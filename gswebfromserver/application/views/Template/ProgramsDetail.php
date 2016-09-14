<article itemscope="" itemtype="http://schema.org/Article">
  <meta itemprop="inLanguage" content="th-TH">

  <header class="article-header clearfix">
    <h1 class="article-title" itemprop="name">
      สาขาวิชา<?php echo $Result[0]['DEPARTMENTNAME']; ?>
    </h1>
  </header>

  <section class="article-content clearfix" itemprop="articleBody">
    <h4>1. ชื่อหลักสูตร</h4>
    <p><span>ชื่อภาษาไทย : </span><?php echo $Result[0]['PROGRAMNAME']; ?></p>
    <p><span>ชื่อภาษาอังกฤษ : </span><?php echo $Result[0]['PROGRAMNAMEENG']; ?></p>
    <h4>2. ชื่อปริญญาและสาขาวิชา</h4>
    <p><span>ชื่อเต็ม (ไทย) : </span><?php echo $Result[0]['DEPARTMENTNAME']; ?></p>
    <p><span>ชื่อย่อ (ไทย) : </span><?php echo $Result[0]['DEPARTMENTNAMEENG']; ?></p>
    <p><span>ชื่อเต็ม (อังกฤษ) : </span><?php echo $Result[0]['DEPARTMENTABB']; ?></p>
    <p><span>ชื่อย่อ (อังกฤษ) :</span><?php echo $Result[0]['DEPARTMENTABBENG']; ?></p>
    <h4>3. โครงสร้างหลักสูตร</h4>
    <p> ไม่ทราบข้อมูลในการดึงจากฐานข้อมูล </p>
    <h4>4. อาจารย์ประจำหลักสูตร</h4>
    <p><?php echo $Result[0]['OFFICERPOSITION']; ?> <?php echo $Result[0]['OFFICERNAME']; ?> <?php echo $Result[0]['OFFICERSURNAME']; ?> ประธานกรรมการผู้รับผิดชอบหลักสูตร ติดต่อสอบถาม : <?php echo $Result[0]['CONTACTPHONENO']; ?></p>
    <h4>5. ค่าใช้จ่ายตลอดหลักสูตร</h4>
    <?php echo $Result[0]['PROGRAM_COST'];; ?>
  </section>

  <!-- footer -->
  <!-- //footer -->




</article>
