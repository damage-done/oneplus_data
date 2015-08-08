-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Gegenereerd op: 08 aug 2015 om 12:20
-- Serverversie: 5.5.34
-- PHP-versie: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `oneplusdata`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `oneplus_details`
--

CREATE TABLE IF NOT EXISTS `oneplus_details` (
  `email` varchar(30) NOT NULL,
  `string` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `DisplayName` text NOT NULL,
  `email` text NOT NULL,
  `Rank` int(11) NOT NULL,
  `Referrals` int(11) NOT NULL,
  UNIQUE KEY `Rank` (`Rank`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`DisplayName`, `email`, `Rank`, `Referrals`) VALUES
('KeithLi', 'kpd20062000@yahoo.com.hk', 2208, 81),
('lorenzovinci19', 'lorenzovinci19@yahoo.it', 6677, 18),
('Gopal kedia', 'gopal.kedia009@gmail.com', 9203, 11),
('BjornDer', 'bjorn.derudder@gmail.com', 16977, 5),
('SunnyHQ', 'zsunnyy.lv@gmail.com', 59841, 0),
('Gazzer2k', 'gazzer2k@yahoo.com', 245456, 0),
('mato22', 'mato252@gmail.com', 2074008, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
