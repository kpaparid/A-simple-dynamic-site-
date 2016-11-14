-- phpMyAdmin SQL Dump
-- version 4.2.13.1
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1:3306
-- Χρόνος δημιουργίας: 02 Ιαν 2015 στις 15:22:28
-- Έκδοση διακομιστή: 5.5.41
-- Έκδοση PHP: 5.4.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση δεδομένων: `ada`
--
CREATE DATABASE IF NOT EXISTS `ada` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ada`;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `comments`
--

CREATE TABLE `comments` (
  `email` text,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `comments`
--

INSERT INTO `comments` (`email`, `comment`, `date`) VALUES
('atolikas@csd.auth.gr', 'Awesome!', '2015-01-02'),
('', 'Great!', '2015-01-02'),
('kostas@hotmail.gr', 'Cool site!', '2015-01-02'),
('tanasis5@yahoo.gr', 'Nice job!', '2015-01-02'),
('', 'Ada is awesome!', '2015-01-02'),
('', 'Hi!', '2015-01-02'),
('', 'Bye!', '2015-01-02'),
('', '8th comment!', '2015-01-02'),
('', '9th comment!', '2015-01-02'),
('', '10th comment!', '2015-01-02'),
('', 'Page 2 comment!', '2015-01-02');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
