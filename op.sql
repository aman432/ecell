-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2016 at 03:18 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecell`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` varchar(100) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `heading` varchar(300) NOT NULL,
  `tags` varchar(300) NOT NULL,
  `text` text NOT NULL,
  `timestamp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `uid`, `heading`, `tags`, `text`, `timestamp`) VALUES
('4aac5e1fdc45220fbdb45a5338266dee', 'ixReJZA-rI', 'a', 'sdc', '<p>Add Something Interesting and useful here!</p>', '1478393137'),
('8d385abdd48630ac667cef1989925e41', 'ixReJZA-rI', 'dad', '#abc', '<p>Add Something Interesting and useful here!</p>', '1478393113'),
('da28206716233e6e245aa5fdb31c3a74', 'YfmfO4CZpM', 'dad', 'yui', '<p>Add Something Interesting and useful here!</p>', '1478420731'),
('fdc0ae37f49ba8047a2e6773492ec049', 'ixReJZA-rI', 's', 'trt', '<p>Add <strong>Something</strong> Interesting and useful here!</p>', '1478623738');

-- --------------------------------------------------------

--
-- Table structure for table `likers`
--

CREATE TABLE `likers` (
  `blog_id` varchar(100) NOT NULL,
  `likers_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likers`
--

INSERT INTO `likers` (`blog_id`, `likers_id`) VALUES
('4aac5e1fdc45220fbdb45a5338266dee', 'YfmfO4CZpM'),
('888d10ffc6a1fe0a500c0bf5e9142af7', 'ixReJZA-rI'),
('8d385abdd48630ac667cef1989925e41', 'YfmfO4CZpM'),
('fdc0ae37f49ba8047a2e6773492ec049', 'ixReJZA-rI'),
('undefined', 'ixReJZA-rI');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `blog_id` varchar(100) NOT NULL,
  `likes` int(100) NOT NULL,
  `dislikes` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`blog_id`, `likes`, `dislikes`) VALUES
('4aac5e1fdc45220fbdb45a5338266dee', 1, 1),
('8d385abdd48630ac667cef1989925e41', 1, 1),
('888d10ffc6a1fe0a500c0bf5e9142af7', 1, 0),
('da28206716233e6e245aa5fdb31c3a74', 0, 1),
('', 0, 1),
('undefined', 1, 0),
('[object HTMLInputElement]', 0, 1),
('fdc0ae37f49ba8047a2e6773492ec049', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `unlikers`
--

CREATE TABLE `unlikers` (
  `blog_id` varchar(100) NOT NULL,
  `unlikers_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unlikers`
--

INSERT INTO `unlikers` (`blog_id`, `unlikers_id`) VALUES
('', 'ixReJZA-rI'),
('4aac5e1fdc45220fbdb45a5338266dee', 'ixReJZA-rI'),
('8d385abdd48630ac667cef1989925e41', 'ixReJZA-rI'),
('da28206716233e6e245aa5fdb31c3a74', 'ixReJZA-rI'),
('[object HTMLInputElement]', 'ixReJZA-rI');

-- --------------------------------------------------------

--
-- Table structure for table `userl`
--

CREATE TABLE `userl` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `picture_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userl`
--

INSERT INTO `userl` (`id`, `oauth_provider`, `oauth_uid`, `fname`, `lname`, `email`, `location`, `country`, `picture_url`, `profile_url`, `created`, `modified`) VALUES
(1, 'linkedin', 'ixReJZA-rI', 'Aman', 'Bharadwaj', 'amanzoot@gmail.com', 'Dehra Dun Area, India', 'in', 'https://media.licdn.com/mpr/mprx/0_0eo-q-dnP-ouX37azJttx-_nK_zxGhlmrJtyAbmn-BoOGrGCzeYp0hfnvboxFP11PJ-prvh90qHYTX81KRfap63VsqH0TXQ7zRfAcFqclzjPw-g1MEMxBPV6VT-fHXAYyZwOKzHs74u', 'https://www.linkedin.com/in/aman-bharadwaj-972b4b103', '2016-10-13 22:25:11', '2016-11-08 05:17:25'),
(2, 'linkedin', 'YfmfO4CZpM', 'Devendra', 'Sharma', 'devendras2001@yahoo.co.in', 'Dehra Dun Area, India', 'in', 'https://media.licdn.com/mpr/mprx/0_tmY0ctNEzBlTacrivuoAJLSwrqLhmXTi4mH0-QCwAhVTmqKttEQYx8Jw9BNTIzr7NZHAnz9Iprw3DhROZjUi0QcFMrw8DhqaZjUpqbGotAY2F9ftquDtN12RJ5lKkh_0AY01Pv_i5VE', 'https://www.linkedin.com/in/devendra-sharma-b05a9580', '2016-11-04 19:59:57', '2016-11-06 09:24:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `likers`
--
ALTER TABLE `likers`
  ADD PRIMARY KEY (`blog_id`,`likers_id`);

--
-- Indexes for table `unlikers`
--
ALTER TABLE `unlikers`
  ADD PRIMARY KEY (`blog_id`,`unlikers_id`);

--
-- Indexes for table `userl`
--
ALTER TABLE `userl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userl`
--
ALTER TABLE `userl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
