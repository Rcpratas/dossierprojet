-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jun-2024 às 07:10
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `baseparrot`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `annonces`
--

CREATE TABLE `annonces` (
  `id` int(6) UNSIGNED NOT NULL,
  `marque` varchar(255) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `annee` year(4) NOT NULL,
  `kilometrage` int(11) NOT NULL,
  `prix` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `annonces`
--

INSERT INTO `annonces` (`id`, `marque`, `modele`, `annee`, `kilometrage`, `prix`) VALUES
(1, 'Renault', 'Megane', '2016', 120000, 5000),
(3, 'Opel', 'Astra', '2024', 8676665, 10000),
(4, 'Peugeot', '207', '0000', 155452, 5565),
(5, 'Opel', 'Astra', '0000', 100000, 20000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `horaires`
--

CREATE TABLE `horaires` (
  `id` int(6) UNSIGNED NOT NULL,
  `jour` varchar(255) NOT NULL,
  `am_ouvert` time NOT NULL,
  `am_ferme` time NOT NULL,
  `pm_ouvert` time NOT NULL,
  `pm_ferme` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `horaires`
--

INSERT INTO `horaires` (`id`, `jour`, `am_ouvert`, `am_ferme`, `pm_ouvert`, `pm_ferme`) VALUES
(1, 'lundi', '08:30:00', '12:30:00', '14:00:00', '18:30:00'),
(2, 'mardi', '08:30:00', '12:30:00', '14:00:00', '18:30:00'),
(3, 'mercredi', '08:30:00', '12:30:00', '14:00:00', '18:30:00'),
(4, 'jeudi', '08:30:00', '12:30:00', '14:00:00', '18:30:00'),
(5, 'vendredi', '08:30:00', '12:30:00', '14:00:00', '18:30:00'),
(6, 'samedi', '08:30:00', '12:30:00', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `services`
--

CREATE TABLE `services` (
  `id` int(6) UNSIGNED NOT NULL,
  `label` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `services`
--

INSERT INTO `services` (`id`, `label`, `description`) VALUES
(1, 'Mecanique', 'reparations'),
(2, 'Carrosserie', 'peinture exterieur'),
(4, 'Entretien', 'feux');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'parrot', 'vincent@parrot.com', '$2y$10$0heYApfG/PpAi8RAnr4oTukfaCPL6il.4Yq6ZAl4BBksutB7SF5ua');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `horaires`
--
ALTER TABLE `horaires`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `horaires`
--
ALTER TABLE `horaires`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `services`
--
ALTER TABLE `services`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
