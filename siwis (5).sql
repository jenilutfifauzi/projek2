-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 04:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siwis`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(17, '', '', '2021-04-01 00:00:00', '2021-04-02 00:00:00'),
(18, 'test', '#008000', '2021-04-02 00:00:00', '2021-04-03 00:00:00'),
(19, 'ulang tahun', '#0071c5', '2021-04-08 00:00:00', '2021-04-09 00:00:00'),
(20, 'projek', '#FF0000', '2021-04-16 00:00:00', '2021-04-17 00:00:00'),
(21, 'hari ngoding', '#FF8C00', '2021-05-27 00:00:00', '2021-05-28 00:00:00'),
(24, 'Long Event', '#0071c5', '2021-06-08 00:00:00', '2021-06-09 00:00:00'),
(25, 'ulang tahun', '#0071c5', '2021-06-09 00:00:00', '2021-06-10 00:00:00'),
(26, 'uas semester 4', '', '2021-06-10 00:00:00', '2021-06-11 00:00:00'),
(27, 'ngoding', '#FF0000', '2021-06-30 00:00:00', '2021-07-01 00:00:00'),
(28, 'malam', '#FFD700', '2021-07-07 00:00:00', '2021-07-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `masukan`
--

CREATE TABLE `masukan` (
  `id` varchar(30) NOT NULL,
  `masukan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masukan`
--

INSERT INTO `masukan` (`id`, `masukan`) VALUES
('', ''),
('1', 'test'),
('1', 'malem'),
('1', 'test'),
('1', 'malem'),
('1', 'baguss banget');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `text` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `xyz` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` varchar(500) NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` varchar(11) NOT NULL,
  `notes` text NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `id_note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `notes`, `date_added`, `id_note`) VALUES
('', 'malam ku terus tidur', '2021-06-11 04:03:58', 3),
('', 'malam ku terus tidur', '2021-06-11 04:24:09', 6),
('', 'malam malam', '2021-06-25 03:51:26', 12),
('', 'pagi ku terus mandi', '2021-06-25 03:51:42', 13);

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `txt` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `author` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `bgc` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `votes` mediumint(9) UNSIGNED NOT NULL DEFAULT 0,
  `vsum` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `rating` double NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `txt`, `author`, `bgc`, `votes`, `vsum`, `rating`) VALUES
(1, 'The most successful people are those who are good at plan B.', 'James Yorke', '#337199', 0, 0, 0),
(2, 'A verbal contract isn\'t worth the paper it\'s written on.', 'Samuel Goldwyn', '#550055', 0, 0, 0),
(3, 'A man wrapped up in himself makes a very small bundle.', 'Benjamin Franklin', '#000055', 0, 0, 0),
(4, 'Fix your eyes forward on what you can do, not back on what you cannot change.', 'Tom Clancy', '#770000', 0, 0, 0),
(5, 'I wish people who have trouble communicating would just shut up.', 'Tom Lehrer', '#003300', 0, 0, 0),
(6, 'The great end of life is not knowledge but action.', 'Thomas Huxley', '#336600', 0, 0, 0),
(7, 'A good example has twice the value of good advice.', 'Unknown', '#333333', 0, 0, 0),
(8, 'Some people are so afraid to die that they never begin to live.', 'H. V. Dyke', '#003366', 0, 0, 0),
(9, 'The greatest risk is to risk nothing at all.', 'Leo Buscaglia', '#0055555', 0, 0, 0),
(10, 'Inspirations never go in for long engagements; they demand immediate marriage to action.', 'Brendan Francis', '#337199', 0, 0, 0),
(11, 'Nobody can do everything, but everyone can do something.', 'Unknown', '#007700', 0, 0, 0),
(12, 'When u get to the end of the rope, tie a knot & hang on.', 'Franklin D Roosevelt', '#550055', 0, 0, 0),
(13, 'What the heart gives away is never gone ... It is kept in the hearts of others.', 'Robin St. John', '#800000', 0, 0, 0),
(14, 'Peace if possible, truth at all costs.', 'Martin Luther', '#663399', 0, 0, 0),
(15, 'We build too many walls and not enough bridges.', 'Isaac Newton', '#222222', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `quotes_votes`
--

CREATE TABLE `quotes_votes` (
  `id` mediumint(9) UNSIGNED NOT NULL,
  `qid` smallint(6) UNSIGNED NOT NULL DEFAULT 0,
  `ip` int(10) NOT NULL DEFAULT 0,
  `vote` tinyint(1) NOT NULL DEFAULT 0,
  `date_submit` date NOT NULL DEFAULT '0000-00-00',
  `dt_submit` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_frontdesk_users`
--

CREATE TABLE `tbl_frontdesk_users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_holidays`
--

CREATE TABLE `tbl_holidays` (
  `id` int(10) NOT NULL,
  `date` varchar(20) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservations`
--

CREATE TABLE `tbl_reservations` (
  `id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `ucount` int(10) NOT NULL,
  `rdate` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reservations`
--

INSERT INTO `tbl_reservations` (`id`, `uid`, `ucount`, `rdate`, `status`, `comments`, `bdate`) VALUES
(9, 16, 2, '2021-01-22 14:00', 'APPROVED', '', '2021-04-01 21:23:56'),
(10, 16, 1, '2021-04-7 12:00', 'PENDING', '', '2021-04-06 19:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `pwd`, `address`, `phone`, `email`, `type`, `status`, `bdate`) VALUES
(16, 'jude', '12345', 'Himamaylan City', '09272777334', 'jude@yahoo.com', 'admin', 'active', '1996-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `checked` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `title`, `date_time`, `checked`) VALUES
(21, 'tempe', '2021-06-02 19:22:58', 0),
(26, 'tetap semangat', '2021-06-25 08:00:00', 0),
(27, 'makan yuk', '2021-06-25 08:50:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level_user` varchar(25) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level_user`, `name`, `address`, `email`, `tgl_lahir`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'admin', 'admin', 'admin@gmail.com', '2021-07-12'),
(2, 'jeni1234', 'a5ff0d75719a4bd8dbc845527da5520a', 'user', 'anggota', 'subang', 'jenlut.jl@gmail.com', '2021-07-23'),
(10, 'budi1234', 'bfe84f9b258404dde399993f2933a7d9', 'user', 'budii', 'bgsjss', 'sdfsdf@gmail.com', '2021-07-11'),
(11, 'zaed1234', 'a4de8569a628898a42d107c1ef81ad81', 'user', 'zaedd', 'sjflsdajflk', 'zaedlb72@gmail.com', '2021-07-06'),
(12, 'ulfah1234', '0d360b206e531bb79266da44d130dd8f', 'user', 'ulfah', 'pdf', 'fujimiyobi@gmail.com', '2021-07-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id_note`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rating` (`rating`);

--
-- Indexes for table `quotes_votes`
--
ALTER TABLE `quotes_votes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `qid` (`qid`,`ip`,`date_submit`);

--
-- Indexes for table `tbl_frontdesk_users`
--
ALTER TABLE `tbl_frontdesk_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_holidays`
--
ALTER TABLE `tbl_holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reservations`
--
ALTER TABLE `tbl_reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `quotes_votes`
--
ALTER TABLE `quotes_votes`
  MODIFY `id` mediumint(9) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_frontdesk_users`
--
ALTER TABLE `tbl_frontdesk_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_holidays`
--
ALTER TABLE `tbl_holidays`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_reservations`
--
ALTER TABLE `tbl_reservations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
