-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 08:11 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `food_id` int(255) NOT NULL,
  `fooditem` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `foodprice` int(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `food_id`, `fooditem`, `quantity`, `foodprice`, `total`) VALUES
(104, 0, '', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fooditems`
--

CREATE TABLE `fooditems` (
  `food_id` int(255) NOT NULL,
  `food _category` varchar(255) NOT NULL,
  `originalimagename` varchar(255) NOT NULL,
  `imagepathname` varchar(255) NOT NULL,
  `foodprice` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fooditems`
--

INSERT INTO `fooditems` (`food_id`, `food _category`, `originalimagename`, `imagepathname`, `foodprice`) VALUES
(1, 'Unagi', 'Unagi.jpg', 'assets/Unagi.jpg', 300),
(2, 'Unagi', 'Unagi-Chazuke.jpg', 'assets/Unagi-Chazuke.jpg', 400),
(3, 'Unagi', 'unagi-sushi.jpg', 'assets/unagi-sushi.jpg', 500),
(4, 'Unagi', 'Vegetarian-Grilled-Unagi.jpeg', 'assets/Vegetarian-Grilled-Unagi.jpeg', 300),
(5, 'Sushi', 'makisushi.jpg', 'assets/makisushi.jpg', 750),
(6, 'Sushi', 'Smoked-Salmon-Sushi-Roll.jpg', 'assets/Smoked-Salmon-Sushi-Roll.jpg', 950),
(7, 'Sushi', 'eggplant-sushi.jpg', 'assets/eggplant-sushi.jpg', 1000),
(8, 'Sushi', 'tuna-sushi-roll.jpg', 'assets/tuna-sushi-roll.jpg', 900),
(9, 'Tempura', 'shrimp-tempura.jpg', 'assets/shrimp-tempura.jpg', 900),
(10, 'Tempura', 'prawn-tempura.jpg', 'assets/prawn-tempura.jpg', 900),
(11, 'Tempura', 'asparagus-tempura.jpeg', 'assets/asparagus-tempura.jpeg', 700),
(12, 'Tempura', 'vegetable-tempura.jpg', 'assets/vegetable-tempura.jpg', 1000),
(13, 'Soba', 'Soba.jpg', 'assets/Soba.jpg', 500),
(14, 'Soba', 'toshikoshi-soba.jpg', 'assets/toshikoshi-soba.jpg', 600),
(15, 'Soba', 'Sesame-Soba-Noodles.jpg', 'assets/Sesame-Soba-Noodles.jpg', 1000),
(16, 'Soba', 'Soba 2.jpg', 'assets/Soba 2.jpg', 700),
(17, 'Udon', 'beef-udon.jpg', 'assets/beef-udon.jpg', 700),
(18, 'Udon', 'Chicken-Udon-Soup.jpg', 'assets/Chicken-Udon-Soup.jpg', 900),
(19, 'Udon', 'yaki-udon.jpg', 'assets/yaki-udon.jpg', 700),
(20, 'Udon', 'Spicy-udon-noodles-with-fresh-vegetables.jpg', 'assets/Spicy-udon-noodles-with-fresh-vegetables.jpg', 1000),
(21, 'Onigiri', 'mixed-grain-onigiri.jpg', 'assets/mixed-grain-onigiri.jpg', 400);

-- --------------------------------------------------------

--
-- Table structure for table `food_website`
--

CREATE TABLE `food_website` (
  `UserName` int(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_website`
--

INSERT INTO `food_website` (`UserName`, `FirstName`, `LastName`, `EmailAddress`, `Pass`) VALUES
(1, 'Victor', 'Mutuku', 'victor.mutuku@gmail.com', 'sdh'),
(5, 'Vrombosome', 'Oktikodo', 'viro@strathmore.edu', 'qwerty'),
(6, 'owo', 'rut', 'sdfghnbv@rtyhgf.sgf', 'qwerthbvcx'),
(7, 'gordon', 'lastla', 'gorla@gmail.com', 'asdfgh'),
(9, 'Yuko', 'Vardradhtha', 'yukovar@gmail.com', 'yukoyuko'),
(10, 'Maraya', 'Mari', 'mayari@gmail.com', 'maya-ri'),
(13, 'John', 'Marcus', 'glory@gmail.com', 'jm-arcus'),
(14, 'Who', 'Is', 'Whois@outlook.com', 'rfvtgb'),
(17, 'Yabadaba', 'foobauz', 'yafoobauz@gmail.com', 'whendidyougo'),
(18, 'Porlioly', 'HJM', 'Parljhubi@gmail.com', 'yhntgb');

-- --------------------------------------------------------

--
-- Table structure for table `login_session_data`
--

CREATE TABLE `login_session_data` (
  `User_ID` int(255) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Privilege` varchar(255) NOT NULL,
  `Session_ID` varchar(255) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_session_data`
--

INSERT INTO `login_session_data` (`User_ID`, `First_Name`, `Privilege`, `Session_ID`, `Timestamp`) VALUES
(43, 'admin1', 'Admin', '0rihjg763kre6miaa57ae865q0', '2020-08-02 08:02:40'),
(0, 'Victor', 'Admin', '14hpq971trlosaj8gtfl2rkfk2', '2020-08-01 05:59:12'),
(45, 'client2', 'User', '1je2k4a7su5cpkfmomt2ue4879', '2020-08-02 08:24:04'),
(11, 'Wendy', 'User', '22jio8jp6jfoc4l93sciv76a9o', '2020-08-03 05:34:49'),
(0, 'Victor', 'Admin', '2fnkvpc9q1j5n0g4qjs5v55rsv', '2020-07-31 17:16:16'),
(1, 'Horase', 'Sub', '2lelm2kejfjdihatq0hv530235', '2020-07-31 17:19:09'),
(41, 'Qwerty', 'User', '35gauifhlfgl1u1i7lp10uaqp0', '2020-07-31 15:52:58'),
(41, 'Qwerty', 'User', 'agoikoskfm3herv0dmjah14c5n', '2020-07-31 15:52:58'),
(37, 'Danielle', 'User', 'akb5vbk78e5tjp6figke4n4ni0', '2020-07-31 15:52:58'),
(0, 'Victor', 'Admin', 'bda65nntv7b0mts5h0h790e7e8', '2020-08-02 06:04:10'),
(37, 'Danielle', 'User', 'bgbj741rhvs8pesuplntdvms0q', '2020-07-31 15:52:58'),
(0, 'Victor', 'Admin', 'c1gjf6sr81l5fprfas6qds3m8h', '2020-07-31 17:20:49'),
(2, 'John', 'Sub', 'dbhfuvq8r782m63eovel81joq3', '2020-07-31 15:52:58'),
(44, 'client1', 'Sub', 'e1406rtqb9mgqm7k1e02rikke6', '2020-08-02 08:09:11'),
(48, 'client2', 'User', 'equjcqu6vdvcurobi6b83arf86', '2020-08-02 15:56:37'),
(45, 'client2', 'User', 'flphuml7hvvou2e8qnu163ffnd', '2020-08-02 08:13:32'),
(34, 'Serif', 'User', 'gmqeodhchd7qef49vq6d58bjp1', '2020-07-31 15:52:58'),
(43, 'admin1', 'Admin', 'gsikbte8fr3cv7bubo65fg3lup', '2020-08-02 08:47:19'),
(44, 'client1', 'Sub', 'h25pr5v0rcr703ulh3nnfoncb8', '2020-08-02 08:11:00'),
(34, 'Serif', 'User', 'i1a26kg6l8bsobml0bg4asseq2', '2020-07-31 15:52:58'),
(10, 'Traey', 'User', 'ibbfdj32d65bnap7pr75vev7nr', '2020-07-31 15:52:58'),
(0, 'Victor', 'Admin', 'jrgnqtf05nfkce5sqihclt54eb', '2020-07-31 15:52:58'),
(0, 'Victor', 'Admin', 'kaivd07pu81vvditunijdh5l4d', '2020-08-03 05:23:11'),
(43, 'admin', 'Admin', 'kdidc44h5t0u6lk01snvlom2m0', '2020-08-02 06:30:26'),
(9, 'Tarie', 'User', 'kos2vppdfcmeeqlvokesjvv904', '2020-07-31 15:52:58'),
(44, 'client', 'Sub', 'mojvfvmihkc3m24msavf61v2f5', '2020-08-02 06:34:43'),
(47, 'client1', 'User', 'ms9vgvtafag2a3p0vfkbk3l0sc', '2020-08-02 15:55:12'),
(43, 'admin1', 'Admin', 'qkarcdm94nbhsabt9vqtvfq5m1', '2020-08-02 13:37:29'),
(43, 'admin1', 'Admin', 'tdnelfj20t4vdf7962io2a3745', '2020-08-02 08:45:51'),
(37, 'Danielle', 'User', 'trhd3erqu07kjo5eqro6gt4sq9', '2020-08-01 19:55:17');

-- --------------------------------------------------------

--
-- Table structure for table `new`
--

CREATE TABLE `new` (
  `User_ID` int(11) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Email_address` varchar(255) NOT NULL,
  `passw` varchar(255) NOT NULL,
  `Privilege` enum('Admin','Sub','User') NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new`
--

INSERT INTO `new` (`User_ID`, `First_Name`, `Last_Name`, `Email_address`, `passw`, `Privilege`) VALUES
(0, 'Victor', 'Mutuku', 'victor.mutuku@gmail.com', 'victormutuku', 'Admin'),
(1, 'Horase', 'Boilo', 'HoraseBoilo@gmail.com', 'horaseboilo', 'Sub'),
(2, 'John', 'Marcus', 'JohnMarcus@gmail.com', 'jm-arcus', 'Sub'),
(3, 'Fendi', 'Mariachi', 'Fendife@gmail.com', 'fendindi', 'Sub'),
(9, 'Tarie', 'Gnochi', 'tarienochi@fertro.com', 'tariegnochi', 'User'),
(10, 'Traey', 'Yuiko', 'traey.yuito@strathmore.edu', 'traeyyuiko', 'User'),
(11, 'Wendy', 'Cullins', 'wendycull@johann.com', 'wendycully', 'User'),
(12, 'Raey', 'Malama', 'raeymalama@justins.com', 'rayemalama', 'User'),
(34, 'Serif', 'Doris', 'serifdoris@jiggool.com', 'serifdoris', 'User'),
(37, 'Danielle', 'Maranda', 'daniellemaranda@outlook.com', 'daniellemaranda', 'User'),
(41, 'Qwerty', 'Asidaf', 'qwertyasidaf@fmail.com', 'qwerty', 'User'),
(42, 'Maria', 'De Larosa', 'mariadelarosa@hotmail.com', 'mariadelarosa', 'User'),
(46, 'admin1', 'admin1', 'admin1@gmail.com', 'admin1gmail', 'User'),
(47, 'client1', 'client1', 'client1@gmail.com', 'client1gmail', 'User'),
(48, 'client2', 'client2', 'client2@gmail.com', 'client2gmail', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `recorded_login_session_users`
--

CREATE TABLE `recorded_login_session_users` (
  `Session_ID` varchar(255) NOT NULL DEFAULT '',
  `User_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recorded_login_session_users`
--

INSERT INTO `recorded_login_session_users` (`Session_ID`, `User_ID`) VALUES
('14hpq971trlosaj8gtfl2rkfk2', 0),
('2fnkvpc9q1j5n0g4qjs5v55rsv', 0),
('bda65nntv7b0mts5h0h790e7e8', 0),
('c1gjf6sr81l5fprfas6qds3m8h', 0),
('jrgnqtf05nfkce5sqihclt54eb', 0),
('2lelm2kejfjdihatq0hv530235', 1),
('dbhfuvq8r782m63eovel81joq3', 2),
('kos2vppdfcmeeqlvokesjvv904', 9),
('ibbfdj32d65bnap7pr75vev7nr', 10),
('gmqeodhchd7qef49vq6d58bjp1', 34),
('i1a26kg6l8bsobml0bg4asseq2', 34),
('akb5vbk78e5tjp6figke4n4ni0', 37),
('bgbj741rhvs8pesuplntdvms0q', 37),
('trhd3erqu07kjo5eqro6gt4sq9', 37),
('35gauifhlfgl1u1i7lp10uaqp0', 41),
('agoikoskfm3herv0dmjah14c5n', 41),
('0rihjg763kre6miaa57ae865q0', 43),
('gsikbte8fr3cv7bubo65fg3lup', 43),
('kdidc44h5t0u6lk01snvlom2m0', 43),
('qkarcdm94nbhsabt9vqtvfq5m1', 43),
('tdnelfj20t4vdf7962io2a3745', 43),
('e1406rtqb9mgqm7k1e02rikke6', 44),
('h25pr5v0rcr703ulh3nnfoncb8', 44),
('mojvfvmihkc3m24msavf61v2f5', 44),
('1je2k4a7su5cpkfmomt2ue4879', 45),
('flphuml7hvvou2e8qnu163ffnd', 45),
('0rihjg763kre6miaa57ae865q0', 0),
('14hpq971trlosaj8gtfl2rkfk2', 0),
('1je2k4a7su5cpkfmomt2ue4879', 0),
('2fnkvpc9q1j5n0g4qjs5v55rsv', 0),
('2lelm2kejfjdihatq0hv530235', 0),
('35gauifhlfgl1u1i7lp10uaqp0', 0),
('agoikoskfm3herv0dmjah14c5n', 0),
('akb5vbk78e5tjp6figke4n4ni0', 0),
('bda65nntv7b0mts5h0h790e7e8', 0),
('bgbj741rhvs8pesuplntdvms0q', 0),
('c1gjf6sr81l5fprfas6qds3m8h', 0),
('dbhfuvq8r782m63eovel81joq3', 0),
('e1406rtqb9mgqm7k1e02rikke6', 0),
('flphuml7hvvou2e8qnu163ffnd', 0),
('gmqeodhchd7qef49vq6d58bjp1', 0),
('gsikbte8fr3cv7bubo65fg3lup', 0),
('h25pr5v0rcr703ulh3nnfoncb8', 0),
('i1a26kg6l8bsobml0bg4asseq2', 0),
('ibbfdj32d65bnap7pr75vev7nr', 0),
('jrgnqtf05nfkce5sqihclt54eb', 0),
('kdidc44h5t0u6lk01snvlom2m0', 0),
('kos2vppdfcmeeqlvokesjvv904', 0),
('mojvfvmihkc3m24msavf61v2f5', 0),
('qkarcdm94nbhsabt9vqtvfq5m1', 0),
('tdnelfj20t4vdf7962io2a3745', 0),
('trhd3erqu07kjo5eqro6gt4sq9', 0),
('0rihjg763kre6miaa57ae865q0', 0),
('14hpq971trlosaj8gtfl2rkfk2', 0),
('1je2k4a7su5cpkfmomt2ue4879', 0),
('2fnkvpc9q1j5n0g4qjs5v55rsv', 0),
('2lelm2kejfjdihatq0hv530235', 0),
('35gauifhlfgl1u1i7lp10uaqp0', 0),
('agoikoskfm3herv0dmjah14c5n', 0),
('akb5vbk78e5tjp6figke4n4ni0', 0),
('bda65nntv7b0mts5h0h790e7e8', 0),
('bgbj741rhvs8pesuplntdvms0q', 0),
('c1gjf6sr81l5fprfas6qds3m8h', 0),
('dbhfuvq8r782m63eovel81joq3', 0),
('e1406rtqb9mgqm7k1e02rikke6', 0),
('flphuml7hvvou2e8qnu163ffnd', 0),
('gmqeodhchd7qef49vq6d58bjp1', 0),
('gsikbte8fr3cv7bubo65fg3lup', 0),
('h25pr5v0rcr703ulh3nnfoncb8', 0),
('i1a26kg6l8bsobml0bg4asseq2', 0),
('ibbfdj32d65bnap7pr75vev7nr', 0),
('jrgnqtf05nfkce5sqihclt54eb', 0),
('kos2vppdfcmeeqlvokesjvv904', 0),
('mojvfvmihkc3m24msavf61v2f5', 0),
('qkarcdm94nbhsabt9vqtvfq5m1', 0),
('tdnelfj20t4vdf7962io2a3745', 0),
('trhd3erqu07kjo5eqro6gt4sq9', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sub view`
-- (See below for the actual view)
--
CREATE TABLE `sub view` (
`User_ID` int(11)
,`First_Name` varchar(255)
,`Last_Name` varchar(255)
,`Email_address` varchar(255)
,`passw` varchar(255)
,`Privilege` enum('Admin','Sub','User')
);

-- --------------------------------------------------------

--
-- Structure for view `sub view`
--
DROP TABLE IF EXISTS `sub view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sub view`  AS  select `new`.`User_ID` AS `User_ID`,`new`.`First_Name` AS `First_Name`,`new`.`Last_Name` AS `Last_Name`,`new`.`Email_address` AS `Email_address`,`new`.`passw` AS `passw`,`new`.`Privilege` AS `Privilege` from `new` where `new`.`Privilege` <> 'Admin' and 'Sub' ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `food_id` (`food_id`);

--
-- Indexes for table `fooditems`
--
ALTER TABLE `fooditems`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `food_website`
--
ALTER TABLE `food_website`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `login_session_data`
--
ALTER TABLE `login_session_data`
  ADD PRIMARY KEY (`Session_ID`),
  ADD KEY `login_session_data_ibfk_1` (`User_ID`);

--
-- Indexes for table `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `recorded_login_session_users`
--
ALTER TABLE `recorded_login_session_users`
  ADD KEY `User_ID` (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `fooditems`
--
ALTER TABLE `fooditems`
  MODIFY `food_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `food_website`
--
ALTER TABLE `food_website`
  MODIFY `UserName` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `new`
--
ALTER TABLE `new`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login_session_data`
--
ALTER TABLE `login_session_data`
  ADD CONSTRAINT `login_session_data_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `new` (`User_ID`) ON DELETE CASCADE;

--
-- Constraints for table `recorded_login_session_users`
--
ALTER TABLE `recorded_login_session_users`
  ADD CONSTRAINT `recorded_login_session_users_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `new` (`User_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
