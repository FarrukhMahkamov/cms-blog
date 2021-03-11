-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 11, 2021 at 07:37 AM
-- Server version: 5.7.29
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ownloc`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(404) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(27, 'IOS'),
(28, 'Android'),
(29, 'Ruby'),
(30, 'Kotlin'),
(31, 'Farruhe');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) DEFAULT NULL,
  `comment_author` varchar(303) DEFAULT NULL,
  `comment_email` varchar(303) DEFAULT NULL,
  `comment_content` text,
  `comment_status` varchar(303) DEFAULT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(4, 10, 'Sandra', 'example@gmail.com', '          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laborum molestiae soluta at voluptate consequatur cumque, quae similique ea animi voluptatibus rem, consectetur porro doloremque maiores? Distinctio laborum maiores sapiente.\r\n', 'approved', '2020-12-23'),
(5, 11, 'Tohirbek', 'Tohirbek@gmail.com', '          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laborum molestiae soluta at voluptate consequatur cumque, quae similique ea animi voluptatibus rem\r\n', 'unapproved', '2020-12-23'),
(7, 12, 'John', 'john@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laborum molestiae soluta at voluptate consequatur cumque, quae similique ea animi voluptatibus rem, consectetur porro doloremque maioresLorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laborum molestiae soluta at voluptate consequatur cumque, quae similique ea animi voluptatibus rem, consectetur porro doloremque maiores', 'approved', '2020-12-23'),
(8, 10, 'Shady', 'shady@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'approved', '2020-12-23'),
(10, 12, 'Marshal', 'marshal@gmail.com', 'Veniam laborum molestiae soluta at voluptate consequatur cumque, quae similique ea animi voluptatibus rem, consectetur porro doloremque maiores? Distinctio laborum maiores sapiente.', 'approved', '2021-01-03'),
(11, 12, 'Marshal', 'marshal@gmail.com', 'Veniam laborum molestiae soluta at voluptate consequatur cumque, quae similique ea animi voluptatibus rem, consectetur porro doloremque maiores? Distinctio laborum maiores sapiente.', 'unupproved', '2021-01-03'),
(12, 11, 'example person', 'example@gmail.com', 'asdasdasdasdasdasd ad asd asd asd asdasdas dasd asd asd adasd adasd ad asd ad ad ad ad ass', 'approved', '2021-01-06'),
(13, 11, 'example person', 'example@gmail.com', 'asdasdasdasdasdasd ad asd asd asd asdasdas dasd asd asd adasd adasd ad asd ad ad ad ad ass', 'unupproved', '2021-01-06'),
(14, 11, 'example person', 'example@gmail.com', 'asdasdasdasdasdasd ad asd asd asd asdasdas dasd asd asd adasd adasd ad asd ad ad ad ad ass', 'unupproved', '2021-01-06'),
(15, 11, 'example person', 'example@gmail.com', 'asdasdasdasdasdasd ad asd asd asd asdasdas dasd asd asd adasd adasd ad asd ad ad ad ad ass', 'unupproved', '2021-01-06'),
(17, 11, 'example person', 'example@gmail.com', 'asdasdasdasdasdasd ad asd asd asd asdasdas dasd asd asd adasd adasd ad asd ad ad ad ad ass', 'unupproved', '2021-01-06'),
(18, 11, 'example person', 'example@gmail.com', 'asdasdasdasdasdasd ad asd asd asd asdasdas dasd asd asd adasd adasd ad asd ad ad ad ad ass', 'unupproved', '2021-01-06'),
(19, 10, 'Doniyor', 'doniyor@gmail.com', 'asdasdasdasdasdasdwe2t 2q4 tq4t q24t 2qt q3ehsfgsha yT13gaethsrh a42y3qahetr', 'unupproved', '2021-01-06'),
(20, 10, 'Faruubbek', 'farr@faf.cm', 'salkdnalknsdlkaskdnl', 'approved', '2021-01-13'),
(21, 10, 'Faruubbek', 'farr@faf.cm', 'salkdnalknsdlkaskdnl', 'unupproved', '2021-01-13'),
(22, 12, 'Uzunchag', 'umid@gmail.com', 'm dolor sit amet consectetur adipisicing elit. Veniam laborum molestiae soluta at voluptate consequatur cumque, quae similique ea animi voluptatibus rem, consectetur porro doloremque maioresLorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laborum molestiae soluta at voluptate consequatur cumque, quae similique ea animi voluptatibus rem, consectetur porro doloremque maiores', 'approved', '2021-01-14'),
(23, 12, 'Uzunchag', 'umid@gmail.com', 'm dolor sit amet consectetur adipisicing elit. Veniam laborum molestiae soluta at voluptate consequatur cumque, quae similique ea animi voluptatibus rem, consectetur porro doloremque maioresLorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laborum molestiae soluta at voluptate consequatur cumque, quae similique ea animi voluptatibus rem, consectetur porro doloremque maiores', 'unupproved', '2021-01-14'),
(24, 16, '', '', 'Salmaaaa', 'unupproved', '2021-02-05'),
(25, 16, 'Farruhbek', 'umid@gmail.com', 'salmaa', 'unupproved', '2021-02-05'),
(26, 17, 'Farruhbek', 'example@gmail.com', 'Gap yooq zor boldi endi men ham shu moshinadan olaman.....', 'approved', '2021-02-07'),
(27, 20, 'Uliugbek', 'Tohirbek@gmail.com', 'Zor chiqibdi rahmat post uchun', 'approved', '2021-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) DEFAULT NULL,
  `post_image` varchar(303) DEFAULT NULL,
  `post_date` date DEFAULT NULL,
  `post_title` varchar(303) DEFAULT NULL,
  `post_content` text,
  `post_author` varchar(303) DEFAULT NULL,
  `post_comment_count` int(255) DEFAULT NULL,
  `post_tags` varchar(303) DEFAULT NULL,
  `post_status` varchar(303) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_image`, `post_date`, `post_title`, `post_content`, `post_author`, `post_comment_count`, `post_tags`, `post_status`) VALUES
