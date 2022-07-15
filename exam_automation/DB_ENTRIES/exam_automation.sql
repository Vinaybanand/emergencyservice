-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 03:15 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_automation`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `cid` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`cid`) VALUES
('101'),
('102'),
('103'),
('104'),
('101'),
('102'),
('103'),
('104'),
('101'),
('102'),
('103'),
('104');

-- --------------------------------------------------------

--
-- Table structure for table `examseat`
--

CREATE TABLE `examseat` (
  `slno` int(255) NOT NULL,
  `cid` varchar(20) NOT NULL,
  `tid` varchar(20) NOT NULL,
  `usn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `name` varchar(30) NOT NULL,
  `fid` varchar(30) NOT NULL,
  `loginPass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`name`, `fid`, `loginPass`) VALUES
('Arun J', 'FAC1', 'arun123'),
('Lokesh N', 'FAC2', 'lokesh456'),
('Soumyashree H G', 'FAC3', 'soumya678'),
('Shivaswamy', 'FAC4', 'shiva901'),
('Tejaswini M P', 'FAC5', 'teja234'),
('Shruthi M', 'FAC6', 'shruthi567'),
('Madevswamy', 'FAC7', 'madev890'),
('Arun J', 'FAC1', 'arun123'),
('Lokesh N', 'FAC2', 'lokesh456'),
('Soumyashree H G', 'FAC3', 'soumya678'),
('Shivaswamy', 'FAC4', 'shiva901'),
('Tejaswini M P', 'FAC5', 'teja234'),
('Shruthi M', 'FAC6', 'shruthi567'),
('Madevswamy', 'FAC7', 'madev890'),
('Arun J', 'FAC1', 'arun123'),
('Lokesh N', 'FAC2', 'lokesh456'),
('Soumyashree H G', 'FAC3', 'soumya678'),
('Shivaswamy', 'FAC4', 'shiva901'),
('Tejaswini M P', 'FAC5', 'teja234'),
('Shruthi M', 'FAC6', 'shruthi567'),
('Madevswamy', 'FAC7', 'madev890');

-- --------------------------------------------------------

--
-- Table structure for table `relieve`
--

CREATE TABLE `relieve` (
  `tid` varchar(25) NOT NULL,
  `fid` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `usn` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `contactNumber` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`usn`, `name`, `contactNumber`) VALUES
('418IS16001', 'Adarash B', '9060334417'),
('418IS16002', 'Amruth', '9986334418'),
('418IS16004', 'Bharath B', '9065432419'),
('418IS16005', 'Buvana S K', '8797674420'),
('418IS16006', 'Chaitra T', '9036544421'),
('418IS16007', 'Darshan D', '7092124422'),
('418IS16008', 'Deepa H', '9860334423'),
('418IS16009', 'Keerthan J', '9740334424'),
('418IS16010', 'Lavanya L', '8970334425'),
('418IS16011', 'Manoj F', '7863334426'),
('418IS16012', 'Manjunath A', '8972334427'),
('418IS16013', 'Nithin H', '8496334428'),
('418IS16014', 'Sumanth K', '9786334429'),
('418IS16015', 'Suman T', '9989734430'),
('418IS16016', 'Zakriya J G', '99865334431'),
('418IS17017', 'Adarash Babu', '89975334432'),
('418IS17018', 'Anil', '98765334433'),
('418IS17019', 'Ashwin S s', '7895533443'),
('418IS17020', 'Avigna M T', '8765465476'),
('418IS17021', 'Banushree R', '8800533453'),
('418IS17022', 'Bavana S', '7700533765'),
('418IS17023', 'Bharath F G', '9898533443'),
('418IS17024', 'Bhasheer R', '8676655664'),
('418IS17025', 'Buvana U', '9986533358'),
('418IS17026', 'Changappa G T', '9864476454'),
('418IS17027', 'Chethan A', '8766864467'),
('418IS17028', 'Danush M', '9988776655'),
('418IS17029', 'Darshan B', '9976543213'),
('418IS17030', 'Devika C', '7686434353'),
('418IS17031', 'Farhan Mohammed', '8076543679'),
('418IS17032', 'Faisal Ahmed Khan', '8296366767'),
('418IS17033', 'Gagan B', '9765786778'),
('418IS17034', 'Ganesh', '9086457655'),
('418IS17035', 'Harsha K', '7897578865'),
('418IS17036', 'Harshitha M N', '8785478576'),
('418IS17037', 'Kavya K', '8768887966'),
('418IS17038', 'Sohan T S', '9867857353'),
('418IS17039', 'Vinay D', '9863735782'),
('418IS18040', 'Amir Khan', '7647577575'),
('418IS18041', 'Bhommika k', '8754754646'),
('418IS18042', 'Bhuvan E', '9985362328'),
('418IS18043', 'Chaitra S K', '9854214532'),
('418IS18044', 'Charlie D R', '9753624278'),
('418IS18045', 'Dulkar Salman', '8653556266'),
('418IS18046', 'Firoz', '9756543452'),
('418IS18047', 'Gaganashree B', '8765765676'),
('418IS18048', 'Goutham J', '9878655754'),
('418IS18048', 'Harshith U', '9965678656'),
('418IS18049', 'Harris', '8562435267'),
('418IS18050', 'Imran', '8076535548'),
('418IS18051', 'Joel Joseph', '9386527279'),
('418IS18052', 'Madevswamy', '8734637373'),
('418IS18053', 'Madhu', '8789787663'),
('418IS18054', 'Ravi Teja ', '6836897786'),
('418IS18055', 'Rohith S J', '8978789673'),
('418IS18056', 'Suhan T', '9676685393'),
('418IS18057', 'Syed Awaiz Ahmed', '9876376377'),
('418IS18058', 'Syed Khan', '8317425441'),
('418IS18059', 'Tejaswini N', '9900990045'),
('418IS18060', 'Tejas D', '7865432156'),
('418IS16001', 'Adarash B', '9060334417'),
('418IS16002', 'Amruth', '9986334418'),
('418IS16004', 'Bharath B', '9065432419'),
('418IS16005', 'Buvana S K', '8797674420'),
('418IS16006', 'Chaitra T', '9036544421'),
('418IS16007', 'Darshan D', '7092124422'),
('418IS16008', 'Deepa H', '9860334423'),
('418IS16009', 'Keerthan J', '9740334424'),
('418IS16010', 'Lavanya L', '8970334425'),
('418IS16011', 'Manoj F', '7863334426'),
('418IS16012', 'Manjunath A', '8972334427'),
('418IS16013', 'Nithin H', '8496334428'),
('418IS16014', 'Sumanth K', '9786334429'),
('418IS16015', 'Suman T', '9989734430'),
('418IS16016', 'Zakriya J G', '99865334431'),
('418IS17017', 'Adarash Babu', '89975334432'),
('418IS17018', 'Anil', '98765334433'),
('418IS17019', 'Ashwin S s', '7895533443'),
('418IS17020', 'Avigna M T', '8765465476'),
('418IS17021', 'Banushree R', '8800533453'),
('418IS17022', 'Bavana S', '7700533765'),
('418IS17023', 'Bharath F G', '9898533443'),
('418IS17024', 'Bhasheer R', '8676655664'),
('418IS17025', 'Buvana U', '9986533358'),
('418IS17026', 'Changappa G T', '9864476454'),
('418IS17027', 'Chethan A', '8766864467'),
('418IS17028', 'Danush M', '9988776655'),
('418IS17029', 'Darshan B', '9976543213'),
('418IS17030', 'Devika C', '7686434353'),
('418IS17031', 'Farhan Mohammed', '8076543679'),
('418IS17032', 'Faisal Ahmed Khan', '8296366767'),
('418IS17033', 'Gagan B', '9765786778'),
('418IS17034', 'Ganesh', '9086457655'),
('418IS17035', 'Harsha K', '7897578865'),
('418IS17036', 'Harshitha M N', '8785478576'),
('418IS17037', 'Kavya K', '8768887966'),
('418IS17038', 'Sohan T S', '9867857353'),
('418IS17039', 'Vinay D', '9863735782'),
('418IS18040', 'Amir Khan', '7647577575'),
('418IS18041', 'Bhommika k', '8754754646'),
('418IS18042', 'Bhuvan E', '9985362328'),
('418IS18043', 'Chaitra S K', '9854214532'),
('418IS18044', 'Charlie D R', '9753624278'),
('418IS18045', 'Dulkar Salman', '8653556266'),
('418IS18046', 'Firoz', '9756543452'),
('418IS18047', 'Gaganashree B', '8765765676'),
('418IS18048', 'Goutham J', '9878655754'),
('418IS18048', 'Harshith U', '9965678656'),
('418IS18049', 'Harris', '8562435267'),
('418IS18050', 'Imran', '8076535548'),
('418IS18051', 'Joel Joseph', '9386527279'),
('418IS18052', 'Madevswamy', '8734637373'),
('418IS18053', 'Madhu', '8789787663'),
('418IS18054', 'Ravi Teja ', '6836897786'),
('418IS18055', 'Rohith S J', '8978789673'),
('418IS18056', 'Suhan T', '9676685393'),
('418IS18057', 'Syed Awaiz Ahmed', '9876376377'),
('418IS18058', 'Syed Khan', '8317425441'),
('418IS18059', 'Tejaswini N', '9900990045'),
('418IS18060', 'Tejas D', '7865432156'),
('418IS16001', 'Adarash B', '9060334417'),
('418IS16002', 'Amruth', '9986334418'),
('418IS16004', 'Bharath B', '9065432419'),
('418IS16005', 'Buvana S K', '8797674420'),
('418IS16006', 'Chaitra T', '9036544421'),
('418IS16007', 'Darshan D', '7092124422'),
('418IS16008', 'Deepa H', '9860334423'),
('418IS16009', 'Keerthan J', '9740334424'),
('418IS16010', 'Lavanya L', '8970334425'),
('418IS16011', 'Manoj F', '7863334426'),
('418IS16012', 'Manjunath A', '8972334427'),
('418IS16013', 'Nithin H', '8496334428'),
('418IS16014', 'Sumanth K', '9786334429'),
('418IS16015', 'Suman T', '9989734430'),
('418IS16016', 'Zakriya J G', '99865334431'),
('418IS17017', 'Adarash Babu', '89975334432'),
('418IS17018', 'Anil', '98765334433'),
('418IS17019', 'Ashwin S s', '7895533443'),
('418IS17020', 'Avigna M T', '8765465476'),
('418IS17021', 'Banushree R', '8800533453'),
('418IS17022', 'Bavana S', '7700533765'),
('418IS17023', 'Bharath F G', '9898533443'),
('418IS17024', 'Bhasheer R', '8676655664'),
('418IS17025', 'Buvana U', '9986533358'),
('418IS17026', 'Changappa G T', '9864476454'),
('418IS17027', 'Chethan A', '8766864467'),
('418IS17028', 'Danush M', '9988776655'),
('418IS17029', 'Darshan B', '9976543213'),
('418IS17030', 'Devika C', '7686434353'),
('418IS17031', 'Farhan Mohammed', '8076543679'),
('418IS17032', 'Faisal Ahmed Khan', '8296366767'),
('418IS17033', 'Gagan B', '9765786778'),
('418IS17034', 'Ganesh', '9086457655'),
('418IS17035', 'Harsha K', '7897578865'),
('418IS17036', 'Harshitha M N', '8785478576'),
('418IS17037', 'Kavya K', '8768887966'),
('418IS17038', 'Sohan T S', '9867857353'),
('418IS17039', 'Vinay D', '9863735782'),
('418IS18040', 'Amir Khan', '7647577575'),
('418IS18041', 'Bhommika k', '8754754646'),
('418IS18042', 'Bhuvan E', '9985362328'),
('418IS18043', 'Chaitra S K', '9854214532'),
('418IS18044', 'Charlie D R', '9753624278'),
('418IS18045', 'Dulkar Salman', '8653556266'),
('418IS18046', 'Firoz', '9756543452'),
('418IS18047', 'Gaganashree B', '8765765676'),
('418IS18048', 'Goutham J', '9878655754'),
('418IS18048', 'Harshith U', '9965678656'),
('418IS18049', 'Harris', '8562435267'),
('418IS18050', 'Imran', '8076535548'),
('418IS18051', 'Joel Joseph', '9386527279'),
('418IS18052', 'Madevswamy', '8734637373'),
('418IS18053', 'Madhu', '8789787663'),
('418IS18054', 'Ravi Teja ', '6836897786'),
('418IS18055', 'Rohith S J', '8978789673'),
('418IS18056', 'Suhan T', '9676685393'),
('418IS18057', 'Syed Awaiz Ahmed', '9876376377'),
('418IS18058', 'Syed Khan', '8317425441'),
('418IS18059', 'Tejaswini N', '9900990045'),
('418IS18060', 'Tejas D', '7865432156');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `scode` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sem` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`scode`, `name`, `sem`) VALUES
('ABC1', 'BE LAB', '4'),
('ABC2', 'DE LAB', '6'),
('ABC3', 'SQL LAB', '8'),
('ABC4', 'MM LAB', '3'),
('ABC5', 'BCS LAB', '4'),
('ABC6', 'C PROGRAMMING LAB', '5'),
('ABC7', 'LINUX LAB', '6'),
('ABC8', 'CEEE', '7'),
('ABC9', 'ENGG MATHEMATICS 2', '8'),
('ABC10', 'APPLIED SCIENCE', '3'),
('ABC11', 'DCF', '4'),
('ABC12', 'ENGG MATHEMATICS 1', '5'),
('ABC13', 'C PROGRAMMING', '6'),
('ABC14', 'ADA', '7'),
('ABC15', 'WEB PROGRAMMING', '8'),
('ABC16', 'SOFTWARE TESTING', '3'),
('ABC17', 'R PROGRAMMING', '4'),
('ABC18', 'KANNADA', '5'),
('ABC19', 'WP LAB', '6'),
('ABC20', 'ST LAB', '7'),
('ABC21', 'AS LAB', '8'),
('ABC22', 'ADA LAB', '5'),
('ABC23', 'R PROGRAMMING LAB', '3'),
('ABC24', 'JAVA LAB', '5'),
('ABC25', 'INTERNET OF THINGS', '7'),
('ABC26', 'JAVA ', '4'),
('ABC27', 'DATA MINING', '8'),
('ABC28', 'PE & IC', '7'),
('ABC29', 'ENGLISH', '6'),
('ABC30', 'GREEN COMPUTING', '3'),
('ABC31', 'DBMS', '4'),
('ABC32', 'OPERATING SYSTEM', '5'),
('ABC33', 'COMPUTER ORGANISATION', '7'),
('ABC34', 'COMPUTER NETWORK', '5'),
('ABC1', 'BE LAB', '4'),
('ABC2', 'DE LAB', '6'),
('ABC3', 'SQL LAB', '8'),
('ABC4', 'MM LAB', '3'),
('ABC5', 'BCS LAB', '4'),
('ABC6', 'C PROGRAMMING LAB', '5'),
('ABC7', 'LINUX LAB', '6'),
('ABC8', 'CEEE', '7'),
('ABC9', 'ENGG MATHEMATICS 2', '8'),
('ABC10', 'APPLIED SCIENCE', '3'),
('ABC11', 'DCF', '4'),
('ABC12', 'ENGG MATHEMATICS 1', '5'),
('ABC13', 'C PROGRAMMING', '6'),
('ABC14', 'ADA', '7'),
('ABC15', 'WEB PROGRAMMING', '8'),
('ABC16', 'SOFTWARE TESTING', '3'),
('ABC17', 'R PROGRAMMING', '4'),
('ABC18', 'KANNADA', '5'),
('ABC19', 'WP LAB', '6'),
('ABC20', 'ST LAB', '7'),
('ABC21', 'AS LAB', '8'),
('ABC22', 'ADA LAB', '5'),
('ABC23', 'R PROGRAMMING LAB', '3'),
('ABC24', 'JAVA LAB', '5'),
('ABC25', 'INTERNET OF THINGS', '7'),
('ABC26', 'JAVA ', '4'),
('ABC27', 'DATA MINING', '8'),
('ABC28', 'PE & IC', '7'),
('ABC29', 'ENGLISH', '6'),
('ABC30', 'GREEN COMPUTING', '3'),
('ABC31', 'DBMS', '4'),
('ABC32', 'OPERATING SYSTEM', '5'),
('ABC33', 'COMPUTER ORGANISATION', '7'),
('ABC34', 'COMPUTER NETWORK', '5'),
('ABC1', 'BE LAB', '4'),
('ABC2', 'DE LAB', '6'),
('ABC3', 'SQL LAB', '8'),
('ABC4', 'MM LAB', '3'),
('ABC5', 'BCS LAB', '4'),
('ABC6', 'C PROGRAMMING LAB', '5'),
('ABC7', 'LINUX LAB', '6'),
('ABC8', 'CEEE', '7'),
('ABC9', 'ENGG MATHEMATICS 2', '8'),
('ABC10', 'APPLIED SCIENCE', '3'),
('ABC11', 'DCF', '4'),
('ABC12', 'ENGG MATHEMATICS 1', '5'),
('ABC13', 'C PROGRAMMING', '6'),
('ABC14', 'ADA', '7'),
('ABC15', 'WEB PROGRAMMING', '8'),
('ABC16', 'SOFTWARE TESTING', '3'),
('ABC17', 'R PROGRAMMING', '4'),
('ABC18', 'KANNADA', '5'),
('ABC19', 'WP LAB', '6'),
('ABC20', 'ST LAB', '7'),
('ABC21', 'AS LAB', '8'),
('ABC22', 'ADA LAB', '5'),
('ABC23', 'R PROGRAMMING LAB', '3'),
('ABC24', 'JAVA LAB', '5'),
('ABC25', 'INTERNET OF THINGS', '7'),
('ABC26', 'JAVA ', '4'),
('ABC27', 'DATA MINING', '8'),
('ABC28', 'PE & IC', '7'),
('ABC29', 'ENGLISH', '6'),
('ABC30', 'GREEN COMPUTING', '3'),
('ABC31', 'DBMS', '4'),
('ABC32', 'OPERATING SYSTEM', '5'),
('ABC33', 'COMPUTER ORGANISATION', '7'),
('ABC34', 'COMPUTER NETWORK', '5');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `tid` varchar(25) NOT NULL,
  `class` varchar(25) NOT NULL,
  `fid` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `takes`
