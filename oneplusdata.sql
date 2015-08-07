-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Gegenereerd op: 07 aug 2015 om 00:01
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
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `string` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `oneplus_emails`
--

CREATE TABLE IF NOT EXISTS `oneplus_emails` (
  `id` int(5) NOT NULL,
  `email` varchar(30) CHARACTER SET latin1 NOT NULL,
  `name` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `oneplus_emails`
--

INSERT INTO `oneplus_emails` (`id`, `email`, `name`) VALUES
(0, 'smit.rens@icloud.com', 'test'),
(0, 'smit.rens@icloud.com', 'test'),
(0, 'smit.rens@icloud.com', 'test'),
(0, 'smit.rens@icloud.com', 'test'),
(0, 'smit.rens@icloud.com', 'test'),
(0, 'smit.rens@icloud.com', 'test'),
(0, 'smit.rens@icloud.com', 'test'),
(0, 'smit.rens@icloud.com', 'test'),
(0, 'smit.rens@icloud.com', 'test'),
(0, 'smit.rens@icloud.com', 'test'),
(0, 'smit.rens@icloud.com', 'test'),
(0, 'smit.rens@icloud.com', 'test'),
(0, 'smit.rens@icloud.com', 'test'),
(0, 'smit.rens@icloud.com', 'test'),
(0, 'smit.rens@icloud.com', 'test'),
(0, 'smit.rens@icloud.com', 'test'),
(0, 'smit.rens@icloud.com', 'test'),
(0, 'smit.rens@icloud.com', 'test');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `oneplus_users`
--

CREATE TABLE IF NOT EXISTS `oneplus_users` (
  `id` int(5) NOT NULL,
  `kid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `rank` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `ref_count` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `total` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
