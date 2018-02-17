-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2018 at 09:11 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_ID` int(8) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_ID`, `password`) VALUES
(1001, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `sex` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `firstname`, `lastname`, `password`, `sex`, `address`, `phone_no`, `email`) VALUES
(1457, 'dayo', 'akin', 'akin', 'male', 'ddlfkldfdfd', 78989999777, 'danielsegun456@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer_has_drug`
--

CREATE TABLE IF NOT EXISTS `customer_has_drug` (
  `CUSTOMER_idCUSTOMER` int(11) NOT NULL,
  `DRUG_drug_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE IF NOT EXISTS `drug` (
`drug_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `manufacturer` varchar(45) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`drug_id`, `name`, `manufacturer`, `price`, `status`) VALUES
(1, 'PARACETAMOL', 'EMZOR LIMITED', 50, 'AVAILABLE'),
(2, 'AMATEM', 'GSK LIMITED', 500, 'AVAILABLE'),
(3, 'ASPIRIN', 'GLASOLINE LIMITED', 100, 'NOT AVAILABLE'),
(4, 'IBUFEM', 'CLARION', 800, 'AVAILABLE'),
(6, 'OXYGEN BOOSTER', 'BOOSTER', 1600, 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `drug_has_drug_manufacturer`
--

CREATE TABLE IF NOT EXISTS `drug_has_drug_manufacturer` (
  `DRUG_drug_id` int(11) NOT NULL,
  `DRUG_MANUFACTURER_idDRUG_MANUFACTURER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `drug_manufacturer`
--

CREATE TABLE IF NOT EXISTS `drug_manufacturer` (
`drug_manufacturer_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drug_manufacturer`
--

INSERT INTO `drug_manufacturer` (`drug_manufacturer_id`, `name`, `address`) VALUES
(1, 'GSK LIMITED', '19,IGBEKELE STREET'),
(2, 'EMZOR LIMITED', '13 ILUPEJU, IKORODU ROAD'),
(3, 'GLASOLINE LIMITED', '14 VISION ROAD OFF POWERLINE'),
(4, 'CLARION', '5, GBEMINIYI STREET OFF ILUPEJU ROAD'),
(6, 'BOOSTER', '20, IREPODUN STREET OF MOWE JUNCTION');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE IF NOT EXISTS `pharmacy` (
`pharmacy_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_has_drug`
--

CREATE TABLE IF NOT EXISTS `pharmacy_has_drug` (
  `PHARMACY_idPHARMACY` int(11) NOT NULL,
  `DRUG_drug_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_has_drug_manufacturer`
--

CREATE TABLE IF NOT EXISTS `pharmacy_has_drug_manufacturer` (
  `PHARMACY_idPHARMACY` int(11) NOT NULL,
  `DRUG_MANUFACTURER_idDRUG_MANUFACTURER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`customer_id`), ADD UNIQUE KEY `idCUSTOMER_UNIQUE` (`customer_id`);

--
-- Indexes for table `customer_has_drug`
--
ALTER TABLE `customer_has_drug`
 ADD PRIMARY KEY (`CUSTOMER_idCUSTOMER`,`DRUG_drug_id`), ADD KEY `fk_CUSTOMER_has_DRUG_DRUG1_idx` (`DRUG_drug_id`), ADD KEY `fk_CUSTOMER_has_DRUG_CUSTOMER1_idx` (`CUSTOMER_idCUSTOMER`);

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
 ADD PRIMARY KEY (`drug_id`), ADD UNIQUE KEY `drug_id_UNIQUE` (`drug_id`);

--
-- Indexes for table `drug_has_drug_manufacturer`
--
ALTER TABLE `drug_has_drug_manufacturer`
 ADD PRIMARY KEY (`DRUG_drug_id`,`DRUG_MANUFACTURER_idDRUG_MANUFACTURER`), ADD KEY `fk_DRUG_has_DRUG_MANUFACTURER_DRUG_MANUFACTURER1_idx` (`DRUG_MANUFACTURER_idDRUG_MANUFACTURER`), ADD KEY `fk_DRUG_has_DRUG_MANUFACTURER_DRUG1_idx` (`DRUG_drug_id`);

--
-- Indexes for table `drug_manufacturer`
--
ALTER TABLE `drug_manufacturer`
 ADD PRIMARY KEY (`drug_manufacturer_id`), ADD UNIQUE KEY `idDRUG_MANUFACTURER_UNIQUE` (`drug_manufacturer_id`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
 ADD PRIMARY KEY (`pharmacy_id`), ADD UNIQUE KEY `idPHARMACY_UNIQUE` (`pharmacy_id`);

--
-- Indexes for table `pharmacy_has_drug`
--
ALTER TABLE `pharmacy_has_drug`
 ADD PRIMARY KEY (`PHARMACY_idPHARMACY`,`DRUG_drug_id`), ADD KEY `fk_PHARMACY_has_DRUG_DRUG1_idx` (`DRUG_drug_id`), ADD KEY `fk_PHARMACY_has_DRUG_PHARMACY1_idx` (`PHARMACY_idPHARMACY`);

--
-- Indexes for table `pharmacy_has_drug_manufacturer`
--
ALTER TABLE `pharmacy_has_drug_manufacturer`
 ADD PRIMARY KEY (`PHARMACY_idPHARMACY`,`DRUG_MANUFACTURER_idDRUG_MANUFACTURER`), ADD KEY `fk_PHARMACY_has_DRUG_MANUFACTURER_DRUG_MANUFACTURER1_idx` (`DRUG_MANUFACTURER_idDRUG_MANUFACTURER`), ADD KEY `fk_PHARMACY_has_DRUG_MANUFACTURER_PHARMACY_idx` (`PHARMACY_idPHARMACY`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
MODIFY `drug_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `drug_manufacturer`
--
ALTER TABLE `drug_manufacturer`
MODIFY `drug_manufacturer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
MODIFY `pharmacy_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_has_drug`
--
ALTER TABLE `customer_has_drug`
ADD CONSTRAINT `fk_CUSTOMER_has_DRUG_CUSTOMER1` FOREIGN KEY (`CUSTOMER_idCUSTOMER`) REFERENCES `customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_CUSTOMER_has_DRUG_DRUG1` FOREIGN KEY (`DRUG_drug_id`) REFERENCES `drug` (`drug_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `drug_has_drug_manufacturer`
--
ALTER TABLE `drug_has_drug_manufacturer`
ADD CONSTRAINT `fk_DRUG_has_DRUG_MANUFACTURER_DRUG1` FOREIGN KEY (`DRUG_drug_id`) REFERENCES `drug` (`drug_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_DRUG_has_DRUG_MANUFACTURER_DRUG_MANUFACTURER1` FOREIGN KEY (`DRUG_MANUFACTURER_idDRUG_MANUFACTURER`) REFERENCES `drug_manufacturer` (`drug_manufacturer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pharmacy_has_drug`
--
ALTER TABLE `pharmacy_has_drug`
ADD CONSTRAINT `fk_PHARMACY_has_DRUG_DRUG1` FOREIGN KEY (`DRUG_drug_id`) REFERENCES `drug` (`drug_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_PHARMACY_has_DRUG_PHARMACY1` FOREIGN KEY (`PHARMACY_idPHARMACY`) REFERENCES `pharmacy` (`pharmacy_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pharmacy_has_drug_manufacturer`
--
ALTER TABLE `pharmacy_has_drug_manufacturer`
ADD CONSTRAINT `fk_PHARMACY_has_DRUG_MANUFACTURER_DRUG_MANUFACTURER1` FOREIGN KEY (`DRUG_MANUFACTURER_idDRUG_MANUFACTURER`) REFERENCES `drug_manufacturer` (`drug_manufacturer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_PHARMACY_has_DRUG_MANUFACTURER_PHARMACY` FOREIGN KEY (`PHARMACY_idPHARMACY`) REFERENCES `pharmacy` (`pharmacy_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
