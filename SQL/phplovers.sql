-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 03:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phplovers`
--

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `cat_name`, `created_at`) VALUES
(1, 'php', '0000-00-00 00:00:00'),
(2, 'js', '0000-00-00 00:00:00'),
(4, 'c-sharp', '2022-03-03 14:58:06');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(200) NOT NULL,
  `tag` varchar(200) NOT NULL,
  `category` int(22) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `author`, `tag`, `category`, `created_at`) VALUES
(6, 'title one', 'Seamlessly facilitate team driven growth strategies without high-payoff benefits. Dynamically empower diverse e-business rather than timely deliverables. Phosfluorescently leverage existing maintainable niche markets vis-a-vis resource maximizing human capital. Dramatically brand high-quality.', 'Mohamed', 'hell is real', 1, '0000-00-00 00:00:00'),
(7, 'title two', 'Seamlessly facilitate team driven growth strategies without high-payoff benefits. Dynamically empower diverse e-business rather than timely deliverables. Phosfluorescently leverage existing maintainable niche markets vis-a-vis resource maximizing human capital. Dramatically brand high-quality.', 'Ahmed', 'hell is here', 1, '0000-00-00 00:00:00'),
(8, 'title three now', 'Seamlessly facilitate team driven growth strategies without high-payoff benefits. Dynamically empower diverse e-business rather than timely deliverables. Phosfluorescently leverage existing maintainable niche markets vis-a-vis resource maximizing human capital. Dramatically brand high-quality.', 'Mahmoud', 'hell yeah', 1, '0000-00-00 00:00:00'),
(9, 'title four now', 'Seamlessly facilitate team driven growth strategies without high-payoff benefits. Dynamically empower diverse e-business rather than timely deliverables. Phosfluorescently leverage existing maintainable niche markets vis-a-vis resource maximizing human capital. Dramatically brand high-quality.', 'shaban mophamed', 'coding', 3, '0000-00-00 00:00:00'),
(11, 'post seven ', 'Intrinsicly administrate emerging total linkage through team building alignments. Efficiently maintain web-enabled quality vectors vis-a-vis client-based leadership. Assertively brand high standards in action items before e-business e-commerce. Collaboratively incentivize 24/7 vortals.', 'mohamed ', 'lol', 2, '2022-03-02 22:00:00'),
(12, '', '', '', '', 1, '2022-03-02 22:00:00'),
(13, '', '', '', '', 1, '2022-03-02 22:00:00'),
(14, 'post eight now', 'Proactively myocardinate cooperative vortals through goal-oriented interfaces. Objectively innovate synergistic testing procedures after equity invested networks. Distinctively drive viral materials for installed base content. Progressively network next-generation models for interdependent methods.', 'mophamed ', 'coding', 4, '2022-03-02 22:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
