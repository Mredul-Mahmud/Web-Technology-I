-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2024 at 03:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `Id` int(100) NOT NULL,
  `ArticleCode` varchar(100) NOT NULL,
  `AuthorName` varchar(100) NOT NULL,
  `Body` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`Id`, `ArticleCode`, `AuthorName`, `Body`) VALUES
(1, 'Ab1902', 'A.D.D', 'q3rertesthtdfhghvjhj'),
(2, 'Ab1903', 'Drake G', 'ertaetysy6udtyu'),
(3, 'rad@gmail.com', 'rifat', 'Kharap'),
(4, 'A92011bw', 'Robert Carlos', '1.Sleep Deprivation Can be More Fatal Than Starvation\r\n\r\n\r\nSleep deprivation poses a greater threat to one’s well-being than starvation. While the importance of proper nutrition is evident, the advers'),
(5, 'Bg2030k9', 'Humayun', 'Being healthy and fit in simple terms means taking good care of the body. We should remember that a healthy mind resides only in a healthy body. Good health of both mind and body helps one maintain th'),
(7, 'Ab190265', 'Drake Gillan', 'sryutgyheoariuthjioweAJRFOWIljdnouwFHLWFNLWARFHIOWL');

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `Id` int(100) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Image` varchar(80) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `PasswordRecover` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`Id`, `Username`, `Gender`, `Email`, `Image`, `PhoneNumber`, `Password`, `PasswordRecover`) VALUES
(27, 'Dr', 'Female', 'doctordoctor69@gmail.com', '', '1996800307', 'password', ''),
(29, 'Got', 'Male', 'got@gmail.com', '', '01996800307', 'test', 'Tot'),
(57, 'mm', 'Male', 'mm@gmail.com', '', '12365456322', 'password', 'Tot');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Id` int(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `About` varchar(200) NOT NULL,
  `Body` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id`, `Email`, `About`, `Body`) VALUES
(4, '', 'rifat', 'Valo na'),
(6, 'akashmredul@gmail.com', 'Mr. Dr', 'It was a bad experience!'),
(8, 'aaa@gmail.com', 'Doctor xyz', 'He was Doctor Doom!'),
(11, 'akashmredul@gmail.com', 'Unknown', 'Valona!'),
(12, 'web@gmail.com', 'Mr Patient', 'weird behaviour');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `dob` date NOT NULL DEFAULT current_timestamp(),
  `email` varchar(100) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `bloodGroup` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `securityQuestion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `firstname`, `lastname`, `dob`, `email`, `phoneNumber`, `gender`, `bloodGroup`, `password`, `securityQuestion`) VALUES
(11, 'Rifattttt', 'Shikdar', '2023-12-01', 'rifatshikdar6@gmail.com', '01793466943', 'Male', 'A-', '111', 'apple'),
(13, 'Ri', 'Shikdar', '2023-11-02', 'rifatshikdar@gmail.com', '01793466943', 'Male', 'A+', '111', 'apple'),
(14, 'Rifatttt', 'Shikdar', '2023-11-02', 'rifat6@gmail.com', '01793466943', 'Male', 'A+', '222', 'ice'),
(15, 'aakash', 'mredul', '2023-11-03', 'yeallah@gmail.com', '01815003714', 'gender', 'A+', '666', 'milk'),
(16, 'ali', 'ali', '2023-11-02', 'yeallahabibi@gmail.com', '0111651265', 'gender', 'A+', '222', 'apple'),
(17, 'hh', 'lalafgdf', '2023-11-02', 'lililala@yahoo.com', '01793466943', 'Male', 'A+', '444', 'milk'),
(18, 'Md Rifat', 'Shikdar', '2023-11-01', 'mdhrifat6@gmail.com', '01793466943', 'Male', 'A+', '123', 'apple'),
(19, 'abc', 'ddd', '2023-11-01', 'yeallahabibi444@gmail.com', '01815003714', 'Male', 'A+', '111', 'ice'),
(20, 'hjgvy', 'dfg', '2023-11-01', 'aaaa@gmail.com', '31265465511', 'Male', 'AB+', '111', 'kola'),
(21, 'fhgbdjhk', 'sdfsdf', '2023-11-01', 'bbbbb@gmail.com', '356546646', 'Male', 'AB+', '555', 'lolita'),
(22, 'ki', 'li', '2023-11-01', 'kili@gmail.com', '31565461661', 'Male', 'A+', '111', 'apple'),
(23, 'koomo', 'fooco', '2023-11-01', 'kofo@gmail.com', '161456121', 'Female', 'A-', '666', 'milk');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(100) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `ProductCode` varchar(200) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `Image`, `ProductCode`, `Name`, `Brand`, `Description`, `Price`) VALUES
(1, 'Image.jpg', '19ba05', 'Scissors', 'JK', 'Stainless Steel full body', '800'),
(2, 'Image.jpg', '19ba067', 'Scissors', 'JK', 'Stainless Steel ', '900'),
(3, 'Image.jpg', '20bghe75', 'Injections', 'JK', 'Stainless Steel', '200'),
(4, 'jpg.jpg', '1106abz', 'Novomix 30', 'Beximco ', 'Insulin', '720'),
(5, 'jpg.jpg', '1106rtyu', 'Novomix 20', 'Beximco ', 'Insulin', '720'),
(6, 'Image.jpg', '19ba0566', 'Apron', 'RD', 'Full white', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `Email` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `FatherName` varchar(50) NOT NULL,
  `MotherName` varchar(50) NOT NULL,
  `BloodGroup` varchar(4) NOT NULL,
  `Religion` varchar(10) NOT NULL,
  `Website` varchar(100) NOT NULL,
  `Schedule` varchar(100) NOT NULL,
  `Dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`Id`, `Name`, `Brand`, `Price`) VALUES
(1, 'HDMI', 'Intel', '600'),
(2, 'HDMI', 'Intel', '600'),
(3, '', '', ''),
(4, '', '', ''),
(5, '', '', ''),
(6, 'Dimerol', 'Drug International Bd', '120'),
(7, 'agbbnj', 'samsung', '200');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `Id` int(11) NOT NULL,
  `PatientName` varchar(100) NOT NULL,
  `Disease` varchar(100) NOT NULL,
  `TestType` varchar(100) NOT NULL,
  `TestDate` date NOT NULL,
  `Amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`Id`, `PatientName`, `Disease`, `TestType`, `TestDate`, `Amount`) VALUES
(1, 'Akash', 'Bone Injury', 'X-ray', '2023-12-30', '1500'),
(2, 'Mredul', 'Food Poisoning', 'Untrasonography', '2023-12-29', '2000'),
(3, 'Mredul', 'Food Poisoning', 'Untrasonography', '2023-12-29', '2000'),
(4, 'Mr. Mredul Mahmud', 'Fracture', 'X-ray', '2023-12-29', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `testreport`
--

CREATE TABLE `testreport` (
  `email` varchar(100) NOT NULL,
  `testName` varchar(100) NOT NULL,
  `testDate` date NOT NULL,
  `medicalHistory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testreport`
--

INSERT INTO `testreport` (`email`, `testName`, `testDate`, `medicalHistory`) VALUES
('lililala@yahoo.com', 'Blood Group Test', '2023-10-31', 'Allergy'),
('rifatshikdar6@gmail.com', 'Blood Group Test', '2023-10-29', 'Diabetes ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `ArticleCode` (`ArticleCode`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `testreport`
--
ALTER TABLE `testreport`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `auth` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testreport`
--
ALTER TABLE `testreport`
  ADD CONSTRAINT `test` FOREIGN KEY (`email`) REFERENCES `patient` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
