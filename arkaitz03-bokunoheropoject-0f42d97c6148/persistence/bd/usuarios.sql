
-- Base de datos: `dbproyuno`
CREATE DATABASE IF NOT EXISTS dbproyuno CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE dbproyuno;

-- Estructura de tabla para la tabla `members`
CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(16) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

-- Estructura de tabla para la tabla `messages`
CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `auth` varchar(255) NOT NULL,
  `recip` varchar(255) NOT NULL,
  `pm` char(1) NOT NULL,
  `time` INT UNSIGNED NOT NULL,
  `message` varchar(4096) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

-- Estructura de tabla para la tabla `friends`
CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `friend` varchar(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

-- Estructura de tabla para la tabla `profiles`
CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` varchar(4096) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
