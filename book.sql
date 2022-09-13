-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 13, 2022 at 04:44 AM
-- Server version: 8.0.27
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookdetails`
--

DROP TABLE IF EXISTS `bookdetails`;
CREATE TABLE IF NOT EXISTS `bookdetails` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `edition` int DEFAULT NULL,
  `subdate` datetime DEFAULT NULL,
  `imgsrc` varchar(255) DEFAULT NULL,
  `details` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bookdetails`
--

INSERT INTO `bookdetails` (`id`, `title`, `author`, `edition`, `subdate`, `imgsrc`, `details`) VALUES
(1, 'Atomic Habits', 'James Clear', 12, '2022-09-13 04:46:32', 'https://jamesclear.com/wp-content/uploads/2022/09/9M-atomic-habits-dots.png', 'Atomic Habits: An Easy & Proven Way to Build Good Habits & Break Bad Ones'),
(2, 'Underland', 'Robert Macfarlane', 6, '2022-09-13 02:58:52', 'https://images-na.ssl-images-amazon.com/images/I/91Icy+lvixL.jpg', 'A deep time journey'),
(3, 'As I Lay Dying', 'William Faulkner', 5, '2022-09-13 06:25:04', 'https://freight.cargo.site/t/original/i/3ec842a658839a7e0ae42ecb27cc399673284deb22e4ef34abeae297437c6fa5/michelleurra.jpg', 'death of Addie Bundren and her quest and motivations');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

DROP TABLE IF EXISTS `librarian`;
CREATE TABLE IF NOT EXISTS `librarian` (
  `firstname` char(50) NOT NULL,
  `lastname` char(50) NOT NULL,
  `email` char(50) NOT NULL,
  `password` char(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`firstname`, `lastname`, `email`, `password`) VALUES
('mohamed', 'zahran', 'mohamed@gmail.com', 'mohamed5000'),
('ahmed', 'zezoo', 'jhfdfd@djfddaf.com', 'kdsjfjsfjfdghds');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
