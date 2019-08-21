-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 12:50 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminaccounts`
--

CREATE TABLE `adminaccounts` (
  `ammount` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminaccounts`
--

INSERT INTO `adminaccounts` (`ammount`) VALUES
('5000'),
('5000'),
('5000'),
('120'),
('6000');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(250) NOT NULL,
  `aname` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `aname`, `number`, `mail`, `password`) VALUES
(1, 'kongkon', '12345', 'kongkon@gmail.com', 'kongkon');

-- --------------------------------------------------------

--
-- Table structure for table `availablecar`
--

CREATE TABLE `availablecar` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availablecar`
--

INSERT INTO `availablecar` (`id`, `name`, `price`) VALUES
(1, 'xcorolla', '120000000'),
(2, 'premio', '20000000000');

-- --------------------------------------------------------

--
-- Table structure for table `availablecars`
--

CREATE TABLE `availablecars` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availablecars`
--

INSERT INTO `availablecars` (`id`, `name`, `price`, `type`) VALUES
(8, 'xcorolla', '120000000', 'private'),
(10, 'premio', '20000000000', 'private'),
(11, 'premio', '20000000000', 'pickup'),
(12, 'bsdvas', '80000', 'micro');

-- --------------------------------------------------------

--
-- Table structure for table `availableproducts`
--

