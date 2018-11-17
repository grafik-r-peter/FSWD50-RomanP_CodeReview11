-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 04:33 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr11_romanpeter_travelmatic`
--

-- --------------------------------------------------------

--
-- Table structure for table `concerts`
--

CREATE TABLE `concerts` (
  `concerts_id` int(11) NOT NULL,
  `concerts_artist` varchar(112) NOT NULL,
  `concerts_name` varchar(112) NOT NULL,
  `concerts_date` datetime NOT NULL,
  `concerts_price` decimal(10,0) NOT NULL,
  `concerts_desc` text NOT NULL,
  `concerts_img` varchar(112) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `concerts`
--

INSERT INTO `concerts` (`concerts_id`, `concerts_artist`, `concerts_name`, `concerts_date`, `concerts_price`, `concerts_desc`, `concerts_img`) VALUES
(1, 'Kris Kristofferson', 'The Highway Men', '2018-11-15 20:00:00', '58', 'Kris Kristofferson has been making things happen his entire life. Born in Texas and raised in a military family, he was a Golden Gloves boxer who studied creative writing at Pomona College in California. The Phi Beta Kappa graduate earned a Rhodes scholarship to study literature at Oxford, where he boxed, played rugby and continued to write songs. After graduating from Oxford, Kristofferson served in the army as an Airborne Ranger helicopter pilot and achieved the rank of Captain. In 1965, Kristofferson turned down an assignment to teach at West Point and, inspired by songwriters like Willie Nelson and Johnny Cash, moved to Nashville to pursue his music.', 'img/kristofferson.jpg'),
(2, 'Lenny Kravitz', 'RAISE VIBRATION', '2018-10-16 19:00:00', '47', 'Lenny Kravitz hat für den Sommer 2018 seine Raise Vibration Tour angekündigt und wird am Samstag, den 09. Juni in der Wiener Stadthalle auftreten!', 'img/kravitz.jpg'),
(3, 'Reinhard Mey', 'Mr. Lee', '2018-06-13 20:00:00', '20', 'Das neue Album Mr. Lee von Reinhard Mey wurde am 6. Mai 2016 veröffentlicht!\r\nMr. Lee? Wer ist dieser Mr. Lee? Der schweigsame Reisende, der sich vor den Seelen der Geschundenen im S21, dem Folterkerker, verneigt, den die barfüßigen Kinder in den Slums von Phnom Penh lieben, weil er ihnen ihre Postkarten oder Zigaretten abkauft, wer ist der stille Europäer, den sie „der weiße Elefant“ nennen? Reinhard Mey wahrt sein Geheimnis, aber er legt musikalische Kieselsteine für die Fährtenleser aus, sie werden Mr. Lee finden.', 'img/mey.jpg'),
(4, 'LOS FASTIDIOS', 'Antifa Hooligan', '2018-07-17 22:00:00', '15', 'LOS FASTIDIOS haben es endlich wieder mal in die Hauptstadt geschafft! Mangels Supportband brauchte die Menge zwar etwas zum Warmwerden. Gepasst hat’s dann dennoch.', 'img/losfastidios.jpg'),
(5, 'John Doe', 'Lalala', '2018-11-10 02:01:00', '23', 'A few lines', 'dsafdsa.png');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `location_adress` varchar(112) NOT NULL,
  `location_zip` int(5) NOT NULL,
  `location_city` varchar(112) NOT NULL,
  `latitude` varchar(55) NOT NULL,
  `Longitude` varchar(55) NOT NULL,
  `location_img` varchar(112) NOT NULL,
  `location_cat` varchar(55) NOT NULL,
  `places_id` int(11) DEFAULT NULL,
  `restaurants_id` int(11) DEFAULT NULL,
  `concerts_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_adress`, `location_zip`, `location_city`, `latitude`, `Longitude`, `location_img`, `location_cat`, `places_id`, `restaurants_id`, `concerts_id`) VALUES
(1, 'Karlsplatz 1', 1010, 'Vienna', '', '', 'img/charles_church.jpg', 'Trips', 1, NULL, NULL),
(2, 'Maxingstraße 13b', 1130, 'Vienna', '', '', 'img/schoenbrunn.jpg', 'Trips', 2, NULL, NULL),
(3, 'Kettenbrückengasse 19', 1050, 'Vienna', '', '', 'img/lemon-leaf.png', 'Restaurants', NULL, 1, NULL),
(4, 'Schönbrunner Straße 21', 1050, 'Vienna', '', '', 'img/sixta.png', 'Restaurants', NULL, 2, NULL),
(5, 'Roland Rainer Platz 1', 1150, 'Vienna', '', '', 'img/kristofferson.jpg', 'Concerts', NULL, NULL, 1),
(6, 'Roland Rainer Platz 1', 1150, 'Vienna', '', '', 'img/kravitz.jpg', 'Concerts', NULL, NULL, 2),
(7, 'Margaretenstraße 26', 1040, 'Vienna', '', '', 'img/orange.jpg', 'Restaurants', NULL, 4, NULL),
(8, 'Kulturbezirk 2', 3100, 'St. Pölten', '', '', 'img/mey.jpg', 'Concerts', NULL, NULL, 3),
(9, 'Baumgasse 80', 1030, 'Vienna', '', '', 'img/losfastidios.jpg', 'Concerts', NULL, NULL, 4),
(10, 'Augartenbrücke 1', 1010, 'Vienna', '', '', 'img/flex.jpg', 'Restaurants', NULL, 3, NULL),
(11, 'Kettenbrückengasse 23', 1050, 'Vienna', '', '', 'img/cf.jpg', 'Trips', 3, NULL, NULL),
(12, 'Prater 9', 1020, 'Vienna', '', '', 'img/prater.jpg', 'Trips', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `places_id` int(11) NOT NULL,
  `places_name` varchar(112) NOT NULL,
  `places_desc` text NOT NULL,
  `places_img` varchar(112) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`places_id`, `places_name`, `places_desc`, `places_img`) VALUES
(1, 'St. Charles Church', 'The striking sacred building, with its powerful dome, is one of the most important Baroque structures in Vienna. An elevator goes up to the dome so that visitors can get a close look at the famous Rottmayr frescoes.', 'img/charles_church.jpg'),
(2, 'Zoo Vienna', 'At our animal info points our zoo staff will give you fascinating information pertaining to the various animal species: ranging from their way of living to their particularities to projects concerning the protection of species. At many of these animal info points you can watch the animals being fed.', 'img/schoenbrunn.jpg'),
(3, 'CodeFactory', 'Founded in 2016, CodeFactory Wien follows the concept of programming boot camps of Anglo-American countries. Our goal is to provide time-efficient and very practice-oriented training with the aim of the fastest possible career entry as a junior developer. Our courses are tailored to newcomers, people who want to change careers in the second or third educational path as well as people who are interested in an application-oriented education.', 'img/cf.jpg'),
(4, 'Prater', 'Der Wiener Prater ist ein weitläufiges, etwa 6 km² umfassendes, großteils öffentliches Areal im 2. Wiener Gemeindebezirk, Leopoldstadt, das noch heute zu großen Teilen aus ursprünglich von der Donau geprägten Aulandschaften besteht.', 'img/prater.jpg'),
(5, 'Test', 'A few lindsadses', 'dsdsa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `restaurants_id` int(11) NOT NULL,
  `restaurants_name` varchar(112) NOT NULL,
  `restaurants_type` varchar(55) NOT NULL,
  `restaurants_url` varchar(112) NOT NULL,
  `restaurants_tel` varchar(55) NOT NULL,
  `restaurants_desc` text NOT NULL,
  `restaurants_img` varchar(112) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restaurants_id`, `restaurants_name`, `restaurants_type`, `restaurants_url`, `restaurants_tel`, `restaurants_desc`, `restaurants_img`) VALUES
