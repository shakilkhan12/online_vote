-- phpMyAdmin SQL Dump
-- version 4.3.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2016 at 12:47 PM
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
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin');

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
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL,
  `privance` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `privance`) VALUES
(1, 'KPK'),
(2, 'PUNJAB'),
(3, 'SINDH'),
(4, 'BALUCHISTAN'),
(5, 'FATA'),
(6, 'Federal');

-- --------------------------------------------------------

--
-- Table structure for table `distric`
--

CREATE TABLE IF NOT EXISTS `distric` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `distric` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=291 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distric`
--

INSERT INTO `distric` (`id`, `country_id`, `distric`) VALUES
(1, 1, 'NA-1 Peshawar-I'),
(2, 1, 'NA-2 Peshawar-II'),
(3, 1, 'NA-3 Peshawar-III'),
(4, 1, 'NA-4 Peshawar-IV'),
(5, 1, 'NA-5 Nowshera-I'),
(6, 1, 'NA-6 Nowshera-II'),
(7, 1, 'NA-7 Charsadda-I'),
(8, 1, 'NA-8 Charsadda-II'),
(9, 1, 'NA-9 Mardan-I'),
(10, 1, 'NA-10 Mardan-II'),
(11, 1, 'NA-11 Mardan-III'),
(12, 1, 'NA-12 Swabi-I'),
(13, 1, 'NA-13 Swabi-II'),
(14, 1, 'NA-14 Kohat'),
(15, 1, 'NA-15 Karak'),
(16, 1, 'NA-16 Hangu'),
(17, 1, 'NA-17 Abbottabad-I'),
(18, 1, 'NA-18 Abbottabad-II'),
(19, 1, 'NA-19 Haripur'),
(20, 1, 'NA-20 Mansehra-I'),
(21, 1, 'NA-21 Mansehra-cum-Tor Ghar (Old Mansehr'),
(22, 1, 'NA-22\r\nBattagram\r\n'),
(23, 1, 'NA-23\r\nKohistan'),
(24, 1, 'NA-24\r\nD.I.Khan'),
(25, 1, 'NA-25\r\nD.I.Khan-cum-Tank'),
(26, 1, 'NA-26\r\nBannu'),
(27, 1, 'NA-27\r\nLakki Marwat'),
(28, 1, 'NA-28\r\nBunair'),
(29, 1, 'NA-29\r\nSwat-I'),
(30, 1, 'NA-30\nSwat-II'),
(31, 1, 'NA-31\nShanglapar'),
(32, 1, 'NA-32\nChitral'),
(33, 1, 'NA-33\nUpper Dir-cum-Lower Dir (old Upper Dir)'),
(34, 1, 'NA-34\nLower Dir'),
(35, 1, 'NA-35\nMALAKAND PROTECTED AREA'),
(36, 2, 'NA-50\nRawalpindi-I'),
(37, 2, 'NA-51\nRawalpindi-II'),
(38, 2, 'NA-52\nRawalpindi-III'),
(39, 2, 'NA-53\nRawalpindi-IV'),
(40, 2, 'NA-54\nRawalpindi-V'),
(41, 2, 'NA-55\nRawalpindi-VI'),
(42, 2, 'NA-56\nRawalpindi-VII'),
(43, 2, 'NA-57\nAttock-I'),
(44, 2, 'NA-58\nAttock-II'),
(45, 2, 'NA-59\nAttock-III'),
(46, 2, 'NA-60\nChakwal-I'),
(47, 2, 'NA-61\nChakwal-II'),
(48, 2, 'NA-62\nJhelum-I'),
(49, 2, 'NA-63\nJhelum-II'),
(50, 2, 'NA-64\nSargodha-I'),
(51, 2, 'NA-65\nSargodha-II'),
(52, 2, 'NA-66\nSargodha-III'),
(53, 2, 'NA-67\nSargodha-IV'),
(54, 2, 'NA-68\nSargodha-V'),
(55, 2, 'NA-69\nKhushab-I'),
(56, 2, 'NA-70\nKhushab-II'),
(57, 2, 'NA-71\nMianwali-I'),
(58, 2, 'NA-72\nMianwali-II'),
(59, 2, 'Toba Tek Singh'),
(60, 2, 'NA-73\nBhakkar-I'),
(61, 2, 'NA-74\nBhakkar-II'),
(62, 2, 'NA-75\nFaisalabad-I'),
(63, 2, 'NA-76\nFaisalabad-II'),
(64, 2, 'NA-77\nFaisalabad-III'),
(65, 2, 'NA-78\nFaisalabad-IV'),
(66, 2, 'NA-79\nFaisalabad-V'),
(67, 2, 'NA-80\nFaisalabad-VI'),
(68, 2, 'NA-81\nFaisalabad-VII'),
(69, 2, 'NA-82\nFaisalabad-VIII'),
(70, 2, 'NA-83\nFaisalabad-IX'),
(71, 2, 'NA-84\nFaisalabad-X'),
(72, 2, 'NA-85\nFaisalabad-XI'),
(73, 2, 'NA-86\nCHINIOT-I (Old NA-86 Jhang-I)'),
(74, 2, 'NA-87\nCHINIOT-II Cum-Jhang (Old NA-88 Jhang-III)'),
(75, 2, 'NA-88\nJHANG-Cum-Chiniot (Old NA-87 Jhang-II)'),
(76, 2, 'NA-89\nJHANG-I (Old NA-89 Jhang-IV)'),
(77, 2, 'NA-90\nJHANG-II (Old NA-90 Jhang-V)'),
(78, 2, 'NA-91\nJHANG-III(Old NA-91 Jhang-VI)'),
(79, 2, 'NA-92\nT.T.Singh-I'),
(80, 2, 'NA-93\nT.T.Singh-II'),
(81, 2, 'NA-94\nT.T.Singh-III'),
(82, 2, 'NA-95\nGujranwala-I'),
(83, 2, 'NA-96\nGujranwala-II'),
(84, 2, 'NA-97\nGujranwala-III'),
(85, 2, 'NA-98\nGujranwala-IV'),
(86, 2, 'NA-99\nGujranwala-V'),
(87, 2, 'NA-100\nGujranwala-VI'),
(88, 2, 'NA-101\nGujranwala-VII'),
(89, 2, 'NA-102\nHafizabad-I'),
(90, 2, 'NA-103\nHafizabad-II'),
(91, 2, 'NA-104\nGujrat-I'),
(92, 2, 'NA-105\nGujrat-II'),
(93, 2, 'NA-106\nGujrat-III'),
(94, 2, 'NA-107\nGujrat-IV'),
(95, 2, 'NA-108\nM.B.Din-I'),
(96, 2, 'NA-109\nM.B.Din-II'),
(97, 2, 'NA-110\nSialkot-I'),
(98, 2, 'NA-111\nSialkot-II'),
(99, 2, 'NA-112\nSialkot-III'),
(100, 2, 'NA-113\nSialkot-IV'),
(101, 2, 'NA-114\nSialkot-V'),
(102, 2, 'NA-115\nNarowal-I'),
(103, 2, 'NA-116\nNarowal-II'),
(104, 2, 'NA-117\nNarowal-III'),
(105, 2, 'NA-118\nLahore-I'),
(106, 2, 'NA-119\nLahore-II'),
(107, 2, 'NA-120\nLahore-III'),
(108, 2, 'NA-121\nLahore-IV'),
(109, 2, 'NA-122\nLahore-V'),
(110, 2, 'NA-123\nLahore-VI'),
(111, 2, 'NA-124\nLahore-VII'),
(112, 2, 'NA-125\nLahore-VIII'),
(113, 2, 'NA-126\nLahore-IX'),
(114, 2, 'NA-127\nLahore-X'),
(115, 2, 'NA-128 Lahore-XI'),
(116, 2, 'NA-129\nLahore-XII'),
(117, 2, 'NA-130 Lahore-XIII'),
(118, 2, 'NA-130\nLahore-XIII'),
(119, 2, 'NA-131\nSheikhupura-I'),
(120, 2, 'NA-132\r\nSHEIKHUPURA-II-cum-Nankana Sahib (Old Sheikhupura-II)'),
(121, 2, 'NA-133\r\nSHEIKHUPURA-III'),
(122, 2, 'NA-134\r\nSHEIKHUPURA-IV'),
(123, 2, 'NA-135\r\nNANKANA SAHIB-I-Cum-Sheikhupura (Old Sheikhupura-V)'),
(124, 2, 'NA-136\r\nNANKANA SAHIB-II-CUM-SHEIKHUPURA (Old Sheikhupura-VI)'),
(125, 2, 'NA-137\r\nNankana Sahib-III (Old Sheikhupra-VII)'),
(126, 2, 'NA-138\r\nKasur-I'),
(127, 2, 'NA-139\r\nKasur-II'),
(128, 2, 'NA-140\r\nKasur-III'),
(129, 2, 'NA-141\r\nKasur-IV'),
(130, 2, 'NA-142\r\nKasur-V'),
(131, 2, 'NA-143\r\nOkara-I'),
(132, 2, 'NA-144\r\nOkara-II'),
(133, 2, 'NA-145\r\nOkara-III'),
(134, 2, 'NA-146\r\nOkara--IV'),
(135, 2, 'NA-147\r\nOkara-V'),
(136, 2, 'NA-148\r\nMultan-I'),
(137, 2, 'NA-149\r\nMultan-II'),
(138, 2, 'NA-150\r\nMultan-III'),
(139, 2, 'NA-151\r\nMultan-IV'),
(140, 2, 'NA-152\r\nMultan-V'),
(141, 2, 'NA-153\r\nMultan-VI'),
(142, 2, 'NA-154\r\nLodhran-I'),
(143, 2, 'NA-155\r\nLodhran-II'),
(144, 2, 'NA-156\r\nKhanewal-I'),
(145, 2, 'NA-157\r\nKhanewal-II'),
(146, 2, 'NA-158\r\nKhanewal-III'),
(147, 2, 'NA-159\r\nKhanewal-IV'),
(148, 2, 'NA-160\r\nSahiwal-I'),
(149, 2, 'NA-161\r\nSahiwal-II'),
(150, 2, 'NA-162\r\nSahiwal-III'),
(151, 2, 'NA-163\r\nSahiwal-IV'),
(152, 2, 'NA-164\r\nPakpattan-I'),
(153, 2, 'NA-165\r\nPakpattan-II'),
(154, 2, 'NA-166\r\nPakpattan-III'),
(155, 2, 'NA-167 \r\nVehari-I'),
(156, 2, 'NA-168 \r\nVehari-II'),
(157, 2, 'NA-169 \r\nVehari-III'),
(158, 2, 'NA-170 \r\nVehari-IV'),
(159, 2, 'NA-171 \r\nD.G.Khan-I'),
(160, 2, 'NA-172 \r\nD.G.Khan-II'),
(161, 2, 'NA-173 \r\nD.G.Khan-III'),
(162, 2, 'NA-174 \r\nRajanpur-I'),
(163, 2, 'NA-175 \r\nRajanpur-II'),
(164, 2, 'NA-176 \r\nMuzaffargarh-I'),
(165, 2, 'NA-177 \r\nMuzaffargarh-II'),
(166, 2, 'NA-178 \r\nMuzaffargarh-III'),
(167, 2, 'NA-179 \r\nMuzaffargarh-IV'),
(168, 2, 'NA-180 \r\nMuzaffargarh-V'),
(169, 2, 'NA-181 \r\nLayyah-I'),
(170, 2, 'NA-182 \r\nLayyah-II'),
(171, 2, 'NA-183 \r\nBahawalpur-I'),
(172, 2, 'NA-184 \r\nBahawalpur-II'),
(173, 2, 'NA-185 \r\nBahawalpur-III'),
(174, 2, 'NA-186 \r\nBahawalpur-IV'),
(175, 2, 'NA-187 \r\nBahawalpur-V'),
(176, 2, 'NA-188 \r\nBahawalnagar-I'),
(177, 2, 'NA-189 \r\nBahawalnagar-II'),
(178, 2, 'NA-190 \r\nBahawalnagar-III'),
(179, 2, 'NA-191 \r\nBahawalnagar-IV'),
(180, 2, 'NA-192 \r\nR.Y.Khan-I'),
(181, 2, 'NA-193 \r\nR.Y.Khan-II'),
(182, 2, 'NA-194 \r\nR.Y.Khan-III'),
(183, 2, 'NA-195 \r\nR.Y.Khan-IV'),
(184, 2, 'NA-196 \r\nR.Y.Khan-V'),
(185, 2, 'NA-197 \r\nR.Y.Khan-VI'),
(186, 3, 'NA-198\r\nSukkur-I'),
(187, 3, 'NA-199\r\nSUKKUR-CUM-SHIKARPUR(II)(OLD SUKKUR-II)'),
(188, 3, 'NA-200\r\nGhotki-I'),
(189, 3, 'NA-201\r\nGhotki-II'),
(190, 3, 'NA-202\r\nSHIKARPUR (OLD SHIKARPUR-I)'),
(191, 3, 'NA-203\r\nSHIKARPUR-CUM-SUKKUR (OLD SHIKARPUR-II)'),
(192, 3, 'NA-204\r\nLARKANA (Old Larkana)'),
(193, 3, 'NA-205\r\nLARKANA-CUM-KAMBER SHAHDADKOT (OLD LARKANA-II)'),
(194, 3, 'NA-206\r\nKAMBER SHAHDADKOT (OLD LARKANA-III)'),
(195, 3, 'NA-207\r\nLARKANA-CUM-KAMBER SHAHDADKOT (OLD LARKANA-IV)'),
(196, 3, 'NA-208\r\nJACOBABAD (OLD JACOBABAD-I)'),
(197, 3, 'NA-209\r\nJACOBABAD-CUM-KASHMORE (OLD JACOBABAD-II)'),
(198, 3, 'NA-210\r\nKASHMORE (OLD JACOBABAD-III)'),
(199, 3, 'NA-211\r\nNaushero Feroze-I'),
(200, 3, 'NA-212\r\nNaushero Feroze-II'),
(201, 3, 'NA-213\r\nNawabshah-I'),
(202, 3, 'NA-214\r\nSHAHEED BENAZIR ABAD (OLD NAWABSHAH-II)'),
(203, 3, 'NA-215\r\nKhairpur-I'),
(204, 3, 'NA-216\r\nKhairpur-II'),
(205, 3, 'NA-217\r\nKhairpur-III'),
(206, 3, 'NA-218\r\nMATIARI-CUM-HYDERABAD (OLD HYDERABAD-I)'),
(207, 3, 'NA-219\r\nHyderabad-II'),
(208, 3, 'NA-220\r\nHyderabad-III'),
(209, 3, 'NA-221\r\nHyderabad-IV'),
(210, 3, 'NA-222\r\nTANDO MUHAMMAD KHAN-CUM-HYDERABAD-CUM-BADIN (HYDERABAD-V)'),
(211, 3, 'NA-223\r\nHyderabad-VI	'),
(212, 3, 'NA-224\r\nBADIN-CUM-TANDO MUHAMMAD KHAN-I (OLD BADIN-I)'),
(213, 3, 'NA-225\r\nBADIN-CUM-TANDO MUHAMMAD KHAN-II(OLD BADIN-II)'),
(214, 3, 'NA-226\r\nMIRPUR KHAS-CUM-UMERKOT (I) (OLD MIRPURKHAS-I)'),
(215, 3, 'NA-227\r\nMIRPURKHAS-CUM-UMERKOT (II) (OLD MIRPURKHAS-II)'),
(216, 3, 'NA-228\r\nUMERKOT (OLD MIRPURKHAS-III)'),
(217, 3, 'NA-229\r\nTharparkar-I'),
(218, 3, 'NA-230\r\nTharparkar-II'),
(219, 3, 'NA-231\r\nJAMSHORO(OLD DADU-I)'),
(220, 3, 'NA-232\r\nDADU-I (OLD DADU-II)'),
(221, 3, 'NA-233\r\nDADU-II (OLD DADU-III)'),
(222, 3, 'NA-234\r\nSanghar-I'),
(223, 3, 'NA-235 \r\nSANGHAR-CUM-MIRPURKHAS-CUM-UMERKOT(OLD SANGHAR-II)'),
(224, 3, 'NA-236 \r\nSANGHAR-II(OLD SNAGHAR-III)'),
(225, 3, 'NA-237 \r\nThatta-I'),
(226, 3, 'NA-238 \r\nThatta-II'),
(227, 3, 'NA-239 \r\nKarachi-I'),
(228, 3, 'NA-240 \r\nKarachi-II'),
(229, 3, 'NA-241 \r\nKarachi-III'),
(230, 3, 'NA-242 \r\nKarachi-IV'),
(231, 3, 'NA-243 \r\nKarachi-V'),
(232, 3, 'NA-244 \r\nKarachi-VI'),
(233, 3, 'NA-246 \r\nKarachi-VIII'),
(234, 3, 'NA-247 \r\nKarachi-IX'),
(235, 3, 'NA-248 \r\nKarachi-X'),
(236, 3, 'NA-249 \r\nKarachi-XI'),
(237, 3, 'NA-250 \r\nKarachi-XII'),
(238, 3, 'NA-251 \r\nKarachi-XIII'),
(239, 3, 'NA-252 \r\nKarachi-XIV'),
(240, 3, 'NA-253 \r\nKarachi-XV'),
(241, 3, 'NA-254 \r\nKarachi-XVI'),
(242, 3, 'NA-255 \r\nKarachi-XVII'),
(243, 3, 'NA-256 \r\nKarachi-XVIII'),
(244, 3, 'NA-257 \r\nKarachi-XIX'),
(245, 3, 'NA-258 \r\nKarachi-XX'),
(246, 4, 'NA-259 \r\nQuetta'),
(247, 4, 'NA-260 \r\nQUETTA-CUM-CHANGAI-CUM-NUSHKI (OLD QUETTA-CUM-CHAGAI-CUM-MUSTANG)'),
(248, 4, 'NA-261 \r\nPishin-cum-Ziarat'),
(249, 4, 'NA-262 \r\nKilla Abdullah'),
(250, 4, 'NA-263 \r\nLoralai'),
(251, 4, 'NA-264 \r\nZhob-cum-Killa-Sherani Saifullah'),
(252, 4, '\r\nThe National Assembly Session has been prorogued on Friday, the 15th April, 2016 Committee Meeting'),
(253, 4, 'NA-266 \r\nNasirabad'),
(254, 4, 'NA-268 \r\nKalat-cum-Mastung Haidri'),
(255, 4, 'NA-269 \r\nKhuzdar'),
(256, 4, 'NA-270 \r\nAwaran-cum-Lasbella'),
(257, 4, 'NA-271 \r\nKharan-cum-Panjgur'),
(258, 4, 'NA-272 \r\nKech-cum-Gwadar'),
(259, 4, 'NA-264 \r\nZhob-cum-Killa-Sherani Saifullah'),
(260, 4, '\r\nThe National Assembly Session has been prorogued on Friday, the 15th April, 2016 Committee Meeting'),
(261, 4, 'NA-266 \r\nNasirabad'),
(262, 4, 'NA-268 \r\nKalat-cum-Mastung Haidri'),
(263, 4, 'NA-269 \r\nKhuzdar'),
(264, 4, 'NA-270 \r\nAwaran-cum-Lasbella'),
(265, 4, 'NA-271 \r\nKharan-cum-Panjgur'),
(266, 4, 'NA-272 \r\nKech-cum-Gwadar'),
(267, 5, 'NA-36\r\nTribal Area-I'),
(268, 5, 'NA-37\r\nTribal Area-II'),
(269, 5, 'NA-39\r\nTribal Area-IV'),
(270, 5, 'NA-40\r\nTribal Area-V'),
(271, 5, 'NA-41\r\nTribal Area-VI'),
(272, 5, 'NA-42\r\nTribal Area-VII'),
(273, 5, 'NA-43\r\nTribal Area-VIII'),
(274, 5, 'NA-44\r\nTribal Area-IX'),
(275, 5, 'NA-45\r\nTribal Area-X'),
(276, 5, 'NA-46\r\nTribal Area-XI'),
(277, 5, 'NA-36\r\nTribal Area-I'),
(278, 5, 'NA-37\r\nTribal Area-II'),
(279, 5, 'NA-39\r\nTribal Area-IV'),
(280, 5, 'NA-40\r\nTribal Area-V'),
(281, 5, 'NA-41\r\nTribal Area-VI'),
(282, 5, 'NA-42\r\nTribal Area-VII'),
(283, 5, 'NA-43\r\nTribal Area-VIII'),
(284, 5, 'NA-44\r\nTribal Area-IX'),
(285, 5, 'NA-45\r\nTribal Area-X'),
(286, 5, 'NA-46\r\nTribal Area-XI'),
(287, 5, 'NA-47\r\nTribal Area-XII'),
(288, 6, 'NA-48\r\nIslamabad-I'),
(289, 6, 'NA-49\r\nIslamabad-II'),
(290, 5, 'malakand');

-- --------------------------------------------------------

--
-- Table structure for table `localadmin`
--

CREATE TABLE IF NOT EXISTS `localadmin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `na` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `localadmin`
--