--

CREATE TABLE `takes` (
  `usn` varchar(25) NOT NULL,
  `backlog_status` varchar(25) NOT NULL,
  `scode` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `takes`
--

INSERT INTO `takes` (`usn`, `backlog_status`, `scode`) VALUES
('418IS16001', '0', 'ABC5'),
('418IS16002', '1', 'ABC5'),
('418IS16004', '1', 'ABC3'),
('418IS16005', '0', 'ABC5'),
('418IS16006', '1', 'ABC5'),
('418IS16007', '1', 'ABC6'),
('418IS16008', '0', 'ABC5'),
('418IS16009', '0', 'ABC5'),
('418IS16010', '1', 'ABC9'),
('418IS16011', '1', 'ABC10'),
('418IS16012', '1', 'ABC11'),
('418IS16013', '1', 'ABC12'),
('418IS16014', '0', 'ABC5'),
('418IS16015', '0', 'ABC14'),
('418IS16016', '0', 'ABC15'),
('418IS17017', '1', 'ABC16'),
('418IS17018', '0', 'ABC17'),
('418IS17019', '0', 'ABC18'),
('418IS17020', '0', 'ABC19'),
('418IS17021', '1', 'ABC20'),
('418IS17022', '1', 'ABC21'),
('418IS17023', '1', 'ABC22'),
('418IS17024', '1', 'ABC23'),
('418IS17025', '0', 'ABC24'),
('418IS17026', '0', 'ABC25'),
('418IS17027', '1', 'ABC26'),
('418IS17028', '0', 'ABC27'),
('418IS17029', '0', 'ABC28'),
('418IS17030', '0', 'ABC29'),
('418IS17031', '0', 'ABC30'),
('418IS17032', '0', 'ABC31'),
('418IS17033', '1', 'ABC32'),
('418IS17034', '1', 'ABC33'),
('418IS17035', '0', 'ABC34'),
('418IS16001', '0', 'ABC5'),
('418IS16002', '1', 'ABC5'),
('418IS16004', '1', 'ABC3'),
('418IS16005', '0', 'ABC5'),
('418IS16006', '1', 'ABC5'),
('418IS16007', '1', 'ABC6'),
('418IS16008', '0', 'ABC5'),
('418IS16009', '0', 'ABC5'),
('418IS16010', '1', 'ABC9'),
('418IS16011', '1', 'ABC10'),
('418IS16012', '1', 'ABC11'),
('418IS16013', '1', 'ABC12'),
('418IS16014', '0', 'ABC5'),
('418IS16015', '0', 'ABC14'),
('418IS16016', '0', 'ABC15'),
('418IS17017', '1', 'ABC16'),
('418IS17018', '0', 'ABC17'),
('418IS17019', '0', 'ABC18'),
('418IS17020', '0', 'ABC19'),
('418IS17021', '1', 'ABC20'),
('418IS17022', '1', 'ABC21'),
('418IS17023', '1', 'ABC22'),
('418IS17024', '1', 'ABC23'),
('418IS17025', '0', 'ABC24'),
('418IS17026', '0', 'ABC25'),
('418IS17027', '1', 'ABC26'),
('418IS17028', '0', 'ABC27'),
('418IS17029', '0', 'ABC28'),
('418IS17030', '0', 'ABC29'),
('418IS17031', '0', 'ABC30'),
('418IS17032', '0', 'ABC31'),
('418IS17033', '1', 'ABC32'),
('418IS17034', '1', 'ABC33'),
('418IS17035', '0', 'ABC34'),
('418IS16001', '0', 'ABC5'),
('418IS16002', '1', 'ABC5'),
('418IS16004', '1', 'ABC3'),
('418IS16005', '0', 'ABC5'),
('418IS16006', '1', 'ABC5'),
('418IS16007', '1', 'ABC6'),
('418IS16008', '0', 'ABC5'),
('418IS16009', '0', 'ABC5'),
('418IS16010', '1', 'ABC9'),
('418IS16011', '1', 'ABC10'),
('418IS16012', '1', 'ABC11'),
('418IS16013', '1', 'ABC12'),
('418IS16014', '0', 'ABC5'),
('418IS16015', '0', 'ABC14'),
('418IS16016', '0', 'ABC15'),
('418IS17017', '1', 'ABC16'),
('418IS17018', '0', 'ABC17'),
('418IS17019', '0', 'ABC18'),
('418IS17020', '0', 'ABC19'),
('418IS17021', '1', 'ABC20'),
('418IS17022', '1', 'ABC21'),
('418IS17023', '1', 'ABC22'),
('418IS17024', '1', 'ABC23'),
('418IS17025', '0', 'ABC24'),
('418IS17026', '0', 'ABC25'),
('418IS17027', '1', 'ABC26'),
('418IS17028', '0', 'ABC27'),
('418IS17029', '0', 'ABC28'),
('418IS17030', '0', 'ABC29'),
('418IS17031', '0', 'ABC30'),
('418IS17032', '0', 'ABC31'),
('418IS17033', '1', 'ABC32'),
('418IS17034', '1', 'ABC33'),
('418IS17035', '0', 'ABC34');

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `fid` varchar(25) NOT NULL,
  `scode` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teaches`
--

INSERT INTO `teaches` (`fid`, `scode`) VALUES
('FAC1', 'ABC1'),
('FAC2', 'ABC2'),
('FAC3', 'ABC3'),
('FAC4', 'ABC4'),
('FAC5', 'ABC5'),
('FAC6', 'ABC6'),
('FAC7', 'ABC7'),
('FAC1', 'ABC1'),
('FAC2', 'ABC2'),
('FAC3', 'ABC3'),
('FAC4', 'ABC4'),
('FAC5', 'ABC5'),
('FAC6', 'ABC6'),
('FAC7', 'ABC7'),
('FAC1', 'ABC1'),
('FAC2', 'ABC2'),
('FAC3', 'ABC3'),
('FAC4', 'ABC4'),
('FAC5', 'ABC5'),
('FAC6', 'ABC6'),
('FAC7', 'ABC7');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `tid` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `start_time` varchar(25) NOT NULL,
  `end_time` varchar(25) NOT NULL,
  `sem` varchar(25) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `scode` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `examseat`
--
ALTER TABLE `examseat`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `examseat`
--
ALTER TABLE `examseat`
  MODIFY `slno` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
