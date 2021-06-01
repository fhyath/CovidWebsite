-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 05:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covidprogress`
--
CREATE DATABASE IF NOT EXISTS `covidprogress` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `covidprogress`;

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

DROP TABLE IF EXISTS `center`;
CREATE TABLE `center` (
  `center_name` varchar(30) DEFAULT NULL,
  `center_id` int(6) UNSIGNED NOT NULL,
  `country_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `center`
--

INSERT INTO `center` (`center_name`, `center_id`, `country_id`) VALUES
('CVS Pharmacy', 1, 1),
('Ontario Clinic', 2, 2),
('Mexico City Clinic', 3, 3),
('Paris Clinic', 4, 4),
('Great Britain Clinic', 5, 5),
('Moscow Clinic', 6, 6),
('Beijing Clinic', 7, 7),
('South Africa Clinic', 8, 8),
('Rio Clinic', 9, 9),
('Sydney Clinic', 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `continents`
--

DROP TABLE IF EXISTS `continents`;
CREATE TABLE `continents` (
  `continent_name` varchar(30) DEFAULT NULL,
  `continent_id` int(10) UNSIGNED NOT NULL,
  `population` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `continents`
--

INSERT INTO `continents` (`continent_name`, `continent_id`, `population`) VALUES
('North America', 1, 368000000),
('Europe', 2, 747000000),
('Asia', 3, 1326000000),
('Africa', 4, 1216000000),
('South America', 5, 422500000),
('Australia', 6, 25360000);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE `country` (
  `country_id` int(6) UNSIGNED NOT NULL,
  `country_name` varchar(30) DEFAULT NULL,
  `continent_id` int(6) DEFAULT NULL,
  `population` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `continent_id`, `population`) VALUES
(1, 'USA', 1, 328200000),
(2, 'Canada', 1, 37590000),
(3, 'Mexico', 1, 127600000),
(4, 'France', 2, 67060000),
(5, 'Britain', 2, 66650000),
(6, 'Russia', 2, 144400000),
(7, 'China', 3, 1398000000),
(8, 'South Africa', 4, 58560000),
(9, 'Brazil', 5, 211000000),
(10, 'Australia', 6, 25360000);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE `doctor` (
  `doctor_id` int(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `alast_name` varchar(30) DEFAULT NULL,
  `age` int(6) UNSIGNED DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `center_id` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `first_name`, `alast_name`, `age`, `gender`, `center_id`) VALUES
(1, 'Jim', 'Bob', 45, 'M', 1),
(2, 'Con', 'Jon', 76, 'M', 2),
(3, 'Wilson', 'Ball', 34, 'M', 3),
(4, 'Jean', 'Howe', 56, 'F', 4),
(5, 'Sara', 'One', 36, 'F', 5),
(6, 'Nathan', 'Drake', 80, 'M', 6),
(7, 'Leonard', 'Church', 69, 'M', 7),
(8, 'Solanum', 'Nomai', 29, 'F', 9),
(9, 'Rex', 'Bot', 55, 'M', 10);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE `patient` (
  `patient_id` int(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `age` int(6) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `center_id` int(6) UNSIGNED NOT NULL,
  `doctor_id` int(6) DEFAULT NULL,
  `vaccine_manufacturer_id` int(6) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `dosage_no` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `first_name`, `last_name`, `age`, `gender`, `center_id`, `doctor_id`, `vaccine_manufacturer_id`, `start_date`, `end_date`, `dosage_no`) VALUES
(92, 'Furqaan', 'Hyath', 21, 'M', 7, 6, 3, '2021-01-04', '2021-02-05', 2),
(93, 'Frederic', 'Trasler', 85, 'M', 6, 6, 2, '2021-02-09', '2021-04-24', 1),
(94, 'Mariah', 'Phateplace', 43, 'M', 0, 1, 0, '2021-01-11', '2021-03-11', 0),
(95, 'Zach', 'Lovejoy', 7, 'M', 8, 8, 2, '2021-04-07', '2021-07-25', 2),
(96, 'Herold', 'Petranek', 65, 'M', 5, 5, 3, '2021-01-03', '2021-03-20', 1),
(97, 'Zara', 'Lage', 51, 'F', 6, 6, 3, '2021-04-03', '2021-06-09', 2),
(98, 'Sage', 'Phan', 15, 'M', 3, 6, 1, '2021-01-02', '2021-05-09', 2),
(99, 'Pip', 'Brickstock', 88, 'M', 7, 7, 2, '2021-04-13', '2021-06-12', 2),
(100, 'Bentlee', 'Habbon', 16, 'M', 8, 8, 2, '2021-01-17', '2021-04-02', 1),
(101, 'Alisha', 'Ronaldson', 25, 'F', 4, 4, 1, '2021-03-19', '2021-04-09', 2),
(102, 'Ailene', 'Basnett', 86, 'F', 7, 7, 2, '2021-04-12', '2021-09-09', 1),
(103, 'Maude', 'Spaughton', 25, 'F', 9, 9, 3, '2021-03-26', '2021-07-03', 1),
(104, 'Margaretta', 'Moreing', 34, 'F', 3, 3, 3, '2021-04-12', '2021-08-27', 1),
(105, 'Curtice', 'Badby', 4, 'M', 9, 9, 1, '2021-02-22', '2021-04-08', 1),
(106, 'Ryley', 'Capron', 97, 'M', 1, 1, 1, '2021-03-21', '2021-04-10', 1),
(107, 'Lek', 'Ganter', 91, 'M', 1, 1, 2, '2021-01-15', '2021-03-14', 2),
(108, 'Charita', 'Giral', 89, 'F', 3, 3, 1, '2021-02-11', '2021-04-30', 2),
(109, 'Sunshine', 'Czajka', 54, 'F', 8, 8, 1, '2021-02-03', '2021-04-16', 1),
(110, 'Dedra', 'Scipsey', 18, 'F', 6, 6, 1, '2021-01-20', '2021-04-07', 2),
(111, 'Letta', 'Dunsire', 53, 'F', 3, 3, 2, '2021-04-01', '2021-05-17', 2),
(112, 'Morganica', 'Keyte', 27, 'F', 8, 8, 1, '2021-02-09', '2021-04-20', 2),
(113, 'Nichole', 'Stonuary', 65, 'F', 10, 10, 3, '2021-01-08', '2021-05-12', 1),
(114, 'Onofredo', 'Brittles', 92, 'M', 9, 9, 3, '2021-02-23', '2021-04-27', 2),
(115, 'Joe', 'Ikringill', 41, 'M', 8, 8, 2, '2021-01-21', '2021-03-10', 1),
(116, 'Mabel', 'Louden', 21, 'F', 10, 10, 3, '2021-03-09', '2021-05-10', 2),
(117, 'Orrin', 'Balstone', 31, 'M', 5, 5, 3, '2021-02-22', '2021-05-08', 2),
(118, 'Jackquelin', 'Barras', 15, 'F', 2, 2, 1, '2021-01-03', '2021-03-30', 1),
(119, 'Alaric', 'Wehnerr', 75, 'M', 9, 9, 1, '2021-01-02', '2021-03-19', 2),
(120, 'Abby', 'Hanmore', 31, 'F', 2, 2, 1, '2021-02-20', '2021-04-26', 2),
(121, 'Audy', 'Thorburn', 83, 'M', 2, 8, 2, '2021-01-14', '2021-02-19', 1),
(144, 'Jonny', 'Doe', 50, 'M', 1, 1, 2, '2021-04-20', '2021-05-11', 1),
(145, 'John', 'Doe', 50, 'M', 4, 2, 1, '2021-04-20', '2021-05-11', 1),
(146, 'Bob', 'Doe', 55, 'M', 1, 2, 1, '2021-04-20', '2021-05-11', 1),
(147, 'ytk', '639', 110, 'M', 3, 1, 3, '2005-02-11', '0000-00-00', 2),
(148, 'Test1', 'test', 50, 'F', 2, 1, 1, '2021-04-22', '2021-05-13', 1),
(149, '', '', 0, '', 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(150, 'Timothy', 'Lan', 60, 'M', 3, 1, 2, '2021-04-24', '2021-05-15', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_manufacturers`
--

DROP TABLE IF EXISTS `vaccine_manufacturers`;
CREATE TABLE `vaccine_manufacturers` (
  `vaccine_manufacturer_id` int(6) UNSIGNED NOT NULL,
  `vaccine_manufacturer` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccine_manufacturers`
--

INSERT INTO `vaccine_manufacturers` (`vaccine_manufacturer_id`, `vaccine_manufacturer`) VALUES
(1, 'Pfizer'),
(2, 'Moderna'),
(3, 'Johnson & Johnson');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_volume`
--

DROP TABLE IF EXISTS `vaccine_volume`;
CREATE TABLE `vaccine_volume` (
  `vaccine_manufacturer_id` int(6) NOT NULL,
  `country_id` int(6) NOT NULL,
  `amount` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccine_volume`
--

INSERT INTO `vaccine_volume` (`vaccine_manufacturer_id`, `country_id`, `amount`) VALUES
(1, 1, 40000000),
(1, 2, 20000000),
(1, 3, 10000000),
(1, 4, 3000000),
(1, 5, 2820000),
(1, 6, 3420000),
(1, 7, 7000000),
(1, 8, 7500000),
(1, 9, 6800000),
(1, 10, 3900000),
(2, 1, 1000001),
(2, 2, 1000001),
(2, 3, 5000000),
(2, 4, 3480000),
(2, 5, 4390000),
(2, 6, 4200000),
(2, 7, 12300000),
(2, 8, 6800000),
(2, 9, 4830000),
(2, 10, 1900000),
(3, 1, 900000),
(3, 2, 700000),
(3, 3, 50000),
(3, 4, 6900000),
(3, 5, 3210000),
(3, 6, 5000000),
(3, 7, 8000000),
(3, 8, 8690000),
(3, 9, 1930000),
(3, 10, 6600000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `center`
--
ALTER TABLE `center`
  ADD PRIMARY KEY (`center_id`),
  ADD KEY `center_ind` (`center_id`);

--
-- Indexes for table `continents`
--
ALTER TABLE `continents`
  ADD PRIMARY KEY (`continent_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `center_id` (`center_id`),
  ADD KEY `patient_ind` (`center_id`);

--
-- Indexes for table `vaccine_manufacturers`
--
ALTER TABLE `vaccine_manufacturers`
  ADD PRIMARY KEY (`vaccine_manufacturer_id`);

--
-- Indexes for table `vaccine_volume`
--
ALTER TABLE `vaccine_volume`
  ADD PRIMARY KEY (`vaccine_manufacturer_id`,`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `center`
--
ALTER TABLE `center`
  MODIFY `center_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `continents`
--
ALTER TABLE `continents`
  MODIFY `continent_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `vaccine_manufacturers`
--
ALTER TABLE `vaccine_manufacturers`
  MODIFY `vaccine_manufacturer_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `center`
--
ALTER TABLE `center`
  ADD CONSTRAINT `center_id_fk` FOREIGN KEY (`center_id`) REFERENCES `patient` (`center_id`),
  ADD CONSTRAINT `fk_center` FOREIGN KEY (`center_id`) REFERENCES `patient` (`center_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
