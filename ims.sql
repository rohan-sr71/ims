-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 26, 2020 at 04:18 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `stu_details`
--

DROP TABLE IF EXISTS `stu_details`;
CREATE TABLE IF NOT EXISTS `stu_details` (
  `Name` varchar(50) NOT NULL,
  `Mobile_Number` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Father_Name` varchar(50) NOT NULL,
  `Father_Contact` int(11) NOT NULL,
  `Father_Email` varchar(50) NOT NULL,
  `Graduation_University` varchar(50) NOT NULL,
  `Graduation_Scores` varchar(50) NOT NULL,
  `Graduation_Backlog` varchar(50) NOT NULL,
  `Year_Of_Passing` varchar(50) NOT NULL,
  `PG_University` varchar(50) NOT NULL,
  `PG_Scores` varchar(50) NOT NULL,
  `PG_Backlog` varchar(50) NOT NULL,
  `PG_Year_Of_Passing` varchar(50) NOT NULL,
  `Employment_Details` varchar(50) NOT NULL,
  `Work_Experience` varchar(50) NOT NULL,
  `Presently_Working` varchar(50) NOT NULL,
  `PlacedUnplaced` varchar(50) NOT NULL,
  `Linkedin_Profile` varchar(50) NOT NULL,
  `Resume_Link` varchar(50) NOT NULL,
  `Github_Link` varchar(50) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stu_drives`
--

DROP TABLE IF EXISTS `stu_drives`;
CREATE TABLE IF NOT EXISTS `stu_drives` (
  `ID` int(11) NOT NULL,
  `Company_Name` varchar(50) NOT NULL,
  `Last_Update_Date` date NOT NULL,
  `Last_Update` varchar(50) NOT NULL,
  `Number_Of_Vacancies` int(11) NOT NULL,
  `Relevant_Vacancies` varchar(50) NOT NULL,
  `CTC` int(11) NOT NULL,
  `Average_CTC` int(11) NOT NULL,
  `Stipend` int(11) NOT NULL,
  `Average_Stipend` int(11) NOT NULL,
  `Drive_Status` varchar(50) NOT NULL,
  `Profile` varchar(50) NOT NULL,
  `Remarks` varchar(50) NOT NULL,
  `Drive_Sent` varchar(50) NOT NULL,
  `JD` varchar(100) NOT NULL,
  `Feature` varchar(50) NOT NULL,
  `Drive_Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
