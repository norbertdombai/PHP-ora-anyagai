-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Okt 21. 19:52
-- Kiszolgáló verziója: 10.4.20-MariaDB
-- PHP verzió: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `phpcrud`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_hungarian_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_hungarian_ci NOT NULL DEFAULT 'aktív',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `status`) VALUES
(2, 'Pál', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'p@p.hu', 'aktív'),
(3, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'a@a.hu', 'admin'),
(7, 'Peti', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'p@p.hu', 'aktív'),
(8, 'Pisti', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'p@p.hu', 'aktív'),
(9, 'Xénia', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'x@x.hu', 'aktív');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
