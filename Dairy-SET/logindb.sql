-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 09:59 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `hoon`
--

CREATE TABLE `hoon` (
  `P_ID` int(11) NOT NULL,
  `P_Name` varchar(50) NOT NULL,
  `P_Date` date NOT NULL,
  `P_Open` varchar(50) NOT NULL,
  `P_Max` varchar(50) NOT NULL,
  `P_Min` varchar(50) NOT NULL,
  `P_Close` varchar(50) NOT NULL,
  `P_Avg` varchar(50) NOT NULL,
  `P_Change` varchar(50) NOT NULL,
  `P_PerChange` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoon`
--

INSERT INTO `hoon` (`P_ID`, `P_Name`, `P_Date`, `P_Open`, `P_Max`, `P_Min`, `P_Close`, `P_Avg`, `P_Change`, `P_PerChange`) VALUES
(1, 'IRPC - บริษัท ไออาร์พีซี จำกัด (มหาชน)', '2017-12-22', '6.90', '7.00', '6.90', '6.95', '6.95', '0.05', '0.72'),
(2, 'CPF - บริษัท เจริญโภคภัณฑ์อาหาร จำกัด (มหาชน)', '2017-12-22', '24.70', '24.90', '24.60', '24.80', '24.79', '0.20', '0.81'),
(3, 'PTT - บริษัท ปตท. จำกัด (มหาชน)', '2017-12-22', '440.00', '446.00', '438.00', '446.00', '441.81', '8.00', '1.83'),
(4, 'SCC - บริษัท ปูนซิเมนต์ไทย จำกัด(มหาชน)', '2017-12-22', '492.00', '494.00', '486.00', '488.00', '488.71', '-6.00', '-1.21'),
(5, 'BGRIM - บริษัท บี.กริม เพาเวอร์ จำกัด (มหาชน)', '2017-12-22', '26.75', '28.25', '26.75', '28.25', '27.67', '1.75', '6.60'),
(6, 'AOT - บริษัท ท่าอากาศยานไทย จำกัด (มหาชน)', '2017-12-22', '64.50', '64.75', '64.25', '64.75', '64.63', '0.25', '0.39'),
(7, 'NUSA - บริษัท ณุศาศิริ จำกัด (มหาชน)', '2017-12-22', '0.43', '0.44', '0.43', '0.44', '0.43', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `login_id` int(11) NOT NULL,
  `login_username` varchar(100) NOT NULL,
  `login_password` varchar(100) NOT NULL,
  `login_email` varchar(50) NOT NULL,
  `login_status` enum('0','100','500') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoon`
--
ALTER TABLE `hoon`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoon`
--
ALTER TABLE `hoon`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
