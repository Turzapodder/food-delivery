-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2021 at 01:20 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `homemadefood`
--

CREATE TABLE `homemadefood` (
  `name` varchar(30) NOT NULL,
  `location` varchar(50) DEFAULT NULL,
  `imagepath` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homemadefood`
--

INSERT INTO `homemadefood` (`name`, `location`, `imagepath`) VALUES
('Burgerlogy', 'Bashundhara', 'image/r2.jpg'),
('Cafe', 'Mirpur', 'image/r5.jpg'),
('Chilox', 'Banani', 'image/r1.png'),
('Dominos Pizza', 'Dhanmondi', 'image/r3.jpg'),
('Sultans Dine', 'Bashundhara R/A', 'image/r4.png');


CREATE TABLE `homemadefoodmenu` (
  `id` int(11) NOT NULL,
  `item_name` varchar(30) DEFAULT NULL,
  `price` varchar(11) DEFAULT NULL,
  `imagepath` varchar(100) DEFAULT NULL,
  `homemaderestaurant_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `homemadefoodmenu` (`id`, `item_name`, `price`, `homemaderestaurant_name`, `imagepath`) VALUES
(1, 'Burger', '300 Tk', 'Burgerlogy','assets/1.jpg'),
(2, 'Pizza', '500 Tk', 'Chilox','assets/2.jpg'),
(3, 'Kabab', '100 Tk', 'Sultans Dine','assets/3.jpg'),
(4, 'Burger', '100 Tk', 'Burgerlogy','assets/4.jpg'),
(5, 'Pizza', '300 Tk', 'Chilox','assets/5.jpg'),
(6, 'khacchi', '350 Tk', 'Sultans Dine','assets/6.jpg'),
(7, 'porota', '10 Tk', 'Sultans Dine','assets/7.jpg'),
(8, 'Chickhen fry chaap', '80 Tk', 'Burgerlogy','assets/8.jpg'),
(9, 'Beef chaap', '100 Tk', 'Sultans Dine','assets/2.jpg'),
(10, 'morog polap', '140 Tk', 'Sultans Dine','assets/4.jpg'),
(11, 'Beef Khacchi', '250 Tk', 'Chilox','assets/6.jpg'),
(12, 'pizza', '290 Tk', 'Burgerlogy','assets/8.jpg');
-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `name` varchar(30) NOT NULL,
  `location` varchar(50) DEFAULT NULL,
  `imagepath` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`name`, `location`, `imagepath`) VALUES
('Keka Apa', 'Dhaka', 'image/cook4.jpg'),
('Kishowar', 'Australia', 'image/cook3.jpg'),
('Oporichito Bekti', 'Bongshal, Dhaka', 'image/cook1.jpg'),
('Porotawala', 'Satarkul, Badda', 'image/cook2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `restaurantmenu` (
  `id` int(11) NOT NULL,
  `item_name` varchar(30) DEFAULT NULL,
  `price` varchar(11) DEFAULT NULL,
  `imagepath` varchar(100) DEFAULT NULL,
  `restaurant_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `restaurantmenu` (`id`, `item_name`, `price`, `restaurant_name`,`imagepath`) VALUES
(1, 'Burger', '300 Tk', 'Kishowar','assets/1.jpg'),
(2, 'Pizza', '500 Tk', 'Kishowar','assets/2.jpg'),
(3, 'Kabab', '100 Tk', 'Keka Apa','assets/3.jpg'),
(4, 'Burger', '100 Tk', 'Kishowar','assets/4.jpg'),
(5, 'Pizza', '300 Tk', 'Oporichito Bekti','assets/5.jpg'),
(6, 'Kacchi', '350 Tk', 'Keka Apa','assets/6.jpg'),
(7, 'Porota', '10 Tk', 'Porotawala','assets/7.jpg'),
(8, 'Chickhen fry chaap', '80 Tk', 'Kishowar','assets/8.jpg'),
(9, 'Beef chaap', '100 Tk', 'Porotawala','assets/2.jpg'),
(10, 'Morog polap', '140 Tk', 'Keka Apa','assets/4.jpg'),
(11, 'Beef Khacchi', '250 Tk', 'Oporichito Bekti','assets/6.jpg'),
(12, 'Pizza', '290 Tk', 'Kishowar','assets/8.jpg');



CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `DOB` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `fullname` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` ( `username`, `email`, `password`, `DOB`, `gender`, `address`, `fullname`) VALUES
( 'Pure Coding', 'purecodingofficial@gmail.com', '0139a3c5cf42394be982e766c93f5ed0', NULL, NULL, NULL, NULL),
('turza', 'turza@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'male', '', 'turza podder');

--
-- Indexes for dumped tables
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(30) DEFAULT NULL,
  `product_name` varchar(30) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




--
-- Indexes for table `homemadefood`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homemadefood`
--
ALTER TABLE `homemadefood`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `homemadefoodmenu`
--
ALTER TABLE `homemadefoodmenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk2` (`homemaderestaurant_name`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `restaurantmenu`
--
ALTER TABLE `restaurantmenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk` (`restaurant_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homemadefoodmenu`
--
ALTER TABLE `homemadefoodmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `restaurantmenu`
--
ALTER TABLE `restaurantmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `homemadefoodmenu`
--
ALTER TABLE `homemadefoodmenu`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`homemaderestaurant_name`) REFERENCES `homemadefood` (`name`);

--
-- Constraints for table `restaurantmenu`
--
ALTER TABLE `restaurantmenu`
  ADD CONSTRAINT `fk` FOREIGN KEY (`restaurant_name`) REFERENCES `restaurant` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
