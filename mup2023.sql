-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 25 Maj 2023, 23:38
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `mup2023`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `ulica` varchar(50) NOT NULL,
  `numer` varchar(20) NOT NULL,
  `kod pocztowy` varchar(6) NOT NULL,
  `miejscowość` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`id`, `nazwa`, `ulica`, `numer`, `kod pocztowy`, `miejscowość`) VALUES
(1, 'Microtech', 'Oświecenia', '32', '32-600', 'Oświęcim'),
(2, 'Komputronik', 'Chrzanowska', '12', '32-590', 'Chrzanów'),
(19, 'Apple', 'Jana Pawła II', '34', '30-000', 'Kraków');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(20) NOT NULL,
  `opis` varchar(50) NOT NULL,
  `wielkosc` varchar(10) NOT NULL,
  `cena` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `menu`
--

INSERT INTO `menu` (`id`, `nazwa`, `opis`, `wielkosc`, `cena`) VALUES
(1, 'Margarita', 'Klasyczna pizza z samym serem', '40 cm', '28 zł'),
(4, 'Capricciosa', 'Klasyczna pizza z szynką i pieczarkami', '40 cm', '30 zł'),
(5, '', '', '', ''),
(6, '', '', '', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `operacje`
--

CREATE TABLE `operacje` (
  `id` int(11) NOT NULL,
  `idKlient` int(11) NOT NULL,
  `idTowar` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `operacje`
--

INSERT INTO `operacje` (`id`, `idKlient`, `idTowar`, `data`) VALUES
(12, 1, 30, '2023-05-23'),
(13, 19, 1, '2023-05-23'),
(14, 19, 1, '2023-05-24');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `towary`
--

CREATE TABLE `towary` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `opis` varchar(100) NOT NULL,
  `ilosc` varchar(20) NOT NULL,
  `cena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `towary`
--

INSERT INTO `towary` (`id`, `nazwa`, `opis`, `ilosc`, `cena`) VALUES
(1, 'Laptop', 'Laptop marki Apple', '3', '6999 zł'),
(2, 'Telefon', 'Telefon iPhone 14 pro max', '2', '6499 zł'),
(30, 'Tablet', 'iPad', '5', '5499 zł');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `imie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `imie`) VALUES
(7, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `operacje`
--
ALTER TABLE `operacje`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `towary`
--
ALTER TABLE `towary`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT dla tabeli `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `operacje`
--
ALTER TABLE `operacje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `towary`
--
ALTER TABLE `towary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
