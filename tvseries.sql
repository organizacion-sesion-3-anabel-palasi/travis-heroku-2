DROP TABLE IF EXISTS tvseries;

CREATE TABLE IF NOT EXISTS `tvseries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` TEXT COLLATE utf8_spanish_ci NOT NULL,
  `numberOfSeasons` int(11) NOT NULL,
  `director` TEXT COLLATE utf8_spanish_ci NOT NULL,
  `startDate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `tvseries` (`name`, `numberOfSeasons`, `director`, `startDate`) VALUES 
('Manifest', 3, 'Romeo Tirone', 2018),
('El Incidente', 1, 'Oriol Paulo', 2021),
('La Mantis', 1, 'Alice Chegaray', 2017),
('L Alqueria Blanca', 12, 'Trivision', 2007),
('La princesa blanca', 1, 'Jamie Payne', 2017),
('Los Tudor', 4, 'Michael Hirst', 2007),
('The Spanish Princess', 2, 'Emma Frost', 2019);