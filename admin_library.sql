-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 01:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookId` int(24) NOT NULL,
  `bookCategory` varchar(100) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Author` varchar(255) NOT NULL,
  `columnNumber` int(11) NOT NULL,
  `Accession` varchar(255) NOT NULL,
  `bookEdition` int(24) NOT NULL,
  `bookYear` year(4) NOT NULL,
  `Property` varchar(255) NOT NULL,
  `isbn` varchar(17) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `image2` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookId`, `bookCategory`, `Title`, `Author`, `columnNumber`, `Accession`, `bookEdition`, `bookYear`, `Property`, `isbn`, `image1`, `image2`) VALUES
(19, 'Laws', 'Laws for Professional II', 'Mike Santos', 2, '372834-42', 324, '2018', 'Valenzuela', '232-33-33566-43-6', 'books2.jpg', 'books3.jpg'),
(161, 'Novel', 'Pride and prejudice', 'Jane Austen', 3, '323-4422', 22, '2022', 'Valenzuela City', '978-93-96055-02-6', 'spine111.png', 'sample.jpg'),
(175, 'Literature', 'To Kill a Mocking Bird', 'Harper Lee', 1, '23-423', 2345, '1960', 'PLV Maysan', '323-43556-32-2', 'books1.jpg', 'books4.jpg'),
(176, 'Education', 'Make it Stick', 'Henry L. Rodieger III', 1, '5553', 323234, '2014', 'PLV Maysan', '978-16-29239-74-3', 'books4.jpg', 'books5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookId`,`isbn`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookId` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