INSERT INTO `localadmin` (`id`, `username`, `password`, `na`) VALUES
(1, 'dfdsf', '20838a8df7cc0babd745c7af4b7d94e2', 'NA-1 Peshawar-I'),
(2, 'haroon500', '7620a6628789eeed221e11941cc9e540', 'NA-34\r\nLower Dir');

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
(7, 'ji'),
(8, 'anp');

-- --------------------------------------------------------

--
-- Table structure for table `signup_condidate`
--

CREATE TABLE IF NOT EXISTS `signup_condidate` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cnic` bigint(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `district` varchar(30) NOT NULL,
  `party` varchar(30) NOT NULL,
  `files` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup_condidate`
--

INSERT INTO `signup_condidate` (`id`, `name`, `cnic`, `email`, `address`, `gender`, `district`, `party`, `files`, `image`, `status`, `msg`) VALUES
(46, 'ali', 7937459374937, 'ali@gmail.com', 'charsada', 'male', 'NA-1 Peshawar-I', 'anp', '_Ajax-for-PHP-Developers.pdf', '11866434_836337816480822_1618991520625361534_n.jpg', 'disapprove', 'sorry you are over age you are not able to stand for election thank you for apply       \r\n     '),
(47, 'marwat', 3947593475983, 'marwat@gmail.com', 'laki', 'male', 'NA-25\nD.I.Khan-cum-Tank', 'pmln', '_Ajax-for-PHP-Developers.pdf', '10665692_1564111303835127_8590419012784163546_n.jpg', 'disapprove', 'sorry you are not eligibal        \r\n     '),
(48, 'muhammad ali shah bacha', 4098350348503, 'muhammadalisha@gmail.com', 'dargai', 'male', 'NA-34\nLower Dir', 'ppp', '_Ajax-for-PHP-Developers.pdf', '10649797_354745511343887_4086024460635827746_n.jpg', 'pendding', ''),
(49, 'wajih', 4584058609586, 'wajih@gmail.com', 'jolagram', 'male', 'NA-6 Nowshera-II', 'ppp', '_Ajax-for-PHP-Developers.pdf', '10402675_1540224056274067_7500803655640700865_n.jpg', 'pendding', ''),
(50, 'tariq', 3987598347598, 'charsarda@gamil.com', 'lskjdlfkjdsl', 'female', 'NA-1 Peshawar-I', 'pti', '_Ajax-for-PHP-Developers.pdf', '13045683_1791104627787723_1622023385_n.jpg', 'pendding', ''),
(51, 'wali khan', 5656565656565, 'walikhang@gmail.com', 'timragara', 'male', 'NA-1 Peshawar-I', 'ppp', '8.2.diehl_online-voting-project_213-222.pdf', '13045683_1791104627787723_1622023385_n.jpg', 'pendding', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `voter_register`
--

CREATE TABLE IF NOT EXISTS `voter_register` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `cnic` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `na` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter_register`
--

INSERT INTO `voter_register` (`id`, `name`, `f_name`, `cnic`, `address`, `gender`, `na`) VALUES
(1, 'haroon', 'fazal khan', '1540255410649', 'chakdara', 'male', 'dir'),
(2, 'muhammad ishaq', 'haji gul zada khan', '1234567891234', 'ouch', 'Male', 'NA-34\nLower Dir'),
(3, 'jamil', 'waheed khan', '1234567812345', 'dir', 'Male', 'NA-1 Peshawar-I'),
(16, 'sad', 'sad', '3453453455555', 'sdsdf', 'Male', 'NA-1 Peshawar-I');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ajax`
--
ALTER TABLE `ajax`
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
-- Indexes for table `localadmin`
--
ALTER TABLE `localadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup_condidate`
--
ALTER TABLE `signup_condidate`
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
-- Indexes for table `voter_register`
--
ALTER TABLE `voter_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ajax`
--
ALTER TABLE `ajax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `distric`
--
ALTER TABLE `distric`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=291;
--
-- AUTO_INCREMENT for table `localadmin`
--
ALTER TABLE `localadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `party`
--
ALTER TABLE `party`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `signup_condidate`
--
ALTER TABLE `signup_condidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
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
--
-- AUTO_INCREMENT for table `voter_register`
--
ALTER TABLE `voter_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
