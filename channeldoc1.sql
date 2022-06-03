-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 03:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `channeldoc1`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(13, '2022-04-14-120614', 'App\\Database\\Migrations\\User', 'default', 'App', 1649982401, 1),
(14, '2022-04-14-120903', 'App\\Database\\Migrations\\PractitionerProfile', 'default', 'App', 1649982401, 1),
(15, '2022-04-14-120932', 'App\\Database\\Migrations\\PractitionerSchedule', 'default', 'App', 1649982401, 1);

-- --------------------------------------------------------

--
-- Table structure for table `practitionerprofile`
--

CREATE TABLE `practitionerprofile` (
  `id` int(5) UNSIGNED NOT NULL,
  `specification` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `practitionerid` varchar(5) NOT NULL,
  `fullname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `practitionerprofile`
--

INSERT INTO `practitionerprofile` (`id`, `specification`, `qualification`, `practitionerid`, `fullname`) VALUES
(1, 'Child Psychiatrist', 'AMCAS', 'D0001', 'Dilrukshi  Wijesooriya'),
(2, 'Physician', 'MBA Intern', 'D0002', 'Ayesha  Modarage'),
(3, 'Psychiatrist', 'BmedSci', 'D0003', 'Purnima  Bambarenda'),
(4, 'Psychologist', 'BMBS', 'D0004', 'Chandima  Gamage'),
(5, 'Family Planning', 'DRCOG', 'D0005', 'Venya  Bamunusingh'),
(6, 'Children Dentist', 'DDS', 'D0006', 'Sangeeth  Bahuge'),
(7, 'Physiotherapist', 'Masters in Sports meds', 'D0007', 'Dilush  Weerasinghe'),
(8, 'Sexual Health', 'DRSH', 'D0008', 'Mustaq  Ahmed'),
(9, 'Allergy Specialist', 'BM', 'D0009', 'Prasad  Manawadu'),
(10, 'General Physician', 'MRCGP', 'D0010', 'Mubeen  Sha'),
(11, 'Gynaecologist', 'DFFP', 'D0011', 'Nishantha  De Alwis');

-- --------------------------------------------------------

--
-- Table structure for table `practitionerschedule`
--

CREATE TABLE `practitionerschedule` (
  `id` int(5) UNSIGNED NOT NULL,
  `practitionerid` varchar(5) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `appointdate` varchar(255) NOT NULL,
  `appointtime` varchar(255) NOT NULL,
  `patientnum` int(255) NOT NULL,
  `fee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `practitionerschedule`
--

INSERT INTO `practitionerschedule` (`id`, `practitionerid`, `hospital`, `appointdate`, `appointtime`, `patientnum`, `fee`) VALUES
(1, 'D0001', 'Asiri Central-Colombo 10', '2022-04-16', '10.00am - 12.00pm', 10, 'LKR 2500.00'),
(2, 'D0002', 'Asiri Hospital-Kandy', '2022-04-18', '10.00am - 12.00pm', 15, 'LKR 3000.00'),
(3, 'D0006', 'Dental Square-Colombo 06', '', '6.00am - 8.00am', 10, 'LKR 1500.00'),
(4, 'D0005', 'Durdans Hospital-Colombo 03', '2022-04-24', '6.00am - 8.00am', 25, 'LKR 1500.00'),
(5, 'D0003', 'Lanka Hospital-Colombo 05', '2022-04-21', '6.00am - 8.00am', 25, 'LKR 1500.00'),
(6, 'D0010', 'Royal Hospital-Colombo 06', '', '6.00pm - 8.00pm', 25, 'LKR 1800.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `phone` int(10) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `approved` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `nic`, `address`, `image`, `type`, `approved`) VALUES
(1, 'Dilrukshi ', 'Wijesooriya', 'practitioner@gmail.com', '$2y$10$4FYVDuQlv3WLsl93XtcGXuqLb3vZTBf/uwYkIPnUXQSMvWqODjW46', 775941667, '200015221564', 'Colombo 03', '', 'Practitioner', 'Yes'),
(2, 'Ayesha ', 'Modarage', 'practitioner2@gmail.com', '$2y$10$jn.AVT/pwnkKecWrnhsuZu9M8XnmdE3itxWs60uTIeUzzVXqpoVRa', 758946221, '210015223456', 'Colombo 06', '', 'Practitioner', 'Yes'),
(3, 'Purnima ', 'Bambarenda', 'practitioner3@gmail.com', '$2y$10$UbuX4wf9diRt5t2ViqwpyeJVC9xhG8987GhwgMy2delG1wDxVprr.', 778945662, '200012005489', 'Colombo 10', '', 'Practitioner', 'Yes'),
(4, 'Chandima ', 'Gamage', 'practitioner4@gmail.com', '$2y$10$gMOci7Ec6DP/rBlIHaS8Te5Q4mG1yIe5yWChfLyImyCpz9GIvInya', 774859112, '200015264853', 'Negambo', '', 'Practitioner', 'Yes'),
(5, 'Venya ', 'Bamunusinghe', 'practitioner5@gmail.com', '$2y$10$qffb58DdTrD28S5kb764AuiuqKAdi9C4VEggsajVWIs7YFoVd1f2e', 764231664, '2000152664895', 'Malabe', '', 'Practitioner', 'Yes'),
(6, 'Sangeeth ', 'Bahuge', 'practitioner6@gmail.com', '$2y$10$vN4yRlZlV2z9jg3kkGKri.X5mCpH052gybP8n7XTTG331YqZFsWWO', 761548996, '200012335468', 'Colombo 02', '', 'Practitioner', 'Yes'),
(7, 'Dilush ', 'Weerasinghe', 'practitioner7@gmail.com', '$2y$10$gNze1Dv.BkLQZUKHGskKP.WYRyl.LiJ1bneM78hUtd3jkRcAnyavS', 724125664, '622248450589', 'Vanniya', '', 'Practitioner', 'No'),
(8, 'Mustaq ', 'Ahmed', 'practitioner8@gmail.com', '$2y$10$B0xkHHvsM5uR8DeiaF6ODeXFYWebBZc9DJXfADpLsfr/5cuwAmS4e', 774851332, '200015223456', 'Aniwatta', '', 'Practitioner', 'No'),
(9, 'Prasad ', 'Manawadu', 'practitioner9@gmail.com', '$2y$10$EiKZYM6A7LDOLoHmz1K.ue2cflcSHRS9CiISXtV92rf9aYgeaZc7q', 776512943, '200015227896', 'Kandy', '', 'Practitioner', 'No'),
(10, 'Mubeen  ', 'Sha', 'practitioner10@gmail.com', '$2y$10$RwN8qLZWv50NHlls.B8Hxuo1shqmN4EyWxIn2rhEvMQPKm9Ou3/PW', 94, '199948551645', 'Matale', '', 'Practitioner', 'No'),
(11, 'Nishantha ', 'De Alwis', 'practitioner11@gmail.com', '$2y$10$jgR7jnaJQ.TaCfl0XdzNceULd.yXde6NSu71zRA.VM.cHf8P7GtzS', 778932115, '200015223256', 'Madawala', '', 'Practitioner', 'No'),
(12, 'Admin', 'Admin', 'admin123@admin.com', '$2y$10$.UsN8H4iKhEroLb1kkiR4e1jn95QE2VTn96n3JZDfM9WYlfYSdvcG', 775974661, '200012334567', '78 Bangalagedara Kandy', '', 'Admin', 'Yes'),
(14, 'Haley', 'Wallace', 'patient@gmail.com', '$2y$10$t.QdfFmTsUOc0mwF9xcuZOGksoviJCt9D4je8bRVny9baPok7zeh.', 1, '973879136121', 'Dolores aut tempore', '', 'Patient', 'No'),
(15, 'Lara', 'Moses', 'patient1@gmail.com', '$2y$10$s3me/dHfiP2nIkyX8thW/O8Ea1vLfZR4t8LYxcuDr8utul40ggQBW', 1, '589541467591', 'Et quia eu dignissim', '', 'Patient', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practitionerprofile`
--
ALTER TABLE `practitionerprofile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `practitionerid` (`practitionerid`);

--
-- Indexes for table `practitionerschedule`
--
ALTER TABLE `practitionerschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nic` (`nic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `practitionerprofile`
--
ALTER TABLE `practitionerprofile`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `practitionerschedule`
--
ALTER TABLE `practitionerschedule`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
