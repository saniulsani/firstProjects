-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2025 at 04:30 AM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrow_book`
--

CREATE TABLE `borrow_book` (
  `isbn` varchar(30) NOT NULL,
  `BookTitle` varchar(30) NOT NULL,
  `BookNames` varchar(30) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Fiction` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `borrow_book`
--

INSERT INTO `borrow_book` (`isbn`, `BookTitle`, `BookNames`, `Quantity`, `Fiction`) VALUES
('10', 'titleOne', 'o Kill a Mockingbird', 300, '10'),
('11', 'ssaj', '', 12, '563'),
('12', 'ssaj', 'sony', 15, '12'),
('13', 'titleFour', 'The Great Gatsby', 700, 'false'),
('14', 'titlesSix', 'Moby-Dick', 800, 'true'),
('15', 'titlefivr', 'The Catcher in the Rye', 900, 'true'),
('16', 'titleseven', 'The Hobbit', 900, 'true'),
('17', 'titleight', 'The harry', 900, 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrow_book`
--
ALTER TABLE `borrow_book`
  ADD PRIMARY KEY (`isbn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
