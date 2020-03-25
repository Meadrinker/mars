-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 25 Mar 2020, 17:22
-- Wersja serwera: 5.7.26-0ubuntu0.18.04.1
-- Wersja PHP: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `mars`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `era` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `games`
--

INSERT INTO `games` (`id`, `era`) VALUES
(9, 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `messages`
--

INSERT INTO `messages` (`id`, `text`) VALUES
(31, 'Gracz Test1: liczba żelaza zwiększona o 2.'),
(32, 'Gracz Test1: produkcja żelaza zwiększona o 2.'),
(33, 'Gracz Test1: produkcja energii zwiększona o 2.'),
(34, 'Gracz Test2: liczba tytanu zwiększona o 1.'),
(35, 'Gracz Test2: produkcja żelaza zwiększona o 1.'),
(36, 'Nowa era: 2.'),
(37, 'Gracz Test1: liczba tytanu zwiększona o 2.'),
(38, 'Gracz Test1: liczba megakredytów zwiększona o 2.'),
(39, 'Gracz Test1: produkcja roślinności zwiększona o 1.'),
(40, 'Gracz Test1: produkcja ciepła zwiększona o 1.'),
(41, 'Gracz Test2: liczba megakredytów zwiększona o 1.'),
(42, 'Gracz Test2: produkcja tytanu zwiększona o 4.'),
(43, 'Gracz Test2: liczba energii zwiększona o 2.'),
(44, 'Gracz Test2: produkcja megakredytów zwiększona o 2.'),
(45, 'Gracz Test2: liczba roślinności zwiększona o 1.'),
(46, 'Gracz Test3: produkcja ciepła zwiększona o 1.'),
(47, 'Gracz Test3: liczba ciepła zwiększona o 3.'),
(48, 'Gracz Test3: produkcja żelaza zwiększona o 2.'),
(49, 'Gracz Test3: produkcja roślinności zwiększona o 3.'),
(50, 'Gracz Test3: produkcja tytanu zwiększona o 1.'),
(51, 'Gracz Test3: produkcja tytanu zwiększona o 1.'),
(52, 'Gracz Test3: liczba roślinności zwiększona o 2.'),
(53, 'Gracz Test3: liczba roślinności zwiększona o 2.'),
(54, 'Gracz Test3: liczba energii zwiększona o 2.'),
(55, 'Gracz Test3: liczba energii zwiększona o 2.'),
(56, 'Gracz Test3: produkcja żelaza zwiększona o 1.'),
(57, 'Gracz Test3: liczba tytanu zwiększona o 2.'),
(58, 'Gracz Test3: liczba megakredytów zwiększona o 2.'),
(59, 'Gracz Test2: produkcja roślinności zwiększona o 3.'),
(60, 'Nowa era: 3.'),
(61, 'Gracz Test2: produkcja energii zwiększona o 3.'),
(62, 'Gracz Test2: liczba energii zwiększona o 2.'),
(63, 'Gracz Test2: produkcja ciepła zwiększona o 1.'),
(64, 'Gracz Test1: liczba roślinności zwiększona o 1.'),
(65, 'Gracz Test1: liczba megakredytów zwiększona o 1.'),
(66, 'Gracz Test2: liczba megakredytów zwiększona o 1.'),
(67, 'Gracz Test1: liczba megakredytów zwiększona o 1.'),
(68, 'Gracz Test1: liczba megakredytów zwiększona o 1.'),
(69, 'Gracz Test1: liczba megakredytów zwiększona o 2.'),
(70, 'Gracz Test1: liczba megakredytów zwiększona o 1.'),
(71, 'Gracz Test3: produkcja energii zwiększona o 3.'),
(72, 'Gracz Test3: liczba megakredytów zwiększona o 1.'),
(73, 'Gracz Test3: liczba żelaza zwiększona o 1.'),
(74, 'Gracz Test3: produkcja megakredytów zwiększona o 4.'),
(75, 'Nowa era: 4.'),
(76, 'Gracz Test2: liczba roślinności zwiększona o 5.'),
(77, 'Nowa era: 5.'),
(78, 'Nowa era: 6.'),
(79, 'Nowa era: 7.'),
(80, 'Nowa era: 8.'),
(81, 'Nowa era: 9.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `players`
--

INSERT INTO `players` (`id`, `name`) VALUES
(28, 'Test1'),
(29, 'Test2'),
(30, 'Test3');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `productions`
--

CREATE TABLE `productions` (
  `id` int(11) NOT NULL,
  `player` int(11) NOT NULL,
  `megacredit` int(11) NOT NULL,
  `iron` int(11) NOT NULL,
  `titan` int(11) NOT NULL,
  `plant` int(11) NOT NULL,
  `energy` int(11) NOT NULL,
  `heat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `productions`
--

INSERT INTO `productions` (`id`, `player`, `megacredit`, `iron`, `titan`, `plant`, `energy`, `heat`) VALUES
(26, 28, 0, 2, 0, 1, 2, 1),
(27, 29, 2, 1, 4, 3, 3, 1),
(28, 30, 4, 3, 2, 3, 3, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `resources`
--

CREATE TABLE `resources` (
  `id` int(11) NOT NULL,
  `player` int(11) NOT NULL,
  `megacredit` int(11) NOT NULL,
  `iron` int(11) NOT NULL,
  `titan` int(11) NOT NULL,
  `plant` int(11) NOT NULL,
  `energy` int(11) NOT NULL,
  `heat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `resources`
--

INSERT INTO `resources` (`id`, `player`, `megacredit`, `iron`, `titan`, `plant`, `energy`, `heat`) VALUES
(26, 28, 8, 18, 2, 8, 2, 21),
(27, 29, 16, 8, 29, 27, 3, 25),
(28, 30, 27, 22, 16, 25, 3, 29);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `productions`
--
ALTER TABLE `productions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `player` (`player`);

--
-- Indeksy dla tabeli `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`),
  ADD KEY `player_2` (`player`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT dla tabeli `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT dla tabeli `productions`
--
ALTER TABLE `productions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT dla tabeli `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `productions`
--
ALTER TABLE `productions`
  ADD CONSTRAINT `FK_myKey2` FOREIGN KEY (`player`) REFERENCES `players` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `FK_myKey` FOREIGN KEY (`player`) REFERENCES `players` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
