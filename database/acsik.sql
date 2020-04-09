-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 22, 2017 at 09:02 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `acsik`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `inf_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(3) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`inf_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=54 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`inf_id`, `date`, `description`, `status`) VALUES
(42, '2017-06-20', 'The ACSI started operations in 1995 as a department of a local NGO, the ORDA, and has grown to become one of the largest MFI in Ethiopia. It established for the aiming to feel the gap of formal institutions to meet the need of small-scale borrowers in income generation schemes. It was licensed by the National Bank of Ethiopia as a micro finance intermediary share company in April 1997.      ', '1'),
(43, '2017-06-20', 'ACSI aspires to see a society in which people are free from the rules of hopeless poverty, with all the power determining their future in their own hands is its vital vision.', '1'),
(44, '2017-06-20', 'Given the level of poverty in the region, ACSIâ€™s primary mission is to improve the economic situation of low income, productive poor people in the Amhara region primarily through increased access to lending and saving services. It will maintain cost effectiveness in service delivery, and integrate its activities with government and NGOs working towards achieving food security and poverty alleviation in the region.', '1'),
(41, '2017-06-20', 'á‹¨á‰¥á‹µáˆ­ áˆ›áŒ½á‹°á‰… áˆµáˆ­á‹“á‰µ\r\ná‰°á‰‹áˆ™ á‹¨á‰¥á‹µáˆ­ áŠ áŒˆáˆáŒáˆŽá‰µ á‰ áŒáˆ á‰ á‰¡á‹µáŠ•áŠ“ á‰ áˆ›áˆ…á‰ áˆ­ áˆ›áˆˆá‰µáˆ á‰ áˆ½áˆ­áŠ­áŠ“áŠ“ á‰ áˆ…á‰¥áˆ¨á‰µ áˆ¥áˆ« áˆ›áˆ…á‰ áˆ«á‰µ á‰°á‹°áˆ«áŒ…á‰°á‹ áˆˆáˆšá‰€áˆ­á‰¡ áˆ°á‹Žá‰½ á‹­áˆ°áŒ£áˆá¡á¡ á‰ á‹šáˆ…áˆ áˆ˜áˆ áˆ¨á‰µ á‹¨áˆ›á…á‹°á‰… áˆµáˆ­áŠ á‰±\r\náŠ¨á‰¥áˆ­ 700.00 áŠ¥áˆµáŠ¨ 50,000.00\r\náŠ¨á‰¥áˆ­ 50000.00 á‰ á‰³á‰½ á‹«áˆ‰ á‹¨á‰¥á‹µáˆ­ áŒ¥á‹«á‰„á‹Žá‰½ á‰ áˆ™áˆ‰ á‰ áŠ áŒˆáˆáŒáˆŽá‰µ áˆ˜áˆµáŒ« áŒ£á‰¢á‹« á‹°áˆ¨áŒƒ áˆŠá‹ˆáˆ°áŠ‘ á‹­á‰½áˆ‹áˆ‰á¡á¡\r\náŠ¨á‰¥áˆ­ 50,001.00 - 10á‹,á‹á‹á‹.00\r\náŠ¨á‰¥áˆ­ 50001 áŠ¥áˆµáŠ¨ á‰¥áˆ­ 100000.00 á‹µáˆ¨áˆµ áˆ‹áˆ‰ á‹¨á‰¥á‹µáˆ­ áŒ¥á‹«á‰„á‹Žá‰½ áˆ˜áŠáˆ»á‹ áŠ áŒˆáˆáŒáˆŽá‰µ áˆ˜áˆµáŒ« áŒ£á‰¢á‹«á‹ áˆ†áŠ– á‹áˆ³áŠ” á‰ á‰…/á…/á‰¤á‰µ á‹°áˆ¨áŒƒ áŠ¥áŠ•á‹²áˆ°áŒ¥ á‹­á‹°áˆ¨áŒ‹áˆá¡á¡\r\náŠ¨á‰¥áˆ­ 100,001.00 áŠ¥áˆµáŠ¨Â  á‰¥áˆ­Â  200,000.00', '2'),
(38, '2017-06-20', 'á‹¨á‹°áŠ•á‰ áŠžá‰½ áˆá‹áŒˆá‰£ (Registration)', '2'),
(39, '2017-06-20', 'á‹¨áŠ áŒˆáˆáŒáˆŽá‰µ á‰°áŒ á‰ƒáˆšá‹Žá‰½ áˆá‹áŒˆá‰£ á‹¨áˆšáŠ¨áŠ“á‹ˆáŠ•á‰ á‰µ\r\náˆ›áŠ•áŠ›á‹áˆ á‹¨á‰°á‰‹áˆ™áŠ• áŠ áŒˆáˆáŒáˆŽá‰µ á‹¨áˆšáˆáˆáŒ áŒáˆˆáˆ°á‰¥ á‰¡á‹µáŠ•/áˆ›áˆ…á‰ áˆ­ á‹ˆá‹­áˆ á‹µáˆ­áŒ…á‰µ á‹¨áŠ áŒˆáˆáŒáˆŽá‰µ áŒ¥á‹«á‰„á‹áŠ• á‹¨áˆšá‹«á‰€áˆ­á‰ á‹ á‰ áˆšáŠ–áˆ­á‰ á‰µ á‹¨á‰€á‰ áˆŒ á‹¨áŠ áŒˆáˆáŒáˆŽá‰µ áˆ˜áˆµáŒ« áŒ£á‰¢á‹« áŠá‹á¡á¡ áˆ†áŠ–áˆ áŒáˆˆáˆ°á‰¡ á‹ˆá‹­áˆ á‰¡á‹µáŠ‘ á‹¨áˆšáˆ áˆ«á‰ á‰µ áŠ áŠ«á‰£á‰¢ á‹¨á‰°áˆˆá‹¨ á‰€á‰ áˆŒ á‰ áˆ†áŠ áŒŠá‹œ áŠá‹‹áˆª áŠ¨áˆ†áŠá‰ á‰µ á‰€á‰ áˆŒ á‹¨áŠá‹‹áˆªáŠá‰µáŠ“ á‰¥á‹µáˆ­ áŠ áˆˆáˆ˜á‹áˆ°á‹±áŠ• á‹¨áˆšá‹«áˆ¨áŒ‹áŒáŒ¥ áˆ˜áˆ¨áŒƒ á‰ áˆ›áŒáŠ˜á‰µ á‹ˆá‹°áˆšáˆ°áˆ«á‰ á‰µ á‰€á‰ áˆŒ áŠ¥áŠ•á‹²á‰°áˆ‹áˆˆá áˆ›á‹µáˆ¨áŒ á‹«áˆµáˆáˆáŒ‹áˆá¡á¡ á‰ áˆŒáˆ‹áˆ á‰ áŠ©áˆ á‹°áŠ•á‰ áŠžá‰½ á‹‹áŠ“á‹ áˆ˜áˆµáˆªá‹« á‰¤á‰³á‰¸á‹ áŠ¨áˆ˜áŠ–áˆªá‹« á‰¤á‰³á‰¸á‹ á‹¨á‰°áˆˆá‹¨ á‰ áˆ†áŠ áŒŠá‹œ á‹¨á‰¥á‹µáˆ­ áŠ áŒˆáˆáŒáˆŽá‰µ áˆ›áŒáŠ˜á‰µ á‹¨áˆšá‰½áˆ‰á‰µ á‰ áˆšáˆ°áˆ©á‰ á‰µ á‰¦á‰³ á‹ˆá‹­áˆ áˆá‰ƒá‹µ á‹«áŒˆáŠ™á‰ á‰µ áŠ­/áŠ¨á‰°áˆ› á‹ˆá‹­áˆ á‰€á‰ áˆŒ áˆ˜áˆ†áŠ• á‹­áŒˆá‰£á‹‹áˆá¡á¡', '2'),
(48, '2017-06-20', '- á‰ áŠ áŒˆáˆáŒáˆŽá‰µ áˆ˜áˆµáŒ« áŒ£á‰¢á‹«á£ á‹¨á‰¥á‹µáˆ­áŠ“ á‰áŒ á‰£ á‰£áˆˆáˆ™á‹«áŠ“ á‹¨áŠ áŒˆáˆáŒáˆŽá‰µ áˆƒáˆ‹áŠ á‹¨áŠá‹‹áˆªáŠá‰µá£ á‹¨á‹•á‹³ áˆ›áŒ£áˆªá‹«á£ á‹¨áˆµáˆ« á‰¦á‰³á£á‹¨á‰¢á‹áŠáˆ± áˆ…áŒ‹á‹ŠáŠá‰µá£á‹¨á‹‹áˆµá‰µáŠ“ áˆáŠ”á‰³á£á‹¨á‹°áŠ•á‰ áŠ›á‹áŠ• áŒ¥áˆ«á‰µáŠ“ á‹¨áŠ‹áˆ‹ á‰³áˆªáŠ­ á‹¨áˆšáŒˆáˆáŒ½ áˆ˜áˆ¨áŒƒ á‰ áˆ›áŒ£áˆ«á‰µáŠ“ áˆµáˆˆá‰¢á‹áŠáˆ± á‰°áŒˆá‰¢á‹áŠ• áŠ áˆµá‰°á‹«á‹¨á‰µ á‰ áˆ˜áˆµáŒ á‰µ áˆˆá‰…/á…/á‰¤á‰µ á‹«áˆµá‰°áˆ‹áˆá‹áˆ‰á¡á¡\r\n- á‹¨á‰…/áŒ½/á‰¤á‰µ áˆ¥áˆ« áŠ áˆµáŠªá‹«áŒ…á£ á‹¨á‰¥á‹µáˆ­áŠ“ á‰áŒ á‰£ á‰£áˆˆáˆ™á‹«áŠ“ á‹¨áˆµáˆ«á‹áŠ• áŠ á‹‹áŒªáŠá‰µ á‰ á‹áˆ­á‹áˆ­ áŠ¨áŒˆáˆ˜áŒˆáˆ˜ á‰ áŠ‹áˆ‹ á‹¨á‹áˆ³áŠ” áˆƒáˆ³á‰¡áŠ• á‰ áˆ›áŠ«á‰°á‰µ áˆˆáˆ˜áˆáˆªá‹« áˆƒáˆ‹áŠ á‰ áˆ›á‰…áˆ¨á‰¥ á‰ áˆáŠ­á‰µáˆ á‹‹áŠ“ áˆµáˆ« áŠ áˆµáŠªá‹«áŒ… áˆ°á‰¥áˆ³á‰¢áŠá‰µ á‰ áŠ®áˆšá‰´ á‹«á€á‹µá‰ƒáˆá¡á¡', '2');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(200) NOT NULL,
  `address` varchar(22) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descrption` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `icon`, `address`, `descrption`, `status`) VALUES
(1, '', 'Location', 'Gondar,Ethiopia', 'on'),
(2, '', 'Tel', '+251582205338/+251582201653', 'on'),
(3, '', 'Fax', '+251582201733', 'on'),
(4, '', 'E-mai', 'acsi@ethionet.et', 'on'),
(5, '', 'Website', 'http://www.acsi.org.et/', 'on'),
(7, '', 'áˆµáˆáŠ­ á‰áŒ¥áˆ­', '+251582205338/+251582201653', 'off'),
(8, '', 'á‹áŠ­áˆµ', '+251582201733', 'off'),
(10, '', 'áŠ¢áˆœáˆ', 'acsi@ethionet.et', 'off'),
(11, '', 'á‹µáˆ…áˆ¨ áŒˆáŒ½', 'http://www.acsi.org.et/', 'off'),
(12, '', 'áŠ á‹µáˆ«áˆ»', 'áˆ°/áŒŽáŠ•á‹°áˆ­ á‰…áˆ­áŠ•áŒ«á', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE IF NOT EXISTS `credit` (
  `crd_no` int(22) NOT NULL AUTO_INCREMENT,
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `AccNumber` int(22) NOT NULL,
  `Amount` double NOT NULL,
  `percent` float NOT NULL,
  `date` date NOT NULL,
  `interest_update` date NOT NULL,
  `DueDate` date NOT NULL,
  `penality` double NOT NULL,
  PRIMARY KEY (`crd_no`),
  UNIQUE KEY `AccNumber_2` (`AccNumber`),
  KEY `AccNumber` (`AccNumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`crd_no`, `fname`, `lname`, `AccNumber`, `Amount`, `percent`, `date`, `interest_update`, `DueDate`, `penality`) VALUES
