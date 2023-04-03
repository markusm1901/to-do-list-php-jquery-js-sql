-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Mar 2023, 22:11
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
(6, 0, 'asdasd', 0),
(7, 0, 'asdasd', 0),
(8, 0, 'asd', 0),
(9, 0, 'asdasdasd', 0),
(10, 0, 'asdasd', 0),
(11, 0, 'asdasd', 0),
(12, 0, 'adsad', 0),
(13, 4, '12312312', 0),
(14, 4, 'asdaq', 1),
(15, 4, 'qqqqq', 1),
(16, 4, 'qqqqqwqwe', 1),
(17, 4, 'qwqew', 0),
(18, 4, 'aaaaaaaaa', 0),
(19, 5, 'qweqewaaaa', 1),
(20, 5, 'aaa', 0),
(22, 6, 'asdasdasd', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `listy`
--

CREATE TABLE `listy` (
  `id` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `listy`
--

INSERT INTO `listy` (`id`, `link`) VALUES
(1, '8pwc'),
(3, 'eehch'),
(4, 'todolist3'),
(5, '523v8'),
(6, 'nhpzo');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT dla tabeli `listy`
--
ALTER TABLE `listy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
