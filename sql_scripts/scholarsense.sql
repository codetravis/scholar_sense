-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2014 at 09:26 AM
-- Server version: 5.5.35
-- PHP Version: 5.3.10-1ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scholarsense`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `edu_inst` varchar(255) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `bio` text,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`user_id`, `name`, `edu_inst`, `degree`, `bio`) VALUES
(2, 'Travis Cooper', 'Mercer University', 'B.S. Computer Science', 'I am the lead developer of the Scholar Sense project.         '),
(5, 'Test User', 'fg', 'rfgt', 'rfgsg         '),
(12, 'test user', 'none', 'none', 'no bio for this test user         '),
(11, 'Michael Dean', 'Mercer University', '', '         ');

-- --------------------------------------------------------

--
-- Table structure for table `like_to_help`
--

CREATE TABLE IF NOT EXISTS `like_to_help` (
  `user_id` int(11) DEFAULT NULL,
  `proj_id` int(11) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `like_to_help`
--

INSERT INTO `like_to_help` (`user_id`, `proj_id`, `message`) VALUES
(NULL, NULL, 'i would like to help            '),
(NULL, NULL, 'I have some limited experience in the field and would like to get more experience by contributing to the project.            '),
(NULL, NULL, 'I have some limited experience in the field and would like to get more experience by contributing to the project.            ');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `proj_id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about` text,
  PRIMARY KEY (`proj_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`proj_id`, `owner_id`, `name`, `about`) VALUES
(1, 2, 'TEST', 'This is a test project to discover if I am doing things right'),
(2, 2, 'testing', 'we are testing'),
(3, 2, 'Fixing things', 'Working on basic functionality and bugs in system			'),
(4, 2, 'Hey There', 'testing new insertion script			'),
(5, 8, 'WorkWork', 'working hard to get this finished'),
(6, 8, 'test project 2', 'this is another test project for the new project creation page			'),
(7, 11, 'Backgrounds of DRU Presidents', '				'),
(8, 8, 'making another new project', 'this is a new test project that is for testing from new dev setup				');

-- --------------------------------------------------------

--
-- Table structure for table `project_member`
--

CREATE TABLE IF NOT EXISTS `project_member` (
  `user_id` int(11) DEFAULT NULL,
  `proj_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verify` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `registered` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `verify`, `type`, `registered`) VALUES
(8, 'admin@ss.com', 'rounds=803610$SS7uEVJe$tV1Ju.4Q49qqVCENb4Hmjjc3bSUdQ2cNkr9QhaaEuKcd1nGSVXzoIE10QDCuvXErGg5gcqW.RYRTKZGnVh5EY0', 1, 0, 1),
(2, 'tacooper3x@aol.com', 'rounds=405880$82NOzk3X$iWkFyysJvQOHA94SBqFS/tjMZNFzKrgeQnLCSb2VDiklcevrt7m9f357Uy7xO64WlW0jd50p0HAAVoAMNi5ZY/', 1, 1, 1),
(5, 'test@test.com', 'rounds=920260$58Lw4qdj$XPl1iM5jYQcSrlENozrOeNTS.4BrJPBGXp3OkDli9QZwkCmtzDSDlUGcH5.CBWLY84b/ccn/5RUjjasolUAcJ/', 1, 1, 1),
(6, 'test@test.com', 'rounds=536620$mXLfCO36$ohuxghuOUGvMx4L9t7S.QFEf4jWeexw/j5t2c9Cd2D0wwjObvBzaTZW5wqMhwpeNEFqglk/6Cg8cgLElpO9m41', 1, 1, 0),
(12, 'bob@bob.com', 'rounds=64080$IrRnWmlx$5dDS4IUkOu04gCp//9y6GrJ0gJdTILX2HCAI..DNDHRYC.UfSgPVkRPrRfLX5lgAwh0vZvxvLIVOOoi0.Ez5I/', 1, 1, 1),
(9, 'test', 'rounds=137550$o/B8mQIk$UeIplN7g2d3sI6zoRN3O5jI4zojdgUIc7HcgxOZWbFLP9aWrAAnyZHNhykxGHKhjjy88ICY5Eh8Mce5HqVJh91', 1, 1, 0),
(10, 'travis.a.cooper@live.mercer.edu', 'rounds=841550$JNY258Py$SzV4mjLyhsZc9nWGseF/ZNoBCrTeZC2NsiQXyLer1IdTtruKyDMV63QKFVDiyfQZl0lcj9prcqnmDNhqXp9p01', 1, 1, 0),
(11, 'dean_ms@law.mercer.edu', 'rounds=15400$pbqvuQws$eSKxkevgkO9GX60TO2mbFuV/ecwrt/bE0FLMCNvXzONR2z7HzB4oJqq6ySf6H.d6PD8uUtIe0b6Odb9XWBLM6/', 1, 1, 1),
(13, 'testit@ss.com', 'rounds=205110$EZKlRkNz$C5Dz02UfjYfW41wmpD2/1GiFi1r35EjqiQw6S.SnXNhVFVAihFIUJndQYV8kVcd8Q1dfmOzCKmXNWX0UNJNqB1', 1, 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
