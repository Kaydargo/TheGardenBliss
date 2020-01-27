-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 07:55 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gardening`
--

-- --------------------------------------------------------

--
-- Table structure for table `garden`
--

CREATE TABLE `garden` (
  `gardenID` int(3) NOT NULL,
  `gardenName` varchar(30) DEFAULT NULL,
  `shape` varchar(30) DEFAULT NULL,
  `UserID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `garden`
--

INSERT INTO `garden` (`gardenID`, `gardenName`, `shape`, `UserID`) VALUES
(1, 'MyBackgarden', 'square', 1),
(2, 'MyFrontgarden', 'circlular', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gardenplants`
--

CREATE TABLE `gardenplants` (
  `gardenID` int(3) NOT NULL,
  `plantID` int(3) NOT NULL,
  `X` int(100) NOT NULL,
  `Y` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `plantID` int(3) NOT NULL,
  `plantName` varchar(40) NOT NULL,
  `plantImage` varchar(50) NOT NULL,
  `plantIcon` varchar(50) DEFAULT NULL,
  `description` varchar(1000) NOT NULL,
  `season` varchar(40) NOT NULL,
  `soil` varchar(30) NOT NULL,
  `placement` varchar(30) NOT NULL,
  `watering` varchar(30) NOT NULL,
  `distance` varchar(30) NOT NULL,
  `depth` varchar(30) NOT NULL,
  `Harvesting` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`plantID`, `plantName`, `plantImage`, `plantIcon`, `description`, `season`, `soil`, `placement`, `watering`, `distance`, `depth`, `Harvesting`, `type`) VALUES
(1, 'Carrot', 'carrot.jpg', 'carrotIcon.png', 'Carrot is an erect plant, 30-100 cm in height, the root is the vegetable and it is the edible part. They are taste and popular root vegetables. Carrots can be eaten raw or cooked in various dishes. it is crunchy and very nutritious.  There are two types of carrots to choose from when planting. Early varieties which are usually sown in spring and ready to be harvested 10 weeks later and late varieties which can be plant from the end of spring and are ready to be harvested about 14- 16 weeks after.', 'March-June', 'Sandy', 'Sun', '1.5 litres', '30cm', '1-2cm', 'July-August', 'vegetable'),
(2, 'Apple', 'apple.jpg', 'appleIcon.jpg', 'Apple fruits are round shaped and range in colour from green to red. When an apple is planted from seed, it can take six to ten years to mature and produce fruits. The trees are small to medium sized reaching height of 5-10m (16.4-32.8ft). Apples are high in vitamin C and can be used in different  recipes, juice and drinks.', 'Autumn/Spring', 'loam', 'Sun', '16ml', '300cm', '60cm', ' August - October', 'fruit'),
(3, 'Garlic', 'garlic.jpg', 'garlicIcon.png', 'Garlic is a plant in the onion family and each part of garlic bulb is called clove. Garlic contains a lot of nutrients and it is filled with vitamins and minerals. It is easy to grow in the garden and very low maintenance. It could be grown in a container or any space that you have available. Garlic can be used as flavour and added as a spice to soup, curries and stir. There are two main types of garlic that can be planted, the hard neck and the soft neck varieties.\r\n The Hard neck garlic varieties produce edible flower stem which can be used in salads and stir fries. This is a good choice to plant if you need to use the stems and the bulbs. Soft neck on the other hand does not produce stem but can be stored for a longer period after harvest.\r\n', 'November-April', 'Sandy', 'Sun', '2 litres x3', '10-15cm', '2.5cm', 'June-August', 'vegetable'),
(4, 'Pepper', 'pepper.jpg', 'pepperIcon.png', 'Bell pepper can be referred to as red pepper, yellow pepper or green pepper. Bell pepper can be eaten fresh as salad, vegetables, or cooked in a variety of dishes. There are two type of pepper, chilli peppers and bell pepper. Chilli peppers are small and have a hot flavour while the bell peppers are larger and milder in flavour.', 'June-July', 'Sandy', 'Sun', '4 litres', '2.5cm', '1cm', 'August', 'vegetable'),
(5, 'Onion', 'onionstack.png', 'onionIcon.png', 'Onions are one of the most popular vegetables for growing in home gardens and are one of the easiest crops of spring. They take little space so they can be planted in a row or two or between other crops or can be planted in containers. Onion sets are onions that were planted from last year. When planting onion, you can grow your own and save the sets from the previous year or you could buy onion sets ready to plant.', 'April-May', 'Loamy', 'Sun', '17 ml', '15cm', '2.5cm', 'August', 'vegetable'),
(6, 'Potato', 'potatoe.jpg', 'potatoeIcon.png', ' Potatoes is a vegetable and a tuber plant. There are more than 100 types of potatoes, but white and red skinned types are common in-home garden because of their taste and texture. Potatoes are a cool-seasoned crop that is why they grow well in Ireland. Potatoes can also tolerate light frost weather. Potatoes have Earlies and Maincrop sowing type. Earlies potatoes grow quickly, they have no skin and usually out of the soil before blight arrives. Maincrop develop very much later, produce more potatoes and develop thicker skin but they are affected blight as they are in the ground in summer.', 'March', 'Loam', 'Sun', '17ml', '25cm', '10-15cm', 'July', 'Vegetable'),
(7, 'Radish', 'radish.jpg', 'radishcon.png', '', '', '', '', '', '', '', '', 'vegetable'),
(8, 'Raspberries', 'raspberries.jpg', 'raspberriescon.png', '', '', '', '', '', '', '', '', 'fruit'),
(9, 'Strawberry', 'strawberry.jpg', 'Strawberrycon.png', '', '', '', '', '', '', '', '', 'fruit'),
(10, 'Tomatos', 'tomatos.jpg', 'tomatoscon.png', '', '', '', '', '', '', '', '', 'vegetable'),
(13, 'Cucumber', 'cucumber.jpg', 'cucumbercon.png', '', '', '', '', '', '', '', '', 'vegetable'),
(15, 'Tulip', 'tulipstock.jpg', NULL, '', '', '', '', '', '', '', '', 'flower'),
(17, 'Rose', 'rosestock.jpg', NULL, '', '', '', '', '', '', '', '', 'flower'),
(18, 'Daffodil', 'daffodilstock.jpg', NULL, '', '', '', '', '', '', '', '', 'flower'),
(19, 'Pear', 'pearstock.jpg', NULL, '', '', '', '', '', '', '', '', 'fruit'),
(20, 'Blackberries', 'blackberriesstock.jpg', NULL, '', '', '', '', '', '', '', '', 'fruit'),
(21, 'Cheries', 'cheriesstock.jpg', NULL, '', '', '', '', '', '', '', '', 'fruit'),
(22, 'Currants', 'currantsstock.jpg', NULL, '', '', '', '', '', '', '', '', 'fruit'),
(23, 'Plums', 'plumsstock.jpg', NULL, '', '', '', '', '', '', '', '', 'fruit'),
(24, 'Sunflower', 'sunflowerstock.jpg', NULL, '', '', '', '', '', '', '', '', 'flower'),
(25, 'Dahlia ', 'dahliastock.jpg', NULL, '', '', '', '', '', '', '', '', 'flower'),
(26, 'Nelke', 'nelkestock.jpg', NULL, '', '', '', '', '', '', '', '', 'flower'),
(27, 'Cosmos', 'cosmosstock.jpg', NULL, '', '', '', '', '', '', '', '', 'flower'),
(28, 'Gladiola', 'gladiolastock.jpg', NULL, '', '', '', '', '', '', '', '', 'flower');

-- --------------------------------------------------------

--
-- Table structure for table `plantinginfo`
--

CREATE TABLE `plantinginfo` (
  `plantInfoID` int(3) NOT NULL,
  `infoImage` varchar(50) NOT NULL,
  `step1` varchar(300) NOT NULL,
  `step2` varchar(300) NOT NULL,
  `step3` varchar(300) NOT NULL,
  `step4` varchar(300) NOT NULL,
  `step5` varchar(300) DEFAULT NULL,
  `aftercare` varchar(500) DEFAULT NULL,
  `problems` varchar(500) DEFAULT NULL,
  `plantID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plantinginfo`
--

INSERT INTO `plantinginfo` (`plantInfoID`, `infoImage`, `step1`, `step2`, `step3`, `step4`, `step5`, `aftercare`, `problems`, `plantID`) VALUES
(2, 'plantingGarlic.JPG', 'Dig in plenty of compost to prepare the soil for planting, ensure the soil has not been recently used for planting garlic or onions. Garlic prefer light nutrient-rich soil and does not like water logging.', 'Split the bulb into separate cloves and plant each clove just below the surface of the soil, ensure the pointed end is facing up. Space the plant to allow the bulb to swell so don’t plant bulbs closely together.', 'Make sure the compost remains moist, especially during dry spells.', 'Cover the ground with net after planting or with 2 inches of soil to prevent bird from pulling freshly-planted garlic out of the ground.', '', 'Water every 3 to 5 days when the plant starts bulbing and keep the beds well weeded, garlic does not do well with weeds because it needs all the nutrients in the soil. If you see yellow leaves fertilizer the soil.', 'Garlic does not seem to have a lot of problems with pest because it is a natural pest repellent.\r\nWhite rot on the other hand may attack garlic in cool weather. Little can be done to control or prevent white rot except croup rotation and clearing the area after harvesting in preparation for the next season planting.', 3),
(3, 'plantingGarlic.JPG', 'Prepare the soil with plenty of manure or compost when planting in the garden. Plant seed in a sunny well drained spot in your garden and pepper need 6-8 hours of sunlight a day.', 'Mix about 2 tablespoons of well-balanced fertilizer in the planting holes and water after planting, grow hot pepper separately to prevent cross pollination with sweet bell pepper.', 'Support each plant with a stake once it starts to grow pepper to help maintain the weight of the peppers because most pepper plant stems are brittle and can easily break without support.', 'Pinch out the growing point at the top when the plant reach 20cm to helps the plant to produce more branches. This makes the plant healthy with more flowers and fruits.', '', 'Water little and constantly to keep the soil evenly moist and to avoid water logging and mulch to soil to help retain moisture. Once the first pepper fruit has set fed the plant with liquid fertilizer to maintain the nutrients in the soil.', 'Mostly peppers are problem free, but peppers can be affected by white fly, red spider mite and grey mould which could destroy the stem and the fruit in the cool weather, but prompt removal of the affected plants can limit the damage. using of pesticides can also eliminate common pests like cutworm and hornworms that can destroy pepper leaves.', 4),
(4, 'plantingGarlic.JPG', 'Prepare your garden with a good bucket or two of well-rotted garden compost raked into the surface layer. Avoid manure because this might cause thick neck which would not dry properly and will rot from the inside out.', 'Put the sets about 1 cm into the loose soil, leave about half of the onion showing above the soil if you are transplanting. Or sow 4 seeds per hole if you are planting using seeds.', 'As your onions grow, the bulbs get enlarge and you have to move the soil away from the tops of the bulbs. Expose the plant to the air and leave the lowest part of the bulb in contact with the earth helps the papery skin firm up and prevent onion bulb from rot.', '', '', 'If the soil is dry, water the soil immediately after planting or transplanting, make sure to keep the soil moist until the seedlings come up or until plants take hold make sure to cut back on watering when the top start dying back to prevent the bulbs from rotting.', 'The common disease of onion is onion white rot, this makes the leaves to turn yellow and wilt and the bulb get white mould in them. There is no remedy for this disease, the only thing to do is to remove the affected plant and burn them and refrain from planting onion in the same spot.', 5),
(5, 'plantingGarlic.JPG', 'Prepare your plot by digging the areas that you want to plant on to loosen the soil, adding nutrients matter such as well rotted manure or compost before planting.', 'Ensure to cover plant when they are younger if there is any risk of frost. You need to cover the stem with soil, use the hoe to bring loose soil from around the plant up against the stem. When the stem are 20cm high up draw soil up and leave just 10 of leaves above the surface.', 'Repeat the above process once or twice during the summer, if you see potatoes popping through the soil. The tuber will go green if exposed to the light and they could be poisonous and inedible.', ' Check your plant around June to see how they are growing. The presence of flowers on the plant means the potatoes are ready.', '', 'Potatoes seem to be one of the easiest plants to care for, they can sometimes produce crops even if uncared for. But if you want a good crop you must care for your potato plants. Watering, weeding and feeding are very important to potato plants.', 'The real problem for potatoes is frost. They could be damaged if exposed to too much frost especially for earlier sowings. Also, when planting choose disease resistant seed potatoes or spray crop prior to infection with spray to prevent damage by worms and slugs.', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(3) NOT NULL,
  `firstName` varchar(30) DEFAULT NULL,
  `lastName` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `userpass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `email`, `userpass`) VALUES
