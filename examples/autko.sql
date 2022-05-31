-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 31 Maj 2022, 19:51
-- Wersja serwera: 10.8.3-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `autko`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `credentials`
--

CREATE TABLE `credentials` (
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news` int(255) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `credentials`
--

INSERT INTO `credentials` (`username`, `mail`, `pass`, `news`, `ID`) VALUES
('adadsada', 'a@d', 'a', 0, 1),
('dbashdbasd', 'a@dd', '1', 0, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `koszyk`
--

CREATE TABLE `koszyk` (
  `ID` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `data` int(11) NOT NULL,
  `auto` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nadwozie` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silnik` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wersja` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cena` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `koszyk`
--

INSERT INTO `koszyk` (`ID`, `userid`, `data`, `auto`, `nadwozie`, `silnik`, `wersja`, `cena`) VALUES
(9, 1, 1654011414, 'Daewoo Nexia', 'hatchback', '1.5 DOHC 85 KM', 'GLX', '72250zł'),
(10, 1, 1654011422, 'Daewoo Nexia', 'sedan', '1.5 SOHC 75 KM', 'GLE', '71000zł');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `messenger`
--

CREATE TABLE `messenger` (
  `ID` int(11) NOT NULL,
  `senderid` int(11) NOT NULL,
  `receiverid` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `messenger`
--

INSERT INTO `messenger` (`ID`, `senderid`, `receiverid`, `content`, `date`) VALUES
(1, 1, 2, 'esfsfesfs', 1654007766),
(2, 1, 2, 'aaaaaaaaaaa', 1654007770),
(3, 2, 1, 'efesfes', 1654007802),
(4, 2, 1, 'eafaefeaf', 1654007804),
(5, 2, 1, 'efesfeafa', 1654007805);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `profiles`
--

CREATE TABLE `profiles` (
  `ID` int(11) NOT NULL,
  `opis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `profiles`
--

INSERT INTO `profiles` (`ID`, `opis`) VALUES
(1, 'hej hej lubie autka 123'),
(2, ' ');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `koszyk`
--
ALTER TABLE `koszyk`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `messenger`
--
ALTER TABLE `messenger`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `credentials`
--
ALTER TABLE `credentials`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `koszyk`
--
ALTER TABLE `koszyk`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `messenger`
--
ALTER TABLE `messenger`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
