-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 05, 2021 at 06:12 PM
-- Server version: 10.4.15-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u271928709_relm`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pets` varchar(255) NOT NULL,
  `cleanliness` varchar(255) NOT NULL,
  `noise_level` varchar(255) NOT NULL,
  `coed_living` varchar(255) NOT NULL,
  `life_style` varchar(255) NOT NULL,
  `dietary_habits` varchar(255) NOT NULL,
  `sleep_schedule` varchar(255) NOT NULL,
  `frequency_of_guests` varchar(255) NOT NULL,
  `lifestyle_entertainment` varchar(255) NOT NULL,
  `education_studentlife` varchar(255) NOT NULL,
  `health_fitness` varchar(255) NOT NULL,
  `business_entrepreneurship` varchar(255) NOT NULL,
  `social_interest_housing` varchar(255) NOT NULL,
  `sports_recreation` varchar(255) NOT NULL,
  `creative_performers` varchar(255) NOT NULL,
  `frequency_of_guests_2` varchar(255) NOT NULL,
  `rank_priority_amenities` varchar(500) NOT NULL,
  `pagefour` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `pets`, `cleanliness`, `noise_level`, `coed_living`, `life_style`, `dietary_habits`, `sleep_schedule`, `frequency_of_guests`, `lifestyle_entertainment`, `education_studentlife`, `health_fitness`, `business_entrepreneurship`, `social_interest_housing`, `sports_recreation`, `creative_performers`, `frequency_of_guests_2`, `rank_priority_amenities`, `pagefour`) VALUES
