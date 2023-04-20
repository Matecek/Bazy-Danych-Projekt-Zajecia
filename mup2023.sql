-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD
-- Host: 127.0.0.1
-- Czas generowania: 20 Kwi 2023, 17:58
=======
-- Host: localhost
-- Czas generowania: 19 Kwi 2023, 09:16
>>>>>>> 16078b413eeada38d5871c123432079cd57c2eb5
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
<<<<<<< HEAD
  `numer` int(100) NOT NULL,
  `kod pocztowy` varchar(6) NOT NULL,
  `miejscowość` varchar(30) NOT NULL
=======
  `numer` varchar(20) NOT NULL,
  `kod pocztowy` varchar(6) NOT NULL,
  `miejscowość` varchar(50) NOT NULL
>>>>>>> 16078b413eeada38d5871c123432079cd57c2eb5
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`id`, `nazwa`, `ulica`, `numer`, `kod pocztowy`, `miejscowość`) VALUES
<<<<<<< HEAD
(2, 'BBB', 'Oświecenia', 2, '32-660', 'Chełmek'),
(13, 'Mikrotech', 'Krakowska', 23, '32-600', 'Oświęcim');
=======
(13, 'bbb', 'bbb', '3', '32-590', 'Oświęcim'),
(14, 'ccc', 'ccc', '111', '1111', 'ccc'),
(15, 'aaa', 'aaaa', 'aaa', 'aaa', 'aaa');
>>>>>>> 16078b413eeada38d5871c123432079cd57c2eb5

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `towary`
--

CREATE TABLE `towary` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
<<<<<<< HEAD
  `opis` varchar(100) NOT NULL,
  `ilosc` varchar(20) NOT NULL,
  `cena` varchar(20) NOT NULL
=======
  `opis` varchar(150) NOT NULL,
  `ilosc` varchar(50) NOT NULL,
  `cena` int(11) NOT NULL
>>>>>>> 16078b413eeada38d5871c123432079cd57c2eb5
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `towary`
--

INSERT INTO `towary` (`id`, `nazwa`, `opis`, `ilosc`, `cena`) VALUES
<<<<<<< HEAD
(1, 'Laptop', 'Laptop marki Apple', '3', '6999 zł'),
(2, 'Telefon', 'Telefon iPhone 14 pro max', '2', '6499 zł');
=======
(1, 'Laptop', 'Laptop firmy: asus', '2', 3999),
(2, 'Telefon', 'Apple', '4', 6999);
>>>>>>> 16078b413eeada38d5871c123432079cd57c2eb5

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `towary`
--
ALTER TABLE `towary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT dla tabeli `towary`
--
ALTER TABLE `towary`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
>>>>>>> 16078b413eeada38d5871c123432079cd57c2eb5
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
