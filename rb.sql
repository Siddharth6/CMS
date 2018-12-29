-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2018 at 08:07 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rb`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(1, '4.png', '2018-12-27 15:18:04', '1'),
(2, '3.png', '2018-12-27 15:20:23', '1'),
(3, 'AdmitCardFinalShow.pdf', '2018-12-27 15:21:42', '1'),
(4, '99999.jpg', '2018-12-27 15:23:27', '1'),
(5, '99999.jpg', '2018-12-27 15:24:26', '1'),
(6, '2.png', '2018-12-27 15:31:13', '1');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `title` varchar(500) NOT NULL,
  `content` varchar(50000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`title`, `content`) VALUES
('hello', 'Hello, world!'),
('hello', 'siddharth'),
('hello', 'siddharth'),
('hello', 'sidkjfjkdfkm dfhjfj                  \r\n\r\nlkdlfiodfm8374983\r\n\r\n\r\n'),
('', ''),
('', ''),
('what is google', 'google is the search engine.'),
('what is bing', 'bing is the search engine.'),
('Introduction', 'Bootstrap is modular and consists of a series of Less (Sass version 4 and onward) stylesheets that implement the various components of the toolkit. These stylesheets are generally compiled into a bundle and included in web pages, but individual components can be included or removed. Bootstrap provides a number of configuration variables that control things such as color and padding of various components.\r\n\r\nSince Bootstrap 2, the Bootstrap documentation has included a customization wizard which '),
('Introduction', 'Bootstrap is modular and consists of a series of Less (Sass version 4 and onward) stylesheets that implement the various components of the toolkit. These stylesheets are generally compiled into a bundle and included in web pages, but individual components can be included or removed. Bootstrap provides a number of configuration variables that control things such as color and padding of various components.\r\n\r\nSince Bootstrap 2, the Bootstrap documentation has included a customization wizard which generates a customized version of Bootstrap based on the requested components and various settings.\r\n\r\nAs of Bootstrap 4, Sass is used instead of Less for the stylesheets.\r\n\r\nEach Bootstrap component consists of an HTML structure, CSS declarations, and in some cases accompanying JavaScript code.\r\n\r\nGrid system and responsive design come standard with an 1170-pixel-wide grid layout. Alternatively, the developer can use a variable-width layout. For both cases, the toolkit has four variations to make use of different resolutions and types of devices: mobile phones, portrait, and landscape, tablets and PCs with low and high resolution. Each variation adjusts the width of the columns.'),
('Introduction3', 'Bootstrap is modular and consists of a series of Less (Sass version 4 and onward) stylesheets that implement the various components of the toolkit. These stylesheets are generally compiled into a bundle and included in web pages, but individual components can be included or removed. Bootstrap provides a number of configuration variables that control things such as color and padding of various components.\r\n\r\nSince Bootstrap 2, the Bootstrap documentation has included a customization wizard which generates a customized version of Bootstrap based on the requested components and various settings.\r\n\r\nAs of Bootstrap 4, Sass is used instead of Less for the stylesheets.\r\n\r\nEach Bootstrap component consists of an HTML structure, CSS declarations, and in some cases accompanying JavaScript code.\r\n\r\nGrid system and responsive design comes standard with an 1170-pixel-wide grid layout. Alternatively, the developer can use a variable-width layout. For both cases, the toolkit has four variations to make use of different resolutions and types of devices: mobile phones, portrait and landscape, tablets and PCs with low and high resolution. Each variation adjusts the width of the columns.\r\n\r\nStylesheets\r\nBootstrap provides a set of stylesheets that provide basic style definitions for all key HTML components. These provide a uniform, modern appearance for formatting text, tables and form elements.\r\n\r\nRe-usable components\r\nIn addition to the regular HTML elements, Bootstrap contains other commonly used interface elements. The components are implemented as CSS classes, which must be applied to certain HTML elements in a page.\r\n\r\nJavaScript components\r\nBootstrap comes with several JavaScript components in the form of jQuery plugins. They provide additional user interface elements such as dialog boxes, tooltips, and carousels. They also extend the functionality of some existing interface elements, including for example an auto-complete function for input fields. In version 1.3[13], the following JavaScript plugins are supported: Modal, Dropdown, Scrollspy, Tab, Tooltip, Popover, Alert, Button, Collapse, Carousel and Typeahead.');

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `name` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`name`, `password`, `email`) VALUES
('0', 'Z5l3Cm5%mSELvxioYm%)', ''),
('0', 'RCD$$MeRu$PbxNicUm2&', ''),
('0', 'RCD$$MeRu$PbxNicUm2&nn', ''),
('0', '', ''),
('abssss', 'RCD$$MeRu$PbxNicUm2&', ''),
('', '', ''),
('abssss', 'Z5l3Cm5%mSELvxioYm%)', ''),
('root', '', ''),
('root', '', ''),
('root', '', ''),
('username', 'password', ''),
('siddharth', 'RCD$$MeRu$PbxNicUm2&nn', ''),
('siddharth', 'RCD$$MeRu$PbxNicUm2&', ''),
('siddharth', 'RCD$$MeRu$PbxNicUm2&', ''),
('siddharth', 'Z5l3Cm5%mSELvxioYm%)', ''),
('siddharth', 'Z5l3Cm5%mSELvxioYm%)', ''),
('abssss', 'Z5l3Cm5%mSELvxioYm%)', ''),
('', '', ''),
('siddharth', 'Z5l3Cm5%mSELvxioYm%)', ''),
('', '', ''),
('lko', 'RCD$$MeRu$PbxNicUm2&nn', ''),
('lko0', 'RCD$$MeRu$PbxNicUm2&nn', 'hdfghdfgh@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
