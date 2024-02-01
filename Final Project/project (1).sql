-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 04:56 AM
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
(3, 'rad@gmail.com', 'rifat', 'Kharap'),
(4, 'A92011bw', 'Robert Carlos', '1.Sleep Deprivation Can be More Fatal Than Starvation\r\n\r\n\r\nSleep deprivation poses a greater threat to one’s well-being than starvation. While the importance of proper nutrition is evident, the advers'),
(5, 'Bg2030k9', 'Humayun', 'Being healthy and fit in simple terms means taking good care of the body. We should remember that a healthy mind resides only in a healthy body. Good health of both mind and body helps one maintain th');

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
(54, 'Webweb', 'Male', 'web@gmail.com', 'Screenshot (17).png', '0123456987', 'password', 'friend'),
(55, 'Akash Mredul', 'Male', 'akash0101@gmail.com', 'Screenshot (13).png', '01996800307', 'password', 'Basu');

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
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT;

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
