-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mariadb:3306
-- Generation Time: May 16, 2024 at 05:06 PM
-- Server version: 10.11.7-MariaDB-1:10.11.7+maria~ubu2204
-- PHP Version: 8.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `name`, `surname`, `email`, `phone`, `address`) VALUES
(1, 'Nessa', 'Bratchell', 'nbratchell0@51.la', '55-(100)371-6108', 'initial'),
(2, 'Tara', 'Cuddy', 'tcuddy1@yolasite.com', '62-(786)576-4697', 'initial'),
(3, 'Rudolph', 'Forrester', 'rforrester2@artisteer.com', '351-(285)693-7096', 'initial'),
(4, 'Magdalen', 'Mountain', 'mmountain3@boston.com', '86-(998)738-7557', 'initial'),
(5, 'Richie', 'Karpushkin', 'rkarpushkin4@ca.gov', '86-(395)662-7064', 'initial'),
(6, 'Izabel', 'Tucknutt', 'itucknutt5@pcworld.com', '55-(598)903-4298', 'initial'),
(7, 'Florence', 'Reily', 'freily6@tamu.edu', '86-(275)681-6208', 'initial'),
(8, 'Ardelis', 'Cashin', 'acashin7@booking.com', '66-(724)985-4624', 'initial'),
(9, 'Chance', 'Inskipp', 'cinskipp8@amazon.com', '7-(771)291-7055', 'initial'),
(10, 'Ian', 'Stotherfield', 'istotherfield9@economist.com', '380-(790)727-5302', 'initial'),
(11, 'Mallory', 'Woodrup', 'mwoodrupa@who.int', '63-(530)870-6976', 'initial'),
(12, 'Charlene', 'Harrowing', 'charrowingb@businessinsider.com', '49-(820)895-6693', 'initial'),
(13, 'Angelina', 'McMichan', 'amcmichanc@jiathis.com', '386-(729)163-3927', 'initial'),
(14, 'Jone', 'MacDwyer', 'jmacdwyerd@fc2.com', '1-(113)422-5956', 'initial'),
(15, 'Mar', 'Larmuth', 'mlarmuthe@posterous.com', '33-(863)582-8482', 'initial'),
(16, 'Tris', 'Charker', 'tcharkerf@apple.com', '27-(237)112-6297', 'initial'),
(17, 'Vannie', 'Espasa', 'vespasag@shareasale.com', '51-(751)133-2500', 'initial'),
(18, 'Anthea', 'Villalta', 'avillaltah@ovh.net', '7-(187)570-8855', 'initial'),
(19, 'Sharon', 'Tunkin', 'stunkini@google.co.uk', '850-(923)110-2071', 'initial'),
(20, 'Jerrie', 'Antrag', 'jantragj@va.gov', '62-(437)743-0006', 'initial'),
(21, 'Pascale', 'McParlin', 'pmcparlink@smugmug.com', '1-(866)232-9417', 'initial'),
(22, 'Clea', 'Busby', 'cbusbyl@mapy.cz', '48-(447)281-4393', 'initial'),
(23, 'Saba', 'Merrick', 'smerrickm@narod.ru', '86-(675)854-7908', 'initial'),
(24, 'Wilhelmine', 'Guterson', 'wgutersonn@phpbb.com', '33-(864)172-8602', 'initial'),
(25, 'Ursulina', 'Caddens', 'ucaddenso@hp.com', '33-(220)456-3453', 'initial'),
(26, 'Kellsie', 'Hemstead', 'khemsteadp@earthlink.net', '62-(519)677-4369', 'initial'),
(27, 'Joete', 'Loyd', 'jloydq@rediff.com', '351-(454)859-8130', 'initial'),
(28, 'Benedict', 'Clare', 'bclarer@homestead.com', '62-(934)252-9035', 'initial'),
(29, 'Chas', 'Seagar', 'cseagars@examiner.com', '81-(547)922-3283', 'initial'),
(30, 'Jody', 'Cobain', 'jcobaint@admin.ch', '46-(466)605-2971', 'initial'),
(31, 'Korie', 'Traite', 'ktraiteu@youku.com', '86-(861)738-2904', 'initial'),
(32, 'Korney', 'Lovie', 'kloviev@surveymonkey.com', '62-(269)999-7426', 'initial'),
(33, 'Guillermo', 'Withringten', 'gwithringtenw@adobe.com', '86-(365)343-3229', 'initial'),
(34, 'Sherline', 'Enbury', 'senburyx@freewebs.com', '7-(289)766-0942', 'initial'),
(35, 'Lisabeth', 'Galey', 'lgaleyy@narod.ru', '380-(774)548-7943', 'initial'),
(36, 'Daffy', 'Goldwater', 'dgoldwaterz@t.co', '7-(113)548-0931', 'initial'),
(37, 'Barnabe', 'Rider', 'brider10@lycos.com', '86-(632)508-0577', 'initial'),
(38, 'Clovis', 'Seymark', 'cseymark11@imgur.com', '55-(118)155-2374', 'initial'),
(39, 'Langsdon', 'Kilbourn', 'lkilbourn12@admin.ch', '7-(716)959-7759', 'initial'),
(40, 'Wyn', 'Milmore', 'wmilmore13@home.pl', '62-(452)773-9182', 'initial'),
(41, 'Abbott', 'Baldacco', 'abaldacco14@microsoft.com', '53-(965)608-7133', 'initial'),
(42, 'Thorvald', 'Simonel', 'tsimonel15@blogger.com', '46-(249)879-9520', 'initial'),
(43, 'Weber', 'Alpine', 'walpine16@a8.net', '62-(981)666-9859', 'initial'),
(44, 'Ysabel', 'Alderson', 'yalderson17@twitpic.com', '1-(714)158-3651', 'initial'),
(45, 'Goldina', 'Ernshaw', 'gernshaw18@nytimes.com', '48-(228)590-9316', 'initial'),
(46, 'Sanders', 'Tidbold', 'stidbold19@businesswire.com', '63-(365)776-9484', 'initial'),
(47, 'Billie', 'Allonby', 'ballonby1a@unicef.org', '63-(970)426-9551', 'initial'),
(48, 'Wynne', 'Cherrison', 'wcherrison1b@house.gov', '505-(414)696-7059', 'initial'),
(49, 'Gizela', 'Klesel', 'gklesel1c@globo.com', '57-(556)469-5503', 'initial'),
(50, 'Towny', 'Utridge', 'tutridge1d@upenn.edu', '237-(382)582-8012', 'initial'),
(51, 'Edna', 'Mattusevich', 'emattusevich1e@businesswire.com', '52-(492)835-5446', 'initial'),
(52, 'Leonerd', 'McKeaney', 'lmckeaney1f@latimes.com', '52-(703)995-6361', 'initial'),
(53, 'Dionne', 'Trusler', 'dtrusler1g@amazon.com', '420-(367)764-2263', 'initial'),
(54, 'Siobhan', 'Swales', 'sswales1h@mysql.com', '86-(606)539-6499', 'initial'),
(55, 'Aryn', 'Youhill', 'ayouhill1i@gmpg.org', '62-(127)416-8461', 'initial'),
(56, 'Obie', 'Sutherby', 'osutherby1j@mashable.com', '86-(315)261-3992', 'initial'),
(57, 'Launce', 'Lumby', 'llumby1k@bbb.org', '63-(980)592-4136', 'initial'),
(58, 'Brittaney', 'Viles', 'bviles1l@spotify.com', '55-(369)235-4365', 'initial'),
(59, 'Charles', 'Goodliff', 'cgoodliff1m@vkontakte.ru', '62-(442)658-4410', 'initial'),
(60, 'Giff', 'Zollner', 'gzollner1n@360.cn', '374-(102)423-4552', 'initial'),
(61, 'Lamar', 'Hubbert', 'lhubbert1o@1und1.de', '352-(496)351-8434', 'initial'),
(62, 'Danya', 'Goss', 'dgoss1p@comcast.net', '39-(942)178-4182', 'initial'),
(63, 'Rodge', 'Emeny', 'remeny1q@simplemachines.org', '63-(167)687-9476', 'initial'),
(64, 'Scarlett', 'Bleackly', 'sbleackly1r@accuweather.com', '351-(709)549-9773', 'initial'),
(65, 'Kean', 'Heater', 'kheater1s@bluehost.com', '420-(794)293-5466', 'initial'),
(66, 'Karin', 'Wyer', 'kwyer1t@senate.gov', '86-(682)817-3098', 'initial'),
(67, 'Reinhard', 'Swigger', 'rswigger1u@nyu.edu', '86-(357)165-3017', 'initial'),
(68, 'Amity', 'Billett', 'abillett1v@china.com.cn', '86-(287)335-7140', 'initial'),
(69, 'Aprilette', 'Carneck', 'acarneck1w@fda.gov', '970-(137)728-0463', 'initial'),
(70, 'Tommy', 'Dodd', 'tdodd1x@naver.com', '51-(978)921-7299', 'initial'),
(71, 'Udall', 'Tysall', 'utysall1y@qq.com', '62-(734)318-4552', 'initial'),
(72, 'Grover', 'Von Helmholtz', 'gvonhelmholtz1z@mashable.com', '385-(905)963-4173', 'initial'),
(73, 'Arabel', 'McOwan', 'amcowan20@archive.org', '62-(678)386-4354', 'initial'),
(74, 'Fionna', 'Cockran', 'fcockran21@booking.com', '81-(528)864-0732', 'initial'),
(75, 'Benyamin', 'Nesey', 'bnesey22@indiegogo.com', '86-(743)623-1357', 'initial'),
(76, 'Hunfredo', 'Servante', 'hservante23@bing.com', '86-(221)543-4635', 'initial'),
(77, 'Ivar', 'Dowd', 'idowd24@utexas.edu', '63-(596)326-1866', 'initial'),
(78, 'Ricky', 'Adolphine', 'radolphine25@multiply.com', '251-(275)824-6057', 'initial'),
(79, 'Jameson', 'Ollivierre', 'jollivierre26@t.co', '507-(805)876-6297', 'initial'),
(80, 'Helen-elizabeth', 'Sebley', 'hsebley27@tinypic.com', '1-(502)362-4819', 'initial'),
(81, 'Evangelia', 'Linneman', 'elinneman28@ibm.com', '55-(639)108-3257', 'initial'),
(82, 'Geneva', 'Burbidge', 'gburbidge29@newyorker.com', '263-(710)296-0697', 'initial'),
(83, 'Ninon', 'Ahearne', 'nahearne2a@comsenz.com', '227-(558)194-4236', 'initial'),
(84, 'Leela', 'Clayill', 'lclayill2b@accuweather.com', '27-(240)121-2991', 'initial'),
(85, 'Shaine', 'd\' Eye', 'sdeye2c@surveymonkey.com', '7-(655)634-3938', 'initial'),
(86, 'Hersch', 'Mitchenson', 'hmitchenson2d@nydailynews.com', '60-(372)128-8219', 'initial'),
(87, 'Pedro', 'Doxey', 'pdoxey2e@alexa.com', '380-(153)170-9349', 'initial'),
(88, 'Moore', 'Solleme', 'msolleme2f@printfriendly.com', '972-(543)784-1625', 'initial'),
(89, 'Esmaria', 'Bossons', 'ebossons2g@soundcloud.com', '62-(965)180-2596', 'initial'),
(90, 'Hakeem', 'Stawell', 'hstawell2h@economist.com', '62-(528)872-6186', 'initial'),
(91, 'Cordy', 'Caser', 'ccaser2i@yolasite.com', '86-(216)332-6087', 'initial'),
(92, 'Willie', 'Aberhart', 'waberhart2j@plala.or.jp', '55-(645)233-1120', 'initial'),
(93, 'Happy', 'Kernan', 'hkernan2k@is.gd', '960-(642)828-7781', 'initial'),
(94, 'Phyllys', 'Tatchell', 'ptatchell2l@senate.gov', '86-(565)264-4268', 'initial'),
(95, 'Frasquito', 'Greswell', 'fgreswell2m@t.co', '62-(284)771-7352', 'initial'),
(96, 'Jodi', 'Pawfoot', 'jpawfoot2n@google.ru', '504-(611)510-3250', 'initial'),
(97, 'Nancey', 'Stute', 'nstute2o@google.it', '970-(159)588-0311', 'initial'),
(98, 'Abey', 'Clint', 'aclint2p@linkedin.com', '86-(869)895-4307', 'initial'),
(99, 'Clare', 'Kenrat', 'ckenrat2q@quantcast.com', '86-(814)176-5263', 'initial'),
(100, 'Carmel', 'Edowes', 'cedowes2r@netscape.com', '93-(992)236-4386', 'initial');

-- --------------------------------------------------------

--
-- Table structure for table `testDB`
--

CREATE TABLE `testDB` (
  `id` int(11) NOT NULL,
  `data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(5, 'a', '0cc175b9c0f1b6a831c399e269772661'),
(7, 'admin', '0cc175b9c0f1b6a831c399e269772661');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testDB`
--
ALTER TABLE `testDB`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `testDB`
--
ALTER TABLE `testDB`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
