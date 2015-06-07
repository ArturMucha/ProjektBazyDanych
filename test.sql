-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2015 at 04:56 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
  `ID_Agenta` int(11) NOT NULL,
  `Imie` varchar(64) NOT NULL,
  `Nazwisko` varchar(64) NOT NULL,
  `Adres` int(11) NOT NULL,
  `Data_urodzenia` date NOT NULL,
  `Data_zatrudnienia` date NOT NULL,
  `Id_szefa` int(11) NOT NULL,
  `Pensja` int(11) NOT NULL,
  `Notatka` varchar(64) NOT NULL,
  `Id_regionu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `klient`
--

CREATE TABLE IF NOT EXISTS `klient` (
  `Pesel_klienta` int(11) NOT NULL,
  `Imie` varchar(64) NOT NULL,
  `Nazwisko` varchar(64) NOT NULL,
  `Adres` varchar(64) NOT NULL,
  `Miejscowosc` varchar(64) NOT NULL,
  `Notatka` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produkty`
--

CREATE TABLE IF NOT EXISTS `produkty` (
  `Id_produktu` int(11) NOT NULL,
  `Nazwa` varchar(64) NOT NULL,
  `Przedmiot_umowy` varchar(64) NOT NULL,
  `długosc_trwania_umowy` int(11) NOT NULL,
  `wysokosc_skladki_min` int(11) NOT NULL,
  `wysokosc_skladki_maks` int(11) NOT NULL,
  `wysokosc_skladki` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `Miejscowosc` varchar(64) NOT NULL,
  `Id_regionu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spotkania`
--

CREATE TABLE IF NOT EXISTS `spotkania` (
  `Data_spotkania` date NOT NULL,
  `Uwagi` varchar(64) NOT NULL,
  `Pesel_klienta` int(11) NOT NULL,
  `Id_agenta` int(11) NOT NULL,
  `Id_regionu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `szkolenia`
--

CREATE TABLE IF NOT EXISTS `szkolenia` (
  `Nazwa` varchar(64) NOT NULL,
  `Data` date NOT NULL,
  `Ilość_miejsc` int(11) NOT NULL,
  `Id_agenta` int(11) NOT NULL,
  `Uwagi` varchar(64) NOT NULL,
  `Id_regionu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`ID_Agenta`);

--
-- Indexes for table `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`Pesel_klienta`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
