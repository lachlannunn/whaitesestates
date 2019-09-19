-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 08:15 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whaitesestates`
--

-- --------------------------------------------------------

--
-- Table structure for table `lnunn_contact`
--

CREATE TABLE `lnunn_contact` (
  `message_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `contactdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastupdated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `staffnotes` varchar(2000) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lnunn_contact`
--

INSERT INTO `lnunn_contact` (`message_id`, `fname`, `lname`, `email`, `phone`, `subject`, `message`, `contactdate`, `lastupdated`, `staffnotes`, `user_id`) VALUES
(1, 'aub', 'thompson', 'try@gmai.comn', '0475555555', 'sdfghjkl', 'dfghjkl', '2019-06-03 12:11:16', '2019-06-03 13:14:05', 'try try tru ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lnunn_properties`
--

CREATE TABLE `lnunn_properties` (
  `property_id` tinyint(11) NOT NULL,
  `feature` bit(1) NOT NULL,
  `user_id` tinyint(11) NOT NULL,
  `property_thumbnail` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `property_hero` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `property_images` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `sale_type` enum('Auction','Sale','Rent') COLLATE latin1_general_ci NOT NULL,
  `auction_date` datetime NOT NULL,
  `lease_period` int(250) NOT NULL,
  `lease_start` date NOT NULL,
  `lease_end` date NOT NULL,
  `gps` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `state` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `postcode` int(11) NOT NULL,
  `bedrooms` int(50) NOT NULL,
  `bathrooms` int(50) NOT NULL,
  `carports` int(50) NOT NULL,
  `property_type` enum('House','Townhouse','Unit','Vacant Land','Business','Rural','Lease','Industrial') COLLATE latin1_general_ci NOT NULL,
  `land_area` int(11) NOT NULL,
  `council _rates` decimal(6,2) NOT NULL,
  `key_features` text COLLATE latin1_general_ci NOT NULL,
  `description` varchar(2500) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `lnunn_properties`
--

INSERT INTO `lnunn_properties` (`property_id`, `feature`, `user_id`, `property_thumbnail`, `property_hero`, `property_images`, `price`, `sale_type`, `auction_date`, `lease_period`, `lease_start`, `lease_end`, `gps`, `address`, `city`, `state`, `postcode`, `bedrooms`, `bathrooms`, `carports`, `property_type`, `land_area`, `council _rates`, `key_features`, `description`) VALUES
(1, b'0', 1, 'images\\properties\\169_ryans_street.jpg', '169_ryans_street_hero.jpg', '', '0.00', 'Auction', '2019-06-18 10:00:00', 0, '0000-00-00', '0000-00-00', '', '169 Ryan Street', 'South Grafton', 'NSW', 2460, 2, 1, 1, 'House', 288, '2300.00', 'Air Conditioning', 'An appealing 2 bedroom home has seen recent renovations that will be sure to spark interest in first home buyers and keen investors growing their portfolio, with a possible $320-$330 per week rental return.\r\n\r\nFeaturing open plan living with a new kitchen and spacious living and dining that has new flooring and internal paint throughout this home is not one to skip past. The two large bedrooms feature new carpet, fresh paint, large modern fans and new blinds with nothing left to do but move your bed in. The master bedroom has room to add a walk in robe or maybe even an en-suite. For the keen renovators there is room left to add your very own touches to this home, while down stairs will keep the teenagers and builders busy with an over sized work shop perfect for building, fixing cars and motor bikes, storing a boat and comes with a new electric roller door.\r\n\r\nThe position of this home is perfect being minutes away from South Grafton CBD, Pubs and clubs, sporting fields, Public schools, public transport and South Grafton District Golf Club. Friday night meals are sorted with the respected 4.1/5 Star food option across the road, if you are a schnitzel person there is no need to look at the menu because the Royal Hotel in South Grafton has the best in town.'),
(2, b'0', 1, 'images\\properties\\72_tyson_street.jpg', '72_tyson_street_hero.jpg', '', '0.00', 'Auction', '2019-06-18 11:00:00', 0, '0000-00-00', '0000-00-00', '', '72 Tyson Street', 'South Grafton', 'NSW', 2460, 3, 1, 1, 'House', 360, '2900.00', 'Air Conditioning\r\nBuilt in Robes\r\nDishwasher\r\nFloorboards', 'This clean, crisp, natural light 3 bedrooms home has just received a new breath of air after recently going through a generous renovation ready for the next family to enjoy. Including now a brand new dishwasher, blinds, air-con, new fencing and with a fresh internal and external lick of paint this home is now ready to be yours. The home also has floorboards throughout, stunning rural views from your lounge room that opens up to a large relaxing patio. With a separate space downstairs to use as a study, work shop or storage area there is room for growth. New roof now completed.\r\n\r\nThe location of this home is hard to challenge being positioned on high on South Grafton hill. flood free and within walking distance to local schools, shops, public transport and sporting fields. This family home also neighbours a large and well maintained public park, you get the feeling of being close but distant when in need of the piece and quiet and the views are not one to miss out on. The large 838m2 block has easy and clear drive through access to a fully fenced yard perfect for the kids and animals to play and possible additional shedding (STCA). With so much on offer 72 Tyson Street, South Grafton is ideal for first home buyers, the growing family and keen investors with a possible rental return of $350-$360 per week.\r\n\r\nThe public auction for this home will be taking place on the 18th May, although the owners of the home have made it clear they are motivated and wanting a quick result so the possibility of buying your new home or investment property prior to auction is encouraged. Contact Tom Coombes on 0419 929 079 or Allison Whaites on 0487 289 471 to arrange an inspection today.'),
(5, b'0', 1, 'images\\properties\\lot_12_balwarra_heights_estate.jpg', 'lot_12_balwarra_heights_estate_hero.jpg', '', '82000.00', 'Sale', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', '', 'Lot 12 Balwarra Heights Estate, Ironbark Terrace', 'South Grafton', 'NSW', 2460, 0, 0, 0, '', 0, '0.00', '', 'Secure your block before it’s too late! Set yourself up for the future and organise the plans for your new home in the flood free Balwarra Heights Estate, within easy reach of South Grafton’s main services, shops and sporting facilities.\r\n\r\nThe majority of blocks within this estate have already been locked in and sold quite quickly, with the remaining six blocks set at an ideal price for first home builders and investors alike.\r\n\r\nLot 12 offers an ideal 820m2 for you to play with and all services are ready for connection – one less thing to worry about! The scenic outlook at the back of the block would prove to become a valuable re sale point in future, as seen on the last similar neighbouring development in Bush Drive.\r\n\r\nSouth Grafton currently has the majority of growth in the area of approximately 11%. If you’d like to join in on the growth wave in this area, contact us today to arrange an inspection of your new neighbourhood!'),
(6, b'0', 1, 'images\\properties\\lot_11_balwarra_heights_estate.jpg', 'lot_11_balwarra_heights_estate_hero.jpg', '', '82000.00', 'Sale', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', '', 'Lot 11 Balwarra Heights Estate, Ironbark Terrace', 'South Grafton', 'NSW', 2460, 0, 0, 0, 'Vacant Land', 833, '0.00', '', 'Secure your block before it’s too late! Set yourself up for the future and organise the plans for your new home in the flood free Balwarra Heights Estate, within easy reach of South Grafton’s main services, shops and sporting facilities.\r\n\r\nThe majority of blocks within this estate have already been locked in and sold quite quickly, with the remaining six blocks set at an ideal price for first home builders and investors alike.\r\n\r\nLot 11 provides a nice 833m2 for you to play with and all services are ready for connection – one less thing to worry about! The scenic outlook at the back of the block would prove to become a valuable re-sale point in future, as seen on the last similar neighbouring development in Bush Drive.\r\n\r\nSouth Grafton currently has the majority of growth in the area of approximately 11%. If you’d like to join in on the growth wave in this area, contact us today to arrange an inspection of your new neighbourhood!'),
(7, b'1', 1, 'images\\properties\\lot_5_balwarra_heights_estate.jpg', 'lot_5_balwarra_heights_estate_hero.jpg', '', '95000.00', 'Sale', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', '', 'Lot 5 Balwarra Heights Estate, Ironbark Terrace', 'South Grafton', 'NSW', 2460, 0, 0, 0, 'Vacant Land', 686, '0.00', '', 'Secure your block before it’s too late! Set yourself up for the future and organise the plans for your new home in the flood free Balwarra Heights Estate, within easy reach of South Grafton’s main services, shops and sporting facilities.\r\n\r\nThe majority of blocks within this estate have already been locked in and sold quite quickly, with the remaining six blocks set at an ideal price for first home builders and investors alike.\r\n\r\nLot 5 is a neat 686m2, with remaining blocks ranging up to 833m2 in size. All services are ready for connection – one less thing to worry about!\r\n\r\nSouth Grafton currently has the majority of growth in the area of approximately 11%. If you’d like to join in on the growth wave in this area, contact us today to arrange an inspection of your new neighbourhood!'),
(8, b'0', 1, 'images\\properties\\79_mcfarlane_street.jpg', '79_mcfarlane_street_hero.jpg', '', '0.00', 'Auction', '2019-06-18 12:00:00', 0, '0000-00-00', '0000-00-00', '', '79 McFarlane Street', 'South Grafton', 'NSW', 2460, 3, 1, 0, 'House', 580, '2200.00', 'Air Conditioning\r\nBuilt in Robes\r\nDishwasher\r\nFloorboards', 'Three bedroom family home is the perfect addition to any investment portfolio with a possible 8% rental yield in a strong and steady rental market with the added security bonus of a long term tenant in place.\r\n\r\nWith timber flooring throughout, air conditioning and a fully fenced front and back yard this home is great value to all markets and is now being put to Auction to find its newest owner.'),
(9, b'0', 1, 'images\\properties\\54_spring_street.jpg', '54_spring_street_hero.jpg', '', '180000.00', 'Sale', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', '', '54 Spring Street', 'South Grafton', 'NSW', 2460, 0, 0, 0, 'Industrial', 973, '0.00', '', ''),
(10, b'1', 1, 'images\\properties\\16_islandview_close.jpg', '16_islandview_close_hero.jpg', '', '1350000.00', 'Sale', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', '', '16 Islandview Close', 'Grafton', 'NSW', 2460, 5, 3, 13, 'House', 2612, '0.00', 'Broadband\r\nBuilt in Robes\r\nDishwasher\r\nEnsuite \r\nFloorboards\r\nRumpus Room', ''),
(11, b'1', 1, 'images\\properties\\74_spring_street.jpg', '74_spring_street_hero.jpg', '74_spring_street_1.jpg|\r\n74_spring_street_2.jpg|', '400000.00', 'Sale', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', '', '74 Spring Street', 'South Grafton', 'NSW', 2460, 0, 0, 10, 'Industrial', 0, '2316.00', '', 'With over 5% gross returns, these commercial premises with prominent main street frontage and dual street access are a great investment\r\n\r\nWith established tenants in place until January 2019, with a further 2-year option, you\'ll be financial from day 1\r\n\r\nWith a large workshop area (internal and undercover external), drainage system, gantry, exhaust system, spray booth, private office space, customer service area AND plenty of off-street parking (both front and rear), these premises are perfectly set up for the current mechanical business but could also adapt to suit a multitude of other businesses\r\n\r\nWith Grafton\'s real estate only getting hotter, now would be an ideal time to invest in your future\r\n'),
(12, b'0', 1, 'images\\properties\\5_ayre_close.jpg', '5_ayre_close_hero.jpg', '', '780000.00', 'Sale', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', '', '5 Ayre Close', 'The Pinnacles', 'NSW', 2460, 4, 2, 5, 'Rural', 36422, '0.00', 'Built in Robes\r\nDishwasher\r\nEnsuite\r\nFire Place\r\nPay TV\r\nVacuum System', 'All has been thought of when it came to the design and fit out of this stunning home set on 9 acres overlooking Grafton\r\n\r\nIt will adjust to fit your needs whatever they may be – if you have a relative who needs their own space, this home has it\r\n\r\nThe gourmet kitchen will provide for all your cooking needs – from the everyday to special occasions\r\n\r\nThere’s a huge separate shed for parking of the motorhome, van and/or boat with an enclosed workshop – the ultimate man cave\r\n\r\nTo truly appreciate this exceptional home and all if offers, request a full brochure and arrange an inspection today');

-- --------------------------------------------------------

--
-- Table structure for table `lnunn_users`
--

CREATE TABLE `lnunn_users` (
  `user_id` int(11) NOT NULL,
  `user_type` enum('staff','client') NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `email` varchar(350) NOT NULL,
  `password` varchar(150) NOT NULL,
  `phone` int(13) NOT NULL,
  `profile_img` varchar(50) NOT NULL,
  `creation_date` datetime(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000' ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lnunn_users`
--

INSERT INTO `lnunn_users` (`user_id`, `user_type`, `fname`, `lname`, `email`, `password`, `phone`, `profile_img`, `creation_date`) VALUES
(1, 'staff', 'Allison', 'Whaites', 'allison@fnational.com.au', 'dsfghjkl', 234567890, 'profile.jpg', '0000-00-00 00:00:00.000000'),
(2, 'staff', 'Allison', 'Whaites', 'allison@fnational.com.au', 'dsfghjkl', 234567890, 'profile.jpg', '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lnunn_contact`
--
ALTER TABLE `lnunn_contact`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `lnunn_properties`
--
ALTER TABLE `lnunn_properties`
  ADD PRIMARY KEY (`property_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `lnunn_users`
--
ALTER TABLE `lnunn_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lnunn_contact`
--
ALTER TABLE `lnunn_contact`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lnunn_properties`
--
ALTER TABLE `lnunn_properties`
  MODIFY `property_id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lnunn_users`
--
ALTER TABLE `lnunn_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
