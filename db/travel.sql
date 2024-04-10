-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: localhost
-- Čas generovania: Út 16.Máj 2023, 22:49
-- Verzia serveru: 10.4.27-MariaDB
-- Verzia PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `travel`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Offers`
--

CREATE TABLE `Offers` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `days` int(3) NOT NULL,
  `daily_places` int(3) NOT NULL,
  `description` text DEFAULT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `Offers`
--

INSERT INTO `Offers` (`id`, `title`, `info`, `days`, `daily_places`, `description`, `image_path`) VALUES
(1, 'Title 1', 'Info 1', 5, 3, 'Description 1', 'assets/images/deals-01.jpg'),
(2, 'Title 2', 'Info 2', 4, 2, 'Description 2', 'assets/images/deals-02.jpg'),
(3, 'Title 3', 'Info 3', 3, 1, 'Description 3', 'assets/images/deals-03.jpg'),
(4, 'Title 4', 'Info 4', 2, 4, 'Description 4', 'assets/images/deals-04.jpg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `pouzivatelia`
--

CREATE TABLE `pouzivatelia` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `pouzivatelia`
--

INSERT INTO `pouzivatelia` (`id`, `username`, `password`) VALUES
(10, 'kiko', '$2y$10$LXjWKrdJSnf9hiSUeTgL2OuSQ8J/C1yPgawBczLbNGS2o2PjLc56i');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Rezervácie`
--

CREATE TABLE `Rezervácie` (
  `id` int(255) NOT NULL,
  `cele_meno` varchar(50) NOT NULL,
  `mobil` varchar(11) NOT NULL,
  `pocet_osob` int(8) NOT NULL,
  `check_in` date NOT NULL,
  `destinacia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `Offers`
--
ALTER TABLE `Offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `pouzivatelia`
--
ALTER TABLE `pouzivatelia`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `Rezervácie`
--
ALTER TABLE `Rezervácie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `Offers`
--
ALTER TABLE `Offers`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `pouzivatelia`
--
ALTER TABLE `pouzivatelia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pre tabuľku `Rezervácie`
--
ALTER TABLE `Rezervácie`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
