-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 09, 2021 at 11:41 PM
-- Server version: 10.4.15-MariaDB-1:10.4.15+maria~bionic
-- PHP Version: 7.3.24-3+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gyankosh_62032`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `role` tinyint(4) DEFAULT 1,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `status`, `mobile_number`, `profile_pic`, `password`, `name`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin123@gmail.com', '1', '123456789000', '', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 1, '2020-08-14', '2020-09-14 12:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `bhamashah`
--

CREATE TABLE `bhamashah` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `amount` varchar(250) NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` varchar(250) NOT NULL,
  `updated_at` date NOT NULL,
  `add_id` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bhamashah`
--

INSERT INTO `bhamashah` (`id`, `name`, `city`, `amount`, `date`, `created_at`, `updated_at`, `add_id`) VALUES
(1, 'Dinesh/Mohanlal Sencha', 'Jodhpur', '1000', NULL, '23/03/2020', '0000-00-00', ''),
(3, 'Dinesh/Mohanlal Sencha', 'Jodhpur', '1000', NULL, '23/03/2020', '0000-00-00', ''),
(4, 'Dinesh/Mohanlal Sencha', 'Jodhpur', '1000', NULL, '23/03/2020', '0000-00-00', ''),
(6, 'Dinesh/Mohanlal Sencha', 'Jodhpur', '1000', NULL, '23/03/2020', '0000-00-00', ''),
(7, 'Dinesh/Mohanlal Sencha', 'Jodhpur', '1000', NULL, '23/03/2020', '0000-00-00', ''),
(8, 'Dinesh/Mohanlal Sencha', 'Jodhpur', '1000', NULL, '23/03/2020', '0000-00-00', ''),
(13, 'harshit', 'khargone', '500', NULL, '2020-08-24 07:48:14', '0000-00-00', 'Super Admin'),
(11, 'vishal', 'Jodhpur', '1000', NULL, '23/03/2020', '0000-00-00', ''),
(17, 'prakash panwar', 'atbara', '2500000', '0000-00-00', '2020-09-13 01:08:14', '0000-00-00', 'Admin'),
(16, 'test demo', 'dhar', '45000', '2020-09-28', '2020-09-08 10:59:25', '0000-00-00', 'Super Admin'),
(18, 'prakash panwar', 'atbara', '2500000', '0000-00-00', '2020-09-13 01:08:15', '0000-00-00', 'Admin'),
(19, 'prakash panwar', 'atbara', '2500000', '0000-00-00', '2020-09-13 01:08:16', '0000-00-00', 'Admin'),
(20, 'prakash panwar', 'atbara', '2500000', '0000-00-00', '2020-09-13 01:08:17', '0000-00-00', 'Admin'),
(21, 'prakash panwar', 'atbara', '2500000', '0000-00-00', '2020-09-13 01:08:17', '0000-00-00', 'Admin'),
(22, 'prakash panwar', 'atbara', '2500000', '0000-00-00', '2020-09-13 01:08:17', '0000-00-00', 'Admin'),
(23, 'prakash panwar', 'atbara', '2500000', '0000-00-00', '2020-09-13 01:08:18', '0000-00-00', 'Admin'),
(24, 'prakash panwar', 'atbara', '2500000', '0000-00-00', '2020-09-13 01:08:18', '0000-00-00', 'Admin'),
(25, 'prakash panwar', 'atbara', '2500000', '0000-00-00', '2020-09-13 01:08:18', '0000-00-00', 'Admin'),
(26, 'prakash panwar', 'atbara', '2500000', '0000-00-00', '2020-09-13 01:08:18', '0000-00-00', 'Admin'),
(27, 'prakash panwar', 'atbara', '2500000', '0000-00-00', '2020-09-13 01:08:19', '0000-00-00', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(22) DEFAULT NULL,
  `link` varchar(84) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `link`) VALUES
(1, 'Class 10', 'https://drive.google.com/drive/folders/1tQzZZRXQT-jHcPSW-cZ9J4XVMT1DFNjW?usp=sharing'),
(2, 'Class 11 Arts', 'https://drive.google.com/drive/folders/1DrcxzzzttMgi065H4LUS6AclPAT327XC?usp=sharing'),
(3, 'Class 11 Science Bio', 'https://drive.google.com/drive/folders/1WeyI_dtJE1qbn3P_2yBDyjHjXNLA2wYR?usp=sharing'),
(4, 'Class 11 Science Maths', 'https://drive.google.com/drive/folders/14G8mxUpmaLrUxqYxibm6cK1fzRtod7cg?usp=sharing'),
(5, 'Class 11 Comarce', 'https://drive.google.com/drive/folders/1p9hEm2FCIgXapY5GxdC6zwSwj-ny8pic?usp=sharing'),
(6, 'Class 12 Arts', 'https://drive.google.com/drive/folders/1qFrrVHIrZ7ti_SrcfE_A8U4dNwpNjvdw?usp=sharing'),
(7, 'Class 12 Science Bio', 'https://drive.google.com/drive/folders/1RDb2IR8x7S_1vafV73oX2zU2fZJSCn3g?usp=sharing'),
(8, 'Class 12 Science Maths', 'https://drive.google.com/drive/folders/1WHUuqSgKpjMgenq5TBQNlE6-jIR-VEK-?usp=sharing'),
(9, 'Class 12 Comarce', 'https://drive.google.com/drive/folders/14u2Fkvy2ye1Q6M6eMkDv5GJTcGQdi37M?usp=sharing'),
(10, 'Patwari Exam', 'https://drive.google.com/drive/folders/1UPhK2ayEaMfoCMi1Ac76GLpQGSzN6Y18?usp=sharing'),
(11, 'Bank Exam', 'https://drive.google.com/drive/folders/1dUqGK8NQFhn1tMFeR8iLuEixteF_3elY?usp=sharing'),
(12, 'C-TET Exam', 'https://drive.google.com/drive/folders/1dSagSUgDcaYsCmS3j9QOGiwYN5gp4iWA?usp=sharing'),
(13, 'Railway Exam', 'https://drive.google.com/drive/folders/1fqx2YLpWYBVzJguMXn5FbrKVNJH8jRPl?usp=sharing'),
(14, 'Reet Exam', 'https://drive.google.com/drive/folders/1dKAZEVnJ85-UC6XiOtJmFZ5U9kjNqfog?usp=sharing'),
(15, 'SSC Exam', 'https://drive.google.com/drive/folders/1p_FjGfpZdTlgo5LG3hrsexfV5As4V985?usp=sharing'),
(16, 'UPSE', 'https://drive.google.com/drive/folders/1dLmluBtmjXXakLIIUPOsKpRzCwwy_Upr?usp=sharing'),
(17, 'Itihas', 'https://drive.google.com/drive/folders/1XF5_BSfuDy408Pxnzs0rs7PynDFIYtmQ?usp=sharing'),
(18, 'Computer ', 'https://drive.google.com/drive/folders/1w-AMfm_tBaN4f06HGQV9DUtjtzUzPbq6?usp=sharing'),
(19, 'Krishi Vigyan', 'https://drive.google.com/drive/folders/1wG8jobxsmWPyn0-_IP-ClEdqz6Qz7pk_?usp=sharing'),
(20, 'Maths', 'https://drive.google.com/drive/folders/1p_-80iMePtntl7JkfC2UJCVSim4wWK7A?usp=sharing'),
(21, 'Bal Vikas', 'https://drive.google.com/drive/folders/1p_-80iMePtntl7JkfC2UJCVSim4wWK7A?usp=sharing'),
(22, 'Bhugol', 'https://drive.google.com/drive/folders/1XIEyl4AtkWFgX9umhFDoASi6flPiEAEc?usp=sharing'),
(23, 'Rajasthan Polish Exam', 'https://drive.google.com/drive/folders/1X3yLb_vHWcCKrm_vhSioX4nlw9ahvwTc?usp=sharing'),
(24, 'Science ', 'https://drive.google.com/drive/folders/1Xd3-yXm9z0b6RMT632rx01dBNl0sOHLo?usp=sharing'),
(25, 'Social Science', 'https://drive.google.com/drive/folders/1w1OVWd4dl7FMhP8tXh7peUHv5nBnz77P?usp=sharing'),
(26, '', ''),
(27, 'Hindi', 'https://drive.google.com/drive/folders/1Xa3C17ter72u_jZ2TAgHf638pmxlbMgP?usp=sharing'),
(28, 'Gate Exam', 'https://drive.google.com/drive/folders/1pbHy_8OnRp3agpquhCyWZb4ClkXfftkZ?usp=sharing'),
(29, 'RAS', 'https://drive.google.com/drive/folders/1GiNzOBKEfQl6lzGolyCX6qImOUquut24?usp=sharing'),
(30, 'Reasoning ', 'https://drive.google.com/drive/folders/1dKAZEVnJ85-UC6XiOtJmFZ5U9kjNqfog?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `query` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `query`, `created_at`, `updated_at`) VALUES
(1, 'test', 'jhgjghjgh', '2020-09-14 07:21:45', '2020-09-14 11:22:00'),
(2, 'shraddha', 'gfdgdfgdf', '2020-09-14 07:22:30', '2020-09-14 11:22:45'),
(3, 'shraddha', 'hgfhfg', '2020-09-14 07:24:08', '2020-09-14 11:24:23'),
(4, 'DDDDemo', 'das ddfsa fdasg fdsag fdsag fdsg fdsag fds gasdf asdftsdgf gsfd asgf ags assg ffdsg dsag dg fdsgf dsg gas dfgsdfsagd gfds gdg ss sgda fs dsgsfs gsd fgsh fsdhgdasd', '2020-09-14 07:26:41', '2020-09-14 11:26:56'),
(5, 'hhhh', '1545123151b2vc15 1534152123 1351231d', '2020-09-14 07:27:20', '2020-09-14 11:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `village` varchar(250) NOT NULL,
  `study` varchar(250) NOT NULL,
  `img` varchar(2500) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `contact`, `village`, `study`, `img`, `password`, `status`) VALUES
(1, 'seervi', '9982661925', 'atbara', 'BTech', 'prakash.jpeg', 'seervi@123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `comment` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `contact`, `comment`) VALUES
(1, 'seervi', '9982661925', 'book hahie');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `fathers_name` varchar(255) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `graduation` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 for active, 0 for Inactive',
  `description` longtext DEFAULT NULL,
  `added_by` enum('Admin','Self') DEFAULT 'Self',
  `date` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `profile_image` varchar(250) NOT NULL,
  `terms` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `fathers_name`, `email`, `phone`, `city`, `address`, `graduation`, `status`, `description`, `added_by`, `date`, `created_at`, `updated_at`, `profile_image`, `terms`, `password`) VALUES
(28, 'Shraddha', 'Choyal', NULL, 'sid@gmail.com', '8827731567', NULL, 'Mela ground  near dhar road flat no-201, mera ground in front of near electric grid date', 'BE', 1, 'E-Library', 'Self', NULL, '2020-09-08 14:53:31', '2020-09-14 09:20:13', '', '', 'e10adc3949ba59abbe56e057f20f883e'),
(18, 'vishal', 'kdkkd', NULL, 'vishalpatidar26aa05@gmail.com', '122111111111', NULL, 'vlksaknk', '12', 1, NULL, 'Admin', NULL, NULL, '2020-09-14 09:20:20', 'pic02.jpg', '1', '6512bd43d9caa6e02c990b0a82652dca'),
(20, 'vishal', 'kdkkd', NULL, 'vishalpatidar260500534@gmail.com', '12214444444', NULL, 'vlksaknk', '12', 1, NULL, NULL, NULL, NULL, '2020-09-08 11:53:33', 'pic02.jpg', '1', '202cb962ac59075b964b07152d234b70'),
(21, 'vishal', 'kdkkd', NULL, 'vishalpatidar260500500034@gmail.com', '122144444440', NULL, 'vlksaknk', '12', 1, 'E-Library', 'Self', NULL, NULL, '2020-09-14 09:20:34', 'pic02.jpg', '1', '202cb962ac59075b964b07152d234b70'),
(22, 'vishal', 'kdkkd', NULL, 'vishalpatidar2666605@gmail.com', '122111110455', NULL, 'vlksaknk', '12', 0, NULL, NULL, NULL, NULL, '2020-09-08 11:53:33', 'pic01.jpg', '1', '202cb962ac59075b964b07152d234b70'),
(23, 'vishal', 'patidar', NULL, 'vishal@gmail.com', '112122121212', NULL, 'saf', '1212', 1, NULL, NULL, NULL, NULL, '2020-09-08 11:53:33', '1597992452.jpg', '1', 'c20ad4d76fe97759aa27a0c99bff6710'),
(29, 'harsh', 'patidar', NULL, 'harshpatidar2605@gmail.com', '456123789', NULL, 'as', '12', 0, NULL, NULL, NULL, '2020-09-14 02:47:54', '2020-10-13 06:41:28', 'e365a9927a814f979e6c286358d37fb0.jpg', '', 'c20ad4d76fe97759aa27a0c99bff6710'),
(25, 'pritam', 'patidar', NULL, 'pritam123@gmail.com', '41544545', NULL, '111', '11', 1, NULL, NULL, NULL, NULL, '2020-09-08 11:53:33', 'user.png', '1', 'c20ad4d76fe97759aa27a0c99bff6710'),
(26, 'harshit', 'patidar', NULL, 'harshit123@gmail.com', '45564454', NULL, '445', '121', 0, NULL, NULL, NULL, NULL, '2020-09-08 11:53:33', '1598864227.jpg', '1', 'c20ad4d76fe97759aa27a0c99bff6710'),
(32, 'nikhil', 'Choyal', NULL, 'nikhil@gmail.com', '9632589652', NULL, 'Mela ground  near dhar road flat no-201, mera ground in front of near electric grid date', '12', 1, '12th books', 'Admin', '2020-09-18', '2020-09-14 08:26:15', '2020-09-14 12:26:30', '049fbaf2e2b6ef4fdb9f6e1b60ed4b5f.jpg', '', 'e10adc3949ba59abbe56e057f20f883e'),
(33, 'Kiran', 'Burman', 'radheshyam burman', 'kiranb@gmail.com', '7854785478', 'bakaner', 'radharaman colony dhar', 'mtech', 1, 'mtech books and project files', 'Admin', '2020-10-18', '2020-09-14 08:37:38', '2020-09-14 12:37:53', '6d712ed97b3d6729b2f62b6ca414ad27.jpg', '', 'e10adc3949ba59abbe56e057f20f883e'),
(34, 'prakash', 'panwar', NULL, 'seervi.rtu@gmail.com', '9982661925', NULL, 'seervi.rtu@gmail.com', 'btech', 1, NULL, 'Self', NULL, '2021-02-08 22:16:57', '2021-02-08 16:49:19', '', '', '827ccb0eea8a706c4c34a16891f84e7b'),
(35, 'pp', 'ss', NULL, 'abc@gmail.com', '9876543210', NULL, 'abc@gmail.com', 'btech', 1, NULL, 'Self', NULL, '2021-02-08 22:27:28', '2021-02-08 16:57:28', '', '', 'c5fe25896e49ddfe996db7508cf00534'),
(36, 'Rohan', 'Roy', NULL, 'rohan@gmail.com', '3454325678', NULL, 'Indore', 'Bsc', 1, NULL, 'Self', NULL, '2021-02-08 22:27:47', '2021-02-08 16:57:47', '', '', 'e10adc3949ba59abbe56e057f20f883e'),
(37, 'rani', 'patel', NULL, 'ranipatel@gmail.com', '7894568965', NULL, 'indore', 'bsc nursing', 1, NULL, 'Self', NULL, '2021-02-08 23:55:51', '2021-02-08 18:27:25', '', '', 'e10adc3949ba59abbe56e057f20f883e'),
(38, 'asha ram', 'seervi', NULL, 'seerviasharam@gmail.com', '9887981988', NULL, 'atbara', 'btech', 1, NULL, 'Self', NULL, '2021-02-09 19:11:13', '2021-02-09 13:42:06', '', '', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT 'Active',
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bhamashah`
--
ALTER TABLE `bhamashah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bhamashah`
--
ALTER TABLE `bhamashah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