(2, '2015n0805@gmail.com', '123', 'i have pets', 'squeaky clean', 'bit of noise, however i\'m conscientious', 'open to the idea', 'home is a crash pad', 'meat or fish often', 'no defined pattern', 'nearly everyday', 'socialites,nightlife,sports fan', 'graduate,masters', 'circuit training,ironman,yoga', 'startups,blockchain,general business networking', 'senior living,volunteering,philanthropy', 'hiking,motor sports,mountain biking', 'fashionesta,painting', '', 'garage,walk up,visitor parking', ''),
(7, 'ahsanasghar220@gmail.com', '12345678', 'i have pets', 'squeaky clean', 'quiet as a mouse', 'only if the bathroom is private', 'hardcore quarantine', 'vegan kitchen', 'night owl', 'nearly everyday', 'socialites,sports fan,lgbt friendly', 'undergraduate,graduate', 'vegan,vegetarian', 'ux/ui design,software engineering', 'philanthropy,accessible living', 'motorhead,beachgoer', 'painting,video editing', '', 'assigned parking,swimming pool,fire place', ''),
(8, 'm.mahadkhurshid@hotmail.com', '12345', 'i love pets', 'squeaky clean', 'quiet as a mouse', 'open to the idea', 'many weekend trips and outdoorsy', 'meat or fish occasionally', 'night owl', 'nearly everyday', 'socialites,nightlife', 'undergraduate,graduate', 'vegan,vegetarian', 'ux/ui design,software engineering', 'philanthropy,accessible living', 'motorhead,beachgoer', 'painting,video editing', '', 'assigned parking,swimming pool,fire place,covered parking', ''),
(9, '2015n0805@gmail.com', '222', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', '', '', '', '', '', '', '', '', '', ''),
(10, 'testuser@gmail.com', '123', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', '', '', '', '', '', '', '', '', '', ''),
(11, 'testuser2@gmail.com', '123', 'i have pets', 'generally tidy', 'bit of noise, however i\'m conscientious', 'only if the bathroom is private', 'work from home, but get out often', 'meat or fish often', 'no defined pattern', '1-2 times a week', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `login_name` varchar(255) NOT NULL,
  `login_password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `current_city` varchar(255) NOT NULL,
  `home_city` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(4) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` text NOT NULL,
  `desired_city` varchar(255) NOT NULL,
  `desired_movein_date` varchar(255) NOT NULL,
  `relationship_status` varchar(255) NOT NULL,
  `fluent_languages_spoken` varchar(255) NOT NULL,
  `skill1` varchar(255) NOT NULL,
  `skill2` varchar(255) NOT NULL,
  `skill3` varchar(255) NOT NULL,
  `skill4` varchar(255) NOT NULL,
  `skill5` varchar(255) NOT NULL,
  `skill6` varchar(255) NOT NULL,
  `objective1` varchar(255) NOT NULL,
  `objective2` varchar(255) NOT NULL,
  `objective3` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `lifestyle_entertainment` varchar(255) NOT NULL,
  `education_studentlife` varchar(255) NOT NULL,
  `health_fitness` varchar(255) NOT NULL,
  `business_entrepreneurship` varchar(255) NOT NULL,
  `special_interest_housing` varchar(255) NOT NULL,
  `sports_recreation` varchar(255) NOT NULL,
  `creative_performers` varchar(255) NOT NULL,
  `property_pictures` varchar(555) NOT NULL,
  `listing_type` varchar(555) NOT NULL,
  `room_in` varchar(555) NOT NULL,
  `furnishings` varchar(555) NOT NULL,
  `home_features` varchar(555) NOT NULL,
  `bed` varchar(255) NOT NULL,
  `bath` varchar(255) NOT NULL,
  `pets` varchar(255) NOT NULL,
  `sq_feet` varchar(255) NOT NULL,
  `monthly_rent` varchar(255) NOT NULL,
  `lease_term` varchar(255) NOT NULL,
  `property_location` varchar(255) NOT NULL,
  `property_description` varchar(555) NOT NULL,
  `laundary` varchar(255) NOT NULL,
  `parking` varchar(255) NOT NULL,
  `amenities` varchar(255) NOT NULL,
  `car_pictures` varchar(255) NOT NULL,
  `car_type` varchar(25) NOT NULL,
  `car_year` varchar(25) NOT NULL,
  `car_status` varchar(25) NOT NULL,
  `car_condition` varchar(25) NOT NULL,
  `car_location_name` varchar(255) NOT NULL,
  `car_make` varchar(25) NOT NULL,
  `car_model` varchar(25) NOT NULL,
  `car_mileage` varchar(25) NOT NULL,
  `car_price` varchar(25) NOT NULL,
  `car_paint` varchar(25) NOT NULL,
  `car_size` varchar(25) NOT NULL,
  `car_drive` varchar(25) NOT NULL,
  `car_transmission` varchar(25) NOT NULL,
  `car_fuel` varchar(25) NOT NULL,
  `car_cylinders` text NOT NULL,
  `car_description` text NOT NULL,
  `cowork_pictures` text NOT NULL,
  `cowork_location_name` text NOT NULL,
  `cowork_sq_feet` text NOT NULL,
  `cowork_desks` text NOT NULL,
  `cowork_conf_room` text NOT NULL,
  `cowork_pets` text NOT NULL,
  `cowork_restroom` text NOT NULL,
  `cowork_shared_office` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `login_id`, `login_name`, `login_password`, `name`, `profile_picture`, `first_name`, `last_name`, `sex`, `birthdate`, `email`, `current_city`, `home_city`, `created_at`, `is_active`, `password`, `confirm_password`, `desired_city`, `desired_movein_date`, `relationship_status`, `fluent_languages_spoken`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`, `skill6`, `objective1`, `objective2`, `objective3`, `description`, `lifestyle_entertainment`, `education_studentlife`, `health_fitness`, `business_entrepreneurship`, `special_interest_housing`, `sports_recreation`, `creative_performers`, `property_pictures`, `listing_type`, `room_in`, `furnishings`, `home_features`, `bed`, `bath`, `pets`, `sq_feet`, `monthly_rent`, `lease_term`, `property_location`, `property_description`, `laundary`, `parking`, `amenities`, `car_pictures`, `car_type`, `car_year`, `car_status`, `car_condition`, `car_location_name`, `car_make`, `car_model`, `car_mileage`, `car_price`, `car_paint`, `car_size`, `car_drive`, `car_transmission`, `car_fuel`, `car_cylinders`, `car_description`, `cowork_pictures`, `cowork_location_name`, `cowork_sq_feet`, `cowork_desks`, `cowork_conf_room`, `cowork_pets`, `cowork_restroom`, `cowork_shared_office`) VALUES
(8, 0, '', '', 'Ahsan Asghar', '', '', '', 'male', '2020-11-07', 'testuser@gmail.com', '', '', '2021-06-25 16:05:04', 0, '123', '', 'The Valley', '2020-11-10', 'single', 'english', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 0, '', '', 'Ahsan', '', '', '', 'male', '2020-11-04', 'testuser2@gmail.com', '', '', '2021-06-25 16:05:04', 0, '123', '', 'The Valley', '2020-11-24', 'single', 'english', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 0, '', '', '', 'frontside.jpeg', 'Ahsan', 'Asghar', '', '29-09-1995', 'ahsanasghar@gmail.com', 'Lahore', 'Lahore', '2021-06-25 20:34:14', 1, '', '', '', '', 'single', 'English', 's1', 's2', 's3', 's4', 's5', 's6', 'o1', 'o2', 'o3', 'testing', 'nightlife', 'masters', 'power lifting', 'general business networking', 'pet lovers', 'boot camp training', 'creative arts', '', 'for rent,barter for skill', 'apartment,house,condo,townhouse,ranch', 'apartment,house,condo,townhouse', 'assigned parking,swimming pool,fire place,covered parking', '1', '2', '3', '25', '30', '55', 'US', 'testing', '2', '2', '3', '', '1', '2', '3', '2', '', 'asd', 'asd', 'ass', 'sss', '2', '2', '3', '1', '2', '3', 'car des', 'backside_orignal.jpeg', 'US', '2', '3', '1', '2', '3', '2'),
(11, 0, '', '', '', 'profile.png', 'testuser', 'user', '', '12-29-1994', '2015n0805@gmail.com', 'Lahore', 'Lahore', '2021-06-29 18:21:30', 1, '277679', '277679', '', '', 'single & dating', 'English', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'for rent', 'apartment', 'apartment', 'assigned parking,swimming pool', '2', '3', '1', '22', '23', '24', 'Germany', 'house', '1', '2', '3', 'house.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 0, '', '', '', 'profile1.png', 'test', 'user', '', '20-12-1992', 'ahsanasghar2@gmail.com', 'Lahore', 'Lahore', '2021-06-29 18:24:55', 1, '', '', '', '', 'single & dating', 'English', 's1', 's2', 's3', 's4', 's5', 's6', 'o1', 'o2', 'o3', 'random', 'socialites', 'undergraduate,graduate', 'crossfit', 'blockchain', 'single parents,military reserves', 'motor sports', 'painting', '', 'for rent', 'apartment', 'apartment', 'assigned parking,swimming pool,fire place', '1', '2', '3', '22', '23', '24', 'Germany', 'house', '1', '2', '3', 'car.jpg', '2', '2', '3', '2', 'US', 'aaa', 'asd', 'abc', '29', '2', '3', '2', '2', '2', '3', 'car', 'cowork.jpg', 'UK', '22', '3', '3', '2', '2', '2'),
(13, 0, '', '', '', 'profile2.png', 'random', 'user', '', '29-09-1992', 'ahsanasghar22@gmail.com', 'Lahore', 'Lahore', '2021-06-29 18:35:34', 1, '', '', '', '', 'single & dating', 'Arabic', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 0, '', '', '', 'profile3.png', 'testing', '123', '', '29-09-1992', 'ahsanasghar220@gmail.com', 'Lahore', 'Lahore', '2021-06-29 18:37:16', 1, '123', '', '', '', 'single & dating', 'English', 's1', 's3', 's4', 's5', 's6', 's8', 'o1', 'o2o', 'o3', 'testing purpose', 'nightlife', 'masters,greek associations', 'circuit training', 'blockchain', 'philanthropy', 'mountain biking', 'fashionesta', 'house2.jpg', 'for rent', 'apartment', 'apartment', 'assigned parking,swimming pool,fire place', '2', '3', '1', '22', '23', '24', 'UK', 'house', '2', '3', '1', 'car1.jpg', '1', '2', '2', '3', 'Germany', '23', '24', '252', '27', '1', '3', '3', '3', '2', '2', 'car', 'cowork1.jpg', 'UK', '22', '2', '3', '2', '1', '2'),
(15, 0, '', '', '', 'B80C6EC4-A540-4D1D-A100-5E3F1DE60419.jpeg', 'Ahsan', 'Asghar', '', '29/09/1995', 'ahsanasghar291995@gmail.com', 'Lahore', 'Lahore', '2021-07-01 10:26:31', 1, '123', '123', '', '', 'single & dating', 'English', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 0, '', '', '', '6EEB7919-BF9F-49A8-A007-EEEFDAB7C2F7.jpeg', 'Ahsan', 'Asghar', '', '29/09/1995', 'ahsan29@gmail.com', 'Lahore', 'Lahore', '2021-07-01 10:33:56', 1, '123', '123', '', '', 'single & dating', 'English', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 0, '', '', '', '9F22B7B7-5417-469E-9032-AFEF3FB706D4.jpeg', 'Ahsan', 'Asghar', '', '29/09/1995', 'ahsan123@gmail.com', 'Lahore', 'Lahore', '2021-07-02 11:30:14', 1, '123', '123', '', '', 'single & dating', 'English', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'C00ED75B-07D9-4A56-8CDC-3E52C04A9D85.jpeg', 'barter for skill', 'house', 'apartment', 'assigned parking,swimming pool,fire place', '2', '3', '1', '23', '45', '66', 'US', 'Property', '1', '2', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 0, '', '', '', '2082F217-92AC-4955-8657-7DA71C666B86.jpeg', 'Ahsan', 'Asghar', '', '2018-07-22', 'ahsan222@gmail.com', 'Lahore', 'Lahore', '2021-07-03 15:27:07', 1, 'Ahsan123!', 'Ahsan123!', '', '', 'N/A', 'English', '', '', '', '', '', '', '', '', '', '', 'nightlife,global travelers', 'graduate,greek associations', 'circuit training,yoga', 'cryptocurrency,investments', 'senior living,philanthropy', 'surfing,mountain biking', 'graphic artist,fashionesta', 'image.jpg', 'for rent', 'apartment', 'apartment', 'community kitchen,wired internet,gated community,high-rise,nearby bus stop', '2', '2', '2', '250', '', '', 'New york', 'This car is for sale ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 0, '', '', '', 'BCF0BD2A-828C-432F-9CDE-148BAEC2B964.jpeg', 'Ahsan', 'Asghar', '', '2018-07-22', 'ahsanas29@gmail.com', 'Lahore', 'Lahore', '2021-07-03 15:49:31', 1, 'Lovelockup2', 'Lovelockup2', '', '', 'N/A', 'English', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 0, '', '', '', 'profile4.png', 'aa', 'bb', '', '2018-07-22', 'aaabbbccc@gmail.com', 'cc', 'hc', '2021-07-03 15:51:27', 1, 'Lovelockup2', 'Lovelockup2', '', '', 'N/A', 'English', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 0, '', '', '', 'C28AB68B-D57A-4247-A7BC-4923DD55DCA6.jpeg', 'Ahsan', 'Asghar', '', '2018-07-22', 'ahsan321@gmail.com', 'Lahore', 'Lahore', '2021-07-03 16:04:09', 1, 'Lovelockup2', 'Lovelockup2', '', '', 'N/A', 'English', 'Are', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '9DEAC100-E0C7-4EB8-88C1-6D8E01E463E0.jpeg', 'for rent', 'apartment', 'apartment', 'assigned parking,swimming pool,fire place', '2', '2', '3', '22', '33', '44', 'Us', 'Property for sale', '2', '3', '1', '537B6EEB-9C6F-4575-AC8E-7344BD4F84DE.jpeg', '2', '3', '2', '1', 'Uk', '23', '24', '25', '26', '1', '2', '3', '2', '2', '3', 'Car description', 'FB7955C8-6BCB-43F1-B30C-517111B416A7.jpeg', 'Germany ', '22', '4', '1', '3', '3', '2'),
(22, 0, '', '', '', '16253306511364069709062089083128.jpg', 'Bilal', 'Ali', '', '1996-01-04', 'bill.square31@gmail.com', 'LA', 'NY', '2021-07-03 16:44:37', 1, 'Billing1', 'Billing1', '', '', 'N/A', 'English', '', '', '', '', '', '', '', '', '', '', '420 friendly,lgbt friendly', 'doctorate,greek associations', 'swimming,hiking', 'agriculture,internships', 'military reserves,volunteering', 'water sports,motorhead', 'interior design,painting', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'IMG-20210703-WA0017.jpg', '2', '2', '2', '3', 'Los Angeles', '2005', '2006', '1000', '500', '2', '2', '2', '3', '2', '3', 'Hello this is my car 2005 model', '', '', '', '', '', '', '', ''),
(23, 0, '', '', '', 'image1.jpg', 'Ahsan', 'Asghar', '', '2018-07-22', 'aahhss@gmail.com', 'Lahore', 'Lahore', '2021-07-03 17:00:18', 1, 'Lovelockup2', 'Lovelockup2', '', '', 'N/A', 'English', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 0, '', '', '', 'EAFA24EC-C6CE-4B0D-A6A0-D9FCFA0099C5.jpeg', 'Ahsan', 'Asghar', '', '2018-07-22', 'asgjsba@gmail.com', 'Lahore', 'Lahore', '2021-07-03 17:44:24', 1, 'Lovelockup2', 'Lovelockup2', '', '', 'N/A', 'English', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 0, '', '', '', '646371111.jpg', 'Manny', 'Roman', '', '1983-03-13', 'manny@socialspaces.life', 'LOS ANGELES LOS Ange', 'LOS ANGELES LOS Ange', '2021-07-03 23:43:56', 1, 'Xab0313#', 'Xab0313#', '', '', 'N/A', 'English', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 0, '', '', '', 'image2.jpg', 'Ahsan', 'Asghar', '', 'Sep-29-1995', 'asghar123@gmail.com', 'Lahore', 'Lahore', '2021-07-04 11:27:01', 1, 'Lovelockup2', 'Lovelockup2', '', '', 'N/A', 'English', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 0, '', '', '', 'image3.jpg', 'Ahsan', 'Asghae', '', 'Sep-29-1995', 'ahsssaaann@gmail.com', 'Lahore', 'Lahore', '2021-07-05 16:52:21', 1, 'Lovelockup2', 'Lovelockup2', '', '', 'N/A', 'English', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 0, '', '', '', '16256694917871002973463306926324.jpg', 'Ahsan', 'Asghar', '', 'Sep-29-1995', 'ahsaaan@gmail.com', 'Lhr', 'Lhr', '2021-07-07 14:52:44', 1, 'Lovelockup2', 'Lovelockup2', '', '', 'N/A', 'English', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 0, '', '', '', 'rspmainlogo.png', 'Ahsan', 'Asghar', '', '--', 'ahsooon@gmail.com', 'Lahore', 'Lahore', '2021-07-07 15:05:45', 1, 'Lovelockup2', 'Lovelockup2', '', '', 'N/A', 'English', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `status`) VALUES
(1, 'item1', 'item1', 8, 1),
(2, 'item2', 'item2', 88, 1),
(3, 'item3', 'item3', 888, 1),
(4, 'item4', 'item4', 8888, 1),
(5, 'item5', 'item5', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