(1, 'Kayleigh', 'Hoey', 'Kayleigh@gmail.com', 'kaypass'),
(2, 'Agnese', 'Janusauska', 'Agnese@gmail.com', 'agnesepass'),
(3, 'Graham', 'O Mahony', 'Graham@gmail.com', 'grahampass'),
(4, 'Folashade', 'Badmos', 'Fatima@gmail.com', 'fatimapass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `garden`
--
ALTER TABLE `garden`
  ADD PRIMARY KEY (`gardenID`),
  ADD KEY `fk_USERS` (`UserID`);

--
-- Indexes for table `gardenplants`
--
ALTER TABLE `gardenplants`
  ADD PRIMARY KEY (`gardenID`,`plantID`),
  ADD KEY `fk_GARDENPLANTS2` (`plantID`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`plantID`);

--
-- Indexes for table `plantinginfo`
--
ALTER TABLE `plantinginfo`
  ADD PRIMARY KEY (`plantInfoID`),
  ADD KEY `fk_PLANT` (`plantID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `plantID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `plantinginfo`
--
ALTER TABLE `plantinginfo`
  MODIFY `plantInfoID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `garden`
--
ALTER TABLE `garden`
  ADD CONSTRAINT `fk_USERS` FOREIGN KEY (`UserID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gardenplants`
--
ALTER TABLE `gardenplants`
  ADD CONSTRAINT `fk_GARDENPLANTS1` FOREIGN KEY (`gardenID`) REFERENCES `garden` (`gardenID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_GARDENPLANTS2` FOREIGN KEY (`plantID`) REFERENCES `plant` (`plantID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plantinginfo`
--
ALTER TABLE `plantinginfo`
  ADD CONSTRAINT `fk_PLANT` FOREIGN KEY (`plantID`) REFERENCES `plant` (`plantID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
