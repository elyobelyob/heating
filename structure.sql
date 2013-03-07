--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group` smallint(6) unsigned NOT NULL,
  `day` int(2) NOT NULL,
  `hourOn` smallint(6) NOT NULL,
  `minuteOn` smallint(6) NOT NULL,
  `hourOff` smallint(6) NOT NULL,
  `minuteOff` smallint(6) NOT NULL,
  `heatingOn` tinyint(1) NOT NULL,
  `waterOn` tinyint(1) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `group` (`group`),
  KEY `day` (`day`),
  KEY `minuteOn` (`minuteOn`),
  KEY `hourOn` (`hourOn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=98 ;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_groups`
--

DROP TABLE IF EXISTS `schedule_groups`;
CREATE TABLE IF NOT EXISTS `schedule_groups` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;