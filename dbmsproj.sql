-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 24, 2021 at 06:31 AM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmsproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `USERNAME` varchar(25) NOT NULL,
  `PASSWORD` varchar(25) NOT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`USERNAME`, `PASSWORD`) VALUES
('gec', 'gec123');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

DROP TABLE IF EXISTS `paper`;
CREATE TABLE IF NOT EXISTS `paper` (
  `SubjectID` int(11) NOT NULL,
  `PaperID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` varchar(25) NOT NULL,
  `Dlink` varchar(200) NOT NULL,
  PRIMARY KEY (`PaperID`),
  KEY `SubjectID` (`SubjectID`)
) ENGINE=InnoDB AUTO_INCREMENT=233 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`SubjectID`, `PaperID`, `Date`, `Dlink`) VALUES
(7, 1, 'MAY/JUNE 2012', 'RC07\\07sem2\\AM\\UP_AM_II_May2012.pdf'),
(7, 2, 'MAY/JUNE 2013', 'RC07\\07sem2\\AM\\UP_AM_II_May2013.pdf'),
(7, 3, 'MAY/JUNE 2014', 'RC07\\07sem2\\AM\\UP_AM_II_May2014.pdf'),
(7, 4, 'MAY/JUNE 2015', 'RC07\\07sem2\\AM\\UP_AM_II_May2015.pdf'),
(7, 5, 'NOV/DEC 2012', 'RC07\\07sem2\\AM\\UP_AM_II_NOV2012.pdf'),
(7, 6, 'NOV/DEC 2013', 'RC07\\07sem2\\AM\\UP_AM_II_NOV2013.pdf'),
(7, 7, 'NOV/DEC 2014', 'RC07\\07sem2\\AM\\UP_AM_II_NOV2014.pdf'),
(7, 8, 'NOV/DEC 2015', 'RC07\\07sem2\\AM\\UP_AM_II_NOV2015.pdf'),
(8, 9, 'MAY/JUNE 2012', 'RC07\\07sem2\\AS\\UP_AS_II_May2012.pdf'),
(8, 10, 'MAY/JUNE 2013', 'RC07\\07sem2\\AS\\UP_AS_II_May2013.pdf'),
(8, 11, 'MAY/JUNE 2014', 'RC07\\07sem2\\AS\\UP_AS_II_May2014.pdf'),
(8, 12, 'MAY/JUNE 2015', 'RC07\\07sem2\\AS\\UP_AS_II_May2015.pdf'),
(8, 13, 'NOV/DEC 2012', 'RC07\\07sem2\\AS\\UP_AS_II_NOV2012.pdf'),
(8, 14, 'NOV/DEC 2013', 'RC07\\07sem2\\AS\\UP_AS_II_NOV2013.pdf'),
(8, 15, 'NOV/DEC 2014', 'RC07\\07sem2\\AS\\UP_AS_II_NOV2014.pdf'),
(8, 16, 'NOV/DEC 2015', 'RC07\\07sem2\\AS\\UP_AS_II_NOV2015.pdf'),
(9, 17, 'MAY/JUNE 2012', 'RC07\\07sem2\\IT\\UP_IT_May2012.pdf'),
(9, 18, 'MAY/JUNE 2013', 'RC07\\07sem2\\IT\\UP_IT_May2013.pdf'),
(9, 19, 'MAY/JUNE 2014', 'RC07\\07sem2\\IT\\UP_IT_May2014.pdf'),
(9, 20, 'MAY/JUNE 2015', 'RC07\\07sem2\\IT\\UP_IT_May2015.pdf'),
(9, 21, 'NOV/DEC 2012', 'RC07\\07sem2\\IT\\UP_IT_NOV2012.pdf'),
(9, 22, 'NOV/DEC 2013', 'RC07\\07sem2\\IT\\UP_IT_NOV2013.pdf'),
(9, 24, 'NOV/DEC 2014', 'RC07\\07sem2\\IT\\UP_IT_NOV2014.pdf'),
(9, 25, 'NOV/DEC 2015', 'RC07\\07sem2\\IT\\UP_IT_NOV2015.pdf'),
(10, 26, 'MAY/JUNE 2012', 'RC07\\07sem2\\BME\\UP_BME_May2012.pdf'),
(10, 27, 'MAY/JUNE 2013', 'RC07\\07sem2\\BME\\UP_BME_May2013.pdf'),
(10, 28, 'MAY/JUNE 2014', 'RC07\\07sem2\\BME\\UP_BME_May2014.pdf'),
(10, 29, 'MAY/JUNE 2015', 'RC07\\07sem2\\BME\\UP_BME_May2015.pdf'),
(10, 30, 'NOV/DEC 2012', 'RC07\\07sem2\\BME\\UP_BME_Nov2012.pdf'),
(10, 31, 'NOV/DEC 2013', 'RC07\\07sem2\\BME\\UP_BME_Nov2013.pdf'),
(10, 32, 'NOV/DEC 2014', 'RC07\\07sem2\\BME\\UP_BME_Nov2014.pdf'),
(10, 33, 'NOV/DEC 2015', 'RC07\\07sem2\\BME\\UP_BME_Nov2015.pdf'),
(11, 34, 'MAY/JUNE 2012', 'RC07\\07sem2\\BEE\\UP_BEE2_May2012.pdf'),
(11, 35, 'MAY/JUNE 2013', 'RC07\\07sem2\\BEE\\UP_BEE2_May2013.pdf'),
(11, 36, 'MAY/JUNE 2014', 'RC07\\07sem2\\BEE\\UP_BEE2_May2014.pdf'),
(11, 37, 'MAY/JUNE 2015', 'RC07\\07sem2\\BEE\\UP_BEE2_May2015.pdf'),
(11, 38, 'NOV/DEC 2012', 'RC07\\07sem2\\BEE\\UP_BEE2_Nov2012.pdf'),
(11, 39, 'NOV/DEC 2013', 'RC07\\07sem2\\BEE\\UP_BEE2_Nov2013.pdf'),
(11, 40, 'NOV/DEC 2014', 'RC07\\07sem2\\BEE\\UP_BEE2_Nov2014.pdf'),
(11, 41, 'NOV/DEC 2015', 'RC07\\07sem2\\BEE\\UP_BEE2_Nov201F.pdF'),
(12, 42, 'MAY/JUNE 2014', 'RC07\\07sem2\\E_SS\\UP_ESS_May2014.pdf'),
(12, 43, 'MAY/JUNE 2015', 'RC07\\07sem2\\E_SS\\UP_ESS_May2015.pdf'),
(12, 44, 'NOV/DEC 2013', 'RC07\\07sem2\\E_SS\\UP_ESS_Nov2013.pdf'),
(12, 45, 'NOV/DEC 2014', 'RC07\\07sem2\\E_SS\\UP_ESS_Nov2014.pdf'),
(12, 46, 'NOV/DEC 2015', 'RC07\\07sem2\\E_SS\\UP_ESS_Nov2015.pdf'),
(13, 47, 'MAY/JUNE 2012', 'RC07/07sem3/AM3/AM-III%20MAY12.pdf'),
(13, 48, 'MAY/JUNE 2013', 'RC07/07sem3/AM3/AM-III%20MAY13.pdf'),
(13, 49, 'MAY/JUNE 2014', 'RC07/07sem3/AM3/AM-III%20MAY14.pdf'),
(13, 50, 'MAY/JUNE 2015', 'RC07/07sem3/AM3/AM-III%20MAY15.pdf'),
(13, 51, 'NOV/DEC 2012', 'RC07\\07sem3\\AM3\\AM-III NOV12.pdf'),
(13, 52, 'NOV/DEC 2013', 'RC07\\07sem3\\AM3\\AM-III NOV13.pdf'),
(13, 53, 'NOV/DEC 2014', 'RC07\\07sem3\\AM3\\AM-III NOV14.pdf'),
(13, 54, 'NOV/DEC 2015', 'RC07\\07sem3\\AM3\\AM-III NOV15.pdf'),
(14, 55, 'MAY/JUNE 2012', 'RC07\\07sem3\\BOC++\\BOC++ MAY12.pdf'),
(14, 56, 'MAY/JUNE 2013', 'RC07\\07sem3\\BOC++\\BOC++ MAY13.pdf'),
(14, 57, 'MAY/JUNE 2014', 'RC07\\07sem3\\BOC++\\BOC++ MAY14.pdf'),
(14, 58, 'MAY/JUNE 2015', 'RC07\\07sem3\\BOC++\\BOC++ MAY15.pdf'),
(14, 59, 'NOV/DEC 2012', 'RC07\\07sem3\\BOC++\\BOC++ NOV12.pdf'),
(14, 60, 'NOV/DEC 2013', 'RC07\\07sem3\\BOC++\\BOC++ NOV13.pdf'),
(14, 61, 'NOV/DEC 2014', 'RC07\\07sem3\\BOC++\\BOC++ NOV14.pdf'),
(14, 62, 'NOV/DEC 2015', 'RC07\\07sem3\\BOC++\\BOC++ NOV15.pdf'),
(15, 63, 'MAY/JUNE 2012', 'RC07\\07sem3\\PPL\\PPL MAY12.pdf'),
(15, 64, 'MAY/JUNE 2013', 'RC07\\07sem3\\PPL\\PPL MAY13.pdf'),
(15, 65, 'MAY/JUNE 2014', 'RC07\\07sem3\\PPL\\PPL MAY14.pdf'),
(15, 66, 'MAY/JUNE 2015', 'RC07\\07sem3\\PPL\\PPL MAY15.pdf'),
(15, 67, 'NOV/DEC 2012', 'RC07\\07sem3\\PPL\\PPL NOV12.pdf'),
(15, 68, 'NOV/DEC 2013', 'RC07\\07sem3\\PPL\\PPL NOV13.pdf'),
(15, 69, 'NOV/DEC 2014', 'RC07\\07sem3\\PPL\\PPL NOV14.pdf'),
(15, 70, 'NOV/DEC 2015', 'RC07\\07sem3\\PPL\\PPL NOV15.pdf'),
(16, 71, 'MAY/JUNE 2012 ', 'RC07\\07sem3\\CONT\\CONT MAY12.pdf'),
(16, 72, 'MAY/JUNE 2013', 'RC07\\07sem3\\CONT\\CONT MAY13.pdf'),
(16, 73, 'MAY/JUNE 2014', 'RC07\\07sem3\\CONT\\CONT MAY14.pdf'),
(16, 74, 'MAY/JUNE 2015', 'RC07\\07sem3\\CONT\\CONT MAY15.pdf'),
(16, 75, 'NOV/DEC 2012', 'RC07\\07sem3\\CONT\\CONT NOV12.pdf'),
(16, 76, 'NOV/DEC 2013', 'RC07\\07sem3\\CONT\\CONT NOV13.pdf'),
(16, 77, 'NOV/DEC 2014', 'RC07\\07sem3\\CONT\\CONT NOV14.pdf'),
(16, 78, 'NOV/DEC 2015', 'RC07\\07sem3\\CONT\\CONT NOV15.pdf'),
(17, 79, 'MAY/JUNE 2012', 'RC07\\07sem3\\LD\\LD MAY12.pdf'),
(17, 80, 'MAY/JUNE 2013', 'RC07\\07sem3\\LD\\LD MAY13.pdf'),
(18, 81, 'may', 'RC07\\07sem3\\IE\\IE MAY12.pdf'),
(18, 82, 'MAY/JUNE 2013', 'RC07\\07sem3\\IE\\IE MAY13.pdf'),
(18, 83, 'MAY/JUNE 2014', 'RC07\\07sem3\\IE\\IE MAY14.pdf'),
(18, 84, 'MAY/JUNE 2015', 'RC07\\07sem3\\IE\\IE MAY15.pdf'),
(18, 85, 'NOV/DEC 2012', 'RC07\\07sem3\\IE\\IE NOV12.pdf'),
(18, 86, 'NOV/DEC 2013', 'RC07\\07sem3\\IE\\IE NOV13.pdf'),
(18, 87, 'NOV/DEC 2014', 'RC07\\07sem3\\IE\\IE NOV14.pdf'),
(18, 88, 'NOV/DEC 2015', 'RC07\\07sem3\\IE\\IE NOV15.pdf'),
(19, 89, 'MAY/JUNE 2012', 'RC07\\07sem4\\DMS MAY JUNE 2012.pdf'),
(19, 90, 'MAY/JUNE 2013', 'RC07\\07sem4\\DMS MAY JUNE 2013.pdf'),
(19, 91, 'MAY/JUNE 2014', 'RC07\\07sem4\\DMS MAY JUNE 2014.pdf'),
(19, 92, 'MAY/JUNE 2015', 'RC07\\07sem4\\DMS MAY JUNE 2015.pdf'),
(19, 93, 'NOV/DEC 2012', 'RC07\\07sem4\\DMS NOV DEC 2012.pdf'),
(19, 94, 'NOV/DEC 2013', 'RC07\\07sem4\\DMS NOV DEC 2013.pdf'),
(19, 95, 'NOV/DEC 2014', 'RC07\\07sem4\\DMS NOV DEC 2014.pdf'),
(19, 96, 'NOV/DEC 2015', 'RC07\\07sem4\\DMS NOV DEC 2015.pdf'),
(20, 97, 'MAY/JUNE 2012', 'RC07\\07sem4\\DMS MAY JUNE 2012.pdf'),
(20, 98, 'MAY/JUNE 2013', 'RC07\\07sem4\\DMS MAY JUNE 2013.pdf'),
(20, 99, 'MAY/JUNE 2014', 'RC07\\07sem4\\DMS MAY JUNE 2014.pdf'),
(20, 100, 'MAY/JUNE 2015', 'RC07\\07sem4\\DMS MAY JUNE 2015.pdf'),
(21, 101, 'MAY/JUNE 2009', 'RC07\\07sem4\\CO MAY JUNE 2009.pdf'),
(21, 102, 'MAY/JUNE 2010', 'RC07\\07sem4\\CO MAY JUNE 2010.pdf'),
(21, 103, 'MAY/JUNE 2011', 'RC07\\07sem4\\CO MAY JUNE 2011.pdf'),
(21, 104, 'MAY/JUNE 2015', 'RC07\\07sem4\\CO MAY JUNE 2015.pdf'),
(21, 105, 'NOV/DEC 2012', 'RC07\\07sem4\\CO NOV DEC 2012.pdf'),
(21, 106, 'NOV/DEC 2013', 'RC07\\07sem4\\CO NOV DEC 2013.pdf'),
(21, 107, 'NOV/DEC 2014', 'RC07\\07sem4\\CO NOV DEC 2014.pdf'),
(22, 109, 'MAY/JUNE 2012', 'RC07\\07sem4\\EM\\may2012.pdf'),
(22, 110, 'MAY/JUNE 2013', 'RC07\\07sem4\\EM\\may2013.pdf'),
(22, 111, 'MAY/JUNE 2014', 'RC07\\07sem4\\EM\\may2014.pdf'),
(22, 112, 'MAY/JUNE 2015', 'RC07\\07sem4\\EM\\may2015.pdf'),
(22, 113, 'NOV/DEC 2012', 'RC07\\07sem4\\EM\\nov2012.pdf'),
(22, 114, 'NOV/DEC 2013', 'RC07\\07sem4\\EM\\nov2013.pdf'),
(22, 115, 'NOV/DEC 2014', 'RC07\\07sem4\\EM\\nov2014.pdf'),
(22, 116, 'NOV/DEC 2015', 'RC07\\07sem4\\EM\\nov2015.pdf'),
(23, 117, 'MAY/JUNE 2012', 'RC07\\07sem4\\SAD MAY JUNE 2012.pdf'),
(23, 118, 'MAY/JUNE 2013', 'RC07\\07sem4\\SAD MAY JUNE 2013.pdf'),
(23, 119, 'MAY/JUNE 2014', 'RC07\\07sem4\\SAD MAY JUNE 2014.pdf'),
(23, 120, 'MAY/JUNE 2015', 'RC07\\07sem4\\SAD MAY JUNE 2015.pdf'),
(23, 121, 'NOV/DEC 2012', 'RC07\\07sem4\\SAD NOV DEC 2012.pdf'),
(23, 122, 'NOV/DEC 2013', 'RC07\\07sem4\\SAD NOV DEC 2013.pdf'),
(23, 123, 'NOV/DEC 2014', 'RC07\\07sem4\\SAD NOV DEC 2014.pdf'),
(23, 124, 'NOV/DEC 2015', 'RC07\\07sem4\\SAD NOV DEC 2015.pdf'),
(24, 125, 'MAY/JUNE 2012', 'RC07\\07sem4\\OOPD MAY JUNE 2012.pdf'),
(24, 126, 'MAY/JUNE 2013', 'RC07\\07sem4\\OOPD MAY JUNE 2013.pdf'),
(24, 127, 'MAY/JUNE 2014', 'RC07\\07sem4\\OOPD MAY JUNE 2014.pdf'),
(24, 128, 'MAY/JUNE 2015', 'RC07\\07sem4\\OOPD MAY JUNE 2015.pdf'),
(24, 129, 'NOV/DEC 2012', 'RC07\\07sem4\\OOPD NOV DEC 2012.pdf'),
(24, 130, 'NOV/DEC 2013', 'RC07\\07sem4\\OOPD NOV DEC 2013.pdf'),
(24, 131, 'NOV/DEC 2014', 'RC07\\07sem4\\OOPD NOV DEC 2014.pdf'),
(24, 132, 'NOV/DEC 2015', 'RC07\\07sem4\\OOPD NOV DEC 2015.pdf'),
(25, 133, 'MAY/JUNE 2014', 'RC07\\07sem5\\OB&CL May - June 2014.pdf'),
(25, 134, 'MAY/JUNE 2015', 'RC07\\07sem5\\OB&CL May - June 2015.pdf'),
(25, 135, 'NOV/DEC 2014', 'RC07\\07sem5\\OB&CL November - December 2014.pdf'),
(25, 136, 'NOV/DEC 2015', 'RC07\\07sem5\\OB&CL November - December 2015.pdf'),
(26, 137, 'MAY/JUNE 2014', 'RC07\\07sem5\\ALC May - June 2014.pdf'),
(26, 138, 'MAY/JUNE 2015', 'RC07\\07sem5\\ALC May - June 2015.pdf'),
(26, 139, 'NOV/DEC 2014', 'RC07\\07sem5\\ALC November - December 2014.pdf'),
(26, 140, 'NOV/DEC 2015', 'RC07\\07sem5\\ALC November - December 2015.pdf'),
(27, 141, 'MAY/JUNE 2014', 'RC07\\07sem5\\CHD May - June 2014.pdf'),
(27, 142, 'MAY/JUNE 2015', 'RC07\\07sem5\\CHD May - June 2015.pdf'),
(27, 143, 'NOV/DEC 2014', 'RC07\\07sem5\\CHD November - December 2014.pdf'),
(27, 144, 'NOV/DEC 2015', 'RC07\\07sem5\\CHD November - December 2014.pdf'),
(28, 145, 'MAY/JUNE 2014', 'RC07\\07sem5\\M&M May - June 2014.pdf'),
(28, 146, 'MAY/JUNE 2015', 'RC07\\07sem5\\M&M May - June 2015.pdf'),
(27, 147, 'NOV/DEC 2014', 'RC07\\07sem5\\M&M November - December 2014.pdf'),
(27, 148, 'NOV/DEC 2015', 'RC07\\07sem5\\M&M November - December 2015.pdf'),
(29, 149, 'MAY/JUNE 2014', 'RC07\\07sem5\\DBMS May - June 2014.pdf'),
(29, 150, 'MAY/JUNE 2015', 'RC07\\07sem5\\DBMS May - June 2015.pdf'),
(29, 151, 'NOV/DEC 2014', 'RC07\\07sem5\\DBMS November - December 2014.pdf'),
(29, 152, 'NOV/DEC 2015', 'RC07\\07sem5\\DBMS November - December 2015.pdf'),
(30, 153, 'MAY/JUNE 2014', 'RC07\\07sem5\\OS May - June 2014.pdf'),
(30, 154, 'MAY/JUNE 2015', 'RC07\\07sem5\\OS May - June 2015.pdf'),
(30, 155, 'NOV/DEC 2014', 'RC07\\07sem5\\OS November - December 2014.pdf'),
(30, 156, 'NOV/DEC 2015', 'RC07\\07sem5\\OS November - December 2015.pdf'),
(31, 157, 'MAY/JUNE 2014', ''),
(37, 201, 'MAY/JUNE 2013', 'RC07\\07sem7\\Language Translator may-june 2013.pdf'),
(38, 202, 'MAY/JUNE 2012', 'RC07\\07sem7\\Computer Nettworks may-june 2012.pdf'),
(38, 203, 'MAY/JUNE 2013', 'RC07\\07sem7\\Computer Networks may-june2013.pdf'),
(39, 204, 'MAY/JUNE 2015', 'RC07\\07sem7\\DSP May-june 2015.pdf'),
(39, 205, 'MAY/JUNE 2013', 'RC07\\07sem7\\DSP may-june2013.pdf'),
(40, 206, 'MAY/JUNE 2012', 'RC07\\07sem7\\Data Compression 2012 may.pdf'),
(40, 207, 'MAY/JUNE 2013', 'RC07\\07sem7\\Data Compression.pdf'),
(41, 208, 'MAY/JUNE 2012', 'RC07\\07sem7\\web teachnology may-june 2012.pdf'),
(41, 209, 'MAY/JUNE 2013', 'RC07\\07sem7\\web teachnology may-june 2013.pdf'),
(46, 210, 'Nov/Dec 2016', 'RC16\\16Sem1\\AM1 RC16.pdf'),
(47, 211, 'Nov/Dec 2016', 'RC16\\16Sem1\\as phy.pdf'),
(48, 212, 'Nov/Dec 2016', 'RC16\\16Sem1\\ee.pdf'),
(49, 213, 'Nov/Dec 2016', 'RC16\\16Sem1\\eng.pdf'),
(50, 214, 'Nov/Dec 2016', 'RC16\\16Sem1\\fce.pdf'),
(51, 215, 'Nov/Dec 2016', 'RC16\\16Sem1\\mech.pdf'),
(52, 216, 'MAY/JUNE 2017', 'RC16\\16Sem2\\rc16sem2maths.pdf'),
(53, 217, 'MAY/JUNE 2017', 'RC16\\16Sem2\\rc16sem2 chem.pdf'),
(54, 218, 'MAY/JUNE 2017', 'RC16\\16Sem2\\rc16 sem2 programing languages.pdf'),
(55, 219, 'MAY/JUNE 2017', 'RC16\\16Sem2\\rc16 sem2 electronics.pdf'),
(56, 220, 'MAY/JUNE 2017', 'RC16\\16Sem2\\sem2 rc16environmental.pdf'),
(52, 223, 'MAY/JUNE 2018', 'Array'),
(56, 224, 'NOV/DEC 2018', ''),
(52, 225, 'MAY/JUNE 2019', ''),
(51, 226, 'NOV/DEC 2020', ''),
(52, 227, 'NOV/DEC 2021', ''),
(55, 228, 'NOV/DEC 2022', 'img012.pdf'),
(52, 229, 'NOV/DEC 2023', 'uploads/img012.pdf'),
(56, 230, 'MAY/JUNE 2021', 'uploads$final_file'),
(56, 231, 'NOV/DEC 2021', 'uploadscont-lab-manual.pdf'),
(53, 232, 'NOV/DEC 2021', 'uploads/cont-lab-manual.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

DROP TABLE IF EXISTS `semester`;
CREATE TABLE IF NOT EXISTS `semester` (
  `SemID` int(11) NOT NULL AUTO_INCREMENT,
  `SemesterName` varchar(25) NOT NULL,
  `SyllabusID` int(11) NOT NULL,
  `Semlink` varchar(100) NOT NULL,
  PRIMARY KEY (`SemID`),
  KEY `SyllabusID` (`SyllabusID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`SemID`, `SemesterName`, `SyllabusID`, `Semlink`) VALUES
(1, 'Semester-1', 1, 'RC07/07syllabus/Sem%201%20&%202%20Syllabus.pdf'),
(2, 'Semester-2', 1, 'RC07/07syllabus/Sem%201%20&%202%20Syllabus.pdf'),
(3, 'Semester-3', 1, 'RC07/07syllabus/S3.pdf'),
(4, 'Semester-4', 1, 'RC07/07syllabus/Sem%204%20Syllabus.pdf'),
(5, 'Semester-5', 1, 'RC07/07syllabus/s5.pdf'),
(6, 'Semester-6', 1, 'RC07/07syllabus/Sem%206%20Syllabus.pdf'),
(7, 'Semester-7', 1, 'RC07/07syllabus/Sem%207%20Syllabus.pdf'),
(8, 'Semester-8', 1, 'RC07/07syllabus/Sem%208%20Syllabus.pdf'),
(9, 'Semester-1', 2, 'hjjh.pdf'),
(10, 'Semester-2', 2, ''),
(11, 'Semester-3', 2, 'uploads/rof.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `SyllabusID` int(11) NOT NULL,
  `SemID` int(11) NOT NULL,
  `SubjectID` int(11) NOT NULL,
  `SubjectName` varchar(25) NOT NULL,
  PRIMARY KEY (`SubjectID`),
  KEY `SyllabusID` (`SyllabusID`),
  KEY `SemID` (`SemID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SyllabusID`, `SemID`, `SubjectID`, `SubjectName`) VALUES
(1, 1, 1, 'Applied Mathematics -1'),
(1, 1, 2, 'Applied Science -1'),
(1, 1, 3, 'Basic Civil Eng '),
(1, 1, 4, 'Basic Elecrtical Eng '),
(1, 1, 5, 'Engineering Drawing'),
(1, 1, 6, 'Communication Skills'),
(1, 2, 7, 'Applied Mathematics 2'),
(1, 2, 8, 'Applied Science -2'),
(1, 2, 9, 'Information Technology'),
(1, 2, 10, 'Basic Mechanical Eng'),
(1, 2, 11, 'Basic Electronic Eng'),
(1, 2, 12, 'social science and env'),
(1, 3, 13, 'Applied Mathematic-3'),
(1, 3, 14, 'Basics of C++'),
(1, 3, 15, 'PPL'),
(1, 3, 16, 'CONT'),
(1, 3, 17, 'Logic Design'),
(1, 3, 18, 'Integrated Electronics'),
(1, 4, 19, 'DMS'),
(1, 4, 20, 'Data Structure'),
(1, 4, 21, 'Computer Organisation'),
(1, 4, 22, 'Electonic Measurement'),
(1, 4, 23, 'SAD'),
(1, 4, 24, 'OOPD'),
(1, 5, 25, 'OBCL'),
(1, 5, 26, 'ALC'),
(1, 5, 27, 'CHD'),
(1, 5, 28, 'MPMC'),
(1, 5, 29, 'DBMS'),
(1, 5, 30, 'OS'),
(1, 6, 31, 'MADF'),
(1, 6, 32, 'OOSE'),
(1, 6, 33, 'Artificial Intelligence'),
(1, 6, 34, 'Computer Graphics'),
(1, 6, 35, 'DIPM'),
(1, 6, 36, 'Data Communication'),
(1, 7, 37, 'Language Translator'),
(1, 7, 38, 'Computer Networks'),
(1, 7, 39, 'Digital Signal Processing'),
(1, 7, 40, 'Data Compression'),
(1, 8, 41, 'Web Teachnology'),
(1, 8, 42, 'ADS'),
(1, 8, 43, 'CCNS'),
(1, 8, 44, 'Elective 3'),
(1, 8, 45, 'Elective 4'),
(2, 9, 46, 'Applied Mathematics'),
(2, 9, 47, 'Applied Physics'),
(2, 9, 48, 'Electrical Enginnering'),
(2, 9, 49, 'Technical English'),
(2, 9, 50, 'Computer Engineering'),
(2, 9, 51, 'Mechanical Engineering'),
(2, 10, 52, 'Applied Mathematics 2'),
(2, 10, 53, 'Applied Chemistry'),
(2, 10, 54, 'Programming Languages'),
(2, 10, 55, 'ETC'),
(2, 10, 56, 'Envl/social studies');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

DROP TABLE IF EXISTS `syllabus`;
CREATE TABLE IF NOT EXISTS `syllabus` (
  `SyllabusID` int(11) NOT NULL,
  `SyllabusName` varchar(25) NOT NULL,
  PRIMARY KEY (`SyllabusID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`SyllabusID`, `SyllabusName`) VALUES
(1, 'RC08'),
(2, 'RC16');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paper`
--
ALTER TABLE `paper`
  ADD CONSTRAINT `paper_ibfk_1` FOREIGN KEY (`SubjectID`) REFERENCES `subject` (`SubjectID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `semester`
--
ALTER TABLE `semester`
  ADD CONSTRAINT `semester_ibfk_1` FOREIGN KEY (`SyllabusID`) REFERENCES `syllabus` (`SyllabusID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`SyllabusID`) REFERENCES `syllabus` (`SyllabusID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
