CREATE TABLE IF NOT EXISTS `#__z_stadium_team` (
  `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `surname` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(64) NOT NULL,
  `category` varchar(64) NOT NULL,
  `role` varchar(64) NOT NULL,
  `number` tinyint(1) UNSIGNED NOT NULL,
  `published` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;