-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 03:54 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `linkcatID` int(11) NOT NULL,
  `type` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `name`, `description`, `linkcatID`, `type`) VALUES
(1, 'Frugal Tips', '', 0, 'recipe'),
(2, 'How to Bake Bread', '', 0, 'recipe'),
(3, 'Make you own Dairy Products', '', 0, 'recipe'),
(4, 'Canning & Preserving', '', 0, 'recipe'),
(5, 'My Recipes', '', 0, 'recipe'),
(6, 'Homemade Jam', '', 4, 'recipe'),
(7, 'Canning Spaghetti Sauce', '', 4, 'recipe'),
(8, 'Canning Salsa', '', 4, 'recipe'),
(9, 'Canning Dried Beans', '', 4, 'recipe'),
(10, 'Canning Beef Stew', '', 4, 'recipe'),
(11, 'Lacto-Fermented Sauerkraut', '', 4, 'recipe'),
(12, 'Lacto-Fermented Salsa', '', 4, 'recipe'),
(13, 'Canning Green Beans', '', 4, 'recipe'),
(14, 'Canning Corn on the Cob', '', 4, 'recipe'),
(15, 'Saving Money in the Kitchen', '', 1, 'recipe'),
(16, 'Cast Iron Cookware', '', 1, 'recipe'),
(17, 'Making Use of Bulk Foods to Ease the Budget', '', 1, 'recipe'),
(18, 'Cooking with Beans''s', '', 1, 'recipe'),
(19, 'Freezer Cooking', '', 1, 'recipe'),
(20, 'Tips on How to Feed a Large Crowd', '', 1, 'recipe'),
(21, 'Whole Wheat 6 loaf Basic Bread', '', 2, 'recipe'),
(22, 'Garlic Cheese Dinner Rolls', '', 2, 'recipe'),
(23, 'Whole Wheat Pizza Crust', '', 2, 'recipe'),
(24, 'Challah', '', 2, 'recipe'),
(25, 'Pepperoni Bread', '', 2, 'recipe'),
(26, 'Bread Making 101', '', 2, 'recipe'),
(27, 'FAQ''s on Whole Wheat Bread Baking', '', 2, 'recipe'),
(28, 'Super Easy Feta Cheese', '', 3, 'recipe'),
(29, 'How to Make Cream Cheese', '', 3, 'recipe'),
(30, 'Homemade Icecream', '', 3, 'recipe'),
(31, 'How to make Yogurt', '', 3, 'recipe'),
(32, 'Breakfast Recipes', '', 5, 'recipe'),
(33, 'Lunches & Snacks', '', 5, 'recipe'),
(34, 'Main Dishes', '', 5, 'recipe'),
(35, 'Crockpot Cooking', '', 5, 'recipe'),
(36, 'Soup Recipes', '', 5, 'recipe'),
(37, 'Side Dishes', '', 5, 'recipe'),
(38, 'Oatmeal Pancakes', '', 32, 'recipe'),
(39, 'French Toast', '', 32, 'recipe'),
(40, 'Granola', '', 32, 'recipe'),
(41, 'Chicken', '', 34, 'recipe'),
(42, 'Beef', '', 34, 'recipe'),
(43, 'Pork', '', 34, 'recipe'),
(44, 'Beans', '', 44, 'recipe'),
(45, 'Fish', '', 34, 'recipe'),
(46, 'New Frugal Tip Category', '', 1, 'recipe'),
(48, 'New Unneeded Category', '', 1, 'recipe'),
(49, 'Cheap Recipes', '', 34, 'recipe'),
(50, 'Growing a Turnip ', '', 0, 'homestead_garden'),
(51, 'Spagetti', '', 0, 'recipe');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `configID` int(11) NOT NULL,
  `config_key` varchar(50) NOT NULL,
  `config_value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`configID`, `config_key`, `config_value`) VALUES
(1, 'update_interval', '30'),
(2, 'ebook_url', 'php/ebooks');

-- --------------------------------------------------------

--
-- Table structure for table `ebooks`
--

CREATE TABLE `ebooks` (
  `ebook_id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `ebook_url` varchar(60) DEFAULT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ebooks`
--

INSERT INTO `ebooks` (`ebook_id`, `title`, `description`, `price`, `ebook_url`, `image_url`) VALUES
(1, 'How to make a Garden', 'Tips on how to cultivate the greatest garden ever known to man....or woman', 2.67, 'garden.pdf', ''),
(2, 'How to Instant Pot Anything', 'A magic recipe that allows to cook anything you want in an instant pot', 4.99, 'instant.pdf', ''),
(3, 'The Best Way to Preserve Goods', 'After reading this ebook you can store any organic vegetable for life', 1.50, 'canning.pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `nav_categories`
--

CREATE TABLE `nav_categories` (
  `nav_categoryID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `cat_key` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nav_categories`
--

INSERT INTO `nav_categories` (`nav_categoryID`, `name`, `cat_key`) VALUES
(1, 'Recipes', 'recipe'),
(2, 'Crafts & Sewing', 'crafts_sewing'),
(3, 'Homestead & Garden', 'homestead_garden'),
(4, 'Family', 'family'),
(5, 'Homemaking', 'homemaking');

-- --------------------------------------------------------

--
-- Table structure for table `paypal_transactions`
--

CREATE TABLE `paypal_transactions` (
  `transactions_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `complete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paypal_transactions`
