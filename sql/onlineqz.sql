-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2023 at 08:20 PM
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
-- Database: `onlineqz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `atn_quiz`
--

CREATE TABLE `atn_quiz` (
  `id` int(11) NOT NULL,
  `quize_code` text NOT NULL,
  `user_tocken` text NOT NULL,
  `qstn_id` int(11) NOT NULL,
  `attended_option` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `atn_quiz`
--

INSERT INTO `atn_quiz` (`id`, `quize_code`, `user_tocken`, `qstn_id`, `attended_option`) VALUES
(1, '20230628637', 'ya29.a0AWY7CkmQLXWpPjmokoAaMYfplbkyHvneo3yn_1VBtXvry1n6saxwzaWZuP7IPube2Afmf4YBK_xMuI0C1cyEdblVg15RLzJyxhblA08MHfagsGzxJKnq7PX6Wi-7dLqR0N1BgRE4n4AL3aVmCszTRSV8Enez1QaCgYKAX0SARMSFQG1tDrpGufqQ3mioRW2LjBwlammOg0165', 1, 2),
(2, '20230628637', 'ya29.a0AWY7CkmQLXWpPjmokoAaMYfplbkyHvneo3yn_1VBtXvry1n6saxwzaWZuP7IPube2Afmf4YBK_xMuI0C1cyEdblVg15RLzJyxhblA08MHfagsGzxJKnq7PX6Wi-7dLqR0N1BgRE4n4AL3aVmCszTRSV8Enez1QaCgYKAX0SARMSFQG1tDrpGufqQ3mioRW2LjBwlammOg0165', 2, 2),
(3, '20230628637', 'ya29.a0AWY7CkmQLXWpPjmokoAaMYfplbkyHvneo3yn_1VBtXvry1n6saxwzaWZuP7IPube2Afmf4YBK_xMuI0C1cyEdblVg15RLzJyxhblA08MHfagsGzxJKnq7PX6Wi-7dLqR0N1BgRE4n4AL3aVmCszTRSV8Enez1QaCgYKAX0SARMSFQG1tDrpGufqQ3mioRW2LjBwlammOg0165', 3, 2),
(4, '20230628637', 'ya29.a0AWY7CkmQLXWpPjmokoAaMYfplbkyHvneo3yn_1VBtXvry1n6saxwzaWZuP7IPube2Afmf4YBK_xMuI0C1cyEdblVg15RLzJyxhblA08MHfagsGzxJKnq7PX6Wi-7dLqR0N1BgRE4n4AL3aVmCszTRSV8Enez1QaCgYKAX0SARMSFQG1tDrpGufqQ3mioRW2LjBwlammOg0165', 5, 1),
(5, '20230628637', 'ya29.a0AWY7CkmQLXWpPjmokoAaMYfplbkyHvneo3yn_1VBtXvry1n6saxwzaWZuP7IPube2Afmf4YBK_xMuI0C1cyEdblVg15RLzJyxhblA08MHfagsGzxJKnq7PX6Wi-7dLqR0N1BgRE4n4AL3aVmCszTRSV8Enez1QaCgYKAX0SARMSFQG1tDrpGufqQ3mioRW2LjBwlammOg0165', 4, 2),
(6, '20230628637', 'ya29.a0AWY7CkmQLXWpPjmokoAaMYfplbkyHvneo3yn_1VBtXvry1n6saxwzaWZuP7IPube2Afmf4YBK_xMuI0C1cyEdblVg15RLzJyxhblA08MHfagsGzxJKnq7PX6Wi-7dLqR0N1BgRE4n4AL3aVmCszTRSV8Enez1QaCgYKAX0SARMSFQG1tDrpGufqQ3mioRW2LjBwlammOg0165', 6, 2),
(7, '20230628637', 'ya29.a0AWY7CkmQLXWpPjmokoAaMYfplbkyHvneo3yn_1VBtXvry1n6saxwzaWZuP7IPube2Afmf4YBK_xMuI0C1cyEdblVg15RLzJyxhblA08MHfagsGzxJKnq7PX6Wi-7dLqR0N1BgRE4n4AL3aVmCszTRSV8Enez1QaCgYKAX0SARMSFQG1tDrpGufqQ3mioRW2LjBwlammOg0165', 8, 2),
(8, '20230628637', 'ya29.a0AWY7CkmQLXWpPjmokoAaMYfplbkyHvneo3yn_1VBtXvry1n6saxwzaWZuP7IPube2Afmf4YBK_xMuI0C1cyEdblVg15RLzJyxhblA08MHfagsGzxJKnq7PX6Wi-7dLqR0N1BgRE4n4AL3aVmCszTRSV8Enez1QaCgYKAX0SARMSFQG1tDrpGufqQ3mioRW2LjBwlammOg0165', 7, 1),
(9, '20230628637', 'ya29.a0AWY7CkmQLXWpPjmokoAaMYfplbkyHvneo3yn_1VBtXvry1n6saxwzaWZuP7IPube2Afmf4YBK_xMuI0C1cyEdblVg15RLzJyxhblA08MHfagsGzxJKnq7PX6Wi-7dLqR0N1BgRE4n4AL3aVmCszTRSV8Enez1QaCgYKAX0SARMSFQG1tDrpGufqQ3mioRW2LjBwlammOg0165', 9, 1),
(10, '20230628637', 'ya29.a0AWY7CkmQLXWpPjmokoAaMYfplbkyHvneo3yn_1VBtXvry1n6saxwzaWZuP7IPube2Afmf4YBK_xMuI0C1cyEdblVg15RLzJyxhblA08MHfagsGzxJKnq7PX6Wi-7dLqR0N1BgRE4n4AL3aVmCszTRSV8Enez1QaCgYKAX0SARMSFQG1tDrpGufqQ3mioRW2LjBwlammOg0165', 10, 2),
(11, '2023062872', 'ya29.a0AWY7Ckm1fHod6qpPqmVyipVcIrzgUpf6lCxp-QPZzslfTNoNC9tZWvQC4NM_7Z8trzGa9-N-EzJu3_7zx_SbCnJ3-tKSCfX0h7RQ42NtKGqXHuvBp4Ekl0eC2X6RWmfBGzauCU9Bakxlj2gERCSDEPrM89evQgaCgYKAR8SARMSFQG1tDrptAndiGN9L5Qgq0zrXPTtdg0165', 1, 2),
(12, '2023062872', 'ya29.a0AWY7Ckm1fHod6qpPqmVyipVcIrzgUpf6lCxp-QPZzslfTNoNC9tZWvQC4NM_7Z8trzGa9-N-EzJu3_7zx_SbCnJ3-tKSCfX0h7RQ42NtKGqXHuvBp4Ekl0eC2X6RWmfBGzauCU9Bakxlj2gERCSDEPrM89evQgaCgYKAR8SARMSFQG1tDrptAndiGN9L5Qgq0zrXPTtdg0165', 2, 2),
(13, '2023062872', 'ya29.a0AWY7Ckm1fHod6qpPqmVyipVcIrzgUpf6lCxp-QPZzslfTNoNC9tZWvQC4NM_7Z8trzGa9-N-EzJu3_7zx_SbCnJ3-tKSCfX0h7RQ42NtKGqXHuvBp4Ekl0eC2X6RWmfBGzauCU9Bakxlj2gERCSDEPrM89evQgaCgYKAR8SARMSFQG1tDrptAndiGN9L5Qgq0zrXPTtdg0165', 3, 2),
(14, '2023062872', 'ya29.a0AWY7Ckm1fHod6qpPqmVyipVcIrzgUpf6lCxp-QPZzslfTNoNC9tZWvQC4NM_7Z8trzGa9-N-EzJu3_7zx_SbCnJ3-tKSCfX0h7RQ42NtKGqXHuvBp4Ekl0eC2X6RWmfBGzauCU9Bakxlj2gERCSDEPrM89evQgaCgYKAR8SARMSFQG1tDrptAndiGN9L5Qgq0zrXPTtdg0165', 5, 1),
(15, '2023062872', 'ya29.a0AWY7Ckm1fHod6qpPqmVyipVcIrzgUpf6lCxp-QPZzslfTNoNC9tZWvQC4NM_7Z8trzGa9-N-EzJu3_7zx_SbCnJ3-tKSCfX0h7RQ42NtKGqXHuvBp4Ekl0eC2X6RWmfBGzauCU9Bakxlj2gERCSDEPrM89evQgaCgYKAR8SARMSFQG1tDrptAndiGN9L5Qgq0zrXPTtdg0165', 4, 2),
(16, '2023062872', 'ya29.a0AWY7Ckm1fHod6qpPqmVyipVcIrzgUpf6lCxp-QPZzslfTNoNC9tZWvQC4NM_7Z8trzGa9-N-EzJu3_7zx_SbCnJ3-tKSCfX0h7RQ42NtKGqXHuvBp4Ekl0eC2X6RWmfBGzauCU9Bakxlj2gERCSDEPrM89evQgaCgYKAR8SARMSFQG1tDrptAndiGN9L5Qgq0zrXPTtdg0165', 6, 2),
(17, '2023062872', 'ya29.a0AWY7Ckm1fHod6qpPqmVyipVcIrzgUpf6lCxp-QPZzslfTNoNC9tZWvQC4NM_7Z8trzGa9-N-EzJu3_7zx_SbCnJ3-tKSCfX0h7RQ42NtKGqXHuvBp4Ekl0eC2X6RWmfBGzauCU9Bakxlj2gERCSDEPrM89evQgaCgYKAR8SARMSFQG1tDrptAndiGN9L5Qgq0zrXPTtdg0165', 8, 2),
(18, '2023062872', 'ya29.a0AWY7Ckm1fHod6qpPqmVyipVcIrzgUpf6lCxp-QPZzslfTNoNC9tZWvQC4NM_7Z8trzGa9-N-EzJu3_7zx_SbCnJ3-tKSCfX0h7RQ42NtKGqXHuvBp4Ekl0eC2X6RWmfBGzauCU9Bakxlj2gERCSDEPrM89evQgaCgYKAR8SARMSFQG1tDrptAndiGN9L5Qgq0zrXPTtdg0165', 7, 1),
(19, '2023062872', 'ya29.a0AWY7Ckm1fHod6qpPqmVyipVcIrzgUpf6lCxp-QPZzslfTNoNC9tZWvQC4NM_7Z8trzGa9-N-EzJu3_7zx_SbCnJ3-tKSCfX0h7RQ42NtKGqXHuvBp4Ekl0eC2X6RWmfBGzauCU9Bakxlj2gERCSDEPrM89evQgaCgYKAR8SARMSFQG1tDrptAndiGN9L5Qgq0zrXPTtdg0165', 9, 1),
(20, '2023062872', 'ya29.a0AWY7Ckm1fHod6qpPqmVyipVcIrzgUpf6lCxp-QPZzslfTNoNC9tZWvQC4NM_7Z8trzGa9-N-EzJu3_7zx_SbCnJ3-tKSCfX0h7RQ42NtKGqXHuvBp4Ekl0eC2X6RWmfBGzauCU9Bakxlj2gERCSDEPrM89evQgaCgYKAR8SARMSFQG1tDrptAndiGN9L5Qgq0zrXPTtdg0165', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

CREATE TABLE `quiz_questions` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL,
  `option4` text NOT NULL,
  `right_answer` int(11) NOT NULL,
  `question_level` int(11) NOT NULL,
  `topic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`id`, `title`, `option1`, `option2`, `option3`, `option4`, `right_answer`, `question_level`, `topic`) VALUES
