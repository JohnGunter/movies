DROP TABLE IF EXISTS `movies`;
CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `actor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;