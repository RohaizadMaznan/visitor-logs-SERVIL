-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 10:16 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `unit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `unit`) VALUES
(4, 'admin123', '9063fac5c434c9442e8cfa1b9562a46f5043820d', 'rohaizadmaznan@gmail.com', 'Web Developer');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `num` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `unit` varchar(30) NOT NULL,
  `project` varchar(30) NOT NULL,
  `vpurpose` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time_in` varchar(10) NOT NULL,
  `time_out` varchar(10) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `escort` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`num`, `name`, `unit`, `project`, `vpurpose`, `date`, `time_in`, `time_out`, `remarks`, `escort`) VALUES
(1, 'Mior', 'IT', 'FINEX', 'restart server', '16 April 2018', '11:29:46', '10:02:37', 'pinjam cable</br>03-05-2018 04:01:00pm - cable dipulangkan mr. John', ''),
(2, 'ali', 'it', 'project x', 'kemaskan cabling', '18 April 2018', '10:06:51', '10:17:35', 'escorted by mior', ''),
(3, 'aliah', 'it', 'zeus', 'update', '27 April 2018', '09:03:44am', '10:18:35am', 'sss<strong> (admin) </strong>', 'mior'),
(4, 'Test', 'Testing', 'T', 'Test', '08 May 2018', '03:15:06pm', '03:16:15pm', 'Test done well<strong> (admin) </strong></br>08-05-2018 03:37:19pm - Test test test<strong> (admin) ', 'John Doe'),
(5, 'sahirman', 'Backend', 'VocMine', 'Start server 10.44.43.66', '15 May 2018', '10:18:19am', '12:23:45pm', 'test', 'Mior'),
(6, 'Anwar Faizal', 'Backend', 'Containers', 'Setting router', '15 May 2018', '11:15:22am', '12:23:33pm', 'testsss1234', 'Mior'),
(7, 'shikeen', 'DCN', 'Container', 'Configure router switch and servers', '15 May 2018', '01:05:02pm', '03:51:06pm', '', 'Mior'),
(8, 'shahlan', 'dcn', 'nfv', 'unplug cable', '15 May 2018', '03:15:25pm', '03:51:15pm', '', 'meor'),
(9, 'Rosmawati Ab Raub', 'Back End Lab/TM R&D', 'STAR', 'Assist vendor on SIEM Server Installation', '16 May 2018', '10:57:55am', '10:09:13am', '', 'Wan Azizah'),
(10, 'Syed Al Firdaus', 'Datacomm & Networking', 'NFV COE', 'Spirent UAT setup', '16 May 2018', '11:20:00am', '10:09:18am', '', 'Mior'),
(11, 'shahlan', 'DCN', 'NFV COE', 'cabling', '21 May 2018', '09:29:18am', '10:09:23am', '', 'Mior'),
(12, 'Azhar Bin Musa', 'NATP', 'NFV COE', 'UAT NFV COE', '22 May 2018', '10:02:39am', '10:09:27am', '', 'Johari'),
(13, 'Syed Al Firdaus', 'Datacomm & Networking', 'NFV COE', 'SRIOV test', '24 May 2018', '11:33:11am', '03:06:09pm', '', 'Mior'),
(14, 'Nawawi', 'SQA', 'NFVCoE', 'NFV Platform - change port', '24 May 2018', '02:25:53pm', '03:06:14pm', '', 'meor'),
(15, 'Syukur Bin Md Kassim', 'Backend', 'Container', 'Disk cloning', '30 May 2018', '11:21:41am', '02:04:18pm', '', 'Maran'),
(16, 'Syukur Bin Md Kassim', 'Backend', 'Container', 'Disk cloning', '31 May 2018', '11:37:25am', '03:13:25pm', '', 'meor'),
(17, 'Syed Al Firdaus', 'Datacomm & Networking', 'NFV COE', 'Change VLAN42 setting', '31 May 2018', '02:55:09pm', '04:00:03pm', '', 'Meor'),
(18, 'Syukur Bin Md Kassim', 'Backend', 'Containers', 'Disk cloning', '01 June 2018', '09:26:36am', '03:02:40pm', '', 'meor'),
(19, 'Kaveh Khosravi', 'Wiki Labs Sdn Bhd', 'Big Switch POC', 'Prepare POC', '04 June 2018', '09:39:26am', '09:15:38am', '', 'Mior'),
(20, 'Tu Ying Kwang', 'Wiki Labs Sdn Bhd', 'Big Switch POC', 'BigSwitch POC', '04 June 2018', '10:55:08am', '09:15:45am', '', 'meor'),
(21, 'Syawal', 'Netpoleon', 'STAR', 'Reconfigure ArcSight Logger', '05 June 2018', '10:28:01am', '08:11:59am', '', 'Mohammad Harris'),
(22, 'Kaveh Khosravi', 'Wiki Labs Sdn Bhd', 'Big switch POC', 'Prepare POC', '06 June 2018', '01:51:18pm', '04:00:34pm', '', 'Mior'),
(23, 'Kaveh Khosravi', 'Wiki Labs Sdn Bhd', 'Big Switch POC', 'Prepare POC', '07 June 2018', '11:44:23am', '04:11:05pm', '', 'Mior'),
(24, 'Kaveh Khosravi', 'Wiki Labs Sdn Bhd', 'Big Switch POC', 'install new loan Cisco switch', '20 June 2018', '10:24:55am', '11:26:38am', '', 'Mr Johari'),
(25, 'AIRCON CONTRACTOR', 'TMPO VENDOR', 'SERVICE APU1', 'SERVICE APU1', '20 June 2018', '05:03:11pm', '09:01:37am', '', 'NOBODY'),
(26, 'MOHD FAIZ ZAINAL ABIDIN', 'SDNNFV/TM', 'SDN NFV PROJECT', 'NFV COE LAB VISIT', '29 June 2018', '10:46:30am', '12:36:00pm', '', 'EN JOHARI'),
(27, 'RIZLE TARMIZI ABDUL RAPAR/ZAHA', 'PERNEC INTEGRATED NETWORK SYST', 'TSDN2', 'INSTALLATION PTN', '03 July 2018', '10:26:20am', '10:56:06am', '', 'EN JOHARI'),
(28, 'syed al firdaus', 'dcn', 't-sdn2', 'PTN fiber cable patching', '27 July 2018', '12:14:06pm', '12:33:59pm', '', 'Fuad.Midon.Mior'),
(29, 'Fuad Arip', 'LFM', 'TSDN2', 'PTN fiber cable patching', '30 July 2018', '02:37:45pm', '05:36:27pm', '', 'Mior'),
(30, 'Syed Al Firdaus', 'Datacomm & Networking', 'NFV COE', 'flip cable sandwine..vlan42 n vlan43', '02 August 2018', '12:03:46pm', '05:31:21pm', '', 'meor'),
(31, 'Fuad.Midon.Malek.Roswidah.Mara', 'LFM / SE', 'Green innitiative', 'Split unit air cond wiring', '17 August 2018', '11:21:19am', '03:03:49pm', '', 'Mior'),
(32, 'Syed Al Firdaus', 'DCN', 'TSDN2', 'GIS site visit', '20 August 2018', '11:26:59am', '03:03:44pm', '', 'Mior'),
(33, 'kaveh', 'wikilab', 'nfv coe - redeploy', 'setup switch', '19 October 2018', '10:20:36am', '05:05:42pm', '', 'syed al firdaus'),
(34, 'Syukur Bin Md Kassim', 'Backend', 'Container', 'OS Installation', '19 October 2018', '11:06:50am', '11:43:09am', '', 'Fidhuan'),
(35, 'Hazly Amir', 'Backend', 'NFV-COE', 'Troubleshooting', '19 October 2018', '07:49:25pm', '11:52:53am', '', 'Syed'),
(36, 'Eddie', 'wikilab', 'nfv coe', 'setting dell switch', '22 October 2018', '02:48:45pm', '08:31:01am', '', 'syed al firdaus'),
(37, 'Eddie', 'wikilab', 'nfv coe', 'troubleshooting switch', '23 October 2018', '11:30:36am', '12:03:41pm', '', 'Syed AL Firdaus'),
(38, 'Siti Nur Atikah Bt Mazli', 'UITM PUNCAK ALAM', 'NETWORK AND TELECOMMUNICATION ', 'TO KNOW MORE ABOUT IT DEPARTMENT IN TM RESEARCH AN', '22 November 2018', '12:00:40pm', '12:03:48pm', '', 'ENCIK SHUKUR BIN KHA'),
(39, 'Nurhana', 'SDN-NFV', 'SDN-NFV', 'Knowledge Transfer NFV', '17 January 2019', '04:34:03pm', '05:01:09pm', '', 'Johari '),
(40, 'Nudra', 'SDN-NFV', 'SDN-NFV', 'Knowledge Transfer NFV', '17 January 2019', '04:34:46pm', '05:01:14pm', '', 'Johari'),
(41, 'A Halim Samad', 'BMOS', 'UAT', 'UAT Air Cond', '07 December 2020', '10:08:54am', '01:28:34pm', '', 'Mior/Shukur'),
(42, 'Rohaizad Maznan', '9090', 'Back End', 'Saja', '29 December 2020', '01:05:23pm', '01:28:44pm', '12321www', 'Faris'),
(43, 'Rohaizad Maznan', '9090', 'Back End', 'Saja', '29 December 2020', '04:31:16pm', '04:31:49pm', 'TEST2221111', 'Faris');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
