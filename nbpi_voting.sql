-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 03:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nbpi_voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `Age`, `photo`) VALUES
(25, 'bibek', 21, 'bikramg_baby_boss_holding_sword_50af5104-97a8-4e9c-a3a1-ba35eb9fc039.png'),
(26, 'Bibek Tamang', 18, 'Roxy_Senpai_A_Cat_wearing_a_golden_kimono_35e5392c-4e2c-4801-8fb5-ac2d4bf67394.png'),
(27, 'Bibek', 18, 'bikramg_himalaya_backgroundalong_with_yak_grazingblue_flower_gl_2d0a6ccb-d0c1-4769-bd65-ba5a836da236');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `candidate_id` int(11) NOT NULL,
  `vote_count` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`candidate_id`, `vote_count`, `id`) VALUES
(25, 7, 10),
(26, 1, 11),
(27, 0, 12);

-- --------------------------------------------------------

--
-- Table structure for table `voters_info`
--

CREATE TABLE `voters_info` (
  `reg_no` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `adrs` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `flag` int(11) NOT NULL,
  `reg_flag` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters_info`
--

INSERT INTO `voters_info` (`reg_no`, `fname`, `adrs`, `username`, `pwd`, `flag`, `reg_flag`) VALUES
(3, 'Ashish', 'jhb', '1111gtwthjbwf', '@Ashish1457', 1, 0),
(153, 'Ashish ', 'Banepa', 'DIT-00108-019', '@Bibek31234', 1, 0),
(1, 'ram', 'banepa', 'wqec3qwe33rqw', 'Za1@daswasd', 1, 0),
(2, 'bibek', 'tamang', 'qweqw123asafa', 'Acdq1@dsba', 1, 0),
(167, 'Ashish lama', 'banepa', 'DIT-00011-134', 'abc12345', 0, 0),
(168, 'Shyam lama', 'banepa', 'DIT-11100-154', 'abcdefg123', 0, 0),
(169, 'bibek tamang', 'banepa', 'DIT-00011-154', 'asfadreafa', 0, 0),
(166, 'bibek lama', 'banepa', 'DIT-00011-123', 'abcd1234', 0, 0),
(162, 'Adjbs', 'nzv', 'DIT-00108-011', '@ashishA45', 0, 0),
(163, 'Ashish', 'kathmandu', 'DIT-00108-000', '444@aAgvh', 0, 0),
(164, 'Ashish', 'banepa', 'DIT-00108-014', '@Ashbha2515', 0, 0),
(165, 'bibek tamang', 'banepa', 'DIT-00011-018', '12345678abc', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidate_id` (`candidate_id`);

--
-- Indexes for table `voters_info`
--
ALTER TABLE `voters_info`
  ADD PRIMARY KEY (`reg_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `voters_info`
--
ALTER TABLE `voters_info`
  MODIFY `reg_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
