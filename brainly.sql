-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 12:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brainly`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `acontent` text NOT NULL,
  `createat` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `userid`, `qid`, `acontent`, `createat`) VALUES
(5, 4, 8, 'jgj', '2024-01-20'),
(6, 4, 8, 'asep', '2024-01-20'),
(7, 4, 8, 'asep', '2024-01-20'),
(8, 4, 8, 'HAHAHAH', '2024-01-20'),
(9, 4, 3, 'GJ', '2024-01-20'),
(10, 4, 6, 'Adalah', '2024-01-20'),
(11, 3, 9, 'Karna Kamu YATIM', '2024-01-21'),
(12, 8, 9, 'WTF!!!!!!!!!!!!!!!!!', '2024-01-21'),
(13, 8, 8, 'KELASSSSSSSSSSSSSSSS\r\n', '2024-01-21'),
(14, 3, 5, 'matematika itu adalah bidang ilmu,yang mencakup studi tentang topik-topik seperti bilangan atau rumus dan struktur terkait , bangun ruang dan ruang tempat mereka berada, dan besaran serta perubahannya.\r\n', '2024-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `berlangganan`
--

CREATE TABLE `berlangganan` (
  `bid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `datebuy` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `tagid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qcontent` text NOT NULL,
  `createat` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `tagid`, `user_id`, `qcontent`, `createat`) VALUES
(3, 2, 3, '', '2024-01-20'),
(4, 1, 3, 'asdas', '2024-01-20'),
(5, 1, 3, 'Apa sih matematika itu?', '2024-01-20'),
(6, 1, 3, 'Apa sih matematika itu?', '2024-01-20'),
(7, 2, 3, 'Mengapa angin tidak punya ktp?', '2024-01-20'),
(8, 2, 3, 'Bapaku Mana😢😢', '2024-01-20'),
(9, 4, 3, 'Kenapa Harus Aku?😎', '2024-01-21'),
(10, 4, 8, 'Apakah kamu ingin berteman dengan danang?', '2024-01-21'),
(11, 2, 9, 'siapa itu bang hasan?', '2024-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tagid` int(11) NOT NULL,
  `nametag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tagid`, `nametag`) VALUES
(1, 'Matematika'),
(2, 'Ipa'),
(4, 'PKN'),
(5, 'SBMPTN'),
(6, 'Ujian Nasional'),
(7, 'PPkn'),
(8, 'IPS\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `profilepic` varchar(500) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `fullname`, `profilepic`) VALUES
(1, 'Asep', 'Asep@gmail.com', '$2y$10$N8Nj/cP5563OTI5QIlAUgOBjOXR/gBGuuO3aM9RhK7/MoIZOlocOq', 'Asep d', 'default.png'),
(2, 'a', 'a@gmail.com', '$2y$10$oXyUzyHN7EDDzsvHgFZqRuli4THOgMcqouJiEznqM7F6qELdkWV4S', 'a', 'default.png'),
(3, 'gioz', 'gioz@gmail.com', '$2y$10$yL9nV3ckoLmsxy05sKJE5.eK/U4L3v.TARz7R1emYkx8sAxOj1NGa', 'Lui Fauzan', 'default.png'),
(4, 'Asepp', 'Asep1@gmail.com', '$2y$10$EK/jvqe41EyNGs7YoslTo.DV/pnFk591umGUvzG.qkjB8AF57y8EG', 'Asep Hobah', 'default.png'),
(7, 'admin', 'admin@gmail.com', '$2y$10$Tuuf0sC5QVgrStGqEuOO6.v9dEts.RMoUnB7V8OtdTS2x6/VLyB8O', 'admin', 'default.png'),
(8, 'dani', 'dani@gmail.com', '$2y$10$nlIaea0c4ul0Wb0D.t0vkujE4szsODPQb2JTfiPSa36TaUaM2vwCq', 'dani cahyadi', 'default.png'),
(9, 'Dzaki', 'dzaki@gmail.com', '$2y$10$RkqOscJKLR8hFJF6vEs.Suuq.QWuvwmsY1y3HnLXIFM1DdTIUu0E6', 'Dzaki Rizqi', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `qid` (`qid`);

--
-- Indexes for table `berlangganan`
--
ALTER TABLE `berlangganan`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `aid` (`aid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`),
  ADD KEY `tagid` (`tagid`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tagid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `berlangganan`
--
ALTER TABLE `berlangganan`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `tagid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`qid`) REFERENCES `questions` (`qid`),
  ADD CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `berlangganan`
--
ALTER TABLE `berlangganan`
  ADD CONSTRAINT `berlangganan_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `berlangganan_ibfk_2` FOREIGN KEY (`aid`) REFERENCES `answers` (`aid`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`tagid`) REFERENCES `tags` (`tagid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
