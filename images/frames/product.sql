-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2020 at 09:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opticals`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `productdescription` varchar(500) NOT NULL,
  `oprice` int(11) NOT NULL,
  `dprice` int(11) NOT NULL,
  `dpercent` int(11) NOT NULL,
  `frametype` varchar(20) NOT NULL,
  `framematerial` varchar(20) NOT NULL,
  `color` varchar(10) NOT NULL,
  `imgid` int(10) NOT NULL DEFAULT 20001
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `productname`, `productdescription`, `oprice`, `dprice`, `dpercent`, `frametype`, `framematerial`, `color`, `imgid`) VALUES
(20001, 'qqqqqqqqqqqw ', 'qqqq wee fds zdcx dfgsef  aeed', 1500, 1000, 30, 'Rimless', '', 'green', 20001),
(20002, 'ARLINGTON AR1051', 'These Arlington AR1051 are classic semi rimless frames with a defined browline. These frames have clean, sleek lines to create a modern feel and style.\r\n•	Barrel hinges\r\n•	Adjustable nose pads\r\n•	Protective case included\r\n', 3540, 3240, 15, 'Semi-Rimless', 'Titanium', 'black', 20001),
(20003, 'Arlington AR1055', 'These Arlington AR1055 are semi rimless frames with a classic browline and fun patterned temples to liven up these titanium frames.\r\n•	Barrel hinge\r\n•	Protective case included\r\n•	Titanium frames\r\n', 3540, 3240, 15, 'Semi-Rimless', 'Titanium', 'brown', 20001),
(20004, 'Arlington AR1056', 'These browline Arlington AR1056 frames are sleek and modern made from titanium to give you the comfort and style you want.\r\n•	Spring hinges\r\n•	Titanium frames\r\n•	Protective case included\r\n', 3540, 3240, 15, 'Semi-Rimless', 'Titanium', 'Gunmetal', 20001),
(20005, 'Arlington AR1060', 'These semi rimless Arlington AR1060 frames are simple and sleek. Made from titanium, these frames are comfortable and trendy.\r\n•	Spring hinges\r\n•	Adjustable nose pads\r\n•	Protective case included\r\n', 4000, 2000, 10, 'Semi-Rimless', 'Titanium', 'silver', 20001),
(20006, 'Westend Marble Cliff', 'There\'s something that happens when you wear these oval Westend Marble Cliff frames. The minimalist eyewear with delicate lines make you stand a little taller, your focus is dead-on, and obstacles become incidental. You\'ll get the clarity you need to see everything amazing that lies ahead.\r\n•	Brand authenticity guaranteed\r\n•	Westend logo on temple\r\n•	Branded eyeglass case included\r\nModern eyewear with vintage spirit for style icons in the making.\r\n', 5500, 5000, 30, 'Semi-Rimless', 'Metal', 'purple', 20001),
(20007, 'NASCAR N15', 'Know the perfect time to make a move in these semi-rimless NASCAR eyeglasses. N15 is the calculated risk that pays off in the long run. This sporty design features unique hinged temples that also display the NASCAR logo.\r\n•	Spring hinges\r\n•	Adjustable nose pads\r\n•	Protective case and cleaning cloth included\r\n', 7140, 3570, 50, 'Semi-Rimless', 'Metal', 'brown', 20001),
(20008, 'Arlington AR1038', 'Arlington AR1038 is a pair of oval semi-rimless frame. This style is available in a matte finish and features spring hinges and adjustable nose pads for added comfort.\r\n•	Spring hinges\r\n•	Adjustable nose pads\r\n•	Protective case included\r\n', 3540, 3240, 10, 'Semi-Rimless', 'Metal', 'black', 20001),
(20009, 'Caravaggio Ardon', 'These semi-rimless Caravaggio Ardon frames with spring hinges offer all of the comfort and style as a Roman holiday.\r\n•	Extended size\r\n•	Brand authenticity guaranteed\r\n•	Eyeglass case and cleaning cloth included\r\nItalian in name, vintage in style.\r\n', 4740, 4000, 7, 'Semi-Rimless', 'Metal', 'brown', 20001),
(20010, 'Stetson ST XL 29', 'These extra-large, semi-rimless Stetson XL29 frames with spring hinges offer timeless style and the durability you need.\r\n•	Cleaning cloth included\r\n•	Eyeglass case included\r\nEyewear that\'s a symbol of American independence, integrity and pride.\r\n', 6540, 6000, 15, 'Semi-Rimless', 'Metal', 'gold', 20001),
(20011, 'Lunettos Mandy', 'These metal semi-rimless Lunettos Mandy frames come with spring hinges for maximum style and comfort.\r\n•	Cleaning cloth included\r\n•	Eyeglass case included\r\nYou\'ll be over the moon for Lunettos style, and the affordable price will have you seeing stars.\r\n', 7140, 3570, 50, 'Semi-Rimless', 'Metal', 'pink', 20001),
(20012, 'Stetson ST ZF714', 'Stetson ST ZF714 is a pair of semi-rimless rectangular eyeglasses. This style gives off gentlemanly distinction without all the flash. Stetson: representing the symbol of American independence, individuality, integrity, and strength since 1865.\r\n•	Adjustable nose pads\r\n•	Protective case and cleaning cloth included\r\n', 6000, 3000, 50, 'Semi-Rimless', 'Metal', 'black', 20001),
(20013, 'Caravaggio C418', 'These classic browline Caravaggio 418 frames are simple and trendy with fun, detailed ear pieces.\r\n•	Brand authenticity guaranteed\r\n•	Eyeglass case and cleaning cloth included\r\n•	Spring hinges\r\nItalian in name, vintage in style\r\n', 4740, 4000, 8, 'Semi-Rimless', 'Metal', 'blue', 20001),
(20014, 'Dereon DOV532', 'These semi-rimless Deréon DOV532 frames with matte temples are the perfect counterpart to your intellect and style.\r\n•	Brand authenticity guaranteed\r\n•	Deréon logo on temple\r\n•	Branded eyeglass case and cleaning cloth included\r\nBeyonce\'s Deréon eyewear is a collection of unique styles with a fashion fingerprint like no other.\r\n', 5940, 4080, 20, 'Semi-Rimless', 'Metal', '', 20001),
(20015, 'TapouT TAP846\r\n', 'These semi rimless, browline TAPOUT Tap846 are sleek frames with clean lines.\r\n\r\nFull rim frame\r\nSpring hinges\r\nProtective case and cleaning cloth included\r\nAt the forefront of Mixed Martial Arts, TAPOUT is more than a brand and a lifestyle, it\'s a movement based on the culture, dedication and passion found in the sport.', 5880, 4080, 30, 'Semi-Rimless', 'Metal', 'black', 20001),
(20016, 'Westend Victorian Village', 'If you need a little nudging to come out of your shell, these Westend Victorian Village frames will do the trick. Vibrant bursts of color, pops of wow, and a little razzle-dazzle. Who says this classic pattern needs to blend in with the box turtle you named after your great uncle Oscar?\r\n•	Brand authenticity guaranteed\r\n•	Westend logo on temple\r\n•	Branded eyeglass case included\r\nModern eyewear with vintage spirit for style icons in the making.\r\n', 5940, 3240, 40, 'Full Frame', 'Plastic', 'blue', 20001),
(20017, 'Picklez Shiloh', 'These vibrant Picklez Shiloh kids\' glasses are go-to frames for high-energy kids with colorful style.\r\n•	Kid-Proof Warranty\r\n•	Branded eyeglass case included\r\n•	Picklez logo on temple\r\n•	Cleaning cloth included\r\n', 5880, 5000, 80, 'Full Frame', 'Plastic', 'green', 20001),
(20018, 'Lunettos Dylan', 'These plastic Lunettos Dylan frames with spring hinges and metal details on the temples were voted most likely to make you look like a million bucks.\r\n•	Cleaning cloth included\r\n•	Eyeglass case included\r\nYou\'ll be over the moon for Lunettos style, and the affordable price will have you seeing stars.\r\n', 5700, 2100, 20, 'Full Frame', 'Plastic', 'Tortoise', 20001),
(20019, 'Westend Avon Lake', 'These Westend Avon Lake are oversized, sleek square frames. Perfect for life on the lake or anywhere life may take you. Just grab this great pair of frames to take along on your next adventure.\r\n•	Brand authenticity guaranteed\r\n•	Westend logo on temple\r\n•	Spring hinges\r\n•	Branded eyeglass case included\r\nModern eyewear with vintage spirit for style icons in the making\r\n', 7140, 3570, 50, 'Full Frame', 'Plastic', 'black', 20001),
(20020, 'Westend Bridge Park', 'These stainless steel Bridge Park frames by Westend are the perfect vintage inspired glasses you have been looking for.\r\n•	Brand authenticity guaranteed\r\n•	Westend logo on temple\r\n•	Spring hinges\r\n•	Branded eyeglass case included\r\nModern eyewear with vintage spirit for style icons in the making.\r\n', 5940, 3240, 20, 'Full Frame', 'Metal', 'silver', 20001),
(20021, 'Westend Broadview Heights', 'These Westend Broadview Heights frames have a sleek rectangle design with a modern tortoise pattern that create this stylish pair of frames.\r\n•	Brand authenticity guaranteed\r\n•	Westend logo on temple\r\n•	Branded eyeglass case included\r\nModern eyewear with vintage spirit for style icons in the making.\r\n', 5880, 5000, 90, 'Full Frame', 'Plastic', 'black', 20001),
(20022, 'Westend Sippo Park', 'These Sippo Park by Westend are classic vintage inspired frames. Grab a pair of these fun, classic frames for all your vintage inspired looks without the hassle of thrifting.\r\n•	Brand authenticity guaranteed\r\n•	Westend logo on temple\r\n•	Branded eyeglass case included\r\nModern eyewear with vintage spirit for style icons in the making.\r\n', 5940, 3240, 20, 'Full Frame', 'Metal', 'Yellow', 20001),
(20023, 'Picklez Bailey', 'These bright, two-toned Picklez Bailey kids\' glasses with spring hinges are go-to frames for high-energy kids with a flair for style.\r\n•	Kid-Proof Warranty\r\n•	Branded eyeglass case included\r\n•	Picklez logo on temple\r\n•	Cleaning cloth included\r\nPlayful frames for playful kids.\r\n', 5090, 5000, 90, 'Full Frame', 'Plastic', 'orange', 20001),
(20024, 'Lunettos Tyler\r\n', 'These slightly oversized square Lunettos Tyler frames with metal details at the temples will make every look pop and every head turn.\r\n•	Cleaning cloth included\r\n•	Eyeglass case included\r\nYou\'ll be over the moon for Lunettos style, and the affordable price will have you seeing stars.\r\n', 5700, 5000, 70, 'Full Frame', 'Plastic', 'blue', 20001),
(20025, 'Lunettos Georgia', 'These oval Lunettos Georgia frames with spring hinges and metal details on the temples were voted most likely to cause a stir.\r\n•	Cleaning cloth included\r\n•	Eyeglass case included\r\nYou\'ll be over the moon for Lunettos style, and the affordable price will have you seeing stars.\r\n', 2400, 1200, 50, 'Full Frame', 'Plastic', 'teal frost', 20001),
(20026, 'Arlington AR1032', 'Arlington AR1032 is a pair of rectangular frame that knows how to add a pop. This style features grooved temples and is presented in a shiny finish.\r\n•	Adjustable nose pads\r\n•	Protective case included\r\n', 5700, 2340, 60, 'Full Frame', 'Metal', 'black', 20001),
(20027, 'Disney Frozen FZE909', 'These adorable Disney Frozen II FZE909 kids\' glasses with spring hinges will warm up your little one\'s sweet style.\r\n•	Disney logo on temple\r\n•	Brand authenticity guaranteed\r\n•	Eyeglass case and cleaning cloth included\r\nSee the magic.\r\n', 6540, 5700, 6, 'Full Frame', 'Plastic', '', 20001),
(20028, 'Moschino MO288V', 'Take note from Italians everywhere, and let your style be your own in these Italian-designed Moschino MO288V frames.\r\n•	Brand authenticity guaranteed\r\n•	Moschino logo on temple\r\n•	Spring hinges\r\n•	Branded eyeglass case and cleaning cloth included\r\nInnovative, colorful, provocative eyewear.\r\n', 6420, 5700, 72, 'Full Frame', 'Plastic', 'Tortoise', 20001),
(20029, 'Prive Revaux The Douglas', 'These metal Privé Revaux Douglas glasses with adjustable nose pads are the perfect look for free thinkers and visionaries.\r\n•	Brand authenticity guaranteed\r\n•	Privé Revaux logo on temple\r\n•	Branded eyeglass case and cleaning cloth included\r\nReframe your look in unconventional, upscale, handcrafted eyewear.\r\n', 7140, 3570, 50, 'Full Frame', 'Metal', 'gold', 20001),
(20030, 'Lunettos Lee', 'These square, plastic Lunettos Lee frames with spring hinges and a saddle bridge are the perfect mix of smarts and style, ideal for sipping lattes and finishing the New York Times crossword.\r\n•	Cleaning cloth included\r\n•	Eyeglass case included\r\nYou\'ll be over the moon for Lunettos style, and the affordable price will have you seeing stars.\r\n', 5700, 2340, 33, 'Full Frame', 'Plastic', 'Turquoise', 20001),
(20031, 'Arlington AR1044', 'These rimless Arlington AR1044 frames are the perfect simple but bold piece of eyewear.\r\n•	Barrel hinge\r\n•	Adjustable nose pads\r\n•	Protective case included\r\n', 5640, 3540, 20, 'Rimless', 'Titanium', 'gold', 20001),
(20032, 'Arlington AR1045', 'These Arlington AR1045 are fun rimless titanium frames. These frames have a sleek,rectangle design with patterned temples that will give you the unique look you are going for!\r\n•	Barrel hinge\r\n•	Adjustable nose pads\r\n•	Protective case included\r\n', 5640, 3540, 20, 'Rimless', 'Titanium', 'black', 20001),
(20033, 'Arlington AR1046', 'These Arlington AR1046 frames are rimless and titanium with thin, sleek lines to complete this minimalisc look.\r\n•	Barrel hinge\r\n•	Adjustable nose pads\r\n•	Protective case included\r\n', 5640, 3240, 50, 'Rimless', 'Titanium', 'black', 20001),
(20034, 'Arlington AR1047', 'These rimless titanium Arlington AR1047 frames have a vintage feel with modern details to tie these frames together.\r\n•	Barrel Hinge\r\n•	Adjustable nose pads\r\n•	Protective case included\r\n', 5640, 3540, 50, 'Rimless', 'Titanium', 'gold', 20001),
(20035, 'Arlington AR1048', 'These AR1048 by Arlington are rimless, titanium frames with accents on the temples and bridge to create a cool new pair of frames.\r\n•	Barrel hinge\r\n•	Adjustable nose pads\r\n•	Protective case included\r\n', 5700, 5000, 70, 'Rimless', 'Titanium', 'blue', 20001),
(20036, 'Invincilites Sigma W', 'Invincilites Sigma W is a pair of rimless rectangular eyeglasses that boldly highlights your eyes. The Sigma Collection features customizable ultra-thin stainless steel metal bridges and stainless steel end pieces for adjustability and colorful Grilamid® temples that fold flat.\r\n•	Adjustable nose pads\r\n•	Protective case included\r\nInvincilites-->So Thin. So Light.\r\n', 5880, 5520, 30, 'Rimless', 'Metal', 'black', 20001),
(20037, 'Invincilites Sigma T', 'Invincilites Sigma T is a pair of rectangular rimless eyeglasses. Even with the sharp angles of this frame, it still draws the focus to your eyes. The Sigma Collection features customizable ultra-thin stainless steel metal bridges and stainless steel end pieces for adjustability and colorful Grilamid® temples that fold flat.\r\n•	Adjustable nose pads\r\n•	Protective case included\r\nInvincilites-->So Thin. So Light.\r\n', 5880, 5520, 33, 'Rimless', 'Metal', 'beige', 20001),
(20038, 'Invincilites Sigma D', 'These ultra-thin Invincilites Sigma D rimless eyeglasses with flexible temples are so light theyâ€™re like not wearing glasses at all.\r\n•	Cleaning cloth included\r\n•	Eyeglass case included\r\nLightweight, affordable eyewear.\r\n', 5880, 5520, 30, ' Rimless', 'Metal', 'Dark brown', 20001),
(20039, 'Invincilites Sigma H', 'Invincilites Sigma H is a pair of oval rimless eyeglasses that draws all the attention to your eyes. The Sigma Collection features customizable ultra-thin stainless steel metal bridges and stainless steel end pieces for adjustability and colorful Grilamid® temples that fold flat.\r\n•	Adjustable nose pads\r\n•	Protective case included', 5640, 3240, 20, 'Rimless', 'Metal', 'beige', 20001),
(20040, 'Invincilites Zeta V', 'Invincilites Zeta V is a pair of slim oval rimless eyeglasses with cutout temples. The Zeta Collection features strong, lightweight stainless steel with laser finished temples and design inspired detailing.\r\n•	Adjustable nose pads\r\n•	Protective case included\r\nInvincilites-->So Thin. So Light.\r\n', 5640, 5000, 40, 'Rimless', 'Metal', 'brown', 20001),
(20041, 'Invincilites Zeta G', 'Invincilites Zeta G is a pair of full size rimless eyeglasses with rounded edges. The Zeta Collection features strong, lightweight stainless steel with laser finished temples and design inspired detailing.\r\n•	Adjustable nose pads\r\n•	Protective case included\r\nInvincilites-->So Thin. So Light.\r\n', 5700, 5000, 70, 'Rimless', 'Metal', 'Gunmetal', 20001),
(20042, 'Invincilites Zeta W', 'These Invincilites Zeta W rimless eyeglasses with adjustable nose pads and a clean design are so light you won\'t even know you\'re wearing glasses.\r\n•	Cleaning cloth included\r\n•	Eyeglass case included\r\nLightweight, affordable eyewear.', 5640, 5340, 30, 'Rimless', 'Metal', 'Gunmetal', 20001),
(20043, 'Invincilites Zeta C', 'Invincilites Zeta C is a pair of full size rimless eyeglasses with intricate detailing cutout temples. The Zeta Collection features strong, lightweight stainless steel with laser finished temples and design inspired detailing.\r\n•	Adjustable nose pads\r\n•	Protective case included\r\nInvincilites-->So Thin. So Light.\r\n', 5700, 2340, 33, 'Rimless', 'Metal', 'Taupe', 20001),
(20044, 'Puma PE0022O', 'These Puma PE22O are rimless, metal frames with a raised nose piece that create a modern and trendy set of frames.\r\n•	Puma Logo on temple\r\n•	Adjustable nose pads\r\n•	Protective case and cleaning cloth included\r\nPuma: Forever Faster', 5880, 4000, 8, 'Rimless', 'Metal', 'Ruthenium', 20001),
(20045, 'Invincilites Sigma A', 'These square Invincilites Sigma A rimless eyeglasses with flexible temples are so light they\'re like not wearing glasses at all.\r\n•	Cleaning cloth included\r\n•	Eyeglass case included\r\nLightweight, affordable eyewear.', 5880, 5400, 40, 'Rimless', 'Metal', 'brown', 20001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20046;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
