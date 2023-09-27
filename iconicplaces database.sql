-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 03:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iconicplaces`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `password`, `email`, `phone`) VALUES
(1, 'Abdo', '123457', 'Abdo@gmail.com', 1003905021);

-- --------------------------------------------------------

--
-- Table structure for table `book_conf`
--

CREATE TABLE `book_conf` (
  `bc_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `ad_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL,
  `capacity` int(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `f` varchar(30) NOT NULL,
  `t` varchar(30) NOT NULL,
  `note` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_conf`
--

INSERT INTO `book_conf` (`bc_id`, `user_id`, `ad_id`, `name`, `email`, `phone`, `capacity`, `date`, `f`, `t`, `note`) VALUES
(2, 2, 0, 'Maryam', 'maryam@gmail.com', 1140602229, 30, '2023-06-21', ' 14:00', '16:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `book_event`
--

CREATE TABLE `book_event` (
  `be_id` int(11) NOT NULL,
  `user_id` int(30) NOT NULL,
  `ad_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL,
  `capacity` int(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `f` varchar(30) NOT NULL,
  `t` varchar(30) NOT NULL,
  `note` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_event`
--

INSERT INTO `book_event` (`be_id`, `user_id`, `ad_id`, `name`, `email`, `phone`, `capacity`, `date`, `f`, `t`, `note`) VALUES
(2, 2, 0, 'ahmed', 'ahmed@gmail.com', 1124190386, 35, '2023-06-21', ' 16:00', '18:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `book_wedd`
--

CREATE TABLE `book_wedd` (
  `bw_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `ad_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL,
  `capacity` int(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `f` varchar(30) NOT NULL,
  `t` varchar(30) NOT NULL,
  `note` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_wedd`
--

INSERT INTO `book_wedd` (`bw_id`, `user_id`, `ad_id`, `name`, `email`, `phone`, `capacity`, `date`, `f`, `t`, `note`) VALUES
(1, 2, 0, 'heba ahmed', 'heba@gmail.com', 1116996417, 80, '2023-06-30', ' 18:00', '21:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(5) NOT NULL,
  `ad_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `ad_id`, `name`) VALUES
(1, 1, 'wedding'),
(2, 1, 'events'),
(3, 1, 'confernce');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `com_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `ad_id` int(10) NOT NULL,
  `date` varchar(30) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `confernce`
--

CREATE TABLE `confernce` (
  `c_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `ad_id` int(10) NOT NULL,
  `name` varchar(55) NOT NULL,
  `des` varchar(200) NOT NULL,
  `price` int(5) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `confernce`
--

INSERT INTO `confernce` (`c_id`, `cat_id`, `ad_id`, `name`, `des`, `price`, `image`) VALUES
(1, 3, 1, 'BARCELO(4-star)', '229 Al Haram, At Talbeyah Giza\r\n_Free wi_fi\r\n_Free Parking\r\n_Child friendly', 15000, 'confernce/barcelo .jpg'),
(2, 3, 1, 'HOLIDAY INN (5-star)', '29 A Cornish El Nile, Maadi, Cairo Governorate 11431\r\n_Free wifi\r\n_Accessible\r\n_Child-friendly\r\n', 16000, 'confernce/holiday inn.jpg'),
(3, 3, 1, 'KEMPINSKI NILE HOTEL(5-star)', '12 Ahmed Ragheb, Qasr El Nil, Cairo Governorate 4272050\r\n_Free wifi \r\n_Child-friendly\r\n_Meeting rooms\r\n', 17000, 'confernce/kimpinski nile hotel.jpg'),
(4, 3, 1, 'RADISSON BLU HOTEL(5-star)', 'Abdel Hamid Badawi St, Sheraton Al Matar, El Nozha, Cairo Governorate 11787\r\n_Free wifi \r\n_Free Airport shuttle\r\n', 20000, 'confernce/radisson blu.jpg'),
(5, 3, 1, 'VENUE(5-star)', 'Nile City Towers، 2005 B Corniche, Boulaq Num.1، El Nil, Cairo Governorate 11311\r\n_Free parking \r\n_Child-friendly\r\n\r\n', 18000, 'confernce/venue.jpg'),
(6, 3, 1, 'WALDORF ASTORIA(5-star)', 'El Shaheed Sayed Zakaria, Sheraton Al Matar, El Nozha, Cairo Governorate 11736\r\n_Free wifi \r\n_Business centre\r\n_Activities for kids', 12000, 'confernce/waldor astoria.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `c_id` int(5) NOT NULL,
  `cate_id` int(5) NOT NULL,
  `ad_id` int(10) NOT NULL,
  `name` varchar(55) NOT NULL,
  `descr` varchar(500) NOT NULL,
  `price` int(5) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`c_id`, `cate_id`, `ad_id`, `name`, `descr`, `price`, `image`) VALUES
(1, 2, 1, 'CONRAD HOTEL(5-star)', '1191 Nile Corniche, Souq Al ASR, Bulaq, Cairo Governorate 11221\r\n_Meeting rooms \r\n_Business centre \r\n_Pet friendly ', 22000, 'event/conrad hotel.jpg'),
(2, 2, 1, 'DUSIT THANI LAKEVIEW (5-star)', 'El-Tessen street, Cairo, Cairo Governorate 11835\r\n_No pets \r\n_Free Wi-Fi \r\n_Business center \r\n', 20000, 'event/dusit thani lake view.jpg'),
(3, 2, 1, 'HILTON ZAMALEK RESIDENCES (4-star)', '_Pool\r\n_Free Wi-Fi \r\n_Accessible\r\n', 18000, 'event/hilton cairo zamalek.jpg'),
(4, 2, 1, 'THE OASIS HOTEL (4-star)', 'Begining, Cairo - Alexandria Desert Rd, 12556\r\n_Pool\r\n_Spa \r\n_Free wifi \r\n', 20000, 'event/oasis hotel.jpg'),
(5, 2, 1, 'SWISS INN NILE HOTEL (4-star) ', '200 Al Bahr Al Aazam, Saqiyet Mekki, Giza District, Giza\r\n_Breakfast buffet\r\n_Free Wi-Fi \r\n_No fitness center\r\n', 25000, 'event/swiss inn nile hotel.jpg'),
(6, 2, 1, 'TRIUMPH PLAZA HOTEL(4-star)', 'El-Khalifa El-Maamoun, St، Heliopolis, Cairo Governorate\r\n_2-Restaurants \r\n_Free WIFI\r\n', 24500, 'event/triumph plaza hotel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `ad_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `conpassword` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ad_id`, `username`, `password`, `conpassword`, `email`, `phone`) VALUES
(1, 0, 'Abdo', '123457', '123457', 'Abdo@gmail.com', 1003905021),
(2, 0, 'Heba', '12345', '12345', 'heba@gmail.com', 123456788);

-- --------------------------------------------------------

--
-- Table structure for table `wedding`
--

CREATE TABLE `wedding` (
  `w_id` int(50) NOT NULL,
  `categ_id` int(50) NOT NULL,
  `ad_id` int(10) NOT NULL,
  `name` varchar(55) NOT NULL,
  `descr` varchar(500) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wedding`
--

INSERT INTO `wedding` (`w_id`, `categ_id`, `ad_id`, `name`, `descr`, `price`, `image`) VALUES
(1, 1, 1, 'Andrawis nile garden (Rate 4/5)', 'located in manial shiha giza', 25000, 'wedding/Andrawis nile garden.jpg'),
(2, 1, 1, 'C’est La Vie Villa', 'located in Gameiyet Ahmed Orabi, Ismailia Desert road, Obour city. cairo.', 40000, 'wedding/Cest La Vie Villa.jpg'),
(3, 1, 1, 'Marriott Mena House', 'located giza', 55000, 'wedding/Marriott Mena House.jpg'),
(4, 1, 1, 'Royal Club Mohamed Aly', 'located south of Mounib Square Cairo-Aswan Road, Giza', 35000, 'wedding/Royal Club Mohamed Aly.jpg'),
(5, 1, 1, 'Taracina', 'located at Manial Shiha, Giza', 16000, 'wedding/Taracina.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `book_conf`
--
ALTER TABLE `book_conf`
  ADD PRIMARY KEY (`bc_id`),
  ADD KEY `ad_id` (`ad_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `book_event`
--
ALTER TABLE `book_event`
  ADD PRIMARY KEY (`be_id`),
  ADD KEY `ad_id` (`ad_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `book_wedd`
--
ALTER TABLE `book_wedd`
  ADD PRIMARY KEY (`bw_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `ad_id` (`ad_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ad_id` (`ad_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `ad_id` (`ad_id`);

--
-- Indexes for table `confernce`
--
ALTER TABLE `confernce`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `ad_id` (`ad_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `cate_id` (`cate_id`),
  ADD KEY `ad_id` (`ad_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ad_id` (`ad_id`);

--
-- Indexes for table `wedding`
--
ALTER TABLE `wedding`
  ADD PRIMARY KEY (`w_id`),
  ADD KEY `categ_id` (`categ_id`),
  ADD KEY `ad_id` (`ad_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_conf`
--
ALTER TABLE `book_conf`
  MODIFY `bc_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_event`
--
ALTER TABLE `book_event`
  MODIFY `be_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_wedd`
--
ALTER TABLE `book_wedd`
  MODIFY `bw_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `com_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `confernce`
--
ALTER TABLE `confernce`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wedding`
--
ALTER TABLE `wedding`
  MODIFY `w_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_conf`
--
ALTER TABLE `book_conf`
  ADD CONSTRAINT `book_conf_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `book_event`
--
ALTER TABLE `book_event`
  ADD CONSTRAINT `book_event_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `book_wedd`
--
ALTER TABLE `book_wedd`
  ADD CONSTRAINT `book_wedd_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`ad_id`) REFERENCES `admin` (`aid`);

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `complaint_ibfk_2` FOREIGN KEY (`ad_id`) REFERENCES `admin` (`aid`);

--
-- Constraints for table `confernce`
--
ALTER TABLE `confernce`
  ADD CONSTRAINT `confernce_ibfk_1` FOREIGN KEY (`ad_id`) REFERENCES `admin` (`aid`),
  ADD CONSTRAINT `confernce_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`ad_id`) REFERENCES `admin` (`aid`);

--
-- Constraints for table `wedding`
--
ALTER TABLE `wedding`
  ADD CONSTRAINT `wedding_ibfk_1` FOREIGN KEY (`categ_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `wedding_ibfk_2` FOREIGN KEY (`ad_id`) REFERENCES `admin` (`aid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
