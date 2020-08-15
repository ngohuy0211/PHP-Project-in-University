-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2018 at 10:07 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hpshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `position` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `username`, `password`, `position`) VALUES
(1, 'admin', 'admin', 1),
(2, 'abc123', '123456', 0),
(19, 'ngohuy11', 'abc123', NULL),
(20, 'hoangdung123', '123456789', NULL),
(27, 'ngohuy123', 'ngohuy123', NULL),
(28, 'ngohuy123456', 'ngohuy123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CatId` int(11) NOT NULL,
  `CatName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CatId`, `CatName`) VALUES
(1, 'Samsung'),
(2, 'Sony'),
(3, 'Oppo');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductId` varchar(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Price` int(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `ProductDetail` varchar(1000) NOT NULL,
  `CatId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductId`, `ProductName`, `Price`, `Image`, `ProductDetail`, `CatId`) VALUES
('OP001', 'OPPO F7 Lite', 6000000, 'image/or7.jpg', '	Beautiful monolithic design, large resolution camera and intelligent motion gesture feature is very useful for you. Good quality camera 13 MP large resolution camera with automatic skin smoothing feature, wide angle for the frame to capture more scenes, especially for very fast shutter speed, intelligent anti-shake feature helps your photos to be not too much blur. Especially the Ultra-HD photography feature for resolution up to 50 MP is an impressive thing, the image gives very good detail, when zoomed in, it does not break the image but looks quite smooth.', 3),
('OP002', 'OPPO F1', 30000000, 'image/opf1.jpg', 'The OPPO F1 monolithic shell is specially made with high quality aluminum alloy material coated with zircon sand for a very trendy glossy surface. At the same time, the 60 degree curved edge of the machine is the result of meticulous, detailed and detailed calculations to give the user the most comfortable feeling when using, while the cut edge also creates the middle Light and shadow on the curves bring irresistible charm.', 3),
('OP003', 'OPPO A3s 16GB', 4900000, 'image/opa3.png', 'Ultra-large 6.2-inch screen overflow border\r\nNow is the era of big screen phones. OPPO A3s owns a large screen up to 6.2 inches designed in trendy overflow form, giving you a great experience. The new 19: 9 aspect ratio delivers more content when surfing the web, reading newspapers and the wider space when watching movies or playing games.', 3),
('OP004', 'Oppo F7', 5000000, 'image/opf7.jpg', '\r\n191/5000\r\n- 6 inch overflow screen, FHD + 1080 x 2160 pixels resolution\r\n- 4GB RAM, 64GB internal memory\r\n- The Helio P60 chip is 8 powerful\r\n- Camera support technology A.I\r\n- Android 8.1 with ColorOS 5.0 interface', 3),
('OP005', 'Oppo R7S', 2000000, 'image/opr7.jpeg', 'The latest model in OPPO\'s R7 series possesses a high-end monolithic design, each border, connecting port, and all keys are refined and luxurious diamond cut. Bright 2.5D glass combined with metal materials to create a level for anyone who intends to own an OPPO R7s smartphone.', 3),
('OP006', 'OPPO F1s (2017) 64GB', 3000000, 'image/opf1s.jpg', 'OPPO F1s 2017 is made from aluminum alloy, the edges are moderately rounded, the overall size is quite fit with the machine length of 154.5 mm, width 76 mm, only 7.38 mm thick with light weight only 160g helps you feel comfortable when holding the device. Besides, the two main colors of gold and pink also contribute to the F1s 2017 with a luxurious and attractive appearance.', 3),
('OP007', 'OPPO R11', 4400000, 'image/opr11.jpg', 'The Oppo R11 is made entirely of metal, the material is increasingly popular in the smartphone world. The phone has an impressive 6.8 mm thinness and the same design as the iPhone 7 with delicate antenna edges and a horizontal dual camera cluster.', 3),
('OP008', 'Oppo Neo 7', 8000000, 'image/opneo7.jpg', 'Neo 7 has a pretty configuration, simple design but still stand out with fake plastic mirror with bright mirror, good camera in price range and convenient OTG connection.\r\nBeautiful design\r\n\r\nWith a thinness of only 7.55 mm, it helps the machine achieve a beautiful thinness, the metal fake plastic rim running around the curved machine helps you feel more comfortable when holding it.', 3),
('S001', 'Samsung Galaxy J7 Pro', 2500000, 'image/glxj7.jpg', 'In the price range of 6 million, Galaxy J7 Pro is one of the most worthwhile phones, because of the stability when surfing the web, playing games; Luxurious design like the S series and buffalo battery capacity up to 3600 mAh.\r\n\r\nThe mid-range phone carries the luxurious design of the S series, completely different from the previous J series\r\n\r\nGalaxy J7 Pro has a new design with monolithic metal and a luxurious 2.5D curved screen.', 1),
('S002', 'Samsung Galaxy J5 Pro', 1500000, 'image/glxj5.jpg', 'Continuing to target the mid-range segment, Samsung J5 Pro is said to be the successor to J5 Prime series, not only inheriting most of J5 Prime\'s strengths but also being improved and upgraded significantly by Samsung. Highlights are large screen size, up to 5.2 inches, giving users the experience of crisp, lively space, accompanied by outstanding performance with 8-core processor and 13.0 resolution camera duo MP, let you delight in taking photos in low light conditions.', 1),
('S003', 'Samsung Galaxy S8', 20000000, 'image/glxs8.png', 'Galaxy S8 is predicted to be a super product that Samsung will introduce to users in the nearest time. According to the image of the new product revealed, Samsung S8 will have an impressive design, extremely powerful performance and energy saving, sharp camera and Infinity Display screen, promising to become a formidable opponents in the smartphone market in 2017.', 1),
('S004', 'Samsung Galaxy Note 8', 25000000, 'image/glxn8.png', 'If you\'ve ever used Samsung Galaxy Note series, you will definitely not be able to ignore this super product. Compared to the previous, Note 8 owns the features never appeared, such as dual cameras, S-Pen pen supports a series of quick operations, DeX dock for work as well as extreme rigorous testing to ensure Maximum safety for customers.', 1),
('S005', 'Samsung Galaxy J6 Price', 2000000, 'image/glxj6.jpg', 'Samsung Galaxy J6 smartphone was launched in May 2018. The phone comes with a 5.60-inch touchscreen display with a resolution of 720 pixels by 1480 pixels at a PPI of 293 pixels per inch. Samsung Galaxy J6 price in India starts from Rs. 10,915*.\r\n\r\nThe Samsung Galaxy J6 is powered by 1.6GHz octa-core processor and it comes with 3GB of RAM. The phone packs 32GB of internal storage that can be expanded up to 256GB via a microSD card. As far as the cameras are concerned, the Samsung Galaxy J6 packs a 13-megapixel (f/1.9) primary camera on the rear and a 8-megapixel front shooter for selfies.', 1),
('S006', 'Samsung Galaxy Note9', 30000000, 'image/glxn9.jpg', 'Bring special improvements in the S-Pen pen, super product Samsung Galaxy Note 9 also owns a huge battery capacity of up to 4,000 mAh with outstanding performance, worthy of being one of the high-end phones most of Samsung.', 1),
('S007', 'Samsung Galaxy A6 Specs', 4900000, 'image/glxa6.png', 'The Samsung Galaxy A6 features gorgeous AMOLED screen - a rarity in cheap phone that usually have LCD displays - with very small bezels, runs on the latest Android 8.0 Oreo and comes with a focus on camera quality.', 1),
('S008', 'Samsung Galaxy A8 Star', 12000000, 'image/glxa8.jpg', 'Samsung A8 Star is one of the largest screen phones today with dimensions up to 6.3 inches. This screen is made from the most advanced Super AMOLED technology from Samsung, sharp Full HD + resolution and especially the ultra-thin screen border. The A8 Star screen is gently curved, its thin edges create an attractive \"overflow\" effect, which will surely bring a great viewing experience to users.', 1),
('Sn001', 'Sony Xperia L1', 4400000, 'image/snxl1.png', 'Sony Xperia L1 at a price suitable for many users and beautiful design is not inferior to high-end products.\r\nLuxurious design\r\nThe Xperia L1 has a plastic case, rounded edges, while the top and bottom edges are flat. Overall the design is quite slender and elegant, the back of the machine is completely machined with polycarbonate plastic.', 2),
('Sn002', 'Sony Xperia XZ2', 4000000, 'image/snxz2.jpg', 'Gorilla Glass 5 glass material appeared on both sides of the Xperia XZ2 with fingerprint sensor lined up right in the middle of the dorsal surface to create aesthetic balance.\r\n\r\nThe glass of the Xperia XZ2 is made of 2.5D curved in all 4 sides, making the body more seamless.', 2),
('Sn003', 'Sony Xperia XA1', 2000000, 'image/sxxa1.jpg', 'Xperia XA1 is an upgrade of the Xperia XA which has been quite successful in our country, with the design quite similar to the Xperia XZ super product, the more equipped configuration and better quality camera.', 2),
('Sn004', 'Sony Xperia XZ3 Specs', 5000000, 'image/snxz3.png', 'he Xperia XZ3 was announced back in September, during the IFA conference in Berlin, and comes just six months after the Xperia XZ2. While the cadence was not surprising — Sony\'s been doing twice-yearly phone refreshes since 2013 — the number of changes, physical and otherwise, were meaningful. The XZ3 is Sony\'s best device ever, but it comes at a $100 price increase over the XZ2, and given the number of high-end flagships in that price bracket, I\'m not sure the PlayStation maker has done enough to justify the surge.', 2),
('Sn005', 'Sony Xperia E', 1800000, 'image/snxe.png', 'Beautiful design, sure\r\nSony Xperia E has a rectangular front, vertical bar, rounded corners, a thin metal border running around the perimeter. Therefore, although the plastic case is very sturdy.', 2),
('Sn006', 'Sony G3221', 1500000, 'image/sg.jpg', 'The Sony Xperia XA1 Ultra G3221 is a good Android phone with 2.3Ghz Octa-Core processor that allows run games and heavy applications.\r\n\r\nWith one SIM card slot, the Sony Xperia XA1 Ultra G3221 allows download up to 300 Mbps for internet browsing, but it also depends on the carrier.\r\n\r\nGreat connectivity of this device includes Bluetooth 4.2 version A2DP, WiFi 802.11 a/b/g/n + MIMO (2.4Ghz) and NFC to make payments and allows connection to other devices.\r\n\r\nIncluding the battery, the Sony Xperia XA1 Ultra G3221 phone has 188 grams and it\'s a very thin device, only 8.1 mm.', 2),
('Sn007', 'Sony Xperia T3', 2000000, 'image/snt3.jpeg', 'Sony announced the 5.3-inch Xperia T3 and is proud to present this as the world\'s thinnest phone in the same screen segment. Dimensions of 150.7x77x7 mm and 148 g heavy, lighter and lighter than Sony Xperia Z2 (8.2mm thick, weighing 163g); Samsung Galaxy Note 3 Neo (8.6mm thick, weighs 162.5 grams).', 2),
('Sn008', 'Sony Xperia XA1 Plus', 2000000, 'image/snxa1.jpg', 'Sony Xperia XA1 Plus has a design that keeps Sony\'s features intact, but still modern and a beauty from simplicity, the back is made completely flat and smooth, giving a smooth grip. Fingerprint sensor is located right above the power key, maximizing convenience for users. All details on XA1 Plus are completely meticulous and refined.', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CatId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductId`),
  ADD KEY `foreignkey_product_catid` (`CatId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `foreignkey_product_catid` FOREIGN KEY (`CatId`) REFERENCES `category` (`CatId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
