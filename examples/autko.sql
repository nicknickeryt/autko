-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 03 Cze 2022, 16:35
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
('dbashdbasd', 'a@dd', '1', 0, 2),
('aaaaa', 'nick@asd', 'a', 0, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `forms`
--

CREATE TABLE `forms` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `forms`
--

INSERT INTO `forms` (`ID`, `name`, `mail`, `title`, `text`) VALUES
(1, 'fesesf', 'fessef', 'sefsef', 'fsefe'),
(2, 'nff', 'fsfse', 'esfsef', 'sefesf'),
(3, 'ssefes', 'sefsef', 'sfsef', 'sefesf'),
(4, 'tset', 'tset', 'dfaaa', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');

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
(10, 1, 1654011422, 'Daewoo Nexia', 'sedan', '1.5 SOHC 75 KM', 'GLE', '71000zł'),
(11, 1, 1654023285, 'Chevrolet Aveo', 'sedan', 'L4 1.6l E-TEC', 'LS ', '102000zł'),
(15, 1, 1654026299, 'Daewoo-FSO Polonez', 'Atu Plus', '1.6 GLi', '', '43000zł'),
(16, 1, 1654027465, 'Daewoo-FSO Polonez', 'Kombi Plus', '1.6 GSi', '', '47700zł'),
(17, 1, 1654095127, 'Daewoo Nexia', 'hatchback', '1.6 108 KM', 'GLX', '74250zł');

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
(5, 2, 1, 'efesfeafa', 1654007805),
(6, 2, 1, 'eafewaf', 1654095220),
(7, 1, 2, 'fesfsf', 1654095223),
(8, 2, 1, 'fefsf', 1654095228),
(9, 2, 1, 'assd', 1654095234),
(10, 2, 1, 'dawd', 1654095235),
(11, 2, 1, 'awdwad', 1654095237),
(12, 2, 1, 'adwad', 1654095238),
(13, 1, 2, 'dawdwad', 1654095240),
(14, 1, 2, 'adwad', 1654095242),
(15, 1, 2, 'dawdw', 1654095246),
(16, 1, 2, 'fesafesf', 1654095269),
(17, 2, 1, 'efsefesf', 1654095272),
(18, 2, 1, 'fefesfe', 1654095279);

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
(1, 'hej hej 123'),
(2, ' '),
(3, ' ');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `forms`
--
ALTER TABLE `forms`
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `forms`
--
ALTER TABLE `forms`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `koszyk`
--
ALTER TABLE `koszyk`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `messenger`
--
ALTER TABLE `messenger`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