CREATE TABLE `availableproducts` (
  `pid` int(250) NOT NULL,
  `pname` varchar(250) NOT NULL,
  `pquantity` varchar(250) NOT NULL,
  `place` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availableproducts`
--

INSERT INTO `availableproducts` (`pid`, `pname`, `pquantity`, `place`, `price`) VALUES
(11, 'mango', '1kg', 'rajshahi', '500'),
(12, 'lichi', '200 pc', 'rangpur', '600'),
(13, 'jackfruit', '22pc', 'jessore', '8000');

-- --------------------------------------------------------

--
-- Table structure for table `collectproducts`
--

CREATE TABLE `collectproducts` (
  `pid` int(250) NOT NULL,
  `pname` varchar(250) NOT NULL,
  `pquantity` varchar(250) NOT NULL,
  `place` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collectproducts`
--

INSERT INTO `collectproducts` (`pid`, `pname`, `pquantity`, `place`, `price`) VALUES
(0, 'lichi', '100 pc', 'dhaka', '100'),
(2, 'ghhsg', 'jhghg', 'hgygs', 'hghgs'),
(1, 'orange', '2 kg', 'dhaka', '20000'),
(1, 'orange', '2 kg', 'dhaka', '20000'),
(1, 'orange', '2 kg', 'dhaka', '20000'),
(1, 'orange', '2 kg', 'dhaka', '20000'),
(1, 'orange', '2 kg', 'dhaka', '20000'),
(2, 'lichi', 'gxjhsfxsyfx', 'bsvxghfxhsgfxs', '500000'),
(2, 'lichi', 'gxjhsfxsyfx', 'bsvxghfxhsgfxs', '500000'),
(3, 'mango', 'fytrtfx', 'hjstyyrdywf', '20000'),
(1, 'orange', '2 kg', 'dhaka', '20000'),
(4, 'mango', '4kg', 'barisal', '5000'),
(5, 'mango', '44777', 'ggsxsx', '20000'),
(6, 'lichi', 'gxsg', 'xsfcsc', '600000'),
(7, 'lichi', '50', 'mirpur', '10000'),
(8, 'mago', 'fyaf', 'hfdwtyfwdfw', '50000'),
(9, 'mango', '2 kg', 'rajshahi', '30000'),
(10, 'lichi', '100pc', 'dinajpur', '900');

-- --------------------------------------------------------

--
-- Table structure for table `consumerproducts`
--

CREATE TABLE `consumerproducts` (
  `pid` int(250) NOT NULL,
  `pname` varchar(250) NOT NULL,
  `pquantity` varchar(250) NOT NULL,
  `place` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumerproducts`
--

INSERT INTO `consumerproducts` (`pid`, `pname`, `pquantity`, `place`, `price`) VALUES
(1, 'mango', '1 kg', 'mirpur', '120'),
(1, 'mango', '1 kg', 'mirpur', '120'),
(1, 'mango', '1 kg', 'mirpur', '120'),
(1, 'mango', '1 kg', 'mirpur', '120'),
(1, 'mango', '1 kg', 'mirpur', '120'),
(2, 'lichi', '100pc', 'magura', '3000'),
(3, 'lichi', '6kg', 'dhaka', '2000'),
(4, 'mango', '10kg', 'rajshahi', '5000'),
(5, 'lichi', '6kg', 'rangpur', '6000');

-- --------------------------------------------------------

--
-- Table structure for table `empaccounts`
--

CREATE TABLE `empaccounts` (
  `pid` int(250) NOT NULL,
  `ammount` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empaccounts`
--

INSERT INTO `empaccounts` (`pid`, `ammount`) VALUES
(2, '3000'),
(3, '2000'),
(4, '5000');

-- --------------------------------------------------------

--
-- Table structure for table `employeers`
--

CREATE TABLE `employeers` (
  `id` int(11) NOT NULL,
  `ename` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeers`
--

INSERT INTO `employeers` (`id`, `ename`, `number`, `username`, `password`) VALUES
(2, 'kongkon', '12545', 'kongkon', '12345'),
(3, 'leon', '4676', 'leon', 'leon'),
(4, 'badhon', '698896', 'badhon', 'gff'),
(5, 'lujain', '12456', 'lujain', 'lujain'),
(6, 'lujain', '12345', 'lujain', 'lujain'),
(7, 'antara', '12456', 'antara', 'antara'),
(8, 'antara', '12456', 'antara', 'antara'),
(9, 'abcd', '12456', 'abcd', '12'),
(10, 'motu', '78622', 'motu', '1'),
(11, 'tanjila', '015524', 'tanjila', '1'),
(12, 'sf', 'sfwewete', 'fwetwwtw', '1'),
(14, 'ghghdh', 'fdgff', 'gdhh', '1');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `number`, `password`) VALUES
(2, 'sheikh', 'sheikh@gmail.com', '4646464', 'sheikh');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `pid` int(11) NOT NULL,
  `pname` varchar(250) NOT NULL,
  `pquantity` varchar(250) NOT NULL,
  `place` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`pid`, `pname`, `pquantity`, `place`, `price`) VALUES
(6, 'mango', '5kg', 'rajshahi', '8000'),
(7, 'banana', '50 dozen', 'dhaka', '400');

-- --------------------------------------------------------

--
-- Table structure for table `rejectproducts`
--

CREATE TABLE `rejectproducts` (
  `pid` int(11) NOT NULL,
  `pname` varchar(250) NOT NULL,
  `pquantity` varchar(250) NOT NULL,
  `place` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rejectproducts`
--

INSERT INTO `rejectproducts` (`pid`, `pname`, `pquantity`, `place`, `price`) VALUES
(5, 'mango', '8kg', 'dhaka', '2000'),
(6, 'jackfruit', '20pc', 'dhaka', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `rents`
--

CREATE TABLE `rents` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rents`
--

INSERT INTO `rents` (`id`, `name`, `price`, `type`) VALUES
(4, 'pazero', '500000', ''),
(5, 'pazero jeep', '800000', ''),
(6, 'xcorola', '5000000', 'private'),
(7, 'xcorolla', '120000000', 'private'),
(9, 'pazero jeep', '800000', 'private');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `pname` varchar(250) NOT NULL,
  `collect` varchar(250) NOT NULL,
  `deliver` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`pname`, `collect`, `deliver`) VALUES
('mango', '80kg', '72kg'),
('orange', '20kg', '15kg');

-- --------------------------------------------------------

--
-- Table structure for table `returneds`
--

CREATE TABLE `returneds` (
  `pid` int(250) NOT NULL,
  `pname` varchar(250) NOT NULL,
  `pquantity` varchar(250) NOT NULL,
  `place` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returneds`
--

INSERT INTO `returneds` (`pid`, `pname`, `pquantity`, `place`, `price`) VALUES
(1, 'jackfruit', '5335', 'rajbari', '6000'),
(1, 'jackfruit', '5335', 'rajbari', '6000'),
(1, 'jackfruit', '5335', 'rajbari', '6000'),
(1, 'jackfruit', '5335', 'rajbari', '6000'),
(1, 'jackfruit', '5335', 'rajbari', '6000'),
(1, 'jackfruit', '5335', 'rajbari', '6000'),
(2, 'svwsvwv', 'jhgduyfwdwfdfw', 'hgyfdyw', 'xhjwgdwfdtwfd'),
(3, 'mango', '2kg', 'mirpur', '20000000'),
(4, 'lichi', 'jessore', 'jamuna', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `ammount` varchar(250) NOT NULL,
  `month` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`ammount`, `month`, `year`) VALUES
('10000', 'july', '2019'),
('10000', 'august', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `supplieraccounts`
--

CREATE TABLE `supplieraccounts` (
  `ammount` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplieraccounts`
--

INSERT INTO `supplieraccounts` (`ammount`) VALUES
('500000'),
('20000'),
('20000'),
('5000'),
('20000'),
('600000'),
('10000'),
('50000'),
('30000'),
('900');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `mail`, `number`, `password`, `type`) VALUES
(1, 'tanjila', 'tanjila@gmail.com', '123456', 'tanjila', 'admin'),
(2, 'nasif', 'nasif@gmail.com', '52145623', 'nasif', 'admin'),
(3, 'lusai', 'luai2gmail.com', '5644', 'lusai', 'user'),
(4, 'nasif', 'nasif@gmail.com', '102030', 'nasif', 'admin'),
(5, 'nasif', 'nasif@gmail.com', '102030', 'nasif', 'admin'),
(6, 'tanjila', 'tanjila@gmail.com', '1278', 'tanjila', 'admin'),
(7, 'tanjila', 'tanjila@gmail.com', '0000000', 'tanjila', 'admin'),
(8, 'tanjila', 'tanjila@gmail.com', '54', 'tanjila', 'admin'),
(9, 'tanjila', 'tanjila@gmail.com', '54', 'tanjila', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `availablecar`
--
ALTER TABLE `availablecar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `availablecars`
--
ALTER TABLE `availablecars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `availableproducts`
--
ALTER TABLE `availableproducts`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `employeers`
--
ALTER TABLE `employeers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `rejectproducts`
--
ALTER TABLE `rejectproducts`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `availablecar`
--
ALTER TABLE `availablecar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `availablecars`
--
ALTER TABLE `availablecars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `availableproducts`
--
ALTER TABLE `availableproducts`
  MODIFY `pid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employeers`
--
ALTER TABLE `employeers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rejectproducts`
--
ALTER TABLE `rejectproducts`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rents`
--
ALTER TABLE `rents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
