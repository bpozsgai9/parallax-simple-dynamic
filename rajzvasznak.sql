-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Ápr 17. 20:21
-- Kiszolgáló verziója: 10.4.10-MariaDB
-- PHP verzió: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `rajzvasznak`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `vasznak`
--

CREATE TABLE `vasznak` (
  `id` int(11) NOT NULL,
  `nev` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `anyag` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `meret` int(11) NOT NULL,
  `ar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `vasznak`
--

INSERT INTO `vasznak` (`id`, `nev`, `anyag`, `meret`, `ar`) VALUES
(1, 'Paint Color Textil', 'textil', 10, 2000),
(2, 'Paint Color Len', 'len', 20, 4000),
(3, 'Paint Color Papír', 'papír', 30, 6000);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `vasznak`
--
ALTER TABLE `vasznak`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `vasznak`
--
ALTER TABLE `vasznak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