(10, 27, 'japan.jpg', '2021-02-05', 'why is it important to be healthyqweqweqweqweqwrwqergwebwrbwtr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit', 'Slim Shady', 7, 'Health', 'Active'),
(11, 28, 'chair.jpg', '2020-12-23', 'Example post number 2', '          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laborum molestiae soluta at voluptate consequatur cumque, quae similique ea animi voluptatibus rem, consectetur porro doloremque maiores? Distinctio laborum maiores sapiente.\r\n', 'Slim Shady', 4, 'JS ', 'unapproved'),
(12, 27, 'cuba.jpg', '2020-12-23', 'Why python is so good?', '          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laborum molestiae soluta at voluptate consequatur cumque, quae similique ea animi voluptatibus rem, consectetur porro doloremque maiores? Distinctio laborum maiores sapiente.\r\n          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laborum molestiae soluta at voluptate consequatur cumque, quae similique ea animi voluptatibus rem, consectetur porro doloremque maiores? Distinctio laborum maiores sapiente.\r\n          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laborum molestiae soluta at voluptate consequatur cumque, quae similique ea animi voluptatibus rem, consectetur porro doloremque maiores? Distinctio laborum maiores sapiente.\r\n          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laborum molestiae soluta at voluptate consequatur cumque, quae similique ea animi voluptatibus rem, consectetur porro doloremque maiores? Distinctio laborum maiores sapiente.\r\n', 'Faruh Mahkamov', 6, 'Python', 'aprroved'),
(13, 29, 'gepard.jpg', '2021-01-05', 'Faruh Makahmov', 'modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Otabek  Ahmadjonov', 4, 'codemy', 'published'),
(15, 28, 'hair.jpg', '2021-02-05', 'asdas', 'Hello', 'Slim Shady', NULL, 'asdas', 'Active'),
(16, 30, 'gepard.jpg', '2021-02-05', 'Example post number 7', 'lorem ipsum dolor sit ammet', 'Slim Shady', NULL, 'Hexample', 'published'),
(17, 29, 'cuba.jpg', '2021-02-07', 'teslo 3 model Uzbekistonda', 'Asssolme ALeykum tesla modeli endlikda uzbekistonda', 'Farruhbek Mahkamjonov', NULL, 'tesl', 'published'),
(18, 27, 'japan.jpg', '2021-02-23', 'wewqeqwe13tagt', 'qwefqewfqewfqewf', 'afdasdfqf qf wqef', NULL, 'weqfqwefqew', 'qefqwefqewf'),
(19, 27, 'japan.jpg', '2021-02-23', 'mayoqHub', 'lorem ipsum dolor sit ammet', 'Faruh Mahkamov', NULL, 'asdas', 'activeasa'),
(20, 29, 'cuba.jpg', '2021-03-03', 'MayoqHub', 'Lorem ipsum dolor sit ammt', 'Faruh Mahkamov', NULL, 'asdas', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_password` varchar(555) NOT NULL,
  `user_firstname` varchar(555) NOT NULL,
  `user_lastname` varchar(555) NOT NULL,
  `user_email` varchar(555) NOT NULL,
  `user_image` text,
  `user_role` varchar(555) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `randSalt` varchar(555) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `date`, `randSalt`) VALUES
(1, 'John', '5656', 'John', 'Wick', 'johnwick@gmail.com', '', 'subscriber', NULL, ''),
(4, 'Mahkamov', 'akdmarfnfeem', 'Farruhbek', 'Mahkamov', 'farruhmahkamov@gmail.com', NULL, 'admin', NULL, NULL),
(5, 'rustikasdasda', '916651625asdasdasd', 'Gofurasda', 'Gopporovasdasdas', 'rustikasdasdas@gmail.com', NULL, 'admin', '2021-03-09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
