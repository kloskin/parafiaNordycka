-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Gru 2022, 22:18
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `imie` varchar(100) NOT NULL,
  `nazwisko` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `haslo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_d` date NOT NULL,
  `id_donate` int(11) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id_users`, `imie`, `nazwisko`, `login`, `haslo`, `email`, `data_d`, `id_donate`, `status`) VALUES
(6, 'admin', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@', '0000-00-00', 0, 2),
(7, 'maciej', 'kaczmarek', 'mkaczm1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'mkaczm@', '0000-00-00', 0, 0),
(8, 'filip', 'kloska', 'fkloska', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'fkloska@marek.pl', '0000-00-00', 0, 0),
(10, 'Marek', 'Grechuta', 'mgrechu', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'mgrechu@email.com', '0000-00-00', 0, 0),
(11, 'Filip', 'M', 'filipm', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'sd@asd.pl', '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uslugi`
--

CREATE TABLE `uslugi` (
  `id_uslug` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `uslugi`
--

INSERT INTO `uslugi` (`id_uslug`, `nazwa`, `cena`) VALUES
(1, 'rezerwacja miejsca w pierwszej ławce', 10),
(2, 'Rezerwacja całej pierwszej ławki (5os.)', 40),
(3, 'Rozgrzeszenie/Spowiedź', 100),
(4, 'Pogrzeb', 500),
(5, 'Pogrzeb Wikingów', 1100),
(6, 'Modlitwa o zdrowie/szczęście/trwałą miłość', 15),
(7, 'Chrzest', 100);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zakup_uslug`
--

CREATE TABLE `zakup_uslug` (
  `id_zakup` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_uslugi` int(11) NOT NULL,
  `data` date NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `zakup_uslug`
--

INSERT INTO `zakup_uslug` (`id_zakup`, `id_users`, `id_uslugi`, `data`, `email`) VALUES
(6, 6, 1, '2022-12-02', 'asdas'),
(7, 7, 1, '2022-12-02', '123215'),
(8, 7, 2, '2022-12-02', 'essabyqu@.pl'),
(9, 7, 4, '2022-12-02', 'elo@.pl'),
(10, 7, 3, '2022-12-02', 'elo@.pl'),
(11, 7, 5, '2022-12-02', 'elo@.pl'),
(12, 7, 3, '2022-12-02', 'fkloska1@gmail.com'),
(13, 7, 1, '2022-12-02', 'elo@.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indeksy dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`id_uslug`);

--
-- Indeksy dla tabeli `zakup_uslug`
--
ALTER TABLE `zakup_uslug`
  ADD PRIMARY KEY (`id_zakup`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `id_uslug` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `zakup_uslug`
--
ALTER TABLE `zakup_uslug`
  MODIFY `id_zakup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
