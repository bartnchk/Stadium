CREATE TABLE IF NOT EXISTS `#__z_stadium_events` (
  `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `price` float(12,2) UNSIGNED NOT NULL,
  `image` varchar(64) NOT NULL,
  `date` date, 
  `time` time, 
  `published` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__z_stadium_news` (
  `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(12) UNSIGNED NOT NULL,
  `title` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(1024) NOT NULL,
  `video` varchar(64) NOT NULL,
  `published` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__z_stadium_news_categories` (
  `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `published` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__z_stadium_services` (
  `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(12) UNSIGNED NOT NULL,
  `title` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(1024) NOT NULL,
  `published` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__z_stadium_services_categories` (
  `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(64) NOT NULL,
  `published` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__z_stadium_partners` (
  `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(64) NOT NULL,
  `site` varchar(64) NOT NULL,
  `published` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__z_stadium_heads` (
  `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `surname` varchar(64) NOT NULL,
  `position` varchar(64) NOT NULL,
  `phone` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(64) NOT NULL,
  `published` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `ordering` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__z_stadium_rules` (
  `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `rules` varchar(2048) NOT NULL,
  `published` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `ordering` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



