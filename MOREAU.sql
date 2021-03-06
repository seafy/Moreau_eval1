-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 03, 2017 at 04:09 PM
-- Server version: 5.5.57-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MOREAU`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `toiture` varchar(255) NOT NULL,
  `chauffage` varchar(255) NOT NULL,
  `plomberie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projets`
--

CREATE TABLE `projets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `bilan` text NOT NULL,
  `worker` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projets`
--

INSERT INTO `projets` (`id`, `name`, `firstname`, `phone`, `adress`, `bilan`, `worker`, `img`) VALUES
(3, 'Tryfon', 'Daniel', '05.71.65.34.16', '95, rue Grande Fusterie 19100 BRIVE-LA-GAILLARDE', 'Renover la toiture!\r\nCharpente Cassé!', 'fred , romain', 'http://cdn.servicemagic.eu/library/forms/FR/Travaux/300x200/pct_sr_180.jpg'),
(5, 'Zenon', 'Dorin', '04.55.22.77.88', '91 rue leclerd ,PARIS ', 'renovation tuyauterie ,  chaudiere, ', 'dylan , fred', 'http://www.astuces-brico.fr/wp-content/uploads/2012/11/reparation-tuyaux.jpg'),
(6, 'Daigneault', 'Fleur', '04.55.46.25.88', '69, rue des six frères Ruellan\r\n13300 SALON-DE-PROVENCE', 'renovation Salle de bain + agrandir!', 'romain , dorin', 'http://www.valentedesign.com/img/c/equipement-salle-de-bain-design.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `firstname`, `age`, `email`, `password`) VALUES
(1, 'moreau', 'anis', 40, 'iniffepe-8890@yopmail.com', 'moreau1234'),
(2, 'René', 'Florentinus', 38, 'esseddypo-6364@yopmail.com', 'rene1234'),
(3, 'hasquette', 'vincent', 21, 'vhasquette@gmail.com', 'succes'),
(5, 'gerome', 'user1', 21, 'aleatoire@gmail.com', 'zrestrdftyghuij');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
