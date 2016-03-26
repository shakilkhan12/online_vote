-- phpMyAdmin SQL Dump
-- version 4.3.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2016 at 02:31 PM
-- Server version: 5.6.22
-- PHP Version: 5.6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax`
--

CREATE TABLE IF NOT EXISTS `ajax` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ajax`
--

INSERT INTO `ajax` (`id`, `name`) VALUES
(1, 'shakil'),
(2, 'shakil'),
(3, 'jamil'),
(4, 'naved');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `post` varchar(500) NOT NULL,
  `date1` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL,
  `privance` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `privance`) VALUES
(1, 'KPK'),
(2, 'PUNJAB'),
(3, 'SINDH'),
(4, 'BALUCHISTAN');

-- --------------------------------------------------------

--
-- Table structure for table `distric`
--

CREATE TABLE IF NOT EXISTS `distric` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `distric` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distric`
--

INSERT INTO `distric` (`id`, `country_id`, `distric`) VALUES
(1, 1, 'Abbottabad'),
(2, 1, 'Bannu'),
(3, 1, 'Batagram'),
(4, 1, 'Buner'),
(5, 1, 'Charsadda'),
(6, 1, 'Chitral'),
(7, 1, 'Dera Ismail Khan'),
(8, 1, 'Hangu'),
(9, 1, 'Karak'),
(10, 1, 'Kohat'),
(11, 1, 'Kohistan'),
(12, 1, 'Lakki Marwat'),
(13, 1, 'Lower Dir'),
(14, 1, 'Malakand'),
(15, 1, 'Mansehra'),
(16, 1, 'Mardan'),
(17, 1, 'Nowshera'),
(18, 1, 'Peshawar'),
(19, 1, 'Shangla'),
(20, 1, 'Swabi'),
(21, 1, 'Swat'),
(22, 1, 'Tank'),
(23, 1, 'Tor Ghar'),
(24, 1, 'Upper Dir'),
(25, 2, 'Attock'),
(26, 2, 'Bahawalnagar'),
(27, 2, 'Bahawalpur'),
(28, 2, 'Bhakkar'),
(29, 2, 'Chakwal'),
(30, 2, 'Chiniot'),
(31, 2, 'Dera Ghazi Khan'),
(32, 2, 'Faisalabad'),
(33, 2, 'Gujranwala'),
(34, 2, 'Gujrat'),
(35, 2, 'Hafizabad'),
(36, 2, 'Jhang'),
(37, 2, 'Jhelum'),
(38, 2, 'Kasur'),
(39, 2, 'Khanewal'),
(40, 2, 'Khushab'),
(41, 2, 'Lahore'),
(42, 2, 'Layyah'),
(43, 2, 'Lodhran'),
(44, 2, 'Mandi Bahauddin'),
(45, 2, 'Mianwali'),
(46, 2, 'Multan'),
(47, 2, 'Muzaffargarh'),
(48, 2, 'Narowal'),
(49, 2, 'Nankana Sahib'),
(50, 2, 'Okara'),
(51, 2, 'Pakpattan'),
(52, 2, 'Rahim Yar Khan'),
(53, 2, 'Rajanpur'),
(54, 2, 'Rawalpindi'),
(55, 2, 'Sahiwal'),
(56, 2, 'Sargodha'),
(57, 2, 'Sheikhupura'),
(58, 2, 'Sialkot'),
(59, 2, 'Toba Tek Singh'),
(60, 2, 'Vehari'),
(61, 3, 'Badin'),
(62, 3, 'Ghotki'),
(63, 3, 'Jacobabad'),
(64, 3, 'Karachi'),
(65, 3, 'Khairpur'),
(66, 3, 'Matiari'),
(67, 3, 'Naushahro Firoz'),
(68, 3, 'Qamber and Shahdad Kot'),
(69, 3, 'Shikarpur'),
(70, 3, 'Tando Allah Yar'),
(71, 3, 'Tharparkar'),
(72, 3, 'Umer Kot'),
(73, 3, 'Dadu'),
(74, 3, 'Hyderabad'),
(75, 3, 'Jamshoro'),
(76, 3, 'Kashmore'),
(77, 3, 'Larkana'),
(78, 3, 'Mirpur Khas'),
(79, 3, 'Shaheed Benazirabad (Nawab Shah)'),
(80, 3, 'Sanghar'),
(81, 3, 'Sukkar'),
(82, 3, 'Tando Muhammad Khan'),
(83, 3, 'Thatta'),
(84, 4, 'Awaran'),
(85, 4, 'Bolan'),
(86, 4, 'Dera Bugti'),
(87, 4, 'Harnai'),
(88, 4, 'jhal Magsi'),
(89, 4, 'Kech'),
(90, 4, 'Khuzdar'),
(91, 4, 'Lasbela'),
(92, 4, 'Mastung'),
(93, 4, 'Naseerabad'),
(94, 4, 'Panjgur'),
(95, 4, 'Qilla Abdullah'),
(96, 4, 'Quetta'),
(97, 4, 'Sibi'),
(98, 4, 'Zhob'),
(99, 4, 'Barkhan'),
(100, 4, 'Chagai'),
(101, 4, 'Gwadar'),
(102, 4, 'Jafarabad'),
(103, 4, 'Kalat'),
(104, 4, 'Kharan'),
(105, 4, 'Kohlu'),
(106, 4, 'Loralai'),
(107, 4, 'Musakhel'),
(108, 4, 'Nushki'),
(109, 4, 'Pishin'),
(110, 4, 'Qilla Saifullah'),
(111, 4, 'Sheerani'),
(112, 4, 'Washuk'),
(113, 4, 'Ziarat');

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE IF NOT EXISTS `party` (
  `id` int(11) NOT NULL,
  `party` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`id`, `party`) VALUES
(1, 'pti'),
(2, 'pmln'),
(3, 'ppp'),
(4, 'mqm'),
(5, 'qwp'),
(6, 'jui'),
(7, 'jui'),
(8, 'anp');

-- --------------------------------------------------------

--
-- Table structure for table `strtostart`
--

CREATE TABLE IF NOT EXISTS `strtostart` (
  `id` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strtostart`
