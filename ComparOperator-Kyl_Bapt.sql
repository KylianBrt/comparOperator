-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jun 07, 2019 at 02:41 PM
-- Server version: 10.3.13-MariaDB-1:10.3.13+maria~bionic
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ComparOperator-Kyl_Bapt`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(10) NOT NULL,
  `location` varchar(150) NOT NULL,
  `price` int(10) NOT NULL,
  `id_tour_operator` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `location`, `price`, `id_tour_operator`, `img`) VALUES
(1, 'Paris', 250, 1, 'Paris.jpg'),
(2, 'Paris', 320, 3, 'Paris.jpg'),
(3, 'Paris', 400, 4, 'Paris.jpg'),
(4, 'Paris', 435, 5, 'Paris.jpg'),
(5, 'Paris', 480, 6, 'Paris.jpg'),
(6, 'Ajaccio', 500, 1, 'Ajaccio.jpg'),
(7, 'Ajaccio', 520, 3, 'Ajaccio.jpg'),
(8, 'Ajaccio', 580, 4, 'Ajaccio.jpg'),
(9, 'Ajaccio', 620, 5, 'Ajaccio.jpg'),
(10, 'Ajaccio', 650, 6, 'Ajaccio.jpg'),
(11, 'Newyork', 850, 1, 'Newyork.jpg'),
(12, 'Newyork', 890, 3, 'Newyork.jpg'),
(13, 'Newyork', 915, 4, 'Newyork.jpg'),
(14, 'Newyork', 930, 5, 'Newyork.jpg'),
(15, 'Newyork', 980, 6, 'Newyork.jpg'),
(16, 'Tokyo', 1000, 1, 'Tokyo.jpg'),
(17, 'Tokyo', 1180, 3, 'Tokyo.jpg'),
(18, 'Tokyo', 1230, 4, 'Tokyo.jpg'),
(19, 'Tokyo', 1300, 5, 'Tokyo.jpg'),
(20, 'Tokyo', 1410, 6, 'Tokyo.jpg'),
(21, 'Sydney', 2000, 1, 'Sydney.jpg'),
(22, 'Sydney', 2140, 3, 'Sydney.jpg'),
(23, 'Sydney', 2250, 4, 'Sydney.jpg'),
(24, 'Sydney', 2360, 5, 'Sydney.jpg'),
(25, 'Sydney', 2470, 6, 'Sydney.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `message` varchar(250) NOT NULL,
  `author` varchar(150) NOT NULL,
  `id_tour_operator` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `message`, `author`, `id_tour_operator`) VALUES
(1, 'super club !', 'alex', 1),
(4, 'Niceluuuh !', 'Brutus\r\n', 3),
(5, 'hey hey hey ', 'Pitter', 4),
(6, 'Coucou', 'MissJirachi', 5),
(7, 'heeey salut tout le monde c\'st ', 'David lafarge pokemon', 6),
(8, 'BONSOIR PARIS', 'BAPTISTE', 6),
(9, 'aaaaa', 'retets', 6),
(10, 'nnandnazdazdazd', 'NOTRE PROJET', 5),
(12, 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaa', 4),
(13, 'jeazdauzdb', 'azdazd', 1),
(18, 'aaaaaaaaaaaaaa', 'aaaaaaaaaa', 5),
(21, 'J\'aime les frites et les merguez de chez clubmed éhéhé', 'Kylian', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tour_operators`
--

CREATE TABLE `tour_operators` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `grade` int(2) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `is_premium` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tour_operators`
--

INSERT INTO `tour_operators` (`id`, `name`, `grade`, `link`, `is_premium`) VALUES
(1, 'ClubMed', 5, 'https://www.clubmed.fr/', 0),
(3, 'Tui', 3, 'https://www.tui.fr/', 0),
(4, 'JetTours', 2, 'https://www.jettours.com/', 0),
(5, 'FRAM', 4, 'https://www.fram.fr/', 0),
(6, 'KappaClub', 5, 'https://www.kappaclub.fr/', 0),
(7, 'test', NULL, 'test', 0),
(8, 'test2', NULL, 'test', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_operator` (`id_tour_operator`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tour_operator` (`id_tour_operator`);

--
-- Indexes for table `tour_operators`
--
ALTER TABLE `tour_operators`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tour_operators`
--
ALTER TABLE `tour_operators`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `destinations`
--
ALTER TABLE `destinations`
  ADD CONSTRAINT `fk_operator` FOREIGN KEY (`id_tour_operator`) REFERENCES `tour_operators` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_tour_operator` FOREIGN KEY (`id_tour_operator`) REFERENCES `tour_operators` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