--

INSERT INTO `paypal_transactions` (`transactions_id`, `user_id`, `payment_id`, `hash`, `complete`) VALUES
(2, 1, 'PAY-85W56302381407134LDQWF7Y', 'bde269bdaa35042186a295b2d9205c7c', 0),
(3, 1, 'PAY-0NL29315CT048492NLDQWJNY', 'a76a3637e5ebdf05ed7fefd4699f5dbe', 0),
(4, 1, 'PAY-0UX70321GU4969459LDQWKYA', '5d53a6a872a6ce03799de938d6c588fd', 0),
(5, 1, 'PAY-2N464020U67759144LDQWLCI', 'a2dd3d929410796158754747d61ba6ff', 0),
(6, 1, 'PAY-06919351MH6009749LDQWLIY', 'bc0a60d65ab4357cd649846dea6997d8', 0),
(7, 1, 'PAY-1DH7387321843833DLDRNS5Y', '89522b2efc6effdd698f0bb4bec5acaf', 0),
(8, 1, 'PAY-6NL81993SF4434041LDRNT7A', 'c7cf326fe03586eb2aba32a7d586da1c', 0),
(9, 1, 'PAY-66459217NM503180ELDRNXAQ', 'd4545a0a5c013d703f5c9895a92f5dce', 0);

-- --------------------------------------------------------

--
-- Table structure for table `paypal_users`
--

CREATE TABLE `paypal_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `member` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paypal_users`
--

