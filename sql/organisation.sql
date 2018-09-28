-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 10:57 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organisation`
--

-- --------------------------------------------------------

--
-- Table structure for table `about-us`
--

CREATE TABLE `about-us` (
  `id` int(255) NOT NULL,
  `about-us` varchar(65000) NOT NULL,
  `uploaded_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about-us`
--

INSERT INTO `about-us` (`id`, `about-us`, `uploaded_by`) VALUES
(1, 'pratik is formed to promote cultural activities on Central Railway.The General Manager Central Railway is the Patron of the Academy. <br>\r\n   The Academy Council comprises of Office Bearers of the\r\nHeadquarters and representatives from all 5 divisions on Central\r\nRailway viz. Mumbai, Pune, Solapur, Bhusawal, Nagpur and\r\nProduction Units/Workshops at Byculla, Parel, Matunga,\r\nKurudwadi, Nasik Road and Manmad. It is the governing body of\r\nthe CRCA which will advise and lay down the policy for guidance\r\nof the Central Executive Committee. \r\n\r\nThe Central Executive Committee is responsible for the day-today\r\nworking of the Academy.The Unit Executive Committee is responsible for the working of\r\nthe Academy at the Unit/Branch level.The general funds of the Academy shall consist of grants from\r\nStaff Benefit Fund and income from its various performances.', 'sadmin');

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(50) NOT NULL,
  `year` year(4) NOT NULL,
  `achievement` varchar(5000) NOT NULL,
  `uploaded_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `year`, `achievement`, `uploaded_by`) VALUES
(1, 2016, 'Team CRCA won 2nd best prize in Inter Zonal Cultural competition held at Udaipur hosted by West Central Railway, Ajmer Division from 8 th to 11 March. The team got MR award in 63rd Railway Week function at Bhopal!! Proud moment for Central Railway also Solo for Jisha.', 'admin_mum'),
(2, 2017, 'Team CRCA won 2nd best prize in Inter Zonal Cultural competition held at Udaipur hosted by West Central Railway, Ajmer Division from 8 th to 11 March. The team will now perform in 63rd Railway Week function at Bhopal!!', 'admin_pun'),
(3, 2018, 'CRCA Artists, Madhavi Kadam, Aparna Shinde, Ekta and Akshay all performing on Maharashtra\'s Float of \"Shiv Rajyabhishek \"at Republic Day cultural parade on Rajpath.', 'admin_pun'),
(4, 2018, 'Artists, Madhavi Kadam, Aparna Shinde, Ekta and Akshay all performing on Maharashtra\'s Float of \"Shiv Rajyabhishek \"at Republic Day cultural parade on Rajpath.', 'admin_mum');

-- --------------------------------------------------------

--
-- Table structure for table `artist_list`
--

CREATE TABLE `artist_list` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bio` varchar(5000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `uploaded_by` varchar(50) NOT NULL,
  `year` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `division` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist_list`
--