--

INSERT INTO `strtostart` (`id`, `time`) VALUES
(1, '2015-12-28 10:21:56');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `cnic` int(11) NOT NULL,
  `address` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `country` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`id`, `name`, `cnic`, `address`, `gender`, `country`) VALUES
(1, 0, 2147483647, 0, 0, 0),
(2, 0, 2147483647, 0, 0, 0),
(3, 0, 2147483647, 0, 0, 0),
(4, 0, 2147483647, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vote2`
--

CREATE TABLE IF NOT EXISTS `vote2` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cnic` bigint(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `img_name` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote2`
--

INSERT INTO `vote2` (`id`, `name`, `cnic`, `email`, `address`, `img_name`, `gender`, `country`, `district`) VALUES
(77, 'muhammad ishaq', 4564564564565, 'muhammadishaq@gmail.com', 'ouch', 'AJAX_with_jQuery.pdf', 'Male', '1', 'Lower Dir'),
(79, 'wali khan', 5675676575676, 'wali@gmail.com', 'karachi', 'AJAX_with_jQuery.pdf', 'Male', '1', 'Hangu'),
(80, 'shakil ahmed khan rughani', 4564564564567, 'ahmed@gmai.com', 'sdlkjflksd', 'AJAX_with_jQuery.pdf', 'Male', '1', 'Bannu'),
(81, 'harron rashid', 7686787687684, 'harronrashi@gmail.com', 'chakdara', 'AJAX_with_jQuery.pdf', 'Male', '1', 'Lower Dir'),
(83, 'sharjeel', 3435343242342, 'sharjeel@gmail.com', 'karachi sindh', 'lect10.pdf', 'Male', '3', 'Matiari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajax`
--
ALTER TABLE `ajax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distric`
--
ALTER TABLE `distric`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strtostart`
--
ALTER TABLE `strtostart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vote2`
--
ALTER TABLE `vote2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajax`
--
ALTER TABLE `ajax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `distric`
--
ALTER TABLE `distric`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `party`
--
ALTER TABLE `party`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `strtostart`
--
ALTER TABLE `strtostart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vote2`
--
ALTER TABLE `vote2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=84;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
