-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:3306
-- Tid vid skapande: 11 sep 2025 kl 08:42
-- Serverversion: 5.7.24
-- PHP-version: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"; -- what does this do? 
START TRANSACTION; -- what does this do?
SET time_zone = "+00:00"; -- why is this needed?

----

CREATE TABLE `genres` (
  `gid` int(10) UNSIGNED NOT NULL,
  `mgenre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

----

INSERT INTO `genres` (`gid`, `mgenre`) VALUES
(1, 'Action/Adventure'),
(2, 'Comedy'),
(3, 'Drama'),
(4, 'Fantasy/Sci-Fi');

----

CREATE TABLE `movies` (
  `mid` int(10) UNSIGNED NOT NULL,
  `mname` varchar(100) NOT NULL,
  `myear` varchar(4) NOT NULL,
  `mgenreid` int(10) UNSIGNED NOT NULL,
  `mrating` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Index för tabell `genres`

ALTER TABLE `genres`
  ADD PRIMARY KEY (`gid`);

-- Index för tabell `movies`

ALTER TABLE `movies`
  ADD PRIMARY KEY (`mid`);

-- AUTO_INCREMENT för tabell `genres`

ALTER TABLE `genres`
  MODIFY `gid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

-- AUTO_INCREMENT för tabell `movies`

ALTER TABLE `movies`
  MODIFY `mid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;


