-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 29, 2024 alle 22:39
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musictag`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `canzoni`
--

CREATE TABLE `canzoni` (
  `id_canzoni` int(11) NOT NULL,
  `titolo` varchar(255) NOT NULL,
  `artista` varchar(255) NOT NULL,
  `featuring` varchar(255) DEFAULT NULL,
  `album` varchar(255) NOT NULL DEFAULT 'singolo',
  `anno` int(4) NOT NULL,
  `ascolti` int(11) NOT NULL,
  `genere` varchar(255) NOT NULL,
  `emozioni` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `canzoni`
--

INSERT INTO `canzoni` (`id_canzoni`, `titolo`, `artista`, `featuring`, `album`, `anno`, `ascolti`, `genere`, `emozioni`) VALUES
(1, 'Lie', 'NF', '', 'Perception', 2017, 579111974, 'rap', 'sofferenza_delusione'),
(2, 'Alone', 'Marshmello', '', 'Alone', 2016, 599211006, 'edm', 'speranza_solitudine'),
(3, 'Cupido', 'Sfera Ebbasta', 'Quavo', 'Rockstar', 2018, 119995910, 'trap', 'amore_trionfo'),
(4, 'Could You Be Loved', 'Bob Marley', 'The Wailers', 'Uprising', 1980, 910742422, 'reggae', 'speranza_amore'),
(5, 'Ginza', 'J Balvin', '', 'Energia', 2016, 516009811, 'reggaeton', 'energia'),
(6, 'In The End', 'Linking Park', '', 'Hybrid Theory', 2000, 2019204840, 'rock', 'rabbia_trionfo'),
(7, 'Billie Jean', 'Michael jackson', '', 'Thriller', 1982, 1739827459, 'pop', 'amore_rivincita'),
(8, 'WE GOTTA POWER', 'Kageyama', '', 'Hironobu', 1993, 4341898, 'colonne_sonore', 'trionfo_motivazione'),
(9, 'Zap', 'Dirty Loops', 'Cori Wong', 'Turbo', 2021, 803691, 'fusion', 'gioia_energia'),
(10, 'Who Did You Think I Was', 'Jonh Mayer', '', 'Where The Light is', 2008, 18523581, 'rock', 'energia'),
(11, 'Let You Down', 'NF', '', 'Perception', 2017, 1466070628, 'rap', 'tristezza_sofferenza');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id_utenti` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id_utenti`, `username`, `password`) VALUES
(2, 'simone.lucisano@itisgrassi.edu.it', '$2y$10$stfoQjrxKmAn9qHg/mFqC.e');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `canzoni`
--
ALTER TABLE `canzoni`
  ADD PRIMARY KEY (`id_canzoni`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id_utenti`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `canzoni`
--
ALTER TABLE `canzoni`
  MODIFY `id_canzoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id_utenti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
