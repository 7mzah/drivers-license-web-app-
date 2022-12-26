-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 26, 2022 at 06:40 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DquizApp`
--

-- --------------------------------------------------------

--
-- Table structure for table `challengingchoices`
--

CREATE TABLE `challengingchoices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `challengingchoices`
--

INSERT INTO `challengingchoices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 0, 'first answer'),
(2, 1, 0, 'second answer'),
(3, 1, 1, 'third answer'),
(4, 1, 0, 'fourth answer');

-- --------------------------------------------------------

--
-- Table structure for table `challengingquestions`
--

CREATE TABLE `challengingquestions` (
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `challengingquestions`
--

INSERT INTO `challengingquestions` (`question_number`, `text`) VALUES
(1, 'first challenging question');

-- --------------------------------------------------------

--
-- Table structure for table `easychoices`
--

CREATE TABLE `easychoices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `easychoices`
--

INSERT INTO `easychoices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 1, '60 mph'),
(2, 1, 0, '70 mph'),
(3, 1, 0, '80 mph'),
(4, 1, 0, '90 mph'),
(5, 2, 1, '30 mph'),
(6, 2, 0, '40 mph'),
(7, 2, 0, '50 mph'),
(8, 2, 0, '60 mph'),
(9, 3, 0, 'Wait for one hour after your last drink before you drive home.'),
(10, 3, 1, 'Organise before hand a way of getting home where you are not the driver.'),
(11, 3, 0, 'After you have had a few drinks, start to think about how you will get home.'),
(12, 4, 0, 'Exercising and drinking black coffee.'),
(13, 4, 0, 'Buying a breathalyser (alcohol measuring instrument).'),
(14, 4, 1, 'Not drinking any alcohol.'),
(15, 5, 1, 'Read the label and confirm they are not prescription drugs and there are no special warnings on the label.'),
(16, 5, 0, 'Ask your friend if the tablets have affected them.'),
(17, 5, 0, 'Drink a large glass of milk because this reduces the adverse effects of medicines and drugs.'),
(18, 6, 0, 'Pull over and wait till it stops raining.'),
(19, 6, 1, 'Slow down to a speed that suits the conditions better.'),
(20, 6, 0, 'Keep going at the same speed because that\'s how fast the signs tell you to drive.');

-- --------------------------------------------------------

--
-- Table structure for table `easyquestions`
--

CREATE TABLE `easyquestions` (
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `easyquestions`
--

INSERT INTO `easyquestions` (`question_number`, `text`) VALUES
(1, 'The speed limit in rural areas is: '),
(2, 'The speed limit in residential areas is: '),
(3, 'If you are going out and going to drink alcohol, the best way to avoid having to drink and drive is to:'),
(4, 'What is the safest way to stay under the legal alcohol limit?'),
(5, 'You want to drive your car but you have a very bad headache. A friend gives you some of their headache tablets to kill the pain. What should you do before you take these tablets?'),
(6, 'You are driving in busy traffic in an 80 km/h zone. It begins to rain lightly. What should you do?');

-- --------------------------------------------------------

--
-- Table structure for table `moderatechoices`
--

CREATE TABLE `moderatechoices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `moderatechoices`
--

INSERT INTO `moderatechoices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 0, 'Give a signal after moving off'),
(2, 1, 1, 'Look around before moving off'),
(3, 1, 0, 'Look around after moving off'),
(4, 1, 0, 'Use the exterior mirrors only');

-- --------------------------------------------------------

--
-- Table structure for table `moderatequestions`
--

CREATE TABLE `moderatequestions` (
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `moderatequestions`
--

INSERT INTO `moderatequestions` (`question_number`, `text`) VALUES
(1, 'What should you do when you move off from behind a parked car?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `challengingchoices`
--
ALTER TABLE `challengingchoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_key` (`question_number`);

--
-- Indexes for table `challengingquestions`
--
ALTER TABLE `challengingquestions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `easychoices`
--
ALTER TABLE `easychoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_number` (`question_number`);

--
-- Indexes for table `easyquestions`
--
ALTER TABLE `easyquestions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `moderatechoices`
--
ALTER TABLE `moderatechoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_key_for_question_number` (`question_number`);

--
-- Indexes for table `moderatequestions`
--
ALTER TABLE `moderatequestions`
  ADD PRIMARY KEY (`question_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `challengingchoices`
--
ALTER TABLE `challengingchoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `easychoices`
--
ALTER TABLE `easychoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `moderatechoices`
--
ALTER TABLE `moderatechoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `challengingchoices`
--
ALTER TABLE `challengingchoices`
  ADD CONSTRAINT `foreign_key` FOREIGN KEY (`question_number`) REFERENCES `challengingquestions` (`question_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `easychoices`
--
ALTER TABLE `easychoices`
  ADD CONSTRAINT `question_number` FOREIGN KEY (`question_number`) REFERENCES `easyquestions` (`question_number`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `moderatechoices`
--
ALTER TABLE `moderatechoices`
  ADD CONSTRAINT `foreign_key_for_question_number` FOREIGN KEY (`question_number`) REFERENCES `moderatequestions` (`question_number`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
