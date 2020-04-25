-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2020 at 10:44 AM
-- Server version: 5.6.41-84.1-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreame3o_D11`
--

-- --------------------------------------------------------

--
-- Table structure for table `match`
--

CREATE TABLE `match` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `team1` varchar(255) NOT NULL,
  `icon_img_team1` varchar(255) NOT NULL,
  `team2` varchar(255) NOT NULL,
  `icon_img_team2` varchar(255) NOT NULL,
  `match_date` date NOT NULL,
  `match_time` time NOT NULL,
  `details` varchar(255) NOT NULL,
  `type` enum('cricket','football') NOT NULL,
  `create_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `match`
--

INSERT INTO `match` (`id`, `name`, `team1`, `icon_img_team1`, `team2`, `icon_img_team2`, `match_date`, `match_time`, `details`, `type`, `create_date`) VALUES
(2259, 'Dream11 1st rank  Grand Leauge Teams ', 'YD', 'team1_1587307992.png', 'TPA', 'team2_1587307992.png', '2020-04-21', '14:30:00', 'Vshs', 'cricket', '1587307992');

-- --------------------------------------------------------

--
-- Table structure for table `match_team`
--

CREATE TABLE `match_team` (
  `id` int(10) NOT NULL,
  `match_id` int(10) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `team_details` varchar(255) NOT NULL,
  `team_pic` varchar(255) NOT NULL,
  `team_create_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `match_team`
--

INSERT INTO `match_team` (`id`, `match_id`, `team_name`, `team_details`, `team_pic`, `team_create_time`) VALUES
(1384, 0, 'Sml', 'Sl', 'team__1533661591.png', '1533661592');

-- --------------------------------------------------------

--
-- Table structure for table `match_update`
--

CREATE TABLE `match_update` (
  `id` int(10) NOT NULL,
  `match_id` int(10) NOT NULL,
  `update_name` varchar(255) NOT NULL,
  `update_details` varchar(255) NOT NULL,
  `update_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register_users`
--

CREATE TABLE `register_users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `select_pakage_date` date NOT NULL,
  `pakage_day` int(10) NOT NULL,
  `end_pakage_date` date NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_users`
--

INSERT INTO `register_users` (`id`, `name`, `number`, `username`, `password`, `select_pakage_date`, `pakage_day`, `end_pakage_date`, `details`) VALUES
(828, 'Bsjsj', '85656', 'aniketkoli63@gmail.com', 'KA1J8RLmQtdEnfmuOEfrbVbJ2BRwBUg3fJrS3vmop3viAmco2KaVvFCAjKAaBGFEIgnPrgIlUohQ4qVydTVSUw==', '2020-02-22', 365, '2021-02-21', 'Bshs'),
(875, 'Vsvs', '8484', '28mar', '8GKEr6V8PqbaUzn4FqkOPcuG0eqd6VAAsg6es/xcgQGQQrf7IrYRRit6PK/Q0NccbvYMAuILjPV4Sf5A3e3DDw==', '2020-03-28', 30, '2020-04-27', 'Bdbd'),
(876, '5march3', '852', '5march3', '13rbD7IeOl4dGDMP78B9Yy1tSxPPAhEjtLantPOl7Rhw3ieo1iAMv4fwcXVn/2tk54za2Y1jcIHVM1oz1TQ9Bg==', '2020-03-05', 90, '2020-06-03', '5march3'),
(877, 'Vzvz', '9898', '20mar1', 'SXbBGyLQhJiJ54No+fKF3nlvthbShP37f8RrUp4b03IbeYDE/WUh2b3qXFM51Yb9D4cr76Tu0ZsftBOAuwOe1Q==', '2020-03-19', 365, '2021-03-19', 'Vhj'),
(878, 'Fghh', '8164', '29march', 'iyrz2sv9ZBDcOr3BuObyX2DazXDieh95Oa/rcIOW8ZLFRoTBudJOWu9H7KnnzUn206d59TbRRqkFy3R8cuT9xg==', '2020-03-29', 30, '2020-04-28', 'Bdbs'),
(879, 'Chh', '8523', '29mar1', '9z4WJEMMC2Bi7zCwSuRYGQIgr4ZUMuOOjiEbBf+1EBtHqA2I1tFlnuOwX4nRH+SRWkSpNeR8nTq6A9u6xqnITw==', '2020-03-29', 365, '2021-03-29', 'Vdbd'),
(880, 'Vdbdb', '823', '29mar3', 'b6pQxtuBADVx2VX5D9e6bNPnxVv/hR+zH7ss+NqeMGzPy3BnN+d82NhC8DFQVBu5tNq8CcMSjIGsna4iCpMSGA==', '2020-03-29', 90, '2020-06-27', 'Bdbd'),
(881, 'Hdjs', '788', '31march', 'Ds6SnH5ZMzPnKscnL7RZKBCsdGM/fZXbiEoxeDVYr5l6f2T+Pvb9v4VnRAByzfYkdKFRe8G46EuAbTKYbTMdlg==', '2020-03-31', 30, '2020-04-30', 'Vdbd'),
(882, 'Gdhd', '594', '1apr', 'gq/t6toFfvA4d0Jeu8zLMJXbQFYAaED3DmrgNWirjcgA+ZLvqSOQZdiQC5FqoNlh8gSqQiep9/YdjNTKhegX+A==', '2020-04-01', 30, '2020-05-01', 'Vvg'),
(883, 'Vsbsh', '056', '2apr3', 'AG00qx9nUvcbBZyuC0hrKKD+kuH+zOEJp1Ze/w/MQUIkpiJrpH4sN+cYYPo/j/PdA6tWD1XWJ3M56PLBzPwPYg==', '2020-04-02', 90, '2020-07-01', 'Bdbs'),
(884, 'Vxbx', '8686', '2april', 'RqAi2ifeys59VZaB6p6URLZvuzOZgqwiQxY3ZPBxRFtzuMLaNST16yLHQVSQdDiw1QDnD5y0HBvt11saST9JTA==', '2020-04-02', 30, '2020-05-02', 'Vdhd'),
(885, 'Gege', '543', '3march', 'hOVhobidRXXp/E1XxK2TudH2qhhQL+HWIPGLzH9t1sdOOIfaeGR74p6Oq7RDmVzAM3wZsg9L6MUVfTHcWQYDiA==', '2020-04-03', 30, '2020-05-03', 'Vvv'),
(887, ' Gh', '9737', '11feb1', 'ryuU6+0bklDO6q7j4vlLEtq7FPYakS0/HAbdRqVjWzNTMV6mC8FurvzDRTBU82PpAzof6Omr47lFAki38T57KQ==', '2020-02-11', 365, '2021-02-10', 'Btb'),
(888, 'Cvhh', '0663', ' 16march', 'wijiEGWJzK3WZ1arV798rE/qwGtT0DpC9gTS/Ezt5HZPOKvyeaO6nQzAteDIpx0a4TpD3o/NQyZirnQj40hPHQ==', '2020-03-16', 30, '2020-04-15', 'Vsvs'),
(889, 'Gxhd', '9868', '22mar3', 'r/HhmiFM8ITVRuGONPry+xRfSPCKHRMbXb8BaW0ZqPbjyIv6YusRGsdvP5vaWHt+pnWSU5qGqijoYxsoOSj13A==', '2020-03-21', 90, '2020-06-19', 'Hdhd'),
(890, 'Cgh', '866', '4apr3', 'ynrX75ws9f6Hu93g/TTPMwxpu28SMTtEXlAkQnRPa5fr7ZsOk52Ci1fjWIWh6lONbI67WX6EPhWtCiKlbOgxhA==', '2020-04-04', 90, '2020-07-03', 'Vxvx'),
(892, 'Vbs', '8484', '9mar3', 'fQnSORRaNumc3b5gIONmeV6Hq8H/D7Kk61H8FZS4BNtt8HAbVofvdgGPWn6Iw5dXjqal/zDwC36vd7eszqQZKQ==', '2020-03-09', 90, '2020-06-07', 'Gzgg'),
(893, 'Vdhd', '98686', '5april', 'HEw1AmK1R26HTS0fnEOpHcURuVJzWQ8p7rbk5Zbz0VnSJ+X2WNpXEyfMGKoTH5m5AMqD+hiMtaMmTyWe/zYbkg==', '2020-04-05', 30, '2020-05-05', 'Vdhe'),
(894, 'dream11 ', '95231', '6april', 'D7lJ5RqCJlEIYcsBqjcz22EtKN/RVXSb3+XT3xM9rCGuQ5oIISS1U6VotjP5Ij/CNR2/TOJRwiOMgekUf2cCng==', '2020-04-06', 30, '2020-05-06', 'Gdhs'),
(895, 'Vd', '6565', '8apr1', 'Y/nypcmuaZ7R3XY1Q7j8EckScg0OSiYEEFlA7/ibWWF6ChzLsK9YRjXoRSZBBWIk/eApeYINg698w+Eyr0xNew==', '2020-04-08', 365, '2021-04-08', 'Vdgd'),
(896, 'Vxhs', '8835', '9april', 'XIgF/HEEAeaeL9iwGqZne9CM22sctg2RYR4AAewgrJmBFgGbpUbq1/404sGEDKxiLVqLuvlOBe0RKkk1+2/3GQ==', '2020-04-09', 30, '2020-05-09', 'Bdbd'),
(897, 'Gsgs', '8767', '10mar3', '3VtfkEJd31Sfuijf65OLqrCm2jpYk1IN4bCNckF/t5SUWF/l+jPmqMYpcdgY8zemosgLJ5AWqW9xx+QH/J0N2w==', '2020-03-09', 90, '2020-06-07', 'Gg'),
(898, 'Cvhj', '8966', 'Shubham', '4J/2fj1OqpgArUvdq/SjVyuEB7oPRKqq9GwNJpMZO4/i4/gioleeF86ufvleMR/Bsi4sig6vk01e4rmyWvq0JQ==', '2020-03-09', 90, '2020-06-07', 'Hshs'),
(899, 'Aaak', '125', '13apr', 'Oo7pCFutPhjPY3FygtiEw3dtYmZ9JVYhZs+dZBbcnPS3wnw28KTlwoGuXl57YVaHpIRWo/2aPMaMG3acHbzXiw==', '2020-04-13', 30, '2020-05-13', 'Fff'),
(900, 'Cvy', '88', '14april', 'xubR90inxb16v4eceIcjjkRmsuOULithaNd6UVuiT7zguwxKXxSIzbWmtAf8fzM6+Be7v5+B4m3MV4fMMO+wMg==', '2020-04-14', 30, '2020-05-14', 'Vdvd'),
(901, 'Gshsj', '85956', '15april', 'EVNK9kY1QWomGU+dSUHE9+2nS/Xu9wohhV80mB8KTVHxfeOKnQFHlcooeftFmEZxRSnYyalEsCdZ9n2Rxw3MsQ==', '2020-04-15', 30, '2020-05-15', 'Hfhd'),
(902, 'Jejdj', '676', '16april', 'NJiBdm+LZ6H/yMp7vV8N+okf0YKuFi9xXPjAOv5JtZ3e0PDeO3yvKVb28FCKUPWx2r2eUGMM6RZ6cjmmGolpow==', '2020-04-16', 30, '2020-05-16', 'Gdge'),
(903, 'Bdhs', '885', '17april', 'W3sZebpC2Bh0TZMotQ1BiwBoQbUvaEgsImEMjW1sTy2x+dIp0XENX4CrIvEyYYJTzl41ptc43D5bdjSl6CctAA==', '2020-04-17', 30, '2020-05-17', 'Hdhd'),
(904, 'Krishan ', '94964', 'krishandream11', 'Caj99JDnMhNRTWgcXI5C9Y0sC0EIMKZVTLK2Am9he90nq1wNdZ2PUL2NP34tlT0X0UUVtMPVjHMRFVuKsjhZOw==', '2020-04-17', 365, '2021-04-17', 'Gwgwhw'),
(906, 'Vegeg', '6464', '18apr1', 'VcnCo/II1JGWKwiSiwDGECFekz+PC0GaanQDvN6rIm9S2eZ1MnJCOdpGSsdXceJZXBYGvsFeZtlc4h+Vx41pLw==', '2020-04-18', 365, '2021-04-18', 'Vsvs'),
(907, 'Vdhd', '886', '19april', '9yUWaiYWdjsQv4ufpAb0lHBnPBUkzd5hy7oYrnQRaZvWJ05buck8yeS7lTof+yl2jIFa6SiYRyQ4m8jwKbL2Fw==', '2020-04-19', 30, '2020-05-19', 'Vdbd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'MoF+xXr/yKXXZVbDFgw2YqhN6YhG6emM1qUAEh2hven8oKL3nckNwbmUPPEKEBdLhApbe0U8+cAxR7FzFXzouQ==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `match`
--
ALTER TABLE `match`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `match_team`
--
ALTER TABLE `match_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `match_update`
--
ALTER TABLE `match_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_users`
--
ALTER TABLE `register_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `match`
--
ALTER TABLE `match`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2260;

--
-- AUTO_INCREMENT for table `match_team`
--
ALTER TABLE `match_team`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1543;

--
-- AUTO_INCREMENT for table `match_update`
--
ALTER TABLE `match_update`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `register_users`
--
ALTER TABLE `register_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=908;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
