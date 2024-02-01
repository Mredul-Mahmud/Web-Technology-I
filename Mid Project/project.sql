-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 02:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
(3, 'rad@gmail.com', 'rifat', 'Kharap');

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
(25, 'NameTSHA', 'Male', 'name@gmail.com', '', '1996800307', 'password', ''),
(26, 'testagag12@gmail.com', 'Male', 'TestAgain', '', '1996800307', 'password', ''),
(27, 'Dr', 'Female', 'doctordoctor69@gmail.com', '', '1996800307', 'password', ''),
(28, 'HWR', 'Male', 'hwr@gmail.com', '', '01996800307', 'password', ''),
(29, 'Got', 'Male', 'got@gmail.com', '', '01996800307', 'test', 'Tot'),
(30, 'Valo', 'Male', 'valo@gmail.com', '', '01711529487', 'test', 'Basu'),
(31, 'MredulAA', 'Male', 'mredulhh@gmail.com', '', '01711529487', 'password', 'Tot'),
(32, 'demopop', 'Male', 'pop@gmail.com', '', '01996800307', 'password', 'Kang'),
(33, 'Mredulrr', 'Male', 'rrr@gmail.com', '', '01996800307', 'password', 'Kang'),
(34, 'Mredul Mahmud Akash', 'Male', 'mma@gmail.com', 'Screenshot (3).png', '01996800307', '123123', 'Kang'),
(38, 'Radt', 'Male', 'rad@gmail.com', 'Screenshot (10).png', '01711529487', 'password', 'Kang'),
(39, 'MredulAk', 'Male', 'akashmm@gmail.com', 'Screenshot (11).png', '01996800307', 'password', 'Kang'),
(40, 'demoabcd', 'Male', 'ababab@gmail.com', 'Screenshot (3).png', '01996800307', '123123', 'Kang'),
(41, 'MredulMMMMMM', 'Male', 'mredulmewww@gmail.com', 'Screenshot (14).png', '01996800307', 'password', 'Abcde'),
(42, 'Akash Mredul Mahmud', 'Male', 'akashmredul@gmail.com', '', '01996800307', 'password', 'Basu'),
(46, 'Zzz', 'Male', 'zzz@gmail.com', 'Screenshot (17).png', '01996800307', 'password', 'Abcde'),
(47, 'Ttt', 'Male', 'ttt@gmail.com', 'Screenshot (16).png', '01996800307', 'password', 'Basu'),
(50, 'Ztt', 'Male', 'zz@gmail.com', '', '01996800307', 'password', 'Basu'),
(52, 'zzt', 'Male', 'aaa@gmail.com', '', '01996800307', 'password', 'Basu'),
(53, 'zzt', 'Male', 'Zza@gmail.com', '', '0199680030', 'password', 'Basu'),
(54, 'Webweb', 'Male', 'web@gmail.com', 'Screenshot (17).png', '0123456987', 'password', 'friend');

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
(11, 'akashmredul@gmail.com', 'Unknown', 'Valona!');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Id` int(200) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `Dob` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`Email`, `FirstName`, `LastName`, `FatherName`, `MotherName`, `BloodGroup`, `Religion`, `Website`, `Schedule`, `Dob`) VALUES
('akashmredul@gmail.com', 'Mredul Mahmud', 'Akash', 'Md. Anwar Hossain', 'Khaleda Akter Mily', 'O+', 'Islam', 'https://www.geeksforgeeks.org/sql-insert-statement/', 'sat-thurs', '2023-11-01'),
('doctordoctor69@gmail.com', 'Doctor', 'Doctor', 'Dad', 'Mom', 'AB+', 'Islam', 'https://www.geeksforgeeks.org/sql-insert-statement/', 'mon-sat', '2023-11-01'),
('got@gmail.com', 'Go', 'TT', 'Father', 'Name', 'AB+', 'Islam', 'https://www.geeksforgeeks.org/sql-insert-statement/', 'sat-fri', '2023-11-17'),
('mma@gmail.com', 'Mredul', 'Mahmud', 'Abc', 'Khaleda Akter Mily', 'B-', 'Islam', 'http://rifat.me', 'mon-sat', '2023-11-14'),
('name@gmail.com', 'Name', 'RRRRR', 'abcdefgh', 'Xyz', 'AB+', 'Christian', 'http://rifat.me', 'sat-fri', '2023-12-02'),
('rad@gmail.com', 'Mredul', 'Mahmud', 'Md. Anwar Hossain', 'Khaleda Akter Mily', 'O+', 'Islam', 'https://www.geeksforgeeks.org/sql-insert-statement/', 'sat-thurs', '2023-11-05'),
('TestAgain', 'Test', 'Again', 'FAther', 'Mother', 'A+', 'Islam', 'https://www.geeksforgeeks.org/sql-insert-statement/', 'sat-thurs', '2023-11-09'),
('valo@gmail.com', 'Md', 'Valo', 'Md md', 'Mrs', 'B+', 'Islam', 'https://www.geeksforgeeks.org/sql-insert-statement/', 'sat-fri', '2023-01-02'),
('web@gmail.com', 'Old', 'Oldie', 'Papi', 'Mamma', 'AB+', 'Christian', 'http://mredul.me', 'mon-sat', '2023-11-01');

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
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Id` int(200) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `auth` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