(1, 'Who won the 10th Italian Open title in 2021?', 'Novack Djokovic', 'Rafael Nadal', 'Dominic Thiem', 'Stefanos Tsitsipas', 2, 1, 1),
(2, 'India won Thomas Cup on May 15, 2022, by defeating whom?', 'Indonesia', 'Malaysia', 'China', 'Denmark', 1, 1, 1),
(3, 'Only three countries have won the Women’s Rugby World Cup- New Zealand, England, and who?', 'USA', 'Argentina', 'Romania', 'Georgia', 1, 1, 1),
(4, 'In cricket which of the following fielding positions is behind the batsman?', 'Mid-wicket', 'First slip', 'Cover', 'Mid-off', 2, 2, 1),
(5, 'Novak Djokovic began the Wimbledon fortnight as the world No. 3 player. What is his current position in the world rankings?', 'No 1', 'No 3', 'No 7', 'No 9', 3, 1, 1),
(6, 'Who became the first player of Indian origin to play in an NBA game?', 'Sim Bhullar', 'Palpreet Singh', 'Amjyot Singh', 'Satnam Singh', 1, 2, 1),
(7, 'Name the first cricket to hit six sixes in an over in One Day International (50-50) cricket?', 'Yuvraj Singh', 'Herschelle Gibs', 'Ravi Shastri', 'Leo Carter', 2, 3, 1),
(8, 'Ashwini ponnappa is associated with which game?', 'Volleyball', 'Badminton', 'Tennis', 'Football', 2, 2, 1),
(9, 'In which year did Roger Federer win his first Wimbledon title?', '1997', '1998', '2001', '2003', 4, 3, 1),
(10, 'Name the 1st woman cricketer to appear at 6 Cricket World Cups?', 'Mithali Raj', 'Smriti Mandhana.', 'Harmanpreet Kaur', 'Jhulan Goswami.', 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `title` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `title`) VALUES
(1, 'Sports'),
(2, 'Science & Technology'),
(3, 'Arts,'),
(4, 'Politics');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atn_quiz`
--
ALTER TABLE `atn_quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `atn_quiz`
--
ALTER TABLE `atn_quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
