-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2021. Már 06. 15:13
-- Kiszolgáló verziója: 8.0.23
-- PHP verzió: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `lovarda`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalo`
--

CREATE TABLE `felhasznalo` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `jelszo` varchar(2000) NOT NULL,
  `aktiv` tinyint(1) DEFAULT NULL,
  `nev` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `telefonszam` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `oktato_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalo_beallitas`
--

CREATE TABLE `felhasznalo_beallitas` (
  `id` int NOT NULL,
  `felhasznalo_id` int NOT NULL,
  `utolso_bejelentkezes` datetime NOT NULL,
  `ker_hirlevelet` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `foglalas`
--

CREATE TABLE `foglalas` (
  `id` int NOT NULL,
  `kezdete` int NOT NULL,
  `vege` int NOT NULL,
  `oktato_id` int NOT NULL,
  `felhasznalo_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `galeria`
--

CREATE TABLE `galeria` (
  `id` int NOT NULL,
  `cim` varchar(50) NOT NULL,
  `leiras` varchar(200) NOT NULL,
  `kep` mediumblob NOT NULL,
  `kategoriaID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kategoria`
--

CREATE TABLE `kategoria` (
  `id` int NOT NULL,
  `nev` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `lo`
--

CREATE TABLE `lo` (
  `id` int NOT NULL,
  `nev` varchar(100) NOT NULL,
  `kep` mediumblob NOT NULL,
  `oktato_id` int DEFAULT NULL,
  `bemutatkozas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `oktato`
--

CREATE TABLE `oktato` (
  `id` int NOT NULL,
  `nev` varchar(200) NOT NULL,
  `kep` mediumblob NOT NULL,
  `bemutatkozas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rendszer_beallitasok`
--

CREATE TABLE `rendszer_beallitasok` (
  `id` int NOT NULL,
  `foglalas_kezdete` int NOT NULL,
  `foglalas_vege` int NOT NULL,
  `ora_hossza` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `felhasznalo`
--
ALTER TABLE `felhasznalo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oktato_id` (`oktato_id`);

--
-- A tábla indexei `felhasznalo_beallitas`
--
ALTER TABLE `felhasznalo_beallitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `felhasznalo_id` (`felhasznalo_id`);

--
-- A tábla indexei `foglalas`
--
ALTER TABLE `foglalas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oktato_id` (`oktato_id`),
  ADD KEY `felhasznalo_id` (`felhasznalo_id`);

--
-- A tábla indexei `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategoriaID` (`kategoriaID`);

--
-- A tábla indexei `kategoria`
--
ALTER TABLE `kategoria`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `lo`
--
ALTER TABLE `lo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oktato_id` (`oktato_id`);

--
-- A tábla indexei `oktato`
--
ALTER TABLE `oktato`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `rendszer_beallitasok`
--
ALTER TABLE `rendszer_beallitasok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `felhasznalo`
--
ALTER TABLE `felhasznalo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `felhasznalo_beallitas`
--
ALTER TABLE `felhasznalo_beallitas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `foglalas`
--
ALTER TABLE `foglalas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `lo`
--
ALTER TABLE `lo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `oktato`
--
ALTER TABLE `oktato`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `felhasznalo`
--
ALTER TABLE `felhasznalo`
  ADD CONSTRAINT `felhasznalo_ibfk_1` FOREIGN KEY (`oktato_id`) REFERENCES `oktato` (`id`);

--
-- Megkötések a táblához `felhasznalo_beallitas`
--
ALTER TABLE `felhasznalo_beallitas`
  ADD CONSTRAINT `felhasznalo_beallitas_ibfk_1` FOREIGN KEY (`felhasznalo_id`) REFERENCES `felhasznalo` (`id`);

--
-- Megkötések a táblához `foglalas`
--
ALTER TABLE `foglalas`
  ADD CONSTRAINT `foglalas_ibfk_2` FOREIGN KEY (`felhasznalo_id`) REFERENCES `felhasznalo` (`id`);

--
-- Megkötések a táblához `kategoria`
--
ALTER TABLE `kategoria`
  ADD CONSTRAINT `kategoria_ibfk_1` FOREIGN KEY (`id`) REFERENCES `galeria` (`kategoriaID`);

--
-- Megkötések a táblához `lo`
--
ALTER TABLE `lo`
  ADD CONSTRAINT `lo_ibfk_1` FOREIGN KEY (`oktato_id`) REFERENCES `oktato` (`id`);

--
-- Megkötések a táblához `oktato`
--
ALTER TABLE `oktato`
  ADD CONSTRAINT `oktato_ibfk_2` FOREIGN KEY (`id`) REFERENCES `foglalas` (`oktato_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
