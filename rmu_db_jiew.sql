-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2016 at 12:43 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rmu_db_jiew`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounting_exam_proposal_thesis_is`
--

CREATE TABLE `accounting_exam_proposal_thesis_is` (
  `ACCOUNT_ID` int(20) NOT NULL COMMENT 'รหัสบัญชีการจ่ายเงินสอบเค้าโครงวิทยานิพนธ์',
  `STUDENTID` int(20) NOT NULL COMMENT 'รหัสนักเรียน',
  `ACCOUNTBOOK` varchar(20) NOT NULL COMMENT 'รหัสเลขเอกสาร',
  `ACOUNTNUMBER` int(20) NOT NULL COMMENT 'หมายเลขเอกสาร',
  `COST` int(10) NOT NULL COMMENT 'ราคา',
  `EMPLOYEEID` varchar(20) NOT NULL COMMENT 'รหัสเจ้าหน้าที่',
  `UPDATE_DATE` date NOT NULL COMMENT 'วันที่บัญชีการจ่ายเงินค่าสอบเค้าโครงวิทยาพิพนธ์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounting_exam_proposal_thesis_is`
--

INSERT INTO `accounting_exam_proposal_thesis_is` (`ACCOUNT_ID`, `STUDENTID`, `ACCOUNTBOOK`, `ACOUNTNUMBER`, `COST`, `EMPLOYEEID`, `UPDATE_DATE`) VALUES
(1, 345345, 'Ac-001-59', 1, 250, 'EM0001', '2016-08-30'),
(2, 345346, 'Ac-001-59', 1, 250, 'EM0001', '2016-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `adviser`
--

CREATE TABLE `adviser` (
  `ADVISER_ID` int(22) NOT NULL,
  `OFFICERID` int(20) NOT NULL COMMENT 'อาจารย์ที่ปรึกษา',
  `ADVISERPOSITION` int(20) NOT NULL COMMENT 'เก็บ id ของตำแหน่งทางวิชาการของ adviser',
  `ADVISERTYPE` int(2) NOT NULL COMMENT 'ถ้าเป็น 1 เป็ยนที่ปรึกษาหลัก ถ้า 2 เป็นทีปรึกษารอง',
  `STUDENTID` int(20) NOT NULL COMMENT 'รหัสนักศึกษา',
  `COMMAND_No` varchar(50) NOT NULL COMMENT 'เลขคำสั่ง',
  `ADVISERDATE` date NOT NULL COMMENT 'วันที่อาารย์ที่ปรึกษา'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adviser`
--

INSERT INTO `adviser` (`ADVISER_ID`, `OFFICERID`, `ADVISERPOSITION`, `ADVISERTYPE`, `STUDENTID`, `COMMAND_No`, `ADVISERDATE`) VALUES
(1, 561, 1, 1, 345345, 'บว.001', '2016-08-09'),
(2, 562, 1, 1, 345346, 'บว.002', '2016-08-09'),
(3, 566, 2, 2, 345345, 'บว.001', '2016-09-13'),
(4, 567, 1, 2, 345345, 'บว.001', '2016-09-13'),
(5, 561, 1, 1, 345346, 'บว.001', '2016-08-09'),
(6, 562, 1, 1, 345346, 'บว.001', '2016-08-09'),
(7, 561, 1, 2, 345347, 'บว.001', '2016-08-09'),
(8, 561, 1, 2, 345348, 'บว.001', '2016-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `advisertype`
--

CREATE TABLE `advisertype` (
  `advisertype_id` int(11) NOT NULL COMMENT 'รหัสชนิดอาอจารย์',
  `advisertypename` varchar(200) NOT NULL COMMENT 'ชื่อชนิดอาอจารย์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advisertype`
--

INSERT INTO `advisertype` (`advisertype_id`, `advisertypename`) VALUES
(1, 'อาจารย์ประจำ'),
(2, 'อาจารย์พิเศษ');

-- --------------------------------------------------------

--
-- Table structure for table `appoint_adviser_is_thesis`
--

CREATE TABLE `appoint_adviser_is_thesis` (
  `APPOINT_AVISER_IS_THESIS_ID` int(20) NOT NULL COMMENT 'รันลำดับการแต่งตั้งอาจารย์ที่ปรึกษา',
  `FACULTY_IS_THESIS_ID` varchar(20) NOT NULL COMMENT 'รันเลขลำดับการแต่งตั้งอาจารย์ที่ปรึกษา ดึงจากตารางอาจารย์',
  `GRADUATE_IS_THESIS_ID` varchar(20) NOT NULL COMMENT 'รันเลขลำดับการแต่งตั้งอาจารย์ที่ปรึกษา ดึงจากตารางบัณฑิต',
  `APPOINT_AVISER_IS_THESIS_DATE` date NOT NULL COMMENT 'วันที่แต่งตั้งอาจารย์ที่ปรึกษาค้นคว้าอิสระ',
  `ATTACHMENT_IS_THESIS1` text NOT NULL COMMENT 'สิ่งที่ส่งมาด้วยของวิทยานิพนธ์และค้นคว้าอิสระ',
  `ATTACHMENT_IS_THESIS2` int(11) NOT NULL COMMENT 'สิ่งที่แนบมา2',
  `STUDENT_ID` int(22) NOT NULL COMMENT 'รหัสนักศึกษา',
  `ADVISER_ID` varchar(20) NOT NULL COMMENT 'รหัสอาจารย์ที่ปรึกษา',
  `SUBADVISER1` varchar(22) NOT NULL COMMENT 'รหัสอาจารย์ที่ปรึกษารอง',
  `SUBADVISER2` varchar(22) NOT NULL COMMENT 'รหัสอาจารย์ที่ปรึกษารอง',
  `EMPLOYEE_PETITION_PAPER_DATE` date NOT NULL COMMENT 'วันที่ ที่เจ้าหน้าที่ตรวจคำร้อง',
  `ASSOCIATEDEAN_PETITION_ADVISER_DATE` date NOT NULL COMMENT 'วันที่ ที่รองคณบดีตรวจคำร้อง',
  `DEAN_REASON` varchar(50) NOT NULL COMMENT 'คณบดีเห็นควร',
  `DEAN_DATE` date NOT NULL COMMENT 'วันที่คณบดีเห็นควร',
  `DEAN_BECAUSE` varchar(200) NOT NULL COMMENT 'เหตุผลของคณบดีที่เห็นควร',
  `PRESIDENT_PETITION_PAPER_REASON` varchar(200) NOT NULL COMMENT ' ประธานตรวจคำร้องเอกสารที่เห็นควร',
  `PRESIDENT_PETITION_PAPER_BECAUSE` varchar(200) NOT NULL COMMENT 'เหตุผลที่ประธานตรวจคำร้องเอกสารที่เห็นควร',
  `PRESIDENT_PETITION_PAPER_DATE` date NOT NULL COMMENT 'วันที่ ที่ประธานตรวจคำร้องเอกสารที่เห็นควร',
  `APPOINT_AVISER_IS_THESIS_TYPE` varchar(20) NOT NULL COMMENT 'ชนิดของเอกสารแต่งตั้งอาจารย์ที่ปรึกษา',
  `DOCUMENTSTATUS` varchar(2) NOT NULL COMMENT '0 รอดำเนินการ 1 ผ่าน 2 ไม่ผ่าน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appoint_adviser_is_thesis`
--

INSERT INTO `appoint_adviser_is_thesis` (`APPOINT_AVISER_IS_THESIS_ID`, `FACULTY_IS_THESIS_ID`, `GRADUATE_IS_THESIS_ID`, `APPOINT_AVISER_IS_THESIS_DATE`, `ATTACHMENT_IS_THESIS1`, `ATTACHMENT_IS_THESIS2`, `STUDENT_ID`, `ADVISER_ID`, `SUBADVISER1`, `SUBADVISER2`, `EMPLOYEE_PETITION_PAPER_DATE`, `ASSOCIATEDEAN_PETITION_ADVISER_DATE`, `DEAN_REASON`, `DEAN_DATE`, `DEAN_BECAUSE`, `PRESIDENT_PETITION_PAPER_REASON`, `PRESIDENT_PETITION_PAPER_BECAUSE`, `PRESIDENT_PETITION_PAPER_DATE`, `APPOINT_AVISER_IS_THESIS_TYPE`, `DOCUMENTSTATUS`) VALUES
(1, 'คร.085/59', 'บฑ.1234//59', '2016-07-11', '', 0, 345345, '1', '2', '3', '2016-07-21', '2016-08-26', 'อนุมัติ', '2016-09-02', 'เอกสารครบ', 'อนุมัติ', 'เอกสารครบ', '2016-10-04', 'AP_TS', ''),
(2, 'คร.075/59', 'บฑ.5678/59', '2016-09-06', '', 0, 345346, '2', '3', '2', '2016-09-12', '2016-09-12', 'ไม่อนุมัติ', '2016-07-05', 'เอกสารไม่ครบ', 'ไม่อนุมัติ', 'เอกสารไม่ครบ', '2016-07-04', 'AP_IS', '');

-- --------------------------------------------------------

--
-- Table structure for table `attachment_is_thesis`
--

CREATE TABLE `attachment_is_thesis` (
  `ATTACHMENT_IS_THESIS1` text NOT NULL COMMENT 'สิ่งที่แนบมา1',
  `ATTACHMENT_IS_THESIS2` text NOT NULL COMMENT 'สิ่งที่แนบมา2',
  `APPOINT_ADVISER_IS_THESIS_ID` int(20) NOT NULL COMMENT 'รหัสแต่งตั้งที่ปรึกษาวิทยานิพนธ์อิสระ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attachment_is_thesis`
--

INSERT INTO `attachment_is_thesis` (`ATTACHMENT_IS_THESIS1`, `ATTACHMENT_IS_THESIS2`, `APPOINT_ADVISER_IS_THESIS_ID`) VALUES
('เอกสาร', 'เอกสาร', 1),
('เอกสาร', 'เอกสาร', 2);

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE `campus` (
  `CAMPUSID` int(22) NOT NULL COMMENT 'รหัสวิทยาเขต',
  `CAMPUSNAME` varchar(100) DEFAULT NULL COMMENT 'ชื่อวิทยาเขตภาษาไทย',
  `CAMPUSNAMEENG` varchar(100) DEFAULT NULL COMMENT 'ชื่อวิทยาเขตภาษาอังกฤษ',
  `CAMPUSABB` varchar(32) DEFAULT NULL COMMENT 'ชื่อย่อวิทยาเขตภาษาไทย',
  `CAMPUSABBENG` varchar(32) DEFAULT NULL COMMENT 'ชื่อย่อยวิทยาเขตภาษาอังกฤษ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`CAMPUSID`, `CAMPUSNAME`, `CAMPUSNAMEENG`, `CAMPUSABB`, `CAMPUSABBENG`) VALUES
(1, 'ศูนย์มหาวิทยาลัยราชภัฏมหาสารคาม', 'Rajabhat Maha Sarakham University', 'มรภ.', 'RMU'),
(2, 'ศูนย์กาฬสินธุ์', 'Kalasin Center', '', ''),
(3, 'ศูนย์นครพนม', 'Nakornpanom Center', '', ''),
(4, 'ศูนย์พยัคฆภูมิพิสัย', '', '', ''),
(5, 'ศูนย์ร้อยเอ็ด', '', '', ''),
(6, 'ศูนย์อำเภอยางตลาด', '', '', ''),
(7, 'ศูนย์หนองคาย', 'Nongkai Center', '', 'NK'),
(8, 'ศูนย์ (N-TECH)', '', '', ''),
(9, 'ศูนย์ วิทยาลัยเกษตร', '', '', ''),
(10, 'ศูนย์กมลาไสย จังหวัดกาฬสินธุ์', '', '', ''),
(11, 'ศูนย์พุทธมณฑลอีสาน อำเภอนาดูน', '', '', ''),
(12, 'ศูนย์กาฬสินธุ์พิทยาสรรพ์', '', '', ''),
(13, 'ศูนย์กิ่งอำเภอสามชัย จังหวัดกาฬสินธุ์', '', '', ''),
(14, 'ศูนย์เกษตรวิสัย ร้อยเอ็ด', '', '', ''),
(15, 'ศูนย์ขอนแก่น', '', '', ''),
(16, 'ศูนย์เขมราฐพิทยาคม จ.อุบลราชธานี', '', '', ''),
(17, 'ศูนย์คำเขื่อนแก้ว จังหวัดยโสธร', '', '', ''),
(18, 'ศูนย์เคียมแวง จังหวัดร้อยเอ็ด', '', '', ''),
(19, 'ศูนย์จังหวัดนครพนม', '', '', ''),
(20, 'ศูนย์จังหาร จังหวัดร้อยเอ็ด', '', '', ''),
(21, 'ศูนย์เชียงยืน', '', '', ''),
(22, 'ศูนย์ทุ่งกุลาร้องไห้ จังหวัดร้อยเอ็ด', '', '', ''),
(23, 'ศูนย์ทุ่งเขาหลวงจังหวัดร้อยเอ็ด', '', '', ''),
(24, 'ศูนย์เทศบาลกาฬสินธุ์', '', '', ''),
(25, 'ศูนย์เทศบาลตำบลยางตลาด จังหวัดกาฬสินธุ์', '', '', ''),
(26, 'ศูนย์ธงธานี จังหวัดร้อยเอ็ด', '', '', ''),
(27, 'ศูนย์ธวัชบุรี จังหวัดร้อยเอ็ด', '', '', ''),
(28, 'ศูนย์ธีรภาดา ร้อยเอ็ด', '', '', ''),
(29, 'ศูนย์นครขอนแก่น จังหวัดขอนแก่น', '', '', ''),
(30, 'ศูนย์อำเภอเมือง จังหวัดมหาสารคาม', '', '', ''),
(31, 'ศูนย์แผ่นดินที่ราบสูง จังหวัดกาฬสินธุ์', '', '', ''),
(32, 'ศูนย์พณิชยการกาฬสินธุ์', '', '', ''),
(33, 'ศูนย์พนมไพร จังหวัดร้อยเอ็ด', '', '', ''),
(34, 'ศูนย์เพิ่มพูนกาฬสินธุ์', '', '', ''),
(35, 'ศูนย์เมืองเพีย จังหวัดขอนแก่น', '', '', ''),
(37, 'ศูนย์เมืองมหานครขอนแก่น-ดอนหัน จังหวัดขอนแก่น', '', '', ''),
(38, 'ศูนย์ยโสธร', '', '', ''),
(40, 'ศูนย์โรงเรียนโกสุมวิทยาสรรค์', '', '', ''),
(41, 'ศูนย์โรงเรียนดงบังพิสัยนวการนุสรณ์', '', '', ''),
(42, 'ศูนย์โรงเรียนนาเชือกพิทยาสรรค์', '', '', ''),
(43, 'ศูนย์โรงเรียนวาปีปทุม', '', '', ''),
(45, 'ศูนย์วัดศรีษะเกษหนองคาย', '', '', ''),
(46, 'ศูนย์วิทยาลัยอาชีพหนองกุงศรี', '', '', ''),
(47, 'ศูนย์สุวรรณภูมิ จังหวัดร้อยเอ็ด', '', '', ''),
(48, 'ศูนย์หนองพอก จังหวัดร้อยเอ็ด', '', '', ''),
(49, 'ศูนย์ห้วยเม็ก กาฬสินธุ์', '', '', ''),
(50, 'ศูนย์อาจสามารถร้อยเอ็ด', '', '', ''),
(51, 'ศูนย์อำเภอไทยเจริญ จังหวัดยโสธร', '', '', ''),
(52, 'ศูนย์อำเภอบ้านไผ่ จังหวัดขอนแก่น', '', '', ''),
(53, 'ศูนย์อำเภอพยัคฆภูมิพิสัย', '', '', ''),
(54, 'ศูนย์อำเภอเมือง กาฬสินธุ์', '', '', ''),
(55, 'ศูนย์อำเภอเมือง จังหวัดร้อยเอ็ด', '', '', ''),
(56, 'ศูนย์อำเภอวาปีปทุม', '', '', ''),
(57, 'ศูนย์อำเภอสตึก จังหวัดบุรีรัมย์', '', '', ''),
(58, 'ศูนย์อำเภอสมเด็จ กาฬสินธุ์', '', '', ''),
(59, 'ศูนย์อำเภอสุวรรณภูมิ  จังหวัดร้อยเอ็ด', '', '', ''),
(60, 'ศูนย์อำเภอหนองกุงศรี จังหวัดกาฬสินธุ์', '', '', ''),
(61, 'ศูนย์บ้านผือ', '', '', ''),
(62, 'ศูนย์เม็กดำ', '', '', ''),
(63, 'ศูนย์โรงเรียนอนุกูลนารี จังหวัดกาฬสินธุ์', '', '', ''),
(64, 'ศูนย์เรือนจำมหาสารคาม', '', '', ''),
(65, 'ศูนย์มหาวิทยาลัยหงเหอ', '', '', ''),
(66, 'ศูนย์มหาวิทยาลัยป่าไม้ภาคตะวันตกเฉียงใต้ (SWFU)  มณฑลยูนนาน', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ce_qe_exam`
--

CREATE TABLE `ce_qe_exam` (
  `CE_QE_ID` int(11) NOT NULL COMMENT 'รหัสเอกสาร',
  `CE_QE_EXAM_ID` varchar(20) NOT NULL COMMENT 'รหัสเอกสาร=ce_qe_type+ce_qe_id',
  `CE_QE_TYPE` varchar(2) NOT NULL COMMENT 'ชนิดเอกสาร CE =สอบประมวลความรู้,QE=สอบวัดคุณสมบัติ',
  `STUDENTID` varchar(20) NOT NULL COMMENT 'รหัสนักศึกษา',
  `FACTID` varchar(20) NOT NULL COMMENT 'รหัสคณะ',
  `ATTACH1` text NOT NULL COMMENT 'สิ่งที่แนบมา',
  `ATTACH2` text NOT NULL COMMENT 'สิ่งที่แนบมา',
  `ATTACH3` text NOT NULL COMMENT 'สิ่งที่แนบมา',
  `SEMESTER_EXAM` int(1) NOT NULL COMMENT 'ปีการศึกษาที่สอบ',
  `ADCADYEAR_EXAM` varchar(5) NOT NULL COMMENT 'ปีที่สอบ',
  `EXAM_DATE` date NOT NULL COMMENT 'เก็บวันที่ทำการสอบ',
  `EXAM_STATUS` tinyint(1) NOT NULL COMMENT 'เก็บผลการสอบ 0 = ไม่ผ่าน 1 =ผ่าน,2=รอผลสอบ ,3=ยังไม่ปริ้น',
  `PRINT_STATUS` tinyint(4) NOT NULL COMMENT 'เก็บค่าปริ้น ถ้าเป็น 0 ยังไม่ปริ้น ถ้าเป้น 1 ปริ้นแล้ว',
  `ACTCOUNT_ID` varchar(20) NOT NULL COMMENT 'รหัสตารางการจ่ายเงิน',
  `ADVISERID` varchar(20) NOT NULL COMMENT 'รหัสอาจารย์ที่ปรึกษา',
  `ADVISER_ACCEPTION` tinyint(1) NOT NULL COMMENT 'อาจารย์ที่ปรึกษาอนุมัติ',
  `ADVISER_REASON` text NOT NULL COMMENT 'เหตุผลการอนุมัติ',
  `ADVISER_ACCEPT_DATE` date NOT NULL COMMENT 'วันที่ยอมรับ',
  `FACT_EMP_ID` varchar(20) NOT NULL COMMENT 'รหัสเจ้าหน้าที่',
  `FACT_EMP_DATE` date NOT NULL COMMENT 'วันที่เจ้าหน้าที่บันทึก',
  `DEAN_ACCEPT` tinyint(1) NOT NULL COMMENT 'คณบดีอนุมัติ',
  `DEAN_ACCEPT_REASON` text NOT NULL COMMENT 'เหตุผลการอนุมัติ',
  `DEAN_ACCEPT_DATE` date NOT NULL COMMENT 'วันที่อนุมัติ',
  `PRINT_DATE` date NOT NULL COMMENT 'วันที่นักศึกษาปริ้นเอกสาร',
  `DOCUMENTSTATUS` varchar(2) NOT NULL COMMENT '0 รอดำเนินการ 1 ผ่าน 2 ไม่ผ่าน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ce_qe_exam`
--

INSERT INTO `ce_qe_exam` (`CE_QE_ID`, `CE_QE_EXAM_ID`, `CE_QE_TYPE`, `STUDENTID`, `FACTID`, `ATTACH1`, `ATTACH2`, `ATTACH3`, `SEMESTER_EXAM`, `ADCADYEAR_EXAM`, `EXAM_DATE`, `EXAM_STATUS`, `PRINT_STATUS`, `ACTCOUNT_ID`, `ADVISERID`, `ADVISER_ACCEPTION`, `ADVISER_REASON`, `ADVISER_ACCEPT_DATE`, `FACT_EMP_ID`, `FACT_EMP_DATE`, `DEAN_ACCEPT`, `DEAN_ACCEPT_REASON`, `DEAN_ACCEPT_DATE`, `PRINT_DATE`, `DOCUMENTSTATUS`) VALUES
(1, 'QE-345352-1', 'QE', '345345', '', '-', '-', '-', 2, '2559', '2016-09-12', 2, 0, '1', '1', 0, '', '0000-00-00', '', '0000-00-00', 0, '', '0000-00-00', '2016-09-03', ''),
(2, 'QE-345352-2', 'QE', '345346', '', '-', '-', '-', 2, '2559', '2016-09-12', 2, 0, '2', '2', 0, '', '0000-00-00', '', '0000-00-00', 0, '', '0000-00-00', '2016-09-03', '');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('abd15c0f06ea06cdacdb255f6e854ebb', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0', 1473740104, ''),
('daa5410123bcdca9a7f00bd73e0cf300', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0', 1473744059, '');

-- --------------------------------------------------------

--
-- Table structure for table `comprehensiveexampaper`
--

CREATE TABLE `comprehensiveexampaper` (
  `COMPREHENSIVEID` int(22) NOT NULL COMMENT 'เลขรันลำดับ',
  `COMPRE_FACULTY_ID` int(22) NOT NULL COMMENT 'รันเลขคณะต้นสักกัดคณะ',
  `COMPRE_GRADUATE_ID` int(22) NOT NULL COMMENT 'รันเลขบัณฑิตวิทยาลัย',
  `COMPREHENSIVEDATE` date NOT NULL COMMENT 'วันที่ออกเอกสาร',
  `ATTACHMENT1` text NOT NULL COMMENT 'สิ่งที่แนบมา1',
  `ATTACHMENT2` text NOT NULL COMMENT 'สิ่งที่แนบมา2',
  `STUDENTID` int(22) NOT NULL COMMENT 'ดึงข้อมูลนักศึกษา',
  `EXAMPOSE` date NOT NULL COMMENT 'กำหนดวันสอบ',
  `EXPENDMONEY` float NOT NULL COMMENT 'จ่ายเงิน',
  `DATEEXPEND` date NOT NULL COMMENT 'จ่ายเงินวันไหน',
  `EMPLOYEEDATE` date NOT NULL COMMENT 'เจ้าที่ที่รับเงิน',
  `ADVISERTHESISAPPROVE` tinyint(1) NOT NULL COMMENT 'อาจารย์ที่ปรึกษา เห็นควร',
  `ADVISERTHESISREASON` varchar(255) CHARACTER SET latin1 NOT NULL COMMENT 'เหตุผล',
  `ADVISERTHESISDATE` date NOT NULL COMMENT 'ลงวันที่ที่เห็นควร',
  `EMPLOYEEFACULTYDATE` date NOT NULL COMMENT 'เจ้าหน้าที่ลงวันที่รับเอกสาร',
  `PRESIDENTAPPROVE` tinyint(1) NOT NULL COMMENT 'ประธานเห็นควร',
  `PRESIDENTREASON` varchar(255) CHARACTER SET latin1 NOT NULL COMMENT 'เหตูผลของประธาน',
  `PRESIDENTDATE` date NOT NULL COMMENT 'วันที่ที่เห็นควร',
  `DEANFACULTYNAME` varchar(150) CHARACTER SET latin1 NOT NULL COMMENT 'คณบดีของคณะ',
  `DEANFACULTYNAMEAPPROVE` tinyint(1) NOT NULL COMMENT 'คณบดีของคณะเห็นควร',
  `DEANFACULTYNAMEREASON` varchar(255) CHARACTER SET latin1 NOT NULL COMMENT 'เหตูผลของคณบดีของคณะ',
  `DEANFACULTYNAMEDATE` date NOT NULL COMMENT 'ลงวันที่ที่คณบดีของคณะเห็นควร',
  `DEPUTYDEANFACULTYAPPROVE` tinyint(1) NOT NULL COMMENT 'รองคณบดีบัณฑิตวิทยาลัยเห็นควร',
  `DEPUTYDEANFACULTYDATE` date NOT NULL COMMENT 'วันที่ ที่รองคณบดีบัณฑิตวิทยาลัยเห็นควร',
  `DEANFACULTYAPPROVE` tinyint(1) NOT NULL COMMENT 'คณบดีคณะ พิจารณา',
  `DEANFACULTYREASON` varchar(255) CHARACTER SET latin1 NOT NULL COMMENT 'เหตุผลที่คณบดีคณะ พิจารณา',
  `DEANFACULTYDATE` date NOT NULL COMMENT 'วันที่ ที่คณบดีคณะ พิจารณา',
  `DOCUMENTSTATUS` varchar(2) CHARACTER SET latin1 NOT NULL COMMENT '0 รอดำเนินการ 1 ผ่าน 2 ไม่ผ่าน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comprehensiveexampaper`
--

INSERT INTO `comprehensiveexampaper` (`COMPREHENSIVEID`, `COMPRE_FACULTY_ID`, `COMPRE_GRADUATE_ID`, `COMPREHENSIVEDATE`, `ATTACHMENT1`, `ATTACHMENT2`, `STUDENTID`, `EXAMPOSE`, `EXPENDMONEY`, `DATEEXPEND`, `EMPLOYEEDATE`, `ADVISERTHESISAPPROVE`, `ADVISERTHESISREASON`, `ADVISERTHESISDATE`, `EMPLOYEEFACULTYDATE`, `PRESIDENTAPPROVE`, `PRESIDENTREASON`, `PRESIDENTDATE`, `DEANFACULTYNAME`, `DEANFACULTYNAMEAPPROVE`, `DEANFACULTYNAMEREASON`, `DEANFACULTYNAMEDATE`, `DEPUTYDEANFACULTYAPPROVE`, `DEPUTYDEANFACULTYDATE`, `DEANFACULTYAPPROVE`, `DEANFACULTYREASON`, `DEANFACULTYDATE`, `DOCUMENTSTATUS`) VALUES
(1, 1, 1, '2016-09-01', 'เอกสาร', 'เอกสาร', 345345, '2016-09-01', 500, '2016-09-02', '2016-09-02', 1, '????', '2016-09-05', '2016-09-05', 1, '????', '2016-09-05', '????? ??????', 1, '????', '2016-09-05', 1, '2016-09-05', 1, '????', '2016-09-04', ''),
(2, 2, 2, '2016-09-02', 'เอกสาร', 'เอกสาร', 345346, '2016-09-02', 500, '2016-09-03', '2016-09-03', 2, '????', '2016-09-05', '2016-09-05', 2, '????', '2016-09-05', '????????? ??????', 1, '????', '2016-09-05', 1, '2016-09-05', 1, '????', '2016-09-05', '');

-- --------------------------------------------------------

--
-- Table structure for table `compre_faculty`
--

CREATE TABLE `compre_faculty` (
  `COMPRE_FACULTY_ID` int(22) NOT NULL COMMENT 'รันลำดับเอกสาร',
  `COMPRE_FACULTYDETAIL` varchar(150) NOT NULL COMMENT 'รันเลขตรง รับที่',
  `COMPRE_DATE` date NOT NULL COMMENT 'วันที่ ที่ออกเอกสาร',
  `FACULTYID` int(22) NOT NULL COMMENT 'ดึงคณะมาโชว์ตรงสักกัดคณะ'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compre_faculty`
--

INSERT INTO `compre_faculty` (`COMPRE_FACULTY_ID`, `COMPRE_FACULTYDETAIL`, `COMPRE_DATE`, `FACULTYID`) VALUES
(1, '33001', '2016-09-04', 10),
(2, '33002', '2016-09-04', 20);

-- --------------------------------------------------------

--
-- Table structure for table `compre_graduate`
--

CREATE TABLE `compre_graduate` (
  `COMPRE_GRADUATE_ID` int(22) NOT NULL COMMENT 'รันลำดับตรงเอกสาร',
  `COMPRE_GRADUATEDETAIL` varchar(150) NOT NULL COMMENT 'รันเลขตรง รับที่',
  `COMPRE_GRADUATEDATE` date NOT NULL COMMENT 'วันที่ ที่ออกเอกสาร'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `COURSEID` int(22) NOT NULL COMMENT 'รันลำดับ',
  `COURSECODE` varchar(16) DEFAULT NULL COMMENT 'รหัสรายวิชา',
  `REVISIONCODE` varchar(4) DEFAULT NULL COMMENT 'ความคิดเห็น เช่น 1เห็นควร 2 ไม่เห็นควร',
  `COURSEUNICODE` varchar(16) DEFAULT NULL COMMENT 'รหัสวิชา กำกับภาาาอังกฤษ',
  `COURSENAME` varchar(100) DEFAULT NULL COMMENT 'ชื่อรายวิชาภาษาไทย',
  `COURSENAMEENG` varchar(100) DEFAULT NULL COMMENT 'ชื่อรายวิชาภาษาอังกฤษ',
  `CREDITMIN` int(22) DEFAULT NULL COMMENT 'หน่วยกิตต่ำสุด',
  `CREDITMAX` int(22) DEFAULT NULL COMMENT 'หน่วยกิตสูงสุด',
  `CREDITTOTAL` int(22) DEFAULT NULL COMMENT 'หน่วยกิตรวม',
  `PERIODTOTAL` int(22) DEFAULT NULL COMMENT 'หน่วยกิตที่เรียน',
  `STUDYCODE1` varchar(1) DEFAULT NULL COMMENT 'เกรดนักศึกษา',
  `DEFAULTCLASSSTATUS` varchar(1) DEFAULT NULL COMMENT 'สเตตัสนักศึกษา',
  `GRADEMODE` varchar(2) DEFAULT NULL COMMENT 'เกณฑ์การให้เกรด',
  `FACULTYID` int(22) DEFAULT NULL COMMENT 'รหัสคณะ',
  `CREATEDATETIME` varchar(100) DEFAULT NULL COMMENT 'วันที่ลงเรียรน',
  `LASTUPDATEDATETIME` varchar(100) DEFAULT NULL COMMENT 'วันที่ ปรับปรุงตารางเรียน',
  `LASTUPDATEUSERID` varchar(16) DEFAULT NULL COMMENT 'ผู้ใช้ที่ปรับปรุง',
  `COURSEUNIT` varchar(16) DEFAULT NULL COMMENT 'แสดงรายละเอียดของหน่วยกิต'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`COURSEID`, `COURSECODE`, `REVISIONCODE`, `COURSEUNICODE`, `COURSENAME`, `COURSENAMEENG`, `CREDITMIN`, `CREDITMAX`, `CREDITTOTAL`, `PERIODTOTAL`, `STUDYCODE1`, `DEFAULTCLASSSTATUS`, `GRADEMODE`, `FACULTYID`, `CREATEDATETIME`, `LASTUPDATEDATETIME`, `LASTUPDATEUSERID`, `COURSEUNIT`) VALUES
(1001, '1013206', '1', '1013206', 'การเมืองกับการศึกษา', '', 2, 2, 2, 4, 'C', 'W', 'GD', 10, '24 ก.พ.  2010', '08 ส.ค.  2016', 'MANGBONG', '2 (2-0-0)'),
(1002, '1013207', '1', '1013207', 'การศึกษากับสิ่งแวดล้อม', '', 2, 2, 2, 4, 'C', 'W', 'GD', 20, '24 ก.พ.  2010', '08 ส.ค.  2016', 'MANGBONG', '2 (2-0-0)');

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `DEGREEID` int(22) NOT NULL COMMENT 'รหัสปริญญา',
  `DEGREENAME` varchar(100) DEFAULT NULL COMMENT 'ชื่อปริญญาภาษาไทย',
  `DEGREENAMEENG` varchar(100) DEFAULT NULL COMMENT 'ชื่อปริญญาภาษาอังกฤษ',
  `DEGREEABB` varchar(80) DEFAULT NULL COMMENT 'ชื่อย่อปริญญาภาษาไทย',
  `DEGREEABBENG` varchar(80) DEFAULT NULL COMMENT 'ชื่อย่อปริญญาภาษาอังกฤษ',
  `DEGREELEVEL` int(22) DEFAULT NULL COMMENT 'ระดับปริญญา',
  `DEGREECERTIFICATE` varchar(100) DEFAULT NULL COMMENT ' ปริญญาบัตร',
  `DEGREEGROUP` int(22) DEFAULT NULL COMMENT 'กลุ่มของปริญญา',
  `DEGREECERTIFICATEENG` varchar(100) DEFAULT NULL COMMENT 'ชื่อปริญญาภาษาอังกฤษ',
  `DEGREECERTIFICATEABB` varchar(100) DEFAULT NULL COMMENT 'ชื่อย่อของวุฒิการศึกษาภาษาไทย',
  `DEGREECERTIFICATEABBENG` varchar(100) DEFAULT NULL COMMENT 'ชื่อย่อของวุฒิการศึกษาภาษาอังกฤษ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`DEGREEID`, `DEGREENAME`, `DEGREENAMEENG`, `DEGREEABB`, `DEGREEABBENG`, `DEGREELEVEL`, `DEGREECERTIFICATE`, `DEGREEGROUP`, `DEGREECERTIFICATEENG`, `DEGREECERTIFICATEABB`, `DEGREECERTIFICATEABBENG`) VALUES
(15, 'ครุศาสตรมหาบัณฑิต', 'Master of Education', 'ค.ม.', 'M.Ed.', 0, 'ครุศาสตรมหาบัณฑิต', 0, 'Master of Education', 'ค.ม.', 'M.Ed.'),
(16, 'ครุศาสตรดุษฎีบัณฑิต', 'Doctor of Education', 'ค.ด.', 'Ed.D', 0, 'ครุศาสตรดุษฎีบัณฑิต', 0, 'Doctor of Education', 'ค.ด.', 'Ed.D');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DEPARTMENTID` int(22) NOT NULL COMMENT 'รหัสสาขา',
  `FACULTYID` int(22) DEFAULT NULL COMMENT 'รหัสคณะ',
  `DEPARTMENTCODE` varchar(22) DEFAULT NULL COMMENT 'รหัสสาขายย่อย',
  `DEPARTMENTNAME` varchar(100) DEFAULT NULL COMMENT 'ชื่อสาขาภาษาไทย',
  `DEPARTMENTNAMEENG` varchar(100) DEFAULT NULL COMMENT 'ชื่อสาขาภาษาอังกฤษ',
  `DEPARTMENTABB` varchar(32) DEFAULT NULL COMMENT 'ชื่อย่อสาขาภาษาไทย',
  `DEPARTMENTABBENG` varchar(32) DEFAULT NULL COMMENT 'ชื่อย่อสาขาภาษาอังกฤษ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DEPARTMENTID`, `FACULTYID`, `DEPARTMENTCODE`, `DEPARTMENTNAME`, `DEPARTMENTNAMEENG`, `DEPARTMENTABB`, `DEPARTMENTABBENG`) VALUES
(1001, 10, '101', 'ภาษาไทย', 'Thai', '', ''),
(1002, 20, '102', 'ภาษาอังกฤษ', 'English', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `document_index`
--

CREATE TABLE `document_index` (
  `doc_index_id` int(11) NOT NULL COMMENT 'รหัสเอกสาร',
  `doc_index_std_id` varchar(20) NOT NULL COMMENT 'รหัสนักศึกษา',
  `doc_index_doc_id` varchar(20) NOT NULL COMMENT 'รหัสเอกสาร',
  `doc_index_doc_status` int(11) NOT NULL COMMENT 'สถานะเอกสาร',
  `doc_index_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'วันที่เอกสาร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `document_index`
--

INSERT INTO `document_index` (`doc_index_id`, `doc_index_std_id`, `doc_index_doc_id`, `doc_index_doc_status`, `doc_index_date`) VALUES
(1, '345345', 'QE-345345-1', 3, '2016-09-06 10:06:23'),
(2, '345346', 'QE-345346-2', 3, '2016-09-06 10:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `entrydegree`
--

CREATE TABLE `entrydegree` (
  `ENTRYDEGREECODE` varchar(6) NOT NULL COMMENT 'รหัสปริญญา',
  `ENTRYDEGREENAME` varchar(255) DEFAULT NULL COMMENT 'ชื่อปริญญาภาษาไทย',
  `ENTRYDEGREENAMEENG` varchar(255) DEFAULT NULL COMMENT 'ชื่อปริญญาภาษาอังกฤษ',
  `ENTRYDEGREEABB` varchar(255) DEFAULT NULL COMMENT 'ชื่อย่อปริญญาภาษาไทย',
  `ENTRYDEGREEABBENG` varchar(255) DEFAULT NULL COMMENT 'ชื่อย่อปริญญาภาษาอังกฤษ',
  `ISEC` varchar(6) DEFAULT NULL,
  `ENTRYDEGREELEVEL` varchar(6) DEFAULT NULL COMMENT 'หลักสูตรกี่ปี'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `entrydegree`
--

INSERT INTO `entrydegree` (`ENTRYDEGREECODE`, `ENTRYDEGREENAME`, `ENTRYDEGREENAMEENG`, `ENTRYDEGREEABB`, `ENTRYDEGREEABBENG`, `ISEC`, `ENTRYDEGREELEVEL`) VALUES
('20001', 'วิทยาศาสตรมหาบัณฑิต', 'Master of Science', 'วท.ม.', 'M.Sc.', '', '5'),
('20002', 'ครุศาสตรมหาบัณฑิต', 'Master of Education', 'ค.ม.', 'M.Ed.', '', '5'),
('20003', 'ศิลปศาสตรมหาบัณฑิต', 'Master of Art', 'ศศ.ม.', 'M.A.', '', '5'),
('20004', 'รัฐศาสตรมหาบัณฑิต', 'Master of Politican Science', 'ร.ม.', 'M.A. (Political Science)', '', '5'),
('20005', 'รัฐประศาสนศาสตรมหาบัณฑิต', 'Master of Public Administration', 'รป.ม.', 'M.P.A.', '', '5'),
('20006', 'บริหารธุรกิจมหาบัณฑิต', 'Master of Business Administration', 'บธ.ม.', 'M.B.A.', '', '5'),
('20007', 'นิติศาสตรมหาบัณฑิต', 'Master of Laws', 'น.ม.', 'LL.M.', '', '5'),
('20008', 'ศึกษาศาสตรมหาบัณฑิต', 'Master of Education', 'ศษ.ม.', 'M.Ed.', '', '5'),
('20009', 'การศึกษามหาบัณฑิต', '', 'กศ.ม.', 'M.Ed.', '', '5'),
('20010', 'บัญชีมหาบัณฑิต', '', 'บช.ม.', '', '', '5'),
('20011', 'พยาบาลศาสตรมหาบัณฑิต', '', 'พย.ม.', 'M.N.S.', '', '5'),
('20012', 'ศาสนศาสตรมหาบัณฑิต', 'Master of Art', 'ศน.ม.', 'M.A.', '', '5'),
('20013', 'วิศวกรรมศาสตรมหาบัณฑิต', '', 'วศ.ม.', '', '', '5'),
('20014', 'ครุศาสตร์อุตสาหกรรมมหาบัณฑิต', 'Master of Science in Industrial Education', 'คอ.ม.', '', '', '5'),
('20015', 'การวางแผนภาคและเมืองมหาบัณฑิต', 'Master of Urban and Regional Planning', 'ผ.ม.', 'M.U.R.P.', '', ''),
('20016', 'การจัดการภาครัฐและภาคเอกชนมหาบัณฑิต', 'Master of Public and Private Management', 'รอ.ม.', 'M.P.P.M.', '', ''),
('20017', 'สังคมสงเคราะห์ศาสตรมหาบัณฑิต', 'Master of Social  Work', 'สส.ม.', 'M.S.W.', '', ''),
('20018', 'ศิลปมหาบัณฑิต', '', 'ศป.ม.', '', '', ''),
('20019', 'เกษตรศาสตรมหาบัณฑิต', '', 'กษ.ม.', '', '', ''),
('20020', 'พุทธศาสตรมหาบัณฑิต', 'Master of Arts', 'พธ.ม.', 'M.A.', '', ''),
('20021', 'สาธารณสุขศาสตรมหาบัณฑิต', '', 'ส.ม.', '', '', ''),
('20022', 'พัฒนาชุมชนมหาบัณฑิต', '', 'พช.ม', 'M.Sc. (Community Development)', '', '5'),
('20023', 'การจัดการมหาบัณฑิต', 'Master of Management', 'กจ.ม', 'M.M', '', '5'),
('20024', 'สังคมศาสตรมหาบัณฑิต', '', 'สค.ม.', 'M.A.', '', '5'),
('20025', 'พัฒนบริหารศาสตรมหาบัณฑิต', '', 'พบ.ม.', '', '', ''),
('20026', 'เศรษฐศาสตรมหาบัณฑิต', 'Master of Economics', 'ศ.ม.', 'M.Econ.', '', ''),
('20027', 'ศิลปศาสตรมหาบัณฑิต (การสอนคณิตศาสตร์)', 'Master of Art', 'ศศ.ม.(การสอนคณิตศาสตร์)', 'M.A.(Teaching of Mathematics)', '', '5'),
('30001', 'วิทยาศาสตรดุษฎีบัณฑิต', '', 'วท.ด.', '', '', ''),
('30002', 'ปรัชญาดุษฎีบัณฑิต', '', 'ปร.ด.', '', '', ''),
('30003', 'ศึกษาศาสตรดุษฎีบัณฑิต', '', 'ศษ.ด.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `exam_proposal_thesis_is`
--

CREATE TABLE `exam_proposal_thesis_is` (
  `EXAM_PROPOSAL_THESIS_IS_ID` int(20) NOT NULL COMMENT 'รหัสการขอสอบวิทยานิพนธ์อิสระ',
  `STUDENTID` int(22) NOT NULL COMMENT 'รหัสนักศึกษา',
  `TITLE_TYPE_PAPER` varchar(200) NOT NULL COMMENT 'ชื่อหัวข้อชนิดเอกสาร',
  `FACULTY_EXAM_PROPOSAL_THESIS_IS_ID` varchar(20) NOT NULL COMMENT 'รันรหัสคณะขอสอบเค้าโครงค้นคว้าอิสระและวิทยานพนธ์',
  `GRADUATE_EXAM_PROPOSAL_THESIS_IS_ID` varchar(20) NOT NULL COMMENT 'รันรหัสบัณฑิตขอสอบเค้าโครงค้นคว้าอิสระและวิทยานพนธ์',
  `ADVISER_ID` int(20) NOT NULL COMMENT 'รหัสอาจารย์ที่ปรึกษาหลัก',
  `SUBADVISER1` varchar(22) NOT NULL COMMENT 'รหัสอาจารย์ที่ปรึกษารอง',
  `SUBADVISER2` varchar(22) NOT NULL COMMENT 'รหัสอาจารย์ที่ปรึกษารอง',
  `EMPLOYEE_PETITION_PAPER_DATE` date NOT NULL COMMENT 'วันที่เจ้าหน้าที่ตรวจคำร้องเอกสาร',
  `PRESIDENT_REASON` varchar(200) NOT NULL COMMENT 'ประธานลงความเห็น',
  `EXAM_PROPOSAL_THESIS_IS_BECAUSE` varchar(200) NOT NULL COMMENT 'เพราะว่า',
  `EXAM_PROPOSAL_THESIS_IS_DATE` date NOT NULL COMMENT 'วันที่ประธานลงความเห็น',
  `DEAN_REASON` varchar(20) NOT NULL COMMENT 'คณบดีลงความเห็น',
  `DEAN_BECAUSE` varchar(200) NOT NULL COMMENT 'เพราะว่า',
  `DEAN_DATE` date NOT NULL COMMENT 'วันที่คณบดีลงความเห็น',
  `EXAM_PROPOSAL_THESIS_IS_DATETIME` datetime NOT NULL COMMENT 'วันเวลาที่สอบ',
  `EXAM_PROPOSAL_THESIS_IS_ROOM` varchar(200) NOT NULL COMMENT 'ห้องสอบ',
  `STUDENT_PETITION_DATE` date NOT NULL COMMENT 'วันที่คำร้อง',
  `EMPLOYEE_PETITION_DATE` date NOT NULL COMMENT 'วันที่เจ้าหน้าที่',
  `REPRESENT_GRADUATE` varchar(50) NOT NULL COMMENT 'เกรด',
  `PROFESSIONAL` varchar(50) NOT NULL COMMENT 'ผู้เชี่ยวชาญ',
  `EXAM_PROPOSAL_IS_THESIS_TYPE` varchar(20) NOT NULL COMMENT 'ชนิดเอกสาร',
  `DOCUMENTSTATUS` varchar(2) NOT NULL COMMENT '0 รอดำเนินการ 1 ผ่าน 2 ไม่ผ่าน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exam_proposal_thesis_is`
--

INSERT INTO `exam_proposal_thesis_is` (`EXAM_PROPOSAL_THESIS_IS_ID`, `STUDENTID`, `TITLE_TYPE_PAPER`, `FACULTY_EXAM_PROPOSAL_THESIS_IS_ID`, `GRADUATE_EXAM_PROPOSAL_THESIS_IS_ID`, `ADVISER_ID`, `SUBADVISER1`, `SUBADVISER2`, `EMPLOYEE_PETITION_PAPER_DATE`, `PRESIDENT_REASON`, `EXAM_PROPOSAL_THESIS_IS_BECAUSE`, `EXAM_PROPOSAL_THESIS_IS_DATE`, `DEAN_REASON`, `DEAN_BECAUSE`, `DEAN_DATE`, `EXAM_PROPOSAL_THESIS_IS_DATETIME`, `EXAM_PROPOSAL_THESIS_IS_ROOM`, `STUDENT_PETITION_DATE`, `EMPLOYEE_PETITION_DATE`, `REPRESENT_GRADUATE`, `PROFESSIONAL`, `EXAM_PROPOSAL_IS_THESIS_TYPE`, `DOCUMENTSTATUS`) VALUES
(1, 345345, 'EX-TS-345354', 'คร.087/59', 'บฑ.3322/59', 1, '3', '2', '2016-08-16', 'อนุมัติ', 'เอกสารครบ', '2016-09-06', 'อนุมัติ', 'เอกสารครบ', '2016-09-05', '2016-07-12 00:00:00', 'IT-412', '2016-09-05', '2016-08-03', 'A', '', 'EX-TS', ''),
(2, 345346, 'EX-IS', 'คร.087/59', 'บฑ.5544/59', 2, '2', '1', '2016-09-04', 'ไมอนุมัติ', 'เอกสาไม่ครบ', '2016-08-08', 'ไม่อนุมัติ', 'เอกสารไม่ครบ', '2016-09-05', '2016-09-12 03:25:00', '', '2016-09-05', '2016-09-06', 'F', '', 'EX-IS', '');

-- --------------------------------------------------------

--
-- Table structure for table `expert_skill`
--

CREATE TABLE `expert_skill` (
  `EXP_SKILL_ID` int(22) NOT NULL,
  `EXP_SKILL_NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `FACULTYID` int(22) NOT NULL COMMENT 'รหัสคณะ',
  `FACULTYNAME` varchar(100) DEFAULT NULL COMMENT 'ชื่อคณะภาษาไทย',
  `FACULTYNAMEENG` varchar(100) DEFAULT NULL COMMENT 'ชื่อคณะภาษาอังกฤษ',
  `FACULTYABB` varchar(32) DEFAULT NULL COMMENT 'ชื่อย่อคณะภาษาไทย',
  `FACULTYABBENG` varchar(32) DEFAULT NULL COMMENT 'ชื่อย่อคณะภาษาอังกฤษ',
  `DEAN` varchar(100) DEFAULT NULL COMMENT 'ชื่อคณบดีภาษาไทย',
  `DEANENG` varchar(100) DEFAULT NULL COMMENT 'ชื่อคณบดีภาษาอังกฤษ',
  `FACULTYTYPE` varchar(1) DEFAULT NULL COMMENT 'ชนิดของคณะ',
  `OUFACULTYNAME` varchar(100) DEFAULT NULL COMMENT 'ชื่อคณะภาษาอังกฤษ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`FACULTYID`, `FACULTYNAME`, `FACULTYNAMEENG`, `FACULTYABB`, `FACULTYABBENG`, `DEAN`, `DEANENG`, `FACULTYTYPE`, `OUFACULTYNAME`) VALUES
(10, 'ครุศาสตร์', 'Faculty of Education', 'ครุศาสตร์', '', '', '', 'F', 'Faculty of Education'),
(20, 'วิทยาศาสตร์และเทคโนโลยี', 'Faculty of Science and Technology', 'วิทยาศาสตร์และเทคโนโลยี', '', '', '', 'F', 'Faculty of Science and Technology');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_exam_proposal_thesis_is`
--

CREATE TABLE `faculty_exam_proposal_thesis_is` (
  `FACULTY_EXAM_PROPOSAL_THESIS_IS_ID` varchar(20) NOT NULL COMMENT 'รันลำดับเอกการขอสอบเค้าโครงวิทยานิพนธ์และค้นคว้าอิสระ',
  `FACULTY_EXAM_PROPOSAL_THESIS_IS_NOBOOK` varchar(20) NOT NULL COMMENT 'รันเลขรับที่เอกการขอสอบเค้าโครงวิทยานิพนธ์และค้นคว้าอิสระ',
  `FACULTY_EXAM_PROPOSAL_THESIS_IS_DATE` date NOT NULL COMMENT 'วันที่ที่ออกเอกการขอสอบเค้าโครงวิทยานิพนธ์และค้นคว้าอิสระ',
  `FACULTY_ID` int(20) NOT NULL COMMENT 'รหัสคณะ',
  `FACULTY_EXAM_PROPOSAL_THESIS_IS_PAPER_TYPE` varchar(50) NOT NULL COMMENT 'ชนิอของเอกสาร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty_exam_proposal_thesis_is`
--

INSERT INTO `faculty_exam_proposal_thesis_is` (`FACULTY_EXAM_PROPOSAL_THESIS_IS_ID`, `FACULTY_EXAM_PROPOSAL_THESIS_IS_NOBOOK`, `FACULTY_EXAM_PROPOSAL_THESIS_IS_DATE`, `FACULTY_ID`, `FACULTY_EXAM_PROPOSAL_THESIS_IS_PAPER_TYPE`) VALUES
('คร.085/59', 'บฑ.01524/59', '2016-06-14', 10, 'ขอสอบวิทยานิพนธ์'),
('คร.086/59', 'บฑ.01525/59', '2016-06-05', 20, 'ขอสอบเค้าโครงวิทยานิพนธ์');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_is_thesis`
--

CREATE TABLE `faculty_is_thesis` (
  `FACULTY_IS_THESIS_ID` int(20) NOT NULL COMMENT 'รหัสต้นสังกัดคณะของวิทยานิพนธ์อิสระ',
  `FACULTY_IS_THESIS_NOBOOK` varchar(200) NOT NULL COMMENT 'เลขรับที่ของต้นสังกัดคณะวิทยานิพนธ์อิสระ',
  `FACULTY_IS_THESIS_DATE` date NOT NULL COMMENT 'วันที่ต้นสังกัดคณะของวิทยานิพนธ์อิสระ',
  `FACULTY_ID` int(11) NOT NULL COMMENT 'รหัสคณะ',
  `FACULTY_PAPER_TYPE_IS_THESIS` varchar(200) NOT NULL COMMENT 'ชนิดเอกสาร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty_is_thesis`
--

INSERT INTO `faculty_is_thesis` (`FACULTY_IS_THESIS_ID`, `FACULTY_IS_THESIS_NOBOOK`, `FACULTY_IS_THESIS_DATE`, `FACULTY_ID`, `FACULTY_PAPER_TYPE_IS_THESIS`) VALUES
(1, '20001', '2016-09-01', 10, 'ขอสอบวิทยานิพนธ์'),
(2, '20002', '2016-09-01', 20, 'ขอสอบเค้าโครงวิทยานิพนธ์');

-- --------------------------------------------------------

--
-- Table structure for table `graduate_exam_proposal_thesis_is`
--

CREATE TABLE `graduate_exam_proposal_thesis_is` (
  `GRADUATE_EXAM_PROPOSAL_THESIS_IS_ID` int(20) NOT NULL COMMENT 'รหัสบัณฑิตขอสอบเค้าโครงวิทยานิพนธ์และค้นคว้าอิสระ',
  `GRADUATE_EXAM_PROPOSAL_THESIS_IS_NOBOOK` int(20) NOT NULL COMMENT 'รับที่บัณฑิตขอสอบเค้าโครงวิทยานิพนธ์และค้นคว้าอิสระ',
  `GRADUATE_EXAM_PROPOSAL_THESIS_IS_DATE` date NOT NULL COMMENT 'วันที่บัณฑิตขอสอบเค้าโครงวิทยานิพนธ์และค้นคว้าอิสระ',
  `GRADUATE_EXAM_PROPOSAL_THESIS_IS_PAPER_TYPE` varchar(100) NOT NULL COMMENT 'ชนิดเอกสารบัณฑิตขอสอบเค้าโครงวิทยานิพนธ์และค้นคว้าอิสระ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `graduate_exam_proposal_thesis_is`
--

INSERT INTO `graduate_exam_proposal_thesis_is` (`GRADUATE_EXAM_PROPOSAL_THESIS_IS_ID`, `GRADUATE_EXAM_PROPOSAL_THESIS_IS_NOBOOK`, `GRADUATE_EXAM_PROPOSAL_THESIS_IS_DATE`, `GRADUATE_EXAM_PROPOSAL_THESIS_IS_PAPER_TYPE`) VALUES
(1, 70001, '2016-08-11', 'ขอสอบวิทยานิพนธ์'),
(2, 70002, '2016-09-08', 'ขอสอบเค้าโครงวิทยานิพนธ์');

-- --------------------------------------------------------

--
-- Table structure for table `graduate_is_thesis`
--

CREATE TABLE `graduate_is_thesis` (
  `GRADUATE_IS_THESIS_ID` int(20) NOT NULL COMMENT 'รันลำดับเอกสารบัณฑิตวิทยานิพนธ์และค้นคว้าอิสระ',
  `GRADUATE_IS_THESIS_NOBOOK` varchar(20) NOT NULL COMMENT 'เลขรับที่ เอกสารบัณฑิตวิทยานิพนธ์และค้นคว้าอิสระ',
  `GRADUATE_IS_THESIS_DATE` date NOT NULL COMMENT 'วันที่ที่ออกเอกสารบัณฑิตวิทยานิพนธ์และค้นคว้าอิสระ',
  `GRADUATE_PAPER_TYPE_IS_THESIS` varchar(500) NOT NULL COMMENT 'ชนิดเอกสารบัณฑิต'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `graduate_is_thesis`
--

INSERT INTO `graduate_is_thesis` (`GRADUATE_IS_THESIS_ID`, `GRADUATE_IS_THESIS_NOBOOK`, `GRADUATE_IS_THESIS_DATE`, `GRADUATE_PAPER_TYPE_IS_THESIS`) VALUES
(1, '10001', '2016-09-08', 'ขอสอบวิทยานิพนธ์'),
(2, '10002', '2016-09-05', 'ขอสอบเค้าโครงวิทยานิพนธ์');

-- --------------------------------------------------------

--
-- Table structure for table `levelid`
--

CREATE TABLE `levelid` (
  `LEVELID` int(22) NOT NULL COMMENT 'ระดับปริญญา',
  `LEVELPLAN` varchar(50) NOT NULL COMMENT 'เก็บแผนการศึกษา',
  `LEVELNAME` varchar(100) DEFAULT NULL COMMENT 'ชื่อปริญญาภาษาไทย',
  `LEVELNAMEENG` varchar(100) DEFAULT NULL COMMENT 'ชื่อปริญญาภาษาอังกฤษ',
  `LEVELABB` varchar(32) DEFAULT NULL COMMENT 'ชื่อย่อปริญญาภาษาไทย',
  `LEVELABBENG` varchar(32) DEFAULT NULL COMMENT 'ชื่อย่อปริญญาภาษาอังกฤษ',
  `CURRENTACADYEAR` int(22) DEFAULT NULL COMMENT 'ปีปัจจุบัน',
  `CURRENTSEMESTER` int(22) DEFAULT NULL COMMENT 'เทอม',
  `FIRSTYEAR` int(22) DEFAULT NULL COMMENT 'ปีที่เข้า',
  `ENROLLSEMESTER` int(22) DEFAULT NULL COMMENT 'หลักสูตรกี่ปี',
  `LEVELNAMECERTIFY` varchar(100) DEFAULT NULL COMMENT 'ชื่อระดับการรับรอง',
  `DIVISIONCODE` varchar(2) DEFAULT NULL COMMENT 'รหัสคณะ',
  `LEVELCODE` varchar(2) DEFAULT NULL COMMENT 'ลำดับรหัส',
  `OULEVELNAME` varchar(100) DEFAULT NULL COMMENT 'ชื่อปริญญาภาษาอังกฤษ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `levelid`
--

INSERT INTO `levelid` (`LEVELID`, `LEVELPLAN`, `LEVELNAME`, `LEVELNAMEENG`, `LEVELABB`, `LEVELABBENG`, `CURRENTACADYEAR`, `CURRENTSEMESTER`, `FIRSTYEAR`, `ENROLLSEMESTER`, `LEVELNAMECERTIFY`, `DIVISIONCODE`, `LEVELCODE`, `OULEVELNAME`) VALUES
(80, '', 'ปริญญาโท ภาคปกติ', 'ป.โท ภาคปกติ', 'ป.โท ภาคปกติ', 'ปริญญาโท ภาคปกติ', 2554, 1, 0, 3, 'ป.โท', '1', '5', 'Master''s degree'),
(81, '', 'ปริญญาโท โครงการพิเศษ', 'ป.โท โครงการพิเศษ', 'ป.โท โครงการพิเศษ', 'ปริญญาโท โครงการพิเศษ', 2554, 1, 0, 3, 'ป.โท', '3', '5', 'Master''s degree');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `OFFICERID` int(22) NOT NULL COMMENT 'รันลำดับ',
  `OFFICERCODE` varchar(16) DEFAULT NULL COMMENT 'รหัสอาจารย์',
  `OFFICERPASSWORD` varchar(50) DEFAULT NULL COMMENT 'รหัสผ่านอาจารย์',
  `OFFICERTYPE` int(22) DEFAULT NULL COMMENT 'ประเภทอาจารย์ เช่น อาจารย์ ป.โท , อาจารย์ ป.เอก',
  `FACULTYID` int(22) DEFAULT NULL COMMENT 'รหัสคณะ',
  `DEPARTMENTID` int(22) DEFAULT NULL COMMENT 'รหัสแผนการศึกษา',
  `PREFIXID` int(22) DEFAULT NULL COMMENT 'รหัสคำนำหน้า',
  `OFFICERNAME` varchar(100) DEFAULT NULL COMMENT 'ชื่ออาจารย์ภาษาไทย',
  `OFFICERSURNAME` varchar(100) DEFAULT NULL COMMENT 'นามสกุลอาจารย์ภาษาไทย',
  `OFFICERNAMEENG` varchar(100) DEFAULT NULL COMMENT 'ชื่ออาจารย์ภาษาอังกฤษ',
  `OFFICERSURNAMEENG` varchar(100) DEFAULT NULL COMMENT 'นามสกุลอาจารย์ภาษาอังกฤษ',
  `OFFICEREMAIL` varchar(32) DEFAULT NULL COMMENT 'อีเมลล์อาจารย์',
  `OFFICERSTATUS` varchar(1) DEFAULT NULL COMMENT 'สถานะอาจารย์',
  `CONTACTADDRESS1` varchar(100) DEFAULT NULL COMMENT 'ห้องพักอาจารย์ 1',
  `CONTACTADDRESS2` varchar(100) DEFAULT NULL COMMENT 'ห้องพักอาจารย์ 2',
  `CONTACTPHONENO` varchar(100) DEFAULT NULL COMMENT 'เบอร์อาจารย์',
  `OFFICERLOGIN` varchar(16) DEFAULT NULL COMMENT 'ชื่อผู้ใช้ login',
  `CAMPUSID` int(22) DEFAULT NULL COMMENT 'รหัสวิทยาเขย',
  `OFFICERPOSITION` varchar(100) DEFAULT NULL COMMENT 'ตำแหน่ง',
  `OFFICEHOUR` varchar(100) DEFAULT NULL COMMENT 'เวลาทำงาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`OFFICERID`, `OFFICERCODE`, `OFFICERPASSWORD`, `OFFICERTYPE`, `FACULTYID`, `DEPARTMENTID`, `PREFIXID`, `OFFICERNAME`, `OFFICERSURNAME`, `OFFICERNAMEENG`, `OFFICERSURNAMEENG`, `OFFICEREMAIL`, `OFFICERSTATUS`, `CONTACTADDRESS1`, `CONTACTADDRESS2`, `CONTACTPHONENO`, `OFFICERLOGIN`, `CAMPUSID`, `OFFICERPOSITION`, `OFFICEHOUR`) VALUES
(561, '2538014', '-', 201, 10, 1001, 1, 'เอกรินทร์', 'ศรีลาพัฒน์', 'Ekkharin', 'Srilaphat', 'ekkharin@hotmail.com', 'N', '621', '', '043-722118 ext. 261, 043-712165', 'ekkharin', 1, 'ผู้ช่วยศาสตราจารย์', '08:00 - 16.30'),
(562, '2535001', '-', 201, 20, 1002, 3, 'สนิท', 'ตีเมืองซ้าย', 'Sanit', 'Teemueangsai', 'sanit.t@rmu.ac.th', 'N', 'อาคาร 8 ห้อง 821', '', '0810511638', '2535001', 1, 'ผู้ช่วยศาสตราจารย์', 'เวลา 8:30-16.30 น.'),
(566, NULL, NULL, 201, 2, NULL, 1, 'สายสมร', 'อมรพรรณ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(567, NULL, NULL, 2, 2, NULL, 1, 'งามจิต', 'ศรีทองดี', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `officer_exp_skill`
--

CREATE TABLE `officer_exp_skill` (
  `OFFICER_EXP_SKILL_ID` int(22) NOT NULL,
  `OFFICERID` int(22) NOT NULL,
  `EXP_SKILL_ID` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `officer_relation`
--

CREATE TABLE `officer_relation` (
  `officer_relation_id` int(11) NOT NULL,
  `officer_relation_STUDENTID` varchar(20) NOT NULL COMMENT 'รหัสนักศึกษา',
  `officer_relation_OFFICERID` varchar(20) NOT NULL COMMENT 'รหัสอาารย์',
  `officer_relation_type` varchar(20) NOT NULL COMMENT 'ชนิดของอาจารย์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `officer_relation`
--

INSERT INTO `officer_relation` (`officer_relation_id`, `officer_relation_STUDENTID`, `officer_relation_OFFICERID`, `officer_relation_type`) VALUES
(1, '345345', '561', 'ADVISER'),
(2, '345346', '562', 'SUBADVISER');

-- --------------------------------------------------------

--
-- Table structure for table `officer_rmu_class`
--

CREATE TABLE `officer_rmu_class` (
  `OFFICERCLASSID` int(22) NOT NULL,
  `OFFICERID` varchar(20) NOT NULL COMMENT 'รหัสอาจารย์',
  `RMU_CLASSID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `officer_rmu_class`
--

INSERT INTO `officer_rmu_class` (`OFFICERCLASSID`, `OFFICERID`, `RMU_CLASSID`) VALUES
(1, '561', 1),
(2, '562', 2);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `position_id` int(20) NOT NULL COMMENT 'รหัสประธาน',
  `positionname` varchar(200) NOT NULL COMMENT 'ชื่อประธานภาษาไทย',
  `positionname_eng` varchar(200) NOT NULL COMMENT 'ชื่อประธานภาษาอังกฤษ',
  `position_abbr` varchar(50) NOT NULL COMMENT 'ชื่อย่อตำแหน่ง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `positionname`, `positionname_eng`, `position_abbr`) VALUES
(1, 'รองศาสตราจารย์', 'Vice Professor', 'ร.ศ.'),
(2, 'ศาสตราจารย์', 'Professor', 'ศ.');

-- --------------------------------------------------------

--
-- Table structure for table `prefix`
--

CREATE TABLE `prefix` (
  `PREFIXID` int(22) NOT NULL COMMENT 'รันลำดับคำนำหน้า',
  `PREFIXNAME` varchar(40) DEFAULT NULL COMMENT 'ชื่อคำนำหน้าภาษาไทย',
  `PREFIXNAMEENG` varchar(100) DEFAULT NULL COMMENT 'ชื่อคำนำหน้าภาษาอังกฤษ',
  `PREFIXABB` varchar(32) DEFAULT NULL COMMENT 'ชื่อย่อคำนำหน้าภาษาไทย',
  `PREFIXABBENG` varchar(32) DEFAULT NULL COMMENT 'ชื่อย่อคำนำหน้าภาษาอังกฤษ',
  `DEFAULTSEX` varchar(1) DEFAULT NULL COMMENT 'เพศ',
  `PREFIXTYPE` varchar(1) DEFAULT NULL COMMENT 'ชนิดของคำนำหน้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prefix`
--

INSERT INTO `prefix` (`PREFIXID`, `PREFIXNAME`, `PREFIXNAMEENG`, `PREFIXABB`, `PREFIXABBENG`, `DEFAULTSEX`, `PREFIXTYPE`) VALUES
(1, 'นาย', 'Mr.', 'นาย', 'Mr.', 'M', 'P'),
(3, 'นาง', 'Mrs.', 'นาง', 'Mrs.', 'F', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `procedure_study`
--

CREATE TABLE `procedure_study` (
  `procedure_study_id` int(2) NOT NULL COMMENT 'รหัส ขั้นตอนการศึกษาของนักศึกษา',
  `procedure_name` varchar(100) NOT NULL COMMENT 'ชื่อขั้นตอน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `procedure_study`
--

INSERT INTO `procedure_study` (`procedure_study_id`, `procedure_name`) VALUES
(1, 'กำลังศึกษา'),
(2, 'ขอสอบประมวลความรู้'),
(3, 'ขอสอบวัดคุณสมบัติ'),
(4, 'ยื่นหัวข้อการค้นคว้าอิสระ'),
(5, 'ยื่นหัวข้อสอบวิทยานิพนธ์'),
(6, 'สอบการค้นคว้าอิสระ'),
(7, 'สอบวิทยานิพนธ์'),
(8, 'จบการศึกษา'),
(9, 'รีไทร์'),
(10, 'ลาออก'),
(11, 'ขอพักการศึกษา');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `PROGRAMID` int(22) NOT NULL COMMENT 'รันลำดับ',
  `PROGRAMCODE` varchar(16) DEFAULT NULL COMMENT 'รหัสโปรแกรมที่เรียน',
  `OFFICERID` int(22) NOT NULL COMMENT 'ประธานหลักสูตร',
  `PROGRAMTYPE` varchar(1) DEFAULT NULL COMMENT 'ประเภทแผนการเรียน',
  `PROGRAMYEAR` int(22) DEFAULT NULL COMMENT 'ปีที่เรียน',
  `FACULTYID` int(22) DEFAULT NULL COMMENT 'รหัสคณะ',
  `DEPARTMENTID` int(22) DEFAULT NULL COMMENT 'รหัสวิชาเรียน',
  `DEGREEID` int(22) DEFAULT NULL COMMENT 'รหัสปริญญา',
  `LEVELID` int(22) DEFAULT NULL COMMENT 'รหัสระดับปริญญา',
  `PROGRAMNAME` varchar(300) DEFAULT NULL COMMENT 'ชื่อวิชาเรียนภาษาไทย',
  `PROGRAMNAMEENG` varchar(300) DEFAULT NULL COMMENT 'ชื่อวิชาเรียนภาษาอังกฤษ',
  `PROGRAMABB` varchar(100) DEFAULT NULL COMMENT 'อักษรย่อภาษาไทย',
  `PROGRAMABBENG` varchar(100) DEFAULT NULL COMMENT 'อักษรย่อภาษาอังกฤษ',
  `LASTUPDATEDATETIME` date DEFAULT NULL COMMENT 'วันที่ปรับปรุงวิชาเรียน',
  `LASTUPDATEUSERID` varchar(16) DEFAULT NULL COMMENT 'ชื่อผู้ปรับปรุงวิชาเรียน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`PROGRAMID`, `PROGRAMCODE`, `OFFICERID`, `PROGRAMTYPE`, `PROGRAMYEAR`, `FACULTYID`, `DEPARTMENTID`, `DEGREEID`, `LEVELID`, `PROGRAMNAME`, `PROGRAMNAMEENG`, `PROGRAMABB`, `PROGRAMABBENG`, `LASTUPDATEDATETIME`, `LASTUPDATEUSERID`) VALUES
(50464, 'G45222', 561, 'M', 2551, 10, 1001, 15, 80, 'ชุดวิชาภาษาไทยเพื่อการสื่อสารและงานอาชีพสำหรับชาวต่างประเทศ', '', 'ค.บ. (ภาษาไทย)', 'B.Ed. (Thai Language)', '0000-00-00', 'PADITSUCK.P'),
(53481, 'G43232', 562, 'M', 2543, 20, 1002, 16, 81, 'สังคมศาสตร์เพื่อการพัฒนา', '', '', '', '0000-00-00', 'PADITSUCK.P');

-- --------------------------------------------------------

--
-- Table structure for table `programofficer`
--

CREATE TABLE `programofficer` (
  `PROGRAMOFFICER_ID` int(11) NOT NULL,
  `PROGRAMID` int(11) NOT NULL COMMENT 'รหัสหลักสูตร',
  `SEQUENCE` int(22) DEFAULT NULL COMMENT 'ลำดับ',
  `OFFICERID` int(22) DEFAULT NULL COMMENT 'รหัสอาจารย์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programofficer`
--

INSERT INTO `programofficer` (`PROGRAMOFFICER_ID`, `PROGRAMID`, `SEQUENCE`, `OFFICERID`) VALUES
(1, 50464, 1, 561),
(2, 53481, 1, 562);

-- --------------------------------------------------------

--
-- Table structure for table `programstructure`
--

CREATE TABLE `programstructure` (
  `PROGRAMSTRUCTUREID` int(22) NOT NULL COMMENT 'รหัสหลักสูตร',
  `PROGRAMID` int(22) NOT NULL COMMENT 'รหัสสาขา',
  `PROGRAMPLAN` varchar(50) NOT NULL COMMENT 'เก็บแผนการศึกษา',
  `MIN_CREDIT` varchar(200) NOT NULL COMMENT 'หลักสูตรขั้นตอน',
  `CONDITIONID` varchar(8) DEFAULT NULL COMMENT 'รหัสย่อหลักสูตร',
  `DESCRIPTION` varchar(100) DEFAULT NULL COMMENT 'ชื่อหลักสูตร',
  `CREDITTOTAL` int(22) DEFAULT NULL COMMENT 'หลักสูตรรวม',
  `CONDITIONTYPE` varchar(1) DEFAULT NULL COMMENT 'ชนิดหลักสูตร',
  `DESCRIPTIONENG` varchar(100) DEFAULT NULL COMMENT 'ชื่อหลักสูตรภาษาอังกฤษ',
  `MINGPA` int(22) DEFAULT NULL COMMENT 'เกรดขั้นต่ำ',
  `MAXCREDIT` int(22) DEFAULT NULL COMMENT 'หลักสูตรสูงสุด',
  `FACULTYID` int(22) DEFAULT NULL COMMENT 'รหัสคณะ',
  `DEPARTMENTID` int(22) DEFAULT NULL COMMENT 'รหัสสาขา'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programstructure`
--

INSERT INTO `programstructure` (`PROGRAMSTRUCTUREID`, `PROGRAMID`, `PROGRAMPLAN`, `MIN_CREDIT`, `CONDITIONID`, `DESCRIPTION`, `CREDITTOTAL`, `CONDITIONTYPE`, `DESCRIPTIONENG`, `MINGPA`, `MAXCREDIT`, `FACULTYID`, `DEPARTMENTID`) VALUES
(50108, 50464, '', '', '1.1', 'กลุ่มวิชาภาษาและการสื่อสาร (บังคับ)', 6, 'C', '', 0, 0, 10, 1001),
(50109, 53481, '', '', '1', 'หมวดศึกษาทั่วไป', 33, 'H', '', 0, 0, 20, 1002);

-- --------------------------------------------------------

--
-- Table structure for table `program_plan`
--

CREATE TABLE `program_plan` (
  `PROPLANID` int(11) NOT NULL,
  `PROPLANNAME` varchar(50) NOT NULL,
  `PROPLAN_CR` varchar(50) NOT NULL,
  `PROGRAMID` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `qualifyingexampaper`
--

CREATE TABLE `qualifyingexampaper` (
  `QUALIFYINGID` int(22) NOT NULL COMMENT 'รันลำดับเอกสาร',
  `QUALIF_FACULTY_ID` int(22) NOT NULL COMMENT 'ดึงข้อมูลจากตารางมาโชว์',
  `QUALIF_GRADUATE_ID` int(22) NOT NULL COMMENT 'ดึงข้อมูลจากตารางมาโชว์',
  `QUALIFYINGDATE` date NOT NULL COMMENT 'วันที่ ที่ออกเอกสาร',
  `STUDENTID` int(22) NOT NULL COMMENT 'ดึงข้อมูลนักศึกษมาโชว์',
  `EXAMPOSE` date NOT NULL COMMENT 'กำหนดวันสอบ',
  `EXPENDMONEY` float NOT NULL COMMENT 'เช็คการจ่ายเงิน',
  `DATEEXPEND` date NOT NULL COMMENT 'วันที่จ่ายเงิน',
  `EMPLOYEEDATE` date NOT NULL COMMENT 'วันที่พนักงานรับเงิน',
  `ADVISER_IS_APPROVE` tinyint(1) NOT NULL COMMENT 'ที่ปรึกษาเห็นควร',
  `ADVISER_IS_DATE` date NOT NULL COMMENT 'วันที่ที่ปรึกษาเห็นควร',
  `ADVISER_IS_SREASON` int(11) NOT NULL COMMENT 'เหตูผลที่ปรึกษาเห็นควร',
  `EMPLOYEEFACULTYDATE` date NOT NULL COMMENT 'วันที่เจ้าหน้าที่ตรวจเอกสาร',
  `PRESIDENTAPPROVE` tinyint(1) NOT NULL COMMENT 'ประธานคณะกรรมการเห็นควร',
  `PRESIDENTREASON` varchar(255) NOT NULL COMMENT 'เหตุผลประธานคณะกรรมการเห็นควร',
  `PRESIDENTDATE` date NOT NULL COMMENT 'วันที่ที่ประธานคณะกรรมการเห็นควร',
  `DEANFACULTYNAME` varchar(150) NOT NULL COMMENT 'ชื่อคณบดีของสาขา',
  `DEANFACULTYNAMEAPPROVE` tinyint(1) NOT NULL COMMENT 'คณบดีของสาขาเห็นควร',
  `DEANFACULTYNAMEREASON` varchar(255) NOT NULL COMMENT 'เหตุผลของคณบดีของสาขา',
  `DEANFACULTYNAMEDATE` date NOT NULL COMMENT 'วันที่ที่คณบดีของสาขาเห็นควร',
  `DEPUTYDEANFACULTYAPPROVE` tinyint(1) NOT NULL COMMENT 'ของคณบดีของสาขาเห็นควร',
  `DEPUTYDEANFACULTYDATE` date NOT NULL COMMENT 'วันที่ ที่ของคณบดีของสาขาเห็นควร',
  `DEANFACULTYAPPROVE` tinyint(1) NOT NULL COMMENT 'คณบดีของสาขาพิจารณา',
  `DEANFACULTYREASON` varchar(255) NOT NULL COMMENT 'เหตุผลที่คณบดีของสาขาพิจารณา',
  `DEANFACULTYDATE` date NOT NULL COMMENT 'วันที่ ที่คณบดีของสาขาพิจารณา',
  `DOCUMENTSTATUS` varchar(2) NOT NULL COMMENT '0 รอดำเนินการ 1 ผ่าน 2 ไม่ผ่าน'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualifyingexampaper`
--

INSERT INTO `qualifyingexampaper` (`QUALIFYINGID`, `QUALIF_FACULTY_ID`, `QUALIF_GRADUATE_ID`, `QUALIFYINGDATE`, `STUDENTID`, `EXAMPOSE`, `EXPENDMONEY`, `DATEEXPEND`, `EMPLOYEEDATE`, `ADVISER_IS_APPROVE`, `ADVISER_IS_DATE`, `ADVISER_IS_SREASON`, `EMPLOYEEFACULTYDATE`, `PRESIDENTAPPROVE`, `PRESIDENTREASON`, `PRESIDENTDATE`, `DEANFACULTYNAME`, `DEANFACULTYNAMEAPPROVE`, `DEANFACULTYNAMEREASON`, `DEANFACULTYNAMEDATE`, `DEPUTYDEANFACULTYAPPROVE`, `DEPUTYDEANFACULTYDATE`, `DEANFACULTYAPPROVE`, `DEANFACULTYREASON`, `DEANFACULTYDATE`, `DOCUMENTSTATUS`) VALUES
(1, 1, 1, '2016-09-02', 345345, '2016-09-05', 450, '2016-09-05', '2016-09-05', 1, '2016-09-05', 1, '2016-09-05', 1, '????', '2016-09-04', '????', 1, '????', '2016-09-05', 1, '2016-09-05', 1, '????', '2016-09-05', ''),
(2, 2, 2, '2016-09-02', 345346, '2016-09-01', 499, '2016-09-02', '2016-09-04', 1, '2016-09-04', 2, '2016-09-05', 1, '????', '2016-09-05', '????', 1, '????', '2016-09-05', 1, '2016-09-05', 1, '????', '2016-09-05', '');

-- --------------------------------------------------------

--
-- Table structure for table `qualif_faculty`
--

CREATE TABLE `qualif_faculty` (
  `QUALIF_FACULTYID` int(22) NOT NULL COMMENT 'รันลำดับเอกสาร',
  `QUALIF_FACULTYDETAIL` varchar(200) NOT NULL COMMENT 'รันเลขตรง รับที่',
  `QUALIF_FACULTYDATE` date NOT NULL COMMENT 'วันที่ ที่ออกเอกสาร',
  `FACULTYID` int(22) NOT NULL COMMENT 'ดึงคณะมาโชว์ตรงสักกัดคณะ'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualif_faculty`
--

INSERT INTO `qualif_faculty` (`QUALIF_FACULTYID`, `QUALIF_FACULTYDETAIL`, `QUALIF_FACULTYDATE`, `FACULTYID`) VALUES
(1, '33612', '2016-09-05', 10),
(2, '33613', '2016-09-04', 20);

-- --------------------------------------------------------

--
-- Table structure for table `qualif_graduate`
--

CREATE TABLE `qualif_graduate` (
  `QUALIF_GRADUATEID` int(22) NOT NULL COMMENT 'รันลำดับเอกสาร',
  `QUALIF_GRADUATEDETAIL` varchar(255) NOT NULL COMMENT 'รันเลขตรง รับที่',
  `QUALIF_GRADUATEDATE` date NOT NULL COMMENT 'วันที่ ที่ออกเอกสาร'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualif_graduate`
--

INSERT INTO `qualif_graduate` (`QUALIF_GRADUATEID`, `QUALIF_GRADUATEDETAIL`, `QUALIF_GRADUATEDATE`) VALUES
(1, '43110', '2016-09-01'),
(2, '43111', '2016-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `STUDENTID` int(22) DEFAULT NULL COMMENT 'รหัสลำดับนักศึกษา',
  `RESEARCHCODE` varchar(16) NOT NULL COMMENT 'รหัสงานวิจัย',
  `RESEARCHNAME` varchar(255) DEFAULT NULL COMMENT 'ชื่องานวิจัยภาษาไทย',
  `RESEARCHNAMEENG` varchar(255) DEFAULT NULL COMMENT 'ชื่องานวิจัยภาษาอังกฤษ',
  `RESEARCHSTATUS` varchar(1) DEFAULT NULL COMMENT 'สถานะงานวิจัย',
  `SUBMITDATE` varchar(100) DEFAULT NULL COMMENT 'วันที่ส่ง',
  `COMPLETEDATE` varchar(100) DEFAULT NULL COMMENT 'วันที่ส่งเล่มสมบูรณ์',
  `ISBN` varchar(20) DEFAULT NULL COMMENT 'เลขหนังสือ',
  `DESCRIPTION` varchar(255) DEFAULT NULL COMMENT 'รายะลเอียด',
  `RMU_CLASSID` int(22) DEFAULT NULL COMMENT 'รหัสคลาส',
  `GRADE` varchar(4) DEFAULT NULL COMMENT 'เกรดที่ได้',
  `PRINTSTATUS` varchar(255) DEFAULT NULL COMMENT 'สถานะการพิมพ์',
  `PRINTDATE` varchar(100) DEFAULT NULL COMMENT 'วันที่พิมพ์',
  `STARTDATE` varchar(100) DEFAULT NULL COMMENT 'วันที่เริ่มทำ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`STUDENTID`, `RESEARCHCODE`, `RESEARCHNAME`, `RESEARCHNAMEENG`, `RESEARCHSTATUS`, `SUBMITDATE`, `COMPLETEDATE`, `ISBN`, `DESCRIPTION`, `RMU_CLASSID`, `GRADE`, `PRINTSTATUS`, `PRINTDATE`, `STARTDATE`) VALUES
(345345, '1006903', 'โครงการพัฒนาวิชาชีพ', NULL, 'A', NULL, NULL, NULL, NULL, 266987, NULL, NULL, NULL, NULL),
(345346, '3506903', 'ของบุคลากรโรงเรียนสาธิตในเขตอำเภอเมือง จังหวัดมหาสารคาม', NULL, 'E', NULL, NULL, NULL, NULL, 266987, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rmu_class`
--

CREATE TABLE `rmu_class` (
  `RMU_CLASSID` int(22) NOT NULL,
  `CAMPUSID` int(22) NOT NULL COMMENT 'รหัสวิทยาเขต',
  `LEVELID` int(22) NOT NULL COMMENT 'รหัสระดับปริญญา',
  `SEMESTER` varchar(20) NOT NULL COMMENT 'เทอมที่สอน',
  `COURSEID` int(22) NOT NULL COMMENT 'รหัสวิชา',
  `SECTION` varchar(20) NOT NULL COMMENT 'กลุ่มที่สอน',
  `ENROLLSEAT` int(50) NOT NULL COMMENT 'จำนวนที่ลงทะเบียนจริง',
  `ACADYEAR` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rmu_class`
--

INSERT INTO `rmu_class` (`RMU_CLASSID`, `CAMPUSID`, `LEVELID`, `SEMESTER`, `COURSEID`, `SECTION`, `ENROLLSEAT`, `ACADYEAR`) VALUES
(1, 1, 80, '1', 1001, '1', 70, '2559'),
(2, 2, 81, '2', 1002, '2', 55, '2559');

-- --------------------------------------------------------

--
-- Table structure for table `studentmaster`
--

CREATE TABLE `studentmaster` (
  `STUDENTID` int(22) NOT NULL COMMENT 'รันลำดับ',
  `STUDENTCODE` varchar(16) DEFAULT NULL COMMENT 'รหัสนักศึกษา',
  `ACADID` int(22) DEFAULT NULL COMMENT 'ประเภทเกียรตินิยม',
  `CAMPUSID` int(22) DEFAULT NULL COMMENT 'รหัสวิทยาเขย',
  `LEVELID` int(22) DEFAULT NULL COMMENT 'รหัสระดับการศึกษา',
  `FACULTYID` int(22) DEFAULT NULL,
  `DEPARTMENTID` int(22) DEFAULT NULL COMMENT 'รหัสแผนการศึกษา',
  `PROGRAMID` int(22) DEFAULT NULL COMMENT 'รหัสโปรแกรมการศึกษา',
  `GRAD_ENG_EXAM` tinyint(1) NOT NULL COMMENT 'คะแนนสอบภาษาอังกฤษ',
  `PREFIXID` int(22) DEFAULT NULL COMMENT 'รหัสคำนำหน้า',
  `STUDENTNAME` varchar(100) DEFAULT NULL COMMENT 'ชื่อนักศึกษาภาษาไทย',
  `STUDENTNAMEENG` varchar(100) DEFAULT NULL COMMENT 'ชื่อนักศึกษาภาษาอังกฤษ',
  `STUDENTSURNAME` varchar(100) DEFAULT NULL COMMENT 'นามสกุลนักศึกษาภาษาไทย',
  `STUDENTSURNAMEENG` varchar(100) DEFAULT NULL COMMENT 'นามสกุลนักศึกษาภาษาอังกฤษ',
  `GPA` int(22) DEFAULT NULL COMMENT 'เกรดรายเทอม',
  `ADMITACADYEAR` int(22) DEFAULT NULL COMMENT 'ปีที่เข้าศึกษา',
  `ADMITSEMESTER` int(22) DEFAULT NULL,
  `ADMITDATE` varchar(50) DEFAULT NULL COMMENT 'วันที่เข้าศึกษา',
  `STUDENTGROUP` varchar(16) DEFAULT NULL COMMENT 'นักศึกษาเข้าเรียนกลุ่มอะไร',
  `STUDENTPASSWORD` varchar(16) DEFAULT NULL COMMENT 'รหัสผ่านนักศึกษา',
  `STUDENTEMAIL` varchar(50) DEFAULT NULL COMMENT 'อีเมลล์นักศึกษา',
  `STUDENTYEAR` int(22) DEFAULT NULL COMMENT 'นักศึกษาอยู่ชั้นปี',
  `STUDENTSTATUS` int(22) DEFAULT NULL COMMENT 'สถานะนักศึกษา',
  `procedure_study_id` int(2) NOT NULL COMMENT 'สถานะจบ 0=retire 1=ศึกษาอยู่ 2=จบการศึกษา',
  `procedure_study_result` int(2) NOT NULL COMMENT 'ผลของแต่ละขั้นตอนในการเรียน 0=ไม่ผ่าน 1=ผ่าน 2= รอผ',
  `OFFICERID` int(22) DEFAULT NULL COMMENT 'รหัสอาจารย์',
  `FINANCESTATUS` varchar(1) DEFAULT NULL COMMENT 'ภาระทางการเงิน',
  `LASTUPDATEUSERID` varchar(16) DEFAULT NULL COMMENT 'หมายเลขผู้ใช่ที่ปรับปรุงล่าสุด',
  `LASTUPDATEDATETIME` varchar(50) DEFAULT NULL COMMENT 'วันที่ปรับปรุงล่าสุด',
  `COURSETOTAL` int(22) DEFAULT NULL COMMENT 'จำนวนแผนการเรียนตามหลักสูตรที่ต้องผ่าน',
  `COURSEENTRY` int(22) DEFAULT NULL COMMENT 'จำนวนแผนการเรียนตามหลักสูตรที่ผ่านแล้ว'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentmaster`
--

INSERT INTO `studentmaster` (`STUDENTID`, `STUDENTCODE`, `ACADID`, `CAMPUSID`, `LEVELID`, `FACULTYID`, `DEPARTMENTID`, `PROGRAMID`, `GRAD_ENG_EXAM`, `PREFIXID`, `STUDENTNAME`, `STUDENTNAMEENG`, `STUDENTSURNAME`, `STUDENTSURNAMEENG`, `GPA`, `ADMITACADYEAR`, `ADMITSEMESTER`, `ADMITDATE`, `STUDENTGROUP`, `STUDENTPASSWORD`, `STUDENTEMAIL`, `STUDENTYEAR`, `STUDENTSTATUS`, `procedure_study_id`, `procedure_study_result`, `OFFICERID`, `FINANCESTATUS`, `LASTUPDATEUSERID`, `LASTUPDATEDATETIME`, `COURSETOTAL`, `COURSEENTRY`) VALUES
(345345, '588210200127', 2, 1, 80, 10, 1001, 50464, 0, 1, 'สมบัติ', 'Sombat', 'ปัญญา', 'Panya', 4, 2558, 1, '15 ส.ค.  2015', '72287', '-', 'sombatp_panya@hotmail.com', 1, 71, 1, 0, 0, 'N', 'MANGBONG', '10 ก.ย.  2015', 4, 3),
(345346, '588210200128', 2, 2, 81, 20, 1002, 53481, 0, 3, 'สว่าง', 'Sawang', 'ชินโคตร', 'Chinkhot', 4, 2558, 1, '15 ส.ค.  2015', '72287', '-', 'you133345@gmail.com', 2, 10, 1, 0, 0, 'D', 'SUJITRA.T', '20 ม.ค.  2016', 14, 5),
(345347, '588210200129', 2, 1, 80, 10, 1001, 53482, 0, 1, 'สมบัติ1', 'Sombat', 'ปัญญา', 'Panya', 4, 2558, 1, '15 ส.ค.  2015', '72287', '-', 'sombatp_panya@hotmail.com', 1, 71, 1, 0, 0, 'N', 'MANGBONG', '10 ก.ย.  2015', 4, 3),
(345348, '588210200130', 2, 2, 81, 20, 1002, 53483, 0, 3, 'สว่าง2', 'Sawang', 'ชินโคตร', 'Chinkhot', 4, 2558, 1, '15 ส.ค.  2015', '72287', '-', 'you133345@gmail.com', 2, 10, 1, 0, 0, 'D', 'SUJITRA.T', '20 ม.ค.  2016', 14, 5);

-- --------------------------------------------------------

--
-- Table structure for table `studentstatus`
--

CREATE TABLE `studentstatus` (
  `STUDENTID` int(22) NOT NULL COMMENT 'รหัสนักศึกษา',
  `ACADYEAR` int(22) DEFAULT NULL COMMENT 'ปีที่เข้าศึกาา',
  `SEMESTER` int(22) DEFAULT NULL COMMENT 'เทอมที่เข้าเรียน',
  `OFFICERID` int(22) DEFAULT NULL COMMENT 'รหัสอาจารย์',
  `STUDENTSTATUS` int(22) DEFAULT NULL COMMENT 'สถานะนักศึกษา',
  `ENROLLSTATUS` varchar(1) DEFAULT NULL COMMENT 'สถานะการลงทะเบียน',
  `PARTIALPAYMENT` int(22) DEFAULT NULL COMMENT 'ชำระเงิน',
  `GPA` int(22) DEFAULT NULL COMMENT 'เกรดในแต่ละเทอม',
  `GPAX` int(22) DEFAULT NULL COMMENT 'เกรดเฉลี่ย',
  `GRADESTATUS` varchar(1) DEFAULT NULL COMMENT 'สถานะเกรด',
  `GRADEPRO` varchar(16) DEFAULT NULL COMMENT 'เกรดดีเยี่ยม',
  `SEMESTERINDEX` int(22) DEFAULT NULL COMMENT 'ภาคเรียนที่เข้า',
  `CREATEDATETIME` varchar(100) DEFAULT NULL COMMENT 'วันเวลาที่สร้าง',
  `CREATEUSERID` varchar(16) DEFAULT NULL COMMENT 'สร้างผู้ใช้งาน',
  `LASTUPDATEDATETIME` varchar(100) DEFAULT NULL COMMENT 'วันที่ปรับปรุงล่าสุด',
  `LASTUPDATEUSERID` varchar(16) DEFAULT NULL COMMENT 'ผู้ใช้ที่ปรับปรุง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentstatus`
--

INSERT INTO `studentstatus` (`STUDENTID`, `ACADYEAR`, `SEMESTER`, `OFFICERID`, `STUDENTSTATUS`, `ENROLLSTATUS`, `PARTIALPAYMENT`, `GPA`, `GPAX`, `GRADESTATUS`, `GRADEPRO`, `SEMESTERINDEX`, `CREATEDATETIME`, `CREATEUSERID`, `LASTUPDATEDATETIME`, `LASTUPDATEUSERID`) VALUES
(345345, 2554, 1, 561, 11, 'W', 1, 0, 0, 'B', 'A', 25541, '01 ส.ค.  2011', 'TASSANA.A', '01 ส.ค.  2011', 'TASSANA.A'),
(345346, 2557, 1, 562, 71, 'R', 1, 0, 0, 'B', 'A', 25571, '21 พ.ย.  2014', 'MANGBONG', '21 พ.ย.  2014', 'MANGBONG');

-- --------------------------------------------------------

--
-- Table structure for table `thesis`
--

CREATE TABLE `thesis` (
  `STUDENTID` int(22) DEFAULT NULL COMMENT 'รหัสลำดับนักศึกษา',
  `THESISCODE` varchar(16) NOT NULL COMMENT 'รหัสวิทยานิพนธ์',
  `THESISNAME` varchar(255) DEFAULT NULL COMMENT 'ชื่อวิทยานิพนธ์ภาษาไทย',
  `THESISNAMEENG` varchar(255) DEFAULT NULL COMMENT 'ชื่อวิทยานิพนธ์ภาษาอังกฤษ',
  `THESISSTATUS` varchar(1) DEFAULT NULL COMMENT 'สถานะวิทยานิพนธ์',
  `SUBMITDATE` varchar(100) DEFAULT NULL COMMENT 'วันที่ส่งเล่ม',
  `COMPLETEDATE` varchar(100) DEFAULT NULL COMMENT 'วันที่ส่งเล่มสมบูรณ์',
  `ISBN` varchar(20) DEFAULT NULL COMMENT 'เลขหนังสือ',
  `DESCRIPTION` varchar(255) DEFAULT NULL COMMENT 'ลักษณะของ วิทยานิพนธ์',
  `RMU_CLASSID` int(22) DEFAULT NULL COMMENT 'รหัสตารางสอนของอาจารย์',
  `ACADYEARFROM` int(22) DEFAULT NULL COMMENT 'ปี่ที่เริ่มทำ',
  `SEMESTERFROM` int(22) DEFAULT NULL COMMENT 'เทอมที่เริ่มทำ',
  `ACADYEARTO` int(22) DEFAULT NULL COMMENT 'ปีที่ทำเสร็จ',
  `SEMESTERTO` int(22) DEFAULT NULL COMMENT 'เทอมที่ทำเสร็จ',
  `GRADE` varchar(4) DEFAULT NULL COMMENT 'เกรดที่ได้',
  `THESISTYPE` varchar(1) DEFAULT NULL COMMENT 'เป็นชนิดของเอกสาร เช่น  T คือ วิทยานิพนธ์ I คือ ค้นคว้าอิสระ',
  `TOTALCREDITSATISFY` int(22) DEFAULT NULL COMMENT 'จำนวนหน่วยกิจรวม',
  `PRINTSTATUS` varchar(255) DEFAULT NULL COMMENT 'สถานะการพิมพ์เอกสาร',
  `PRINTDATE` varchar(100) DEFAULT NULL COMMENT 'วันที่พิมพ์เอกสาร',
  `STARTDATE` varchar(100) DEFAULT NULL COMMENT 'วันที่เริ่มพิมพ์เอกสาร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thesis`
--

INSERT INTO `thesis` (`STUDENTID`, `THESISCODE`, `THESISNAME`, `THESISNAMEENG`, `THESISSTATUS`, `SUBMITDATE`, `COMPLETEDATE`, `ISBN`, `DESCRIPTION`, `RMU_CLASSID`, `ACADYEARFROM`, `SEMESTERFROM`, `ACADYEARTO`, `SEMESTERTO`, `GRADE`, `THESISTYPE`, `TOTALCREDITSATISFY`, `PRINTSTATUS`, `PRINTDATE`, `STARTDATE`) VALUES
(345347, '1232132345654', 'พัฒนาระบบสารสนเทศ', '', 'A', '', '', '', '', 0, 2553, 1, 2554, 1, '', 'T', 12, '', '', ''),
(345344, '14521323456354', 'โครงการพัฒนาวิชาชีพ', '', 'A', '', '', '', '', 0, 2553, 1, 2554, 1, '', 'T', 12, '', '', ''),
(345345, '1452132345654', 'โครงการพัฒนาวิชาชีพ', 'Work Development Project', 'A', '', '', '', '', 0, 2553, 1, 2554, 1, '', 'T', 12, '', '', ''),
(345348, '4561323455884', 'ระบบลงทะเบียน', '', 'E', '', '', '000000', '', 266987, 2554, 1, 2554, 2, '', 'T', 15, '', '', ''),
(345349, '9651323455884', 'การจัดการความรู้เพื่อพัฒนาประสิทธิภาพการปฏิบัติงานตามหลักการจัดการ 6Ms ของบุคลากรโรงเรียนสาธิตในเขตอำเภอเมือง จังหวัดมหาสารคาม', '', 'E', '', '', '000000', '', 266987, 2554, 1, 2554, 2, '', 'I', 15, '', '', ''),
(345346, '96513234655884', 'การจัดการความรู้เพื่อพัฒนาประสิทธิภาพการปฏิบัติงานตามหลักการจัดการ 6Ms ของบุคลากรโรงเรียนสาธิตในเขตอำเภอเมือง จังหวัดมหาสารคาม', '', 'E', '', '', '000000', '', 266987, 2554, 1, 2554, 2, '', 'I', 15, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `thesisadviser`
--

CREATE TABLE `thesisadviser` (
  `THESISADVISER_ID` int(22) NOT NULL COMMENT 'รหัสอาจารย์ที่ปรึกษาวิทยานิพนธ์',
  `OFFICERID` int(22) NOT NULL COMMENT 'รหัสอาจารย์',
  `STUDENTID` int(22) NOT NULL COMMENT 'รหัสนักศึกษา',
  `POSITION` varchar(100) DEFAULT NULL COMMENT 'ตำแหน่ง',
  `THESISTYPE` varchar(1) DEFAULT NULL COMMENT 'ประเภทของวิทยานิพนธ์',
  `THEISISLOAD` int(22) DEFAULT NULL COMMENT 'จำนวนครั้งที่โหลด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thesisadviser`
--

INSERT INTO `thesisadviser` (`THESISADVISER_ID`, `OFFICERID`, `STUDENTID`, `POSITION`, `THESISTYPE`, `THEISISLOAD`) VALUES
(12004, 345345, 561, 'รองศาสตราจารย์', '1', 1),
(12005, 345346, 562, 'รองศาสตราจารย์', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transcript`
--

CREATE TABLE `transcript` (
  `TRANSCRIPTID` int(22) NOT NULL COMMENT 'รันลำดับ',
  `STUDENTID` int(22) DEFAULT NULL COMMENT 'รหัสนักศึกษา',
  `ACADYEAR` int(22) DEFAULT NULL COMMENT 'ปีที่ขอข้อมูล',
  `SEMESTER` int(22) DEFAULT NULL COMMENT 'เทอม',
  `COURSEID` int(22) DEFAULT NULL COMMENT 'รหัสหลักสูตร',
  `COURSEIDREPLACE` int(22) DEFAULT NULL COMMENT 'รหัสหลักสูตรที่ใช้แทน',
  `CREDITATTEMPT` int(22) DEFAULT NULL COMMENT 'หน่วยกิต',
  `CREDITSATISFY` int(22) DEFAULT NULL COMMENT 'หน่วยกิต',
  `GRADEPOINT` int(22) DEFAULT NULL COMMENT 'หน่วยกิตที่เรียน',
  `GRADE` varchar(16) DEFAULT NULL COMMENT 'เกรดที่ได้',
  `GRADEMODE` varchar(2) DEFAULT NULL COMMENT 'โหมดเกรด',
  `INPUTFROM` varchar(1) DEFAULT NULL COMMENT 'ข้อมูลจาก',
  `LASTUPDATEUSERID` varchar(16) DEFAULT NULL COMMENT 'รหัสที่ปรับปรุงครั้งล่าสุด',
  `LASTUPDATEDATETIME` varchar(100) DEFAULT NULL COMMENT 'วันที่ที่ปรับปรุงครั้งล่าสุด',
  `LASTUPDATEREFERENCE` varchar(16) DEFAULT NULL COMMENT 'วันที่อ้างอิงที่ปรับปรุงครั้งล่าสุด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transcript`
--

INSERT INTO `transcript` (`TRANSCRIPTID`, `STUDENTID`, `ACADYEAR`, `SEMESTER`, `COURSEID`, `COURSEIDREPLACE`, `CREDITATTEMPT`, `CREDITSATISFY`, `GRADEPOINT`, `GRADE`, `GRADEMODE`, `INPUTFROM`, `LASTUPDATEUSERID`, `LASTUPDATEDATETIME`, `LASTUPDATEREFERENCE`) VALUES
(1, 345345, 2553, 1, 1001, 13260, 3, 3, 12, 'A', 'GD', 'R', 'TASSANA.A', '31 ต.ค.  2012', '31/10/55'),
(2, 345346, 2558, 1, 1002, 13260, 3, 3, 12, 'A', 'GD', 'R', 'TASSANA.A', '31 ต.ค.  2012', '31/10/55');

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `GROUPID` int(22) NOT NULL COMMENT 'รันลำดับ',
  `USERCODE` varchar(22) NOT NULL COMMENT '๊ชื่อที่ใช้เข้าระบบ',
  `USERPASS` varchar(50) NOT NULL COMMENT 'รหัสผ่าน',
  `GROUPTYPE` varchar(50) NOT NULL COMMENT 'บอกสถานะ เช่น ชื่อผู้เข้าระบบเป็นนักศึกษา , ชื่อผู้เข้าระบบเป็นอาจารย์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`GROUPID`, `USERCODE`, `USERPASS`, `GROUPTYPE`) VALUES
(1, '588210200127', '588210200127', 'STUDENT'),
(2, '2538014', '670b14728ad9902aecba32e22fa4f6bd', 'TEACHER'),
(3, 'ADMIN', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounting_exam_proposal_thesis_is`
--
ALTER TABLE `accounting_exam_proposal_thesis_is`
  ADD PRIMARY KEY (`ACCOUNT_ID`);

--
-- Indexes for table `adviser`
--
ALTER TABLE `adviser`
  ADD PRIMARY KEY (`ADVISER_ID`);

--
-- Indexes for table `advisertype`
--
ALTER TABLE `advisertype`
  ADD PRIMARY KEY (`advisertype_id`);

--
-- Indexes for table `appoint_adviser_is_thesis`
--
ALTER TABLE `appoint_adviser_is_thesis`
  ADD PRIMARY KEY (`APPOINT_AVISER_IS_THESIS_ID`);

--
-- Indexes for table `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`CAMPUSID`);

--
-- Indexes for table `ce_qe_exam`
--
ALTER TABLE `ce_qe_exam`
  ADD PRIMARY KEY (`CE_QE_ID`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `comprehensiveexampaper`
--
ALTER TABLE `comprehensiveexampaper`
  ADD PRIMARY KEY (`COMPREHENSIVEID`);

--
-- Indexes for table `compre_faculty`
--
ALTER TABLE `compre_faculty`
  ADD PRIMARY KEY (`COMPRE_FACULTY_ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`COURSEID`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`DEGREEID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DEPARTMENTID`);

--
-- Indexes for table `document_index`
--
ALTER TABLE `document_index`
  ADD PRIMARY KEY (`doc_index_id`);

--
-- Indexes for table `entrydegree`
--
ALTER TABLE `entrydegree`
  ADD PRIMARY KEY (`ENTRYDEGREECODE`);

--
-- Indexes for table `exam_proposal_thesis_is`
--
ALTER TABLE `exam_proposal_thesis_is`
  ADD PRIMARY KEY (`EXAM_PROPOSAL_THESIS_IS_ID`);

--
-- Indexes for table `expert_skill`
--
ALTER TABLE `expert_skill`
  ADD PRIMARY KEY (`EXP_SKILL_ID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`FACULTYID`);

--
-- Indexes for table `faculty_exam_proposal_thesis_is`
--
ALTER TABLE `faculty_exam_proposal_thesis_is`
  ADD PRIMARY KEY (`FACULTY_EXAM_PROPOSAL_THESIS_IS_ID`);

--
-- Indexes for table `faculty_is_thesis`
--
ALTER TABLE `faculty_is_thesis`
  ADD PRIMARY KEY (`FACULTY_IS_THESIS_ID`);

--
-- Indexes for table `graduate_exam_proposal_thesis_is`
--
ALTER TABLE `graduate_exam_proposal_thesis_is`
  ADD PRIMARY KEY (`GRADUATE_EXAM_PROPOSAL_THESIS_IS_ID`);

--
-- Indexes for table `graduate_is_thesis`
--
ALTER TABLE `graduate_is_thesis`
  ADD PRIMARY KEY (`GRADUATE_IS_THESIS_ID`);

--
-- Indexes for table `levelid`
--
ALTER TABLE `levelid`
  ADD PRIMARY KEY (`LEVELID`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`OFFICERID`);

--
-- Indexes for table `officer_exp_skill`
--
ALTER TABLE `officer_exp_skill`
  ADD PRIMARY KEY (`OFFICER_EXP_SKILL_ID`);

--
-- Indexes for table `officer_relation`
--
ALTER TABLE `officer_relation`
  ADD PRIMARY KEY (`officer_relation_id`);

--
-- Indexes for table `officer_rmu_class`
--
ALTER TABLE `officer_rmu_class`
  ADD PRIMARY KEY (`OFFICERCLASSID`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `prefix`
--
ALTER TABLE `prefix`
  ADD PRIMARY KEY (`PREFIXID`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`PROGRAMID`);

--
-- Indexes for table `programofficer`
--
ALTER TABLE `programofficer`
  ADD PRIMARY KEY (`PROGRAMOFFICER_ID`);

--
-- Indexes for table `programstructure`
--
ALTER TABLE `programstructure`
  ADD PRIMARY KEY (`PROGRAMSTRUCTUREID`);

--
-- Indexes for table `program_plan`
--
ALTER TABLE `program_plan`
  ADD PRIMARY KEY (`PROPLANID`);

--
-- Indexes for table `qualifyingexampaper`
--
ALTER TABLE `qualifyingexampaper`
  ADD PRIMARY KEY (`QUALIFYINGID`);

--
-- Indexes for table `qualif_faculty`
--
ALTER TABLE `qualif_faculty`
  ADD PRIMARY KEY (`QUALIF_FACULTYID`);

--
-- Indexes for table `qualif_graduate`
--
ALTER TABLE `qualif_graduate`
  ADD PRIMARY KEY (`QUALIF_GRADUATEID`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`RESEARCHCODE`);

--
-- Indexes for table `rmu_class`
--
ALTER TABLE `rmu_class`
  ADD PRIMARY KEY (`RMU_CLASSID`);

--
-- Indexes for table `studentmaster`
--
ALTER TABLE `studentmaster`
  ADD PRIMARY KEY (`STUDENTID`);

--
-- Indexes for table `studentstatus`
--
ALTER TABLE `studentstatus`
  ADD PRIMARY KEY (`STUDENTID`);

--
-- Indexes for table `thesis`
--
ALTER TABLE `thesis`
  ADD PRIMARY KEY (`THESISCODE`);

--
-- Indexes for table `transcript`
--
ALTER TABLE `transcript`
  ADD PRIMARY KEY (`TRANSCRIPTID`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`GROUPID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounting_exam_proposal_thesis_is`
--
ALTER TABLE `accounting_exam_proposal_thesis_is`
  MODIFY `ACCOUNT_ID` int(20) NOT NULL AUTO_INCREMENT COMMENT 'รหัสบัญชีการจ่ายเงินสอบเค้าโครงวิทยานิพนธ์', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `adviser`
--
ALTER TABLE `adviser`
  MODIFY `ADVISER_ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `advisertype`
--
ALTER TABLE `advisertype`
  MODIFY `advisertype_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสชนิดอาอจารย์', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `appoint_adviser_is_thesis`
--
ALTER TABLE `appoint_adviser_is_thesis`
  MODIFY `APPOINT_AVISER_IS_THESIS_ID` int(20) NOT NULL AUTO_INCREMENT COMMENT 'รันลำดับการแต่งตั้งอาจารย์ที่ปรึกษา', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comprehensiveexampaper`
--
ALTER TABLE `comprehensiveexampaper`
  MODIFY `COMPREHENSIVEID` int(22) NOT NULL AUTO_INCREMENT COMMENT 'เลขรันลำดับ', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `compre_faculty`
--
ALTER TABLE `compre_faculty`
  MODIFY `COMPRE_FACULTY_ID` int(22) NOT NULL AUTO_INCREMENT COMMENT 'รันลำดับเอกสาร', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `DEPARTMENTID` int(22) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสาขา', AUTO_INCREMENT=9902;
--
-- AUTO_INCREMENT for table `exam_proposal_thesis_is`
--
ALTER TABLE `exam_proposal_thesis_is`
  MODIFY `EXAM_PROPOSAL_THESIS_IS_ID` int(20) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการขอสอบวิทยานิพนธ์อิสระ', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `expert_skill`
--
ALTER TABLE `expert_skill`
  MODIFY `EXP_SKILL_ID` int(22) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `officer_exp_skill`
--
ALTER TABLE `officer_exp_skill`
  MODIFY `OFFICER_EXP_SKILL_ID` int(22) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `officer_relation`
--
ALTER TABLE `officer_relation`
  MODIFY `officer_relation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `position_id` int(20) NOT NULL AUTO_INCREMENT COMMENT 'รหัสประธาน', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `programofficer`
--
ALTER TABLE `programofficer`
  MODIFY `PROGRAMOFFICER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `program_plan`
--
ALTER TABLE `program_plan`
  MODIFY `PROPLANID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `qualifyingexampaper`
--
ALTER TABLE `qualifyingexampaper`
  MODIFY `QUALIFYINGID` int(22) NOT NULL AUTO_INCREMENT COMMENT 'รันลำดับเอกสาร', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `qualif_faculty`
--
ALTER TABLE `qualif_faculty`
  MODIFY `QUALIF_FACULTYID` int(22) NOT NULL AUTO_INCREMENT COMMENT 'รันลำดับเอกสาร', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `qualif_graduate`
--
ALTER TABLE `qualif_graduate`
  MODIFY `QUALIF_GRADUATEID` int(22) NOT NULL AUTO_INCREMENT COMMENT 'รันลำดับเอกสาร', AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
