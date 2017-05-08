-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Maj 2017, 03:31
-- Wersja serwera: 10.1.19-MariaDB
-- Wersja PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `phpprojectbase`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `persons`
--

CREATE TABLE `persons` (
  `ID` int(11) NOT NULL,
  `First_name` text COLLATE utf8_polish_ci NOT NULL,
  `Last_name` text COLLATE utf8_polish_ci NOT NULL,
  `Start_date` date NOT NULL,
  `End_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `persons`
--

INSERT INTO `persons` (`ID`, `First_name`, `Last_name`, `Start_date`, `End_date`) VALUES
(9, 'Anna', 'Motyl', '2000-11-11', '2001-02-22'),
(10, 'Adam', 'Motyl', '2000-11-11', '2000-11-11');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `persons`
--
ALTER TABLE `persons`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
