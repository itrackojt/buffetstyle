-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 08:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buffetstyle`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_table`
--

CREATE TABLE `all_table` (
  `id` int(11) NOT NULL,
  `table_number` varchar(255) NOT NULL,
  `stat` varchar(255) NOT NULL,
  `order_time` varchar(255) NOT NULL,
  `tracking_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_table`
--

INSERT INTO `all_table` (`id`, `table_number`, `stat`, `order_time`, `tracking_number`) VALUES
(1, 'Table no. 1', 'Available', '1:15:pm', 0),
(2, 'Table no. 2', 'Available', '1:05:pm', 0),
(3, 'Table no. 3', 'Available', '1:06:pm', 0),
(4, 'Table no. 4', 'Available', '11:26:am', 0),
(5, 'Table no. 5', 'Available', '11:24:am', 0);

-- --------------------------------------------------------

--
-- Table structure for table `all_transactions`
--

CREATE TABLE `all_transactions` (
  `id` int(11) NOT NULL,
  `tracking_number` varchar(255) NOT NULL,
  `number_customer` varchar(255) NOT NULL,
  `price_customer` varchar(255) NOT NULL,
  `kids_number` varchar(255) NOT NULL,
  `kids_price` varchar(255) NOT NULL,
  `senior_number` varchar(255) NOT NULL,
  `senior_price` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `table_number` varchar(255) NOT NULL,
  `time_in` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_transactions`
--

INSERT INTO `all_transactions` (`id`, `tracking_number`, `number_customer`, `price_customer`, `kids_number`, `kids_price`, `senior_number`, `senior_price`, `total`, `table_number`, `time_in`) VALUES
(47, '145', '1', '500', '1', '400', '1', '300', '1200', 'Table no. 1', '1:08 pm'),
(48, '146', '1', '500', '1', '400', '1', '300', '1200', 'Table no. 1', '1:15 pm');

-- --------------------------------------------------------

--
-- Table structure for table `billout`
--

CREATE TABLE `billout` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `table_number` varchar(255) NOT NULL,
  `tracking_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billout`
--

INSERT INTO `billout` (`id`, `name`, `table_number`, `tracking_number`) VALUES
(1, '', '', 0),
(2, '', 'Table no. 2', 0),
(3, 'Mark Lawrence Parone', 'Table no. 1', 0),
(4, 'Mark Lawrence Parone', 'Table no. 1', 0),
(5, 'Mark Lawrence Parone', 'Table no. 1', 0),
(6, 'Mark Lawrence', 'Table no. 1', 0),
(7, 'mark', 'Table no. 1', 0),
(8, '', 'Table no. 1', 0),
(9, 'mark', 'Table no. 1', 0),
(10, 'lawrence', 'Table no. 1', 0),
(11, 'gg', 'Table no. 1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `catch_order`
--

CREATE TABLE `catch_order` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `table_number` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tracking_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catch_order`
--

INSERT INTO `catch_order` (`id`, `order_id`, `name`, `quantity`, `table_number`, `status`, `tracking_number`) VALUES
(113, 0, 'Cupcake', '1', 'Table no. 1', '4', 145),
(114, 0, 'corn', '1', 'Table no. 1', '4', 145),
(115, 0, 'corn', '1', 'Table no. 1', '4', 146),
(116, 0, 'Ketchup', '1', 'Table no. 1', '4', 146);

-- --------------------------------------------------------

--
-- Table structure for table `fetch_table`
--

CREATE TABLE `fetch_table` (
  `id` int(11) NOT NULL,
  `table_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fragment_one`
--

CREATE TABLE `fragment_one` (
  `id` int(11) NOT NULL,
  `one_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `available` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fragment_one`
--

INSERT INTO `fragment_one` (`id`, `one_id`, `image`, `name`, `available`) VALUES
(12, 1, 'addnine.png', 'Cupcake', 'available'),
(13, 2, 'addeight.png', 'corn', 'available'),
(14, 3, 'addfive.png', 'Ketchup', 'available'),
(15, 4, 'addfour.png', 'Gravy', 'available'),
(16, 5, 'addone.png', 'Mashed potato', 'available'),
(17, 6, 'addseven.png', 'Coleslaw', 'Available'),
(18, 7, 'addten.png', 'Sundae', 'Not available');

-- --------------------------------------------------------

--
-- Table structure for table `imagedata`
--

CREATE TABLE `imagedata` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imagedata`
--

INSERT INTO `imagedata` (`id`, `image`) VALUES
(1, '1864976984_1653618698.jpeg'),
(2, '129202021_1654046229.jpeg'),
(3, '1811438098_1654048942.jpeg'),
(4, '1628662020_1654048954.jpeg'),
(5, '2012221522_1654048962.jpeg'),
(6, '1926030439_1654049324.jpeg'),
(7, '1837769422_1654049348.jpeg'),
(8, '1639580157_1654049679.jpeg'),
(9, '1044739931_1654049680.jpeg'),
(10, '585616821_1654049682.jpeg'),
(11, '1831782318_1654049736.jpeg'),
(12, '1958370987_1654049747.jpeg'),
(13, '396265182_1654049784.jpeg'),
(14, '676573870_1654049792.jpeg'),
(15, '190955615_1654062226.jpeg'),
(16, '400681976_1654062260.jpeg'),
(17, '285525563_1654660566.jpeg'),
(18, '1180096807_1654660738.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `input_customer`
--

CREATE TABLE `input_customer` (
  `id` int(11) NOT NULL,
  `number_customer` int(11) NOT NULL,
  `price_customer` varchar(255) NOT NULL,
  `kids_number` varchar(255) NOT NULL,
  `kids_price` varchar(255) NOT NULL,
  `senior_number` varchar(255) NOT NULL,
  `senior_price` varchar(255) NOT NULL,
  `table_number` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `time_in` varchar(255) NOT NULL,
  `tracking_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `input_customer`
--

INSERT INTO `input_customer` (`id`, `number_customer`, `price_customer`, `kids_number`, `kids_price`, `senior_number`, `senior_price`, `table_number`, `total`, `time_in`, `tracking_number`) VALUES
(1, 1, '500', '1', '400', '1', '300', 'Table no. 1', '1200', '1:15 pm', 146),
(2, 1, '500', '1', '400', '1', '300', 'Table no. 2', '1200', '1:05 pm', 143),
(3, 1, '500', '1', '400', '1', '300', 'Table no. 3', '1200', '1:06 pm', 144),
(4, 0, '0', '0', '0', '0', '0', 'Table no. 4', '0', '11:26 am', 111),
(5, 0, '0', '0', '0', '0', '0', 'Table no. 5', '0', '11:24 am', 109);

-- --------------------------------------------------------

--
-- Table structure for table `returno`
--

CREATE TABLE `returno` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `table_number` varchar(255) NOT NULL,
  `tracking_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_two`
--

CREATE TABLE `table_two` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `table_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trackingordernumber`
--

CREATE TABLE `trackingordernumber` (
  `tracking_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trackingordernumber`
--

INSERT INTO `trackingordernumber` (`tracking_number`) VALUES
(95),
(96),
(97),
(98),
(99),
(100),
(101),
(102),
(103),
(104),
(105),
(106),
(107),
(108),
(109),
(110),
(111),
(112),
(113),
(114),
(115),
(116),
(117),
(118),
(119),
(120),
(121),
(122),
(123),
(124),
(125),
(126),
(127),
(128),
(129),
(130),
(131),
(132),
(133),
(134),
(135),
(136),
(137),
(138),
(139),
(140),
(141),
(142),
(143),
(144),
(145),
(146),
(147);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_number` int(11) NOT NULL,
  `table_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_table`
--
ALTER TABLE `all_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_transactions`
--
ALTER TABLE `all_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billout`
--
ALTER TABLE `billout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catch_order`
--
ALTER TABLE `catch_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fetch_table`
--
ALTER TABLE `fetch_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fragment_one`
--
ALTER TABLE `fragment_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagedata`
--
ALTER TABLE `imagedata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_customer`
--
ALTER TABLE `input_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `returno`
--
ALTER TABLE `returno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_two`
--
ALTER TABLE `table_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trackingordernumber`
--
ALTER TABLE `trackingordernumber`
  ADD PRIMARY KEY (`tracking_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_table`
--
ALTER TABLE `all_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `all_transactions`
--
ALTER TABLE `all_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `billout`
--
ALTER TABLE `billout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `catch_order`
--
ALTER TABLE `catch_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `fetch_table`
--
ALTER TABLE `fetch_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fragment_one`
--
ALTER TABLE `fragment_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `imagedata`
--
ALTER TABLE `imagedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `input_customer`
--
ALTER TABLE `input_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `returno`
--
ALTER TABLE `returno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `table_two`
--
ALTER TABLE `table_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trackingordernumber`
--
ALTER TABLE `trackingordernumber`
  MODIFY `tracking_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
