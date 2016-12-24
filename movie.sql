-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2016 at 02:27 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `movie_id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_name` varchar(250) NOT NULL,
  `movie_img_path` varchar(250) NOT NULL,
  `movie_genre` varchar(50) NOT NULL,
  `movie_path` varchar(250) NOT NULL,
  `movie_trailer_path` varchar(250) NOT NULL,
  `movie_price` varchar(50) NOT NULL,
  `movie_rating` double NOT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_img_path`, `movie_genre`, `movie_path`, `movie_trailer_path`, `movie_price`, `movie_rating`) VALUES
(1, 'alouette', 'C:/wamp/www/projects/MovieTrailer/movies/Alouette.mp4', '', 'C:/wamp/www/projects/MovieTrailer/movies/Alouette.mp4', '', '', 0),
(2, 'BFG', 'images/m8.jpg', 'Family', '', 'GZ0Bey4YUGI', '50', 0),
(3, 'Central Intelligence', 'images/m9.jpg', 'Family', '', 's5YOhVa7GFM', '62', 0),
(4, 'Greater', 'images/m12.jpg', 'Family', '', 'v0Ow6lhvPNk', '45', 0),
(5, 'The Rezort', 'images/m16.jpg', 'Family', '', 'Hdos6JaXcBo', '80', 0),
(6, 'Light Bt Oceans', 'images/m7.jpg', 'Family', '', 'YSX-mpsVutQ', '30', 0),
(7, 'Dont think Twice', 'images/m10.jpg', 'Family', '', '9RFTpObS95U', '5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) NOT NULL,
  `user_mail` varchar(250) NOT NULL,
  `user_pswd` varchar(200) NOT NULL,
  `user_card` varchar(250) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_mail` (`user_mail`,`user_card`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_mail`, `user_pswd`, `user_card`) VALUES
(1, 'wetty', 'saadaouihamza8@gmail.com', 'wetty', '78997875'),
(2, 'user', 'hamza.saadaoui@enis.tn', 'test', '123456789');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