(53, 'adiss', 'nebret', 2306, 1130, 0.13, '2017-06-22', '2017-07-24', '2019-07-22', 0),
(54, 'yared', 'eshetu', 2309, 5900, 0.18, '2017-06-22', '2017-07-24', '2017-07-22', 40);

-- --------------------------------------------------------

--
-- Table structure for table `creditrequest`
--

CREATE TABLE IF NOT EXISTS `creditrequest` (
  `creq_no` int(22) NOT NULL AUTO_INCREMENT,
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `AccNumber` int(22) NOT NULL,
  `Date` date NOT NULL,
  `Amount` double NOT NULL,
  `Guarantee` varchar(22) NOT NULL,
  `CreditType` varchar(22) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`creq_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `creditrequest`
--

INSERT INTO `creditrequest` (`creq_no`, `fname`, `lname`, `AccNumber`, `Date`, `Amount`, `Guarantee`, `CreditType`, `status`) VALUES
(39, 'adiss', 'nebret', 2306, '2017-06-22', 1000, 'perol', '0.13', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `custappointment`
--

CREATE TABLE IF NOT EXISTS `custappointment` (
  `AccNumber` int(22) NOT NULL,
  `AppoDate` date NOT NULL,
  `AppoReason` text NOT NULL,
  KEY `AccNumber` (`AccNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custappointment`
--

INSERT INTO `custappointment` (`AccNumber`, `AppoDate`, `AppoReason`) VALUES
(2303, '2017-06-22', 'u can come tommorow'),
(2306, '2017-06-22', 'addis u can take your\r\ncredit'),
(2303, '2017-06-22', 'Dear Customer You Can Came And collect Your money!!tnx for choosing us!!!');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `UserName` varchar(22) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_id` int(22) NOT NULL,
  `AccNumber` int(12) NOT NULL AUTO_INCREMENT,
  `Sex` varchar(9) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(55) NOT NULL,
  `Guarantee` varchar(55) NOT NULL,
  `AccType` varchar(22) NOT NULL,
  `pnumber` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(3) NOT NULL,
  PRIMARY KEY (`AccNumber`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2311 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fname`, `lname`, `UserName`, `password`, `user_id`, `AccNumber`, `Sex`, `age`, `address`, `Guarantee`, `AccType`, `pnumber`, `date`, `status`) VALUES
('hana', 'haysh', 'hani', 'MTIzNA==', 2222, 2303, 'F', 22, 'AA', '', 'saving', 922564325, '2017-06-22', 'on'),
('samrawit', 'getu', 'samri', 'MTIzNA==', 55555, 2304, 'F', 23, 'db', 'plan', 'credit', 937674878, '2017-06-22', 'on'),
('elphaz', 'abayneh', 'elphi', 'MTIzNA==', 1020, 2305, 'F', 23, 'db', '', 'saving', 922564325, '2017-06-22', 'on'),
('adiss', 'nebret', 'adiss', 'MTIzNA==', 1112, 2306, 'F', 23, 'bure', 'perol', 'credit', 909256541, '2017-06-22', 'on'),
('wudnesh', 'balew', 'wude', 'MTIzNA==', 1213, 2307, 'F', 23, 'gojam', '', 'saving', 945300792, '2017-06-22', 'on'),
('yosef', 'argaw', 'yosi', 'MTIzNA==', 1314, 2308, 'M', 25, 'hawasa', 'librey', 'credit', 910653838, '2017-06-22', 'on'),
('yared', 'eshetu', 'yaredo', 'MTIzNA==', 2569, 2309, 'M', 23, 'AA', 'plan', 'credit', 926353269, '2017-06-22', 'on'),
('kalhiwot', 'tadese', 'kal', 'MTIzNA==', 5695, 2310, 'F', 33, 'gojam', 'perol', 'credit', 923003625, '2017-06-22', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `userName` varchar(22) NOT NULL,
  `WorkType` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `staff_id` int(12) NOT NULL AUTO_INCREMENT,
  `Sex` varchar(9) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(55) NOT NULL,
  `pnumber` int(15) NOT NULL,
  `qualification` varchar(22) NOT NULL,
  `status` varchar(3) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2300 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`fname`, `lname`, `userName`, `WorkType`, `password`, `staff_id`, `Sex`, `age`, `address`, `pnumber`, `qualification`, `status`, `date`) VALUES
('tazeb', 'kassa', 'tazeb', 'admin', 'MTIzNA==', 2263, 'M', 23, 'Gojam', 922564996, 'BSC', 'on', '2017-06-19'),
('seranesh', 'yeshineh', 'sera', 'officer', 'MTIzNA==', 2278, 'F', 22, 'Gondar', 956789876, 'bcs', 'on', '2017-06-19'),
('mekdes', 'alemu', 'mekdi', 'csp', 'MTIzNA==', 2292, 'F', 22, 'AA', 910324354, 'bsc', 'on', '2017-06-20'),
('kidist', 'amde', 'haki', 'cashir', 'MTIzNA==', 2293, 'F', 21, 'aa', 922564996, 'phd', 'on', '2017-06-20'),
('amde', 'mekonnen', 'amde', 'admin', 'MTIzNA==', 2294, 'M', 53, 'DB', 911490850, 'bcs', 'on', '2017-06-21'),
('selam', 'amde', 'selam', 'officer', 'MTIzNA==', 2295, 'F', 25, 'AA', 923040086, 'phd', 'off', '0000-00-00'),
('meseret', 'abebe', 'mesi', 'cashir', 'MTIzNA==', 2296, 'F', 66, 'gonder', 922564996, 'bcs', 'off', '2017-06-21'),
('gediyon', 'semneh', 'gedi', 'admin', 'MTIzNA==', 2297, 'M', 24, 'aa', 32658974, 'phd', 'off', '2017-06-21'),
('genet', 'amde', '4484', 'csp', 'MTIzNA==', 2299, 'F', 29, 'db', 911490850, 'ms', 'on', '2017-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `f_id` int(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(12) NOT NULL,
  `email` varchar(22) NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `name`, `sex`, `email`, `comment`) VALUES
(7, 'kidistamde', 'male', 'kidist75@gmail.com', 'á‹­áˆ… á‹¨á‰áŒ á‰£/á‰°á‰€áˆ›áŒ­ á‹“á‹­áŠá‰µ áŠ¨3 á‹ˆáˆ­ áˆ‹áˆ‹áŠáˆ° áŒŠá‹œ á‰°á‰€áˆ›áŒ­ á‹¨áˆšáˆ†áŠ•áŠ“ áŠ¨á‹šáˆ áŒŠá‹œ á‰ áŠá‰µ á‹ˆáŒª á‹¨áˆ›á‹­á‹°áˆ¨áŒ á‹¨á‰áŒ á‰£ á‹“á‹­áŠá‰µ áŠá‹á¡á¡ á‹¨á‰áŒ á‰£á‹ áˆ˜áŒ áŠ•á£á‹ˆáŒª áˆ›á‹µáˆ¨áŒŠá‹« áŒŠá‹œá£ á‹¨áˆšáŠ¨áˆáˆ á‹ˆáˆˆá‹µ á‰ á‰°á‰‹áˆ™áŠ“ á‰ áŠ áˆµá‰€áˆ›áŒ© áŒáˆˆáˆ°á‰¥/á‹µáˆ­áŒ…á‰µ áˆ›áˆ…á‰ áˆ­ áˆ˜áŠ«áŠ¨áˆ á‰ áˆšá‹°áˆ¨áŒ áˆµáˆáˆáŠá‰µ á‰ á‹áˆ á‹¨áˆšá‹ˆáˆ°áŠ• áŠá‹á¡á¡'),
(11, 'hana', 'female', 'hana@gmail.com', 'i really appreciat the institution customers work!!!!!'),
(13, 'hana', 'female', 'hana@gmail.com', 'sssssssssssssssssssssssss'),
(14, 'selamawit', 'female', 'serti@gmail.com', 'hey bodys!!!1'),
(15, 'adiss', 'female', 'adiss@gmail.com', 'hhhhhhhhhhhhhhhhhhhhhhhh');

-- --------------------------------------------------------

--
-- Table structure for table `imagec`
--

CREATE TABLE IF NOT EXISTS `imagec` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `user_id` int(22) NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `imagec`
--

INSERT INTO `imagec` (`id`, `user_id`, `location`) VALUES
(17, 1020, 'upload/Hydrangeas.jpg'),
(18, 55555, 'upload/IMG_1321_1.jpg'),
(20, 5695, 'upload/1477631681297.jpg'),
(23, 2569, 'upload/204484_147273832006121_5757211_o.jpg'),
(24, 2222, 'upload/hani.JPG'),
(25, 1112, 'upload/dagi.jpg'),
(26, 1213, 'upload/kid0.jpg'),
(27, 1314, 'upload/Chati.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `AccNumber` int(11) NOT NULL,
  `question1` text NOT NULL,
  `question2` text NOT NULL,
  `question3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`AccNumber`, `question1`, `question2`, `question3`) VALUES
(2303, 'dabo', 'kik', 'kidist'),
(2306, 'pasta', 'megbar', 'kidist');

-- --------------------------------------------------------

--
-- Table structure for table `ledger`
--

CREATE TABLE IF NOT EXISTS `ledger` (
  `AccNumber` int(22) NOT NULL,
  `Amount` int(255) NOT NULL,
  `TransactionType` varchar(25) NOT NULL,
  `Date` date NOT NULL,
  `l_no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_no`),
  KEY `AccNumber` (`AccNumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `ledger`
--

INSERT INTO `ledger` (`AccNumber`, `Amount`, `TransactionType`, `Date`, `l_no`) VALUES
(2303, 1000, 'Withdraw', '2017-06-22', 35),
(2303, 1000, 'Withdraw', '2017-06-22', 36),
(2306, 1000, 'borrow', '2017-06-22', 37),
(2303, 150, 'Withdraw', '2017-06-22', 38),
(2303, 300, 'Saving', '2017-06-22', 39),
(2309, 5000, 'borrow', '2017-06-22', 40),
(2303, 500, 'Saving', '2017-06-22', 41),
(2303, 50, 'Withdraw', '2017-06-22', 42),
(2303, 500, 'Withdraw', '2017-06-22', 43),
(2303, 80, 'Withdraw', '2017-06-22', 44),
(2303, 20, 'Withdraw', '2017-06-22', 45),
(2303, 1500, 'Withdraw', '2017-06-22', 46),
(2303, 20, 'Withdraw', '2017-06-22', 47),
(2303, 12, 'Withdraw', '2017-06-22', 48),
(2303, 68, 'Withdraw', '2017-06-22', 49),
(2303, 400, 'Withdraw', '2017-06-22', 50),
(2303, 5000, 'Saving', '2017-06-22', 51),
(2303, 423, 'Saving', '2017-06-22', 52),
(2303, 23, 'Saving', '2017-06-22', 53),
(2303, 200, 'Saving', '2017-06-22', 54);

-- --------------------------------------------------------

--
-- Table structure for table `news_tbl`
--

CREATE TABLE IF NOT EXISTS `news_tbl` (
  `News_id` int(200) NOT NULL AUTO_INCREMENT,
  `News_Tittle` text NOT NULL,
  `News_Date` date NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`News_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=672 ;

--
-- Dumping data for table `news_tbl`
--

INSERT INTO `news_tbl` (`News_id`, `News_Tittle`, `News_Date`, `description`, `status`) VALUES
(665, 'breaking news', '2017-04-02', 'á‹˜áˆ˜áŠ‘ á‹ˆá‹° áˆ˜áŒ¨áˆ¨áˆ»á‹ áŠ¥á‹¨áŒˆáˆ°áŒˆáˆ° áˆ°á‹­áŒ£áŠ•áˆ á‰ á‹šáŠ½ á‹“áˆˆáˆ á‹«áˆˆá‹ á‹¨áŒˆá‹¢áŠá‰µáŠ• áˆ¥áˆáŒ£áˆ áŠ¥áˆµáŠ¨ á‹ˆá‹²á‹«áŠ›á‹ á‹¨áˆšáˆ»áˆ­á‰ á‰µ á‰…á‹±áˆ³áŠ• á‰ áŠ¥áŒá‹šáŠ á‰¥áˆ”áˆ­ áˆ˜áŠ•áŒáˆ¥á‰µ áŠ¥áŠ•á‹° á€áˆá‹­ á‹¨áˆšá‹°áˆá‰á‰ á‰µ áŒŠá‹œ á‰ á‹°áˆ¨áˆ° áˆ˜áŒ áŠ•á¤ áˆ˜áŒ¨áˆ¨áˆ»á‹ áŠ¥áŠ•á‹°á‰°á‰ƒá‰  á‹¨áˆšáˆ¨á‹³á‹ áŠ¨áŠ¥áˆµáˆ«á‰± á‹¨á‰°áˆá‰³á‹ áŒ¥áŠ•á‰° áŒ áˆ‹á‰µ áˆ°á‹­áŒ£áŠ• á‹«áˆˆ á‹¨áˆŒáˆˆ á‹¨áŠ­áˆ•á‹°á‰µá£ á‹¨áˆµáˆ•á‰°á‰µá£ á‹¨áˆµá‹µá‰¥á£ á‹¨áˆáŠ•áá‰…áŠ“ áŠ€á‹­áˆ‰áŠ• á‰ áˆá‹µáˆ«á‰½áŠ• áˆ‹á‹­ áŠ¥áŠ•á‹°áˆšá‹«áˆ˜áŒ£ á‰…á‹±áˆµ áˆ˜áŒ½áˆá á‹«áˆµá‰°áˆáˆ¨áŠ“áˆá¤ á‰ áŒŠá‹œá‹«á‰½áŠ•áˆ á‰ á‹šáŠ½ á‹¨áˆµáˆ•á‰°á‰µ áˆ˜áŠ•áˆáˆµ á‹¨á‰°áŒ“á‹™ áˆ°á‹Žá‰½ áˆˆáˆ°áˆ›á‹­áŠ“ áˆˆáˆá‹µáˆ­ á‹¨áˆšá‹«áˆµáŒ¨áŠ•á‰… áˆµá‹µá‰¥áŠ• á‹¨áŠ¥áŒá‹šáŠ á‰¥áˆ”áˆ­ á‹ˆá‹³áŒ†á‰½áŠ• áˆ²áˆ³á‹°á‰¡á£ áŠ­á‰¥áˆ¨ á‰…á‹±áˆ³áŠ•áŠ• áˆ²á‹‹áŒ‰ áˆµáŠ“á‹­áŠ“ áˆµáŠ•áˆ°áˆ› áŠááˆ³á‰½áŠ• áŠ¥áŒ…áŒ á‰¥á‰µá‹°áŠáŒáŒ¥áˆ áŒáŠ• á‹­áŠ½ á‹¨áˆµá‹µá‰¥ áˆ˜áŠ•áˆáˆµáŠ• áŒ áˆ‹á‰µ áˆ°á‹­áŒ£áŠ• á‰ áˆá‹µáˆ«á‰½áŠ• áˆ‹á‹­ á‰ áˆ˜áŒ¨áˆ¨áˆ»á‹ á‹˜áˆ˜áŠ• áŠ¥áŠ•á‹°áˆšá‹«áˆ˜áŒ£á‹ áˆ˜áŒ½áˆá á‰…á‹±áˆµ áŠ¥áŠ•á‹²áŠ½ á‹­áŠ“áŒˆáˆ«áˆáŠ“ á‹¨á‰ƒáˆ‰áŠ• áˆ˜áˆáŒ¸áˆ áŠ¥áŠ“áˆµá‰°á‹áˆ‹áˆˆáŠ•á¡-??? ?? ????? ?????? ????? ??? ??? ??? ?????? ???? ??? ????? ?????? ???? ???????? ????? ??? ??? ??????? ?? ???? ???? ????? ?????? ????? ????? ????? ??? ??? ???? ?? ??? ?????? ?????? ????? ?????? ???? ?????? ?? ??????? ??? ???? ???????? ??????? ??? ????? ???? ???? ??? ????? ???? ??????? ???? ???????? ????? ????? ??? ????? ??? ???? ???? ????? ??? ??????? ?? ?? ???? ????? ??? ???? ?????? ?? ?????? ??? ???????? ???? ??? ???? ?????? ???? ???? ?????????-', 2),
(666, 'áŠ áŒˆáˆáŒáˆŽá‰µáŠ• áˆ›áˆµá‰°á‹‹á‹ˆá‰…', '2017-06-17', 'á‰ áŠ áˆáƒá€áˆ áˆ˜áˆ˜áˆªá‹«á‹ áˆ‹á‹­ á‰ á‰°á‰€áˆ˜áŒ á‹ áŠ áŒá‰£á‰¥ á‹¨á‰°á‰‹áˆ™ áˆ°áˆ«á‰°áŠžá‰½ áŠ¥áŠ“ á‰£áˆˆá‹µáˆ­áˆ» áŠ áŠ«áˆ‹á‰µ áŠ¥áŠ•á‹°áŠ áŒá‰£á‰¡ á‹¨á‰°áˆˆá‹«á‹© áˆ˜áŠ•áŒˆá‹¶á‰½áŠ• á‰ áˆ˜áŒ á‰€áˆ áˆµáˆˆá‰°á‰‹áˆ™ áŠ áŒˆáˆáŒáˆŽá‰µ áˆˆá‹°áŠ•á‰ áŠ›á‹ áŒáŠ•á‹›á‰¤ áˆ›áˆµáŒ¨á‰ áŒ¥ á‹­áŠ–áˆ­á‰£á‰¸á‹‹áˆ::', 1),
(671, 'Dear Customrs!!!', '2017-06-20', 'Dear Customrs Who Have Saving Account We Add 0.01 persont for your saving account. work with us.Acsi manager Alemu.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE IF NOT EXISTS `rule` (
  `Date` date NOT NULL,
  `Descrption` text NOT NULL,
  `summited_by` varchar(22) NOT NULL,
  `status` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`Date`, `Descrption`, `summited_by`, `status`) VALUES
('2003-05-17', 'The main objective of this project is to develop a web based mobile application for patient history taking and pharmacy prescription writing in GCMS and Ibex hospital. This web based mobile application helps the institution and user to exchange and store information in easy way. In addition to that it also has best contribution in minimizing the load and error prone.', 'kid', 'on'),
('2008-06-17', 'á‹˜áˆ˜áŠ‘ á‹ˆá‹° áˆ˜áŒ¨áˆ¨áˆ»á‹ áŠ¥á‹¨áŒˆáˆ°áŒˆáˆ° áˆ°á‹­áŒ£áŠ•áˆ á‰ á‹šáŠ½ á‹“áˆˆáˆ á‹«áˆˆá‹ á‹¨áŒˆá‹¢áŠá‰µáŠ• áˆ¥áˆáŒ£áˆ áŠ¥áˆµáŠ¨ á‹ˆá‹²á‹«áŠ›á‹ á‹¨áˆšáˆ»áˆ­á‰ á‰µ á‰…á‹±áˆ³áŠ• á‰ áŠ¥áŒá‹šáŠ á‰¥áˆ”áˆ­ áˆ˜áŠ•áŒáˆ¥á‰µ áŠ¥áŠ•á‹° á€áˆá‹­ á‹¨áˆšá‹°áˆá‰á‰ á‰µ áŒŠá‹œ á‰ á‹°áˆ¨áˆ° áˆ˜áŒ áŠ•á¤ áˆ˜áŒ¨áˆ¨áˆ»á‹ áŠ¥áŠ•á‹°á‰°á‰ƒá‰  á‹¨áˆšáˆ¨á‹³á‹ áŠ¨áŠ¥áˆµáˆ«á‰± á‹¨á‰°áˆá‰³á‹ áŒ¥áŠ•á‰° áŒ áˆ‹á‰µ áˆ°á‹­áŒ£áŠ• á‹«áˆˆ á‹¨áˆŒáˆˆ á‹¨áŠ­áˆ•á‹°á‰µá£ á‹¨áˆµáˆ•á‰°á‰µá£ á‹¨áˆµá‹µá‰¥á£ á‹¨áˆáŠ•áá‰…áŠ“ áŠ€á‹­áˆ‰áŠ• á‰ áˆá‹µáˆ«á‰½áŠ• áˆ‹á‹­ áŠ¥áŠ•á‹°áˆšá‹«áˆ˜áŒ£ á‰…á‹±áˆµ áˆ˜áŒ½áˆá á‹«áˆµá‰°áˆáˆ¨áŠ“áˆá¤ á‰ áŒŠá‹œá‹«á‰½áŠ•áˆ á‰ á‹šáŠ½ á‹¨áˆµáˆ•á‰°á‰µ áˆ˜áŠ•áˆáˆµ á‹¨á‰°áŒ“á‹™ áˆ°á‹Žá‰½ áˆˆáˆ°áˆ›á‹­áŠ“ áˆˆáˆá‹µáˆ­ á‹¨áˆšá‹«áˆµáŒ¨áŠ•á‰… áˆµá‹µá‰¥áŠ• á‹¨áŠ¥áŒá‹šáŠ á‰¥áˆ”áˆ­ á‹ˆá‹³áŒ†á‰½áŠ• áˆ²áˆ³á‹°á‰¡á£ áŠ­á‰¥áˆ¨ á‰…á‹±áˆ³áŠ•áŠ• áˆ²á‹‹áŒ‰ áˆµáŠ“á‹­áŠ“ áˆµáŠ•áˆ°áˆ› áŠááˆ³á‰½áŠ• áŠ¥áŒ…áŒ á‰¥á‰µá‹°áŠáŒáŒ¥áˆ áŒáŠ• á‹­áŠ½ á‹¨áˆµá‹µá‰¥ áˆ˜áŠ•áˆáˆµáŠ• áŒ áˆ‹á‰µ áˆ°á‹­áŒ£áŠ• á‰ áˆá‹µáˆ«á‰½áŠ• áˆ‹á‹­ á‰ áˆ˜áŒ¨áˆ¨áˆ»á‹ á‹˜áˆ˜áŠ• áŠ¥áŠ•á‹°áˆšá‹«áˆ˜áŒ£á‹ áˆ˜áŒ½áˆá á‰…á‹±áˆµ áŠ¥áŠ•á‹²áŠ½ á‹­áŠ“áŒˆáˆ«áˆáŠ“ á‹¨á‰ƒáˆ‰áŠ• áˆ˜áˆáŒ¸áˆ áŠ¥áŠ“áˆµá‰°á‹áˆ‹áˆˆáŠ•á¡-\r\ná‹­áŠ¸á‹áˆ áŒ áˆ‹á‰µ áˆ°á‹­áŒ£áŠ• á‰ á‰µá‹•á‰¢á‰°áŠžá‰½ áˆ˜áŠ“áá‰ƒáŠ• áˆá‰¥ á‰ áˆ›á‹°áˆ­ á‹¨áŠ¥áŒá‹šáŠ á‰¥áˆ”áˆ­áŠ• áˆµáˆ áŠ¥áŠ•á‹°áˆšá‹«á‰ƒáˆáˆá¤ á‰ á‰…á‹±áˆ³áŠ• áˆ‹á‹­ áŠ¹áˆ áŒŠá‹œ áŠ¥áŠ•á‹°áˆšáŠ¨á‹áŠ“ áŠ¥áŠ•á‹°áˆšáˆ³á‹°á‰¥ á‹³á‹Šá‰µ áŠ¥áŠ•á‹²áŠ½ á‹­áˆ‹áˆá¡-\r\n', 'kid', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `saving`
--

CREATE TABLE IF NOT EXISTS `saving` (
  `sav_no` int(22) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(22) NOT NULL,
  `Lname` varchar(22) NOT NULL,
  `AccNumber` int(22) NOT NULL,
  `balance` double NOT NULL,
  `percent` float NOT NULL,
  `date` date NOT NULL,
  `interest_update` date NOT NULL,
  PRIMARY KEY (`sav_no`),
  KEY `AccNumber` (`AccNumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `saving`
--

INSERT INTO `saving` (`sav_no`, `Fname`, `Lname`, `AccNumber`, `balance`, `percent`, `date`, `interest_update`) VALUES
(8, 'hana', 'haysh', 2303, 6978.3, 0.05, '2017-06-22', '2017-07-24'),
(9, 'wudnesh', 'balew', 2307, 210, 0.05, '2017-06-22', '2017-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `savingrequest`
--

CREATE TABLE IF NOT EXISTS `savingrequest` (
  `sreq_no` int(22) NOT NULL AUTO_INCREMENT,
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `AccNumber` int(22) NOT NULL,
  `Amount` double NOT NULL,
  `date` date NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`sreq_no`),
  KEY `AccNumber` (`AccNumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `savingrequest`
--

INSERT INTO `savingrequest` (`sreq_no`, `fname`, `lname`, `AccNumber`, `Amount`, `date`, `status`) VALUES
(12, 'hana', 'haysh', 2303, 5000, '2017-06-22', 'Done'),
(13, 'wudnesh', 'balew', 2307, 2000, '2017-06-22', 'Approve'),
(14, 'hana', 'haysh', 2303, 500, '2017-06-22', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `serv`
--

CREATE TABLE IF NOT EXISTS `serv` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `service` varchar(22) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `description` varchar(22) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(4) NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `serv`
--

INSERT INTO `serv` (`info_id`, `service`, `description`, `status`) VALUES
(5, 'Credit		', 'Delivery', 'on'),
(6, 'Micro	', 'Insurance', 'on'),
(7, 'Fund	', 'Managment', 'on'),
(8, 'Money	', 'Transfer', 'on'),
(9, 'á‰¥á‹µáˆ­áŠ•', ' áˆ›á‹³áˆ¨áˆµ', 'off'),
(10, 'á‹¨á‹‹áˆµá‰µáŠ“ ', 'áŠ áŒˆáˆáŒáˆŽá‰µ', 'off'),
(11, 'áŒˆáŠ•á‹˜á‰¥áŠ•', ' áˆ›áˆµá‰°á‹³á‹°áˆ­', 'off'),
(12, 'á‰¥áˆ­áŠ• ', 'áˆ›á‹˜á‹‹á‹ˆáˆ­', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `withdrwalrequest`
--

CREATE TABLE IF NOT EXISTS `withdrwalrequest` (
  `wreq_no` int(22) NOT NULL AUTO_INCREMENT,
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `AccNumber` int(22) NOT NULL,
  `Amount` double NOT NULL,
  `Date` date NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`wreq_no`),
  KEY `AccNumber` (`AccNumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `withdrwalrequest`
--

INSERT INTO `withdrwalrequest` (`wreq_no`, `fname`, `lname`, `AccNumber`, `Amount`, `Date`, `status`) VALUES
(20, 'hana', 'haysh', 2303, 1000, '2017-06-22', 'Done'),
(21, 'hana', 'haysh', 2303, 500, '2017-06-22', 'Done');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `credit`
--
ALTER TABLE `credit`
  ADD CONSTRAINT `credit_ibfk_3` FOREIGN KEY (`AccNumber`) REFERENCES `customer` (`AccNumber`);

--
-- Constraints for table `custappointment`
--
ALTER TABLE `custappointment`
  ADD CONSTRAINT `custappointment_ibfk_1` FOREIGN KEY (`AccNumber`) REFERENCES `customer` (`AccNumber`);

--
-- Constraints for table `imagec`
--
ALTER TABLE `imagec`
  ADD CONSTRAINT `imagec_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `customer` (`user_id`);

--
-- Constraints for table `ledger`
--
ALTER TABLE `ledger`
  ADD CONSTRAINT `ledger_ibfk_1` FOREIGN KEY (`AccNumber`) REFERENCES `customer` (`AccNumber`);

--
-- Constraints for table `saving`
--
ALTER TABLE `saving`
  ADD CONSTRAINT `saving_ibfk_3` FOREIGN KEY (`AccNumber`) REFERENCES `customer` (`AccNumber`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
