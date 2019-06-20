-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2019 at 03:47 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `ansid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `answer`, `ansid`) VALUES
(1, 'Sodium Carbonate', 1),
(1, 'Sodium Hydroxide', 2),
(1, 'Sodium Peroxide', 3),
(1, 'Sodium Monoxide', 4),
(2, 'Mahesh Bhatt', 5),
(2, 'Satyajit Ray', 6),
(2, 'Mira Nair', 7),
(2, 'G.P. Sippy', 8),
(3, 'Right to free education for all', 9),
(3, 'Right to Equality', 10),
(3, 'Right to religious freedom', 11),
(3, 'Right to Constitutional remedies', 12),
(4, 'Jagannath', 13),
(4, 'Durga', 14),
(4, 'radha rani', 15),
(4, 'Lord Siva', 16),
(5, 'travel with the speed of light', 17),
(5, 'can be reflected or refracted', 18),
(5, 'can affect photographic plates', 19),
(5, 'have low penetrating power', 20);

-- --------------------------------------------------------

--
-- Table structure for table `answer2`
--

CREATE TABLE `answer2` (
  `id` int(11) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `ansid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `answer2`
--

INSERT INTO `answer2` (`id`, `answer`, `ansid`) VALUES
(1, 'Thar', 1),
(1, 'Kalahari', 2),
(1, 'Sahara', 3),
(1, 'Sonoran', 4),
(2, 'China', 5),
(2, 'Russia', 6),
(2, 'India', 7),
(2, 'France', 8),
(3, 'Silver', 9),
(3, 'Zinc', 10),
(3, 'Aluminium', 11),
(3, 'Copper', 12),
(4, 'Kerala', 13),
(4, 'Uttar Pradesh', 14),
(4, 'Bihar', 15),
(4, 'West Bengal', 16),
(5, 'Number of males per 1000 females', 17),
(5, 'Number of females per 100 males', 18),
(5, 'Number of females per 1000 males', 19),
(5, 'Number of females in a sample of 1000 persons', 20);

-- --------------------------------------------------------

--
-- Table structure for table `answer3`
--

CREATE TABLE `answer3` (
  `id` int(11) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `ansid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `answer3`
--

INSERT INTO `answer3` (`id`, `answer`, `ansid`) VALUES
(1, 'Chennai', 1),
(1, 'Cuttack', 2),
(1, 'Delhi', 3),
(1, 'Kolkata', 4),
(2, 'India', 5),
(2, 'China', 6),
(2, 'Nepal', 7),
(2, 'Bhutan', 8),
(3, 'ammeter', 9),
(3, 'galvanometer', 10),
(3, 'altimeter', 11),
(3, 'audiometer', 12),
(4, 'Copper', 13),
(4, 'Wood', 14),
(4, 'Mercury', 15),
(4, 'Aluminium', 16),
(5, 'Surface tension and adherence', 17),
(5, 'Air current over the liquid and buoyancy', 18),
(5, 'Up thrust and surface tension', 19),
(5, 'Viscosity and buoyancy', 20);

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answers` varchar(100) NOT NULL,
  `ansid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `question` varchar(110) NOT NULL,
  `ansid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `ansid`) VALUES
(1, 'What is the product formed when sodium bicarbonate is heated strongly?', 1),
(2, 'Who among the following Indians has been honoured by a special Oscar?', 6),
(3, 'Which of the following is not guaranteed by Indian Constitution?', 9),
(4, 'Lord Chaitanya was the incarnation of Krsna in the form of?', 15),
(5, 'Which of the following is not true about X-rays?', 20);

-- --------------------------------------------------------

--
-- Table structure for table `questions2`
--

CREATE TABLE `questions2` (
  `qid` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `ansid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `questions2`
--

INSERT INTO `questions2` (`qid`, `question`, `ansid`) VALUES
(1, 'The World Largest desert is ?', 3),
(2, 'Country that has the highest in Barley Production ?', 6),
(3, 'The metal whose salts are sensitive to light is ?', 9),
(4, 'Among the following States, ............... has the lowest birth rate in India.', 13),
(5, 'Which of the following is the correct description of the term sex-ratio as used in the context of th', 19);

-- --------------------------------------------------------

--
-- Table structure for table `questions3`
--

CREATE TABLE `questions3` (
  `qid` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `ansid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `questions3`
--

INSERT INTO `questions3` (`qid`, `question`, `ansid`) VALUES
(1, 'The Central Rice Research Station is situated in ?', 2),
(2, 'Mount Everest is located in ?', 7),
(3, 'The device used for measuring altitudes is ?', 11),
(4, 'Which one of the following is an insulator?', 14),
(5, 'Bubbles of air rise up through liquids due to', 20);

-- --------------------------------------------------------

--
-- Table structure for table `sampletable`
--

CREATE TABLE `sampletable` (
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `points` int(11) DEFAULT NULL,
  `p2` int(11) DEFAULT NULL,
  `p3` int(11) DEFAULT NULL,
  `p4` int(11) DEFAULT NULL,
  `save` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sampletable`
--

INSERT INTO `sampletable` (`name`, `password`, `points`, `p2`, `p3`, `p4`, `save`) VALUES
('rounak', 'sahaj@123', 3, 2, 1, 6, NULL),
('soumyajit', '12345', 1, 2, 5, 8, 3),
('soumyajit5', '12345', 3, 3, 1, 7, NULL),
('Utsab Pal', 'abcd', 3, 3, 3, 9, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `sampletable`
--
ALTER TABLE `sampletable`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
