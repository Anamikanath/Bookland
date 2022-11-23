-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 02:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comic`
--

CREATE TABLE `comic` (
  `ID` int(11) NOT NULL,
  `book_name` varchar(111) NOT NULL,
  `author_name` varchar(111) NOT NULL,
  `prev_price` float NOT NULL,
  `book_price` float NOT NULL,
  `book_image` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comic`
--

INSERT INTO `comic` (`ID`, `book_name`, `author_name`, `prev_price`, `book_price`, `book_image`) VALUES
(1, 'Marvel Comics', 'Stan Lee', 90, 100, './images/comic11.jpg'),
(2, 'The Amazing Spider Man', 'Tbue Companions ', 120, 80, './images/comic2.jpg'),
(3, 'Shang-Chi', 'Xiang Chi', 200, 100, './images/comic3.jpg'),
(4, 'Archie', 'JPK Alam', 130, 70, './images/comic4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `ID` int(11) NOT NULL,
  `book_name` varchar(111) NOT NULL,
  `author_name` varchar(111) NOT NULL,
  `prev_price` float NOT NULL,
  `book_price` float NOT NULL,
  `book_image` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`ID`, `book_name`, `author_name`, `prev_price`, `book_price`, `book_image`) VALUES
(1, 'Numerical Methods', 'Dr. Vedamurthy & Iyenger', 200, 390, './images/edu1.jpg'),
(2, 'TOFEL Preparation', 'Kamal Haq', 200, 220, './images/edu2.jpg'),
(3, 'Programming in ANSI', 'E. Balagurusamy', 390, 309, './images/edu11.jpg'),
(4, 'Computer Graphics', 'Plastock & Zhigang', 220, 205, './images/educ.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fantasy`
--

CREATE TABLE `fantasy` (
  `ID` int(11) NOT NULL,
  `book_name` varchar(111) NOT NULL,
  `author_name` varchar(111) NOT NULL,
  `prev_price` float NOT NULL,
  `book_price` float NOT NULL,
  `book_image` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fantasy`
--

INSERT INTO `fantasy` (`ID`, `book_name`, `author_name`, `prev_price`, `book_price`, `book_image`) VALUES
(1, 'Garden of the Moon', 'Steven Erikson', 129, 100, './images/fantasy1.jpg'),
(2, 'The Lord of the Rings', 'J.R.R Tolkien', 200, 180, './images/fantasy3.jpg'),
(3, 'The Sword of the Stone', 'T.H White', 210, 165, './images/fantasy4.jpg'),
(4, 'Bird Box', 'Josh Malerman', 190, 205, './images/horror5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `horror`
--

CREATE TABLE `horror` (
  `ID` int(11) NOT NULL,
  `book_name` varchar(111) NOT NULL,
  `author_name` varchar(111) NOT NULL,
  `prev_price` float NOT NULL,
  `book_price` float NOT NULL,
  `book_image` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `horror`
--

INSERT INTO `horror` (`ID`, `book_name`, `author_name`, `prev_price`, `book_price`, `book_image`) VALUES
(1, 'London Horror Story', 'Anthena Gomes', 120, 210, './images/horror2.jpg'),
(2, 'Sam Iain Rob Wright', 'J.A Koglin', 100, 200, './images/horror3.jpg'),
(3, 'Stephen King', 'Charles Dickens', 280, 240, './images/horrornew2.jpg'),
(4, 'A Classic Horror Story', 'George Orwell', 400, 390, './images/horror4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lit`
--

CREATE TABLE `lit` (
  `ID` int(11) NOT NULL,
  `book_name` varchar(111) NOT NULL,
  `author_name` varchar(111) NOT NULL,
  `prev_price` float NOT NULL,
  `book_price` float NOT NULL,
  `book_image` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lit`
--

INSERT INTO `lit` (`ID`, `book_name`, `author_name`, `prev_price`, `book_price`, `book_image`) VALUES
(1, 'Jane Eyre', 'Charlotte Bronte', 290, 210, './images/lit1.jpg'),
(2, 'To Kill a Mockingbird', 'Harper Lee', 310, 250, './images/lit2.jpg'),
(3, 'Lolita', 'Vladimir Nabokov', 300, 280, './images/lit4.jpg'),
(4, 'The Invisible Man', 'H.G Wells', 230, 190, './images/lit5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newbooks`
--

CREATE TABLE `newbooks` (
  `id` int(11) NOT NULL,
  `book_name` varchar(25) NOT NULL,
  `author_name` varchar(25) NOT NULL,
  `prev_price` float DEFAULT NULL,
  `book_price` float DEFAULT NULL,
  `book_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newbooks`
--

INSERT INTO `newbooks` (`id`, `book_name`, `author_name`, `prev_price`, `book_price`, `book_image`) VALUES
(1, 'AISLYN', 'Suzanne Walters', 950, 810, './upload/lyfstyle1.jpg'),
(2, 'Death Before Breakfast', 'George Bellairs', 630, 600, './upload/mystery1.jpg'),
(3, 'Beauty is a Wound', 'Eka Kurniawan', 1200, 1150, './upload/fiction1.jpg'),
(4, 'Harry Porter', 'J.K Rowling', 990, 900, './upload/fantasy1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `new_arrival`
--

CREATE TABLE `new_arrival` (
  `ID` int(11) NOT NULL,
  `book_name` text NOT NULL,
  `author_name` text NOT NULL,
  `prev_price` float NOT NULL,
  `book_price` float NOT NULL,
  `book_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_arrival`
--

INSERT INTO `new_arrival` (`ID`, `book_name`, `author_name`, `prev_price`, `book_price`, `book_image`) VALUES
(2, 'After The Sun', 'Jonas Eka', 930, 780, './upload/fiction2.png'),
(3, 'Hidden Treasure', 'Kara Adams', 300, 220, './upload/other1.png'),
(4, 'Girl In Trouble', 'Stacy Claflin', 200, 190, './upload/rsz_attachment_75941258.jpg'),
(5, 'Love\'s Blood', 'Clark Howard', 320, 290, './upload/rsz_loves-blood.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `novel`
--

CREATE TABLE `novel` (
  `ID` int(11) NOT NULL,
  `book_name` varchar(111) NOT NULL,
  `author_name` varchar(111) NOT NULL,
  `prev_price` float NOT NULL,
  `book_price` float NOT NULL,
  `book_image` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `novel`
--

INSERT INTO `novel` (`ID`, `book_name`, `author_name`, `prev_price`, `book_price`, `book_image`) VALUES
(1, 'Sapiens', 'Yuval Noah Harari', 200, 190, './images/novel1.jpg'),
(2, 'The Kite Runner', 'Khaled Hosseini', 500, 420, './images/novel4.jpg'),
(3, 'The Lost Symbol', 'Dan Brown', 180, 200, './images/novel11.jpg'),
(4, 'Veronica Decides To Die', 'Paulo Coelho', 130, 120, './images/novel3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `oldbook`
--

CREATE TABLE `oldbook` (
  `ID` int(11) NOT NULL,
  `nameofbook` text NOT NULL,
  `author` text NOT NULL,
  `edition` text NOT NULL,
  `chooseoption1` varchar(11) NOT NULL,
  `chooseoption2` varchar(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image_url` text NOT NULL,
  `Time_track` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `Top_Bid` int(11) NOT NULL,
  `Top_Bidder_ID` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oldbook`
--

INSERT INTO `oldbook` (`ID`, `nameofbook`, `author`, `edition`, `chooseoption1`, `chooseoption2`, `price`, `image_url`, `Time_track`, `status`, `Top_Bid`, `Top_Bidder_ID`, `seller_id`) VALUES
(1, 'Mathematics Textbook', 'Ashim Saha', '12', 'Yes', 'No', 100, 'IMG-6309a89530fd77.17676565.jpg', 16, 'ongoing', 141, 32, 31),
(2, 'Introduction to Infrastructure', 'Michel R. Zenn', '10', 'Yes', 'Yes', 200, 'IMG-6309ab38e74b00.52372415.jpg', 17, 'ongoing', 210, 37, 32),
(3, 'Engineering Design Process', 'Yousef Haik', '5', 'No', 'Yes', 200, 'IMG-630ad7415a35d8.68190763.jpg', 21, 'ongoing', 200, 0, 37),
(4, 'Engineering Assignment', 'Danielle Stell', '5', 'Yes', 'No', 100, 'IMG-630ae95d9cebb7.56377508.png', 22, 'yet to bid', 100, 0, 31),
(5, 'Engineering Assignment 2', 'Danielle Stell', '2', 'Yes', 'Yes', 150, 'IMG-630ae9bfb83bf2.95342965.jpg', 23, 'finished', 150, 0, 31),
(6, 'Engineering Assignment 2020', 'LORE', '12', 'Yes', 'Yes', 117, 'IMG-630b2208e67ec1.27287940.png', 24, 'ongoing', 118, 32, 31);

-- --------------------------------------------------------

--
-- Table structure for table `science`
--

CREATE TABLE `science` (
  `ID` int(11) NOT NULL,
  `book_name` varchar(111) NOT NULL,
  `author_name` varchar(111) NOT NULL,
  `prev_price` float NOT NULL,
  `book_price` float NOT NULL,
  `book_image` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `science`
--

INSERT INTO `science` (`ID`, `book_name`, `author_name`, `prev_price`, `book_price`, `book_image`) VALUES
(1, 'Dune', 'Frank Herbert', 230, 200, './images/sf1.jpg'),
(2, 'Brave New world', 'Aldous Huxley', 300, 280, './images/sf2.jpg'),
(3, 'Station Eleven', 'Emly & John', 268, 190, './images/sf4.jpg'),
(4, 'The Martin', 'Andy Weir', 250, 310, './images/sf3 (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `time_track`
--

CREATE TABLE `time_track` (
  `Track_ID` int(11) NOT NULL,
  `starttime` timestamp NOT NULL DEFAULT current_timestamp(),
  `endtime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_track`
--

INSERT INTO `time_track` (`Track_ID`, `starttime`, `endtime`) VALUES
(1, '2022-08-22 07:12:00', '2022-08-31 07:13:00'),
(2, '2022-08-22 07:43:00', '2022-09-07 07:43:00'),
(3, '2022-08-22 07:47:00', '2022-08-29 07:47:00'),
(4, '2022-08-14 08:05:00', '2022-09-12 08:05:00'),
(5, '2022-08-01 08:05:00', '2022-08-07 08:05:00'),
(6, '2022-08-31 08:05:00', '2022-09-08 08:05:00'),
(7, '2022-08-26 14:42:00', '2022-09-09 14:42:00'),
(8, '2022-08-31 15:09:00', '2022-09-14 15:09:00'),
(9, '2022-08-31 15:09:00', '2022-09-14 15:09:00'),
(10, '2022-08-26 15:14:00', '2022-09-09 15:15:00'),
(11, '2022-08-26 15:19:00', '2022-09-10 15:19:00'),
(12, '2022-08-26 15:19:00', '2022-09-10 15:19:00'),
(13, '2022-08-26 15:51:00', '2022-09-30 15:52:00'),
(14, '2022-08-26 15:51:00', '2022-09-30 15:52:00'),
(15, '2022-08-27 05:02:00', '2022-09-10 05:02:00'),
(16, '2022-08-27 05:15:00', '2022-10-08 05:15:00'),
(17, '2022-08-27 05:24:00', '2022-09-08 05:24:00'),
(18, '2022-08-28 02:27:00', '2022-08-31 02:27:00'),
(19, '2022-08-28 02:27:00', '2022-08-31 02:27:00'),
(20, '2022-08-28 02:27:00', '2022-08-31 02:27:00'),
(21, '2022-08-28 02:44:00', '2022-09-08 02:44:00'),
(22, '2022-09-09 04:04:00', '2022-09-10 04:04:00'),
(23, '2022-08-11 04:06:00', '2022-08-19 04:06:00'),
(24, '2022-08-28 08:06:00', '2022-09-09 08:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `fname`, `lname`, `email`, `password`) VALUES
(31, 'Tanjum', 'Motin', 'tanjummotin1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(32, 'Ayesha ', 'Banu', 'tanjummotin2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(33, 'anamika', 'Nath', 'anamikanathap95@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(35, 'Moutushi', 'Afrin', 'moutushi@gmail.com', '912ec803b2ce49e4a541068d495ab570'),
(36, 'Jannatul', 'Jannat', 'jannat@gmail.com', 'c3ac70501ad99a467f14f62dd4642391'),
(37, 'Tafrim', 'Motin', 'tanjummotin3@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comic`
--
ALTER TABLE `comic`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fantasy`
--
ALTER TABLE `fantasy`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `horror`
--
ALTER TABLE `horror`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lit`
--
ALTER TABLE `lit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `newbooks`
--
ALTER TABLE `newbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_arrival`
--
ALTER TABLE `new_arrival`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `novel`
--
ALTER TABLE `novel`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `oldbook`
--
ALTER TABLE `oldbook`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Time_track` (`Time_track`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Indexes for table `science`
--
ALTER TABLE `science`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `time_track`
--
ALTER TABLE `time_track`
  ADD PRIMARY KEY (`Track_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newbooks`
--
ALTER TABLE `newbooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `new_arrival`
--
ALTER TABLE `new_arrival`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
