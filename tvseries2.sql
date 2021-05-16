DROP TABLE IF EXISTS t_vseries;

CREATE TABLE IF NOT EXISTS `t_vseries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` TEXT COLLATE utf8_spanish_ci NOT NULL,
  `numberOfSeasons` TEXT COLLATE utf8_spanish_ci NOT NULL,
  `director` TEXT COLLATE utf8_spanish_ci NOT NULL,
  `startDate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `t_vseries` (`name`, `numberOfSeasons`, `director`, `startDate`) VALUES 
('Manifest', '3', 'Romeo Tirone', '2018-09-24'),
('El Incidente', '1', 'Oriol Paulo', '2021-0-12'),
('La Mantis', '1', 'Alice Chegaray', '2017-12-16'),
('L Alqueria Blanca', '12', 'Trivision', '2007-09-05'),
('La princesa blanca', '1', 'Jamie Payne', '2017-10-24'),
('Los Tudor', '4', 'Michael Hirst', '2007-06-07'),
('The Spanish Princess', '2', 'Emma Frost', '2019-12-01');