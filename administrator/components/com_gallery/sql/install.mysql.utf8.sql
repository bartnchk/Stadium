CREATE TABLE IF NOT EXISTS `#__z_stadium_gallery` (
  `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT,
  `file` varchar(64) NOT NULL,
  `parent` varchar(64),
  `published` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