INSERT INTO `artist_list` (`id`, `name`, `bio`, `image`, `uploaded_by`, `year`, `division`) VALUES
(1, 'art_mumbai', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2016PE0013.JPG', 'admin_mum', '2018-07-06 15:16:50', 'mumbai'),
(2, 'art_Sad2', 'sadmn2', 'pexels-photo-776615.jpeg', 'sadmin', '2018-07-06 15:17:02', 'headquarter'),
(3, 'artist pune', 'pune\r\n', '2016PE0013.JPG', 'admin_pun', '2018-07-06 15:17:35', 'pune'),
(4, 'artist headq', 'hq', '2.jpg', 'sadmin', '2018-07-07 22:44:06', 'headquarter'),
(5, 'artist mum', 'dd', 'pexels-photo-776615.jpeg', 'admin_mum', '2018-07-07 22:48:14', 'mumbai'),
(6, 'art Hq', 'h', '2016PE0013.JPG', 'sadmin', '2018-07-08 14:55:13', 'headquarter'),
(7, 'mum', 'mum', 'pexels-photo-776615.jpeg', 'admin_mum', '2018-07-08 21:56:26', 'mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `awards_achievements`
--

CREATE TABLE `awards_achievements` (
  `id` int(255) NOT NULL,
  `year` int(4) NOT NULL,
  `achievements` varchar(6000) NOT NULL,
  `uploaded_by` varchar(1000) NOT NULL,
  `division` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awards_achievements`
--

INSERT INTO `awards_achievements` (`id`, `year`, `achievements`, `uploaded_by`, `division`) VALUES
(1, 2018, 'ach1', 'admin_mum', 'mumbai'),
(3, 2019, 'jhajhahja', 'admin_pun', 'pune'),
(4, 2015, 'wa', 'admin_sul', 'solapur'),
(5, 2014, 'hjhjhj', 'admin_pr', 'parel'),
(6, 2010, 'habibi', 'admin_pr', 'parel'),
(7, 2200, 'haibi', 'admin_kwv', 'kurudwadi'),
(8, 2020, 'kqlqlq', 'admin_bsl', 'bhusaval'),
(9, 2021, 'iuww', 'admin_bsl-acl', 'bhusaval-acl'),
(10, 2030, 'andheri', 'admin_mtn', 'matunga'),
(11, 2025, 'ooooooo', 'admin_nkrd', 'nashikroad'),
(12, 2026, 'ok', 'admin_mmr', 'manmad'),
(13, 2026, 'oke', 'admin_ngp', 'nagpur'),
(14, 2026, 'okh', 'admin_by', 'byculla'),
(15, 2026, 'oe', 'admin_nkrd', 'nashikroad'),
(16, 2018, 'sad', 'sadmin', 'headquarters'),
(18, 2020, 'hq', 'sadmin', 'headquarters'),
(19, 2020, 'mum', 'admin_mum', 'mumbai'),
(20, 2020, '1', 'admin_pun', 'pune'),
(21, 2024, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cursus vitae congue mauris rhoncus aenean vel elit scelerisque.', 'sadmin', 'headquarters');

-- --------------------------------------------------------

--
-- Table structure for table `contact-us`
--

CREATE TABLE `contact-us` (
  `id` int(50) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `address` varchar(50000) NOT NULL,
  `phno-1` int(15) NOT NULL,
  `phno-2` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uploaded_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact-us`
--

INSERT INTO `contact-us` (`id`, `name`, `address`, `phno-1`, `phno-2`, `email`, `uploaded_by`) VALUES
(1, 'pratik', 'a-134', 12345678, 987654321, 'xpratik@singh', 'admin_mum'),
(2, 'singh', '1aq1', 876543, 123456, 'prat@gmail.com', 'admin_pun'),
(3, 'crca bhusaval', '14441', 2147483647, 4545521, '4151@gmail.com', 'admin_bsl'),
(4, 'crca bhusaval-acl', '1010', 10101, 1010, '1@gmg', 'admin_bsl-acl'),
(5, 'njbjcvxbjxc', 'BHJVHVBHV', 231220, 112211, 'JBJHSDF@DSHD.VBVJ', 'admin_by'),
(6, 'cdvfvdhgsvfh', 'vghvcxhjhjds', 1545421, 115151, 'hgxdvs@dvfvdh.vo', 'admin_kwv'),
(9, 'jbbjcbvjxcbb', 'jkhjbjhgunkj', 2154521, 541245, 'vghvxhzbcv', 'admin_mmr'),
(10, 'nhjghjfdjbj`jhj', 'jhjjhnmkhjkhm', 14521254, 4878124, 'Anjhbhszdbd@ygsdggdhs.cvjhxgu', 'admin_mtn'),
(13, 'nag21', 'hbhjbjhgh', 154542, 148742154, 'bhsdnsdhh@bdsjdjhsu', 'admin_ngp'),
(16, 'hdfgdgbfdh', 'hjhhh', 1545121, 2121454, 'JHABdsbhsgdhu@kjdksj.com', 'admin_nkrd'),
(19, 'jasdfsdf', 'uhuihug', 1212121, 2147483647, 'gvzbvhj@hjnsdknj', 'admin_pr'),
(20, 'dxjbnfjdbfbdhb', 'bjhbhbhjbjhb', 4545, 212112, 'Ashdasj@ggyj.com', 'admin_sul'),
(21, 'crca headquarter', 'xcstmx', 1234, 12345, 'crca@gmail.com', 'sadmin');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `uploaded_by` varchar(255) NOT NULL,
  `year` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `division` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `images`, `uploaded_by`, `year`, `division`) VALUES
(1, '2.jpg', 'admin_mum', '2018-07-06 15:46:42', 'mumbai'),
(3, 'pexels-photo-776615.jpeg', 'admin_pun', '2018-07-06 15:47:04', 'pune'),
(5, 'pexels-photo-776615.jpeg', 'admin_mum', '2018-07-07 22:37:26', 'mumbai'),
(6, '1.jpg', 'admin_mum', '2018-07-07 22:38:05', 'mumbai'),
(7, '1.jpg', 'admin_pun', '2018-07-07 22:38:25', 'pune'),
(8, '2.jpg', 'sadmin', '2018-07-07 22:38:58', 'headquarter'),
(9, 'pexels-photo-776615.jpeg', 'sadmin', '2018-07-08 15:01:39', 'headquarter'),
(10, '2016PE0013.JPG', 'admin_mum', '2018-07-08 21:58:51', 'mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `org_chart`
--

CREATE TABLE `org_chart` (
  `id` int(255) NOT NULL,
  `org_chart` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org_chart`
--

INSERT INTO `org_chart` (`id`, `org_chart`) VALUES
(9, 'CRCA_Org_Chart.png');

-- --------------------------------------------------------

--
-- Table structure for table `root_images`
--

CREATE TABLE `root_images` (
  `id` int(255) NOT NULL,
  `image` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `root_images`
--

INSERT INTO `root_images` (`id`, `image`) VALUES
(1, '1.jpg'),
(2, '1.jpg'),
(3, '1.jpg'),
(8, 'pexels-photo-776615.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(100) NOT NULL,
  `admin` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `admin`) VALUES
(1, 'sadmin', '12345', 'sadmin', 'headquarter'),
(2, 'admin_mum', '12345', 'admin_mum', 'mumbai'),
(3, 'admin_pun', '12345', 'admin_pun', 'pune'),
(4, 'admin_bsl', 'admin_bsl', 'admin_bsl', 'bhusaval'),
(5, 'admin_sul', 'admin_sul', 'admin_sul', 'solapur'),
(6, 'admin_ngp', 'admin_ngp', 'admin_ngp', 'nagpur'),
(7, 'admin_mtn', 'admin_mtn', 'admin_mtn', 'matunga'),
(11, 'admin_pr', 'admin_pr', 'admin_pr', 'parel'),
(14, 'admin_kwv', 'admin_kwv', 'admin_kwv', 'kurudwadi'),
(15, 'admin_bsl-acl', 'admin_bsl-acl', 'admin_bsl-acl', 'bhusaval-acl'),
(16, 'admin_nkrd', 'admin_nkrd', 'admin_nkrd', 'nkrd'),
(19, 'admin_by', 'admin_by', 'admin_by', 'byculla'),
(20, 'admin_mmr', 'admin_mmr', 'admin_mmr', 'manmad');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(50) NOT NULL,
  `video` varchar(60000) NOT NULL,
  `uploaded_by` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `video`, `uploaded_by`, `division`) VALUES
(1, 'https://www.youtube.com/embed/RbmaLT320hw', 'admin_mum', 'mumbai'),
(2, 'https://www.youtube.com/embed/RbmaLT320hw', 'admin_pun', 'pune'),
(3, 'https://www.youtube.com/embed/RbmaLT320hw', 'sadmin', 'headquarter'),
(4, 'https://www.youtube.com/embed/RbmaLT320hw', 'admin_pun', 'pune'),
(5, 'https://www.youtube.com/embed/NNWS15pCguE', 'sadmin', 'headquarter'),
(6, 'https://www.youtube.com/embed/NNWS15pCguE', 'admin_bsl', 'bhusaval');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about-us`
--
ALTER TABLE `about-us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist_list`
--
ALTER TABLE `artist_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards_achievements`
--
ALTER TABLE `awards_achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact-us`
--
ALTER TABLE `contact-us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `org_chart`
--
ALTER TABLE `org_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `root_images`
--
ALTER TABLE `root_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about-us`
--
ALTER TABLE `about-us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `artist_list`
--
ALTER TABLE `artist_list`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `awards_achievements`
--
ALTER TABLE `awards_achievements`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact-us`
--
ALTER TABLE `contact-us`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `org_chart`
--
ALTER TABLE `org_chart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `root_images`
--
ALTER TABLE `root_images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