INSERT INTO `paypal_users` (`user_id`, `username`, `email`, `member`) VALUES
(1, 'alex', 'alex@alex.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `ratingId` int(11) NOT NULL,
  `address` varchar(20) NOT NULL,
  `rate` int(11) NOT NULL,
  `textblockId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`ratingId`, `address`, `rate`, `textblockId`) VALUES
(1, '::1', 3, 6),
(2, '167.4.86.173', 1, 6),
(3, '83.19.128.42', 2, 6),
(4, '74.119.55.210', 3, 6),
(5, '201.185.186.133', 3, 6),
(6, '152.78.164.190', 5, 6),
(7, '::1', 3, 4),
(8, '::1', 3, 3),
(9, '::1', 3, 2),
(10, '::1', 3, 31),
(11, '::1', 3, 30),
(12, '::1', 3, 32),
(13, '::1', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `textblock`
--

CREATE TABLE `textblock` (
  `textblockID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(400) DEFAULT NULL,
  `promotion_message` varchar(255) DEFAULT NULL,
  `text` text NOT NULL,
  `categoryID` int(11) NOT NULL,
  `added_date` varchar(30) DEFAULT NULL,
  `sort_date` date DEFAULT NULL,
  `sort_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `textblock`
--

INSERT INTO `textblock` (`textblockID`, `title`, `description`, `promotion_message`, `text`, `categoryID`, `added_date`, `sort_date`, `sort_time`) VALUES
(1, 'Fried Fish..', 'A recipe for making your own fried fish..', 'Check out this Fish recipe!', 'In a medium bowl, beat together egg, beer, flour, garlic powder, salt, and pepper. Place cod in the bowl, and thoroughly coat with the mixture.\r\n\r\nIn a separate medium bowl, mix the cornflake crumbs and Cajun seasoning. ...\r\n\r\nIn a large, heavy skillet or deep fryer, heat the oil to 365 degrees F (185 degrees C).', 45, 'Nov 13, 2016', '2016-11-10', NULL),
(2, 'Baked Fish', 'A recipe for you to make your own baked fish', NULL, 'Preheat oven to 425. Lightly grease or spray a 13" x 9" (or larger) baking dish.\r\n\r\nRinse fish filets and pat dry. ...\r\nIn a small bowl, combine melted butter, lemon juice, garlic, sugar, pepper, thyme and parsley. ...\r\n\r\nSprinkle with the breadcrumbs.\r\n\r\nBake at 425 for about 20 minutes or until filets are opaque and flakey.', 45, 'Nov 13, 2016', '2016-11-10', NULL),
(3, 'Boiled Fish', 'A Recipe for Boiling That Fish', NULL, 'A great recipe for all that tasty boiled fishA great recipe for all that tasty boiled fishA great recipe for all that tasty boiled fishA great recipe for all that tasty boiled fishA great recipe for all that tasty boiled fish', 45, 'Nov 13, 2016', '2016-11-10', NULL),
(4, 'Frugal Tip Category ', 'Frugal Tip Category Descriptions', 'Check out this frugal tip!', 'Frugal Tip Category TextFrugal Tip Category TextFrugal Tip Category TextFrugal Tip Category TextFrugal Tip Category TextFrugal Tip Category TextFrugal Tip Category TextFrugal Tip Category TextFrugal Tip Category TextFrugal Tip Category TextFrugal Tip Category TextFrugal Tip Category TextFrugal Tip Category TextFrugal Tip Category TextFrugal Tip Category TextFrugal Tip Category TextFrugal Tip Category TextFrugal Tip Category Text', 46, 'Nov 13, 2016', '2016-11-10', NULL),
(5, 'New Recipe', 'New Recipe', NULL, 'New RecipeNew RecipeNew RecipeNew RecipeNew Recipe', 47, 'Nov 13, 2016', '2016-11-10', NULL),
(6, 'Cheap Recipe number 1', 'Cheap Recipe number 1Cheap Recipe number 1Cheap Recipe number 1', NULL, 'Cheap Recipe number 1Cheap Recipe number 1Cheap Recipe number 1Cheap Recipe number 1Cheap Recipe number 1Cheap Recipe number 1Cheap Recipe number 1Cheap Recipe number 1Cheap Recipe number 1Cheap Recipe number 1Cheap Recipe number 1Cheap Recipe number 1Cheap Recipe number 1Cheap Recipe number 1Cheap Recipe number 1Cheap Recipe number 1', 49, 'Nov 13, 2016', '2016-11-10', NULL),
(25, 'New Beef Article Today', 'New Recipe to test the add date feature for updates section', NULL, 'New Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\n\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\nNew Recipe to test the add date feature for updates section\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section', 42, '13 Nov, 2016', '2016-11-13', '15:07:26'),
(26, 'New Beef Article Today 1', 'New Recipe to test the add date feature for updates section', NULL, 'New Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\n\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\nNew Recipe to test the add date feature for updates section\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section', 42, '13 Nov, 2016', '2016-11-13', '15:08:11'),
(27, 'New Beef Article Today 2', 'New Recipe to test the add date feature for updates section', NULL, 'New Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\n\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\nNew Recipe to test the add date feature for updates section\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section', 42, '13 Nov, 2016', '2016-11-13', '15:08:17'),
(28, 'New Beef Article Today 3', 'New Recipe to test the add date feature for updates section', NULL, 'New Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\n\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\n\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section\r\nNew Recipe to test the add date feature for updates section\r\nNew Recipe to test the add date feature for updates sectionNew Recipe to test the add date feature for updates section', 42, '13 Nov, 2016', '2016-11-13', '15:08:22'),
(29, 'How to make Pinto beans', 'Making Pinto beans is easy in just a few quick steps', NULL, 'Making Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick steps\r\n\r\n\r\n\r\nMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick steps\r\n\r\n\r\n\r\nMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick steps\r\n\r\n\r\nMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick steps\r\n\r\n\r\n\r\nMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick steps\r\n\r\n\r\n\r\nMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick stepsMaking Pinto beans is easy in just a few quick steps', 44, '13 Nov, 2016', '2016-11-13', '17:25:38'),
(30, 'Quick Beef article', 'Quick Beef articleQuick Beef articleQuick Beef article', NULL, 'Quick Beef articleQuick Beef articleQuick Beef articleQuick Beef articleQuick Beef articleQuick Beef articleQuick Beef articleQuick Beef articleQuick Beef articleQuick Beef article\r\n\r\n\r\nQuick Beef articleQuick Beef articleQuick Beef article\r\n\r\nQuick Beef articleQuick Beef articleQuick Beef articleQuick Beef article', 42, '15 Nov, 2016', '2016-11-15', '18:04:36'),
(31, 'New Beef article', 'New Beef articleNew Beef articleNew Beef article', 'Check out this Beef Article!', 'New Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef article\r\n\r\n\r\nNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef articleNew Beef article', 42, '16 Nov, 2016', '2016-11-16', '16:25:29'),
(32, 'This is how you grow the bestest Turnip', 'Growing a Turnip for Dummies', NULL, 'Put it in dirt, add water. Rinse and repeat.', 50, '27 Feb, 2017', '2017-02-27', '17:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `name`, `username`, `password`) VALUES
(1, 'Crystal', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`configID`);

--
-- Indexes for table `ebooks`
--
ALTER TABLE `ebooks`
  ADD PRIMARY KEY (`ebook_id`);

--
-- Indexes for table `nav_categories`
--
ALTER TABLE `nav_categories`
  ADD PRIMARY KEY (`nav_categoryID`);

--
-- Indexes for table `paypal_transactions`
--
ALTER TABLE `paypal_transactions`
  ADD PRIMARY KEY (`transactions_id`);

--
-- Indexes for table `paypal_users`
--
ALTER TABLE `paypal_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`ratingId`);

--
-- Indexes for table `textblock`
--
ALTER TABLE `textblock`
  ADD PRIMARY KEY (`textblockID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `configID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ebooks`
--
ALTER TABLE `ebooks`
  MODIFY `ebook_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nav_categories`
--
ALTER TABLE `nav_categories`
  MODIFY `nav_categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `paypal_transactions`
--
ALTER TABLE `paypal_transactions`
  MODIFY `transactions_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `paypal_users`
--
ALTER TABLE `paypal_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `ratingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `textblock`
--
ALTER TABLE `textblock`
  MODIFY `textblockID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