(1, 'Lemon Leaf Thai Restaurant', 'Thai', 'http://www.lemonleaf.at', '+43(1)5812308', 'In Thailand legt man sehr großen Wert auf die Gewürze, damit die Gerichte eine Vielfalt an Geschmack anbieten. Und das ist auch der Grund weshalb Feinschmecker der ganzen Welt die thailändische Küche so sehr anpreisen. Die Frische und Vielfalt der Gewürze machen unsere Gerichte zu einem besonderen Erlebnis. Seien Sie nicht schüchtern bei den Bestellungen Ihrer Speisen und probieren Sie neue Gerichte aus. Auf Wunsch können wir die Speisen auch weniger scharf zubereiten, denn die Schärfe ist nicht das Wichtigste bei der Thai-Küche, so wie viele Leute glauben. Oft reicht nur ein bisschen Chili aus um die Speisen noch mehr an Geschmack zu heben. Probieren Sie ebenfalls unsere Nudelsuppen Töpfe, die mit feinsten Gewürzen und einer geschmackreichen Suppe zusammengestellt werden. Das Lemon Leaf Team wünscht Ihnen nun einen Guten Appetit und beantwortet gerne Ihre Fragen zu den Speisen.', 'img/lemon-leaf.png'),
(2, 'SIXTA', 'Viennese', 'http://www.lemonleaf.at', '+43 1 58 528 56', 'Das Feingefühl zwischen kreativer Küche und einem traditionellen, wienerischen Angebot bestimmt unsere Küche. Wir legen größten Wert auf Produktqualität, Erzeugungsqualität und best-möglichen Geschmack.Die wechselnde Karte nimmt Rücksicht auf saisonelle Besonderheiten und Schmankerln. ', 'img/sixta.png'),
(3, 'FLEX', 'Night Club', 'http://flex.at', '01 5337525', 'Livemusikclub mit abwechslungsreichem Programm mit Konzerten und DJs sowie großer Außenterrasse.', 'img/flex.jpg'),
(4, 'Das Orange', 'Bar', 'http://www.dasorange.at/', '01 9524209', 'Moderne Beislküche (HS € 10,– bis € 20,–), Mi hausgemachte Burger; der Großteil der Zutaten wird direkt beim Produzenten gekauft; hausgemachte Limonaden, Eistees, Cocktails, große Bierauswahl (z.B. Freistädter, Hofstettner, 4 offene Biere) Erinnert von außen an ein altes Gasthaus, innen neu gestaltetes Barambiente. Schanigarten für 32 Pers.', 'img/orange.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `userRole` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`, `userRole`) VALUES
(1, 'Roman Peter', 'grafik.r.peter@gmail.com', '913CFF83AD28F8EFBB1A3DCC0F49207091B81B6DB2A32EADC8D3F7A288B2854C', 2),
(2, 'rpp', 'test@test.at', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 1),
(3, 'Guy Incognito', 'fuck@you.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 1),
(4, 'fuck', 'admin@travel.at', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 2),
(7, 'Roman Peter', 'testt@test.at', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 1),
(8, 'Roman Peter', 'ga@oh.at', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 1),
(9, 'dsad', 'k@k.at', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concerts`
--
ALTER TABLE `concerts`
  ADD PRIMARY KEY (`concerts_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `places_id` (`places_id`),
  ADD KEY `restaurants_id` (`restaurants_id`),
  ADD KEY `concerts_id` (`concerts_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`places_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restaurants_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concerts`
--
ALTER TABLE `concerts`
  MODIFY `concerts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `places_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `restaurants_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `concerts_id` FOREIGN KEY (`concerts_id`) REFERENCES `concerts` (`concerts_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `places_id` FOREIGN KEY (`places_id`) REFERENCES `places` (`places_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `restaurants_id` FOREIGN KEY (`restaurants_id`) REFERENCES `restaurants` (`restaurants_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
