-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Kwi 2023, 23:52
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `lists`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `elements`
--

CREATE TABLE `elements` (
  `id` int(11) NOT NULL,
  `id_listy` int(11) NOT NULL,
  `task` text COLLATE utf8_polish_ci NOT NULL,
  `is_done` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `elements`
--

INSERT INTO `elements` (`id`, `id_listy`, `task`, `is_done`) VALUES
(40, 30, 'qq', 0),
(41, 31, 'asdfasdf', 0),
(42, 32, 'll', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `listy`
--

CREATE TABLE `listy` (
  `id` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `is_sent` tinyint(4) NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `listy`
--

INSERT INTO `listy` (`id`, `link`, `is_sent`, `email`) VALUES
(43, 'jdid9', 0, ''),
(44, 'eujc', 1, 'markusm2005@gmail.com');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `elements`
--
ALTER TABLE `elements`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `listy`
--
ALTER TABLE `listy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `elements`
--
ALTER TABLE `elements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT dla tabeli `listy`
--
ALTER TABLE `listy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
